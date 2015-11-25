<!DOCTYPE html>
<?php
    require "../View/langEn.php";
    
    class Website extends LangEn {
        public $title = "Home";
        public $header = "Home";
        public function prepareContent() {
            echo "<main><div class='content'>";
            echo "<h2>PG Electric takes care of your electrical problems</h2>
                <div id='home'>
                <p id='p0'>Our goal is to make every client pleased with our cooperation and satisfied with a completed project.</p>
                <p id='p1'>In PG Electric we always help you in the best possible manner.</p>
                <p id='p2'>Knowledge, experience and involvement are our biggest assets.</p>
                <p id='p3'>We provide our services timely and with highest precision.</p>
                <p id='p4'>Using our services guarantees satisfaction.</p></div>";
            echo "</div></main>";
            echo "<img src='../Assets/Img/fancy_background.png' id='fancyBckgrnd' alt='stylingElement'></img>"; //styling element
        }
    }

    $page = new Website;
    $page->display();