<?php

    $data = array();      // array to pass back data

    $data['salutation'] = $_POST['salutation']; // (r)
    $data['lastname'] = $_POST['lastname']; // (r)
    $data['firstname'] = $_POST['firstname']; // (r)
    $data['birthday'] = $_POST['birthday']; // (r)
    $data['phone'] = $_POST['phone'];        
    $data['email'] = $_POST['email']; // (r)
    $data['date'] = $_POST['date']; // (r)
    $data['adults'] = $_POST['adults']; // (r)
    $data['children'] = $_POST['children']; // (r)
    $data['message'] = $_POST['message'];       

// return a response ===========================================================

    $data['success'] = true;
    $data['message'] = 'Success!';

    $to = "ffittschen@gmail.com";
    $subject = "Neue Anfrage von $firstname $lastname";

    mail($to, $subject, $data, "From: anfragen@ferienwohnung-wimberger.de\r\n");

    // return all our data to an AJAX call
    echo json_encode($data);

    
?>

