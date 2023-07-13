@extends('Layouts.master')
@section('title', 'Peminjaman')
@section('content')
    <header class="mb-3">
        <a href="#" class="burger-btn d-block d-xl-none">
            <i class="bi bi-justify fs-3"></i>
        </a>
    </header>

    <div class="page-heading">
        <h3>Statistik Peminjaman</h3>
    </div>
    <div class="page-content">
        <section class="row">
            <div class="col-12 col-lg-9">
                <div class="row">
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon purple mb-2">
                                            <i class="iconly-boldShow"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Kembali</h6>
                                        <h6 class="font-extrabold mb-0">{{ $assetKembali->count() }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-6 col-lg-3 col-md-6">
                        <div class="card">
                            <div class="card-body px-4 py-4-5">
                                <div class="row">
                                    <div class="col-md-4 col-lg-12 col-xl-12 col-xxl-5 d-flex justify-content-start ">
                                        <div class="stats-icon blue mb-2">
                                            <i class="iconly-boldProfile"></i>
                                        </div>
                                    </div>
                                    <div class="col-md-8 col-lg-12 col-xl-12 col-xxl-7">
                                        <h6 class="text-muted font-semibold">Pinjam</h6>
                                        <h6 class="font-extrabold mb-0">{{ $assetPinjam->count() }}</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Profile Visit</h4>
                            </div>
                            <div class="card-body">
                                <div id="chart-profile-visit"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    {{-- Latest Peminjaman --}}
                    <div class="col col-xl-12">
                        <div class="card">
                            <div class="card-header">
                                <h4>Peminjaman Terkini</h4>
                            </div>
                            <div class="card-body">
                                <table class="table table-striped" id="table1">
                                    <thead>
                                        <tr>
                                            <th>Nama Peminjam</th>
                                            <th>Tanggal Peminjaman</th>
                                            <th>Nama Barang</th>
                                            <th>Lokasi</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($peminjamans as $peminjaman)
                                            <tr>
                                                <td class="col-3">
                                                    <div class="d-flex align-items-center">
                                                        <div class="avatar avatar-md">
                                                            <img src="{{ asset('dist/assets/images/faces/5.jpg') }}">
                                                        </div>
                                                        <p class="font-bold ms-3 mb-0">
                                                            {{ $peminjaman->nama_peminjam }}
                                                    </div>
                                                </td>
                                                <td class="col-auto">
                                                    <p class=" mb-0">
                                                        {{ $peminjaman->tanggal_peminjaman->format('d M Y') }}
                                                    </p>
                                                </td>
                                                <td class="col-auto">
                                                    <p class=" mb-0">
                                                        {{ $peminjaman->asset->nama }}
                                                    </p>
                                                </td>
                                                <td class="col-auto">
                                                    <p class=" mb-0">
                                                        {{ $peminjaman->asset->lokasi->nama }}
                                                    </p>
                                                </td>
                                                <td class="col-auto">
                                                    <p class=" mb-0">
                                                        {{ $peminjaman->status_peminjaman }}
                                                    </p>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    {{-- End Latest Peminjaman --}}
                </div>
            </div>
            <div class="col-12 col-lg-3">
                <div class="card">
                    <div class="card-body py-4 px-4">
                        <div class="d-flex align-items-center">
                            <div class="avatar avatar-xl">
                                <img src="{{ asset('dist/assets/images/faces/1.jpg') }}" alt="Face 1">
                            </div>
                            <div class="ms-3 name">
                                <h5 class="font-bold">John Duck</h5>
                                <h6 class="text-muted mb-0">@johnducky</h6>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4>History Peminjaman</h4>
                    </div>
                    <div class="card-content pb-4">
                        @foreach ($assetKembali as $item)
                            <div class="recent-message d-flex px-4 py-3">
                                <div class="avatar avatar-lg">
                                    <img src="{{ asset('dist/assets/images/faces/4.jpg') }}">
                                </div>
                                <div class="name ms-4">
                                    <h5 class="mb-1">{{ $item->nama_peminjam }}</h5>
                                    <h6 class="text-muted mb-0">
                                        {{ $item->created_at->format('d M Y H:i:s') }}</h6>
                                </div>
                            </div>
                        @endforeach
                        <div class="px-4">
                            <button class='btn btn-block btn-xl btn-outline-primary font-bold mt-3'>STambah
                                Peminjam</button>
                        </div>
                    </div>
                </div>
                <div class="card">
                    <div class="card-header">
                        <h4>Visitors Profile</h4>
                    </div>
                    <div class="card-body">
                        <div id="chart-visitors-profile"></div>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
