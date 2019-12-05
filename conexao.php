<?php
    $con = mysqli_connect("localhost", "root", "", "reuni");
    $con_api = mysqli_connect("localhost", "root", "", "api");
    mysqli_set_charset($con, "utf8");
    mysqli_set_charset($con_api, "utf8");
?>