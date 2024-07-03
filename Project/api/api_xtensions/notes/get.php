<?php

${basename(__FILE__, '.php')} = function () {
    if ($this->get_request_method() == "POST") {
        if ($this->isAuthenticated()) {
            if (isset($this->_request['id'])) {
                $id = $this->_request['id'];
                $new = new Notes($id);
                if ($new) {
                    $data = [
                        "Status" => "Note Found",
                        "Note id" => $new->getId(),
                        "Folder id" => $new->getFolder_id(),
                        "Note Title" => $new->getTitle(),
                        "Note Body" => $new->getBody(),
                        "created at" => $new->createdAt(),
                        "updated at" => $new->updatedAt()
                    ];
                    $this->response($this->json($data), 200);
                } else {
                    $data = [
                        "Status" => "No Notes Found"
                    ];
                    $this->response($this->json($data), 400);
                }
            } else {
                $data = [
                    "Status" => "Invalid Inputs"
                ];
                $this->response($this->json($data), 417);
            }
        } else {
            $data = [
                "Status" => "Authentication failed, please login again"
            ];
            $this->response($this->json($data), 400);
        }
    } else {
        $data = [
            "Status" => "Method not allowed"
        ];
        $this->response($this->json($data), 400);
    }
};
