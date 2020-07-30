<?php

namespace App\Http\Controllers\blog;


class blog
{
    public $status = false;
    public $blog = null;
    public $blogs = [];
    public function __construct($data = null)
    {

    }

    public function getAllByStatus()
    {
        # code...
    }


    public function getByVisit()
    {
        $this->blog = [
            'title' => 'Hola mundo'
        ];
    }
}
