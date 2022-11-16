<?php

use DoAn as GlobalDoAn;

class DoAn
{
    public $name;
    public $price;
    public $status;
    public $owner;
    public $type;
    public function __construct( $id, $name, $price,$type,$status)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
        $this->type = $type;
        $this->status = $status;
    }
}