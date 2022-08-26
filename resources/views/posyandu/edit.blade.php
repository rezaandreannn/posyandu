<x-app-layout title="edit-posyandu">
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-validation">
                        <form class="form-valide" action="{{ route('posyandu.update', $posyandu->id) }}" method="post">
                            @method('PATCH')
                            @csrf
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="name">Nama Posyandu <span
                                        class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="name" name="nama"
                                        value="{{ $posyandu->nama }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="warna">Warna<span
                                        class="text-danger"></span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="color" class="form-control" id="warna" name="warna"
                                        value="{{ $posyandu->warna }}">
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
    </div>
</x-app-layout>
