@extends('layouts.app')

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

@section('content')
    <div>
        <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
        <h1>Selamat datang di website kami!</h1>
        <p>Website ini dibuat untuk mendukung dan memberikan informasi mengenai perusahaan kami, merk-merk, dan
            produk-produk yang kami jual.</p>
        <p>Kami berharap bisa memberikan kemudahan dan informasi yang cukup bagi Anda.</p>
        <p>Salam, <strong>Perusahaan XYZ</strong></p>
        @foreach ($merk as $m)
            {{ $m->merk_barang }}
        @endforeach

    </div>
@endsection()
