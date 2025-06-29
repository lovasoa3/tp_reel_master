<?php
function connectionBD(){
    return $db=mysqli_connect("localhost","root","","employees");
}
?>