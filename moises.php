<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

        <title>Collapsible sidebar using Bootstrap 3</title>

         <!-- Bootstrap CSS CDN -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">

        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

        <!-- Our Custom CSS -->
        <style type="text/css" media="screen">


			@import "https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700";


			body {
			    font-family: 'Poppins', sans-serif;
			    background: #fafafa;
			}

			p {
			    font-family: 'Poppins', sans-serif;
			    font-size: 1.1em;
			    font-weight: 300;
			    line-height: 1.7em;
			    color: #999;
			}

			a, a:hover, a:focus {
			    color: inherit;
			    text-decoration: none;
			    transition: all 0.3s;
			}

			.navbar {
			    padding: 15px 10px;
			    background: #fff;
			    border: none;
			    border-radius: 0;
			    margin-bottom: 40px;
			    box-shadow: 1px 1px 3px rgba(0, 0, 0, 0.1);
			}

			.navbar-btn {
			    box-shadow: none;
			    outline: none !important;
			    border: none;
			}

			.line {
			    width: 100%;
			    height: 1px;
			    border-bottom: 1px dashed #ddd;
			    margin: 40px 0;
			}

			i, span {
			    display: inline-block;
			}

			/* ---------------------------------------------------
			    SIDEBAR STYLE
			----------------------------------------------------- */
			.wrapper {
			    display: flex;
			    align-items: stretch;
			}

			#sidebar {
			    min-width: 250px;
			    max-width: 250px;
			    background: #7386D5;
			    color: #fff;
			    transition: all 0.3s;
			}

			#sidebar.active {
			    min-width: 80px;
			    max-width: 80px;
			    text-align: center;
			}

			#sidebar.active .sidebar-header h3, #sidebar.active .CTAs {
			    display: none;
			}

			#sidebar.active .sidebar-header strong {
			    display: block;
			}

			#sidebar ul li a {
			    text-align: left;
			}

			#sidebar.active ul li a {
			    padding: 20px 10px;
			    text-align: center;
			    font-size: 0.85em;
			}

			#sidebar.active ul li a i {
			    margin-right:  0;
			    display: block;
			    font-size: 1.8em;
			    margin-bottom: 5px;
			}

			#sidebar.active ul ul a {
			    padding: 10px !important;
			}

			#sidebar.active a[aria-expanded="false"]::before, #sidebar.active a[aria-expanded="true"]::before {
			    top: auto;
			    bottom: 5px;
			    right: 50%;
			    -webkit-transform: translateX(50%);
			    -ms-transform: translateX(50%);
			    transform: translateX(50%);
			}

			#sidebar .sidebar-header {
			    padding: 20px;
			    background: #6d7fcc;
			}

			#sidebar .sidebar-header strong {
			    display: none;
			    font-size: 1.8em;
			}

			#sidebar ul.components {
			    padding: 20px 0;
			    border-bottom: 1px solid #47748b;
			}

			#sidebar ul li a {
			    padding: 10px;
			    font-size: 1.1em;
			    display: block;
			}
			#sidebar ul li a:hover {
			    color: #7386D5;
			    background: #fff;
			}
			#sidebar ul li a i {
			    margin-right: 10px;
			}

			#sidebar ul li.active > a, a[aria-expanded="true"] {
			    color: #fff;
			    background: #6d7fcc;
			}


			a[data-toggle="collapse"] {
			    position: relative;
			}

			a[aria-expanded="false"]::before, a[aria-expanded="true"]::before {
			    content: "\f078";
			    display: block;
			    position: absolute;
			    right: 20px;
			    font-family: 'FontAwesome';
			    font-size: 0.6em;
			}
			a[aria-expanded="true"]::before {
			    content: '\f077';
			}


			ul ul a {
			    font-size: 0.9em !important;
			    padding-left: 30px !important;
			    background: #6d7fcc;
			}

			ul.CTAs {
			    padding: 20px;
			}

			ul.CTAs a {
			    text-align: center;
			    font-size: 0.9em !important;
			    display: block;
			    border-radius: 5px;
			    margin-bottom: 5px;
			}

			a.download {
			    background: #fff;
			    color: #7386D5;
			}

			a.article, a.article:hover {
			    background: #6d7fcc !important;
			    color: #fff !important;
			}



			/* ---------------------------------------------------
			    CONTENT STYLE
			----------------------------------------------------- */
			#content {
			    padding: 20px;
			    min-height: 100vh;
			    transition: all 0.3s;
			}


			/* ---------------------------------------------------
			    MEDIAQUERIES
			----------------------------------------------------- */
			@media (max-width: 768px) {
			    #sidebar {
			        min-width: 80px;
			        max-width: 80px;
			        text-align: center;
			        margin-left: -80px !important ;
			    }
			    a[aria-expanded="false"]::before, a[aria-expanded="true"]::before {
			        top: auto;
			        bottom: 5px;
			        right: 50%;
			        -webkit-transform: translateX(50%);
			        -ms-transform: translateX(50%);
			        transform: translateX(50%);
			    }
			    #sidebar.active {
			        margin-left: 0 !important;
			    }

			    #sidebar .sidebar-header h3, #sidebar .CTAs {
			        display: none;
			    }

			    #sidebar .sidebar-header strong {
			        display: block;
			    }

			    #sidebar ul li a {
			        padding: 20px 10px;
			    }

			    #sidebar ul li a span {
			        font-size: 0.85em;
			    }
			    #sidebar ul li a i {
			        margin-right:  0;
			        display: block;
			    }

			    #sidebar ul ul a {
			        padding: 10px !important;
			    }

			    #sidebar ul li a i {
			        font-size: 1.3em;
			    }
			    #sidebar {
			        margin-left: 0;
			    }
			    #sidebarCollapse span {
			        display: none;
			    }
			}
        </style>        
    </head>
    <body>



        <div class="wrapper">
            <!-- Sidebar Holder -->
            <nav id="sidebar">
                <div class="sidebar-header">
                    <h3>Bootstrap Sidebar</h3>
                    <strong>BS</strong>
                </div>

                <ul class="list-unstyled components">
                    <li class="active">
                        <a href="#homeSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i class="fa fa-home"></i>
                            Home
                        </a>
                        <ul class="collapse list-unstyled" id="homeSubmenu">
                            <li><a href="#">Home1Home1</a></li>
                            <li><a href="#">Home 2</a></li>
                            <li><a href="#">Home 3</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="fa fa-area-chart"></i>
                            About
                        </a>
                        <a href="#pageSubmenu" data-toggle="collapse" aria-expanded="false">
                            <i class="glyphicon glyphicon-duplicate"></i>
                            Pages
                        </a>
                        <ul class="collapse list-unstyled" id="pageSubmenu">
                            <li><a href="#">Page 1</a></li>
                            <li><a href="#">Page 2</a></li>
                            <li><a href="#">Page 3</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-link"></i>
                            Portfolio
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-paperclip"></i>
                            FAQ
                        </a>
                    </li>
                    <li>
                        <a href="#">
                            <i class="glyphicon glyphicon-send"></i>
                            Contact
                        </a>
                    </li>
                </ul>

                <ul class="list-unstyled CTAs">
                    <li><a href="https://bootstrapious.com/tutorial/files/sidebar.zip" class="download">Download source</a></li>
                    <li><a href="https://bootstrapious.com/p/bootstrap-sidebar" class="article">Back to article</a></li>
                </ul>
            </nav>

            <!-- Page Content Holder -->
            <div id="content">
            	<table class="table">
  <thead class="thead-inverse">
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>

<table class="table">
  <thead class="thead-default">
    <tr>
      <th>#</th>
      <th>First Name</th>
      <th>Last Name</th>
      <th>Username</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td>Jacob</td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td>Larry</td>
      <td>the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table>
                <nav class="navbar navbar-default">
                    <div class="container-fluid">

                        <div class="navbar-header">
                            <button type="button" id="sidebarCollapse" class="btn btn-info navbar-btn">
                                <span>Toggle Sidebar</span>
                            </button>
                        </div>

                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#">Page</a></li>
                                <li><a href="#">Page</a></li>
                                <li><a href="#">Page</a></li>
                                <li><a href="#">Page</a></li>
                            </ul>
                        </div>
                    </div>
                </nav>

                <h2>Collapsible Sidebar Using Bootstrap 3</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                <div class="line"></div>

                <h2>Lorem Ipsum Dolor</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                <div class="line"></div>

                <h2>Lorem Ipsum Dolor</h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

                <div class="line"></div>

                <h3>Lorem Ipsum Dolor</h3>
                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
            </div>
        </div>





        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous"></script>

         <script type="text/javascript">
             $(document).ready(function () {
                 $('#sidebarCollapse').on('click', function () {
                     $('#sidebar').toggleClass('active');
                 });
             });
         </script>
    </body>
</html>
