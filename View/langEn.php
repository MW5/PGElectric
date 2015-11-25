<?php

require "../Controller/config.php";

class LangEn extends Config {
    //nav
    public $logoAddress = "../Assets/Img/PGElectric_logo.png";
    public $altLogoImgText = "PGElectric logo";
    //nav
    public $navBtns = array ("Home"=>"index", "About us"=>"aboutUs", "Offer"=>"offer",
        "Gallery"=>"gallery", "Contact"=>"contact"); //action must always be the same!
    //footer
    public $copyright = "created by MW5";
}