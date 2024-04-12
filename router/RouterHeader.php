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
            $resource->Put($this->data, $this->$id);
            break;

        case "delete":
            $resource->Delete($id);
            break;
        }
    }
    
}