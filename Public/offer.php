<!DOCTYPE html>
<?php
    require "../View/langEn.php";
    
    class Website extends LangEn {
        public $title = "Offer";
        public $header = "Offer";
        public function prepareContent() {
            echo "<main><div class='content'>";
            echo "<h2>Test content</h2>";
            echo "<ul id='offerList'>"
                . "<li>Lorem ipsum dolor</li>"
                . "<li>sit amet enim. Etiam ullamcorper.</li>"
                . "<li>Suspendisse a pellentesque dui</li>"
                . "<li>non felis. Maecenas malesuada</li>"
                . "<li>elit lectus felis, malesuada ultricies.</li>"
                . "<li>Curabitur et ligula.</li>";
            echo "</ul></div></main>";
            echo "<div id='fancyBckgrnd'></div>"; //styling element
        }
    }

    $page = new Website;
    $page->display();

