$(document).ready(function(){

  $('#sidebarCollapse').on('click', function () {
    $('#sidebar').toggleClass('active');

    if($('#sidebar').hasClass('active')) {
      $('#dash-tab').html("Dash");
    } 
    if(!$('#sidebar').hasClass('active')) {
      $('#dash-tab').html('Dashboard <i class="fas fa-caret-right float-right"></i>');
    }
  });



  $('#myTab a').on('click', function (e) {
    e.preventDefault()
    $(this).tab('show')
  })


});