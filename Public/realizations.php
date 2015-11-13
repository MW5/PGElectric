<!DOCTYPE html>
<?php
    require "../View/langEn.php";
    
    class Website extends LangEn {
        public $title = "Realizations";
        public $header = "Realizations";
        public $galleryPicFiles = array("test1.jpg" => "alt1", "test2.jpg" => "alt2", "test3.jpg" => "alt3",
            "test4.jpg" => "alt4", "test5.jpg" => "alt5", "test6.jpg" => "alt6", "test7.jpg" => "alt7");
        
        public function prepareContent() {   
            echo "<main><div class='content'>";
            echo "<div id='gallCol1-2L'>";
                reset($this->galleryPicFiles);
                $firstFromArr = key($this->galleryPicFiles);
                echo "<img src='../Assets/Img/".$firstFromArr."' id='imgCurrent' alt='test' width='100%' height='auto'>";
            echo "</div>";
            echo "<div id='gallCol2-2R'>";
            foreach ($this->galleryPicFiles as $address=>$alt) {
                echo "<img src='../Assets/Img/$address' id='$alt' alt='$alt' class='imgBarPic' width='100%' height='auto'>";
            }
        //see if arrows cause the layout fuckups PROBABLY FIXED
            echo "<div id='arrowUp'><img src='../Assets/Img/gallArrUp.png' alt='galleryArrowUp'></div>";
            echo "<div id='arrowDown'><img src='../Assets/Img/gallArrDown.png' alt='galleryArrowDown'></div>";
            echo "</div>";
            echo "</div></main>";
            
        }
    }
    
    $page = new Website;
    $page->display();
