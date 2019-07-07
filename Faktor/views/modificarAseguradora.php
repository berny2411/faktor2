

        <div class="breadcrumbs">
            <div class="breadcrumbs-inner">
                <div class="row m-0">
                    <div class="col-sm-4">
                        <div class="page-header float-left">
                            <div class="page-title">
                                <h1>Dashboard</h1>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-8">
                        <div class="page-header float-right">
                            <div class="page-title">
                                <ol class="breadcrumb text-right">
                                    <li><a href="#">Dashboard</a></li>
                                    <li><a href="#">Forms</a></li>
                                    <li class="active">Basic</li>
                                </ol>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php
    require_once('model/aseguradora.php');
    
    $altaaseguradora = new Aseguradora();
    $id= isset($_GET['id'])?$_GET['id']:null;
  $users    = $altaaseguradora -> getUserById($id);
  $nAseguradora ='';
  $direccionAseguradora ='';
  $pagina='';
  if($users){
    $nAseguradora  =$users[0]['nombreAseguradra'];
    $direccionAseguradora =$users[0]['direccionAseguradora'];
    $pagina   =$users[0]['pagina'];
  }
    ?>
    
        <div class="content">
            <div class="animated fadeIn">


                <div class="row">
                    
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">Actualizar Aseguradora</div>
                        <div class="card-body card-block">
                            <form id="update_Aseguradora">

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-key"></i></div>
                                        <input type="text" name="iddisable" placeholder="Disabled" disabled="" class="form-control" autofocus required value="<?php echo $id; ?>">
                                    </div>
                                </div>

                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-building-o"></i></div>
                                        <input type="text" name="nAseguradora" placeholder="Ingresa aseguradora" class="form-control" autofocus required value="<?php echo $nAseguradora; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-address-book-o"></i></div>
                                        <input type="text"  name="direccion" placeholder="Ingresa direccion" class="form-control" autofocus required value="<?php echo $direccionAseguradora; ?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group">
                                        <div class="input-group-addon"><i class="fa fa-link"></i></div>
                                        <input type="text"  name="url" placeholder="Ingresa link" class="form-control" autofocus required value="<?php echo $pagina; ?>">
                                    </div>
                                </div>

                                 <div class="row" id="load" hidden="hidden">
                                    <div class="col-xs-4 col-xs-offset-4 col-md-2 col-md-offset-5">
                                        <img src="img/load.gif" width="100%" alt="">
                                    </div>
                                    <div class="col-xs-12 center text-accent">
                                        <span>Validando información...</span>
                                    </div>
                                </div>

                            <div class="form-actions form-group"><button type="button" class="btn btn-primary btn-block" id="update">Submit</button></div>
                             <input type="hidden" name="idAseguradora" value="<?php echo $id ?>">
                            </form>
                        </div>
                    </div>
                </div>

            </div>

        </div><!-- .animated -->
    </div><!-- .content -->


