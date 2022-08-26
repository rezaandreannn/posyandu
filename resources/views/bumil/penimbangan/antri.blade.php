<x-app-layout title="antrian-bumil-penimbangan">
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
                            <h4>Penimbangan Bumil</h4>
                        </div>
                    </h4>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama Ibu</th>
                                    <th>Umur</th>
                                    <th>Umur kehamilan</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($penimbanganBumil as $penimbangan)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>

                                        <td>{{ $penimbangan->bumil->nama_ibu }}</td>
                                        <td>{{ Carbon\Carbon::parse($penimbangan->bumil->tgl_lahir)->diff(\Carbon\Carbon::now())->format('%y thn') }}
                                        </td>
                                        <td> {{ Carbon\Carbon::parse($penimbangan->bumil->tgl_kehamilan)->diffInWeeks(\Carbon\Carbon::now()) }}
                                            Minggu</td>

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
