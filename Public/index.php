<!DOCTYPE html>
<?php
    require "../View/langEn.php";
    
    class Website extends LangEn {
        public $title = "Home";
        public $header = "Home";
        public function prepareContent() {
            echo "<main><div class='content'>";
            echo "<div>Patrick photo, bussiness hours, contact";
            echo "</div></main>";
            echo "<div id='fancyBckgrnd'></div>"; //styling element
        }
    }

    $page = new Website;
    $page->display();