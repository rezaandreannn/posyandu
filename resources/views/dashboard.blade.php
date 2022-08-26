<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="card border-primary mb-3">
            <div class="card-header">
                <h5>Data Balita dan Ibu Hamil</h5>
            </div>
            <div class="card-body text-primary">
                <div class="row">
                    @foreach ($posyandus as $posyandu)
                        <div class="col-lg-3 col-sm-6">
                            <div class="card" style="background-color: {{ $posyandu->warna }}">
                                <div class="card-body">
                                    <h3 class="card-title {{ $posyandu->warna ? 'text-white' : 'text-black' }}">
                                        {{ $posyandu->nama }}</h3>
                                    <div class="d-inline-block">
                                        @php
                                            $balita = DB::table('balitas')
                                                ->join('users', 'users.id', '=', 'balitas.user_id')
                                                ->select('balitas.*', 'users.name', 'users.posyandu')
                                                ->where('users.posyandu', $posyandu->nama)
                                                ->get();
                                            
                                            $bumil = DB::table('bumils')
                                                ->join('users', 'users.id', '=', 'bumils.user_id')
                                                ->select('bumils.*', 'users.name', 'users.posyandu')
                                                ->where('users.posyandu', $posyandu->nama)
                                                ->get();
                                        @endphp
                                        <h5 class=" {{ $posyandu->warna ? 'text-white' : 'text-black' }}">Balita. (
                                            {{ $balita->count() }} )</h5>
                                        <h5 class=" {{ $posyandu->warna ? 'text-white' : 'text-black' }}">Ibu Hamil.
                                            ({{ $bumil->count() }} )</h5>
                                        <p class=" {{ $posyandu->warna ? 'text-white' : 'text-black' }} mb-0">Tgl.
                                            {{ date('d-m-Y') }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
            {{-- <div class="card-body text-primary">
                <div class="row">
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-1">
                            <div class="card-body">
                                <h3 class="card-title text-white">Posyandu Mawar</h3>
                                <div class="d-inline-block">
                                    <h5 class="text-white">Balita. ( {{ $mawar->count() }} )</h5>
                                    <h5 class="text-white">Ibu Hamil. ( {{ $mawar_i->count() }} )</h5>
                                    <p class="text-white mb-0">Tgl. {{ date('d-m-Y') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-5">
                            <div class="card-body">
                                <h3 class="card-title text-white">Posyandu Teratai</h3>
                                <div class="d-inline-block">
                                    <h5 class="text-white">Balita. ( {{ $teratai->count() }} )</h5>
                                    <h5 class="text-white">Ibu Hamil. ( {{ $teratai_i->count() }} )</h5>
                                    <p class="text-white mb-0">Tgl. {{ date('d-m-Y') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-2">
                            <div class="card-body">
                                <h3 class="card-title text-white">Posyandu Matahari</h3>
                                <div class="d-inline-block">
                                    <h5 class="text-white">Balita. ( {{ $matahari->count() }} )</h5>
                                    <h5 class="text-white">Ibu Hamil. ( {{ $matahari_i->count() }} )</h5>
                                    <p class="text-white mb-0">Tgl. {{ date('d-m-Y') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-3">
                            <div class="card-body">
                                <h3 class="card-title text-white">Posyandu Melati</h3>
                                <div class="d-inline-block">
                                    <h5 class="text-white">Balita. ( {{ $melati->count() }} )</h5>
                                    <h5 class="text-white">Ibu Hamil. ( {{ $melati_i->count() }} )</h5>
                                    <p class="text-white mb-0">Tgl. {{ date('d-m-Y') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6">
                        <div class="card gradient-4">
                            <div class="card-body">
                                <h3 class="card-title text-white">Posyandu Anggrek</h3>
                                <div class="d-inline-block">
                                    <h5 class="text-white">Balita. ( {{ $anggrek->count() }} )</h5>
                                    <h5 class="text-white">Ibu Hamil. ( {{ $anggrek_i->count() }} )</h5>
                                    <p class="text-white mb-0">Tgl. {{ date('d-m-Y') }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div> --}}
        </div>


    </div>
</x-app-layout>
