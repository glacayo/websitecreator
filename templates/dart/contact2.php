<?php
include 'php/text.php';
//Dev: Geovanny Lacayo
/*************** ANTES DE UTILIZAR EL SCRIPT DEBES DE: *******************************
1- Pegar el siguiente codigo JavaScript en el Header de tu pagina:

<script type="text/javascript">
   onload=function() {
   document.getElementById('dir').value = location.href;
   }
</script>

2- Pegar el siguiente INPUT al final de su formulario de contacto

<input type="hidden" name="url" id="dir" size="100"/>
***************************************************************************************/
/*error_reporting(E_ALL & ~E_NOTICE);
include("geoiploc.php"); 
  if (empty($_POST['checkip']))
  {
        $ip = $_SERVER["REMOTE_ADDR"]; 
  }
  else
  {
        $ip = $_POST['checkip']; 
  }*/

//obtenemos la url actual de la pagina donde se encuentra el contact form, la obtenemos mediante el codigo JS 
//que deberia de estar en el HEADER de la pagina donde se encuentra el contact form, dicho codigo manda la url
//a un campo INPUT de tipo HIDDEN con nombre "dir"
$dir = $_POST['url'];
//funcion para validar el email
function validaemail($correo) { 
    if (preg_match('/^[A-Za-z0-9-_.+%]+@[A-Za-z0-9-.]+.[A-Za-z]{2,4}$/', $correo)) return true; 
    //Si el e-mail ingresado no es valido, engonces aparece una ventana de alerta 
    } if(!validaemail($_POST['email'])) {            
            //mandamos el mensaje de error
            echo '<script language="javascript"> window.parent.alert("Invalid email!."); </script>';
            //inmediatamente redireccionamos a la URL donde se encuentra el contact form
            echo '<script language="javascript"> window.setTimeout( window.location.href="'.$dir.'",1000); </script>';
//Si el no escribió el nombre, e-mail, y el mensaje aparece un alerta 
        }elseif(empty($_POST['name'])) {
            echo '<script language="javascript"> alert("Please fill in the NAME field!"); </script>';
            //inmediatamente redireccionamos a la URL donde se encuentra el contact form
            echo '<script language="javascript"> window.setTimeout( window.location.href="'.$dir.'",1000); </script>';
        }
        elseif(empty($_POST['email'])) {
            echo '<script language="javascript"> alert("Please fill in the EMAIL field!"); </script>';
            //inmediatamente redireccionamos a la URL donde se encuentra el contact form
            echo '<script language="javascript"> window.setTimeout( window.location.href="'.$dir.'",1000); </script>';
        }
        elseif(empty($_POST['message'])) {
            echo '<script language="javascript"> alert("Please fill in the MESSAGE field!!"); </script>';
            //inmediatamente redireccionamos a la URL donde se encuentra el contact form
            echo '<script language="javascript"> window.setTimeout( window.location.href="'.$dir.'",1000); </script>';
        }
        else{
            $mymail ='allstatetreeservice@yahoo.com,contactforms@eliteonlinemedia.com'; //Tu correo
            $cc = 'New Message from my web ["'.$Company.'"]'; //asunto por defecto
            $cabeceras = "From: " . strip_tags($_POST['email']) . "\r\n";
            $cabeceras .= "Reply-To: ". strip_tags($_POST['email']) . "\r\n";
            $cabeceras .= "CC: ".$_POST['email']."\r\n";
            $cabeceras .= "MIME-Version: 1.0\r\n";
            $cabeceras .= "Content-Type: text/html; charset=UTF-8\r\n";
            $FrOm .= 'X-MAILER: PHP'.phpversion();
            $BoDy .= '
                        <html>
                        <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.1/js/bootstrap.min.js"></script>
                            <head>
                                <title>Message sent from your website \ </title>
                                <style type="text/css">
                                th, td{
                                   width: 25%;
                                   text-align: left;
                                   vertical-align: top;
                                   border: 1px solid #000;
                                   border-collapse: collapse;
                                   padding: 0.3em;
                                   caption-side: bottom;                                   
                               }
                               th{
                                  background: #eee;
                               }
                               caption {
                                   padding: 0.3em;
                                   color: #fff;
                                   background: #000;
                                }
                                   </style>
                            </head>

                            <body>
                            <header>
                              <h2>-This e-mail was sent from a contact form on '.$Company.'</h2>
                            </header>
                            <div class="container">
                            <table rules="all" style="border: 1px solid #000;" cellpadding="10">
                                <caption>Customer information</caption>                                
                                <tr>
                                     <th><strong>Date:</strong></th>
                                     <td>'.date(DATE_RFC2822).'</td>
                                 </tr>';
                                    $BoDy .= '
                                 <tr>
                                    <th><strong>Email Address:</strong></th>
                                    <td>' . $_POST['email'] . '</td>
                                 </tr>
                                 <tr>
                                    <th><strong>Name:</strong></th>
                                    <td>' . $_POST['name'] . '</td>
                                 </tr> 
                                 <tr>
                                    <th><strong>Subject:</strong></th>
                                    <td>' . $_POST['subject'] . '</td>
                                 </tr>                               
                                 <tr>
                                    <th><strong>Message:</strong></th>
                                    <td>' . $_POST['message'] . '</td>
                                 </tr>
                            </table>
                            </div>
                            </body>
                        </html>';
            $send = mail("$mymail", "$cc", "$BoDy", "$cabeceras");
            ///Redirección después de enviar el mensaje
            if($send)
            {
            echo '<script language="javascript"> alert("Message sent successfully!!"); </script>';
            //inmediatamente redireccionamos a la URL donde se encuentra el contact form
            echo '<script language="javascript"> window.setTimeout( window.location.href="thank-you.php",1000); </script>';
            }}

?>