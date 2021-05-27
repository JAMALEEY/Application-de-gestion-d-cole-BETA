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

        // var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
        var teachername = $('#teachername').val();
        var teachergender = $('#teachergender').val();
        var teacherclasse = $('#teacherclasse').val();
        var teachermatiere = $('#teachermatiere').val();
        var teacherphone = $('#teacherphone').val();

            if ( (teachername.trim() == '') && (teachergender.trim() == '') && (teacherclasse.trim() == '') && (teachermatiere.trim() == '') && (teacherphone.trim() == '')) {

            $('#teachername').focus();
            alert('⚠️: All fields are empty... Please fill all the form\'s fields in order to add a new teacher !');
            return false;

        } else if (updateteachername.trim() == '') {
            $('#updateteachername').focus();
            alert('🛑 : Please enter your Teacher\'s name.');
            return false;
        }
        
        else if (teachername.trim() == '') {
            $('#teachername').focus();
            alert('🛑 : Please enter your Teacher\'s name.');
            return false;


        } else if (teachergender.trim() == '') {
            alert('🛑 : Please enter your Teacher\'s gender.');
            $('#teachergender').focus();
            return false;

            
        } else if (teacherclasse.trim() == '') {
            alert('🛑 : Please enter your Teacher\'s class.');
            $('#teacherclasse').focus();
            return false;
        } else if (teachermatiere.trim() == '') {
            alert('🛑 : Please enter your Teacher\'s matiere.');
            $('#teachermatiere').focus();
            return false;
        } else if (teacherphone.trim() == '') {
            alert('🛑 : Please enter your Teacher\'s phone.');
            $('#teacherphone').focus();
            return false;
        }
    }

    // function updateContactForm() {

    //     var teachername = $('#teachername').val();
    //     var teachergender = $('#teachergender').val();
    //     var teacherclasse = $('#teacherclasse').val();
    //     var teachermatiere = $('#teachermatiere').val();
    //     var teacherphone = $('#teacherphone').val();

    //         if ( (teachername.trim() == '') && (teachergender.trim() == '') && (teacherclasse.trim() == '') && (teachermatiere.trim() == '') && (teacherphone.trim() == '')) {

    //         $('#teachername').focus();
    //         alert('🛑 ATTENTION : The Fields that you are trying to update is empty ... ');
    //         return false;
    //     } 
    // }

// JS FORM VALISATION FOR STUDENTS


    function studentContactForm() {
        var reg = /^[A-Z0-9._%+-]+@([A-Z0-9-]+\.)+[A-Z]{2,4}$/i;
        var studentname = $('#studentname').val();
        var studentgender = $('#studentgender').val();
        var studentclass = $('#studentclass').val();
        var stdparents = $('#stdparents').val();
        var studentadress = $('#studentadress').val();
        var studentbirth = $('#studentbirth').val();
        var studentemail = $('#studentemail').val();

            if ( (studentname.trim() == '') && (studentgender.trim() == '') && (studentclass.trim() == '') && (stdparents.trim() == '') && (studentadress.trim() == '') && (studentbirth.trim() == '') && (studentemail.trim() == '') ) {

            $('#teachername').focus();
            alert('⚠️: All fields are empty... Please fill all the form\'s fields in order to add a new student !');
            return false;

        } else if (studentname.trim() == '') {
            $('#studentname').focus();
            alert('🛑 : Please enter your Student\'s name.');
            return false;
        }



        else if (studentgender.trim() == '') {
            alert('🛑 : Please enter your Student\'s gender.');
            $('#studentgender').focus();
            return false;
        } 
        

        else if (studentclass.trim() == '') {
                    alert('🛑 : Please enter your Student\'s class.');
                    $('#studentclass').focus();
                    return false;

                    
                }



        else if (stdparents.trim() == '') {
            $('#stdparents').focus();
            alert('🛑 : Please enter your Student\'s parent name.');
            return false;


        } else if (studentadress.trim() == '') {
            alert('🛑 : Please enter your Student\'s adress.');
            $('#studentadress').focus();
            return false;
        } else if (studentbirth.trim() == '') {
            alert('🛑 : Please enter your Student\'s birth date.');
            $('#studentbirth').focus();
            return false;


            // FORM VALIDATION EMAIL ON STRUDENT !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
        } else if ( studentemail.trim() == '' ) {
                    alert('🛑 : Please enter a Student\'s email.');
                    $('#studentemail').focus();
                    return false;
                }
          else if ( (studentemail.trim() == '') && (!reg.test(email)) ) {
            alert('🛑 : Please enter a Student\'s valid email.');
            $('#studentemail').focus();
            return false;
        }
    }

    function updateStudentForm() {

        var studentname = $('#studentname').val();
        var studentgender = $('#studentgender').val();
        var studentclass = $('#studentclass').val();
        var stdparents = $('#stdparents').val();
        var studentadress = $('#studentadress').val();
        var studentbirth = $('#studentbirth').val();
        var studentemail = $('#studentemail').val();

            if ( (studentname.trim() == '') && (studentgender.trim() == '') && (studentclass.trim() == '') && (stdparents.trim() == '') && (studentadress.trim() == '') && (studentbirth.trim() == '') && (studentemail.trim() == '') ) {

            $('#studentname').focus();
            alert('🛑 ATTENTION : The Fields that you are trying to update is empty ... ');
            return false;
        } 
    }

    
// JS FORM VALIDATION FOR PARENTS


    function theparentContactForm() {
        var theparentname = $('#theparentname').val();
        var theparentgender = $('#theparentgender').val();
        var theparentjob = $('#theparentjob').val();
        var theparentadress = $('#theparentadress').val();
        var theparentphone = $('#theparentphone').val();
  

            if ( (theparentname.trim() == '') && (theparentgender.trim() == '') && (theparentjob.trim() == '') && (theparentadress.trim() == '') && (theparentphone.trim() == '') ) {

            $('#theparentname').focus();
            alert('⚠️: All fields are empty... Please fill all the form\'s fields in order to add a new parent !');
            return false;

        } else if (theparentname.trim() == '') {
            $('#theparentname').focus();
            alert('🛑 : Please enter your Parent\'s name.');
            return false;
        }



        else if (theparentgender.trim() == '') {
            alert('🛑 : Please enter your Parent\'s gender.');
            $('#theparentgender').focus();
            return false;
        } 
        

        else if (theparentjob.trim() == '') {
                    alert('🛑 : Please enter your Parent\'s job.');
                    $('#theparentjob').focus();
                    return false;

                    
                }



        else if (theparentadress.trim() == '') {
            $('#theparentadress').focus();
            alert('🛑 : Please enter your Parent\'s adress.');
            return false;


        } else if (theparentphone.trim() == '') {
            alert('🛑 : Please enter your Parent\'s phone.');
            $('#theparentphone').focus();
            return false;
        }
    }

    // function updateTheparentForm() {

    //       var theparentname = $('#theparentname').val();
    //     var theparentgender = $('#theparentgender').val();
    //     var theparentjob = $('#theparentjob').val();
    //     var theparentadress = $('#theparentadress').val();
    //     var theparentphone = $('#theparentphone').val();


    //         if (theparentname.trim() == '')  {

    //         $('#theparentname').focus();
    //         alert('🛑 ATTENTION : The Fields that you are trying to update is empty ... ');
    //         return false;

    //     }
    // }














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


