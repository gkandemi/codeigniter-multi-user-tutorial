<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Anasayfa</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
</head>
<body>

<nav class="navbar navbar-inverse">
    <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="#"><?php echo $user->full_name; ?></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">

            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">İşlemler <span class="caret"></span></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo base_url("cikis/" . md5($user->email)); ?>">Çıkış</a></li>
                        <li><a target="_blank" href="<?php echo base_url("giris"); ?>">Farklı bir hesap ile oturum aç</a></li>
                    </ul>
                </li>
            </ul>

        </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
</nav>

<div class="container">
    <div class="row">
        <div class="col-md-6 well col-md-offset-3">

            <h4>Eklediğiniz Ürünler</h4>

            <table class="table table-hover table-striped table-bordered">
                <thead>
                    <th>#id</th>
                    <th>Ürün Adı</th>
                </thead>
                <tbody>
                    <?php foreach ($products as $product){ ?>

                        <tr>
                            <td>#<?php echo $product->id; ?></td>
                            <td><?php echo $product->product_name; ?></td>
                        </tr>

                    <?php } ?>
                </tbody>
            </table>

        </div>
    </div>
</div>


<script src="<?php echo base_url("assets/js/jquery-3.2.1.min.js"); ?>"></script>
<script src="<?php echo base_url("assets/js/bootstrap.min.js"); ?>"></script>
</body>
</html>