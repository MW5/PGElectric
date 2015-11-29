$(window).on("load", function() {
    //for smartphones
    if ($(window).width()<860) {
        $(".standardNav").removeClass("standardNav").addClass("smartphoneNav");
        $(".standardNavBtnList").removeClass("standardNavBtnList").addClass("smartphoneNavBtnList");
        $(".standardNavBtn").removeClass("standardNavBtn").addClass("smartphoneNavBtn");
        //fixes contact on mobile devices
        $("#contactCol1-2L").css('display', 'inline');
        $("#contactCol2-2R").css('display', 'inline');
        //no fancy on background
        $("#fancyBckgrnd").remove();
        $("#fancyBckgrnd2").remove();
        //smartphone gallery fix
        $("#gallCol1-2L").remove();
        $("#gallCol2-2R").attr("id", "smartphoneGall");
        $("#arrowUp").remove();
        $("#arrowDown").remove();
    }
    
    //signal current site
    $(".navBtn").each(function(){
        titleComparable = $(document).attr("title").toLowerCase().replace(/ /g,'');
        textComparable = $(this).text().toLowerCase().replace(/ /g,'');
        if(textComparable === titleComparable) {
            $(this).addClass("navActive");
        }
    });
    
    //gallery functionality   
    //calculate maximal scroll position
    calcMaxPos = function() {
        heightSum = 0;
        //get sum of images heights
        $("#gallCol2-2R .imgBarPic").each(function() {
                    heightSum += $(this).height();
        });
        //plus image column height
        colHeight = $("#gallCol2-2R").height();
        return colHeight - heightSum;
    };
    
    position = 0;
    maxPos = calcMaxPos();
    smoothness = 5; //5
    speed = 15; //30
    
    $("#arrowUp").mouseover(function() {
        scrollUp = setInterval(function(){
            if (position < 0) {
                position+=smoothness;
                $("#gallCol2-2R").find($(".imgBarPic")).css("top", position);  
                $("#arrowDown").show();
                } else {
                    $("#arrowUp").hide();
                } 
        }, speed);  
    });
    $("#arrowUp").mouseout(function() {
        clearInterval(scrollUp);
    });
    
    $("#arrowDown").mouseover(function() {
        scrollDown = setInterval(function(){
            if (position > maxPos) {
                position-=smoothness;
                $("#gallCol2-2R").find($(".imgBarPic")).css("top", position);
                $("#arrowUp").show();
                } else {
                    $("#arrowDown").hide();
                } 
        }, speed); 
    });
    $("#arrowDown").mouseout(function() {
        clearInterval(scrollDown);
    });
    
    $(".imgBarPic").click(function() {
        clickedSrc = $(this).attr("src");
        trimMinIndex = clickedSrc.indexOf("min_");
        photoPath = clickedSrc.substr(0, trimMinIndex);
        bigPhotoSrc = clickedSrc.substr(trimMinIndex+4);
        $("#imgCurrent").attr("src", photoPath+bigPhotoSrc);
    });
    
});