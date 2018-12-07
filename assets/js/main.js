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

  var title1 = document.getElementById('productsTable').children[1].children[0].getElementsByTagName('td')[1].innerHTML;
  var title2 = document.getElementById('productsTable').children[1].children[1].getElementsByTagName('td')[1].innerHTML;
  var title3 = document.getElementById('productsTable').children[1].children[2].getElementsByTagName('td')[1].innerHTML;
  console.log(document.getElementById('productsTable').children[1].children[0].getElementsByTagName('td')[1].innerHTML);
  console.log(document.getElementById('productsTable').children[1].children[1].getElementsByTagName('td')[1].innerHTML);
  console.log(document.getElementById('productsTable').children[1].children[2].getElementsByTagName('td')[1].innerHTML);
  $('#productOneLabel').html(title1);
  $('#productTwoLabel').html(title2);
  $('#productThreeLabel').html(title3);



});