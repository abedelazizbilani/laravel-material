<?php
/**
 * Created by PhpStorm.
 * User: abed.bilani
 * Date: 6/12/2018
 * Time: 3:08 PM
 */

namespace App\Http\Controllers\app;


use App\Http\Controllers\Controller;

class HomeController extends Controller
{
    public function index()
    {
        return view('welcome');
    }
}