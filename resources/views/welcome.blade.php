<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>MarketFace Demo Laravel/Vuejs</title>
    </head>

    <style>
        body{
            margin: 0;
            padding: 0;
            font-family: sans-serif;
        }
        h2,h3{
            margin: 15px 10px;
        }
        .validation_errors{
            width: 345px;
            background: #ff000094;
            border-radius: 30px;
            margin: 0 35px;
            font-family: sans-serif;
            color: black;
            font-size: 16px;
            line-height: 20px;
        }
        li{
            padding: 5px 0;
        }
    </style>

    <body>
        

        <div id="app">
            <vuenavbar></vuenavbar>
            <h2>Add a new product :</h2>

            <div >
                @if ($errors->any())
                    <div class="validation_errors">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </div>

            <vueform oldname="{{ old('name') }}" oldprice="{{ old('price') }}" oldquantity="{{ old('quantity') }}"></vueform>

            <h3>Products List : </h3>
            <vueproductslist></vueproductslist>
        </div>

        <script src="{{ asset('js/app.js') }}"></script>
    </body>
</html>
