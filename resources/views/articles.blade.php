<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Articles</title>
</head>
<body>
<h1>Liste des articles</h1>

@foreach($posts as $post)
    <h2>{{ $post }}</h2>
@endforeach

{{-- <!-- <h2>{{ $title }}</h2>
<h2>{{ $title1 }}</h2> --> --}}

</body>
</html>
