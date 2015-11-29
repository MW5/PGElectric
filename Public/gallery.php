<!DOCTYPE html>
<?php
    require "../View/langEn.php";
    
    class Website extends LangEn {
        public $title = "Gallery";
        public $header = "Gallery";
        public $galleryPicFiles = array("min_ph1.jpg" => "certificate", "min_ph2.jpg" => "garden lighting",
            "min_ph3.jpg" => "heated floor", "min_ph4.jpg" => "ceiling illumination",
            "min_ph5.jpg" => "ceiling illumination", "min_ph6.jpg" => "outside lamp",
            "min_ph7.jpg" => "inside lamps", "min_ph8.jpg" => "inside lighting",
            "min_ph9.jpg" => "fuse box", "min_ph10.jpg" => "switch box", "min_ph11.jpg" => "wiring",
            "min_ph12.jpg" => "electrical box");
        
        public function prepareContent() {   
            echo "<main><div class='content'>";
            echo "<div id='gallCol1-2L'>";
                reset($this->galleryPicFiles);
                $firstFromArr = key($this->galleryPicFiles);
                echo "<img src='Assets/Img/".$firstFromArr."' id='imgCurrent' alt='test' width='100%' height='auto'>";
            echo "</div>";
            echo "<div id='gallCol2-2R'>";
            foreach ($this->galleryPicFiles as $address=>$alt) {
                echo "<img src='Assets/Img/$address' id='$alt' alt='$alt' class='imgBarPic' width='100%' height='auto'>";
            }
            echo "<div>"; 
            echo "<div id='arrowUp'><img src='Assets/Img/gallArrUp.png' alt='galleryArrowUp'></div>";
            echo "</div>";
            echo "<div>";
            echo "<div id='arrowDown'><img src='Assets/Img/gallArrDown.png' alt='galleryArrowDown'></div>";
            echo "</div>";
            echo "</div>";
            echo "</div></main>";
            echo "<img src='Assets/Img/fancy_background2.png' id='fancyBckgrnd2' alt='stylingElement'></img>"; //styling element
            echo "<img src='Assets/Img/fancy_background.png' id='fancyBckgrnd' alt='stylingElement'></img>"; //styling element
        }
    }
    
    $page = new Website;
    $page->display();
