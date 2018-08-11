<?php
function jolly($userid, $usertoken, $jumlah, $wait){
    $x = 0; 
    while($x < $jumlah) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL,"http://h5server.jollychic.com/active/sheepFeed/getFood.do?appTypeId=0&lang=12&countryCode=ID&appVersion=7.1.1&currency=IDR&terminalType=1&timestamp=".mt_rand(1533846604092,1933846604092)."&cookieId=&userId=".$userid."&userToken=".$usertoken."&token=&type=".mt_rand(1133846604092,1933846604092)."&edtionCatId=90394&_=1533793108201");
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
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
print "Suntik Domba Jolly\n";
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
print "Sukses Suntik Domba\n";
?>