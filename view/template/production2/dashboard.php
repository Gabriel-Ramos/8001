<?php
include("../../verificador_sessao.php");
verificaCredenciais("Administrador");
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Auto Viação 8001</title>

    <!-- Bootstrap -->
    <link href="../vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="../vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- iCheck -->
    <link href="../vendors/iCheck/skins/flat/green.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="../build/css/custom.min.css" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
              <a href="dashboard.php" class="site_title"><i class="fa fa-bus"></i> <span>Auto Viação 8001</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile">
              <div class="profile_pic">
                <img src="images/user.png" alt="..." class="img-circle profile_img">
              </div>
              <div class="profile_info">
                <span>Bem vindo,</span>
                <h2><?php echo $_SESSION['nome'];?></h2>
              </div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
                <div class="menu_section" style="margin-top:90px;">
                    <ul class="nav side-menu">
                        
                </div>
              <div class="menu_section">
                <h3>Administrar</h3>
                <ul class="nav side-menu">
                  <li><a><i class="fa fa-user"></i> Clientes <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="cliente.php">Informações</a></li>
					  <li><a href="clienteinserir.php">Inserir Cliente</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-black-tie"></i> Motoristas <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="motorista.php">Informações</a></li>
					  <li><a href="motoristainserir.php">Inserir Motorista</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-truck"></i> Veículos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="veiculos.php">Informações</a></li>
                      <li><a href="inserirveiculos.php">Inserir Veículos</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-calendar"></i> Viagens <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="viagem.php">Informações</a></li>
                      <li><a href="inserirviagens.php">Inserir Viagens</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-ticket"></i> Bilhetes <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                        <li><a href="bilhetes.php">Informações</a></li>
                      <li><a href="inserirbilhetes.html">Inserir Bilhetes</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-map-signs"></i>Trechos <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="trechos.php">Informações</a></li>
                      <li><a href="inserirtrecho.php">Inserir Trechos</a></li>
                    </ul>
                  </li>
                  <li><a><i class="fa fa-map-marker"></i>Locais <span class="fa fa-chevron-down"></span></a>
                        <ul class="nav child_menu">
                            <li><a href="local.php">Informações</a></li>
                            <li><a href="inserir_local.php">Inserir Local</a></li>
                        </ul>
                  </li>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="javascript:window.location='../../logout.php'">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="images/user.png" alt="">Encerrar Sessão ?
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
  
                    <li>
                   
                    </li>
      
                    <li><a href="../../logout.php"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>

                <li role="presentation" class="dropdown">
                  <a href="javascript:;" class="dropdown-toggle info-number" data-toggle="dropdown" aria-expanded="false">
                    <i class="fa fa-envelope-o"></i>
                   
                      </div>
                    </li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->

        <!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="page-title">
              <div class="title_left">
                <h3>INICIO<small></small></h3>
              </div>
			
				 <br>
              <div class="title_right">
                <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">
                  <div class="input-group">

                    <span class="input-group-btn">

                    </span>
                  </div>
				     <br>
			            </div>
              </div>
            </div>
			  <br>
			  <h1 style="color:blue;">
			  <a href="local.php"> Local</a></li>
			   <br>
			  <a href="viagem.php"> Viagem</a></li>
			     <br>
			  <a href="inserir_local.php"> Inserir Local</a></li>

				</h1>

  

     



              <div class="clearfix"></div>

                          </tr>
                        </tbody>
                      </table>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">
            Gentelella - Bootstrap Admin Template by <a href="https://colorlib.com">Colorlib</a>
          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="../vendors/jquery/dist/jquery.min.js"></script>
    <!-- Bootstrap -->
    <script src="../vendors/bootstrap/dist/js/bootstrap.min.js"></script>
    <!-- FastClick -->
    <script src="../vendors/fastclick/lib/fastclick.js"></script>
    <!-- NProgress -->
    <script src="../vendors/nprogress/nprogress.js"></script>
    <!-- iCheck -->
    <script src="../vendors/iCheck/icheck.min.js"></script>

    <!-- Custom Theme Scripts -->
    <script src="../build/js/custom.min.js"></script>
  </body>
</html>