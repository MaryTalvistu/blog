<?php


class Posts extends Controller
{

    /**
     * Posts constructor.
     */
    public function __construct()
    {
        $this->postsModel = $this->model('Post');
    }

    public function index()
    {
        $posts = $this->postsModel->getPosts();
        $data = array(
            'posts' => $posts
        );
        $this->view('posts/index', $data);
    }

    public function show($id)
    {
        $post = $this->postsModel->getPostById($id);
        $data = array(
            'post' => $post
        );
        $this->view('posts/show', $data);
    }
}