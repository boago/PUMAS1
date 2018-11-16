<!DOCTYPE html>
<html>
    <head>
  <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
   <link href="{!! asset('theme/vendor/bootstrap/css/bootstrap.min.css') !!}" rel="stylesheet">
   <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.6.3/css/font-awesome.min.css">
   <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
   <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery-bootgrid/1.3.1/jquery.bootgrid.min.css">
   <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery-bootgrid/1.3.1/jquery.bootgrid.min.js"></script>
    </head>
   <body >
               <nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">

       <nav class="navbar-static-top">
           <div class="container">
            <div class="navbar-header">

                <!-- Collapsed Hamburger -->
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#app-navbar-collapse">
                    <span class="sr-only">Toggle Navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
               </div>
           </div>

       <div class="collapse navbar-collapse" id="app-navbar-collapse">
            <ul class="nav navbar-nav navbar-right">
                    <!-- Authentication Links -->                   
                     <li><a href="{{ url('/') }}">Register New User</a></li>
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false">
                                {{ Auth::user()->name }} <span class="caret"></span>
                            </a>

                            <ul class="dropdown-menu" role="menu">
                                <li><a href="{{ url('/logout') }}"><i class="fa fa-btn fa-sign-out"></i>Logout</a></li>
                               
                            </ul>
                        </li>
                  
                </ul>
           <!--header class="w3-container w3-text-indigo w3-margin-top-64"-->
               <h2  class="display-2">User Details</h2>
           <!--/header-->
       </div>
       </nav>
       </nav>
      <table id="grid-basic" class="w3-table-all w3-card-4">
         <thead>
            <tr class="w3-cyan">
               <th data-column-id="id" data-type="numeric" data-order="asc">Id</th>     
               <th data-column-id="name" > Name</th>
               <th data-column-id="email" >Email</th>
               <!--th data-column-id="password" >Password</th-->
               <th data-column-id="actions" data-formatter="actions" data-sortable="false">Actions</th>
            </tr>
         </thead>
         <tbody>
            @foreach($data as $details)
            <tr>
               <td>{{$details->id}}</td>
               <td>{{$details->name}}</td>
               <td>{{$details->email}}</td>
               <!--td>{{$details->password}}</td-->
            </tr>
            @endforeach
         </tbody>
      </table>
      <div id="edit" class="w3-modal">
         <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px">
            <div class="w3-center"><br>
               <span onclick="document.getElementById('edit').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
            </div>
            <header class="w3-container w3-text-indigo w3-margin-top-64">
               <h1>Edit Details</h1>
            </header>
            <form class="w3-container" action="/save" method = "POST">
              {{ csrf_field() }}
              <input type="hidden" id="edit_id" name="edit_id">
               <div class="w3-section">
                  
                  <div class="w3-row">
                     <div class="w3-col s4">
                        <label><b>Name</b></label>
                     </div>
                     <div class="w3-col s8"><input class="w3-input w3-border w3-margin-bottom" id="name" type="text" placeholder="Enter Name" name="name" required></div>
                  </div>
                
                  <div class="w3-row">
                     <div class="w3-col s4">
                        <label><b>Email</b></label>
                     </div>
                     <div class="w3-col s8"><input class="w3-input w3-border w3-margin-bottom" id="email" type="email" placeholder="Enter Email" name="email" required></div>
                  </div>
                  
                  <!--div class="w3-row">
                     <div class="w3-col s4">
                        <label><b>Password</b></label>
                     </div>
                     <div class="w3-col s8"><input class="w3-input w3-border" id="password" type="text" placeholder="Password" name="password" required></div>
                  </div-->
                  <button class="w3-btn-block w3-indigo w3-section w3-padding" type="submit">Save</button>
               </div>
            </form>
            <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
               <button onclick="document.getElementById('edit').style.display='none'" type="button" class="w3-btn w3-red">Cancel</button>
            </div>
         </div>
      </div>
      <div id="delete" class="w3-modal">
         <div class="w3-modal-content w3-card-8 w3-animate-zoom" style="max-width:600px">
            <div class="w3-center"><br>
               <span onclick="document.getElementById('delete').style.display='none'" class="w3-closebtn w3-hover-red w3-container w3-padding-8 w3-display-topright" title="Close Modal">&times;</span>
            </div>
            <header class="w3-container w3-text-indigo w3-margin-top-64">
               <h1>Delete</h1>
            </header>
            <form class="w3-container" action="/delete" method="POST">
              {{ csrf_field() }}
              <input type="hidden" id="del_id" name="del_id">
               <div class="w3-section">
                  <p>Are you sure, you want to delete <span id ="delete_name"></span> ?</p>
                  <div class="w3-center"><button type="submit" class="w3-btn w3-indigo"> Delete </button></div>
               </div>
            </form>
            <div class="w3-container w3-border-top w3-padding-16 w3-light-grey">
               <button onclick="document.getElementById('delete').style.display='none'" type="button" class="w3-btn w3-red">Cancel</button>
            </div>
         </div>
      </div>
      <script>
         $( document ).ready(function(){
           $("#grid-basic").bootgrid({
             formatters: {
               "actions": function(column, row)
               {
                 return "<button onclick=\"document.getElementById('edit').style.display='block'\" data-id=\"" + row.id + "\" data-name=\"" + row.name + "\" data-email=\"" + row.email + "\"  class=\"w3-btn w3-blue w3-small edit\"><span class=\"fa fa-pencil\"></span></button> " +
                 "<button onclick=\"document.getElementById('delete').style.display='block'\" data-name=\"" + row.name + "\" data-id=\"" + row.id + "\" class=\"w3-btn w3-blue w3-small delete\"><span class=\"fa fa-remove\"></span></button>";

               }
             }}).on("loaded.rs.jquery.bootgrid", function (){
               /* Executes after data is loaded and rendered */
               $(this).find(".edit").click(function (e) {
                 $('#id').val($(this).data("id"));
                 
                 $('#name').val($(this).data("name"));
                
                 $('#email').val($(this).data("email"));
               });
               $(this).find(".delete").click(function (e) {
                 $('#del_id').val($(this).data("id"));
                 $('#delete_name').html($(this).data("name"));
               });
             });
           });

      </script>
   </body>
</html>
