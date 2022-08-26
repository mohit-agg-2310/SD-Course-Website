<?php

// var setting 

$name=$_REQUEST['name'];
$email=$_REQUEST['email'];
$num=$_REQUEST['num'];
$appointment_description=$_REQUEST['appointment_description'];
$date=$_REQUEST['date'];
$time=$_REQUEST['time'];
$duration=$_REQUEST['duration'];


//check

if ( empty($name) || empty($email) || empty($num) || empty($appointment_description) || empty($date) || empty($time) || empty($duration) )
{
echo "<script type='text/javascript'>alert('message not send. Please fill all fields ');
 location.replace('https://testform00000001.000webhostapp.com/anil_sir/')
</script>";
}

else 
{

mail("anil67042@mmumullana.org", "Appointment Request", " Name:  $name \nEmail: $email \nMobile Number: $num \nMessage: $appointment_description \nDate: $date \nTime: $time \nDuration: $duration \n",  "From: $name <$email>");

echo "<script type='text/javascript'>alert('message send successfully.');
 location.replace('https://testform00000001.000webhostapp.com/anil_sir/')
</script>";

}

?>