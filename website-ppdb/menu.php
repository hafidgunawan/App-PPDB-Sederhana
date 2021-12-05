<?php
session_start();

include "../config/koneksi.php";
define("INDEX", true);

// if(isset($_GET['page'])) {

//   $page = $_GET['page'];

//   if ($page == "home") {
//     include "halaman/home.php";
//   }elseif ($page == "pendaftaran") {
//     include "../etc-admin/tambah-data.php";
//   }elseif ($page == "site-sekolah") {
//     include "halaman/site-sekolah.php";
//   }elseif ($page == "info-site") {
//     include "halaman/info-site.php";
//   }//elseif ($page == "list-siswa") {
//     //include "list-siswa.php";
//   //}
//   elseif ($page == "contact-us") {
//     include "halaman/contact.php";
//   }
// }

/*
if (isset($_GET['page'])) $page = $_GET['page'];
else $page = "Home";
  
  if ($page == "Home") include("index.php");
  elseif ($page == "pendaftaran")include("pendaftaran.php");
   
elseif($page == "pendaftaran")
  include("halaman/pendaftaran.php");

else echo "Error 404 Not Found (Banana)"; *.

*/

if(isset($_GET['page'])) {
  $page = $_GET['page'];

switch ($page) {
  case 'pendaftaran':
    include "../etc-admin/tambah-data.php";
    break;
  case 'site-sekolah':
    include "halaman/site-sekolah.php";
    break;
  case 'info-site':
    include "halaman/info-site.php";
    break;
  case 'contact-us':
    include "halaman/contact.php";
    break;
    }
  }else{
  include "halaman/home.php";
} 
?>