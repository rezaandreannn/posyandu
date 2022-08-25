<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Kegiatan Posyandu</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css"
        integrity="sha512-+4zCK9k+qNFUR5X+cKL9EIR+ZOhtIloNl9GIKS57V1MyNsYpYcUrUeQc9vNfzsWfV28IaLL3i96P9sdNyeRssA=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <div class="container">
        <h5 class="text-center">Laporan Kegiatan Posyandu</h5>
        <div class="row mt-3">
            <div class="col-md-3">BULAN</div>
            <div class="col-md-7">: {{ $bulan ?? '0' }}</div>
        </div>
        <div class="row">
            <div class="col-md-3">TAHUN</div>
            <div class="col-md-7">: {{ $tahun ?? '22' }}</div>
        </div>
        <div class="row">
            <div class="col-md-3">POSYANDU</div>
            <div class="col-md-7">: {{ $posyandu ?? 'Posyandu Mawar' }}</div>
        </div>

        <h5 class="mt-3">Data Balita</h5>
        <table class="table">
            <thead>
                <tr>
                    <th rowspan="2"></th>
                    <th colspan="2">0 - 12 bulan</th>
                    <th colspan="2">12 - 24 bulan</th>
                    <th colspan="2">24 - 36 bulan</th>
                    <th colspan="2">36 - 46 bulan</th>
                    <th colspan="2">46 bulan</th>

                </tr>
                <tr>
                    <th>L</th>
                    <th>P</th>
                    <th>L</th>
                    <th>P</th>
                    <th>L</th>
                    <th>P</th>
                    <th>L</th>
                    <th>P</th>
                    <th>L</th>
                    <th>P</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>Jumlah</td>
                    <td>{{ $LjumlahBerdasarkanUsia['bawah1'] }}</td>
                    <td>{{ $PjumlahBerdasarkanUsia['bawah1'] }}</td>
                    <td>{{ $LjumlahBerdasarkanUsia['antara1ke2'] }}</td>
                    <td>{{ $PjumlahBerdasarkanUsia['antara1ke2'] }}</td>
                    <td>{{ $LjumlahBerdasarkanUsia['antara2ke3'] }}</td>
                    <td>{{ $PjumlahBerdasarkanUsia['antara2ke3'] }}</td>
                    <td>{{ $LjumlahBerdasarkanUsia['antara3ke4'] }}</td>
                    <td>{{ $PjumlahBerdasarkanUsia['antara3ke4'] }}</td>
                    <td>{{ $LjumlahBerdasarkanUsia['atas4'] }}</td>
                    <td>{{ $PjumlahBerdasarkanUsia['atas4'] }}</td>
                </tr>
            </tbody>
        </table>

        <hr class="mt-5 mb-5">

        <h5 class="mt-5">Data Ibu Hamil</h5>
        <table class="table">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama Ibu</th>
                    <th>Nama Suami</th>
                    <th>Usia</th>
                    <th>Usia Hamil</th>
                    <th>Alamat</th>
                    <th>G2</th>
                    <th>P2</th>
                    <th>A</th>
                    <th>BB</th>
                    <th>TB</th>
                    <th>LILA</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($penimbanganBumil as $penimbangan)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $penimbangan->bumil->nama_ibu }}</td>
                        <td>{{ $penimbangan->bumil->nama_suami }}</td>
                        <td>{{ Carbon\Carbon::parse($penimbangan->bumil->tgl_lahir)->diff(\Carbon\Carbon::now())->format('%y thn') }}
                        <td>
                            {{ Carbon\Carbon::parse($penimbangan->bumil->tgl_kehamilan)->diffInWeeks(\Carbon\Carbon::now()) }}
                            Minggu
                        </td>
                        <td>{{ $penimbangan->bumil->alamat }}</td>
                        <td>{{ $penimbangan->g2 }}</td>
                        <td>{{ $penimbangan->p2 }}</td>
                        <td>{{ $penimbangan->a0 }}</td>

                        <td>{{ $penimbangan->berat_badan }} Kg</td>
                        <td>{{ $penimbangan->tinggi_badan }} Cm</td>
                        <td>{{ $penimbangan->lila }} Cm</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <hr class="mt-5 mb-5">

        <h5 class="mt-5">Data Imunisasi Balita</h5>
        <table class="table">
            <thead>
                <tr>
                    <th rowspan="2">No</th>
                    <th rowspan="2">Nama</th>
                    <th rowspan="2">Nama Ibu</th>
                    <th rowspan="2">Tgl Lahir</th>
                    <th rowspan="2" colspan="2">Alamat</th>
                    <th colspan="5" class="text-center">Imunisasi</th>
                </tr>
                <tr>
                    <th>HB</th>
                    <th>BCG</th>
                    <th>POLIO</th>
                    <th>DPT</th>
                    <th>CAMPAK</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($imunisasiBalita as $imunisasi)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $imunisasi->balita->nama }}</td>
                        <td>{{ $imunisasi->balita->nama_ibu }}</td>
                        <td>{{ Carbon\Carbon::parse($imunisasi->balita->tgl_lahir)->diff(\Carbon\Carbon::now())->format('%y thn, %m bln dan %d hari') }}
                        <td style="max-width: 200px">
                        <td>{{ $imunisasi->balita->alamat }}</td>
                        <td>
                            @if ($imunisasi->nama == 'Hepatitis B')
                                <i class="fas fa-check"></i>
                            @endif
                        </td>
                        <td>
                            @if ($imunisasi->nama == 'BCG')
                                <i class="fas fa-check"></i>
                            @endif
                        </td>
                        <td>
                            @if ($imunisasi->nama == 'Polio')
                                <i class="fas fa-check"></i>
                            @endif
                        </td>
                        <td>
                            @if ($imunisasi->nama == 'DPT')
                                <i class="fas fa-check"></i>
                            @endif
                        </td>
                        <td>
                            @if ($imunisasi->nama == 'Campak')
                                <i class="fas fa-check"></i>
                            @endif
                        </td>


                    </tr>
                @endforeach
            </tbody>
        </table>

        <hr class="mt-5 mb-5">

        <h5 class="mt-5">Data Imunisasi Ibu Hamil</h5>
        <table class="table">
            <thead>
                <tr>
                    <th rowspan="2">No</th>
                    <th rowspan="2">Nama Ibu</th>
                    <th rowspan="2">Nama Suami</th>
                    <th rowspan="2">Usia</th>
                    <th rowspan="2" colspan="2">Alamat</th>
                    <th colspan="5" class="text-center">Imunisasi</th>
                </tr>
                <tr>
                    <td>MMR</td>
                    <td>TT</td>
                    <td>DPT</td>
                    <td>HA</td>
                    <td>HB</td>
                </tr>
            </thead>
            <tbody>
                @foreach ($imunisasiBumil as $imunisasi)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $imunisasi->bumil->nama_ibu }}</td>
                        <td>{{ $imunisasi->bumil->nama_suami }}</td>
                        <td>{{ Carbon\Carbon::parse($imunisasi->bumil->tgl_lahir)->diff(\Carbon\Carbon::now())->format('%y thn') }}
                        <td>
                        <td>{{ $imunisasi->bumil->alamat }}</td>
                        <td>
                            @if ($imunisasi->nama == 'MMR')
                                <i class="fas fa-check"></i>
                            @endif
                        </td>
                        <td>
                            @if ($imunisasi->nama == 'TT')
                                <i class="fas fa-check"></i>
                            @endif
                        </td>
                        <td>
                            @if ($imunisasi->nama == 'DPT')
                                <i class="fas fa-check"></i>
                            @endif
                        </td>
                        <td>
                            @if ($imunisasi->nama == 'Hepatitis A')
                                <i class="fas fa-check"></i>
                            @endif
                        </td>
                        <td>
                            @if ($imunisasi->nama == 'Hepatitis B')
                                <i class="fas fa-check"></i>
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</body>
<script>
    window.print();
</script>

</html>
