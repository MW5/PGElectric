$(document).ready(function() {
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
        //img bar
    $("#arrowDown").click(function() {
        if ($("#gallCol2-2R").find($(".imgBarPic:last")).hasClass("imgHidden")) {
            $("#gallCol2-2R").find($(".imgVisible:first")).removeClass("imgVisible").addClass("imgHidden");
            $("#gallCol2-2R").find($(".imgVisible:last")).next().removeClass("imgHidden").addClass("imgVisible");
        } 
    });
    $("#arrowUp").click(function() {
        if ($("#gallCol2-2R").find($(".imgBarPic:first")).hasClass("imgHidden")) {
            console.log("dupa");
            $("#gallCol2-2R").find($(".imgVisible:last")).removeClass("imgVisible").addClass("imgHidden");
            $("#gallCol2-2R").find($(".imgVisible:first")).prev().removeClass("imgHidden").addClass("imgVisible");
        } 
    });
    $(".imgBarPic").click(function() {
        clickedSrc = $(this).attr("src");
        $("#imgCurrent").attr("src", clickedSrc);
    });
    
});