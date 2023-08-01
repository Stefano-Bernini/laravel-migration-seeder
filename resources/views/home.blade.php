<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>

    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    @vite('resources/js/app.js')

</head>

<body>
    <main>
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <h1 class="text-center">Treni in partenza</h1>
                        <table class="table">
                            <tr>
                                <th>Azienda</th>
                                <th>Codice treno</th>
                                <th>Treno in orario?</th>
                            </tr>
                            @foreach ($trains as $train)
                                <tr>
                                    <td>{{ $train->azienda }}</td>
                                    <td>{{ $train->codice_treno }}</td>
                                    <td>
                                        @if ($train->in_orario)
                                            Si
                                        @else
                                            No
                                        @endif
                                    </td>
                                </tr>
                            @endforeach
                        </table>
                </div>
            </div>
        </div>
    </main>
</body>

</html>