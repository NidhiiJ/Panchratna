<?php
$errorMSG = "";

// Function to sanitize input
function clean_input($data) {
    return htmlspecialchars(trim($data), ENT_QUOTES, 'UTF-8');
}

// FIRST NAME
if (empty($_POST["fname"])) {
    $errorMSG .= "First Name is required. ";
} else {
    $fname = clean_input($_POST["fname"]);
}

// LAST NAME
if (empty($_POST["lname"])) {
    $errorMSG .= "Last Name is required. ";
} else {
    $lname = clean_input($_POST["lname"]);
}

// EMAIL
if (empty($_POST["email"])) {
    $errorMSG .= "Email is required. ";
} else {
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errorMSG .= "Invalid email format. ";
    }
}

// PHONE
if (empty($_POST["phone"])) {
    $errorMSG .= "Phone is required. ";
} else {
    $phone = clean_input($_POST["phone"]);
}

// MESSAGE
if (empty($_POST["message"])) {
    $errorMSG .= "Message is required. ";
} else {
    $message = clean_input($_POST["message"]);
}

$EmailTo = "youremail@yourdomain.com"; // Your email here
$subject = "Contact Inquiry from Panchratna Website";

// Send email if no errors
if ($errorMSG == "") {
    $headers  = "From: Panchratna Website <{$EmailTo}>\r\n";
    $headers .= "Reply-To: {$email}\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    $Body  = "First Name: $fname\n";
    $Body .= "Last Name: $lname\n";
    $Body .= "Email: $email\n";
    $Body .= "Phone: $phone\n";
    $Body .= "Message:\n$message\n";

    if (mail($EmailTo, $subject, $Body, $headers)) {
        echo "success";
    } else {
        echo "Something went wrong :(";
    }
} else {
    echo $errorMSG;
}
?>
