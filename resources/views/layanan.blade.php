@extends('layouts.app')

@section('content')

<section class="py-5">
    <div class="container text-center">

        <h2 class="fw-bold text-danger mb-4">Layanan Kami</h2>
        <p class="text-muted mb-5">Berbagai layanan terbaik dari Satset Wash</p>

        <div class="row g-4">

            @foreach ($layanan as $index => $item)
            <div class="col-md-3 col-6">

                <!-- CARD -->
                <div class="p-4 h-100"
                     data-bs-toggle="modal"
                     data-bs-target="#modal{{ $index }}"
                     style="border:1px solid #eee; border-radius:10px; transition:0.3s; cursor:pointer;"
                     onmouseover="this.style.transform='translateY(-8px)'; this.style.boxShadow='0 10px 20px rgba(0,0,0,0.1)'"
                     onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='none'">

                    <img src="{{ asset($item['gambar']) }}"
                         style="width:50px; height:50px; object-fit:contain;">

                    <h6 class="fw-bold mt-3">{{ $item['nama'] }}</h6>
                    <p class="text-muted small">{{ $item['deskripsi'] }}</p>

                </div>

            </div>

            <!-- MODAL -->
            <div class="modal fade" id="modal{{ $index }}" tabindex="-1">
                <div class="modal-dialog modal-dialog-centered">
                    <div class="modal-content">

                        <div class="modal-header">
                            <h5 class="modal-title">{{ $item['nama'] }}</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                        </div>

                        <div class="modal-body text-center">

                             <img src="{{ asset($item['gambar']) }}"
                                    style="width:80px; height:80px; object-fit:contain;" class="mb-3">

                                <p class="fw-semibold">{{ $item['deskripsi'] }}</p>

                                 <p class="text-muted">
                                          {{ $item['detail'] }}
                             </p>

                        </div>

                    </div>
                </div>
            </div>

            @endforeach

        </div>

    </div>
</section>

@endsection