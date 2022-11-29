<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Mail Gönderme</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
  </head>
  <body>
    <h1 style="text-align: center;">İletişim Formu  </h1>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <form action="islem.php" method="POST">
 <div class="container">
    <div class="row justify-content-center">
        <div class="col-md-7 col-lg-5">
  <div class="mb-3">
    <label  class="form-label">Ad</label>
    <input type="text" name="ad" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div>
  <label  class="form-label">Soyad</label>
    <input type="text" name="soyad" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
    <div>
  <label class="form-label">Email</label>
    <input type="email" name="eposta" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div>
  <label class="form-label">Telefon</label>
    <input type="tel" name="tel" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div>
  <label class="form-label">Yaşadığınız Şehir</label>
    <input type="text" name="sehir" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
  </div>
  <div class="mb-3">
  <label for="floatingTextarea2">Mesajınız</label>
  <textarea class="form-control" name="mesaj" id="floatingTextarea2" style="height: 100px"></textarea>
</div>
<div>
  <button type="submit" name="gonder" class="btn btn-success">Gönder</button>
  </div>

  </div>
  </div>
  </div>
</form>

</body>
</html>