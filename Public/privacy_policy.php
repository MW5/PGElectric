<?php
    require "../View/langEn.php";
    
    class Website extends LangEn {
        public $title = "Privacy policy";
        public $header = "Privacy policy";
        public function prepareContent() {
            echo "<main><div class='content'>";
            echo "<h2>This website</h2>
                <p>This website and its owners take a proactive approach to user privacy and ensure the
                necessary steps are taken to protect the privacy of its users throughout their visiting
                experience. This website complies to all UK national laws and requirements for user privacy.</p>";
            echo "<h2>Use of cookies</h2>
                <p>This website uses cookies to better the users experience while visiting the website.
                Where applicable this website uses a cookie control system allowing the user on their
                first visit to the website to allow or disallow the use of cookies on their computer
                / device. This complies with recent legislation requirements for websites to obtain
                explicit consent from users before leaving behind or reading files such as cookies on
                a user's computer / device.
                Cookies are small files saved to the user's computers hard drive that track, save and
                store information about the user's interactions and usage of the website. This allows
                the website, through its server to provide the users with a tailored experience within this website.
                Users are advised that if they wish to deny the use and saving of cookies from this
                website on to their computers hard drive they should take necessary steps within their
                web browsers security settings to block all cookies from this website and its external serving vendors.
                This website uses tracking software to monitor its visitors to better understand how
                they use it. This software is provided by Google Analytics which uses cookies to track
                visitor usage. The software will save a cookie to your computers hard drive in order to
                track and monitor your engagement and usage of the website, but will not store, save or
                collect personal information. You can read Google's privacy policy here for further
                information [ http://www.google.com/privacy.html ].
                Other cookies may be stored to your computers hard drive by external vendors when this
                website uses referral programs, sponsored links or adverts. Such cookies are used for
                conversion and referral tracking and typically expire after 30 days, though some may
                take longer. No personal information is stored, saved or collected.</p>";
            echo "<h2>External links</h2>
                <p>Although this website only looks to include quality, safe and
                    relevant external links, users are advised adopt a policy of caution
                    before clicking any external web links mentioned throughout this website.
                    (External links are clickable text / banner / image links to other
                    websites, similar to; http://www.ratedpeople.com/profile/electrician-specialist.)
                    The owners of this website cannot guarantee or verify the contents of any
                    externally linked website despite their best efforts. Users should therefore
                    note they click on external links at their own risk and this website and its
                    owners cannot be held liable for any damages or implications caused by visiting
                    any external links mentioned.</p>";
            
            echo "</div></main>";
            echo "<img src='Assets/Img/fancy_background2.png' id='fancyBckgrnd2' alt='stylingElement'></img>"; //styling element
            echo "<img src='Assets/Img/fancy_background.png' id='fancyBckgrnd' alt='stylingElement'></img>"; //styling element  
        }
    }

    $page = new Website;
    $page->display();

