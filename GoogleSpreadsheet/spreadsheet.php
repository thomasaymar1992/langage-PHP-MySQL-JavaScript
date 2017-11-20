<?php
 require __DIR__ . '/../vendor/autoload.php';
$G_CLIENT_ID = '418036861376-mgler6e0dutqificbrm58vgcu2iemmbm.apps.googleusercontent.com';
$G_CLIENT_EMAIL = 'account-1@spreadsheet220192.iam.gserviceaccount.com';
$G_CLIENT_KEY_PATH = dirname(__FILE__) . '/spreadsheet220192-2cc459cf4325.p12';
$G_CLIENT_KEY_PW = 'notasecret';
$obj_client_auth = new Google_Client ();
$obj_client_auth->setApplicationName ('spreadsheet220192');
$obj_client_auth->setClientId ($G_CLIENT_ID);
$obj_client_auth->setAssertionCredentials (new Google_Auth_AssertionCredentials(
    $G_CLIENT_EMAIL,
    array('https://spreadsheets.google.com/feeds','https://docs.google.com/feeds'),
    file_get_contents ($G_CLIENT_KEY_PATH),
    $G_CLIENT_KEY_PW
));
$obj_client_auth->getAuth()->refreshTokenWithAssertion();
$obj_token  = json_decode($obj_client_auth->getAccessToken());
$accessToken = $obj_token->access_token;

use Google\Spreadsheet\DefaultServiceRequest;
use Google\Spreadsheet\ServiceRequestFactory;
$serviceRequest = new DefaultServiceRequest($accessToken);
ServiceRequestFactory::setInstance($serviceRequest);
$spreadsheetTitle = 'PATIENTS';
$spreadsheetService = new Google\Spreadsheet\SpreadsheetService();
$spreadsheetFeed = $spreadsheetService->getSpreadsheets();
$spreadsheet = $spreadsheetFeed->getByTitle($spreadsheetTitle);
$worksheetTitle = 'Feuille 1'; 
$worksheetFeed = $spreadsheet->getWorksheets();
$worksheet = $worksheetFeed->getByTitle($worksheetTitle);
 $listFeed = $worksheet->getListFeed();
foreach ($listFeed->getEntries() as $entries) {
    	print_r($entries->getValues()); 
}
if(isset($_POST['nom']) & isset($_POST['prenom'])) {
   	$nom = $_POST['nom'];
    	$prenom = $_POST['prenom'];
   	$listFeed = $worksheet->getListFeed();
    	$row = array('nom'=>$nom, 'prenom'=>$prenom);
    	$listFeed->insert($row);
}
