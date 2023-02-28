<?php

    $first_name = $_POST['first-name'];
    $last_name = $_POST['last-name'];
    $street_address = $_POST['street-address'];
    $province = $_POST['province-state'];
    $country = $_POST['country'];
    $email = $_POST['email'];
    $password1 = $_POST['password1'];
    $password2 = $_POST['password2'];
    try {
        $address2 =  $_POST['address2'];
        $address3 = $_POST['address3'];
    } catch (\Throwable $th) {
        $address2 = null;
        $address3 = null;
    }
    

    echo "first_name : $first_name, last_name: $last_name, street_address: $street_address, province: $province,country: $country, email: $email, password1: $password1, address2: $address2, address3: $address3";

?>