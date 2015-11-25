<!DOCTYPE html>
<?php
    require "../View/langEn.php";
    
    class Website extends LangEn {
        public $title = "Contact";
        public $header = "Contact";
        public function prepareContent() {
            echo "<main><div class='content'>";
            echo "<div id='contactCol1-2L'>"
                    . "<div id='addrWrapper'>"
                        . "<table><caption>Contact info:</caption>"
                        . "<tr><td>Patrick Golbik</td></tr>"
                        . "<tr><td>PG Electric</td></tr>"
                        . "<tr><td>annotation@pgelectric.co.uk</td></tr>"
                        . "<tr><td>Phone number: 07835235481</td></tr>"
                        . "</table>"
                    . "</div>"
                . "</div>";
                    
            echo "<div id='contactCol2-2R'>"
                    . "<div id='hoursWrapper'>"
                        . "<table><caption>Business hours:</caption>"
                        . "<tr><td>Sunday</td><td>Closed</td></tr>"
                        . "<tr><td>Monday</td><td>8:00 AM - 19:00PM</td></tr>"
                        . "<tr><td>Tuesday</td><td>8:00 AM - 19:00PM</td></tr>"
                        . "<tr><td>Wednesday</td><td>8:00 AM - 19:00PM</td></tr>"
                        . "<tr><td>Thursday</td><td>8:00 AM - 19:00PM</td></tr>"
                        . "<tr><td>Friday</td><td>8:00 AM - 19:00PM</td></tr>"
                        . "<tr><td>Saturday</td><td>8:00 AM - 19:00PM</td></tr>"
                        . "</table>"
                    . "</div>"
                . "</div></main>";
            echo "<div id='fancyBckgrnd'></div>"; //styling element
        }
    }

    $page = new Website;
    $page->display();