<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/vendor/bootstrap.min.css')}}" />
    <!-- Icon Font CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/vendor/bicon.min.css')}}" />
    <!-- Flat Icon CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/vendor/flaticon.css')}}" />
    <!-- audio & video player CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/plyr.css')}}" />
    <!-- Slick CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/slick.min.css')}}" />
    <!-- nice-select CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/nice-select.css')}}" />
    <!-- perfect scrollbar css -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/perfect-scrollbar.css')}}" />
    <!-- light gallery css -->
    <link rel="stylesheet" href="{{asset('assets/css/plugins/lightgallery.min.css')}}" />
    <!-- Main Style CSS -->
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}" />
    {{-- ckeditor --}}
    <script src="//cdn.ckeditor.com/4.14.1/standard/ckeditor.js"></script>
</head>
<body>
    <div class="card">
        @foreach ($data as $item)
            {{$item->quotes}}
        @endforeach
        
        
    </div>
</body>
</html>