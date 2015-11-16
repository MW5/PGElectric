<!DOCTYPE html>
<?php
    require "../View/langEn.php";
    
    class Website extends LangEn {
        public $title = "Offer";
        public $header = "Offer";
        public $content = "<h1>TEST CONTENT</h1>"; //CHECK COMMENT ABOUT CONTENT IN MODEL.PHP
    }

    $page = new Website;
    $page->display();

