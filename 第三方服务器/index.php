<?php
/*
{
	"notifyType":"deviceDataChanged",
	"deviceId":"7bf90edf-eabf-48a5-8a3e-1509dcb8ad5d",
	"gatewayId":"7bf90edf-eabf-48a5-8a3e-1509dcb8ad5d",
	"requestId":null,
	"service":
		{
			"serviceId":"LEDService",
			"serviceType":"LEDService",
			"data":{"light":"\u0000\u0000\u0000\u0000\u0000"},
			"eventTime":"20190620T083707Z"
		}
}
*/
$http_json = file_get_contents('php://input');
$myfile = fopen("newfile.txt", "w+") or die("Unable to open file!");
$obj = json_decode($http_json,TRUE);
fwrite($myfile, $obj['notifyType'] . "\r\n");


fclose($myfile);
echo "OK\r\n";



?>
