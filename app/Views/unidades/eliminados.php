
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h4 class="mt-4"><?php echo $titulo ?></h4>
                       
                        <div>
                            <p>
                                <a href="<?php echo base_url(); ?>unidades" class="btn btn-warning btn-sm">Regresar</a>
                            </p>

                        </div>
        
                            <div class="card-body">
                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>#</th>
                                            <th>Nombre</th>
                                            <th>Abreviatura</th>
                                            <th></th>
                                            
                                       
                                        </tr>
                                    </thead>
                                  
                                    <tbody>
                                        <?php foreach ($datos as $dato) : ?>
                                            <tr>
                                                <td><?php echo $dato['id'] ?></td>
                                                <td><?php echo $dato['nombre'] ?></td>
                                                <td><?php echo $dato['nombre_corto'] ?></td>

                                                <td><a href="<?php echo base_url(); ?>unidades/reingresar/<?php echo $dato['id'] ?>" class="btn btn-secondary btn-sm"><i class="fa-solid fa-circle-up"></i></a></td>

                                                

                                            </tr>

                                        <?php endforeach; ?>


                                    </tbody>
                                </table>
                            </div>
                        
                    </div>
                </main>
 
