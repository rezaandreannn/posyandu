<x-app-layout title="edit-balita-vitamin">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4>Identitas Balita</h4>
                    <div class="row">
                        <div class="col-md-3">Nama</div>
                        <div class="col-md-8">: {{ $vitaminbalita->balita->nama }}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">Nama Ibu</div>
                        <div class="col-md-8">: {{ $vitaminbalita->balita->nama_ibu }}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">Nama Ayah</div>
                        <div class="col-md-8">: {{ $vitaminbalita->balita->nama_ayah }}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">Jenis Kelamin</div>
                        <div class="col-md-8">: {{ $vitaminbalita->balita->jenis_kelamin }}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">Umur</div>
                        <div class="col-md-8">:
                            {{ Carbon\Carbon::parse($vitaminbalita->balita->tgl_lahir)->diff(\Carbon\Carbon::now())->format('%y thn, %m bln and %d hari') }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">Alamat</div>
                        <div class="col-md-8">: {{ $vitaminbalita->balita->alamat }}</div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="form-validation">
                        <form class="form-valide" action="{{ route('vitaminbalita.update', $vitaminbalita->id) }}"
                            method="post">
                            @method('PATCH')
                            @csrf
                            <input type="hidden" name="posyandu" value="{{ $vitaminbalita->posyandu }}">

                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="jenis">Jenis Vitamin <span
                                        class="text-danger"></span>
                                </label>
                                <div class="col-lg-6">
                                    <select name="jenis" id="jenis" class="form-control">
                                        @foreach (App\Models\Vitaminbalita::JENISVITAMIN as $jenis)
                                            @if ($jenis == $vitaminbalita->jenis)
                                                <option value="{{ $jenis }}" selected>{{ $jenis }}
                                                </option>
                                            @else
                                                <option value="{{ $jenis }}">{{ $jenis }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            {{-- <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="keterangan">Keterangan<span
                                        class="text-danger"></span>
                                </label>
                                <div class="col-lg-6">
                                    <textarea class="form-control" id="keterangan" name="keterangan" rows="3"></textarea>
                                </div>
                            </div> --}}
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
</x-app-layout>
