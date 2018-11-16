
<!--@extends('theme.newdefault')
@extends('theme.lecturersidebar')

@section('content')

<body>
   
    
   <div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Plagiarism Checker</div>
                <div class="panel-body">
                    <form class="form-horizontal" role="form" method="POST" action="{{ url('/plagiarism_upload') }}">
                        {{ csrf_field() }}


                              <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Upload File 1:</label>
  
      <div class="col-sm-4">          
      
        <input type="file"  name="file1" class="file1">

        @if ($errors->has('file1')) <p class="help-block">{{ $errors->first('file1') }}</p> @endif

      </div>
    </div>

                         <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Upload File 2:</label>
  
      <div class="col-sm-4">          
      
        <input type="file"  name="file2" class="file2">

        @if ($errors->has('file2')) <p class="help-block">{{ $errors->first('file2') }}</p> @endif

      </div>
    </div>

                        <div class="form-group">
                            <div class="col-md-6 col-md-offset-4">
                                <a href="">
                                <button type="submit" class="btn btn-primary">
                                    <i class="fa fa-btn fa-sign-in"></i> Check
                                </button>
                                </a>
        
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection-->