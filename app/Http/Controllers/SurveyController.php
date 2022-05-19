<?php

namespace App\Http\Controllers;

use App\Models\Answer;
use App\Models\Identify;
use App\Models\Question;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SurveyController extends Controller
{
    public function index()
    {
        $questions = Question::all();
        return view("users.survey", compact("questions"));
    }

    public function contact()
    {
        return view("users.contact");
    }


    public function finalisation($token = null)
    {
        if(!isset($token))
        {
            return redirect()->route('index');
        }
        return view("users.finalisation",compact("token"));
    }

    public function reponse($token)
    {

        $url=url('/reponse').'/'.$token;
        $reponses=Identify::where("url",$url)->first()->answers;
        return view("users.reponses", compact("reponses"));
    }



    public function store(Request $request)
    {

        try{
        $token=$this->generateToken();
        DB::beginTransaction();
        $email=$request->reponse[Question::where('title','Votre adresse mail')->first()->id];
        $identify=new Identify();
        $identify->email=$email;
        $identify->url=url('/reponse').'/'.$token;
        $identify->save();
        $questions = Question::all();
        foreach($questions as $question)
        {
            if($request->reponse[$question->id] == null)
            {
                DB::rollBack();
                return back();
            }
            else{
            $answer = new Answer();
            $answer->identify_id =$identify->id;
            $answer->question_id=$question->id;
            $answer->title=$request->reponse[$question->id];
            $answer->save();
            }
        }
         DB::commit();
        return redirect()->route('finalisation',$token);

    }
    catch(\Exception $e)
    {
        DB::rollBack();
        return back();
    }
    }

    function generateToken() {
        $length = 16;
        $characters = '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ';
        $charactersLength = strlen($characters);
        $token = '';
        for ($i = 0; $i < $length; $i++) {
            $token .= $characters[rand(0, $charactersLength - 1)];
        }
        return $token;
    }
}
