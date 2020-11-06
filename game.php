<?php
  //game sederhana
  //mohon maaf jika ada bug/kendala
  //code by ferdi
  //ada saran/kritik? kirim ke fujiwarachikauwu@gmail.com
  
  error_reporting(0);
  $own = "ferdi";
  
  echo "code by : $own\n\n";
  
  echo "pov:kamu tersesat di hutan, dan kamu harus keluar dari hutan!\n";
  echo "jika kamu salah maka kamu akan tersesat selamanya!\n\n";
  
  echo "mau bermain? y/n\n";
  $mulai = trim(fgets(STDIN));
  system('clear');
  
  if($mulai == "y"){
    echo "1. apa yg harus kamu lakukan sekarang?\n\n";
    echo "[1] jalan terus\n";
    echo "[2] mencari makanan\n";
    echo "[3] bengong\n";
    $ask1 = trim(fgets(STDIN));
    
  }if($ask1 == 1){
    echo "2. Saat jalan terus kamu bertemu beruang laut, apa yg kamu lakukan?\n"; 
    echo "[1] lari\n";
    echo "[2] buat lingkaran seperti spongebob\n";
    echo "[3] bersembunyi di semak2\n";
    
    $ask2 = trim(fgets(STDIN));
  }if($ask2 == 1){
    echo "Saat lari kamu terjatuh di jurang dan mati!";
    exit();
    
  }if($ask2 == 2){
    echo "kamu selamat dari beruang laut, tapi tanpa kamu sadari ada badak laut jga, kamu pun mati dimakan badak laut, (badak laut tidak mempan dengan lingkaran!)";
    exit();
    
  }if($ask2 == 3){
    echo "3.saat bersembunyi disemak2, kamu menemukan smartphone yg masih hidup, apa yg kamu lakukan?\n";
    echo "[1] buang\n";
    echo "[2] menelpon 112\n";
    echo "[3] tidak mengambil nya\n";
   
   $ask3 = trim(fgets(STDIN));
  }if($ask3 == 1){
    echo "ada hp nyala kok malah di buang, kamu terjebak di hutan selama2nya";
    exit();
    
  }if($ask3 == 2){
    echo "kamu menelpon 112 dan meminta bantuan, kamu pun selamat";
    exit();
    
  }if($ask3 == 3){
    echo "ada hp nyala kok ga di ambil, kamu terjebak selama2 nya!";
    exit();
  }if($ask1 == 2){
    echo "2. Saat mencari makanan, kamu menemukan jamur ff, apa yg kamu lakukan?\n";
    echo "[1] makan langsung\n";
    echo "[2] memasak nya terlebih dahulu\n";
    echo "[3] tidak makan\n";
    
    $ask4 = trim(fgets(STDIN));
    
  }if($ask4 == 1){
    echo "Saat kamu memakan nya, muka kamu menjadi burik, dan mati";
    exit();
    
  }if($ask4 == 2){
    echo "Kan tidak ada kompor, kamu masak pake apa? Kamu mati kelaparan";
    exit();
    
  }if($ask4 == 3){
    echo "Kamu mati kelaparan!";
    exit();
    
  }if($ask1 == 3){
    echo "stress lu ndro, bengong kok di hutan, auto di terkam";
    exit();
  }
  
  else{
    echo "ga niat main bang?";
  };

?>
