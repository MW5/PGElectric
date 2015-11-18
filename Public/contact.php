<!DOCTYPE html>
<?php
    require "../View/langEn.php";
    
    class Website extends LangEn {
        public $title = "Contact";
        public $header = "Contact";
        public function prepareContent() {
            echo "<main><div class='content'>";
            echo "<div id='contactCol1-2L'>"
                    ."<iframe src='https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!"
                    . "1d2550.38570073445!2d19.023181215583463!3d50.266056508515355!2m3"
                    . "!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1spl!2spl!4v1447878126644'"
                    . "frameborder='0' style='border:0' allowfullscreen></iframe>"
                . "</div>";
            echo "<div id='contactCol2-2R'>"
                . "<div id='addrWrapper'>"
                    . "<table><caption>Address:</caption>"
                    . "<tr><td>PGElectric</td></tr>"
                    . "<tr><td>Some street</td></tr>"
                    . "<tr><td>Some postal</td></tr>"
                    . "<tr><td>Some city</td></tr>"
                    . "</table>"
                . "</div>";
            echo "<div id='hoursWrapper'>"
                    . "<table><caption>Business hours:</caption>"
                    . "<tr><td>Sunday</td><td>Closed</td></tr>"
                    . "<tr><td>Monday</td><td>7:00 AM - 3:00PM</td></tr>"
                    . "<tr><td>Tuesday</td><td>7:00 AM - 3:00PM</td></tr>"
                    . "<tr><td>Wednesday</td><td>7:00 AM - 3:00PM</td></tr>"
                    . "<tr><td>Thursday</td><td>7:00 AM - 3:00PM</td></tr>"
                    . "<tr><td>Friday</td><td>7:00 AM - 3:00PM</td></tr>"
                    . "<tr><td>Saturday</td><td>7:00 AM - 1:00PM</td></tr>"
                    . "</table>"
                . "</div>";
            echo "</div></main>";
            echo "<div id='fancyBckgrnd'></div>"; //styling element
        }
    }

    $page = new Website;
    $page->display();