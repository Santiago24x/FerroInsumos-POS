<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h4 class="mt-4"><?php echo $titulo ?></h4>

            <?php if (isset($validation)) { ?>
            <div class="alert alert-danger">
            <?php echo $validation->listErrors(); ?>
            </div>
            <?php } ?>

            <form action="<?php echo base_url(); ?>unidades/insertar" method="POST" autocomplete="off">
            
            <?php csrf_field(); ?>

                <div class="form-group">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <label>Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value=" <?php echo set_value('nombre'); ?> " autofocus required />
                        </div>
                        <div class="col-12 col-sm-6">
                            <label>Abreviatura</label>
                            <input type="text" class="form-control" id="nombre_corto" name="nombre_corto" value=" <?php echo set_value('nombre_corto'); ?> " required />
                        </div>
                    </div>
                </div>

                <div class="form-group mt-3">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <a href="<?php echo base_url(); ?>unidades" class="btn btn-primary btn-sm">Regresar</a>
                            <button type="submit" class="btn btn-success ml-2 btn-sm">Guardar</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </main>

