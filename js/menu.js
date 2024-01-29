/*Horizontal menu*/
$(document).ready(function(){
    $("#hmenu ul li").mouseover(function(){
        $(this).children('ul').css("visibility","visible");
                            $(this).children('ul').css("z-index","1000");
    });
    $("#hmenu ul li").mouseout(function(){
        $(this).children('ul').css("visibility","hidden");

    });
});


