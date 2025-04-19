<?php
namespace Test;

class Example {
    // This is a test comment
    protected $data = [];

    public function addData($key, $value) {
        $this->data[$key] = $value;
    }
}

$example = new Example();
$example->addData("test", "value");
?>