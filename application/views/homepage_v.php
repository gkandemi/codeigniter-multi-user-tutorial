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
            <a class="navbar-brand" href="#">gKandemir</a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav pull-right">
                <li><a href="#">Çıkış</a></li>
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
                    <tr>
                        <td>#1</td>
                        <td>Monitör</td>
                    </tr>
                    <tr>
                        <td>#1</td>
                        <td>Monitör</td>
                    </tr>
                    <tr>
                        <td>#1</td>
                        <td>Monitör</td>
                    </tr>
                    <tr>
                        <td>#1</td>
                        <td>Monitör</td>
                    </tr>
                    <tr>
                        <td>#1</td>
                        <td>Monitör</td>
                    </tr>

                </tbody>
            </table>

        </div>
    </div>
</div>

</body>
</html>