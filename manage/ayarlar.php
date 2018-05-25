<?php include("./controller/header.php") ?>

<div>
    <?php include("./controller/sidebar.php") ?>
    <div class="page-container">
        <?php include("./controller/navbar.php") ?>
        <section class="main-content bc-gray">
            <div class="row gap-20">
                <div class="col-md-12">
                    <div class="alert alert-danger" role="alert">
                        <div class="p-20">       
                        <h4 class="alert-heading">Ayarlar</h4>
                        <hr>
                        <p class="mb-0">Bu alanda ki içerikleri değiştirirken lütfen dikkatli olunuz.</p>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-6">  
                    <div class="p-20 bg-white bd">
                        <form  id="settings"  method="post">
                            <label for="">UserName</label>
                            <input type="text" name="username" id="username" class="form-control" value="username">
                            <label for="">Password</label>
                            <input type="password" name="password" id="password" class="form-control" value="username">
                            <label for="">Sayfa Başlığı(Title)</label>
                            <input type="text" name="title" id="title" class="form-control" value="title">
                            <label for="">Sayfa Başlığı(Title)</label>
                            <input type="text" name="title" id="title" class="form-control" value="title">
                            <label>Sayfa Açıklama (Description)</label>
                            <input type="text" name="description" id="description" class="form-control" value="description">
                            <label>Anahtar Kelimeler (Keywords)</label>
                            <input type="text" name="keywords" id="keywords" class="form-control" value="keywords">
                            <label>Site Logo</label>
                            <input type="file" id="logo" name="logo" class="form-control">
                            <br/>
                            <button class="btn btn-primary btn-lg btn-block btn-300" type="submit">Kaydet</button>
                        </form>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="p-20 bg-white bd">
                        <label>Bakım Modu</label>
                        <div class="form-group form-check">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">Değiştir</label>
                        </div> 
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