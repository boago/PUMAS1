@extends('theme.default')


@section('content')
<!--<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">                            
                <body>                    
                        <h1> Advance your research</h1>
                        <h3> Discover scientific knowledge, and make research visible. </h3>
                    
                </body>
                
        </div>
    </div>
</div>-->
<div  class="col-md-10 col-md-offset-1">

    <body>
        <h1>Welcome to PUMAS </h1>
        <h2> Advance Your Research </h2>
        <h2>  </h2>
    </body>

<!---->
  
    <form action="/search1" method="POST" role="search1">
			{{ csrf_field() }}
			<div class="input-group">
				<input type="text" class="form-control" name="q1"
					placeholder="Search..."> 
                <span class="input-group-btn">
                        <button type="submit" class="btn btn-default">
                            <span class="glyphicon glyphicon-search"></span>
                        </button>
				</span>
			</div>
		</form>

<!---->

			@if(isset($details))
			<h2>Search Results</h2>
			<table class="table table-striped">
				<thead>
					<tr>
						
					</tr>
				</thead>
				<tbody>
					@foreach($details as $list)
					<tr>
                        <td><a href="{{ action('FileDownloadController@down', ['file_title' => $list->file_title]) }}">{{$list->file_title}} by {{$list->author}} </a><br><h4>Description</h4>{{$list->description}}
                        </td>
					</tr>
					@endforeach
				</tbody>
			</table>
			@elseif(isset($message))
            <h2>Search Results</h2>
			<p>{{ $message }}</p>
			@endif
            </div>
            <br><br><br><br><br>
            <div class="row">
<br><br><br><br><br>
<div class="col-md-10 col-md-offset-1" >
  <img style src="{{ URL::to('/images/uno2.jpg') }}">
  <img src="{{ URL::to('/images/laravel.png') }}">
  <img src="{{ URL::to('/images/dos2.jpg') }}">
</div>
</div>
</div>

@endsection
