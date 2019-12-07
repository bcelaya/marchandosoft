function togglemenu(){
$(document).ready(function(){
  $("button").click(function(){
    $(".productos").slideToggle();
        $.post("comidaarticulos.php");
  });
});
}