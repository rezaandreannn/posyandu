<x-app-layout title="data-bumil">
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
                            <h4>Data Bumil : {{ Request('posyandu') }}</h4>
                        </div>
                    </h4>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Input by</th>
                                    <th>Nama Ibu</th>
                                    <th>Nama Suami</th>
                                    <th>Umur</th>
                                    <th>Umur Kehamilan</th>

                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($bumils as $bumil)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $bumil->name }}</td>
                                        <td>{{ $bumil->nama_ibu }}</td>
                                        <td>{{ $bumil->nama_suami }}</td>
                                        <td>{{ Carbon\Carbon::parse($bumil->tgl_lahir)->diff(\Carbon\Carbon::now())->format('%y thn') }}
                                        <td>
                                            {{ Carbon\Carbon::parse($bumil->tgl_kehamilan)->diffInWeeks(\Carbon\Carbon::now()) }}
                                            Minggu
                                        </td>
                                        <td>
                                            <form action="{{ route('bumil.destroy', $bumil->id) }}" method="post"
                                                class="d-inline">
                                                @method('DELETE')
                                                @csrf
                                                <button type="submit" class="btn btn-danger btn-sm"><i
                                                        class="fas fa-trash"></i></button>
                                            </form>

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
