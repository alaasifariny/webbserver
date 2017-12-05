<?php

<?php
if(isset($_POST['username'])){

    
$dbc = mysqli_connect("localhost","root","","register");

    
  $query = "SELECT * FROM register WHERE username='".$_POST['username']."' and password='".$_POST['password']."'";
  
    $result = mysqli_query($dbc,$query);
    if(mysqli_fetch_array($result)){
        echo "inloggad";
        
        
    } else{
    echo "Försök igen";
}
}
?>