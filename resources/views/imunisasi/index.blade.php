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
                            <h4>Imuniasi Balita</h4>
                        </div>
                    </h4>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    {{-- <th>Nik</th>
                                    <th>Posyandu</th> --}}
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($imunisasiBalita as $imuniasasi)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $imuniasasi->balita->nama }}</td>
                                        {{-- <td>{{ $imuniasasi->nik }}</td>
                                        <td>{{ $imuniasasi->posyandu }}</td> --}}
                                        <td>
                                            {{-- <x-action href="{{ route('imuniasasi.edit', $imuniasasi->id) }}"
                                                action="{{ route('imuniasasi.destroy', $imuniasasi->id) }}" /> --}}
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
