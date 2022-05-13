<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Identify;
use App\Models\Question;
use Illuminate\Http\Request;

class AdminController extends Controller
{

    public function __construct()
    {
        // $this->middleware('auth');
    }

    public function administration()
    {
            $graphData = [];
            return view("admin.administration", ['graphData' => $graphData]);
        
    }
        
    public function questionnaire()
    {
        $questions = Question::all();
        return view("admin.questionnaire", compact("questions"));
    }
    
    public function reponses()
    {
        $questions = Question::all();
        $answers = Answer::all();
        $identifies = Identify::all();
        return view("admin.reponses", compact("questions", "answers", "identifies"));
    }
    
}