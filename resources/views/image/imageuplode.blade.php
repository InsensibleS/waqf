<html lang="en">
<head>
    <title>></title>
</head>
<body>
 <form action="{{route('image.upload')}}" method="post" enctype="multipart/form-data">
     @csrf
     @method('post')
     {{csrf_field()}}
    <div class="from-ground">
        <input type="file" name="image">
    </div>
     <button class="btn btn-default" type="submit"> Загрузка</button>
 </form>
    @isset ($path)
        <img class="image-fluid" src="{{asset('/public/'. $path)}}">
    @endisset
</body>
</html>
