$(document).ready(function(){
  $("#div_author").mouseenter(function(){
    $("#img_author").slideDown(1000);
    $("#about_author").slideDown(1000);
  });
  $("#div_author").mouseleave(function(){
    $("#img_author").slideUp(1000);
    $("#about_author").slideUp(1000);
  });
});
