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



    function submitContactForm() {

        var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
        var teachername = $('#teachername').val();
        var teachergender = $('#teachergender').val();
        var teacherclasse = $('#teacherclasse').val();
        var teachermatiere = $('#teachermatiere').val();
        var teacherphone = $('#teacherphone').val();

            if ( (teachername.trim() == '') && (teachergender.trim() == '') && (teacherclasse.trim() == '') && (teachermatiere.trim() == '') && (teacherphone.trim() == '')) {

            $('#teachername').focus();
            alert('⚠️ All fields are empty... Please Fill all the form fields in order to add a new teacher !');
            return false;

        } else if (teachername.trim() == '') {
            $('#teachername').focus();
            alert('Please enter your name.');
            return false;
            // alert('Please enter your name.');
            // $('#teachername').focus();
            // return false;
        } else if (teachergender.trim() == '') {
            alert('Please enter your gender.');

            $('#teachergender').focus();
            return false;
        } else if (teacherclasse.trim() == '') {
            alert('Please enter your class.');
            $('#teacherclasse').focus();
            return false;
        } else if (teachermatiere.trim() == '') {
            alert('Please enter your matiere.');
            $('#teachermatiere').focus();
            return false;
        } else if (teacherphone.trim() == '') {
            alert('Please enter your phone.');
            $('#teacherphone').focus();
            return false;
        }
    }

$(document).ready(function(){
  setTimeout(function(){ test(); });
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


