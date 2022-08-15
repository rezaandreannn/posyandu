<x-app-layout title="antrian-balita-penimbangan">
    @push('css')
        <link href="{{ asset('quixlab/plugins/tables/css/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    @endpush

    <div class="row">
        <div class="col-md-4">
            <form action="" method="get">
                <div class="input-group">
                    <select class="custom-select form-control" name="posyandu" id="inputGroupSelect04"
                        aria-label="Example select with button addon">
                        @foreach (App\Models\User::POSYANDU as $posyandu)
                            @if ($posyandu == Request('posyandu'))
                                <option value="{{ $posyandu }}" selected>{{ $posyandu }}
                                </option>
                            @else
                                <option value="{{ $posyandu }}">{{ $posyandu }}</option>
                            @endif
                        @endforeach
                    </select>
                    <div class="input-group-append">
                        <button class="btn btn-outline-primary btn-sm" type="submit">Pilih</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="col-12 mt-2">
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
                            <h4>Penimbangan Balita</h4>
                        </div>
                    </h4>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Nama Ibu</th>
                                    {{-- <th>Umur</th>
                                    <th>Berat Lahir</th> --}}

                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($penimbanganBalita as $penimbangan)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $penimbangan->balita->nama }}</td>
                                        <td>{{ $penimbangan->balita->nama_ibu }}</td>
                                        {{-- <td>{{ Carbon\Carbon::parse($penimbangan->balita->tgl_lahir)->diff(\Carbon\Carbon::now())->format('%y thn, %m bln and %d hari') }}
                                        </td>

                                        <td>{{ $penimbangan->balita->berat_lahir }} Kg</td> --}}
                                        <td>
                                            <x-action href="{{ route('penimbanganbalita.edit', $penimbangan->id) }}"
                                                action="{{ route('penimbanganbalita.destroy', $penimbangan->id) }}" />
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
