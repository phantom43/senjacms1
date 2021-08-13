<?php
//*** kontak pembuat 
//t.me/SenjaRaha
session_start();
if ( !isset($_SESSION['login'])) {
  header("location: http://localhost/mycmss/admin/login1.php");
  exit;
}
error_reporting(0);
//library variabell
$file = $_POST['nama'];
$nama = $_POST['nama'];
if( isset($_POST['submit'])){
	shell_exec(touch($nama));
}
$nama = $_POST['nama'];
$judul = $_POST['judul'];
$isi = $_POST['isi'];
if (isset($_POST['submit'])) {
	$open = fopen($nama, "w");
  fwrite($open, "<style type='text/css'>@import 'style.css'; </style>");
  fwrite($open, "<h1>$judul</h1>");
  fwrite($open, "<title>$judul</title>");
  fwrite($open, "<div class='dropdown'>");
  fwrite($open, "<button class='mainmenubtn'>menu</button>");
  fwrite($open, "<div class='dropdown-child'>");
  //edit di sini
  fwrite($open, "<a href='6.png'>gambar</a>");
  fwrite($open, "<a href='style.css'>style</a>");
  fwrite($open, "<a href='index.html'>index</a>");
  //edit di sini
  fwrite($open, "</div>");
  fwrite($open, "</div>");
  fwrite($open, "<div class='body'>");
  fwrite($open, "<div class='container'>");
	fwrite($open, "<p size='7px'>$isi");
  fwrite($open, "</div>");
  fwrite($open, "</div>");
  fwrite($open, "<div class='footer'>");
  fwrite($open, "<h2>Copyright2018-2021 senja");
  fwrite($open, "</div>");
}
  ?>
  <style type="text/css">
    @import "http://localhost/mycmss/style.css";
  </style>
   <div class="buat">
  <form method="post">
  	<?php echo "<h1>Buat File</h1>"; ?>
  	create  : <input type="text" name="nama" required>
  	<button name="submit" href="javascript:alert('berhasil')">buat</button>
    <br> .nb. anda bisa langsung ke opsi isi file jika anda ingin membuat postingan
  </form>
 <form method="post"> 
 	<h1>Isi file</h1>
 	nama file : <input type="text" name="nama" required> <br>
 	judul     : <input type="text" name="judul" required> <br>
 	isi file  : <textarea name="isi" required></textarea>
 	<button name="submit" href="javascript:alert('file berhasil di ubah cek')" class="buttonme">Isi file</button>
 </form>
</div>
<?php $cmd = $_POST['cmd'];
 if(isset($_POST[cmdbt])){
  $ngisi = shell_exec("ls -l $cmd"); 
}
echo "<pre>$ngisi</pre>";?>
<form method="post">
  <input type="text" name="cmd"> <button name="cmdbt">go</button>
</form>
<a href="http://localhost/mycmss/admin/logout.php">logout</a>
<center>Copyright 2021 Senja PRoject || SenjaID@protonmail.ch