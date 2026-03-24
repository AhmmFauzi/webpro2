@extends('layouts.app')

@section('content')

<!-- CAROUSEL -->
<div id="carouselExample" class="carousel slide">
  <div class="carousel-inner">

    <div class="carousel-item active">
      <div style="background: linear-gradient(135deg, #e53935, #ffb300); height:300px;" class="d-flex justify-content-center align-items-center text-white">
        <div class="text-center">
          <h2 class="fw-bold">Laundry Kilat 1 Hari Selesai</h2>
          <p>Cepat, bersih, dan wangi</p>
        </div>
      </div>
    </div>

    <div class="carousel-item">
      <div style="background: linear-gradient(135deg, #ffb300, #e53935); height:300px;" class="d-flex justify-content-center align-items-center text-white">
        <div class="text-center">
          <h2 class="fw-bold">Harga Terjangkau</h2>
          <p>Mulai dari Rp5.000/kg</p>
        </div>
      </div>
    </div>

    <div class="carousel-item">
      <div style="background: linear-gradient(135deg, #e53935, #ffb300); height:300px;" class="d-flex justify-content-center align-items-center text-white">
        <div class="text-center">
          <h2 class="fw-bold">Pelayanan Ramah</h2>
          <p>Kepuasan pelanggan prioritas kami</p>
        </div>
      </div>
    </div>

  </div>

  <!-- tombol -->
  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </button>

  <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
    <span class="carousel-control-next-icon"></span>
  </button>
</div>

<!-- HERO -->
<section style="background: linear-gradient(135deg, #e53935, #ffb300); color:white;">
    <div class="container text-center py-5">
        <h1 class="fw-bold display-4">{{ $nama }}</h1>
        <p class="mt-3 fs-5">{{ $deskripsi }}</p>

        <a href="#" class="btn btn-light mt-3 fw-semibold">
            Hubungi Kami
        </a>
    </div>
</section>

<!-- LAYANAN -->
<div class="container mt-5 text-center">
    <h3 class="fw-bold mb-4 text-danger">Layanan Satset Wash</h3>

    <div class="row g-0">

        @foreach ($layanan as $item)
        <div class="col-md-3 col-6" style="border:1px solid #ddd;">
            
            <div class="p-4 text-center" style="transition:0.3s;"
                 onmouseover="this.style.background='#fff8e1'; this.querySelector('img').style.transform='scale(1.2)'"
                 onmouseout="this.style.background='transparent'; this.querySelector('img').style.transform='scale(1)'">

                <img src="{{ asset($item['gambar']) }}" 
                     style="width:48px; height:48px; object-fit:contain; transition:0.3s;">

                <p class="fw-semibold mt-2 mb-0">
                    {{ $item['nama'] }}
                </p>

            </div>

        </div>
        @endforeach

    </div>
</div>

<!-- HARGA -->
<section class="py-5">
    <div class="container text-center">
        <h2 class="fw-bold mb-5 text-danger">Harga</h2>

        <div class="row g-0">

            @foreach($harga as $item)
            <div class="col-md-3 col-6" style="border:1px solid #ddd;">

                <div class="p-4 text-center"
                     style="transition:0.3s;"
                     onmouseover="this.style.background='#fff8e1'; this.style.transform='scale(1.03)'"
                     onmouseout="this.style.background='transparent'; this.style.transform='scale(1)'">

                    <h6 class="fw-bold mb-2">
                        {{ $item['nama'] }}
                    </h6>

                    <p class="text-danger fw-bold mb-0 fs-5">
                        {{ $item['harga'] }}
                    </p>

                </div>

            </div>
            @endforeach

        </div>

    </div>
</section>

<!-- KONTAK -->
<!-- KONTAK -->
<section style="background: linear-gradient(135deg, #e53935, #ffb300); color:white;" class="py-5">
    <div class="container text-center">
        <h2 class="fw-bold mb-4">Kontak Kami</h2>
        <p class="mb-5">Hubungi kami melalui platform berikut</p>

        <div class="d-flex justify-content-center gap-4 flex-wrap">

            <!-- WHATSAPP -->
            <a href="https://wa.me/628123456789" target="_blank"
               style="text-decoration:none; color:white;">
                <div style="width:120px; transition:0.3s;"
                     onmouseover="this.style.transform='scale(1.1)'"
                     onmouseout="this.style.transform='scale(1)'">

                    <div style="background:white; color:#25D366; border-radius:50%; width:70px; height:70px; display:flex; align-items:center; justify-content:center; margin:auto;">
                        <i class="bi bi-whatsapp" style="font-size:30px;"></i>
                    </div>

                    <p class="mt-2 mb-0 fw-semibold">WhatsApp</p>
                </div>
            </a>

            <!-- EMAIL -->
            <a href="mailto:satsetwash@gmail.com"
               style="text-decoration:none; color:white;">
                <div style="width:120px; transition:0.3s;"
                     onmouseover="this.style.transform='scale(1.1)'"
                     onmouseout="this.style.transform='scale(1)'">

                    <div style="background:white; color:#1976d2; border-radius:50%; width:70px; height:70px; display:flex; align-items:center; justify-content:center; margin:auto;">
                        <i class="bi bi-envelope-fill" style="font-size:30px;"></i>
                    </div>

                    <p class="mt-2 mb-0 fw-semibold">Email</p>
                </div>
            </a>

            <!-- INSTAGRAM -->
            <a href="https://instagram.com/satset.wash" target="_blank"
               style="text-decoration:none; color:white;">
                <div style="width:120px; transition:0.3s;"
                     onmouseover="this.style.transform='scale(1.1)'"
                     onmouseout="this.style.transform='scale(1)'">

                    <div style="background:white; color:#e1306c; border-radius:50%; width:70px; height:70px; display:flex; align-items:center; justify-content:center; margin:auto;">
                        <i class="bi bi-instagram" style="font-size:30px;"></i>
                    </div>

                    <p class="mt-2 mb-0 fw-semibold">Instagram</p>
                </div>
            </a>

        </div>
    </div>
</section>

@endsection