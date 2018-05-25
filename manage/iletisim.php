<?php include("./controller/header.php") ?>

<div>
    <?php include("./controller/sidebar.php") ?>
    <div class="page-container">
        <?php include("./controller/navbar.php") ?>
        <section class="main-content bc-gray">
            <div class="row gap-20">
                <div class="col-md-12 ">
                    <div class="bd p-20 bg-white">
                        <div class="row">
                            <div class="col-md-10">
                                <h5>İletişim Bilgileri</h5>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="bd p-20 bg-white">
                        <form  id="contact"  method="post">
                            <label for="eposta">E Posta</label>
                            <input type="text" class="form-control" id="eposta" name="eposta" placeholder="" value="abc@gmail.com">
                            <label for="phone">Telefon</label>
                            <input type="text" class="form-control" id="phone"  name="phone" placeholder="" value="05555555555" >
                            <label for="adress">Adres</label>
                            <textarea name="adress" id="adress" cols="30" rows="10">asdf</textarea>
                            <label for="map">Harita</label>
                            <input type="text" name="map" class="form-control" id="map" placeholder="" value="latitude   " >
                            <hr class="mb-4">
                            <button class="btn btn-danger btn-lg btn-block btn-300">Kaydet</button>
                        </form>
                    </div>
                </div>

            </div>
            <!-- modal -->

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