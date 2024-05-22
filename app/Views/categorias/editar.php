<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h4 class="mt-4"><?php echo $titulo ?></h4>

            <form action="<?php echo base_url(); ?>categorias/actualizar" method="POST" autocomplete="off">

                <input type="hidden" id="id" name="id" value="<?php echo $datos['id']; ?>" />

                <div class="form-group">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <label>Nombre</label>
                            <input type="text" class="form-control" id="nombre" name="nombre" value="<?php echo $datos['nombre']; ?>" autofocus required />
                        </div>
                        
                    </div>
                </div>

                <div class="form-group mt-3">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <a href="<?php echo base_url(); ?>categorias" class="btn btn-primary btn-sm">Regresar</a>
                            <button type="submit" class="btn btn-success ml-2 btn-sm">Guardar</button>
                        </div>
                    </div>
                </div>

            </form>
        </div>
    </main>

