<?php

namespace MyWeb\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use MyWeb\Skill as Skill;
use MyWeb\About as About;
use MyWeb\Experience as Exp;
use MyWeb\Language as Language;
use MyWeb\Portfolio as Portfolio;
use MyWeb\Message as Message;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;

class HomeController extends Controller
{
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/
    
    public function indexEnglish()
    {
       $exps = Exp::where('id_language', 2)->get()->sortByDesc("since");
       $about = About::where('id_language', 2)->first();       
       $skills = Skill::all()->sortByDesc("porcentaje");
       $portfolio = Portfolio::all()->sortByDesc("id");
       $languages = Language::all()->sortByDesc("percentage");
       return \View::make('inicio', compact('skills','about','languages','exps','portfolio'));
    }
    
    public function indexSpanish()
    {
       $exps = Exp::where('id_language', 1)->get()->sortByDesc("since");
       $about = About::where('id_language', 1)->first();
       $skills = Skill::all()->sortByDesc("porcentaje");
       $portfolio = Portfolio::all()->sortByDesc("id");
       $languages = Language::all()->sortByDesc("percentage");
       return \View::make('inicioSpanish', compact('skills','about','languages','exps','portfolio'));
    }
    
    public function storeMessage(Request $request)
    {
        
        $rules = array(
            'sender' => 'required',
            'email' => 'required',
            'message' => 'required',
        );
            
        $validator = Validator::make(Input::all(), $rules);
                       
        if ($validator->fails()) {
            
            $messages = $validator->messages();
            //return redirect('/')->withErrors($messages);        
            return ("<div class='alert alert-dismissable alert-danger'>
                <button type='button' class='close' data-dismiss='alert'>×</button>
                <b>Sorry! Your message has not been sent</b>
                </div>");            
                
        }else{
            
            $message = new Message; // Creando el objecto del modelo
            $message -> create($request->all());
            //return redirect('/')->with('message', 'Your message has been sent!');     
            return ("<div class='alert alert-dismissable alert-success'>
                <button type='button' class='close' data-dismiss='alert'>×</button>
                <b>Your message has been sent!</b>
                </div>");
            /*$response = array(
                'status' => 'success',
                'msg' => 'Your message has been sent!',
            );
            return \Response::json($response);*/
                
        }
            
    }
}
