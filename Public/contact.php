<!DOCTYPE html>
<?php
    require "../View/langEn.php";
    
    class Website extends LangEn {
        public $title = "Contact";
        public $header = "Contact";
        public $content = "<h1>TEST CONTENT</h1>";
    }

    $page = new Website;
    $page->display();