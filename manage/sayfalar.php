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
                                <h5>Sayfalar</h5>
                            </div>
                            
                        </div>
                    </div>
                </div>

                <div class="col-md-12">
                    <div class="bd p-20 bg-white">
                        <form action="" class="needs-validation" novalidate>
                            <label for="firstName">Sayfa Başlığı</label>
                            <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                            <label for="firstName">İçerik</label>
                            <textarea></textarea>
                            <hr class="mb-4">
                            <button class="btn btn-danger btn-lg btn-block btn-300" type="submit">Sayfa Ekle</button>
                        </form>
                    </div>
                </div>
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