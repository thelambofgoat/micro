<?php
namespace App\Controllers;

class BalanceController extends Controller {

    public function __construct()
    {
        $this->middleware('auth');
    }

}