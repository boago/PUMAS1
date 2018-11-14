@extends('theme.default')


@section('content')
<div class="container">

		<div  class="col-md-10 col-md-offset-1">
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
                         
                        <td><a href="{{ action('FileDownloadController@down', ['file_title' => $list->file_title]) }}">{{$list->file_title}} by {{$list->author}} </a></td>
                     
                       
                        
                        
					</tr>
					@endforeach
				</tbody>
			</table>
			@elseif(isset($message))
            <h2>Search Results</h2>
			<p>{{ $message }}</p>
			@endif
            </div>
    </div>
@endsection
