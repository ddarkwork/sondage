<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SurveyController extends Controller
{
    public function index()
    {
        return view("users.survey");
    }

    public function contact()
    {
        return view("users.contact");
    }

    public function finalisation()
    {
        return view("users.finalisation");
    }
}
