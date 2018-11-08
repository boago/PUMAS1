<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
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

    <h3 class="jumbotron"> File Upload</h3>

  {!! Form::open(array('url'=>'insertfile','method'=>'POST' ,'class'=>'form-horizontal','files'=>true)) !!}

  <input type="hidden" name="_token" value="{{ csrf_token() }}">
    <div class="form-group">


      <label class="control-label col-sm-2" for="name">Author:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control file_title_c" id="author_id" name="author" placeholder="Author Details"  value="{{ Input::old('author') }}">

        @if ($errors->has('author')) <p class="help-block">{{ $errors->first('author') }}</p> @endif

				</div>


      </div>
	    <div class="form-group">


      <label class="control-label col-sm-2" for="name">Title:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control file_title_c" id="file_title_id" name="file_title" placeholder="Enter Title"  value="{{ Input::old('file_title') }}">

        @if ($errors->has('file_title')) <p class="help-block">{{ $errors->first('file_title') }}</p> @endif

				</div>


      </div>
	
	    <div class="form-group">


      <label class="control-label col-sm-2" for="name">Field Of Study:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control file_title_c" id="field_id" name="fields" placeholder="field of Study"  value="{{ Input::old('fields') }}">

        @if ($errors->has('fields')) <p class="help-block">{{ $errors->first('fields') }}</p> @endif

				</div>


      </div>
	  
	  <div class="form-group">


      <label class="control-label col-sm-2" for="name">University:</label>
      <div class="col-sm-4">
        <input type="text" class="form-control file_title_c" id="university_id" name="university" placeholder="University"  value="{{ Input::old('university') }}">

        @if ($errors->has('university')) <p class="help-block">{{ $errors->first('university') }}</p> @endif

				</div>


      </div>
	    <div class="form-group">


      <label class="control-label col-sm-2" for="name">Description</label>
      <div class="col-sm-4">
        <textarea  rows="5" cols="40"  type="text" class="form-control file_title_c" id="description_id" name="description" placeholder="Give a description of what your document is about."  value="{{ Input::old('description') }}"></textarea>

        @if ($errors->has('description')) <p class="help-block">{{ $errors->first('description') }}</p> @endif

				</div>


      </div>
	  

     
	
      <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Upload:</label>
  
      <div class="col-sm-4">          
      
        <input type="file"  name="filenam" class="filename">

        @if ($errors->has('filenam')) <p class="help-block">{{ $errors->first('filenam') }}</p> @endif

      </div>
    </div>
	

    
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>



    </div>

    
{!! Form::close() !!}

</div>
 


<script>
  @if(Session::has('message'))
    var type = "{{ Session::get('alert-type', 'info') }}";
    switch(type){
        
        case 'success':
            toastr.success("{{ Session::get('message') }}");
            break;

        case 'error':
            toastr.error("{{ Session::get('message') }}");
            break;
    }
  @endif
</script>

</body>
</html>
