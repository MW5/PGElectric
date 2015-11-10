<!DOCTYPE html>
<?php
    require "../View/langEn.php";
    
    class Website extends LangEn {
        public $title = "Home";
        public $header = "Home";
        public $content = "<h1>TEST CONTENT</h1>"; //CHECK COMMENT ABOUT CONTENT IN MODEL.PHP
    }

    $page = new Website;
    $page->display();