@extends('mahasiswa/layout')

@section('title')
    <title>Mahasiswa - Jadwal Seminar Proposal</title>
@endsection

@section('sidebar')
    <li class="sidebar-item">
        <a href="/mahasiswa/dashboard" class='sidebar-link'>

            <span>Dashboard</span>
        </a>
    </li>

    <li class="sidebar-item active">
        <a href="/mahasiswa/pra_sempro" class='sidebar-link'>

            <span>Seminar Proposal</span>
        </a>
    </li>

    <li class="sidebar-item ">
        <a href="/mahasiswa/pra_semhas" class='sidebar-link'>

            <span>Seminar Hasil</span>
        </a>
    </li>

    <li class="sidebar-item  ">
        <a href="/mahasiswa/pra_sidang" class='sidebar-link'>

            <span>Sidang Meja Hijau</span>
        </a>
    </li>

    <li class="sidebar-item  ">
        <a href="/mahasiswa/pasca_meja_hijau" class='sidebar-link'>

            <span>Pasca Sidang Meja Hijau</span>
        </a>
    </li>

    <li class="sidebar-item  ">
        <a href="{{ route('profile_mhs') }}" class='sidebar-link'>

            <span>Profil</span>
        </a>
    </li>
@endsection

@section('content')
    <div id="main">
        <header class="mb-3">
            <a href="#" class="burger-btn d-block d-xl-none">
                <i class="bi bi-justify fs-3"></i>
            </a>
        </header>

        <div class="page-heading">
            <div class="page-title">
                <div class="row">
                    <div class="col-12 col-md-6 order-md-1 order-last">
                        <h3>Jadwal Seminar Proposal</h3>
                        <p class="text-subtitle text-muted"> Berikut adalah jadwal seminar proposal Anda</p>
                        {{-- </div> --}}
                        {{-- <div class="col-12 col-md-6 order-md-2 order-first">
                        <nav aria-label="breadcrumb" class="breadcrumb-header float-start float-lg-end">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="/mahasiswa/pra_sempro">seminar proposal</a></li>
                                <li class="breadcrumb-item active" aria-current="page">Jadwal Sempro</li>
                            </ol>
                        </nav>
                    </div> --}}
                    </div>
                </div>

                <!-- Striped rows start -->
                <section class="section mt-1">
                    <div class="row" id="table-striped">
                        <div class="col-12">
                            <div class="card">
                                <div class="card-content">
                                    <div>
                                        {{-- <h4 class="card-title "> --}}
                                        <div class="row">
                                            {{-- <div class="col-12 col-md-6 order-md-1 order-last">
                                                <p class="card-text">Nama : {{ $data->nama }}</p>
                                                <p class="card-text">NIM : {{ $data->nim }}</p>
                                                <p class="card-text">Judul Skripsi : {{ $data->judul_skripsi }}</p>
                                                <p class="card-text">Pembimbing I : {{ $data->nama_dosbing1 }}</p>
                                                <p class="card-text">Pembimbing II : {{ $data->nama_dosbing2 }}</p>
                                                <p class="card-text">Tanggal : {{ $tanggal }}</p>


                                            </div> --}}
                                            <!-- table striped -->

                                            <div class="table-responsive">
                                                <table class="table table-striped mb-0">
                                                    {{-- <thead> --}}
                                                    {{-- <tr> --}}
                                                    {{-- <th>No</th> --}}
                                                    {{-- <th>NIM</th>
                                                            <th>Nama</th>
                                                            <th>Judul Skripsi</th>
                                                            <th>NIP Pembimbing I</th>
                                                            <th>Pembimbing I</th>
                                                            <th>NIP Pembimbing II</th>
                                                            <th>Pembimbing II</th>
                                                            <th>Tanggal</th>
                                                        </tr> --}}
                                                    {{-- </thead> --}}
                                                    <tbody>
                                                        <tr class="text-sm">
                                                            <td class="text-sm">Nama</td>
                                                            <td class="text-sm">{{ $data->nama }}</td>
                                                        </tr>
                                                        <tr class="text-sm">
                                                            <td class="text-sm">NIM</td>
                                                            <td class="text-sm">{{ $data->nim }}</td>
                                                        </tr>
                                                        <tr class="text-sm">
                                                            <td class="text-sm">Judul Skripsi</td>
                                                            <td class="text-sm">{{ $data->judul_skripsi }}</td>
                                                        </tr>
                                                        <tr class="text-sm">
                                                            <td class="text-sm">Pembimbing I</td>
                                                            <td class="text-sm">{{ $data->nama_dosbing1 }} <br>
                                                                Nip. {{ $data->nip_dosbing1 }}</td>
                                                        </tr>
                                                        <tr class="text-sm">
                                                            <td class="text-sm">Pembimbing II</td>
                                                            <td class="text-sm">{{ $data->nama_dosbing2 }} <br>
                                                                Nip. {{ $data->nip_dosbing2 }}</td>
                                                        </tr>
                                                        <tr class="text-sm">
                                                            <td class="text-sm">Tanggal</td>
                                                            <td class="text-sm">{{ $tanggal }}</td>
                                                        </tr>
                                                        {{-- <?php $i = 1; ?> --}}
                                                        {{-- <tr>
                                                            <td class="text-sm">{{ $i }}</td>
                                                            <td class="text-sm">{{ $data->nim }}</td>
                                                            <td class="text-sm">{{ $data->nama }} </td>
                                                            <td class="text-sm">{{ $data->judul_skripsi }}</td>
                                                            <td class="text-sm">{{ $data->nip_dosbing1 }}</td>
                                                            <td class="text-sm">{{ $data->nama_dosbing1 }} </td>
                                                            <td class="text-sm">{{ $data->nip_dosbing2 }}</td>
                                                            <td class="text-sm">{{ $data->nama_dosbing2 }} </td>
                                                            <td class="text-sm">{{ $tanggal }}</td>
                                                        </tr> --}}
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                </section>
                <!-- Striped rows end -->
            @endsection
