<?php

$split   = $_GET['manyWays'];
$howMuch = $_GET['tab'];
$service = $_GET['howWasService'];
$roundUp = $_GET['round'];


$error ='';


if($split == ''){
  $error = 'No NUMBER of participants assigned<br>';
}
if($howMuch == ''){
  $error .='No tab assigned' ;
}

if($error =='')
  {

  if($service =='good'){
  $per = .15;
  }
  if($service =='ok'){
  $per = .1;
  }
  if($service =='bad'){
  $per = 00;
  }
  $total = (($howMuch*$per)+$howMuch)/$split;

  if($roundUp =='yes')
  {
  $total = ceil($total);
  }

  $background = 'green';
  $total = 'Everyone owes $'.$total;
}
else{
  $total = $error;
  $background = 'red';
}

 ?>
