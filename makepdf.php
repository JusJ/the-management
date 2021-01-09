<?php

require_once __DIR__ . '/vendor/Autoload.php';

//Grab variables
$name= $_POST['name'];
$username= $_POST['username'];
$email= $_POST['email'];
$mobile= $_POST['mobile'];

$mpdf = new \Mpdf\Mpdf();

//Create PDF

$info ='';

$info .= '<h1>Your Details</h1>';

//Add Data
$info .= '<strong>Your Name</strong>' . $name . '<br />';

//Write Pdf
$mpdf->WriteHTML($info);
$mpdf->Output('Management.pdf', 'D');