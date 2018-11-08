<div class="navbar-default sidebar" role="navigation">

    <div class="sidebar-nav navbar-collapse">

        <ul class="nav" id="side-menu">

            <li class="sidebar-search">
        
        <!-- /start -->
		<form action="/search" method="POST" role="search">
			{{ csrf_field() }}
			<div class="input-group">
				<input type="text" class="form-control" name="q"
					placeholder="Search users"> <span class="input-group-btn">
					<button type="submit" class="btn btn-default">
						<span class="glyphicon glyphicon-search"></span>
					</button>
				</span>
			</div>
		</form>
        <!-- /end -->

                <!-- /input-group -->

            </li>

            <li>

                <a href="index.html"><i class="fa fa-dashboard fa-fw"></i> Dashboard</a>

            </li>

            <li>

                <a href="#"><i class="fa fa-bar-chart-o fa-fw"></i> Charts<span class="fa arrow"></span></a>

                <ul class="nav nav-second-level">

                    <li>

                        <a href="flot.html">Flot Charts</a>

                    </li>

                    <li>

                        <a href="morris.html">Morris.js Charts</a>

                    </li>

                </ul>

                <!-- /.nav-second-level -->

            </li>

            <li>

                <a href="tables.html"><i class="fa fa-table fa-fw"></i> Tables</a>

            </li>

            <li>

                <a href="forms.html"><i class="fa fa-edit fa-fw"></i> Forms</a>

            </li>

            <li>

                <a href="#"><i class="fa fa-wrench fa-fw"></i> UI Elements<span class="fa arrow"></span></a>

                <ul class="nav nav-second-level">

                    <li>

                        <a href="panels-wells.html">Panels and Wells</a>

                    </li>

                </ul>

                <!-- /.nav-second-level -->

            </li>

            <li>

                <a href="#"><i class="fa fa-files-o fa-fw"></i> Sample Pages<span class="fa arrow"></span></a>

                <ul class="nav nav-second-level">

                    <li>

                        <a href="blank.html">Blank Page</a>

                    </li>

                    <li>

                        <a href="login.html">Login Page</a>

                    </li>

                </ul>

                <!-- /.nav-second-level -->

            </li>

        </ul>

    </div>

    <!-- /.sidebar-collapse -->

</div>

<!-- /.navbar-static-side -->