<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
<style>
    #modal-login{
            
    }
</style>

<div id="modal-login">    
        <div class="close-modal-login d-flex justify-content-end px-5 pt-5">
            <div class="my-auto pt-2 me-2">Close</div>
            <div class="my-auto"><i class="fa-solid fa-xmark small"></i></div>
        </div>    
    <section id="login" class="pt-lg-5">
        <div class="row justify-content-center h-100">
            <div class="col-sm-12 col-md-10 col-lg-5 my-auto px-4 mt-md-5">
                <div class="card p-3 shadow border-0 br-20">
                    <div class="card-body">
                        <div class="text-center h4 my-4">
                            User Login
                        </div>
                        <div class="message-register success my-3"></div>
                        <form action="#" method="POST" autocomplete="off" id="form-login">
                            <?= csrf_field(); ?>
                            <div class="mb-3">
                                <input id="email" type="text" class="form-control" name="email" placeholder="Email" autofocus>
                                <div class="invalid-feedback email"></div>
                            </div>
                            <div class="mb-3">
                                <input id="password" type="password" class="form-control" name="password" placeholder="Password">
                                <div class="invalid-feedback password"></div>                                    
                            </div>
                            <div class="mb-3">
                                <button id="btnLogin" type="button" class="btn btn-login w-100" name="login">LOGIN</button>
                            </div>                                
                        </form>                            
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>
<script src="/js/auth.js"></script>
<?= $this->endSection(); ?>