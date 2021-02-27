<?php


class Tags extends Controller
{
    public function __construct()
    {
        $this->tagsModel = $this->model('Tag');
    }

    public function index()
    {
        $tags = $this->tagsModel->getTags();
        $data = array(
            'tags' => $tags
        );
        $this->view('tags/index', $data);
    }
}