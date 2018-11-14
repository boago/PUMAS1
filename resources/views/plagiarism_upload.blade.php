
@extends('theme.newdefault')
@extends('theme.lecturersidebar')

@section('content')

<body>
   

                $some = exec("python ..\cgi-bin\plagiarism.py $md $fd ");
                // echo $some;

</body>
@endsection