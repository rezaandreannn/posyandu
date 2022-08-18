<x-app-layout title="edit-bumil-imunisasi">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4>Identitas Bumil</h4>
                    <div class="row">
                        <div class="col-md-3">Nama Ibu</div>
                        <div class="col-md-8">: {{ $imunisasibumil->bumil->nama_ibu }}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">Nama Suami</div>
                        <div class="col-md-8">: {{ $imunisasibumil->bumil->nama_suami }}</div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">Umur</div>
                        <div class="col-md-8">:
                            {{ Carbon\Carbon::parse($imunisasibumil->bumil->tgl_lahir)->diff(\Carbon\Carbon::now())->format('%y thn') }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">Umur Kehamilan</div>
                        <div class="col-md-8">:
                            {{ Carbon\Carbon::parse($imunisasibumil->bumil->tgl_kehamilan)->diffInWeeks(\Carbon\Carbon::now()) }}
                            Minggu
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-3">Alamat</div>
                        <div class="col-md-8">: {{ $imunisasibumil->bumil->alamat }}</div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <div class="form-validation">
                        <form class="form-valide" action="{{ route('imunisasibumil.update', $imunisasibumil->id) }}"
                            method="post">
                            @method('PATCH')
                            @csrf
                            <input type="hidden" name="posyandu" value="{{ $imunisasibumil->posyandu }}">


                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="nama">Nama Imunisasi <span
                                        class="text-danger"></span>
                                </label>
                                <div class="col-lg-6">
                                    <select name="nama" id="nama" class="form-control">
                                        @foreach (App\Models\Imunisasibumil::NAMAIMUNISASI as $nama)
                                            @if ($nama == $imunisasibumil->nama)
                                                <option value="{{ $nama }}" selected>{{ $nama }}
                                                </option>
                                            @else
                                                <option value="{{ $nama }}">{{ $nama }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="keterangan">Keterangan<span
                                        class="text-danger"></span>
                                </label>
                                <div class="col-lg-6">
                                    <textarea class="form-control" id="keterangan" name="keterangan" rows="3">{{ $imunisasibumil->keterangan }}</textarea>
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
</x-app-layout>
