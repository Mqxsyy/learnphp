<?php

namespace App\Controllers;

use App\Models\Post;

class PostsController
{
    public function index()
    {
        $posts = Post::all();
        view('posts/index', compact('posts'));
    }

    public function create()
    {
        view('posts/create');
    }

    public function store()
    {
        $post = new Post();
        $post->title = $_POST['title'];
        $post->body = $_POST['body'];
        $post->save();
        redirect('/admin/posts');
    }

    public function view()
    {
        $id = $_GET['id'];
        $post = Post::single($id);
        
        if (sizeof($post) === 0) {
            echo("Post with id $id does not exist!");
        } else {
            view('posts/view', compact('post'));
        }
    }
}
