<?php include("./controller/header.php") ?>

<div>
    <?php include("./controller/sidebar.php") ?>
    <div class="page-container">
        <?php include("./controller/navbar.php") ?>
        <section class="main-content bc-gray">
            
            <div class="row gap-20">
                <div class="col-md-12">
                    <div class="bd p-20 bg-white">
                        <h5>Kategoriler</h5>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="bd bg-white p-20">
                        <form id="category" method="post">
                            <label for="category">Kategori Adı</label>
                            <input type="text" class="form-control" id="categoryName" name="categoryName" placeholder="" value="" required="">
                            
                            <hr class="mb-4">
                            <button class="btn btn-primary btn-lg btn-block" type="submit">Kaydet</button>
                        </form>
                    </div>
                </div>

                <div class="col-md-6">
                    <div class="bd p-20 bg-white">
                        <p><b>Mevcut Kategoriler</b></p>
                        <ul class="list-group">
                            <li class="list-group-item">Cras justo odio</li>
                            <li class="list-group-item">Dapibus ac facilisis in</li>
                            <li class="list-group-item">Morbi leo risus</li>
                            <li class="list-group-item">Porta ac consectetur ac</li>
                            <li class="list-group-item">Vestibulum at eros</li>
                        </ul>
                    </div>
                </div>

                <!-- Modal -->
                <div class="modal fade" id="contactModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-body text-center">
                            Değişiklikler başarıyla kaydedilmiştir.
                        </div>
                        <div class="modal-footer text-center">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Kapat</button>
                        </div>
                        </div>
                    </div>
                 </div>
                <!-- modal finish -->
            </div>
            
        </section>
        <?php include("./controller/bottom.php") ?>
    </div>
</div>

<script>
      // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
    'use strict';

    window.addEventListener('load', function() {
        // Fetch all the forms we want to apply custom Bootstrap validation styles to
        var forms = document.getElementsByClassName('needs-validation');

        // Loop over them and prevent submission
        var validation = Array.prototype.filter.call(forms, function(form) {
        form.addEventListener('submit', function(event) {
            if (form.checkValidity() === false) {
            event.preventDefault();
            event.stopPropagation();
            }
            form.classList.add('was-validated');
        }, false);
        });
    }, false);
    })();
</script>



<?php include("./controller/footer.php") ?>