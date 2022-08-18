<x-frond-layout title="Bumil">
    <div class="site-blocks-cover" style="overflow: hidden;">
        <div class="container" style="margin-top: 150px">
            @if (session('message'))
                <div class="alert alert-info text-center" role="alert">
                    <span>
                        {{ session('message') }}
                    </span>
                </div>
            @endif

            <a href="{{ route('bumil.create') }}" class="btn rounded-0 btn-sm text-white"
                style="background-color: rgb(116, 205, 221)" class="text-white">Tambah</a>
            <table class="table mt-2 ">
                <thead style="background-color: rgb(116, 205, 221)" class="text-white">
                    <tr>
                        <th scope="col">No</th>
                        <th scope="col">Nama ibu</th>
                        <th scope="col">Nama suami</th>
                        <th scope="col">Umur</th>
                        <th scope="col">Umur Kehamilan</th>
                        @if ($active == 1)
                            <th scope="col">Daftar</th>
                        @endif
                        <th scope="col">Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse ($bumils as $bumil)
                        <tr>
                            <td scope="row">{{ $loop->iteration }}</td>
                            <td>{{ $bumil->nama_ibu }}</td>
                            <td>{{ $bumil->nama_suami }}</td>
                            <td>{{ Carbon\Carbon::parse($bumil->tgl_lahir)->diff(\Carbon\Carbon::now())->format('%y thn') }}
                            <td>
                                {{ Carbon\Carbon::parse($bumil->tgl_kehamilan)->diffInWeeks(\Carbon\Carbon::now()) }}
                                Minggu
                            </td>

                            @if ($active == 1)
                                <td>
                                    <a href="{{ route('bumil.vitamin', $bumil->id) }}" class="badge badge-success"><i
                                            class="fas fa-capsules">Vitamin</i></a>
                                    <a href="{{ route('bumil.imunisasi', $bumil->id) }}"
                                        class="badge badge-success ml-1"><i class="fas fa-bug">
                                            Imuniasi</i></a>
                                    <a href="{{ route('bumil.penimbangan', $bumil->id) }}"
                                        class="badge badge-success ml-1"><i class="fas fa-balance-scale-left">
                                            Penimbangan</i></a>
                                </td>
                            @endif
                            {{-- <td><a href="{{ route('bumil.show', $bumil->id) }}" class="badge badge-warning">Kms</a> --}}
                            </td>
                            <td>
                                <a href="{{ route('bumil.edit', $bumil->id) }}"
                                    class="badge badge-secondary text-white"><i class="far fa-edit"></i></a>
                                <form action="{{ route('bumil.destroy', $bumil->id) }}" method="post"
                                    class="d-inline">
                                    @method('DELETE')
                                    @csrf
                                    <button type="submit" class="badge badge-danger border-0"><i
                                            class="fas fa-trash-alt"></i></button>
                                </form>
                            </td>
                        </tr>
                    @empty
                        <tr>
                            <td>
                                <span>tidak ada data</span>
                            </td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>

    {{-- @foreach ($balitas as $balita)
        <div class="modal fade" id="exampleModal{{ $balita->id }}" tabindex="-1" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Detail <span class="fw-bold">
                                {{ $balita->nama }}</span> </h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-3">
                                Kelamin
                            </div>
                            <div class="col-md-8">
                                : {{ $balita->jenis_kelamin }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                Berat Lahir
                            </div>
                            <div class="col-md-8">
                                : {{ $balita->berat_lahir }} Kg
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                Umur
                            </div>
                            <div class="col-md-8">
                                :
                                {{ Carbon\Carbon::parse($balita->tgl_lahir)->diff(\Carbon\Carbon::now())->format('%y thn, %m bln and %d hari') }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                Nama ibu
                            </div>
                            <div class="col-md-8">
                                : {{ $balita->nama_ibu }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                Nama ayah
                            </div>
                            <div class="col-md-8">
                                : {{ $balita->nama_ayah }}
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-3">
                                Alamat
                            </div>
                            <div class="col-md-8">
                                : {{ $balita->alamat }}
                            </div>
                        </div>
                    </div>
                    @if ($active == 1)
                        <div class="modal-footer">
                            <a href="{{ route('balita.vitamin', $balita->id) }}"
                                class="badge badge-success border-0"><i class="fas fa-capsules"></i>
                                Vitamin</a>
                            <a href="{{ route('balita.imunisasi', $balita->id) }}"
                                class="badge badge-success border-0"><i class="fas fa-capsules"></i>
                                Imunisasi</a>
                            <a href="{{ route('balita.penimbangan', $balita->id) }}"
                                class="badge badge-success border-0"><i class="fas fa-balance-scale-left"></i>
                                Penimbangan</a>
                        </div>
                    @endif
                </div>
            </div>
        </div>
    @endforeach --}}
</x-frond-layout>
