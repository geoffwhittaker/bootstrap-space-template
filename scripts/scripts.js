/* thumnbnail gallery ============================================================*/

function changeImage(event){
    event = event || window.event;
    var targetElement = event.target || event.srcElement;
 if(targetElement.tagName == "IMG"){   
    document.getElementById("mainImage").src = targetElement.getAttribute("src");
}

}
/*  portfolio text show and hide plus dim image ===============================*/
$( document ).ready(function() {
    $(".text").hide();

      $('.showp').mouseover(function() {
        $('.text', this).show();
        $('.portImg', this).addClass("darken");
    });
    $('.showp').mouseout(function() {
        $('.text', this).hide();
        $('.portImg', this).removeClass("darken");
    });
});

