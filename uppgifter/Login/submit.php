<?php

<?php
if(isset($_POST['username'])){

    
$dbc = mysqli_connect("localhost","root","","register");

    
  $query = "SELECT * FROM register WHERE username='".$_POST['username']."' and password='".$_POST['password']."'";
  