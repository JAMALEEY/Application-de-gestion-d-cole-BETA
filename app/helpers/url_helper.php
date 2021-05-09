
                    <!-- simple page redirect -->
<?php 

function redirect($page){
    header('location: ' . URLROOT . '/' . $page);
}             


?>