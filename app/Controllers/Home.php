<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function update($id, $otro=5): string
    {
        echo $id.' '.$otro;
        return view('welcome_message');
    }
}
