<!DOCTYPE html>
<?php
    require "../View/langEn.php";
    
    class Website extends LangEn {
        public $title = "About Us";
        public $header = "About Us";
        public $content = "<h1>TEST CONTENT</h1>";
    }

    $page = new Website;
    $page->display();