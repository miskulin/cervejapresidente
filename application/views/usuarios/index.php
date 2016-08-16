<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="description" content="">
        <meta name="author" content="">
        <title>login</title>
        <!-- Bootstrap Core CSS -->
        <link href="<?= base_url('assets/css/bootstrap.min.css') ?>" rel="stylesheet">
        <!-- Custom CSS -->
        <link href="<?= base_url('assets/css/admin-style.css') ?>" rel="stylesheet">
        <!-- Custom Fonts -->
        <link href="<?= base_url('assets/font-awesome/css/font-awesome.min.css') ?>" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-md-offset-4">
                    <div class="login-panel panel panel-default">
                        <div class="panel-heading text-center">
                            <?= img('assets/img/logo.png', FALSE, array('class' => 'logo-login')); ?>
                        </div>
                        <div class="panel-body">
                            <?php
                            if (($this->session->flashdata('danger'))) {
                                echo '<div class="alert alert-danger">' . $this->session->flashdata('danger') . '</div>';
                            }
                            ?>
                            <?php
                            echo form_open('usuarios/usuarios/login', array('rule' => 'form', 'class' => 'form_login'));
                            echo form_label('Nome');
                            echo form_input(array('class' => 'form-control', 'name' => 'nome', 'id' => 'nome', set_value('nome'), 'autofocus' => 'true'));
                            echo form_label('Senha');
                            echo form_input(array('class' => 'form-control', 'type' => 'password', 'name' => 'senha', 'id' => 'senha', set_value('senha')));
                            echo '<br>';
                            echo form_button(array('class' => 'btn btn-azul', 'type' => 'submit', 'content' => 'Entrar'));
                            echo form_close();
                            ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>
