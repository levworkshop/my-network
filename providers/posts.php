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

    protected function update($id, $title, $last_update, $author)
    {
        // update class properties
    }
}

class TextPost extends Post
{
    public $post_body;

    public function update($body, $id, $title, $last_update, $author)
    {
        $this->post_body = $body;
        parent::update($id, $title, $last_update, $author);
    }
}

class ImagePost extends Post
{
    public $image_url, $image_alt;

    public function update($url, $alt, $id, $title, $last_update, $author)
    {
        $this->image_url = $url;
        $this->image_alt = $alt;
        parent::update($id, $title, $last_update, $author);
    }
}