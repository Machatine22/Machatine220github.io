
<h2>
    Sucesso!
    <h2>
<?php

/*This file is responsable for sending the message to me*/


/*Fields validation*/

if(empty($_GET["name"]) || empty(  $_GET["email"]) || empty( $_GET["message"])  ){
    
    echo 'Todos os campos devem estar devidamente prenchidos';
/*$check = "invalid-field";*/}

else{
    
    if (isset($_GET["name"]) && !empty($_GET["name"])) {
$from = $_GET["name"];
    
}

if (isset($_GET["email"]) && !empty($_GET["email"])) {
$Sender_email = $_GET["email"];
}

if (isset($_GET["Message"]) && !empty($_GET["Message"])) {
$Message = $_GET["Message"];
}


/*If the fields are valid then*/
$to ='machatinegugu@gmail.com';

$subject = 'Web Development Services';

echo "$Message";
echo "$from";


$Send = mail($to,$subject,$message);

if($Send){
    
    $Resp = "Mensagem enviada com sucesso";
    
}
else{
$Resp = "Falha, mensagem nao pode ser enviada";}}
?>