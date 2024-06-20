<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h4 class="mt-4"><?php echo $titulo ?></h4>
            
            <?php if (isset($validation)) { ?>
            <div class="alert alert-danger">
            <?php echo $validation->listErrors(); ?>
            </div>
            <?php } ?>


            <form action="<?php echo base_url(); ?>productos/actualizar" method="POST" autocomplete="off">
                <?php csrf_field(); ?>

                <input type="hidden" id="id" name="id" value="<?php echo $producto['id']; ?>" />

                <div class="form-group">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <label>Codigo</label>
                            <input type="text" value="<?php echo $producto['codigo']; ?>" class="form-control"
                                id="codigo" name="codigo" autofocus required />
                        </div>
                        <div class="col-12 col-sm-6">
                            <label>Nombre</label>
                            <input type="text" value="<?php echo $producto['nombre']; ?>" class="form-control"
                                id="nombre" name="nombre" required />
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <label>Unidad</label>
                            <select class="form-select" id="id_unidad" name="id_unidad" required>
                                <option value="">Seleccione Unidad</option>
                                <?php foreach ($unidades as $unidad) : ?>
                                <option value="<?php echo $unidad['id']; ?>" <?php echo $unidad['id'] == $producto['id_unidad'] ? 'selected' : ''; ?>>
                                    <?php echo $unidad['nombre']; ?>
                                </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="col-12 col-sm-6">
                            <label>Categoria</label>
                            <select class="form-select" id="id_categoria" name="id_categoria" required>
                                <option value="">Seleccione Categoria</option>
                                <?php foreach ($categorias as $categoria) : ?>
                                <option value="<?php echo $categoria['id']; ?>" <?php echo $categoria['id'] == $producto['id_categoria'] ? 'selected' : ''; ?>>
                                    <?php echo $categoria['nombre']; ?>
                                </option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <label>Precio Venta</label>
                            <input type="number" value="<?php echo $producto['precio_venta']; ?>" class="form-control"
                                id="precio_venta" name="precio_venta" required />
                        </div>
                        <div class="col-12 col-sm-6">
                            <label>Precio Compra</label>
                            <input type="number" value="<?php echo $producto['precio_compra']; ?>" class="form-control"
                                id="precio_compra" name="precio_compra" required />
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <label>Stock minimo</label>
                            <input type="number" value="<?php echo $producto['stock_minimo']; ?>" class="form-control"
                                id="stock_minimo" name="stock_minimo" required />
                        </div>
                        <div class="col-12 col-sm-6">
                            <label>Es inventariable</label>
                            <select class="form-select" name="inventariable" id="inventariable" required>
                                <option value="">Seleccione</option>
                                <option value="1"  <?php echo $producto['inventariable'] == 1 ? 'selected' : ''; ?>>Si</option>
                                <option value="0"  <?php echo $producto['inventariable'] == 0 ? 'selected' : ''; ?>>No</option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="form-group mt-3">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <a href="<?php echo base_url(); ?>productos" class="btn btn-primary btn-sm">Regresar</a>
                            <button type="submit" class="btn btn-success ml-2 btn-sm">Guardar</button>
                        </div>
                    </div>
                </div>


            </form>
        </div>
    </main>