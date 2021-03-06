<?php

class Model {
    //head
    public $title;
    public $styleAddress;
    public $jsAddress;
    public $jqueryAddress;
    public $jsAddressCookies;
    public $iconAddress;
    
    //body
    //nav
    public $logoAddress;
    public $altLogoImgText;
    public $navBtns;
    
    //header 
    public $header;
    
    //article
    public $content;
    public $gallery;
    public $galleryPicFiles;
    
    //footer
    public $copyright;
        
    //set
    public function __set($name, $value) {
            $this->$name = $value;
        }
    //display functions
    public function display() {
        $this->prepareHead();
        $this->prepareNav();
        $this->prepareHeader();
        $this->prepareContent();
        $this->prepareFooter();
        $this->prepareCookieInfo();
    }
    
    public function prepareHead() {
        echo "<html><head>
                <meta charset='UTF-8'>
                <meta name='viewport' content='width=device-width, initial-scale=1' />
                <title>$this->title</title>
                <script src='$this->jqueryAddress'></script>
                <script src='$this->jsAddress'></script>
                <script src='$this->jsAddressCookies'></script>
                <link rel='stylesheet' type='text/css' href='$this->styleAddress'/>
                <link rel='shortcut icon' href='$this->iconAddress'/>
              </head>";
    }
    public function prepareNav() {
        echo "<body><div id='bodyContainer'>
                <nav class='nav'>
                    <img src='$this->logoAddress' id='logo' alt='$this->altLogoImgText'>
                    <ul class='navBtnList'>";
        foreach ($this->navBtns as $name=>$action) {
            echo "<li><a href='$action.php' id='$action' class='navBtn navBtn'>$name</a></li>";
        }
        echo "</ul></nav>";
        
    }
    public function prepareHeader() {
        echo "<header><h1>$this->header</h1></header>";
    }
    //prepare content will be inside each website content copy it and DELETE
    public function prepareContent() {
        echo "<main><div class='content'>
                $this->content
              </div></main>";
            
    }
   
    public function prepareFooter() {
        echo "<footer id='footerWrapper'>
                $this->copyright
            </footer></div>";     
    }
    
    public function prepareCookieInfo() {
        echo "<script type='text/javascript'>
                $(document).ready(function() {
                $.cookiesDirective({
                privacyPolicyUri: 'privacy_policy.php'
                });
                });
             </script></body></html>";
    }  
}