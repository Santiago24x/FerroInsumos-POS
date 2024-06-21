<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h4 class="mt-4"><?php echo $titulo; ?></h4>

            <?php if (isset($validation)) { ?>
            <div class="alert alert-danger">
                <?php echo $validation->listErrors(); ?>
            </div>
            <?php } ?>

            <form action="<?php echo base_url(); ?>clientes/insertar" method="POST" autocomplete="off">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <label>Cedula/NIT</label>
                            <input type="text" class="form-control" id="cedula" name="cedula" value="<?php echo set_value('cedula'); ?>" autofocus required />
                        </div>
                        <div class="col-12 col-sm-6">
                            <label>Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo set_value('nombre'); ?>" required />
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <label>Direccion</label>
                            <input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo set_value('direccion'); ?>"  />
                        </div>
                        <div class="col-12 col-sm-6">
                            <label>Telefono</label>
                            <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo set_value('telefono'); ?>"  />
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <label>Correo</label>
                            <input type="email" class="form-control" id="correo" name="correo" value="<?php echo set_value('correo'); ?>" required />
                        </div>
                    </div>
                </div>

                <div class="form-group mt-3">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <a href="<?php echo base_url(); ?>clientes" class="btn btn-primary btn-sm">Regresar</a>
                            <button type="submit" class="btn btn-success ml-2 btn-sm">Guardar</button>
                        </div>
                    </div>
                </div>
            </form>
        </div>
    </main>

