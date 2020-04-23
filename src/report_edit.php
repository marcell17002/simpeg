<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/sreport_edit.css">
  <script src='https://kit.fontawesome.com/a076d05399.js'></script>
</head>
<body>
<div class="konten">
  <div class="sidebar">
    <div clas="container">
      <div class="row">
        <div class="col-md-6">
            <img src="../assets/img/avatar.png" style="width: 90% ; height : 90%;margin-top:15%;margin-left:10%;margin-bottom:20%">				
        </div>
        <div class="col-md-6">
          <h3 style="padding-top:20%"> Hello, </h3>
          <h5 style="padding-bottom:5%"> Admin </h5>
        </div>
      </div>
    </div>
    
    <a class="active" href="./rteport.php"><i class='far fa-credit-card' style='font-size:20px;margin-right:20px;'></i>Data Pegawai</a>
    <a href="./report-gaji"><i class='fas fa-money-check-alt' style='font-size:20px;margin-right:20px'></i> Gaji Pegawai</a>
    <div class="logout">
      <a href="./login.php"><i class="fas fa-sign-out-alt" style='font-size:20px;margin-right:20px'></i>Log Out</a>
    </div>
  </div>

  <div class="content">
    <h2 style="text-align:center">Update Data Pegawai</h2>
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-8">
          <div class="content-isi">
          <form  method="post"  action="insert.php"> 
              <h3 style="padding-top:3%">Data Pribadi</h3>

              <div class="form-row">
                  <div class="form-group col-md-3">
                    <label for="inputEmail4">Nama Lengkap</label>
                  </div> 
                  <div class="form-group col-md-9">
                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Nama Lengkap">
                  </div>
              </div>

              <div class="form-row">
                  <div class="form-group col-md-3">
                      <label for="text"> Jenis kelamin</label>
                  </div>
                  <div class="form-group col-md-9">
                      <select id="kelamin" name="kelamin" class="form-control">
                          <option>Perempuan</option>
                          <option>Laki-Laki</option>
                      </select>
                  </div>
              </div>

              <div class="form-row">
                  <div class="form-group col-md-3">
                      <label for="tempat_lahir">Tempat Lahir</label>
                  </div>
                  <div class="form-group col-md-9">
                      <input type="text" class="form-control" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat lahir">
                  </div>
              </div>
              
              <div class="form-row">
                  <div class="form-group col-md-3 ">
                      <label for="tanggal_lahir">Tanggal Lahir</label>
                  </div>
                  <div class="form-group col-md-9 ">
                      <input type="date"  class="form-control id="tanggal_lahir" style="width:40%"name="tanggal_lahir">
                  </div>
              </div>

              <div class="form-row">
                <div class="form-group col-md-3">
                      <label for="inputAddress">No. HP</label>
                </div>
                <div class="form-group col-md-9">
                      <input type="text" class="form-control" id="telepon" name="telepon" placeholder="+62 ..">
                </div>
              </div>
              
              <div class="form-row">
                  <div class="form-group col-md-3">
                      <label for="inputAddress">Email</label>
                  </div>
                  <div class="form-group col-md-9">
                      <input type="text" class="form-control" id="alamat" name="alamat" placeholder="1234 Main St">
                  </div>
              </div>
              <div class="form-row">
                  <div class="form-group col-md-3">
                    <label for="inputAddress">Alamat</label>
                  </div>
                  <div class="form-group col-md-9">
                      <input type="text" class="form-control" id="telepon" name="email" placeholder="...@gmail">
                  </div>
              </div>
              <div class="form-row">
                  <div class="form-group col-md-3">
                      <label for="inputAddress">Jabatan</label>
                  </div>
                  <div class="form-group col-md-9">
                      <select id="kelas" name="kelas" class="form-control">
                          <option selected>Manager</option>
                          <option>Sekretaris</option>
                          <option>Human Relation</option>
                          <option>Tech</option>
                          <option>Marketing</option>
                          <option>Keuangan</option>
                          <option>Office</option>
                      </select>
                  </div>
              </div>
              <div class="form-row">
                  <div class="form-group col-md-3">
                      <label for="inputAddress">Pajak</label>
                  </div>
                  <div class="form-group col-md-9">
                      <input type="text" class="form-control" id="pajak" name="pajak" placeholder=".....">
                  </div>
              </div>
              <div class="form-row">
                  <div class="form-group col-md-3">
                      <label for="inputAddress">Bpjs</label>
                  </div>
                  <div class="form-group col-md-9">
                      <input type="text" class="form-control" id="pajak" name="bpjs" placeholder=".....">
                  </div>
              </div>
              <div class="form-row">
                  <div class="form-group col-md-3">
                      <label for="inputAddress">Denda</label>
                  </div>
                  <div class="form-group col-md-9">
                      <input type="text" class="form-control" id="pajak" name="denda" placeholder=".....">
                  </div>
              </div>
              <div class="form-row">
              <div class="form-group col-md-12"></div>
              </div>
              <div class="form-row">
                  <div class="form-group col-md-3">
                  <label for="inputEmail4">Jumlah Tanggungan ( anak dan istri )</label>
                  </div>
                  <div class="form-group col-md-9">
                      <input type="text" class="form-control" id="pajak" name="denda" placeholder=".....">
                  </div>
              </div>
              <br>
              <div style="display:flex; justify-content:flex-end; width:100%; padding:0;">
                <a href="./report.php"><button type="button" class="btn btn-primary" style="margin-top:5%"> Update</button></a>
              </div>
          </form>
          </div>
        <div class="col-md-4">
        <img src="../assets/img/avatar.png" style="width: 90% ; height : 90%;margin-top:15%;margin-left:10%;margin-bottom:20%">		
        </div>
      </div>
  </div>
</div>

</body>
</html>

