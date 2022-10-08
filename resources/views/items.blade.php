<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>items</title>
</head>
<body>
    <h1>Items</h1>
    <p>hasil dari <?php echo '{{ route("items") }}' ?> : {{ route('items') }}</p>
    <p>hasil dari <?php echo '{{ url("/items") }}' ?> : {{ url('/items') }}</p>
</body>
</html>