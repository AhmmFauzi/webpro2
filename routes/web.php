<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| DATA
|--------------------------------------------------------------------------
*/

$nama = "Satset Wash";
$deskripsi = "Laundry cepat, bersih, dan terpercaya";
$kontak = "08123456789";

$layanan = [
    [
        "nama" => "Cuci Kering",
        "deskripsi" => "Cepat dan wangi",
        "gambar" => "images/icons/cuci-kering.png",
        "detail" => "Layanan cuci tanpa setrika, cocok untuk pakaian santai. Proses cepat dengan hasil bersih dan wangi."
    ],
    [
        "nama" => "Cuci Setrika",
        "deskripsi" => "Rapi siap pakai",
        "gambar" => "images/icons/cuci-setrika.png",
        "detail" => "Pakaian dicuci dan disetrika hingga rapi. Siap langsung dipakai tanpa perlu repot lagi."
    ],
    [
        "nama" => "Setrika",
        "deskripsi" => "Licin dan halus",
        "gambar" => "images/icons/setrika.png",
        "detail" => "Khusus setrika saja. Pakaian dijamin licin, rapi, dan bebas kusut."
    ],
    [
        "nama" => "Express",
        "deskripsi" => "Selesai dalam 24 jam",
        "gambar" => "images/icons/express.png",
        "detail" => "Layanan super cepat, selesai dalam 1 hari. Cocok untuk kebutuhan mendesak."
    ],
];

$harga = [
    ["nama" => "Cuci Kering", "harga" => "Rp5.000 per kg"],
    ["nama" => "Cuci + Setrika", "harga" => "Rp7.000 per kg"],
    ["nama" => "Setrika Saja", "harga" => "Rp4.000 per kg"],
    ["nama" => "Express", "harga" => "Rp10.000 per kg"],
];

/*
|--------------------------------------------------------------------------
| ROUTE
|--------------------------------------------------------------------------
*/

Route::get('/', function () use ($nama, $deskripsi, $kontak, $layanan, $harga) {
    return view('home', compact('nama','deskripsi','kontak','layanan','harga'));
});

Route::get('/layanan', function () use ($layanan, $nama, $kontak) {
    return view('layanan', compact('layanan','nama','kontak'));
});

Route::get('/harga', function () use ($harga, $nama, $kontak) {
    return view('harga', compact('harga','nama','kontak'));
});

Route::get('/kontak', function () use ($nama) {
    return view('kontak', compact('nama'));
});