<x-frond-layout>
    <div class="" style="overflow: hidden;">
        <div class="container" style="margin-top: 150px">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <form action="{{ route('bumil.store') }}" method="POST">
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Ibu</label>
                            <input type="text" class="form-control" id="nama" name="nama_ibu"
                                placeholder="Masukan nama ibu" value="{{ old('nama_ibu') }}">
                            @error('nama_ibu')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="nama_suami">Nama Suami</label>
                            <input type="text" class="form-control" id="nama_suami" name="nama_suami"
                                placeholder="Masukan nama suami" value="{{ old('nama_suami') }}">
                            @error('nama_suami')
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
                            <label for="tgl_kehamilan">Tanggal Kehamilan</label>
                            <input type="date" class="form-control" id="tgl_kehamilan" name="tgl_kehamilan"
                                value="{{ old('tgl_kehamilan') }}">
                            @error('tgl_kehamilan')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="alamat">alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" rows="3">{{ old('alamat') }}</textarea>
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
