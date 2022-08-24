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
                                placeholder="Masukan nama balita">
                        </div>
                        <div class="form-group">
                            <label for="nama_ibu">Nama Ibu</label>
                            <input type="text" class="form-control" id="nama_ibu" name="nama_ibu"
                                placeholder="Masukan nama ibu">
                        </div>
                        <div class="form-group">
                            <label for="nama_ayah">Nama ayah</label>
                            <input type="text" class="form-control" id="nama_ayah" name="nama_ayah"
                                placeholder="Masukan nama ayah ">
                        </div>
                        <div class="form-group">
                            <label for="nama_ayah">Berat Lahir</label>
                            <div class="input-group mb-3">
                                <input type="text" class="form-control" name="berat_lahir"
                                    placeholder="Masukan berat lahir">
                                <div class="input-group-append">
                                    <button class="btn btn-outline-secondary" type="button" disabled>Kg</button>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
                                placeholder="Masukan nama ayah ">
                        </div>
                        <div class="form-group">
                            <label for="nama_ayah">Jenis Kelamin</label>
                            <div class="row">
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin"
                                            id="laki-laki" value="L">
                                        <label class="form-check-label" for="laki-laki">
                                            Laki Laki
                                        </label>
                                    </div>
                                </div>
                                <div class="col-md-2">
                                    <div class="form-check">
                                        <input class="form-check-input" type="radio" name="jenis_kelamin"
                                            id="perempuan" value="P">
                                        <label class="form-check-label" for="perempuan">
                                            Perempuan
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-group">
                            <label for="alamat">alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" rows="3"></textarea>
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
