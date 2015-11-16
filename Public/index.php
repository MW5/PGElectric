<!DOCTYPE html>
<?php
    require "../View/langEn.php";
    
    class Website extends LangEn {
        public $title = "Home";
        public $header = "Home";
        public function prepareContent() {
            echo "<main><div class='content'>";
            echo "<h2>Test content</h2>";
            echo "</div></main>";
            echo "<div id='fancyBckgrnd'></div>"; //styling element
        }
    }

    $page = new Website;
    $page->display();