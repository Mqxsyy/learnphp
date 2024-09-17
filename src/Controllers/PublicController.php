<?php
namespace App\Controllers;

class PublicController {
    public function Index() {
        $posts = [
            ['title' => "Title 1", 'body' => 'some body 1'],
            ['title' => "Title 2", 'body' => 'some body 2'],
            ['title' => "Title 3", 'body' => 'some body 3'],
            ['title' => "Title 4", 'body' => 'some body 4'],
            ['title' => "Title 5", 'body' => 'some body 5'],
        ];
    
        include 'views/index.php';
    }

    public function US() {
        $posts = [
            ['title' => "Title 6", 'body' => 'some body 6'],
            ['title' => "Title 7", 'body' => 'some body 7'],
            ['title' => "Title 8", 'body' => 'some body 8'],
            ['title' => "Title 9", 'body' => 'some body 9'],
            ['title' => "Title 10", 'body' => 'some body 10'],
        ];
    
        include 'views/us.php';
    }

    public function Form() {
        include 'views/form.php';
    }

    public function Answer() {
        $fname = $_POST['fname'] ?? '';
        dump($fname);
    }
}