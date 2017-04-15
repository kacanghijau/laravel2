<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Post;
use Auth;

class PostController extends Controller
{
    //

    public function showAllPosts(){
        $varpost = Post::all();

        return view('post')->with('postview',$varpost);
        // or 
        // return view('post')->withPostView($varpost); 
    }
    
    public function createPost(){
        return view('createPost');
    }

    public function savePost(Request $request){
        
        $this->validate( $request,[
            'title' => 'required|max:60',
            'story' => 'required|max:200',
            ]);

        $varpost = new Post;

        $varpost->user_id = Auth::user()->id;
        $varpost->title = $request->input('title');
        $varpost->story = $request->input('story');
        
        $varpost->save();

        return redirect()->route('post.index')->withSuccess('Post successfully created');    
    }

    public function editPost($id){

    }
    public function deletePost($id){
        
        $varpost = Post::find($id);

        // $varpost = Post::where([['id','=', $id],['user_id','=',Auth::user()->id]])->first();

        if($varpost){
            $varpost->delete();
            return redirect()->route('post.index')->withSuccess('Post successfully deleted');   
        }
    }
}
