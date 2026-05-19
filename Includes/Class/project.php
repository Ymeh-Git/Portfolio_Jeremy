<?php
class Project {
    private $title;
    private $description;
    private $image;
    private $language;

    public function __construct($title, $description, $image, $language) {
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
        $this->language = $language;
    }

    public function getTitle() {
        return $this->title;
    }

    public function getDescription() {
        return $this->description;
    }

    public function getLanguage() {
        return $this->language;
    }

    public function getImage() {
        return $this->image;
    }
}