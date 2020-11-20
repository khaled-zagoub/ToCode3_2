<?php
require_once('lib/nusoap.php');
$wsdl = "http://localhost/ToCode3_2-main/ToCode3_2/WS1/WS1.php";


$client = new nusoap_client($wsdl, 'wsdl');
$err = $client->getError();
if ($err) {
   echo '<h2>L\'erreur est :</h2>' . $err;
   exit();
}

$result = $client->call('GetCountriesIsoOfContinent', array("europe"));
echo "list of countries suggested in Europe is : ".$result;

?>