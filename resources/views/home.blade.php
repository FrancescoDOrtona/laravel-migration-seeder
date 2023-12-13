<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Trains</title>
</head>
<body>
    <section>
        <header>
            <div class="container text-center py-4">
                <h1>Train Schedule</h1>
            </div>
        </header>
        <div class="container">           
            <ul>
                @foreach($trains as $train)
                    <li>
                        <p>{{ $train->codice_treno }}</p>  
                        <p>{{ $train->stazione_partenza }} to {{ $train->stazione_arrivo }} </p>
                        <p>Departure: {{ $train->orario_partenza }}</p>  
                        <p>Arrival: {{ $train->orario_arrivo }}</p>
                    </li>
                @endforeach
            </ul>
        </div>
    </section>
</body>
</html>