<?php
$array = array("name" => "", "email" => "", "message" => "", "nameError" => "", "emailError" => "", "messageError" => "", "isSuccess" => false);
$messageSent = "";
$emailTo = "louiseleray.dev@gmail.com";

if ($_SERVER["REQUEST_METHOD"] == "POST"){
$array["name"] = test_input($_POST["name"]);
$array["email"] = test_input($_POST["email"]);
$array["message"] = test_input($_POST["message"]);
$array["isSuccess"] = true;
$emailText = "";

if(empty($array["name"])){
    $array['isSuccess'] = false;
} else {
    $emailText .= "Nom : {$array['name']}\n";
}

if(!isEmail($array["email"])){
    $array['isSuccess'] = false;
} else {
    $emailText .= "Email: {$array['email']}\n";
}

if(empty($array["message"])){
    $array['isSuccess'] = false;
} else {
    $emailText .= "Message : {$array['message']}\n";
}

if($array["isSuccess"]){
    $headers = "From: ".$array["name"]." <".$array["email"].">";
    mail($emailTo, "Un message de votre site", $emailText, $headers);
    $messageSent = "Votre message a bien été envoyé !";
} else {
    $messageSent = "Votre message n'a pas pu être envoyé... \n Avez-vous rempli le formulaire correctement ?";
}
}


function isEmail($email){
    return filter_var($email, FILTER_VALIDATE_EMAIL);
}

function test_input($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
}
?>
