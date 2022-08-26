<x-app-layout title="Posyandu">
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
                        <a href="{{ route('posyandu.create') }}" class="btn btn-primary btn-sm">Tambah Posyandu</a>
                    </h4>
                    <div class="table-responsive">
                        <table class="table table-striped table-bordered zero-configuration">
                            <thead>
                                <tr>
                                    <th>No</th>
                                    <th>Nama</th>
                                    <th>Warna</th>
                                    <th>Aksi</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($posyandus as $posyandu)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>{{ $posyandu->nama }}</td>
                                        <td><button class="btn"
                                                style="background-color: {{ $posyandu->warna }}"></button></td>
                                        <td>
                                            <x-action href="{{ route('posyandu.edit', $posyandu->id) }}"
                                                action="{{ route('posyandu.destroy', $posyandu->id) }}" />

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
    {{-- </div> --}}

    @push('js')
        <script src="{{ asset('quixlab/plugins/tables/js/jquery.dataTables.min.js') }}"></script>
        <script src="{{ asset('quixlab/plugins/tables/js/datatable/dataTables.bootstrap4.min.js') }}"></script>
        <script src="{{ asset('quixlab/plugins/tables/js/datatable-init/datatable-basic.min.js') }}"></script>
    @endpush
</x-app-layout>
