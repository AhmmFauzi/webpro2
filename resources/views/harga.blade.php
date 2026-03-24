@extends('layouts.app')

@section('content')

<section class="py-5" style="background:#f8f9fa;">
    <div class="container">

        <!-- JUDUL -->
        <div class="text-center mb-5">
            <h2 class="fw-bold text-danger">Daftar Harga</h2>
            <p class="text-muted">Pilih layanan sesuai kebutuhan Anda</p>
        </div>

        <div class="row g-4 justify-content-center">

            @foreach($harga as $item)
            <div class="col-md-3 col-6">

                <div class="p-4 text-center h-100"
                     style="background:white; border-radius:12px; transition:0.3s;"
                     onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 10px 25px rgba(0,0,0,0.1)'"
                     onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">

                    <!-- NAMA -->
                    <h5 class="fw-bold mb-3">
                        {{ $item['nama'] }}
                    </h5>

                    <!-- HARGA -->
                    <h3 class="text-danger fw-bold mb-3">
                        {{ $item['harga'] }}
                    </h3>

                    <!-- DESKRIPSI TAMBAHAN -->
                    <p class="text-muted small">
                        Layanan cepat dan berkualitas
                    </p>

                </div>

            </div>
            @endforeach

        </div>

    </div>
</section>

@endsection