<?php

namespace App\Http\Controllers;

use App\Models\Answer;
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

    public function administration()
    {
        return view("admin.administration");
    }

    public function questionnaire()
    {
        $questions = Question::all();
        return view("admin.questionnaire", compact("questions"));
    }

    public function reponses()
    {
        $questions = Question::all();
        $reponses = Answer::all();
        return view("admin.reponses", compact("questions", "reponses"));
    }
}
