$(document).ready(function () {
  // Loose notvalid class after validation
  $('input[type=text]').focus(function(){
    $(this).removeClass('notvalid');
  });
  
});