<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
class HomeController extends Controller
{
    function index()
    {
    $pagetitle = 'Home';

    return view('Home', ['pagetitle' => $pagetitle]);
    }
}

