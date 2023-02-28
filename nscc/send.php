<?php
    // retrieve  all 6 values sent by  the web page
    $field1 = $_POST['field1'];  $field2 = $_POST['field2'];
    $field3 = $_POST['field3'];  $field4 = $_POST['field4'];
    $field5 = $_POST['field5'];  $field6 = $_POST['field6'];

    // do some error checking on the server side (error checking not required for assignment)
    $errors = 0;            $errorMsg ="";
    if($field1 == "") {$errors = 1; $errorMsg += "field 1 is required."; }
    if($field2 == "") {$errors = 2; $errorMsg += "field 2 is required."; }
    if($field3 == "") {$errors = 3; $errorMsg += "field 3 is required."; }

    //send all the data back to the server
     if ($errors == 0){
        echo "field1 : $field1, field2: $field2, field3: $field3, field4: $field4,field5: $field5, field6: $field6";

     }
     else {
        echo $errorMsg;
     }

?>