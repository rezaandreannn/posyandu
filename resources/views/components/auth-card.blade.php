{{-- <div class="d-flex flex-sm-column justify-content-center pt-6">
    <div>
        {{ $logo ?? '' }}
    </div>

    <div class="card shadow-sm bg-white rounded">
        <div class="card-body">
            {{ $slot }}
        </div>
    </div>
</div> --}}

<div class="login-form-bg h-100">
    <div class="container h-100">
        <div class="row justify-content-center h-100">
            <div class="col-xl-6">
                <div class="form-input-content">
                    <div class="card login-form mb-0">
                        <div class="card-body pt-5">
                            {{ $slot }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
