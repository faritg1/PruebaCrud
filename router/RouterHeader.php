<?php

namespace Router;

class RouterHeader {
    protected $method;
    protected $data;

    public function set_method($method) {
        $this->method = $method;
    }

    public function set_data($data) {
        $this->data = $data;
    }

    public function route($controller, $id) {

        $resource = new $controller();

        switch($this->method) {

        case "get":
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