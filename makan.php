<?php
function pakan($userid, $usertoken, $jumlah, $wait){
    $x = 0; 
    while($x < $jumlah) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"http://h5server.jollychic.com/active/sheepFeed/feed.do?callback=topicCallback1533793176459&appTypeId=0&lang=12&countryCode=ID&appVersion=7.1.1&currency=IDR&terminalType=1&timestamp=".mt_rand(1533846604092,1933846604092)."&cookieId=c81dbd56-5ecf-49ed-9e0e-ef67ad30c1e4&userId=".$userid."&userToken=".$usertoken."&token=FfHKVDLRxPrCabMKNVV4KFJ%2BXve5hz0O3cjI7sjZbP3igP5v9%2F0zlAQQ&_=1533793108210");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_REFERER, 'https://h5server.jollychic.com/');
        curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/58.0.3029.110 Safari/537.36');
        $server_output = curl_exec ($ch);
        curl_close ($ch);
		echo $server_output."\n";
        sleep($wait);
        $x++;
        flush();
    }
}
print "Kasih Makan Domba\n\n";
print "Angga ID f.t Keizer404\n";
echo "UserID?\nInput : ";
$userid = trim(fgets(STDIN));
echo "UserToken\nInput : ";
$usertoken = trim(fgets(STDIN));
echo "Jumlah\nInput : ";
$jumlah = trim(fgets(STDIN));
echo "Jeda? 0-9999999999 (ex:0)\nInput : ";
$jeda = trim(fgets(STDIN));
$execute = jolly($userid, $usertoken, $jumlah, $jeda);
print $execute;
print "Sukses Kasih Makan\n";
?>