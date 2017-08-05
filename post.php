<?php

$errors         = array();      // array to hold validation errors
$data           = array();      // array to pass back data

// Tworzymy zmienną dla imienia i nazwiska
if (isset($_POST['name'])) $name = $_POST['name'];

// Tworzymy zmienną dla adresu email
if (isset($_POST['email'])) $email = $_POST['email'];

// Tworzymy zmienną dla wiadomości
if (isset($_POST['phone'])) $phone = $_POST['phone'];

// Tworzymy zmienną dla wiadomości
if (isset($_POST['message'])) $message = $_POST['message'];





// validate the variables ======================================================
    // if any of these variables don't exist, add an error to our $errors array

    if (empty($_POST['name']))
        $errors['name'] = 'Name is required.';

    if (empty($_POST['email']))
        $errors['email'] = 'Email is required.';

    if (empty($_POST['phone']))
        $errors['phone'] = 'Phone is required.';

    if (empty($_POST['message']))
        $errors['message'] = 'Message is required.';

// return a response ===========================================================

    // if there are any errors in our errors array, return a success boolean of false
    if ( ! empty($errors)) {

        // if there are items in our errors array, return those errors
        $data['success'] = false;
        $data['errors']  = 'Fail!';
    } else {

        // if there are no errors process our form, then return a message

        // DO ALL YOUR FORM PROCESSING HERE
        // THIS CAN BE WHATEVER YOU WANT TO DO (LOGIN, SAVE, UPDATE, WHATEVER)

        // show a message of success and provide a true success variable
        $data['success'] = true;
        $data['message'] = $name.$email.$phone.$message;
    }

    // return all our data to an AJAX call
    echo json_encode($data);




  ?>