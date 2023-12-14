<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Trains</title>
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    @vite('resources/js/app.js')
</head>

<body>
        <header>
            <div class="container text-center py-4">
                <h1>Train Schedule</h1>
            </div>
        </header>

        <section>
            <div class="container">
                <table class="table">
                    <thead>
                        <tr>
                          <th scope="col">Company</th>
                          <th scope="col">Train Code</th>
                          <th scope="col">Route</th>
                          <th scope="col">Departure</th>
                          <th scope="col">Arrival</th>
                          <th scope="col">Wagons</th>
                          <th scope="col">Canceled</th>
                          <th scope="col">Delay</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($trains as $train)
                    <tr>
                        <td>{{ $train->azienda }}</td>  
                        <td class="text-uppercase">{{ $train->codice_treno }}</td>  
                        <td>{{ $train->stazione_partenza }} <span class="fw-bold">to</span> {{$train->stazione_arrivo }}</td>
                        <td>{{ $train->orario_partenza }}</td>  
                        <td>{{ $train->orario_arrivo }}</td>
                        <td>{{ $train->numero_carrozze }}</td>
                        <td>
                            {{ ($train->cancellato) ? 'No' : 'yes' }}
                        </td>
                        <td>
                            {{ ($train->in_orario) ? 'Yes' : 'No' }}
                        </td>
                    </tr>
                        @endforeach

                      </tbody>
                </table>
            </div>            
        </section>
</body>
</html>