<?php


namespace App\Http\Controllers;


class HomeController
{
    public function index()
    {
        return 11;
    }

    public function homePageContent()
    {
        return response([
            'statusCode' => 200,
            'data' => '32131231123'
        ]);
    }
}
