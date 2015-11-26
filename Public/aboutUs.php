<!DOCTYPE html>
<?php
    require "../View/langEn.php";
    
    class Website extends LangEn {
        public $title = "About Us";
        public $header = "About Us";
        public function prepareContent() {
            echo "<main><div class='content'>";
            echo "<div id='about'><h2>PG Electric is a commercial and residential electrical service company</h2>"
                ."<h3>References</h3><ul>"
                    . "<li><a href='http://www.ratedpeople.com/profile/electrician-specialist/'>Rated People recommendations</a></li></ul>"
                ."<h3>Staff qualifications</h3><ul>"
                    . "<li>Technical highschool graduate</li>"
                    . "<li>Three years of work experience as electrical technician</li>"
                    . "<li>17th edition exam</li></ul>"
                . "<h3>Equipment</h3><ul>"
                    . "<li>Complete set of essential, high-end tools</li>"
                    . "<li>Car</li></ul>"
                . "</div></div></main>";
            echo "<img src='../Assets/Img/fancy_background2.png' id='fancyBckgrnd2' alt='stylingElement'></img>"; //styling element
            echo "<img src='../Assets/Img/fancy_background.png' id='fancyBckgrnd' alt='stylingElement'></img>"; //styling element
        }
    }

    $page = new Website;
    $page->display();