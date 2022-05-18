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
        $six1 = Answer::where("title", "Occulus Rift/s")->count();
        $six2 = Answer::where("title", "HTC Vive")->count();
        $six3 = Answer::where("title", "Windows Mixed Reality")->count();
        $six4 = Answer::where("title", "PSVR")->count();

        $question_six = ['Occulus Rift/s','HTC Vive','Windows Mixed Reality','PSVR'];
        $six = [$six1, $six2, $six3, $six4];


        $seven1 = Answer::where("title", "SteamVR")->count();
        $seven2 = Answer::where("title", "Occulus store")->count();
        $seven3 = Answer::where("title", "Viveport")->count();
        $seven4 = Answer::where("title", "Playstation VR")->count();
        $seven5 = Answer::where("title", "Google Play")->count();
        $seven6 = Answer::where("title", "Windows store")->count();

        $question_seven = ['SteamVR','Occulus store','Viveport','Playstation VR', 'Google Play', 'Windows store'];     
        $seven = [$seven1, $seven2, $seven3, $seven4, $seven5, $seven6];  


        $ten1 = Answer::where("title", "regarder des émissions TV en direct")->count();
        $ten2 = Answer::where("title", "regarder des films")->count();
        $ten3 = Answer::where("title", "jouer en solo")->count();
        $ten4 = Answer::where("title", "jouer en team")->count();

        $question_ten = ['regarder des émissions TV en direct','regarder des films','jouer en solo','jouer en team'];     
        $ten = [$ten1, $ten2, $ten3, $ten4];


        $radar_label = ["1", "2", "3", "4", "5"];
        $eleven1 = Answer::where("title", "1")->where("question_id", "11")->count();
        $eleven2 = Answer::where("title", "2")->where("question_id", "11")->count();
        $eleven3 = Answer::where("title", "3")->where("question_id", "11")->count();
        $eleven4 = Answer::where("title", "4")->where("question_id", "11")->count();
        $eleven5 = Answer::where("title", "5")->where("question_id", "11")->count();

        $eleven = [$eleven1, $eleven2, $eleven3, $eleven4, $eleven4, $eleven5];

        $twelve1 = Answer::where("title", "1")->where("question_id", "12")->count();
        $twelve2 = Answer::where("title", "2")->where("question_id", "12")->count();
        $twelve3 = Answer::where("title", "3")->where("question_id", "12")->count();
        $twelve4 = Answer::where("title", "4")->where("question_id", "12")->count();
        $twelve5 = Answer::where("title", "5")->where("question_id", "12")->count();

        $twelve = [$twelve1, $twelve2, $twelve3, $twelve4, $twelve4, $twelve5];

        $thirteen1 = Answer::where("title", "1")->where("question_id", "13")->count();
        $thirteen2 = Answer::where("title", "2")->where("question_id", "13")->count();
        $thirteen3 = Answer::where("title", "3")->where("question_id", "13")->count();
        $thirteen4 = Answer::where("title", "4")->where("question_id", "13")->count();
        $thirteen5 = Answer::where("title", "5")->where("question_id", "13")->count();

        $thirteen = [$thirteen1, $thirteen2, $thirteen3, $thirteen4, $thirteen4, $thirteen5];

        $fourteen1 = Answer::where("title", "1")->where("question_id", "14")->count();
        $fourteen2 = Answer::where("title", "2")->where("question_id", "14")->count();
        $fourteen3 = Answer::where("title", "3")->where("question_id", "14")->count();
        $fourteen4 = Answer::where("title", "4")->where("question_id", "14")->count();
        $fourteen5 = Answer::where("title", "5")->where("question_id", "14")->count();

        $fourteen = [$fourteen1, $fourteen2, $fourteen3, $fourteen4, $fourteen4, $fourteen5];

        $fifteen1 = Answer::where("title", "1")->where("question_id", "15")->count();
        $fifteen2 = Answer::where("title", "2")->where("question_id", "15")->count();
        $fifteen3 = Answer::where("title", "3")->where("question_id", "15")->count();
        $fifteen4 = Answer::where("title", "4")->where("question_id", "15")->count();
        $fifteen5 = Answer::where("title", "5")->where("question_id", "15")->count();

        $fifteen = [$fifteen1, $fifteen2, $fifteen3, $fifteen4, $fifteen4, $fifteen5];

        return view("admin.administration", compact(
            "six", 
            "question_six", 
            "seven", 
            "question_seven", 
            "ten", 
            "question_ten", 
            "radar_label", 
            "eleven", 
            "twelve", 
            "thirteen",
            "fourteen",
            "fifteen"
        ));
        
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