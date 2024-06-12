<footer class="py-4 bg-light mt-auto">
                    <div class="container-fluid px-4">
                        <div class="d-flex align-items-center justify-content-between small">
                            <div class="text-muted">Copyright &copy; SMGM Consulting <?php echo date('Y'); ?></div>
                            
                        </div>
                    </div>
                </footer>
            </div>
        </div>
        <script src="<?php echo base_url() ?>js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url() ?>js/scripts.js"></script>
        <script src="<?php echo base_url() ?>js/simple-datatables.min.js" crossorigin="anonymous"></script>
        <script src="<?php echo base_url() ?>js/datatables-simple-demo.js"></script>
        
        
        // Modal de confirmación de eliminacion 
        <script>
        document.addEventListener('DOMContentLoaded', function () {
            var modalConfirma = document.getElementById('modal-confirma');
            modalConfirma.addEventListener('show.bs.modal', function (event) {
            var button = event.relatedTarget; // Botón que activa el modal
            var recipient = button.getAttribute('data-href'); // Extrae la información de data-href
            var modalBodyInput = modalConfirma.querySelector('.btn-ok'); // Encuentra el botón de confirmación
            modalBodyInput.setAttribute('href', recipient); // Actualiza el enlace del botón de confirmación
            });

            var confirmButton = document.querySelector('.btn-ok');
            confirmButton.addEventListener('click', function(event) {
            var href = this.getAttribute('href');
            if (href) {
                window.location.href = href; // Redirige al enlace al hacer clic
            }
            });
        });
        </script>
    </body>
</html>