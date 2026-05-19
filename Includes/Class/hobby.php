<?php
class Hobby {
    private $title;
    private $description;
    private $image;

    public function __construct($title, $description, $image) {
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getImage() {
        return $this->image;
    }
}