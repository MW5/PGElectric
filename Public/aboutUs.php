<!DOCTYPE html>
<?php
    require "../View/langEn.php";
    
    class Website extends LangEn {
        public $title = "About Us";
        public $header = "About Us";
        public function prepareContent() {
            echo "<main><div class='content'>";
            echo "<div id='about'><h2>PG Electric is a commercial and residential electrical service company</h2>"
                ."<h3>Staff qualifications</h3><ul>"
                    . "<li>Technical highschool graduate</li>"
                    . "<li>Three years of work experience as electrical technician</li>"
                    . "<li>17th edition exam</li></ul>"
                . "<h3>Equipment</h3><ul>"
                    . "<li>Complete set of essential, high-end tools</li>"
                    . "<li>Car</li></ul>"
                . "</div></div></main>";
            echo "<div id='fancyBckgrnd'></div>"; //styling element
        }
    }

    $page = new Website;
    $page->display();