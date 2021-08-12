<?php 

$postData = $_POST;
if( isset($_POST['email']) ) {
    $email = $_POST['email'];
}
else{
    $email ="";
}
if( isset($_POST['nombre']) ) {
    $name = $_POST['nombre'];
}
else{
    $name ="";
}
if( isset($_POST['telefono']) ) {
    $phone = $_POST['telefono'];
}
else{
    $phone ="";
}
if( isset($_POST['nombre-empresa']) ) {
    $nombreEmpresa = $_POST['nombre-empresa'];
}
else{
    $nombreEmpresa ="";
}
if( isset($_POST['asunto']) ) {
    $asunto = $_POST['asunto'];
}
else{
    $asunto ="";
}
if( isset($_POST['mensaje']) ) {
    $mensaje = $_POST['mensaje'];
}
else{
    $mensaje ="";
}

if( isset($_POST['industria']) ) {
    $industria = $_POST['industria'];
}
else{
    $industria ="";
}

if( isset($_POST['punto-carga']) ) {
    $puntoCarga = $_POST['punto-carga'];
}
else{
    $puntoCarga ="";
}


$statusMsg ="";

if(trim($nombreEmpresa) == "" || trim($name) == "" || trim($phone) == "" || trim($mensaje)=="" || trim($email)=="" || trim($asunto)=="")
{
    $arr = array("success" => false, "message" => $statusMsg);
    echo json_encode($arr);
    return;
}

$isCotizacion = strpos($asunto, "cotización") !== false;

                
// Recipient
$toEmail = 'contacto@autothermos.com';

// Sender
$from = 'contacto@autothermos.com';
$fromName = 'Auto Thermos Web';

// Subject
$emailSubject = 'Informacion Contacto enviada por '.$name;

// Message 
$htmlContent = '<h2>Informacion de contacto</h2>
    <p><b>Nombre:</b> '.$name.'</p>
    <p><b>E-mail:</b> '.$email.'</p>
    <p><b>Telefono:</b> '.$phone.'</p>
    <p><b>Nombre de la empresa:</b> '.$nombreEmpresa.'</p>
    <p><b>Asunto:</b> '.$asunto.'</p>
    <p><b>Mensaje:</b> '.$mensaje.'</p>';

if($isCotizacion){
    $htmlContent.= '<p><b>Industria:</b> '.$industria.'</p>';
    $htmlContent.= '<p><b>Punto(s) de carga:</b> '.$puntoCarga.'</p>';
}

// carriage return type (RFC)
$eol = "\r\n"; 

// Header for sender info
$headers = "From: $fromName"." <".$from.">".$eol;

// Set content-type header for sending HTML email
$headers .= "MIME-Version: 1.0".$eol;
$headers .= "Content-type:text/html;charset=UTF-8".$eol;

// Send email
$mail = mail($toEmail, $emailSubject, $htmlContent, $headers); 


// If mail sent
if($mail){
    $statusMsg= 'Sus datos fueron enviados';        
    $arr = array("success" => true, "message" => $statusMsg);

}else{
    $arr = array("success" => false, "message" => $statusMsg);
}
echo json_encode($arr);

?>