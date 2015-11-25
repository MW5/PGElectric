<!DOCTYPE html>
<?php
    require "../View/langEn.php";
    
    class Website extends LangEn {
        public $title = "Offer";
        public $header = "Offer";
        public function prepareContent() {
            echo "<main><div class='content'>";
            echo "<h2>Provided services</h2>"
                . "<ul id='offerList'>"
                    . "<li>Repairs & Fault Finding</li>"
                    . "<li>Household Wiring</li>"
                    . "<li>Lighting Installation</li>"
                    . "<li>Socket Outlet Installation</li>"
                    . "<li>Testing and Inspection / Condition Surveys</li>"
                    . "<li>Domestic Appliance Installation</li>"
                    . "<li>External & Garden Lighting Installation and Design</li>"
                    . "<li>Data/Telephone point installation</li>";
            echo "</ul></div></main>";
            echo "<div id='fancyBckgrnd'></div>"; //styling element
        }
    }

    $page = new Website;
    $page->display();

