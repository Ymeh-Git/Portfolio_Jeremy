<?php
class Project {
    private $title;
    private $description;
    private $image;
    private $language;
    private $url;
    private $urlOnline;

    public function __construct($title, $description, $image, $language, $url = null, $urlOnline = null) {
        $this->title = $title;
        $this->description = $description;
        $this->image = $image;
        $this->language = $language;
        $this->url = $url;
        $this->urlOnline = $urlOnline;
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

    public function getUrl() {
        return $this->url;
    }

    public function getUrlOnline() {
        return $this->urlOnline;
    }
}