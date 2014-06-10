<?php

$errors         = array();      // array to hold validation errors
$data           = array();      // array to pass back data

// validate the variables ======================================================
    if (empty($_POST['salutation']))
        $errors['salutation'] = 'salutation is required.';
    else
        $data['salutation'] = $_POST['salutation']; // (r)

    if (empty($_POST['firstname']))
        $errors['firstname'] = 'firstname is required.';
    else
        $data['firstname'] = $_POST['firstname']; // (r)

    if (empty($_POST['lastname']))
        $errors['lastname'] = 'lastname is required.';
    else
        $data['lastname'] = $_POST['lastname']; // (r)

    if (empty($_POST['birthday']))
        $errors['birthday'] = 'birthday is required.';
    else
        $data['birthday'] = $_POST['birthday']; // (r)

    if (!empty($_POST['phone']))
        $data['phone'] = $_POST['phone'];        

    if (empty($_POST['email']))
        $errors['email'] = 'email is required.';
    else
        $data['email'] = $_POST['email']; // (r)

    if (empty($_POST['date']))
        $errors['date'] = 'date is required.';
    else
        $data['date'] = $_POST['date']; // (r)

    if (empty($_POST['adults']))
        $errors['adults'] = 'adults is required.';
    else
        $data['adults'] = $_POST['adults']; // (r)

    if (empty($_POST['children']))
        $errors['children'] = 'children is required.';
    else
        $data['children'] = $_POST['children']; // (r)

    if (!empty($_POST['notes']))
        $data['notes'] = $_POST['notes'];

// return a response ===========================================================
    
    // response if there are errors
        if ( ! empty($errors)) {

            // if there are items in our errors array, return those errors
            $data['success'] = false;
            $data['errors']  = $errors;
        } else {

            // if there are no errors, return a message
            $data['success'] = true;
            $data['message'] = 'Success!';

            /* Empfänger */
            $empfaenger = 'ffittschen@gmail.com';

            /* Absender */
            $absender = 'info@ferienwohnung-wimberger.de';

            /* Betreff */
            $subject = 'Neue Anfrage von' + $data['firstname'] + ' ' + $data['lastname'] + '';

            /* Nachricht */
            $message = $data;

            /* Verschicken der Mail */
            mail($empfaenger, $subject, $message, 'From: anfragen@ferienwohnung-wimberger.de', '-f info@ferienwohnung-wimberger.de');
        }

    // return all our data to an AJAX call
    echo json_encode($data);
    
?>

