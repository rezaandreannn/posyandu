<x-app-layout title="edit-bumil-penimbangan">
    @push('css')
        <link href="{{ asset('quixlab/plugins/summernote/dist/summernote.css') }}" rel="stylesheet">
    @endpush
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4>Identitas Bumil</h4>
                    <div class="row">
                        <div class="col-md-3">Nama Ibu</div>
                        <div class="col-md-8">: {{ $penimbanganbumil->bumil->nama_ibu }}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">Nama Suami</div>
                        <div class="col-md-8">: {{ $penimbanganbumil->bumil->nama_suami }}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">Umur</div>
                        <div class="col-md-8">:
                            {{ Carbon\Carbon::parse($penimbanganbumil->bumil->tgl_lahir)->diff(\Carbon\Carbon::now())->format('%y thn') }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">Umur Kehamilan</div>
                        <div class="col-md-8">:
                            {{ Carbon\Carbon::parse($penimbanganbumil->bumil->tgl_kehamilan)->diffInWeeks(\Carbon\Carbon::now()) }}
                            Minggu
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">Alamat</div>
                        <div class="col-md-8">: {{ $penimbanganbumil->bumil->alamat }}</div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="form-validation">
                        <form class="form-valide" action="{{ route('penimbanganbumil.update', $penimbanganbumil->id) }}"
                            method="post">
                            @method('PATCH')
                            @csrf
                            <input type="hidden" name="posyandu" value="{{ $penimbanganbumil->posyandu }}">

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
                                        <input type="text" class="form-control" placeholder="150"
                                            aria-describedby="tinggi_badan" name="tinggi_badan">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button" id="tinggi_badan"
                                                disabled>Cm</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="lila">Lila<span
                                        class="text-danger"></span>
                                </label>
                                <div class="col-lg-6">
                                    <div class="input-group mb-3">
                                        <input type="text" class="form-control" placeholder="60"
                                            aria-describedby="lila" name="lila">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button" id="lila"
                                                disabled>Cm</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="diagnosa">Diagnosa<span
                                        class="text-danger"></span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" placeholder="60" name="diagnosa"
                                        id="diagnosa">
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
