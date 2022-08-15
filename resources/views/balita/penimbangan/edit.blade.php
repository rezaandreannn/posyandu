<x-app-layout title="edit-balita-penimbangan">
    @push('css')
        <link href="{{ asset('quixlab/plugins/summernote/dist/summernote.css') }}" rel="stylesheet">
    @endpush
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4>Identitas Balita</h4>
                    <div class="row">
                        <div class="col-md-3">Nama</div>
                        <div class="col-md-8">: {{ $penimbanganbalita->balita->nama }}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">Nama Ibu</div>
                        <div class="col-md-8">: {{ $penimbanganbalita->balita->nama_ibu }}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">Nama Ayah</div>
                        <div class="col-md-8">: {{ $penimbanganbalita->balita->nama_ayah }}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">Jenis Kelamin</div>
                        <div class="col-md-8">: {{ $penimbanganbalita->balita->jenis_kelamin }}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">Umur</div>
                        <div class="col-md-8">:
                            {{ Carbon\Carbon::parse($penimbanganbalita->balita->tgl_lahir)->diff(\Carbon\Carbon::now())->format('%y thn, %m bln and %d hari') }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">Alamat</div>
                        <div class="col-md-8">: {{ $penimbanganbalita->balita->alamat }}</div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="form-validation">
                        <form class="form-valide"
                            action="{{ route('penimbanganbalita.update', $penimbanganbalita->id) }}" method="post">
                            @method('PATCH')
                            @csrf
                            <input type="hidden" name="posyandu" value="{{ $penimbanganbalita->posyandu }}">

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="berat_badan">Berat badan<span
                                        class="text-danger"></span>
                                </label>
                                <div class="col-lg-6">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="4.5"
                                            aria-describedby="berat_badan" name="berat_badan">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button" id="berat_badan"
                                                disabled>Kg</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="tinggi_badan">Tinggi badan<span
                                        class="text-danger"></span>
                                </label>
                                <div class="col-lg-6">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="90"
                                            aria-describedby="tinggi_badan" name="tinggi_badan">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button" id="tinggi_badan"
                                                disabled>Cm</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="keterangan">Keterangan<span
                                        class="text-danger"></span>
                                </label>
                                <div class="col-lg-6">
                                    <textarea class="form-control" id="keterangan" name="keterangan" rows="3"></textarea>
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
