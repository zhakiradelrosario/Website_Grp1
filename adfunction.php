<?php
require_once 'adrecord.php';

function display_data(){
    global $con;
    $query = "select * from visits";
    $result = mysqli_query($con,$query);
    return $result;
}
?>