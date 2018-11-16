<div class="navbar-default sidebar" role="navigation">

    <div class="sidebar-nav navbar-collapse">

        <ul class="nav" id="side-menu">

            <li class="sidebar-search">
                      <!-- /start -->
		<form action="/search" method="POST" role="search">
			{{ csrf_field() }}
			<div class="input-group">
				<input type="text" class="form-control" name="q"
					placeholder="Search..."> 
                <span class="input-group-btn">
                    <a href="{{ url('/viewAlldownloadfile')}}">
                        <button type="submit" class="btn btn-default">
                            <span class="glyphicon glyphicon-search"></span>
                            <!--<i class="fa fa-search"></i>-->
                        </button>
                    </a>
				</span>
			</div>
		</form>
      

            </li>

            <li>

                <a href="{{ url('/uploadfile') }}"><i class="glyphicon glyphicon-upload"></i> Upload Report, Articles/ Source Code</a>

            </li>
            <!--li>

                <a href="{{ url('/uploadfile') }}"><i class="glyphicon glyphicon-upload"></i> Download Source Code</a>

            </li-->

            <li>

                <a href="{{ url('/plagiarism_checker') }}"><i class="glyphicon glyphicon-upload"></i> View Pending Report</a>

            </li>

            <!--li>

                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>

                <ul class="nav nav-second-level">

                    <li>

                        <a href="flot.html">Flot Charts</a>

                    </li>

                    <li>

                        <a href="morris.html">Morris.js Charts</a>

                    </li>

                </ul>
            </li-->

            <li>

                <a href="tables.html"><i class="glyphicon glyphicon-bell"></i> Notification </a>

            </li>

            <!--li>

                <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>

            </li>

            <li>

                <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>

                <ul class="nav nav-second-level">

                    <li>

                        <a href="panels-wells.html">Panels and Wells</a>

                    </li>

                </ul-->

                <!-- /.nav-second-level -->

           <!-- </li>-->

            <!--li>

                <a href="#"><i class="fa fa-files-o fa-fw"></i> Documents<span class="fa arrow"></span></a>

                <ul class="nav nav-second-level">

                    <li>

                        <a href="blank.html">Thesis</a>

                    </li>

                    <li>

                        <a href="login.html">Articles</a>

                    </li>

                </ul>

                <!-- /.nav-second-level -->

            <!--/li-->

        </ul>

    </div>

    <!-- /.sidebar-collapse -->

</div>

<!-- /.navbar-static-side -->