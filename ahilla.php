<?php 

//umur
// Tanggal lahir
$tanggal_lahir = "2002-11-10";

// Menghitung umur
$tgl_lahir = new DateTime($tanggal_lahir);
$tgl_sekarang = new DateTime();
$umur = $tgl_sekarang->diff($tgl_lahir)->format('%y tahun, %m bulan, %d hari, %h jam, %i menit, %s detik');
 $youtubeLink = "https://www.youtube.com/@madjoemapan2461";
 $instagramLink = "https://www.instagram.com/kammalaarchive/";
 $email = "mailto:21081010234@student.upnjatim.ac.id";