<x-frond-layout title="kms">
    <div class="site-blocks-cover" style="overflow: hidden;">
        <div class="container" style="margin-top: 150px">
            @if (session('message'))
                <div class="alert alert-info text-center" role="alert">
                    <span>
                        {{ session('message') }}
                    </span>
                </div>
            @endif

            {{-- <div class="row">
                <div class="col-md-4">Nama</div>
                <div class="col-md-4">{{ $balita->nama }}</div>
            </div>
            <div class="row">
                <div class="col-md-4">Nama</div>
                <div class="col-md-4">{{ $balita->nama_ibu }}</div>
            </div> --}}

            {{-- <a href="{{ route('balita.create') }}" class="btn rounded-0 btn-sm text-white"
                style="background-color: cadetblue" class="text-white">Tambah</a> --}}
            <table class="table mt-2 ">
                <thead style="background-color: rgb(118, 132, 133)" class="text-white">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Tanggal</th>
                        <th scope="col">Berat badan</th>
                        <th scope="col">Keterangan</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($kms as $kms)
                        <tr>
                            <td scope="row">{{ $loop->iteration }}</td>
                            <td>{{ $kms->updated_at }}</td>
                            <td>{{ $kms->berat_badan }}</td>
                            <td>{{ $kms->keterangan }}</td>
                            {{-- <td>{{ $balita->jenis_kelamin }}</td> --}}
                            {{-- <td>{{ Carbon\Carbon::parse($balita->tgl_lahir)->diff(\Carbon\Carbon::now())->format('%y thn, %m bln and %d hari') }} --}}
                        @empty
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>


</x-frond-layout>
