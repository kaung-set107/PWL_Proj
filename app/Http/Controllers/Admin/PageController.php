<?php

namespace App\Http\Controllers\Admin;

use App\Models\Project;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Contact;
use App\Models\Language;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class PageController extends Controller
{

    public function dashboard(){
        $date=date('Y-m-d');
        $pj_count=Project::count();
        // $insms=Contact::whereDate('created_at',$date)->count();
        $con_count=Contact::count();
        $contact=Contact::simplePaginate(4);
        return view('admin.dashboard',compact('pj_count','contact','con_count'));
    }

    public function blogshow(){
            $show=Project::orderBy('id','DESC')->simplePaginate(4);
        return view('admin.show',compact('show'));
    }

    public function contact(){
            $contact=Contact::orderBy('id','DESC')->simplePaginate(4);
        return view('admin.contact',compact('contact'));
    }
    
    public function showupdate($id){
        $editpj=Project::where('id',$id)->first();
        $lan=Language::all();
        return view('admin.update',compact('editpj','lan'));
    }

    public function postupdate(Request $request,$id){
    
        $post=Project::find($id);
        //image upload
        if($request->hasAny('image')){
        
            //when update , changed image show you this page
        $img_arr=explode('/',$post->image);
        Storage::disk('images')->delete($img_arr[0]) ; 

        $file=$request->file('image');
        $file_name=uniqid(time()).$file->getClientOriginalName();
        $path='images/'.$file_name;
        $file->storeAs('images',$file_name);

        }else{
            $path=$post->image;
        }
    
        $post->update([
            'title'=>$request->title,
            'language'=>$request->language,
            'image'=>$path,
            'dev_name'=>$request->dev_name,
            'github'=>$request->github,
            'description'=>$request->description
        ]);
        Project::find($post->id)->language()->sync($request->language);

        return redirect()->back()->with('success','Successful Create');
    }

    //post delete with image
    public function delete($id){
        $post=Project::find($id);

            //when delete post , images auto delete
        $img_arr=explode('/',$post->image);
        Storage::disk('images')->delete($img_arr[1]) ; 

        $post->delete();

        return redirect()->back()->with('success','Successful Create');
        
    }

    public function contactdelete($id){
        $cdel=Contact::find($id);
        $cdel->delete();

        return redirect()->back()->with('delete','Deleted Contact');
    }


    public function detail($id){
        $detail=Project::where('id',$id)->first();
        return view('admin.detail',compact('detail'));
    }




        //admin post create
    public function showcreate(){
        $lan=Language::all();
        return view('admin.create',compact('lan'));
    }

    public function postcreate(Request $request){
        $request->validate([
            'title'=>'required',
            
            'image'=>'required',
            'dev_name'=>'required',
            'github'=>'required',
            'description'=>'required'
        ]);

        $file=$request->file('image');
        $file_name=uniqid(time()).$file->getClientOriginalName();
        $path='images/'.$file_name;
        $file->storeAs('images',$file_name);

        $post=Project::create([
            'title'=>$request->title,
            'image'=>$path,
            'dev_name'=>$request->dev_name,
            'github'=>$request->github,
            'description'=>$request->description

        ]);

        Project::find($post->id)->language()->sync($request->language);

        return redirect()->back()->with('success','Successful Create');
    }
    
    
}