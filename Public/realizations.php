<!DOCTYPE html>
<?php
    require "../View/langEn.php";
    
    class Website extends LangEn {
        public $title = "Realizations";
        public $header = "Realizations";
        public $galleryPicFiles = array("test1.jpg" => "alt1", "test2.jpg" => "alt2>", "test3.jpg" => "alt3",
            "test4.jpg" => "alt4", "test5.jpg" => "alt5", "test6.jpg" => "alt6", "test7.jpg" => "alt7");
        
        public function prepareContent() {   
            echo "<main><div class='content'>";
            echo "<div id='gallCol1-2L'>";
                echo "<img src='../Assets/Img/test1.jpg' id='test' alt='test' class='imgCurrent' width='100%' height='auto'>";
            echo "</div>";
            
            echo "<div id='gallCol2-2R'>";
            echo "<div id='arrowUp'><img src='../Assets/Img/gallArrUp.png' alt='galleryArrowUp'></div>";
            echo "<div id='arrowDown'><img src='../Assets/Img/gallArrDown.png' alt='galleryArrowDown'></div>";
            $counter = 0;
            foreach ($this->galleryPicFiles as $address=>$alt) {
                $counter++;
                if ($counter > 3) {
                    echo "<img src='../Assets/Img/$address' id='$alt' alt='$alt' class='imgHidden' width='100%' height='auto'>";
                } else {
                    echo "<img src='../Assets/Img/$address' id='$alt' alt='$alt' class='imgVisible' width='100%' height='auto'>";
                }
            }
            echo "</div>";
            echo "</div></main>";
            
        }
    }
    
    $page = new Website;
    $page->display();
