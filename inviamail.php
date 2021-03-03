<?php
$email=$_POST['email'];

#######################################
#     IMPOSTAZIONI DA CONFIGURARE     #
#######################################

//(1) indirizzo email del destinatario del modulo
$destinatario = "prenotazione.matrimonio@gmail.com";


#######################################
#  FINE IMPOSTAZIONI DA CONFIGURARE   #
#######################################

//ora e data
$ora = date ("H:i:s"); 
$data = date ("d/m/Y");

//intestazione email che arriva al destinatario
$corpo = "
Modulo inviato il $data alle ore $ora
Riepilogo dati:\n\n";

//============== NON TOCCARE NULLA OLTRE QUESTA RIGA ==================\


########### CODICI ###########

//variabili per rendere lo script compatibile anche con la versione PHP 4.2 e maggiori
if(!isset($_SERVER) OR !$_SERVER OR !is_array($_SERVER) OR count(array_diff($_SERVER, $HTTP_SERVER_VARS))){  
$_POST = &$HTTP_POST_VARS; 
}

########### CONTROLLO DEI CAMPI ###########
$control_campi = 0;

if($all_free != "y"){

    foreach($_POST as $key => $valore){

        if(in_array($key,$campi_req)){

            if(trim($valore) == ""){

            $control_campi++;
            
                                    } 

                                }

                            }

                        } else {

            $control_campi = 0;    

                                }                    

########### CONTROLLO EMAIL ###########
$control_email = 0;

if($obbligo_email == "y"){

    if(isset($_POST['email'])){

        if(!eregi("^([a-zA-Z0-9_.-])+@(([a-zA-Z0-9_-])+.)+[a-z]{2,6}$", $_POST['email'])){

        $control_email++;

                            }

                        } else {

        $control_email = 0;

                            }

                        }

########### CONTROLLO CONDIZIONI ###########
$control_condizioni = 0;

if($accetta_condizioni == "y"){

    if(isset($_POST['trattamento_dati']) && $_POST['trattamento_dati'] == "accetto"){

        $control_condizioni = 0;

            } else {

        $control_condizioni ++;

            }

        }

########### INVIO EMAIL ###########
if($control_campi == 0){

        if($control_email == 0){

            if($control_condizioni == 0){

foreach($_POST as $key => $valore){

$key = ucfirst(stripslashes(trim($key)));
$valore = stripslashes(trim($valore));
$key = str_replace("_"," ",$key);

            if(trim($valore) == "") $valore = "Non compilato";
            
                $corpo .= $key .": ". $valore ."\n\n";

            }
			
				$corpo .= "Numero IP: $ipnumb"."\n";

$corpo .= "____________________________________________________________ \n\n

";

    
// invio e-mail
// Header Mail
$headmail.="From: $nome_mittente <$nome_mittente>\n";
$headmail.="Return-Path: $nome_mittente\n";
$headmail.="User-Agent: Php Mail Function\n";
$headmail.="X-Accept-Language: en-us, en\n";
$headmail.="MIME-Version: 1.0\n";
$headmail.="X-Priority: 1 (Highest)\n";
$headmail.="Content-Type: text/plain; charset=ISO-8859-1; format=flowed\n";
$headmail.="Content-Transfer-Encoding: 7bit\n";

ini_set('sendmail_from', "$destinatario");
mail("$destinatario", "$oggetto_email", "$corpo", "$headmail");

                header ("Location: $pagina_grazie");

                                } else {

                header ("Location: $pagina_error_condizioni");

                            }

                        } else {

                header ("Location: $pagina_error_email");

                        }

                    } else {

                    
                header ("Location: $pagina_error_empty");

                    }

?>
