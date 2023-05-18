<?php

namespace App\Controllers;

class SystemInfo extends BaseController
{
    public function index()
    {
        return phpinfo();
    }
}
