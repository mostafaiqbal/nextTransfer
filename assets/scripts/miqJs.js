// miq JS by Mostafa Iqbal

$(document).ready(function(){
    $(window).scroll(function(){
        var scroll = $(window).scrollTop();
        if (scroll > 200) {
          $("#navWrap").css("background" , "#000000");
        } else if (scroll < 200) {
            $("#navWrap").css("background" , "");
        } else{
            $(".navWrap").css("background" , "");  	
        }
    })
  })