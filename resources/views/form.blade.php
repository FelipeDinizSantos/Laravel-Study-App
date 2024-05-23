<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form method="POST" action="{{ route('post.notes') }}">
        @csrf

        <label for="title">Titulo</label>
        <input type="text" name="title" id="title">

        <label for="content">Conteudo:</label>
        <input type="text" name="content" id="content">

        <button type="submit">Enviar</button>
    </form>
</body>
</html>