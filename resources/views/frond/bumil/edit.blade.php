<x-frond-layout>
    <div class="" style="overflow: hidden;">
        <div class="container" style="margin-top: 150px">
            <div class="row d-flex justify-content-center">
                <div class="col-md-8">
                    <form action="{{ route('bumil.update', $bumil->id) }}" method="POST">
                        @method('PATCH')
                        @csrf
                        <div class="form-group">
                            <label for="nama">Nama Ibu</label>
                            <input type="text" class="form-control" id="nama" name="nama_ibu"
                                value="{{ $bumil->nama_ibu }}">
                        </div>
                        <div class="form-group">
                            <label for="nama_suami">Nama Suami</label>
                            <input type="text" class="form-control" id="nama_suami" name="nama_suami"
                                value="{{ $bumil->nama_suami }}">
                        </div>
                        <div class="form-group">
                            <label for="tgl_lahir">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tgl_lahir" name="tgl_lahir"
                                value="{{ $bumil->tgl_lahir }}">
                        </div>
                        <div class="form-group">
                            <label for="tgl_kehamilan">Tanggal Lahir</label>
                            <input type="date" class="form-control" id="tgl_kehamilan" name="tgl_kehamilan"
                                value="{{ $bumil->tgl_kehamilan }}">
                        </div>
                        <div class="form-group">
                            <label for="alamat">alamat</label>
                            <textarea class="form-control" id="alamat" name="alamat" rows="3">{{ $bumil->alamat }}</textarea>
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
