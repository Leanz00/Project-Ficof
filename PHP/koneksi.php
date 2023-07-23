<?php
$host     = 'sql203.infinityfree.com';
$user     = 'if0_34672795'; // diisi dengan user database kalian biasanya
                    // defaultnya bernama root jika kita belum 
                    // merubahnya
$password = 'r1CVRFTMbz';  //diisi dengan password database kalian biasanya
                 // defaultnya kosong
$db       = 'if0_34672795_db_ficof'; //diisi dengan nama database kalian
 
$con = mysqli_connect($host, $user, $password, $db) or die(mysqli_error());
?>