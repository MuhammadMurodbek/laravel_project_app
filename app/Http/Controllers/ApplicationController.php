<?php

namespace App\Http\Controllers;

use App\Events\CreateApplication;
use App\Jobs\ApplicationPodcast;
use App\Mail\ApplicationCreated;
use App\Models\Application;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

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
        Mail::to(auth()->user())->queue((new ApplicationCreated($application))->onQueue('send-emails'));
        return redirect('myblogs')->with('submit','submitted successfully');
    }
}