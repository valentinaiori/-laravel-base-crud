<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nuovo Comic</title>
</head>
<body>
    @if ($errors->any())
        <div>
            Ci sono degli errori
        </div>
    @endif


    <form method="POST" action="{{route ('comics.store') }}">
        @csrf
        <div @error('title') class="is-invalid"  @enderror>
            <label for="title">Titolo:</label>
            <input type="text" required maxlength = "255" minlength= "5" name="title" value="{{ old('title', '') }}">
            @error('title')
            <div>
                {{ $message }}
            </div>
        @enderror
        </div>
        <div @error('description') class="is-invalid"  @enderror>
            <label for="description">Descrizione:</label>
            <textarea required name="description" cols="30" rows="10">{{ old('description', '') }}</textarea>
            @error('description')
            <div>
                {{ __('Sistema la desc') }}
            </div>
        @enderror
        </div>
        <div @error('thumb') class="is-invalid"  @enderror>
            <label for="thumb">Immagine</label>
            <input type="url" maxlength="255" required name="thumb" value="{{ old('thumb', '') }}">
            @error('thumb')
                <div>
                    {{ __('Sistema la desc') }}
                </div>
            @enderror
        </div>
        <div @error('price') class="is-invalid"  @enderror>
            <label for="price">Prezzo:</label>
            <input type="number" min="1" max="999.99" required name="price" value="{{ old('price', '') }}">
            @error('price')
            <div>
                {{ $message }}
            </div>
        @enderror
        </div>
        <div @error('series') class="is-invalid"  @enderror>
            <label for="series">Serie:</label>
            <input type="text" maxlength="50" required name="series" value="{{ old('series', '') }}">
            @error('series')
                <div>
                    {{ __('Sistema la desc') }}
                </div>
            @enderror
        </div>
        <div @error('sale_date') class="is-invalid"  @enderror>
            <label for="sale_date">Data di vendita:</label>
            <input type="date" required name="sale_date" value="{{ old('sale_date', '') }}">
            @error('sale_date')
                <div>
                    {{ __('Sistema la desc') }}
                </div>
            @enderror

        </div>
        <div @error('type') class="is-invalid"  @enderror>
            <label for="type">Tipo:</label>
            <input type="text" maxlength="15" required name="type" value="{{ old('type', '') }}">
            @error('type')
            <div>
                {{ __('Sistema il type') }}
            </div>
        @enderror
        </div>
        <div>
            <input type="submit" value="Crea Elemento">
        </div>


</body>
</html>
