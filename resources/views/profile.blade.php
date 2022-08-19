<x-app-layout title="Profile">
    {{-- <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot> --}}

    <div class="py-12">
        <div class="row m-b-30">
            <div class="col-lg-6">
                <div class="card border-primary">
                    <div class="card-header">Profil</div>
                    <div class="card-body">
                        <div class="row">
                            <div class="col-4">Nama</div>
                            <div class="col-8">: {{ Auth::user()->name }}</div>
                        </div>
                        <div class="row">
                            <div class="col-4">Nik</div>
                            <div class="col-8">: {{ Auth::user()->nik }}</div>
                        </div>
                        <div class="row">
                            <div class="col-4">Email</div>
                            <div class="col-8">
                                : {{ Auth::user()->email }}
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-4">Posyandu</div>
                            <div class="col-8">
                                : {{ Auth::user()->posyandu ?? 'Admin' }}
                            </div>
                        </div>
                    </div>
                    <div class="card-footer d-flex justify-content-end"><small>Dibuat :
                            {{ Auth::user()->created_at }}</small>
                    </div>
                </div>
            </div>
        </div>

    </div>
</x-app-layout>
