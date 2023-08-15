<?php

namespace App\Http\Controllers;

use App\Events\CreateApplication;
use App\Models\Application;
use Illuminate\Http\Request;

class ApplicationController extends Controller
{
    public function create(Request $post){
        if($post->hasFile('file_url')){
            $path = $post->file('file_url')->storeAs(
                'public',
                $post->file_url->getClientOriginalName(),
                'local'
            );
        }
        
        $application = Application::create([
            'user_id'=>auth()->user()->id,
            'title'=>$post->title,
            'message'=>$post->message,
            'file_url'=>$path ?? null
        ]);
        CreateApplication::dispatch($application);
        return redirect('myblogs')->with('submit','submitted successfully');
    }
}