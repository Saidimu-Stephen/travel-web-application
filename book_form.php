<?php

   $connection = mysqli_connect('localhost','root','','book_db');

   if(isset($_POST['send'])){
      $name = $_POST['name'];
      $email = $_POST['email'];
      $phone = $_POST['phone'];
      $location= $_POST['location'];
      $apartment = $_POST['apartment'];
      $no_days = $_POST['n0_days'];
      $checkin = $_POST['checkin'];
      $checkout= $_POST['checkout'];



      $request = " insert into book_form(name, email,	phone, address, location, no_days, checkin, checkout) 
      values('$name','$email','$phone','$location','$apartment','$no_days','$checkout','$checkin) ";
      mysqli_query($connection, $request);

      header('location:book.php'); 

   }else{
      echo 'something went wrong please try again!';
   }

?>