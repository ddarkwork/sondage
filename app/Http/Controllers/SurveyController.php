<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Identify;
use App\Models\Question;
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
