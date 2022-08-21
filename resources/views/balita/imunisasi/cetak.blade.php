<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Imunisasi Balita</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
        integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Fy6S3B9q64WdZWQUiU+q4/2Lc9npb8tCaSX9FK7E8HnRr0Jz8D6OP9dO5Vg3Q9ct" crossorigin="anonymous">
    </script>
</head>

<body>
    <div class="container">
        <h5 class="text-center">Laporan Imunisasi Balita</h5>
        <div class="row mt-3">
            <div class="col-md-3">Pada Bulan</div>
            <div class="col-md-7">: {{ $bulan }}</div>
        </div>
        <div class="row">
            <div class="col-md-3">Pada Tahun</div>
            <div class="col-md-7">: {{ $tahun }}</div>
        </div>
        <div class="row">
            <div class="col-md-3">Pada Posyandu</div>
            <div class="col-md-7">: {{ $posyandu }}</div>
        </div>

        <table class="table mt-5">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama balita</th>
                    <th>Nama Imunisasi</th>
                    <th>Jenis Imunisasi</th>
                    <th>Keterangan</th>
                    <th>Tanggal</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($imunisasiBalita as $imuniasasi)
                    <tr>
                        <td>{{ $loop->iteration }}</td>
                        <td>{{ $imuniasasi->balita->nama }}</td>
                        <td>{{ $imuniasasi->nama }}</td>
                        <td>{{ $imuniasasi->jenis }}</td>
                        <td>{{ $imuniasasi->keterangan }}</td>
                        <td>{{ $imuniasasi->updated_at->Format('d/m/Y') }}</td>

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
