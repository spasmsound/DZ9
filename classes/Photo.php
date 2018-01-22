<?php


class Photo
{
    protected $photo;

    public function __construct($photo)
    {
        $this->photo = $photo;
    }

    public function getPhoto()
    {
        return $this->photo;
    }
}