<x-app-layout title="penimbangan-bumil">
    @push('css')
        <link href="{{ asset('quixlab/plugins/tables/css/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    @endpush

    <div class="row">
        <div class="col-md-4">
            <form action="" method="get">
                <div class="input-group">
                    <select class="custom-select form-control" name="posyandu" id="inputGroupSelect04"
                        aria-label="Example select with button addon">
                        @foreach (App\Models\Posyandu::all() as $posyandu)
                            @if ($posyandu == Request('posyandu'))
                                <option value="{{ $posyandu->nama }}" selected>{{ $posyandu->nama }}
                                </option>
                            @else
                                <option value="{{ $posyandu->nama }}">{{ $posyandu->nama }}</option>
                            @endif
                        @endforeach
                    </select>
                    <div class="input-group-append">
                        <button class="btn btn-outline-primary btn-sm" type="submit">Pilih</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-md-8 d-flex justify-content-end">
            <a href="{{ route('penimbanganbumil.create') }}" target="blank" class="btn btn-primary">Cetak</a>
        </div>
        <div class="col-12 mt-1">
            @if (session('message'))
                <div class="alert alert-info text-center" role="alert">
                    <span>
                        {{ session('message') }}
                    </span>
                </div>
            @endif
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title">
                        <div class="row">
                            <h4>Penimbangan Balita : {{ Request('posyandu') }}</h4>
                        </div>
                    </h4>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th rowspan="2">No</th>
                                    <th rowspan="2">Nama Ibu</th>
                                    <th rowspan="2">Berat badan</th>
                                    <th rowspan="2">Tinggi badan</th>
                                    <th rowspan="2">LILA</th>
                                    <th colspan="3" class="text-center">Diagnosa</th>
                                    <th rowspan="2">Keterangan</th>
                                    <th rowspan="2">Tanggal</th>
                                    <th rowspan="2">Aksi</th>
                                </tr>
                                <tr>
                                    <th>G2</th>
                                    <th>P2</th>
                                    <th>A0</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($penimbanganBumil as $penimbangan)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $penimbangan->bumil->nama_ibu }}</td>
                                        <td>{{ $penimbangan->berat_badan }} Kg</td>
                                        <td>{{ $penimbangan->tinggi_badan }} Cm</td>
                                        <td>{{ $penimbangan->lila }} Cm</td>
                                        <td>{{ $penimbangan->g2 }} </td>
                                        <td>{{ $penimbangan->p2 }} </td>
                                        <td>{{ $penimbangan->a0 }} </td>
                                        <td>{{ $penimbangan->keterangan }}</td>
                                        <td>{{ $penimbangan->updated_at->Format('d/m/Y') }}</td>
                                        <td>
                                            <x-action href="{{ route('penimbanganbumil.edit', $penimbangan->id) }}"
                                                action="{{ route('penimbanganbumil.destroy', $penimbangan->id) }}" />
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>

    @push('js')
        <script src="{{ asset('quixlab/plugins/tables/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('quixlab/plugins/tables/js/datatable/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('quixlab/plugins/tables/js/datatable-init/datatable-basic.min.js') }}"></script>
    @endpush
</x-app-layout>
