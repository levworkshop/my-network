<?php

class Post
{
    public
    $id, $title, $last_update, $author;

    public function set($cfg)
    {
        foreach ($cfg as $key => $value) {
            $this->$key = $value;
        }
    }

    public function get($property)
    {
        return $this->$property;
    }
}

class TextPost extends Post
{
    public $post_body;
}

class ImagePost extends Post
{
    public $image_url, $image_alt;
}