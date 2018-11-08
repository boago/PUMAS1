@extends('theme.default')

@section('content')

<!DOCTYPE html>
<html>
<head>
	<title>PUMAS</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

  <style type="text/css">
  .wrapper{
  	margin: 0 auto;
  	width: 75%;
  	margin-top: 10px;
  }
  </style>

</head>
<body>
    <div class="col-sm-2 "></div>
	<div class="col-sm-8">
		<section class="panel panel-default">
		
			<div class="panel-body">
			<h3>Are you starting a new research project?</h3>
            <br>
            <h4>Add a new project</h4> <a href="{{ url('/uploadfile') }}">
								<button type="button" class="btn btn-primary">
								<i class="glyphicon glyphicon-folder-open"> ADD</i>
								</button>
							</a>

                
			</div>
            
            
		</section>
        
        
        	<section class="panel panel-primary">
			<div class="panel-heading">
				RECENT PUBLICATIONS
              

                
			</div>
			<div class="panel-body">
				<table class="table table-bordered">
					<a href="{{ url('/viewAlldownloadfile') }}">
								<button type="button" class="btn btn-primary">
								<i class="glyphicon glyphicon-eye-open">
									View All Publications
								</i>
								</button>
							</a>

					<tbody>
					
					</tbody>
				</table>
                
                
                <table class="table table-bordered">
                   
                    <thead>
						<th>User</th>
						
					</thead>
					<tbody>

					
						<tr>
							
							<td>
							
                             
							</td>
                           
						</tr>
					
					</tbody>
				</table>
                
                <table class="table table-bordered">
                   
                    <thead>
						<th>User</th>
						
					</thead>
					<tbody>

					
						<tr>
							
							<td>
							
                             
							</td>
                           
						</tr>
					
					</tbody>
				</table>
                <table class="table table-bordered">
                   
                    <thead>
						<th>User</th>
						
					</thead>
					<tbody>

					
						<tr>
							
							<td>
							
                             
							</td>
                           
						</tr>
					
					</tbody>
				</table>
			</div>
            
            
		</section>
        
        
	</div>
    <div class="col-sm-2 "></div>

</body>
</html>
@endsection
