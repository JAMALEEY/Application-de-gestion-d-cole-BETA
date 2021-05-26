<?php
// if (isset($_POST['contactFrmSubmit']) && !empty($_POST['teachername']) && !empty($_POST['teachergender']) && !empty($_POST['teacherclasse']) && !empty($_POST['teachermatiere']) && !empty($_POST['teacherphone'])) {

//     // Submitted form data
//     $teachername   = $_POST['teachername'];
//     $teachergender  = $_POST['teachergender'];
//     $teacherclasse = $_POST['teacherclasse'];
//     $teachermatiere  = $_POST['teachermatiere'];
//     $teacherphone = $_POST['teacherphone'];

//     /*
//      * Send email to admin
//      */
//     // $to     = 'admin@example.com';
//     // $subject = 'Contact Request Submitted';

//     $htmlContent = '
//     <h4>Contact request has submitted at CodexWorld, details are given below.</h4>
//     <table cellspacing="0" style="width: 300px; height: 200px;">
//         <tr>
//             <th>Name:</th><td>' . $teachername . '</td>
//         </tr>
        
//         <tr>
//             <th>Name:</th><td>' . $teachergender . '</td>
//         </tr>


//         <tr style="background-color: #e0e0e0;">
//             <th>Email:</th><td>' . $teacherclasse . '</td>
//         </tr>
//         <tr>
//             <th>Message:</th><td>' . $teachermatiere . '</td>
//         </tr>
//         <tr>
//             <th>Message:</th><td>' . $teacherphone . '</td>
//         </tr>
//     </table>';

//     // Set content-type header for sending HTML email
//     $headers = "MIME-Version: 1.0" . "\r\n";
//     $headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";

//     // Additional headers
//     $headers .= 'From: CodexWorld<sender@example.com>' . "\r\n";

//     // Send email
//     if (mail($to, $subject, $htmlContent, $headers)) {
//         $status = 'ok';
//     } else {
//         $status = 'err';
//     }

//     // Output status
//     echo $status;
//     die;
// }
