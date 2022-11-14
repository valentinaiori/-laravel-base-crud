<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Edita Elemento</title>
</head>
<body>
    <form method="POST" action="{{ route('comics.update', $comic->id) }}">
        @csrf
        @method('PUT')

        <div @error('title') class="is-invalid"  @enderror>
            <label for="title">Title</label>
            <input type="text" maxlength="255" required minlength="5" name="title"
                value="{{ old('title', $comic->title) }}">
            @error('title')
                <div>
                    {{ __('Sistema il titolo') }}
                </div>
            @enderror
        </div>
        <div @error('description') class="is-invalid"  @enderror>
            <label for="description">Description</label>
            <textarea name="description" required cols="30" rows="10">{{ old('description', $comic->description) }}</textarea>
            @error('description')
                <div>
                    {{ __('Sistema la desc') }}
                </div>
            @enderror
        </div>
        <div @error('thumb') class="is-invalid"  @enderror>
            <label for="thumb">Thumb</label>
            <input type="url"maxlength="255" required name="thumb" value="{{ old('thumb', $comic->thumb) }}">
            @error('thumb')
                <div>
                    {{ __('Sistema la desc') }}
                </div>
            @enderror
        </div>
        <div @error('price') class="is-invalid"  @enderror>
            <label for="price">Price</label>
            <input type="number" min="1" max="999.99" required step=".01" name="price"
                value="{{ old('price', $comic->price) }}">
            @error('price')
                <div>
                    {{ __('Sistema la desc') }}
                </div>
            @enderror
        </div>
        <div @error('series') class="is-invalid"  @enderror>
            <label for="series">Serie</label>
            <input type="text" maxlength="50" required name="series" value="{{ old('series', $comic->series) }}">
            @error('series')
                <div>
                    {{ __('Sistema la desc') }}
                </div>
            @enderror
        </div>
        <div @error('sale_date') class="is-invalid"  @enderror>
            <label for="sale_date">Date</label>
            <input type="date" required name="sale_date" value="{{ old('sale_date', $comic->sale_date) }}">
            @error('sale_date')
                <div>
                    {{ __('Sistema la desc') }}
                </div>
            @enderror
        </div>
        <div @error('type') class="is-invalid"  @enderror>
            <label for="type">Type</label>
            <input type="text" maxlength="15" required name="type" value="{{ old('type', $comic->type) }}">
            @error('type')
                <div>
                    {{ __('Sistema il type') }}
                </div>
            @enderror
        </div>
        <div>
            <input type="submit" value="Aggiorna!">
        </div>
    </form>
</body>
</html>
