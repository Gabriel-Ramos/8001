<?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
$link = mysqli_connect("localhost", "root", "", "8001");
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
 
// Escape user inputs for security
$first_name = mysqli_real_escape_string($link, $_POST['cod']);
$last_name = mysqli_real_escape_string($link, $_POST['nome']);
$email_address = mysqli_real_escape_string($link, $_POST['cidade']);
$email_address2 = mysqli_real_escape_string($link, $_POST['posicao_global']);
 
// attempt insert query execution
$sql = "INSERT INTO localidade (cod, nome, cidade, posicao_global) VALUES ('$first_name', '$last_name', '$email_address', '$email_address2')";
if(mysqli_query($link, $sql)){
    echo "Records added successfully.";
} else{
    echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
}
 
// close connection
mysqli_close($link);
?>