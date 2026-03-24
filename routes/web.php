<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| DATA (biar tidak nulis ulang)
|--------------------------------------------------------------------------
*/

$nama = "Satset Wash";
$deskripsi = "Laundry cepat, bersih, dan terpercaya";
$kontak = "08123456789";

$layanan = [
    [
        "nama" => "Cuci Kering",
        "deskripsi" => "Cepat dan wangi",
        "gambar" => "images/icons/cuci-kering.png"
    ],
    [
        "nama" => "Cuci Setrika",
        "deskripsi" => "Rapi siap pakai",
        "gambar" => "images/icons/cuci-setrika.png"
    ],
    [
        "nama" => "Setrika",
        "deskripsi" => "Licin dan halus",
        "gambar" => "images/icons/setrika.png"
    ],
    [
        "nama" => "Express",
        "deskripsi" => "Selesai dalam 24 jam",
        "gambar" => "images/icons/express.png"
    ],
];

$harga = [
    ["nama" => "Cuci Kering", "harga" => "Rp5.000 / kg"],
    ["nama" => "Cuci + Setrika", "harga" => "Rp7.000 / kg"],
    ["nama" => "Setrika Saja", "harga" => "Rp4.000 / kg"],
    ["nama" => "Express", "harga" => "Rp10.000 / kg"],
];

/*
|--------------------------------------------------------------------------
| ROUTE HOME
|--------------------------------------------------------------------------
*/

Route::get('/', function () use ($nama, $deskripsi, $kontak, $layanan, $harga) {
    return view('home', compact('nama','deskripsi','kontak','layanan','harga'));
});

/*
|--------------------------------------------------------------------------
| ROUTE LAYANAN
|--------------------------------------------------------------------------
*/

Route::get('/layanan', function () use ($layanan, $nama, $kontak) {
    return view('layanan', compact('layanan','nama','kontak'));
});

Route::get('/harga', function () use ($harga, $nama, $kontak) {
    return view('harga', compact('harga','nama','kontak'));
});

Route::get('/kontak', function () use ($nama) {
    return view('kontak', compact('nama'));
});