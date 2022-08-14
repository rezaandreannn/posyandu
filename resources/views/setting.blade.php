<x-app-layout>
    @push('css')
        <link
            href="{{ asset('quixlab}/plugins/bootstrap-material-datetimepicker/css/bootstrap-material-datetimepicker.css') }}"
            rel="stylesheet">
        <!-- Page plugins css -->
        <link href="{{ asset('quixlab/plugins/clockpicker/dist/jquery-clockpicker.min.css') }}" rel="stylesheet">
        <!-- Color picker plugins css -->
        <link href="{{ asset('quixlab/plugins/jquery-asColorPicker-master/css/asColorPicker.css') }}" rel="stylesheet">
        <!-- Date picker plugins css -->
        <link href="{{ asset('quixlab/plugins/bootstrap-datepicker/bootstrap-datepicker.min.css') }}" rel="stylesheet">
        <!-- Daterange picker plugins css -->
        <link href="{{ asset('quixlab/plugins/timepicker/bootstrap-timepicker.min.css') }}" rel="stylesheet">
        <link href="{{ asset('quixlab/plugins/bootstrap-daterangepicker/daterangepicker.css') }}" rel="stylesheet">
    @endpush
    <div class="row">
        <div class="col-12">


            <div class="row justify-content-center">

                <div class="col-lg-6">
                    @if (session('message'))
                        <div class="alert alert-info text-center" role="alert">
                            <span>
                                {{ session('message') }}
                            </span>
                        </div>
                    @endif
                    <div class="card">
                        <div class="card-body">
                            <div class="form-validation">
                                <form class="" action="{{ route('setting.update', $data->id) }}" method="post"
                                    novalidate>
                                    @method('PATCH')
                                    @csrf
                                    {{-- <h4 class="card-title">Pengaturan buka/tutup</h4> --}}
                                    <div class="row">
                                        <div class="form-group row mb-4">
                                            <x-label for="waktu_buka"
                                                class="col-form-label text-md-right col-12 col-md-2 col-lg-3"
                                                :value="__('Buka ')" />
                                            <div class="col-sm-8 col-md-9">
                                                <input type="datetime-local" name="waktu_buka" class="form-control"
                                                    value="{{ $data->waktu_buka }}">
                                                @error('waktu_buka')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="form-group row mb-4">
                                            <x-label for="waktu_tutup"
                                                class="col-form-label text-md-right col-12 col-md-2 col-lg-3"
                                                :value="__('Tutup')" />
                                            <div class="col-sm-8 col-md-9">
                                                <input type="datetime-local" name="waktu_tutup" class="form-control"
                                                    value="{{ $data->waktu_tutup }}">
                                                @error('waktu_tutup')
                                                    <span class="text-danger">{{ $message }}</span>
                                                @enderror
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group row">
                                        <div class="ml-auto">
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
    </div>
    {{-- </div> --}}

    @push('js')
        <script src="{{ asset('quixlab/js/plugins-init/form-pickers-init.js') }}"></script>
        <script src="{{ asset('quixlab/plugins/moment/moment.js') }}"></script>
        <script src="{{ asset('quixlab/plugins/bootstrap-material-datetimepicker/js/bootstrap-material-datetimepicker.js') }}">
        </script>
        <!-- Clock Plugin JavaScript -->
        <script src="{{ asset('quixlab/plugins/clockpicker/dist/jquery-clockpicker.min.js') }}"></script>

        <!-- Date Picker Plugin JavaScript -->
        <script src="{{ asset('quixlab/plugins/bootstrap-datepicker/bootstrap-datepicker.min.js') }}"></script>
        <!-- Date range Plugin JavaScript -->
        <script src="{{ asset('quixlab/plugins/timepicker/bootstrap-timepicker.min.js') }}"></script>
        <script src="{{ asset('quixlab/plugins/bootstrap-daterangepicker/daterangepicker.js') }}"></script>
    @endpush
</x-app-layout>
