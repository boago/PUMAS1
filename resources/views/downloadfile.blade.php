@extends('theme.default')

@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
  <title>PUMAS File Upload</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  
  <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>

  <link href="//cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css" rel="stylesheet">

  

</head>


<style type="text/css">
  .help-block{
    color: red;
  }
</style>
<body>



  <div class="container">
      
  <h1>
      
      {{--*/ 
      $string = app('request')->input('file_title') /*--}}
       
{{$string }}
      
    
    </div>

</body>
</html>
@endsection