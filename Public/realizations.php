<!DOCTYPE html>
<?php
    require "../View/langEn.php";
    
    class Website extends LangEn {
        public $title = "Realizations";
        public $header = "Realizations";
        public $content = "<h1>TEST CONTENT</h1>";
    }
    
    $page = new Website;
    $page->display();
