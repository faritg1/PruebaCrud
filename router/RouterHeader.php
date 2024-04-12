<?php

namespace Router;

class RouterHeader {
    protected $method;
    protected $data;

    public function setMethod($method) {
        $this->method = $method;
    }

    public function setData($data) {
        $this->data = $data;
    }

    public function route($controller, $id) {

        $resource = new $controller();

        switch($this->method) {

        case "get":
            if ($id && $id == "create")
                $resource->create();
            else
                $resource->Get();
            break;

        case "post":
            $resource->Post($this->data);
            break;

        case "put":
            if ($id && $id == "update")
                if ($id && is_numeric($id)) {
                    $resource->Put($this->data, $id);
                } else {
                    echo "Error";
                }
            break;

        case "delete":
            $resource->Delete($id);
            break;
        }
    }
    
}