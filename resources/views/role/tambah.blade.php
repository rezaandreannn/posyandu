<x-app-layout>
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-validation">
                        <form class="form-valide" action="{{ route('role.store') }}" method="post">
                            @csrf
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="name">Nama Peran <span
                                        class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="name" name="name"
                                        placeholder="Masukan nama peran">
                                </div>
                            </div>


                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="deskripsi">Deskripsi <span
                                        class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <textarea class="form-control" name="deskripsi" id="deskripsi" name="deskripsi" rows="5"
                                        placeholder="Masukan deskripsi peran"></textarea>
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
