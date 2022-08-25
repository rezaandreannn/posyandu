<x-frond-layout>
    <div class="" style="overflow: hidden;">
        <div class="container" style="margin-top: 150px">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <form action="{{ route('balita.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Balita</label>
                            <input type="text" class="form-control" id="nama" name="nama"
                                placeholder="Masukan nama balita" value="{{ old('nama') }}">
                            @error('nama')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama_ibu">Nama Ibu</label>
                            <input type="text" class="form-control" id="nama_ibu" name="nama_ibu"
                                placeholder="Masukan nama ibu" value="{{ old('nama_ibu') }}">
                            @error('nama_ibu')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama_ayah">Nama ayah</label>
                            <input type="text" class="form-control" id="nama_ayah" name="nama_ayah"
                                placeholder="Masukan nama ayah" value="{{ old('nama_ayah') }}">
                            @error('nama_ayah')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="berat_lahir">Berat Lahir</label>
                            <div class="input-group">
                                <input type="text" class="form-control" name="berat_lahir"
                                    placeholder="Masukan berat lahir" id="berat_lahir" value="{{ old('berat_lahir') }}">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" disabled>Kg</button>
                                </div>
                            </div>
                            @error('berat_lahir')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
                                value="{{ old('tgl_lahir') }}">
                            @error('tgl_lahir')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama_ayah">Jenis Kelamin</label>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin"
                                            id="laki-laki" value="L"
                                            @if (old('jenis_kelamin') == 'L') checked @endif>
                                        <label class="form-check-label" for="laki-laki">
                                            Laki Laki
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin"
                                            id="perempuan" value="P"
                                            @if (old('jenis_kelamin') == 'P') checked @endif>
                                        <label class="form-check-label" for="perempuan">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>
                            </div>
                            @error('jenis_kelamin')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="alamat">alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" rows="3">{{ old('alamat') }}
                            </textarea>
                            @error('alamat')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="row d-flex justify-content-end">
                            <button class="btn btn-primary" type="submit">Simpan</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>


</x-frond-layout>
