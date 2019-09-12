<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Index 1</title>
</head>
<body>
    {{--
    Comentário de páginas Blade --}}

        @forelse ($errors as $e)
            <div style="color:red">{{$e}}</div>
        @empty
            <div style="color:blue">
                {!!'Olá '.$ola.', '.$nome.". <BR>Tudo bem?" !!}
            </div>
        @endforelse
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="text" name="telefone" id="telefone" value={{$telefone}}>
        <input type="submit" value="Enviar">
    </form>

</body>
</html>