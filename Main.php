<?php

class Employee {
    protected $name;
    protected $id;
    protected $position;

    public function __construct($name, $id, $position) {
        $this->name = $name;
        $this->id = $id;
        $this->position = $position;
    }

    public function getSalary() {
        return 0;
    }

    public function getName() {
        return $this->name;
    }

    public function getId() {
        return $this->id;
    }

    public function getPosition() {
        return $this->position;
    }
}
?>
