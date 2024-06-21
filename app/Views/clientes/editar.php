<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h4 class="mt-4"><?php echo $titulo; ?></h4>
            
            <?php if (isset($validation)) { ?>
            <div class="alert alert-danger">
                <?php echo $validation->listErrors(); ?>
            </div>
            <?php } ?>

            <form action="<?php echo base_url(); ?>clientes/actualizar" method="POST" autocomplete="off">
                <?php csrf_field(); ?>

                <input type="hidden" id="id" name="id" value="<?php echo $cliente['id']; ?>" />

                <div class="form-group">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <label for="cedula">Cedula/NIT</label>
                            <input type="text" class="form-control" id="cedula" name="cedula" value="<?php echo $cliente['cedula']; ?>" autofocus required />
                        </div>
                        <div class="col-12 col-sm-6">
                            <label for="nombre">Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $cliente['nombre']; ?>" required />
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <label for="direccion">Direccion</label>
                            <input type="text" class="form-control" id="direccion" name="direccion" value="<?php echo $cliente['direccion']; ?>" />
                        </div>
                        <div class="col-12 col-sm-6">
                            <label for="telefono">Telefono</label>
                            <input type="text" class="form-control" id="telefono" name="telefono" value="<?php echo $cliente['telefono']; ?>" />
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <label for="correo">Correo</label>
                            <input type="email" class="form-control" id="correo" name="correo" value="<?php echo $cliente['correo']; ?>" required />
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

