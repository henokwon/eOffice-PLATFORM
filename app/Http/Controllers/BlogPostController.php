<?php

namespace App\Http\Controllers;

use App\Models\BlogPost;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class BlogPostController extends Controller
{
    public function index()
    {
        // show all blog posts
      
        $data = BlogPost::all();
        return view('posts.post', compact('data'));
    }

    public function create()
    {
        //show form to create a blog post
        return view('posts.add');
    }


    public function store(Request $request)
    {
        //store a new post
        // dd($request->file_upload);

        $data = new BlogPost();
        $photo = $request->file_upload;
        $photoName = time() . '.' . $photo->getClientOriginalExtension();
        $request->file_upload->move('assets', $photoName);
        $data->photo = $photoName;
        $data->title = $request->post_title;
        $data->body = $request->about;
        $data->user_id = User::find(1);
        $data->save();
        return redirect()->back()->with('success', 'You have successfully post your blog');;
    }
    public function show(BlogPost $blogPost)
    {
        //show a blog post
        $data = BlogPost::all();
        return view('posts.manage', compact('data'));
    }


    public function edit($id)
    {
        //show form to edit the post
        $data = BlogPost::find($id);
        return view('posts.edit', compact('data'));
    }

    public function update(Request $request, $id)
    {
        //save the edited post
        $data = BlogPost::find($id);
        $photo = $request->file_upload;
        $photoName = time() . '.' . $photo->getClientOriginalExtension();
        $request->file_upload->move('assets', $photoName);
        $data->photo = $photoName;
        $data->title = $request->post_title;
        $data->body = $request->about;
        $data->user_id = User::find(1);
        $data->update();
        return redirect()->back()->with('status', 'Post Updated Successfully');
    }
    public function destroy($id)
    {
        //delete a post
        $data = BlogPost::find($id);
        $data->delete();
        return redirect()->back()->with('message', 'Post delated Succes fully');
    }
    public function manage()
    {
        $data = BlogPost::all();
        return view('posts.manage', compact('data'));
    }
    public function search(Request $request)
    {

        $search = $request->input('search');
        // dd($search);

        $data = BlogPost::query()
            ->where('title', 'LIKE', "%{$search}%")
            ->orWhere('body', 'LIKE', "%{$search}%")
            ->get();

        return view('posts.manage', compact('data'));
    }

    public function logout()
    {
        Auth::logout();
        //    return redirect('/');
    }
}
