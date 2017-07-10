<?php

namespace MyWeb\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use MyWeb\Message as Message;
use MyWeb\About as About;
use MyWeb\Language as Language;
use MyWeb\Skill as Skill;
use MyWeb\Experience as Experience;
use MyWeb\Portfolio as Portfolio;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use Illuminate\Support\Facades\Redirect;
use Intervention\Image\Facades\Image;

class AdminController extends Controller
{
    /*public function __construct()
    {
        $this->middleware('auth');
    }*/
    
    public $MESSAGE_EXITO="¡Registro guardado con &eacute;xito!";
    public $MESSAGE_ELIMINAR="¡Registro guardado con &eacute;xito!";
    
    public function index()
    {
       $messages = Message::orderBy("created_at","desc")->limit(5)->offset(5)->get();
       return \View::make('admin.admin', compact('messages'));
    }
    
    public function editAbout()
    {
       $about = About::findOrFail(1);
       $messages = Message::orderBy("created_at","desc")->limit(5)->offset(5)->get();
       return \View::make('admin.editAbout', compact('about','messages'));
    }
    
    public function editAboutSpa()
    {
       $about = About::where('id_language', 1)->first();
       $messages = Message::orderBy("created_at","desc")->limit(5)->offset(5)->get();
       return \View::make('admin.editAboutSpa', compact('about','messages'));
    }
    
    public function storeAbout(Request $request)
    {
        
        /*$rules = array(
            'resume' => 'required',
        );
            
        $validator = Validator::make(Input::all(), $rules);
                       
        if ($validator->fails()) {
            
            $messages = $validator->messages();
            return redirect('section/aboutMe')->withErrors($messages);        
                
        }else{
            
            $about = new About; // Creando el objecto del modelo
            $about -> create($request->all());
            return redirect('section/aboutMe')->with('message', '¡Registro guardado con &eacute;xito!');       
                
        }*/
        
        $rules = array(
            'first_name' => 'required',
            'last_name' => 'required',
            'resume' => 'required',
            'email' => 'required | email',
            'phone' => 'required',
            'address' => 'required',
            'position' => 'required',
            'id_language' => 'required',
            'image' => 'mimes:jpeg,jpg,png',
        );
            
        $validator = Validator::make(Input::all(), $rules);
                       
        if ($validator->fails()) {
            
            $messages = $validator->messages();
            return redirect('secure/section/about')->withErrors($messages);        
                
       }else{
           
            $file = Input::file('image');
            if($file != ""){
                //Creamos una instancia de la libreria instalada   
                $image = Image::make(Input::file('image'));
                //Ruta donde queremos guardar las imagenes
                $path = public_path().'/assets/img/about/';

                // Guardar Original
                //$image->save($path.$file->getClientOriginalName());
                // Cambiar de tamaño
                $image->resize(300,500);
                // Guardar
                $image->save($path.'thumb_'.$file->getClientOriginalName());
            }
            //Guardamos nombre y nombreOriginal en la BD
            $about = new About();
            $about->first_name = Input::get('first_name');
            $about->last_name = Input::get('last_name');
            $about->email = Input::get('email');
            $about->phone = Input::get('phone');
            $about->address = Input::get('address');
            $about->position = Input::get('position');
            $about->twitter = Input::get('twitter');
            $about->facebook = Input::get('facebook');
            $about->linkedin = Input::get('linkedin');
            $about->resume = Input::get('resume');
            $about->id_language = Input::get('id_language');
            if($file != ""){
                $about->route_img = 'thumb_'.$file->getClientOriginalName();
                $about->name_img = 'assets/img/about/thumb_'.$file->getClientOriginalName();
            }else{
                $about->route_img = Input::get('route_img');
                $about->name_img = Input::get('name_img');
            }
            $about->save();      
            //$portfolio -> create($request->all());

            return redirect('secure/section/about')->with('message', '¡Registro guardado con &eacute;xito!'); 
       }
            
    }
        
    public function updateAbout($id)
    {   
        /*$about = About::findOrFail($id);
        $data = Input::all();
        $about->fill($data);
        $about->save();
        return redirect()->back()->with('message', '¡Registro guardado con &eacute;xito!');*/
        $rules = array(
            'first_name' => 'required',
            'last_name' => 'required',
            'resume' => 'required',
            'email' => 'required | email',
            'phone' => 'required',
            'address' => 'required',
            'position' => 'required',
            'id_language' => 'required',
            'image' => 'mimes:jpeg,jpg,png',
        );
            
        $validator = Validator::make(Input::all(), $rules);
                       
        if ($validator->fails()) {
            
            $messages = $validator->messages();
            return redirect('secure/section/about')->withErrors($messages);        
                
       }else{
           
            $file = Input::file('image');
            if($file != ""){
                //Creamos una instancia de la libreria instalada   
                $image = Image::make(Input::file('image'));
                //Ruta donde queremos guardar las imagenes
                $path = public_path().'/assets/img/about/';

                // Guardar Original
                //$image->save($path.$file->getClientOriginalName());
                // Cambiar de tamaño
                $image->resize(300,500);
                // Guardar
                $image->save($path.'thumb_'.$file->getClientOriginalName());
            }
            //Guardamos nombre y nombreOriginal en la BD
            $about = new About();
            $about->first_name = Input::get('first_name');
            $about->last_name = Input::get('last_name');
            $about->email = Input::get('email');
            $about->phone = Input::get('phone');
            $about->address = Input::get('address');
            $about->position = Input::get('position');
            $about->twitter = Input::get('twitter');
            $about->facebook = Input::get('facebook');
            $about->linkedin = Input::get('linkedin');
            $about->resume = Input::get('resume');
            $about->id_language = Input::get('id_language');
            if($file != ""){
                $about->name_img = 'thumb_'.$file->getClientOriginalName();
                $about->route_img = 'assets/img/about/thumb_'.$file->getClientOriginalName();
            }else{
                $about->route_img = Input::get('route_img');
                $about->name_img = Input::get('name_img');
            }
            DB::table('abouts')
            ->where('id', $id)
            ->update(['first_name' => $about->first_name, 'last_name' => $about->last_name, 'email' => $about->email, 'phone' => $about->phone, 'address' => $about->address, 'position' => $about->position, 'twitter' => $about->twitter, 
                'facebook' => $about->facebook, 'linkedin' => $about->linkedin, 'resume' => $about->resume, 'route_img' => $about->route_img, 'name_img' => $about->name_img]);      
            //$portfolio -> create($request->all());

            return redirect('secure/section/aboutMe')->with('message', '¡Registro guardado con &eacute;xito!'); 
       }        
    }
    
    public function listSkill()
    {
       $skills = Skill::all();
       $messages = Message::orderBy("created_at","desc")->limit(5)->offset(5)->get();
       return \View::make('admin.listSkill', compact('skills','messages'));
    }
    
    public function createSkill()
    {
       return \View::make('admin.createSkill');
    }    
    
    public function storeSkill(Request $request)
    {
        
        $rules = array(
            'nombre' => 'required',
            'porcentaje' => 'required',
        );
            
        $validator = Validator::make(Input::all(), $rules);
                       
        if ($validator->fails()) {
            
            $messages = $validator->messages();
            return redirect('secure/section/skills')->withErrors($messages);        
                
        }else{
            
            $skill = new Skill; // Creando el objecto del modelo
            $skill -> create($request->all());
            return redirect('secure/section/skills')->with('message', '¡Registro guardado con &eacute;xito!');       
                
        }
            
    }
    
    public function editSkill($id)
    {
        $skill = Skill::findOrFail($id);
        $messages = Message::orderBy("created_at","desc")->limit(5)->offset(5)->get();
        return view('admin.editSkill', compact('skill','messages'));
    }     
    
    public function updateSkill($id)
    {   
        $skill = Skill::findOrFail($id);
        $data = Input::all();
        $skill->fill($data);
        $skill->save();
        return redirect()->back()->with('message', '¡Registro guardado con &eacute;xito!');
    }
    
    public function destroySkill($id){
        $registro = Skill::find($id);
        $registro -> delete();
        return redirect()->back()->with('message', '¡Registro eliminado con &eacute;xito!');
        
    }
    
    public function listLanguage()
    {
       $languages = Language::all();
       $messages = Message::orderBy("created_at","desc")->limit(5)->offset(5)->get();
       return \View::make('admin.listLanguage', compact('languages','messages'));
    }
    
    public function createLanguage()
    {
       return \View::make('admin.createLanguage');
    }    
    
    public function storeLanguage(Request $request)
    {
        
        $rules = array(
            'name' => 'required',
            'percentage' => 'required',
        );
            
        $validator = Validator::make(Input::all(), $rules);
                       
        if ($validator->fails()) {
            
            $messages = $validator->messages();
            return redirect('secure/section/languages')->withErrors($messages);        
                
        }else{
            
            $language = new Language; // Creando el objecto del modelo
            $language -> create($request->all());
            return redirect('secure/section/languages')->with('message', '¡Registro guardado con &eacute;xito!');                       
        }
            
    }
    
    public function editLanguage($id)
    {
        $language = Language::findOrFail($id);
        $messages = Message::orderBy("created_at","desc")->limit(5)->offset(5)->get();
        return view('admin.editLanguage', compact('language','messages'));
    }     
    
    public function updateLanguage($id)
    {   
        $language = Language::findOrFail($id);
        $data = Input::all();
        $language->fill($data);
        $language->save();
        return redirect()->back()->with('message', '¡Registro guardado con &eacute;xito!');
    }
    
    public function destroyLanguage($id){
        $registro = Language::find($id);
        $registro -> delete();
        return redirect()->back()->with('message', '¡Registro eliminado con &eacute;xito!');
        
    }    
    
    public function createExperience()
    {
       return \View::make('admin.createExperience');
    }
    
    public function listExperience()
    {
       $experiences = Experience::all();
       $messages = Message::orderBy("created_at","desc")->limit(5)->offset(5)->get();
       return \View::make('admin.listExperience', compact('experiences','messages'));
    }
    
    public function storeExperience(Request $request)
    {
        
        $rules = array(
            'company' => 'required',
            'role' => 'required',
            'since' => 'required',
            'description' => 'required',
            'id_language' => 'required',
        );
            
        $validator = Validator::make(Input::all(), $rules);
                       
        if ($validator->fails()) {
            
            $messages = $validator->messages();
            return redirect('secure/section/experience')->withErrors($messages);        
                
        }else{        
            $experience = new Experience();
            $experience->company = Input::get('company');
            $experience->role = Input::get('role');
            $experience->since = Input::get('since');
            $until = $experience->until = Input::get('until');
            if($until == ""){
                $experience->until = null;
            }else{
                $experience->until = Input::get('until');
            }
            $experience->description = Input::get('description');
            $experience->id_language = Input::get('id_language');        
            $experience->save();

            return redirect()->back()->with('message', '¡Registro guardado con &eacute;xito!');
        }                    
    }
    
    public function editExperience($id)
    {
        $experience = Experience::findOrFail($id);
        $messages = Message::all();
        return view('admin.editExperience', compact('experience','messages'));
    }     
    
    public function updateExperience($id)
    {                   
        
        $rules = array(
            'company' => 'required',
            'role' => 'required',
            'since' => 'required',
            'description' => 'required',
            'id_language' => 'required',
        );
            
        $validator = Validator::make(Input::all(), $rules);
                       
        if ($validator->fails()) {
            
            $messages = $validator->messages();
            return redirect('secure/section/experience')->withErrors($messages);        
                
        }else{        
            $experience = new Experience();
            $experience->company = Input::get('company');
            $experience->role = Input::get('role');
            $experience->since = Input::get('since');
            $until = $experience->until = Input::get('until');
            if($until == ""){
                $experience->until = null;
            }else{
                $experience->until = Input::get('until');
            }
            $experience->description = Input::get('description');
            $experience->id_language = Input::get('id_language');        
            DB::table('experiences')
                ->where('id', $id)
                ->update(['company' => $experience->company, 'role' => $experience->role, 'since' => $experience->since, 'until' => $experience->until, 'description' => $experience->description, 'id_language' => $experience->id_language]);

            return redirect()->back()->with('message', '¡Registro guardado con &eacute;xito!');
        }
    }    
    
    public function destroyExperience($id){
        $registro = Experience::find($id);
        $registro -> delete();
        return redirect()->back()->with('message', '¡Registro eliminado con &eacute;xito!');        
    }
    
    public function createPortfolio()
    {
       return \View::make('admin.createPortfolio');
    }
    
    public function editPortfolio($id)
    {
        $portfolio = Portfolio::findOrFail($id);
        $messages = Message::orderBy("created_at","desc")->limit(5)->offset(5)->get();
        return view('admin.editPortfolio', compact('portfolio','messages'));
    }
    
    public function updatePortfolio($id)
    {   
        
        $file = Input::file('image');
        //Creamos una instancia de la libreria instalada  
        if($file != ""){
            $image = Image::make(Input::file('image'));
            //Ruta donde queremos guardar las imagenes
            $path = public_path().'/assets/img/portfolio/';

            // Guardar Original
            //$image->save($path.$file->getClientOriginalName());
            // Cambiar de tamaño
            $image->resize(500,400);
            // Guardar
            $image->save($path.'thumb_'.$file->getClientOriginalName()); 
        }
        //$portfolio = Portfolio::findOrFail($id);
        $portfolio = new Portfolio();
        $portfolio->title = Input::get('title');
        $portfolio->url = Input::get('url');
        if($file != ""){
            $portfolio->name = 'thumb_'.$file->getClientOriginalName();
            $portfolio->route = 'assets/img/portfolio/thumb_'.$file->getClientOriginalName();
        }else{
            $portfolio->name = Input::get('name');
            $portfolio->route = Input::get('route');
        }
        $portfolio->description = Input::get('description');
        $portfolio->id_language = Input::get('id_language');        
        DB::table('portfolios')
            ->where('id', $id)
            ->update(['title' => $portfolio->title, 'name' => $portfolio->name, 'url' => $portfolio->url, 'route' => $portfolio->route, 'description' => $portfolio->description, 'id_language' => $portfolio->id_language]);
        /*$data = Input::all();
        $portfolio->fill($data);
        $portfolio->save();*/
        return redirect()->back()->with('message', '¡Registro guardado con &eacute;xito!');
    }
    
    public function listPortfolio()
    {
       $portfolios = Portfolio::all();
       $messages = Message::orderBy("created_at","desc")->limit(5)->offset(5)->get();
       return \View::make('admin.listPortfolio', compact('portfolios','messages'));
    }
    
    public function storePortfolio(Request $request)
    {
        
        $rules = array(
            'title' => 'required',
            'url' => 'required',
            //'route' => 'required',
            'description' => 'required',
            'id_language' => 'required',
            'image' => 'required | mimes:jpeg,jpg,png',
        );
            
        $validator = Validator::make(Input::all(), $rules);
                       
        if ($validator->fails()) {
            
            $messages = $validator->messages();
            return redirect('secure/section/portfolio')->withErrors($messages);        
                
       }else{
           
            $file = Input::file('image');
            //Creamos una instancia de la libreria instalada   
            $image = Image::make(Input::file('image'));
            //Ruta donde queremos guardar las imagenes
            $path = public_path().'/assets/img/portfolio/';

            // Guardar Original
            //$image->save($path.$file->getClientOriginalName());
            // Cambiar de tamaño
            $image->resize(240,200);
            // Guardar
            $image->save($path.'thumb_'.$file->getClientOriginalName());

            //Guardamos nombre y nombreOriginal en la BD
            $portfolio = new Portfolio();
            $portfolio->title = Input::get('title');
            $portfolio->name = 'thumb_'.$file->getClientOriginalName();            
            $portfolio->url = Input::get('url');
            $portfolio->route = 'assets/img/portfolio/thumb_'.$file->getClientOriginalName();
            $portfolio->description = Input::get('description');
            $portfolio->id_language = Input::get('id_language');
            $portfolio->save();      
            //$portfolio -> create($request->all());

            return redirect('secure/section/portfolio')->with('message', '¡Registro guardado con &eacute;xito!'); 
       }
    }
    
    public function destroyPortfolio($id){
        $registro = Portfolio::find($id);                 
        $registro -> delete();
        unlink(public_path($registro->route));
        return redirect()->back()->with('message', '¡Registro eliminado con &eacute;xito!');        
    }  
    
    public function listMessages()
    {
       $messages = Message::orderBy("created_at","desc")->limit(5)->offset(5)->get();
       $listMessages = Message::all();
       return \View::make('admin.listMessages', compact('messages','listMessages'));
    }

    public function openMessage($id){
        $message = Message::findOrFail($id);
        $messages = Message::orderBy("created_at","desc")->limit(5)->offset(5)->get();
        return view('admin.detailMessage', compact('message','messages'));        
    }  
    
    public function destroyMessage($id){
        $registro = Message::find($id);                 
        $registro -> delete();
        return redirect()->back()->with('message', '¡Registro eliminado con &eacute;xito!');        
    }  
}