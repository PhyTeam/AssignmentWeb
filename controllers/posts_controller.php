<?php
/**
 * Created by PhpStorm.
 * User: bbphuc
 * Date: 4/18/2017
 * Time: 1:24 PM
 */

include_once 'models/Post.php';

class PostController{
    public function index(){

        $posts = Post::all();
        require_once 'views/posts/index.php';
    }
}