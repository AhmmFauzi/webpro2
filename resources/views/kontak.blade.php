@extends('layouts.app')

@section('content')

<section class="py-5" style="background: linear-gradient(135deg, #e53935, #ffb300);">
    <div class="container">

        <div class="text-center text-white mb-5">
            <h2 class="fw-bold">Hubungi Kami</h2>
            <p>Kami siap membantu kebutuhan laundry Anda</p>
        </div>

        <div class="row justify-content-center">

            <!-- INFO KONTAK -->
            <div class="col-md-4 mb-4">
                <div class="p-4 bg-white rounded shadow h-100 text-center">

                    <h5 class="fw-bold mb-3">Informasi</h5>

                    <p>📞 08123456789</p>
                    <p>📧 satsetwash@gmail.com</p>
                    <p>📸 @satsetwash</p>

                </div>
            </div>

            <!-- FORM -->
            <div class="col-md-6">
                <div class="p-4 bg-white rounded shadow">

                    <h5 class="fw-bold mb-3 text-center">Kirim Pesan</h5>

                    <form>
                        <div class="mb-3">
                            <input type="text" class="form-control" placeholder="Nama">
                        </div>

                        <div class="mb-3">
                            <input type="email" class="form-control" placeholder="Email">
                        </div>

                        <div class="mb-3">
                            <textarea class="form-control" rows="4" placeholder="Pesan"></textarea>
                        </div>

                        <button class="btn btn-danger w-100">
                            Kirim Pesan
                        </button>
                    </form>

                </div>
            </div>

        </div>

    </div>
</section>

@endsection