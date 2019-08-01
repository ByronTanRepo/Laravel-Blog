<?php

namespace App\Http\Controllers;
use App\Post;
class PagesController extends Controller {

    public function getIndex() {
        /*
        Usual Process inside this function
        1. Process variable data or params
        2. Talk to the models
        3. Recieve from the model
        4. Compile the data if needed
        5. Pass the data to the correct view
        */
        $posts = Post::orderBy('created_at', 'desc')->limit(4)->get();
        return view('pages.welcome')->withPosts($posts);
    }

    public function getAbout() {
        $first = 'Byron';
        $last = 'Tan';
        $fullname = $first . " " . $last;
        $email = 'byrontan92@gmail.com';
        $data=[];
        $data['email'] = $email;
        $data['fullname'] = $fullname;
        return view('pages.about')->withData($data);
    }

    public function getContact() {
        return view('pages.contact');;
    }

}


?>
