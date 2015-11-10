<!DOCTYPE html>
<?php
    require "../View/langEn.php";
    
    class Website extends LangEn {
        public $title = "Offer";
        public $header = "Offer";
        public $content = "<h1>TEST CONTENT</h1>";
    }

    $page = new Website;
    $page->display();

