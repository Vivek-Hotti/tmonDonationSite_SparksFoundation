<?php

//variable setting
$name = $_REQUEST['name'];
$email = $_REQUEST['Email'];
$amount = $_REQUEST['Amount'];

//check input fields
if(empty($name) || empty($email) || empty($amount))
{
    echo "Dear Donor, please fill all the fields";
}
else
{
    mail($email, "Transaction Succesfull! - The Mumbai OpenSource Network", "Dear Sir/Madam, Thank you for your kind donation of INR $amount to The Mumbai OpenSource Network Foundation. This can be treated as confirmation to your donation.");
}

?>