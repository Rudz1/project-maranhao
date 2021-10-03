<div  class="container">
    <div  class="row ">
        <div class="col-lg-7 mx-auto">
            <div id="contact" class="card mt-2 mx-auto p-4 ">
                <div class="card-body ">
                    <div  class="container">
                        <form   id="contact-form" role="form" method="POST" enctype="multipart/form-data" action="<?php echo \App\Config\Config::url('/send')?>" >
                            <div class="controls">
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_name">Nome</label> <input id="form_name" type="text" name="name" class="form-control" placeholder="Digite Seu Primeiro Nome" required="required" data-error="Firstname is required."> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_lastname">Sobrenome</label> <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Digite Seu Sobrenome" required="required" data-error="Lastname is required."> </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_email">Email</label> <input id="form_email" type="email" name="email" class="form-control" placeholder="Digite Seu Email" required="required" data-error="Valid email is required."> </div>
                                    </div>

                                </div>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group"> <label for="form_message">Menssagem</label> <textarea id="form_message" name="message" class="form-control" placeholder="Digite Sua Mensagem" rows="4" required="required" data-error="Please, leave us a message."></textarea> </div>
                                </div>
                                <div class="col-md-12"> <input type="submit" class="btn btn-success btn-send pt-2 btn-block " value="Enviar Mensagem"> </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>