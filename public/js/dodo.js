// ---------Responsive-navbar-active-animation-----------
function test(){
  var tabsNewAnim = $('#navbarSupportedContent');
  var selectorNewAnim = $('#navbarSupportedContent').find('li').length;
  var activeItemNewAnim = tabsNewAnim.find('.active');
  var activeWidthNewAnimHeight = activeItemNewAnim.innerHeight();
  var activeWidthNewAnimWidth = activeItemNewAnim.innerWidth();
  var itemPosNewAnimTop = activeItemNewAnim.position();
  var itemPosNewAnimLeft = activeItemNewAnim.position();
  $(".hori-selector").css({
    "top":itemPosNewAnimTop.top + "px", 
    "left":itemPosNewAnimLeft.left + "px",
    "height": activeWidthNewAnimHeight + "px",
    "width": activeWidthNewAnimWidth + "px"
  });
  $("#navbarSupportedContent").on("click","li",function(e){
    $('#navbarSupportedContent ul li').removeClass("active");
    $(this).addClass('active');
    var activeWidthNewAnimHeight = $(this).innerHeight();
    var activeWidthNewAnimWidth = $(this).innerWidth();
    var itemPosNewAnimTop = $(this).position();
    var itemPosNewAnimLeft = $(this).position();
    $(".hori-selector").css({
      "top":itemPosNewAnimTop.top + "px", 
      "left":itemPosNewAnimLeft.left + "px",
      "height": activeWidthNewAnimHeight + "px",
      "width": activeWidthNewAnimWidth + "px"
    });
  });
}


funtion getdata(){

  
  $.ajax({
    type: "POST",
    url: "ecoleman/app/views/teachers/teachers.php",
    data:{
      'checking_add':true,
      'teachername': teachername,
      'teachergender': teachergender,
      'teacherclass': teacherclass,
      'teachermatiere': teachermatiere,
      'teacherphone': teacherphone,

    },
        success: function (response){
console.log(response);
        }



      });
    

  });
 });





$(document).ready(function(){
  getdata();

  $('.teacher_add_ajax').click(function (e){
    e.preventDefault();

    var teachername = $('.teachername').val();
    var teachergender = $('.gender').val();
    var teacherclasse = $('.class').val();
    var teachermatiere = $('.matiere').val();
    var teacherphone = $('.phone').val();




  $.ajax({
    type: "POST",
    url: "ecoleman/app/controllers/Dashboards.php",
    success: function (response) {
      $.each(response, function (key, value) {
        $('studentdata').append('<tr>' +
              '<td>'+value['id']+'</td>\
              <td>'+value['teachername']+'</td>\
              <td>'+value['gender']+'</td>\
              <td>'+value['class']+'</td>\
              <td>'+value['matiere']+'</td>\
              <td>'+value['phone']+'</td>\
              </td>');
      });
    }

  });






  });
  setTimeout(function(){ test(); });
  // for the form validation
  
});




$(window).on('resize', function(){
  setTimeout(function(){ test(); }, 500);
});
$(".navbar-toggler").click(function(){
  setTimeout(function(){ test(); });
});

$('#teachersModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})


$('#studentsModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})


$('#parentsModal').on('shown.bs.modal', function () {
  $('#myInput').trigger('focus')
})

