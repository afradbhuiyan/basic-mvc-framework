<?php

class Home extends controller
{
    public function index($a = null, $b = null, $c = null)
    {
        echo "index from " . __CLASS__ . " controller";
    }
}