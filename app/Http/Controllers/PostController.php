<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;
use App\Http\Requests\PostRequest;
use Illuminate\Support\Facades\DB;

class PostController extends Controller
{
    function index() {

        $posts = Post::all();

        // $sql = 'SELECT * FROM posts LIMIT 10 OFFSET 0';
        $posts = Post::latest('id')->paginate(10); // show 10 rows in the one page and orderd by latest
        // $post = Post::orderBy('id','desc')->paginate(10); 
        // $post = Post::orderByDesc('id')->paginate(10); 
        // $post = Post::orderByDesc('id')->simplePaginate(); 

        // $posts = Post::find(10); // return the row by id 10
        // $posts = Post::where('id', 10)->get(); // return array
        // $posts = Post::where('id', 10)->first(); // return the row by id 10
        
        /*
        $posts = Post::find(1200);
        if(!$posts) {
            abort(404); //return the 404 error if the row not found
        };
        */

        // $posts = Post::findOrFail(5); // return if the row exist || return 404 error
        return view('posts.index' , compact('posts'));
    }

    function create() {
        return view('posts.create');
    }

    function store(PostRequest $request) {
        
        // 1.Validate

        // 2.File upload
        $image_path = $request->file('image')->store('uploads/posts', 'custom');

        // 3.Store in database
        // Using query builder
            /*
            DB::table('posts')->insert([
                'title' => $request->title,
                'image' => $image_path,
                'content' => $request->content
            ]);
            */
        //Using Elqouent ORM
            // -- Using Object
            /*
            $post = new Post();
            $post->title = $request->title;
            $post->image = $image_path;
            $post->content = $request->content;
            $post->save();
            */

            // -- Using static create method [Recommended]!
            Post::create([
                'title' => $request->title,
                'image' => $image_path,
                'content' => $request->content
            ]);

        // 4.Redirect to another page
        /* With method uesed to send prams to another page ->with('prameter name' , 'value') */
         return redirect()->route('posts.index')->with('message', 'Post Added Successfully!')->with('type','success');
    }
}
