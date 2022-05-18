<head>
    <meta charset="utf-8" />
    <title>
        <?php echo APP_NAME ?> | <?php echo $pagina ?>
    </title>
    <meta name="description" content="Sistema de controle de delivery para restaurantes">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!--begin::Web font -->
    <script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.16/webfont.js"></script>
    <script>
        WebFont.load({
            google: {
                "families": ["Poppins:300,400,500,600,700", "Roboto:300,400,500,600,700"]
            },
            active: function() {
                sessionStorage.fonts = true;
            }
        });
    </script>
    <!--end::Web font -->
    <!--begin::Base Styles -->
    <link href="<?php echo base_url('themes/default') ?>/assets/vendors/base/vendors.bundle.css" rel="stylesheet" type="text/css" />
    <link href="<?php echo base_url('themes/default') ?>/assets/demo/default/base/style.bundle.css" rel="stylesheet" type="text/css" />
    <!--end::Base Styles -->
    <link rel="shortcut icon" href="<?php echo base_url('themes/default') ?>/assets/demo/default/media/img/logo/favicon.ico" />

    <style>
        <?php $this->load->view("template/style"); ?>
    </style>

    <!-- begin:Styles da Pagina -->
    <?php
    try {
        if (isset($css)) {
            $this->load->view($css);
        }
    } catch (\Exception $th) {
        echo "Não foi possivel carregar o css";
        return false;
    }
    ?>
    <!-- end::Styles da Pagina -->
</head>