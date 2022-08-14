<x-app-layout>
    @push('css')
        <link href="{{ asset('quixlab/plugins/tables/css/datatable/dataTables.bootstrap4.min.css') }}" rel="stylesheet">
    @endpush

    <div class="row">
        <div class="col-12">
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
                            <div class="col-md-2"><a href="{{ route('user.create') }}" class="btn btn-primary">Tambah
                                    Peran</a></div>
                            <div class="col-md-4">
                                <form action="" method="get">
                                    <div class="input-group">
                                        <select class="custom-select form-control" name="posyandu"
                                            id="inputGroupSelect04" aria-label="Example select with button addon">
                                            {{-- <option value="" selected>Pilih posyandu</option> --}}
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
                        </div>
                    </h4>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Nik</th>
                                    <th>Posyandu</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($users as $user)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->nik }}</td>
                                        <td>{{ $user->posyandu }}</td>
                                        <td>
                                            <x-action href="{{ route('user.edit', $user->id) }}"
                                                action="{{ route('user.destroy', $user->id) }}" />
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
