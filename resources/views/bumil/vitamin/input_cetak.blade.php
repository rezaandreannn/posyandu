<x-app-layout title="cetak-bumil-vitamin">
    @push('css')
        <link href="{{ asset('quixlab/plugins/summernote/dist/summernote.css') }}" rel="stylesheet">
    @endpush
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-validation">
                        <form class="form-valide" action="{{ route('vitaminbumil.store') }}" method="post">
                            @csrf
                            {{-- <input type="hidden" name="posyandu" value="{{ $penimbanganbalita->posyandu }}"> --}}

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="bulan">Pilih bulan<span
                                        class="text-danger"></span>
                                </label>
                                <div class="col-lg-6">
                                    <div class="input-group mb-3">
                                        <select name="bulan" id="bulan" class="form-control">
                                            @foreach (App\Models\Balita::BULAN as $key => $bulan)
                                                <option value="{{ $key }}">{{ $bulan }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="tahun">Pilih Tahun<span
                                        class="text-danger"></span>
                                </label>
                                <div class="col-lg-6">
                                    <div class="input-group mb-3">
                                        <select name="tahun" id="tahun" class="form-control">
                                            @foreach (App\Models\Balita::TAHUN as $key => $tahun)
                                                <option value="{{ $key }}">{{ $tahun }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="posyandu">Pilih Posyandu<span
                                        class="text-danger"></span>
                                </label>
                                <div class="col-lg-6">
                                    <div class="input-group mb-3">
                                        <select name="posyandu" id="posyandu" class="form-control">
                                            @foreach (App\Models\Posyandu::all() as $posyandu)
                                                <option value="{{ $posyandu->nama }}" selected>{{ $posyandu->nama }}
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                    </div>

                    <div class="form-group row">
                        <div class="col-lg-8 ml-auto">
                            <button type="submit" class="btn btn-primary">Simpan</button>
                        </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    </div>

    @push('js')
        <script src="{{ asset('quixlab/plugins/summernote/dist/summernote.min.js') }}"></script>
        <script src="{{ asset('quixlab/plugins/summernote/dist/summernote-init.js') }}"></script>
    @endpush
</x-app-layout>
