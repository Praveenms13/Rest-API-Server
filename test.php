<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update and Delete with Toast</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>

<div class="container mt-5">
    <?php
    ini_set("display_errors", 1);
    ini_set("display_startup_errors", 1);
    error_reporting(E_ALL);

    $db_host = "localhost";
    $db_name = "myhealth_mhv";
    $db_user = "myhealth_mhv";
    $db_pass = "pr6@Pj]6Khna";
    $conn = new mysqli($db_host, $db_user, $db_pass, $db_name);

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    $sql = "SELECT SQL_CALC_FOUND_ROWS * FROM (
                SELECT psd.*,mp.reminder_issue,(psd.quantity-IFNULL(SUM(pssd.qty),0)) as balance_quantity,
                DATE_FORMAT(psd.created_on,'%d %b %Y') as added,DATE_FORMAT(psd.modified_on,'%d %b %Y') as modified,
                ifnull(mp.reminder_expiry,0) as reminder_expiry,'-1' as total_count 
                FROM `pharmacy_stock_detail` psd 
                LEFT OUTER JOIN `pharmacy_sold_stock_detail` pssd 
                ON pssd.r_stock_id = psd.id 
                LEFT OUTER JOIN master_corporate mp 
                ON mp.id = pssd.r_pharmacy_id 
                WHERE psd.drug_expiry_date > '2024-11-01' 
                AND psd.isactive=1 
                AND psd.r_pharmacy_id='49' 
                AND psd.ohc='1' 
                AND psd.phar_ids='18' 
                AND psd.drug_batch LIKE 'D1%'  
                GROUP BY psd.id 
                HAVING balance_quantity > '0' 
                ORDER BY psd.drug_name ASC
            ) AS countTble 
            UNION 
            (SELECT '','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','','',FOUND_ROWS() as total_count)";

    $result_prescription = $conn->query($sql);
    $row_number = 1;

    echo "<table class='table table-bordered'>";
    echo "<tr>
            <th>Row Number</th>
            <th>ID</th>
            <th>Drug Name</th>
            <th>Drug Batch</th>
            <th>Quantity</th>
            <th>Current Availability</th>
            <th>Current Availability to Update</th>
            <th>Actions</th>
          </tr>";

    while ($row = $result_prescription->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row_number++ . "</td>";
        echo "<td>" . $row['id'] . "</td>";
        echo "<td>" . $row['drug_name'] . "</td>";
        echo "<td>" . $row['drug_batch'] . "</td>";
        echo "<td>" . $row['quantity'] . "</td>";
        echo "<td>" . $row['balance_quantity'] . "</td>";
        echo "<td>
            <input type='number' name='updated_quantity' value='" . $row['balance_quantity'] . "' class='updated-quantity'>
            <input type='hidden' name='id' value='" . $row['id'] . "' class='id'>
          </td>";
        echo "<td style='display: flex; gap: 10px;'>
            <button type='button' class='btn btn-primary update-btn'>Update</button>
            <button type='button' class='btn btn-danger delete-btn'>Delete</button>
          </td>";
        echo "</tr>";
    }

    echo "</table>";
    ?>
</div>

<!-- Toast Notification -->
<div class="toast-container position-fixed bottom-0 end-0 p-3">
    <div id="actionToast" class="toast" role="alert" aria-live="assertive" aria-atomic="true">
        <div class="toast-header">
            <strong class="me-auto">Action Status</strong>
            <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
        </div>
        <div class="toast-body">
            Action completed successfully.
        </div>
    </div>
</div>

<!-- Bootstrap JS and Popper.js -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"></script>

<script>
    document.querySelectorAll('.update-btn').forEach(function(button) {
        button.addEventListener('click', function() {
            const row = button.closest('tr');
            const id = row.querySelector('.id').value;
            const updatedQuantity = row.querySelector('.updated-quantity').value;

            fetch('modify.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ action: 'update', id: id, updated_quantity: updatedQuantity })
            })
            .then(response => response.json())
            .then(data => {
                var toastElement = document.getElementById('actionToast');
                var toastBody = toastElement.querySelector('.toast-body');
                toastBody.textContent = data.message; // Display the message from the server response
                var toast = new bootstrap.Toast(toastElement);
                toast.show();
            })
            .catch(error => {
                console.error('Error:', error);
                var toastElement = document.getElementById('actionToast');
                var toastBody = toastElement.querySelector('.toast-body');
                toastBody.textContent = "An error occurred: " + error.message; // Handle errors
                var toast = new bootstrap.Toast(toastElement);
                toast.show();
            });
        });
    });

    document.querySelectorAll('.delete-btn').forEach(function(button) {
        button.addEventListener('click', function() {
            const row = button.closest('tr');
            const id = row.querySelector('.id').value;

            fetch('modify.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/json'
                },
                body: JSON.stringify({ action: 'delete', id: id })
            })
            .then(response => response.json())
            .then(data => {
                var toastElement = document.getElementById('actionToast');
                var toastBody = toastElement.querySelector('.toast-body');
                toastBody.textContent = data.message; // Display the message from the server response
                var toast = new bootstrap.Toast(toastElement);
                toast.show();
            })
            .catch(error => {
                console.error('Error:', error);
                var toastElement = document.getElementById('actionToast');
                var toastBody = toastElement.querySelector('.toast-body');
                toastBody.textContent = "An error occurred: " + error.message; // Handle errors
                var toast = new bootstrap.Toast(toastElement);
                toast.show();
            });
        });
    });
</script>

</body>
</html>
