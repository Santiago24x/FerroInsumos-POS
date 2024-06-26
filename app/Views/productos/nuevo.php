<div id="layoutSidenav_content">
    <main>
        <div class="container-fluid px-4">
            <h4 class="mt-4"><?php echo $titulo; ?></h4>

            <?php if (isset($validation)) { ?>
            <div class="alert alert-danger">
                <?php echo $validation->listErrors(); ?>
            </div>
            <?php } ?>

            <form action="<?php echo base_url(); ?>productos/insertar" method="POST" autocomplete="off">
                <?php echo csrf_field(); ?>
                <div class="form-group">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <label>Codigo</label>
                            <input type="text" class="form-control" id="codigo" name="codigo" value="<?php echo set_value('codigo'); ?>" autofocus required />
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
                            <label>Unidad</label>
                            <select class="form-select" id="id_unidad" name="id_unidad" required>
                                <option value="">Seleccione Unidad</option>
                                <?php foreach ($unidades as $unidad) : ?>
                                <option value="<?php echo $unidad['id']; ?>" <?php echo set_select('id_unidad', $unidad['id']); ?>>
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
                                <option value="<?php echo $categoria['id']; ?>" <?php echo set_select('id_categoria', $categoria['id']); ?>>
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
                            <input type="number" class="form-control" id="precio_venta" name="precio_venta" value="<?php echo set_value('precio_venta'); ?>" required />
                        </div>
                        <div class="col-12 col-sm-6">
                            <label>Precio Compra</label>
                            <input type="number" class="form-control" id="precio_compra" name="precio_compra" value="<?php echo set_value('precio_compra'); ?>" required />
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="row">
                        <div class="col-12 col-sm-6">
                            <label>Stock minimo</label>
                            <input type="number" class="form-control" id="stock_minimo" name="stock_minimo" value="<?php echo set_value('stock_minimo'); ?>" required />
                        </div>
                        <div class="col-12 col-sm-6">
                            <label>Es inventariable</label>
                            <select class="form-select" name="inventariable" id="inventariable" required>
                                <option value="">Seleccione</option>
                                <option value="1" <?php echo set_select('inventariable', '1'); ?>>Si</option>
                                <option value="0" <?php echo set_select('inventariable', '0'); ?>>No</option>
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

