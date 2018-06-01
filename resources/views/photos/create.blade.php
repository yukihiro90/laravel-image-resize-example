<div>
    <h1>画像のアップロード</h1>

    <form method="post" action="{{ action('PhotosController@store') }}" enctype="multipart/form-data">
        {{ csrf_field() }}

        <fieldset>
            <div>
                <input id="file" type="file" name="image">

                @if ($errors->has('image'))
                    {{ $errors->first('image') }}
                @endif
            </div>
        </fieldset>

        <input type="submit" value="アップロード">
    </form>
</div>
