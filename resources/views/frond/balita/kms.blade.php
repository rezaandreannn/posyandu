<x-frond-layout title="kms">
    <div class="site-blocks-cover" style="overflow: hidden;">
        <div class="container" style="margin-top: 150px">
            @if (session('message'))
                <div class="alert alert-info text-center" role="alert">
                    <span>
                        {{ session('message') }}
                    </span>
                </div>
            @endif


            Nama Balita : {{ $balita->nama }}



            <div class="row mt-2">
                <div class="col">
                    <div class="card">
                        <canvas id="myChart" height="200"></canvas>
                    </div>
                </div>
            </div>


        </div>
    </div>

    @push('js')
        <script>
            const ctx = document.getElementById('myChart').getContext('2d');
            const myChart = new Chart(ctx, {
                type: 'bar',
                data: {
                    labels: [
                        @foreach ($kms as $label)
                            '{{ $label->updated_at->Format('d/m/Y') }}',
                        @endforeach
                    ],
                    datasets: [{
                        label: 'Berat Badan',
                        data: [
                            @foreach ($kms as $label)
                                '{{ $label->berat_badan }}',
                            @endforeach
                        ],
                        backgroundColor: [
                            'rgba(255, 99, 132, 0.2)',
                            'rgba(54, 162, 235, 0.2)',
                            'rgba(255, 206, 86, 0.2)',
                            'rgba(75, 192, 192, 0.2)',
                            'rgba(153, 102, 255, 0.2)',
                            'rgba(255, 159, 64, 0.2)'
                        ],
                        borderColor: [
                            'rgba(255, 99, 132, 1)',
                            'rgba(54, 162, 235, 1)',
                            'rgba(255, 206, 86, 1)',
                            'rgba(75, 192, 192, 1)',
                            'rgba(153, 102, 255, 1)',
                            'rgba(255, 159, 64, 1)'
                        ],
                        borderWidth: 1
                    }]
                },
                options: {
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
    @endpush

</x-frond-layout>
