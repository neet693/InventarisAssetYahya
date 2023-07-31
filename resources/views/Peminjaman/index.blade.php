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
                                <div id="peminjaman-chart"></div>
                                <canvas id="myChart"></canvas>
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
                                <button type="button" class="btn btn-outline-success" data-bs-toggle="modal"
                                    data-bs-target="#exampleModalScrollable">
                                    <i class="bi bi-bag-plus-fill"></i>
                                </button>
                                <table class="table table-striped" id="table1">
                                    <thead>
                                        <tr>
                                            <th>Nama Peminjam</th>
                                            <th>Tanggal Peminjaman</th>
                                            <th>Nama Barang</th>
                                            <th>Lokasi</th>
                                            <th>Status</th>
                                            <th>Aksi</th>
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
                                                <td class="col-auto">
                                                    <button type="button" class="btn icon btn-warning"
                                                        data-bs-toggle="modal" data-bs-target="#editModalScrollable">
                                                        <i class="bi bi-pencil"></i>
                                                    </button>
                                                    <a href="#" class="btn icon btn-danger"><i
                                                            class="bi bi-trash"></i></a>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    @include('Modals.Peminjamans.modal-add')
                    @include('Modals.Peminjamans.modal-edit')
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
                            <button class='btn btn-block btn-xl btn-outline-primary font-bold mt-3'>Tambah
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

<script>
    var chartColors = {
        red: 'rgb(255, 99, 132)',
        orange: 'rgb(255, 159, 64)',
        yellow: 'rgb(255, 205, 86)',
        green: 'rgb(75, 192, 192)',
        info: '#41B1F9',
        blue: '#3245D1',
        purple: 'rgb(153, 102, 255)',
        grey: '#EBEFF6'
    };

    var config1 = {
        type: "line",
        data: {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [{
                label: "Balance",
                backgroundColor: "#fff",
                borderColor: "#fff",
                data: [20, 40, 20, 70, 10, 50, 20],
                fill: false,
                pointBorderWidth: 100,
                pointBorderColor: "transparent",
                pointRadius: 3,
                pointBackgroundColor: "transparent",
                pointHoverBackgroundColor: "rgba(63,82,227,1)",
            }, ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: -10,
                    top: 10,
                },
            },
            legend: {
                display: false,
            },
            title: {
                display: false,
            },
            tooltips: {
                mode: "index",
                intersect: false,
            },
            hover: {
                mode: "nearest",
                intersect: true,
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        drawBorder: false,
                        display: false,
                    },
                    ticks: {
                        display: false,
                    },
                }, ],
                yAxes: [{
                    gridLines: {
                        display: false,
                        drawBorder: false,
                    },
                    ticks: {
                        display: false,
                    },
                }, ],
            },
        },
    };
    var config2 = {
        type: "line",
        data: {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [{
                label: "Revenue",
                backgroundColor: "#fff",
                borderColor: "#fff",
                data: [20, 800, 300, 400, 10, 50, 20],
                fill: false,
                pointBorderWidth: 100,
                pointBorderColor: "transparent",
                pointRadius: 3,
                pointBackgroundColor: "transparent",
                pointHoverBackgroundColor: "rgba(63,82,227,1)",
            }, ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: -10,
                    top: 10,
                },
            },
            legend: {
                display: false,
            },
            title: {
                display: false,
            },
            tooltips: {
                mode: "index",
                intersect: false,
            },
            hover: {
                mode: "nearest",
                intersect: true,
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        drawBorder: false,
                        display: false,
                    },
                    ticks: {
                        display: false,
                    },
                }, ],
                yAxes: [{
                    gridLines: {
                        display: false,
                        drawBorder: false,
                    },
                    ticks: {
                        display: false,
                    },
                }, ],
            },
        },
    };
    var config3 = {
        type: "line",
        data: {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [{
                label: "Orders",
                backgroundColor: "#fff",
                borderColor: "#fff",
                data: [20, 40, 20, 200, 10, 540, 723],
                fill: false,
                pointBorderWidth: 100,
                pointBorderColor: "transparent",
                pointRadius: 3,
                pointBackgroundColor: "transparent",
                pointHoverBackgroundColor: "rgba(63,82,227,1)",
            }, ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: -10,
                    top: 10,
                },
            },
            legend: {
                display: false,
            },
            title: {
                display: false,
                text: "Chart.js Line Chart",
            },
            tooltips: {
                mode: "index",
                intersect: false,
            },
            hover: {
                mode: "nearest",
                intersect: true,
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        drawBorder: false,
                        display: false,
                    },
                    ticks: {
                        display: false,
                    },
                }, ],
                yAxes: [{
                    gridLines: {
                        display: false,
                        drawBorder: false,
                    },
                    ticks: {
                        display: false,
                    },
                }, ],
            },
        },
    };
    var config4 = {
        type: "line",
        data: {
            labels: ["January", "February", "March", "April", "May", "June", "July"],
            datasets: [{
                label: "My First dataset",
                backgroundColor: "#fff",
                borderColor: "#fff",
                data: [20, 40, 20, 70, 10, 5, 23],
                fill: false,
                pointBorderWidth: 100,
                pointBorderColor: "transparent",
                pointRadius: 3,
                pointBackgroundColor: "transparent",
                pointHoverBackgroundColor: "rgba(63,82,227,1)",
            }, ],
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            layout: {
                padding: {
                    left: -10,
                    top: 10,
                },
            },
            legend: {
                display: false,
            },
            title: {
                display: false,
                text: "Chart.js Line Chart",
            },
            tooltips: {
                mode: "index",
                intersect: false,
            },
            hover: {
                mode: "nearest",
                intersect: true,
            },
            scales: {
                xAxes: [{
                    gridLines: {
                        drawBorder: false,
                        display: false,
                    },
                    ticks: {
                        display: false,
                    },
                }, ],
                yAxes: [{
                    gridLines: {
                        display: false,
                        drawBorder: false,
                    },
                    ticks: {
                        display: false,
                    },
                }, ],
            },
        },
    };


    var ctxBar = document.getElementById("bar").getContext("2d");
    var myBar = new Chart(ctxBar, {
        type: 'bar',
        data: {
            labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
            datasets: [{
                label: 'Students',
                backgroundColor: [chartColors.grey, chartColors.grey, chartColors.grey, chartColors
                    .grey, chartColors.info, chartColors.blue, chartColors.grey
                ],
                data: [
                    5,
                    10,
                    30,
                    40,
                    35,
                    55,
                    15,
                ]
            }]
        },
        options: {
            responsive: true,
            barRoundness: 1,
            title: {
                display: true,
                text: "Students in 2020"
            },
            legend: {
                display: false
            },
            scales: {
                yAxes: [{
                    ticks: {
                        beginAtZero: true,
                        suggestedMax: 40 + 20,
                        padding: 10,
                    },
                    gridLines: {
                        drawBorder: false,
                    }
                }],
                xAxes: [{
                    gridLines: {
                        display: false,
                        drawBorder: false
                    }
                }]
            }
        }
    });
    var line = document.getElementById("line").getContext("2d");
    var gradient = line.createLinearGradient(0, 0, 0, 400);
    gradient.addColorStop(0, 'rgba(50, 69, 209,1)');
    gradient.addColorStop(1, 'rgba(265, 177, 249,0)');

    var gradient2 = line.createLinearGradient(0, 0, 0, 400);
    gradient2.addColorStop(0, 'rgba(255, 91, 92,1)');
    gradient2.addColorStop(1, 'rgba(265, 177, 249,0)');

    var myline = new Chart(line, {
        type: 'line',
        data: {
            labels: ['16-07-2018', '17-07-2018', '18-07-2018', '19-07-2018', '20-07-2018', '21-07-2018',
                '22-07-2018', '23-07-2018', '24-07-2018', '25-07-2018'
            ],
            datasets: [{
                label: 'Balance',
                data: [50, 25, 61, 50, 72, 52, 60, 41, 30, 45],
                backgroundColor: "rgba(50, 69, 209,.6)",
                borderWidth: 3,
                borderColor: 'rgba(63,82,227,1)',
                pointBorderWidth: 0,
                pointBorderColor: 'transparent',
                pointRadius: 3,
                pointBackgroundColor: 'transparent',
                pointHoverBackgroundColor: 'rgba(63,82,227,1)',
            }, {
                label: 'Balance',
                data: [20, 35, 45, 75, 37, 86, 45, 65, 25, 53],
                backgroundColor: "rgba(253, 183, 90,.6)",
                borderWidth: 3,
                borderColor: 'rgba(253, 183, 90,.6)',
                pointBorderWidth: 0,
                pointBorderColor: 'transparent',
                pointRadius: 3,
                pointBackgroundColor: 'transparent',
                pointHoverBackgroundColor: 'rgba(63,82,227,1)',
            }]
        },
        options: {
            responsive: true,
            layout: {
                padding: {
                    top: 10,
                },
            },
            tooltips: {
                intersect: false,
                titleFontFamily: 'Helvetica',
                titleMarginBottom: 10,
                xPadding: 10,
                yPadding: 10,
                cornerRadius: 3,
            },
            legend: {
                display: true,
            },
            scales: {
                yAxes: [{
                    gridLines: {
                        display: true,
                        drawBorder: true,
                    },
                    ticks: {
                        display: true,
                    },
                }, ],
                xAxes: [{
                    gridLines: {
                        drawBorder: false,
                        display: false,
                    },
                    ticks: {
                        display: false,
                    },
                }, ],
            },
        }
    });

    // let ctx1 = document.getElementById("canvas1").getContext("2d");
    // let ctx2 = document.getElementById("canvas2").getContext("2d");
    // let ctx3 = document.getElementById("canvas3").getContext("2d");
    // let ctx4 = document.getElementById("canvas4").getContext("2d");
    // var lineChart1 = new Chart(ctx1, config1);
    // var lineChart2 = new Chart(ctx2, config2);
    // var lineChart3 = new Chart(ctx3, config3);
    // var lineChart4 = new Chart(ctx4, config4);
</script>
