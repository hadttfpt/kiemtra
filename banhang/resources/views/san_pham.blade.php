<!DOCTYPE html>
<html>
<head>
    <title>Asignment</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
</head>
<body>
<div class="container" style="margin-top: 30px;">
    <div class="row">
        @foreach($productList as $item)
        <div class="col-md-3">
            <img src="{{ $item->thubmnail }}" alt="">
            <p>{{ $item->title }}</p>
            <p>{{ $item->price }}</p>
            <del>{{ $item->discount }}</del>
        </div>
        @endforeach
    </div>
    {{ $productList->links() }}
</div>
</body>
</html>
