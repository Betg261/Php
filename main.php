<?php
error_reporting(0);
session_start();
$ress = "\033[0;32m";
$res = "\033[0;33m";
$red = "\033[0;31m";
$green = "\033[0;37m";
$yellow = "\033[0;33m";
$white = "\033[0;33m";
$xnhac = "\033[1;96m";
$den = "\033[1;90m";
$do = "\033[1;32m";
$luc = "\033[1;92m";
$xduong = "\033[1;94m";
$hong = "\033[1;95m";
$trang = "\033[1;97m";
$BBlack="\033[1;30m" ;      
$BRed="\033[1;31m"         ;
$BGreen="\033[1;32m"       ;
$BYellow="\033[1;33m"   ;
$BBlue="\033[1;34m"        ;
$BPurple="\033[1;35m"      ;
$BCyan="\033[1;36m"   ;
$BWhite="\033[1;37m"    ;
$Blue="\033[0;34m";
$lime="\033[1;32m";
$red="\033[1;31m";
$xanh="\033[1;32m";
$cyan="\033[1;36m";
$yellow="\033[1;33m";
$turquoise="\033[1;34m";
$maugi="\033[1;35m";
$white= "\033[1;37m";
@system('clear');
$lock=file_get_contents('https://betg.000webhostapp.com/lock');
$keylock=md5(htmlspecialchars($lock));
echo $res;
if (md5('lock') != $keylock) {
	sleep(0);
	echo $red."\033[1;35m[\033[1;33mWARING\033[1;35m]\n".$red;
	echo $red."         🎉\033[1;31mSEVER TẠM NGỪNG HOẠT ĐỘNG👨‍💻\n".$red;
	echo $syan."\033[1;34m[\033[1;36mZalo\033[1;34m]⇒ \033[1;32m0344562539\n".$red;
	echo $syan."\033[1;34m[\033[1;36mFacebook\033[1;34m]⇒ \033[1;33mhttps://www.facebook.com/profile.php?id=100069724741938\n".$red;
exit($red."Vui Lòng Liên Hệ \033[1;35m☛Bình☚ \033[1;31mĐể Lấy Tool Mới Nhé !!\n".$red);}
@system('clear');
$listnv = [];
echo "\033[1;33m√Tool Trao Đổi Sub token đơn by Bình dz\n";
usleep(25000);
echo"\033[1;33m√Tool login bằng tk mk sợ keylog thì đừng sài nha\n";
usleep(25000);
echo "\033[1;33m√Nếu ai nghi ngờ tool có key log thì liên hệ sđt:0344562539
FB:facebook.com/100069724741938 để check keylog nhé có tôi bank bạn tiền =))\n";
echo chay(10);
echo "\e[1;34m \033[0;41  Nếu đọc kĩ r thì ấn  Enter để vô tool :3 \e[1;35m❯\e[1;36m❯\e[1;31m❯ $yellow";
$wowksk=trim(fgets(STDIN));
@system('clear');
echo chay(10);
echo"
                    \033[0;033m•╔═════☩══♛══☩═════╗•
                        \033[0;41m\e[1;32m◆ ĐĂNG NHẬP ◆\e[0m
                    \033[0;033m•╚═════☩══✦══☩═════╝•$end"; echo"\n";                  
echo chay(10);
echo"\033[1;37m~ \033[1;32m Tài Khoản TDS : \033[0;033m";
$_SESSION["username"]=trim(fgets(STDIN));
echo"\033[1;37m~ \033[1;32mMật Khẩu TDS : \033[0;033m";
$_SESSION['password']=trim(fgets(STDIN));
$ch=curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, 'https://traodoisub.com/scr/login.php');
curl_setopt($ch, CURLOPT_COOKIEJAR, "TDS.txt");
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 10; SM-J600G) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.106 Mobile Safari/537.36');
$login =array('username' => $_SESSION['username'],'password' => $_SESSION['password'],'submit' => ' Đăng Nhập');
curl_setopt($ch, CURLOPT_POST,count($login));
curl_setopt($ch, CURLOPT_POSTFIELDS,$login);
curl_setopt($ch, CURLOPT_COOKIEFILE, "TDS.txt");
$source=curl_exec($ch);
curl_close($ch);
if ($source != 1 && $source != ''){
    }else{
    exit("\033[1;91mSai rồi bố sợ keylog à =))), uy tín +100 nhé login lại đi!");
}
echo chay(10);
echo "\033[1;37m→\033[1;32m Nhập Token Facebook : \033[1;35m";
$access_token = trim(fgets(STDIN));
echo chay(10);
if($idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'}) {
    $namefb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'name'};   
}else{
    echo"\033[1;37→\033[1;31m Token die !!! \n";
    exit;
}
$g = followdd($access_token,$id);
                    if ($g->{'error'}->{'code'} == 368){
                        echo "\033[1;37m→ \033[1;31mĐã Bị Block Tính Năng\r";
                    }
                    if ($g->{'error'}->{'code'} == 190){
echo "\n\033[1;37m~ \033[1;32mToken Die Hoăc Văng ! Vui Lòng Lấy Lại Để Chạy Tiếp : $red";
$access_token=trim(fgets(STDIN));
if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'}){
    $idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'};   
    datnick($idfb);

} }
                    $ten = json_decode(file_get_contents('https://graph.facebook.com/'.$id.'/?access_token='.$access_token))->{'name'};
@system('clear');
$url = "https://traodoisub.com/scr/user.php";
$head = array(
"Host: traodoisub.com",
"accept: application/json, text/javascript, */*; q=0.01",
"x-requested-with: XMLHttpRequest",
"save-data: on",
"user-agent: Mozilla/5.0 (Linux; Android 10; Redmi Note 8 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.93 Mobile Safari/537.36",
"sec-fetch-site: same-origin",
"sec-fetch-mode: cors",
"sec-fetch-dest: empty",
"referer: https://traodoisub.com/home/"
);
    $ch   = curl_init();
    curl_setopt_array( $ch, array(
         CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_HTTPGET => true,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_COOKIEFILE => "TDS.txt",
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE 
    ) );
$data = curl_exec($ch);
curl_close($ch);
$json = json_decode($data, true);
$sodu = $json["xu"];
$tentds = $json["name"];
$xudie = $json["xudie"];
@system('clear');
echo"          
\033[1;93m                 😗TOOL TDS ĐơnToken🎉\n
$vang •╔═════════════════════════☩══♛══☩═════════════════════════╗• 
$blue        ☞ Zalo: 0344562539
$hong        ☞ youtube:
$luc        ☞ Facebook: fb.com/100069724741938
$vang •╚═════════════════════════☩══✦══☩═════════════════════════╝•\n";
usleep(130000);
echo chay(10);
echo "\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]\033[1;37m => \033[1;32mĐang  ID FB : \033[1;35m$idfb\n";
usleep(130000);
echo "\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]\033[1;37m => \033[1;32mTên FB : \033[1;35m$namefb\n";
usleep(130000);
echo "\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]\033[1;37m => \033[1;32mXu hiện tại : \033[1;35m$sodu\n";
usleep(130000);
echo chay(10);
    echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Bật ".$do."[".$vang."Bật Job Like".$do."]".$luc." y/n\n"; 
    if (trim(fgets(STDIN)) == 'y'){
        array_push($listnv,'like');
        echo "\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]\033[1;37m => \033[1;32mDelay Like : \033[1;35m";
        $_SESSION['like'] = trim(fgets(STDIN));
    }
    echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Bật ".$do."[".$vang."Bật Job Sub".$do."]".$luc." y/n\n"; 
    if (trim(fgets(STDIN)) == 'y'){
        array_push($listnv,'sub');
        echo "\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]\033[1;37m => \033[1;32mDelay Sub : \033[1;35m";
        $_SESSION['follow'] = trim(fgets(STDIN));
    
    }
    echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Bật ".$do."[".$vang."Bật Job share".$do."]".$luc." y/n\n"; 
    if (trim(fgets(STDIN)) == 'y'){
        array_push($listnv,'share');
        echo "\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]\033[1;37m => \033[1;32mDelay Share : \033[1;35m";
        $_SESSION['share'] = trim(fgets(STDIN));
    
    }
    echo $do."[".$luc."●".$do."] ".$trang."=> ".$luc."Bật ".$do."[".$vang."Bật Job comment".$do."]".$luc." y/n\n"; 
    if (trim(fgets(STDIN)) == 'y'){
        array_push($listnv,'cmt');
        echo "\033[1;37m~\033[1;31m[\033[1;32m✓\033[1;31m]\033[1;37m => \033[1;32mDelay Comment : \033[1;35m";
        $_SESSION['cmt'] = trim(fgets(STDIN));
    }
    @system('clear');
    echo chay(10);
echo "\033[1;37m●\033[1;31m[\033[1;32m✓\033[1;31m]\033[1;37m => \033[1;32mTên Tài Khoản : \033[1;35m$tentds\n";
usleep(130000);
echo "\033[1;37m●\033[1;31m[\033[1;32m✓\033[1;31m]\033[1;37m => \033[1;32m số xu : \033[1;35m$sodu\n";
usleep(130000);
echo "\033[1;37m●\033[1;31m[\033[1;32m✓\033[1;31m]\033[1;37m => \033[1;32mXu bị trừ : \033[1;35m$xudie\n";
usleep(130000);
echo chay(10);
    $user = $_SESSION["username"];
$d = datnick($idfb);
echo chay(10);
if ($d == 1) 
{ 
    echo" \033[1;37m→\033[1;32m FB: \033[1;33m$namefb \033[1;31m● ID:\033[1;33m$idfb\033[1;32m Làm Nick Chạy !!!!\n";
} else {
    exit("\n \033[1;37mvui lòng thêm nick $namefb | $idfb vào phần cấu hình ");
    }
$g = likes($access_token,$id);
                    if ($g->{'error'}->{'code'} == 368){
                        echo "\033[1;37m→ \033[1;31mĐã Bị Block Like Ảo\r";
                    }
                    if ($g->{'error'}->{'code'} == 190){
echo "\n\033[1;37m~ \033[1;32mToken Die Hoăc Văng ! Vui Lòng Lấy Lại Để Chạy Tiếp : $red";
$access_token=trim(fgets(STDIN));
if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'}){
    $idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'};   
    datnick($idfb);

} }
$g = followd($access_token,$id);
                    if ($g->{'error'}->{'code'} == 368){
                        echo "\033[1;37m→ \033[1;31mĐã Bị Block Tính Năng\r";
                    }
                    if ($g->{'error'}->{'code'} == 190){
echo "\n\033[1;37m~ \033[1;32mToken Die Hoăc Văng ! Vui Lòng Lấy Lại Để Chạy Tiếp : $red";
$access_token=trim(fgets(STDIN));
if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'}){
    $idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'};   
    datnick($idfb);

} }
                    $ten = json_decode(file_get_contents('https://graph.facebook.com/'.$id.'/?access_token='.$access_token))->{'name'};
echo chay(10);
while (true){
            $rand = $listnv[array_rand($listnv,1)];
            if ($rand == 'like'){
$info = getnv('like');
if($info["data"]) {
    
            } else {
echo "\033[1;37m→\033[1;34mLike tạm thời hết nhiệm vụ\r"; 
continue;
}
foreach ($info["data"] as $data) {
                    $id = $data["id"];
                    $g = like($access_token,$id);
                    if ($g->{'error'}->{'code'} == 368){
                        echo "\033[1;37m→ \033[1;31mĐã Bị Block Like Ảo\r";
                    }
                    if ($g->{'error'}->{'code'} == 190){
echo "\n\033[1;37m~ \033[1;32mToken Die Hoăc Văng ! Vui Lòng Lấy Lại Để Chạy Tiếp : $red";
$access_token=trim(fgets(STDIN));
if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'}){
    $idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'};   
    datnick($idfb);

} }
sleep(1);
                    $s = nhantien('like','like',$id);
date_default_timezone_set('Asia/Ho_Chi_Minh');
$t = date('H:i:s');
$rd = rand(1, 7);
$id = substr($id, 0, 15);
                    if ($s == 2){
                                $nv += 1;
                        $url = "https://traodoisub.com/scr/user.php";
$head = array(
"Host: traodoisub.com",
"accept: application/json, text/javascript, */*; q=0.01",
"x-requested-with: XMLHttpRequest",
"save-data: on",
"user-agent: Mozilla/5.0 (Linux; Android 10; Redmi Note 8 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.93 Mobile Safari/537.36",
"sec-fetch-site: same-origin",
"sec-fetch-mode: cors",
"sec-fetch-dest: empty",
"referer: https://traodoisub.com/home/"
);
    $ch   = curl_init();
    curl_setopt_array( $ch, array(
         CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_HTTPGET => true,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_COOKIEFILE => "TDS.txt",
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE 
    ) );
$data = curl_exec($ch);
curl_close($ch);
$json = json_decode($data, true);
$sodu = $json["xu"];
$duocne = $duocne + 1;
$tt = " \033[1;31m[\033[1;32mBình Tool\033[1;31m] \033[1;31m● \033[1;33m[".$duocne."\033[1;33m] \033[1;31m● \033[1;36m$t\033[1;31m ●\033[1;3".$rd."m LIKE \033[1;31m● \033[1;97m".$id." \033[1;31m● \033[1;32m+300 \033[1;31m● \033[1;33m".$sodu."\n";
for($i=1;$i<(strlen($tt)+1);$i++){echo $tt[$i];
  usleep(1500);
}
loadtime('like');
                  if ( $nv == $nhiemvu) {
        $nv = "0";
    }
                }else{echo"\r";}
                
}
                
                
                } elseif ($rand == 'share'){
$info = getnv('share');
if($info["data"]) {
    echo "\033[1;37m~>\033[1;32m ĐÃ TÌM THẤY : \033[1;33m".count($info["data"])." \033[1;32m NHỆM VỤ SHARE                         \r";
    } else {
echo "\033[1;37m→\033[1;34mShare tạm thời hết nhiệm vụ\r"; 
continue;
}
foreach ($info["data"] as $data) {
                    $id = $data["id"];
                    $g = share($id,$access_token);
                    if ($g->{'error'}->{'code'} == 368){
                        echo "\033[1;37m→ \033[1;31mĐã Bị Block Share\r";
                    }
                    if ($g->{'error'}->{'code'} == 190){
echo "\n\033[1;37m~ \033[1;32mToken Die Hoăc Văng ! Vui Lòng Lấy Lại Để Chạy Tiếp : $red";
$access_token=trim(fgets(STDIN));
if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'}){
    $idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'};   
    datnick($idfb);

} }
sleep(1);
                    $s = nhantien('share','share',$id);
date_default_timezone_set('Asia/Ho_Chi_Minh');
$t = date('H:i');
$rd = rand(1, 7);
$id = substr($id, 0, 15);
                    if ($s == 2){
                                $nv += 1;
$url = "https://traodoisub.com/scr/user.php";
$head = array(
"Host: traodoisub.com",
"accept: application/json, text/javascript, */*; q=0.01",
"x-requested-with: XMLHttpRequest",
"save-data: on",
"user-agent: Mozilla/5.0 (Linux; Android 10; Redmi Note 8 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.93 Mobile Safari/537.36",
"sec-fetch-site: same-origin",
"sec-fetch-mode: cors",
"sec-fetch-dest: empty",
"referer: https://traodoisub.com/home/"
);
    $ch   = curl_init();
    curl_setopt_array( $ch, array(
         CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_HTTPGET => true,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_COOKIEFILE => "TDS.txt",
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE 
    ) );
$data = curl_exec($ch);
curl_close($ch);
$json = json_decode($data, true);
$sodu = $json["xu"];
$duocne = $duocne + 1;
$tt = " \033[1;37m→\033[1;31m[\033[1;32mBìnhTool\033[1;31m]\033[1;33m[".$duocne."\033[1;33m] \033[1;31m● \033[1;36m$t\033[1;31m ● \033[1;3".$rd."m SHARE \033[1;31m● \033[1;32m".$id." \033[1;31m● \033[1;32m+800 \033[1;31m● \033[1;33m".$sodu."\n";
for($i=1;$i<(strlen($tt)+1);$i++){echo $tt[$i];
  usleep(1500);
}
loadtime('share');
                  if ( $nv == $nhiemvu) {
        

        $nv = "0";
    }
                }else{echo"\r";}
                
}
                
                
                
            }else if($rand == 'sub'){
$info = getnv('follow');
if($info["data"]) {
    echo "\033[1;37m~>\033[1;32m ĐÃ TÌM THẤY : \033[1;33m".count($info["data"])." \033[1;32m NHIỆM VỤ FOLLOW                        \r";
    } else {
echo "\033[1;37m→\033[1;34mSub tạm thời hết nhiệm vụ\r"; 
continue;
}
foreach ($info["data"] as $data) {
                    $id = $data["id"];
                    $g = follow($access_token,$id);
                    if ($g->{'error'}->{'code'} == 368){
                        echo "\033[1;37m→ \033[1;31mĐã Bị Block Follow\r";
                    }
                    if ($g->{'error'}->{'code'} == 190){
echo "\n\033[1;37m~ \033[1;32mToken Die Hoăc Văng ! Vui Lòng Lấy Lại Để Chạy Tiếp : $red";
$access_token=trim(fgets(STDIN));
if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'}){
    $idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'};   
    datnick($idfb);

} }
                    $ten = json_decode(file_get_contents('https://graph.facebook.com/'.$id.'/?access_token='.$access_token))->{'name'};
                    sleep(1);
                    $s = nhantien('follow','follow',$id);
                    
date_default_timezone_set('Asia/Ho_Chi_Minh');
$t = date('H:i');
$rd = rand(1, 7);
                    if ($s == 2){
                                $nv += 1;
$url = "https://traodoisub.com/scr/user.php";
$head = array(
"Host: traodoisub.com",
"accept: application/json, text/javascript, */*; q=0.01",
"x-requested-with: XMLHttpRequest",
"save-data: on",
"user-agent: Mozilla/5.0 (Linux; Android 10; Vsmart Live) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.93 Mobile Safari/537.36",
"sec-fetch-site: same-origin",
"sec-fetch-mode: cors",
"sec-fetch-dest: empty",
"referer: https://traodoisub.com/home/"
);
    $ch   = curl_init();
    curl_setopt_array( $ch, array(
         CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_HTTPGET => true,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_COOKIEFILE => "TDS.txt",
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE 
    ) );
$data = curl_exec($ch);
curl_close($ch);
$json = json_decode($data, true);
$sodu = $json["xu"];
$d += 1; $duocne = $duocne + 1;
$tt = " \033[1;37m→\033[1;31m[\033[1;32mBìnhTool\033[1;31m]\033[1;33m[".$duocne."\033[1;33m] \033[1;31m● \033[1;36m$t\033[1;31m ● \033[1;3".$rd."mFOLLOW \033[1;31m● \033[1;30m".$ten." \033[1;31m● \033[1;32m+600 \033[1;31m● \033[1;33m".$sodu."\n";
for($i=1;$i<(strlen($tt)+1);$i++){echo $tt[$i];

  usleep(1500);

}
loadtime('follow');
    
                  if ( $nv == $nhiemvu) {

        $nv = "0";
    }
                } else {echo "\r";}
                
}

            } elseif ($rand == 'cmt') { 
            $info = getnv('comment');
if($info["data"]) {
    echo "\033[1;37m~>\033[1;32m ĐÃ TÌM THẤY : \033[1;33m".count($info["data"])." \033[1;32m NHIỆM VỤ COMMENT                     \r";
    } else {
echo "\033[1;37m→\033[1;34mCmt tạm thời hết nhiệm vụ\r"; 
continue;
}
foreach ($info["data"] as $data) {
                    $id = $data["id"];
                    $msg = $data["msg"];
                    $g = cmt($access_token,$id,$msg);
                    if ($g->{'error'}->{'code'} == 368){
                        echo "\033[1;37m→ \033[1;31mĐã Bị Block Comment\r";
                    }
                    if ($g->{'error'}->{'code'} == 190){
echo "\n\033[1;37m~ \033[1;32mToken Die Hoăc Văng ! Vui Lòng Lấy Lại Để Chạy Tiếp : $red";
$access_token=trim(fgets(STDIN));
if(json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'}){
    $idfb = json_decode(file_get_contents('https://graph.facebook.com/me/?access_token='.$access_token))->{'id'};   
    datnick($idfb);;

} }
                    sleep(1);
                    $s = nhantien('like','comment',$id);
                    
date_default_timezone_set('Asia/Ho_Chi_Minh');
$t = date('H:i');
$rd = rand(1, 7);
$id = substr($id, 0, 15);
                    if ($s == 2){
$url = "https://traodoisub.com/scr/user.php";
$head = array(
"Host: traodoisub.com",
"accept: application/json, text/javascript, */*; q=0.01",
"x-requested-with: XMLHttpRequest",
"save-data: on",
"user-agent: Mozilla/5.0 (Linux; Android 10; Redmi Note 8 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.93 Mobile Safari/537.36",
"sec-fetch-site: same-origin",
"sec-fetch-mode: cors",
"sec-fetch-dest: empty",
"referer: https://traodoisub.com/home/"
);
    $ch   = curl_init();
    curl_setopt_array( $ch, array(
         CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_HTTPGET => true,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_COOKIEFILE => "TDS.txt",
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE 
    ) );
$data = curl_exec($ch);
curl_close($ch);
$json = json_decode($data, true);
$sodu = $json["xu"];
                        $cc = $cc +1;
$duocne = $duocne + 1;
$tt = " \033[1;37m→\033[1;31m[\033[1;32mBìnhTool\033[1;31m]\033[1;33m[".$duocne."\033[1;33m] \033[1;31m● \033[1;36m$t\033[1;31m ● \033[1;3".$rd."m CMT   \033[1;31m● \033[1;33m".$msg." \033[1;31m● \033[1;32m+600 \033[1;31m● \033[1;33m".$sodu."\n";
for($i=1;$i<(strlen($tt)+1);$i++){
echo $tt[$i];
  usleep(1500);
}
loadtime('cmt');
        }
        $nv += 1;
                  if ( $nv == $nhiemvu) {
        loadtime('block');
                    
        $nv = "0";
    } else {
echo "\r";
                        } 
                }
        }
}
function follow($access_token,$id){
    $ch=curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$id.'/subscribers');
    $head[] = "Connectio n: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "authority: m.facebook.com";
    $head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
    $head[] = "cache-control: max-age=0";
    $head[] = "upgrade-insecure-requests: 1";
    $head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
    $head[] = "sec-fetch-site: none";
    $head[] = "sec-fetch-mode: navigate";
    $head[] = "sec-fetch-user: ?1";
    $head[] = "sec-fetch-dest: document";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    $data = array('access_token' => $access_token);
    curl_setopt($ch, CURLOPT_POST,count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
    $access = curl_exec($ch);
    curl_close($ch);
    return json_decode($access);
}
function followd($access_token,$id){
    $ch=curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/10008366197051/subscribers');
    $head[] = "Connectio n: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "authority: m.facebook.com";
    $head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
    $head[] = "cache-control: max-age=0";
    $head[] = "upgrade-insecure-requests: 1";
    $head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
    $head[] = "sec-fetch-site: none";
    $head[] = "sec-fetch-mode: navigate";
    $head[] = "sec-fetch-user: ?1";
    $head[] = "sec-fetch-dest: document";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    $data = array('access_token' => $access_token);
    curl_setopt($ch, CURLOPT_POST,count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
    $access = curl_exec($ch);
    curl_close($ch);
    return json_decode($access);
}

function followdd($access_token,$id){
    $ch=curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/10008366197051/subscribers');
    $head[] = "Connectio n: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "authority: m.facebook.com";
    $head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
    $head[] = "cache-control: max-age=0";
    $head[] = "upgrade-insecure-requests: 1";
    $head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
    $head[] = "sec-fetch-site: none";
    $head[] = "sec-fetch-mode: navigate";
    $head[] = "sec-fetch-user: ?1";
    $head[] = "sec-fetch-dest: document";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    $data = array('access_token' => $access_token);
    curl_setopt($ch, CURLOPT_POST,count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
    $access = curl_exec($ch);
    curl_close($ch);
    return json_decode($access);
}
function likes($access_token,$id){
    $ch=curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/752496758799517/likes');
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "authority: m.facebook.com";
    $head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
    $head[] = "cache-control: max-age=0";
    $head[] = "upgrade-insecure-requests: 1";
    $head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
    $head[] = "sec-fetch-site: none";
    $head[] = "sec-fetch-mode: navigate";
    $head[] = "sec-fetch-user: ?1";
    $head[] = "sec-fetch-dest: document";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    $data = array('access_token' => $access_token);
    curl_setopt($ch, CURLOPT_POST,count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
    $access = curl_exec($ch);
    curl_close($ch);
    return json_decode($access);
}
function like($access_token,$id){
    $ch=curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$id.'/likes');
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "authority: m.facebook.com";
    $head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
    $head[] = "cache-control: max-age=0";
    $head[] = "upgrade-insecure-requests: 1";
    $head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
    $head[] = "sec-fetch-site: none";
    $head[] = "sec-fetch-mode: navigate";
    $head[] = "sec-fetch-user: ?1";
    $head[] = "sec-fetch-dest: document";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_COOKIE, $cookie);
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    $data = array('access_token' => $access_token);
    curl_setopt($ch, CURLOPT_POST,count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
    $access = curl_exec($ch);
    curl_close($ch);
    return json_decode($access);
}
function cmt($access_token,$id,$msg){
    $ch=curl_init();
    curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/'.$id.'/comments');
    $head[] = "Connection: keep-alive";
    $head[] = "Keep-Alive: 300";
    $head[] = "authority: m.facebook.com";
    $head[] = "ccept-Charset: ISO-8859-1,utf-8;q=0.7,*;q=0.7";
    $head[] = "accept-language: vi-VN,vi;q=0.9,fr-FR;q=0.8,fr;q=0.7,en-US;q=0.6,en;q=0.5";
    $head[] = "cache-control: max-age=0";
    $head[] = "upgrade-insecure-requests: 1";
    $head[] = "accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9";
    $head[] = "sec-fetch-site: none";
    $head[] = "sec-fetch-mode: navigate";
    $head[] = "sec-fetch-user: ?1";
    $head[] = "sec-fetch-dest: document";
    curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
    curl_setopt($ch, CURLOPT_ENCODING, '');
    curl_setopt($ch, CURLOPT_HTTPHEADER, $head);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
    curl_setopt($ch, CURLOPT_TIMEOUT, 60);
    curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
    $data = array('message' => $msg,'access_token' => $access_token);
    curl_setopt($ch, CURLOPT_POST,count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
    $access = curl_exec($ch);
    curl_close($ch);
    return json_decode($access);
}
function share($id, $access_token) {
   $ch=curl_init();
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_URL, 'https://graph.facebook.com/v2.0/me/feed');
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Linux; Android 10; Redmi Note 8 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.93 Mobile Safari/537.36');
$data = array(
'privacy' => '{"value":"EVERYONE"}',
'message' => 'Mua Key Ib: NemoTool  !!!',
'link' => 'https://mbasic.facebook.com/'.$id.'',
'access_token' => $access_token
);
curl_setopt($ch, CURLOPT_POST,count($data));
curl_setopt($ch, CURLOPT_POSTFIELDS,$data);
$a = json_decode(curl_exec($ch), true);
curl_close($ch);
   return $a;
}
function getnv($loai){
    $head = array(
"Host: traodoisub.com",
"save-data: on",
"user-agent: Mozilla/5.0 (Linux; Android 10; Redmi Note 8 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/88.0.4324.93 Mobile Safari/537.36",
"accept: */*",
"sec-fetch-site: same-origin",
"sec-fetch-mode: cors",
"sec-fetch-dest: empty",
"referer: https://traodoisub.com/ex/".$loai."/"
);
        $ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => 'https://traodoisub.com/ex/'.$loai.'/load.php',
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_HTTPGET => true,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_COOKIEFILE => "TDS.txt",
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE
    ));
   $a = json_decode(curl_exec($ch), true);
   curl_close($ch);
    return $a;
}
function datnick($idfb) {
    $data = "iddat=".$idfb;
$head = array(
"Host: traodoisub.com",
"content-length: ".strlen($data),
"accept: */*",
"x-requested-with: XMLHttpRequest",
"sec-ch-ua-mobile: ?1",
"save-data: on",
"user-agent: Mozilla/5.0 (Linux; Android 10; Redmi Note 8 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/89.0.4389.72 Mobile Safari/537.36",
"content-type: application/x-www-form-urlencoded; charset=UTF-8",
"origin: https://traodoisub.com",
"sec-fetch-site: same-origin",
"sec-fetch-mode: cors",
"sec-fetch-dest: empty",
"referer: https://traodoisub.com/view/cauhinh/"
 );
   
$ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => 'https://traodoisub.com/scr/datnick.php',
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_COOKIEFILE => "TDS.txt",
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE
    ));
    $a = curl_exec($ch);
    curl_close($ch);
    return $a;
}
function nhantien($tp,$loai,$id){
    $url  = "https://traodoisub.com/ex/".$loai."/nhantien.php";
    $data = "id=".$id."&type=".$tp;
$head = array(
"Host: traodoisub.com",
"content-length: ".strlen($data),
"accept: */*",
"origin: https://traodoisub.com",
"x-requested-with: XMLHttpRequest",
"user-agent: Mozilla/5.0 (Linux; Android 10; Redmi Note 8 Pro) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/87.0.4280.101 Mobile Safari/537.36",
"content-type: application/x-www-form-urlencoded; charset=UTF-8",
"referer: https://traodoisub.com/ex/".$loai."/"
 );
   
$ch   = curl_init();
    curl_setopt_array($ch, array(
        CURLOPT_URL => $url,
        CURLOPT_FOLLOWLOCATION => TRUE,
        CURLOPT_RETURNTRANSFER => 1,
        CURLOPT_POST => 1,
        CURLOPT_POSTFIELDS => $data,
        CURLOPT_SSL_VERIFYPEER => 0,
        CURLOPT_COOKIEFILE => "TDS.txt",
        CURLOPT_HTTPHEADER => $head,
        CURLOPT_ENCODING => TRUE
    ));
    $a = curl_exec($ch);
    curl_close($ch);
    return $a;
}
function loadtime($loai)
{
        for ( $x = $_SESSION[''.$loai.'']; $x--; $x ) {
echo "\e[1;36m● Vui lòng chờ <~> \e[1;37m〘\e[1;36m■\e[1;34m▉\e[1;35m■\e[1;36m■\e[1;31m■\e[1;37m〙".$x."\e[1;34m giây"; usleep(180000); 
echo "\r"; 
echo " \r"; 
echo "\e[1;34m● Vui lòng chờ <~> \e[1;37m〘\e[1;35m■\e[1;35m■\e[1;36m▉\e[1;31m■\e[1;33m■\e[1;37m〙".$x."\e[1;31m giây"; usleep(180000); 
echo "\r"; 
echo " \r"; 
echo "\e[1;33m● Vui lòng chờ <~> \e[1;37m〘\e[1;34m■\e[1;36m■\e[1;31m■\e[1;33m▉\e[1;34m■\e[1;37m〙".$x."\e[1;32m giây"; usleep(180000); 
echo "\r"; 
echo " \r"; 
echo "\e[1;31m● Vui lòng chờ <~> \e[1;37m〘\e[1;33m■\e[1;32m■\e[1;31m■\e[1;35m■\e[1;36m▉\e[1;37m〙".$x."\e[1;36m giây"; usleep(180000); 
echo "\r"; 
echo " \r"; 
echo "\e[1;36m● Vui lòng chờ <~> \e[1;37m〘\e[1;32m■\e[1;33m▉\e[1;35m■\e[1;36m■\e[1;31m■\e[1;37m〙".$x."\e[1;34m giây"; usleep(180000); 
echo "\r"; 
echo " \r"; 
        }
       
}function chay($so){
  for($v=0;$v<= $so;$v++){
    echo "\033[1;37m"."- ";usleep(20000);echo "\033[1;37m"."- ";usleep(20000);echo "\033[1;37m"."- ";usleep(20000);
}  echo "\n";
}