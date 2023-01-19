<?php

require_once "api/libs/Database.class.php";
require_once "api/libs/Folder.class.php";
require_once "api/libs/Notes.class.php";

// session_start();
// $_SESSION['username'] = "praveen";
/**
 * Below is the obj construct for folder
 */
$a = new Folder("31");
// //$a->createNew("CSC Notes");
// echo "\nFolder Name :" . $a->getName() . "\n";
// echo "Owner Name : " . $a->getOwner(). "\n";
// echo "created at : " . $a->createdAt() . "\n";
// echo "Totel count : " . $a->countallNotes() . "\n";
// echo "All Notes : "; print_r($a->getAllNotes());
// echo "\nId : " . $a->getId() . "\n";
// echo "Renamed Folder : " . $a->rename("Maths Notes") . "\n";
// echo "Changed Folder Name :" . $a->getName() . "\n";
// echo "Deleted Folder : " . $a->delete() . "\n";

/**
 * Below is the obj construct for Notes
 */
//$b = new Notes("54");
// //$b->createNew("31", "Maths Notes", "This is the notes for Maths");
// echo "\nFolder Id :" . $b->getFolder_id() . "\n";
// echo "Owner Name : " . $b->getOwner(). "\n";
// echo "created at : " . $b->createdAt() . "\n";
// echo "Title : " . $b->getTitle() . "\n";
// echo "Body : " . $b->getbody() . "\n";

// $b->setTitle("Title changed");
// $b->setbody("Body changed");

// echo "New Title : " . $b->getTitle() . "\n";
// echo "New Body : " . $b->getbody() . "\n";

// print_r($a->getallFolders());



$b = new Notes();
$b->createNew("33", "Maths Notes", "This is the notes for Maths");
