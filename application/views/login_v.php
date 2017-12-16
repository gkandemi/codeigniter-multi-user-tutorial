<!doctype html>
<html lang="tr">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <link rel="stylesheet" href="<?php echo base_url("assets/css/bootstrap.min.css"); ?>">
</head>
<body>

<h3 class="text-center">Giriş</h3>
<hr>

<div class="container">
    <div class="row">
        <div class="col-md-6 well col-md-offset-3">
            <form action="<?php echo base_url("giris-yap"); ?>">
                <div class="form-group">
                    <label>E-posta Adresiniz</label>
                    <input type="email" name="eposta" class="form-control" placeholder="E-posta">
                </div>
                <div class="form-group">
                    <label>Şifre</label>
                    <input type="password" name="sifre" class="form-control" placeholder="Şifre">
                </div>
                <button type="submit" class="btn btn-primary btn-block">Giriş</button>
            </form>

        </div>
    </div>
</div>

</body>
</html>