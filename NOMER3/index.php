<!DOCTYPE html>
<html lang="en">

<head>
  <title>Mari Belajar Coding - Wilayah Adminstrasi Indonesia</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <link rel="stylesheet" href="asset/select2-4.0.6-rc.1/dist/css/select2.min.css">
  <script src="asset/jquery/jquery-3.3.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  <script src="asset/select2-4.0.6-rc.1/dist/js/select2.min.js"></script>
  <script src="asset/select2-4.0.6-rc.1/dist/js/i18n/id.js"></script>
  <script src="asset/js/app.js"></script>
  <?php
  include("koneksi.php");
  ?>
</head>

<body>
  <div class="container">
    <br>
    <div class="row mt-5 pt-5 justify-content-center">
      <div class="col-md-8 col-sm-8">
        <div class="card">
          <div class="card-header"><b>ComboBox Bertingkat</b></div>
          <div class="card-body">
            <form class="form-horizontal" method="post">
              <div class="input-group">
                <label class="control-label col-sm-3">Provinsi:</label>
                <div class="col-sm-9">
                  <?php
                  $sql_provinsi = mysqli_query($con, "SELECT * FROM provinsi ORDER BY name ASC");
                  ?>
                  <select class="form-control" name="" id="provinsi">
                    <option></option>
                    <?php
                    while ($rs_provinsi = mysqli_fetch_assoc($sql_provinsi)) {
                      echo '<option value="' . $rs_provinsi['id'] . '">' . $rs_provinsi['name'] . '</option>';
                    }
                    ?>
                  </select>
                </div>
              </div>
              <div class="input-group">
                <label class="control-label col-sm-3">Kota/Kabupaten:</label>
                <div class="col-sm-9">
                  <select class="form-control" name="" id="kota">
                    <option></option>
                  </select>
                </div>
              </div>
              <div class="input-group">
                <label class="control-label col-sm-3">Kecamatan:</label>
                <div class="col-sm-9">
                  <select class="form-control" name="" id="kecamatan">
                    <option></option>
                  </select>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>
  <footer class="bg-dark text-white text-center pb-3 fixed-bottom">
    <p>created with Love by <a href="" class="fw-bold text-white">Ahmad Fikri Husaini</a></p>
  </footer>
</body>

</html>
