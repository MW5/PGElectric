$(window).on("load", function() {
    //add rule to test screen size and change nav into dropdown menu!
    
    //signal current site
    $(".navBtn").each(function(){
        titleComparable = $(document).attr("title").toLowerCase().replace(/ /g,'');
        textComparable = $(this).text().toLowerCase().replace(/ /g,'');
        if(textComparable === titleComparable) {
            $(this).addClass("navActive");
        }
    });
    
    //gallery functionality
        //img bar click handlers
    //clickable arrows
    /*$("#arrowDown").click(function() {
        if ($("#gallCol2-2R").find($(".imgBarPic:last")).hasClass("imgHidden")) {
            $("#gallCol2-2R").find($(".imgVisible:first")).removeClass("imgVisible").addClass("imgHidden");
            $("#gallCol2-2R").find($(".imgVisible:last")).next().removeClass("imgHidden").addClass("imgVisible");
        } 
    });
    $("#arrowUp").click(function() {
        if ($("#gallCol2-2R").find($(".imgBarPic:first")).hasClass("imgHidden")) {
            $("#gallCol2-2R").find($(".imgVisible:last")).removeClass("imgVisible").addClass("imgHidden");
            $("#gallCol2-2R").find($(".imgVisible:first")).prev().removeClass("imgHidden").addClass("imgVisible");
        } 
    });*/
    
    //calculate maximal scroll position
    calcMaxPos = function() {
        heightSum = 0;
        //get sum of images heights
        $("#gallCol2-2R .imgBarPic").each(function() {
                    heightSum += $(this).height();
                    console.log(heightSum);
        });
        //plus image column height
        colHeight = $("#gallCol2-2R").height();
        return colHeight - heightSum;
    };
    
    position = 0;
    maxPos = calcMaxPos();
    
    $("#arrowUp").mouseover(function() {
        scrollUp = setInterval(function(){
            if (position < 0) {
                position+=10;
                $("#gallCol2-2R").find($(".imgBarPic")).css("top", position);  
                $("#arrowDown").show();
                } else {
                    $("#arrowUp").hide();
                } 
        }, 60);  
    });
    $("#arrowUp").mouseout(function() {
        clearInterval(scrollUp);
    });
    
    $("#arrowDown").mouseover(function() {
        scrollDown = setInterval(function(){
            if (position > maxPos) {
                position-=10;
                $("#gallCol2-2R").find($(".imgBarPic")).css("top", position);
                $("#arrowUp").show();
                } else {
                    $("#arrowDown").hide();
                } 
        }, 60); 
    });
    $("#arrowDown").mouseout(function() {
        clearInterval(scrollDown);
    });
    
    $(".imgBarPic").click(function() {
        clickedSrc = $(this).attr("src");
        $("#imgCurrent").attr("src", clickedSrc);
    });
    
});