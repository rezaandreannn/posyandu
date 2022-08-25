<x-app-layout>
    <div class="row justify-content-center">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <div class="form-validation">
                        <form class="form-valide" action="{{ route('user.update', $user->id) }}" method="post">
                            @csrf
                            @method('PATCH')
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="name">Nama <span
                                        class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="name" name="name"
                                        value="{{ old('name', $user->name) }}">
                                    @error('name')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="name">NIK <span
                                        class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="text" class="form-control" id="nik" name="nik"
                                        value="{{ old('nik', $user->nik) }}">
                                    @error('nik')
                                        <span class="text-danger d-block">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="name">Email <span
                                        class="text-danger"></span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="email" class="form-control" id="email" name="email"
                                        placeholder="Masukan Email" value="{{ old('email', $user->email) }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="password">Password <span
                                        class="text-danger"></span>
                                </label>
                                <div class="col-lg-6">
                                    <input type="password" class="form-control" id="password" name="password">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="name">Peran<span
                                        class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <select class="custom-select form-control" name="role_id" id="inputGroupSelect04"
                                        aria-label="Example select with button addon">
                                        @if ($user->role_id == 2)
                                            <option value="2" selected>User</option>
                                            <option value="1">Admin</option>
                                        @else
                                            <option value="1" selected>Admin</option>
                                            <option value="2">User</option>
                                        @endif
                                    </select>
                                    @error('role_id')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
                                </div>
                            </div>
                            <div class="form-group row">
                                <label class="col-lg-4 col-form-label" for="name">Posyandu <span
                                        class="text-danger">*</span>
                                </label>
                                <div class="col-lg-6">
                                    <select class="custom-select form-control" name="posyandu" id="inputGroupSelect04"
                                        aria-label="Example select with button addon">
                                        @foreach (App\Models\User::POSYANDU as $posyandu)
                                            @if ($posyandu == $user->posyandu)
                                                <option value="{{ $posyandu }}" selected>{{ $posyandu }}
                                                </option>
                                            @else
                                                <option value="{{ $posyandu }}">{{ $posyandu }}</option>
                                            @endif
                                        @endforeach
                                    </select>
                                    @error('posyandu')
                                        <span class="text-danger">{{ $message }}</span>
                                    @enderror
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
