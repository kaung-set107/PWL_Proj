<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Language;
use App\Models\Project;
use Illuminate\Http\Request;

class ProjectController extends Controller
{
    public function index(){

        $lan=Language::all();        
        return view('index',compact('lan'));
    }

//view project
    public function showprojects(){
        $project=Project::orderBy('id','DESC')->paginate(3);
        
        return view('project',compact('project'));
    }

    //filter by language
public function projectByLanguage(Request $request,$slug){
    $language_id=Language::where('slug',$slug)->first()->id;
    $project=Project::whereHas("language",function($q) use ($language_id){
            $q->where('language_id',$language_id);
        })
        ->orderBy('id','DESC')->paginate(3);
    
        return view('project',compact('project'));
}


    //contact
    public function contact(){
        return view('contact');
    }

    public function postcontact(Request $request){
        $request->validate([
            'email'=>'required|email',
            'message'=>'required'
        ]);

        $contact=new Contact();
        $contact->email=$request->email;
        $contact->message=$request->message;
        $contact->save();

        return redirect(url('/'))->with('success','Sent Message!');
    }

    public function detail($id){
        $project=Project::find($id);
        
        return view('detail',compact('project'));
    }

     public function about(){
        return view('about');
     }
}