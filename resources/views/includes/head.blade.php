
@foreach ($_data as $rec)
{{$rec->name}}
{{$rec->kt_wish}}
@endforeach



<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta property="og:url"           content="https://loykrathong-tak.com/" />
    <meta property="og:type"          content="website" />
    <meta property="og:title"         content="คุณ{{$rec->name}} ได้ลอยกระทงออนไลน์กับ loykrathong-tak.com" />
    <meta property="og:description"   content="ลอยกระทงออนไลน์ ตาก" />
    <meta property="og:image"         content="https://loykrathong-tak.com/img/s1.jpg" />

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}" type="text/css">
    <title> {{$rec->name}} ลอยกระทงออนไลน์ เมืองตาก</title>


    
    <link rel="icon" type="public\img" href="public\img\1.png" />
    
</head>
