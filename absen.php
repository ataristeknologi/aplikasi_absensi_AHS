<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css"/>
  <script type="text/javascript" src=" https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
  <!-- toastr.css -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.css" rel="stylesheet"/>

<!-- toastr.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.js"></script>

 
  <link rel="stylesheet" href="style.css">
</head>
<body >
  <div class="profile-card">
    <div class="card-header">
      <!--awal data pegawai-->
      <div id="dataPegawai">
      <div class="pic">
        <img src="https://images.unsplash.com/photo-1553386700-d3d43fe5ee95?q=80&w=1335&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D" alt="">
      </div>
      <div class="name" id="namaPegawai"></div>
      <div class="desc" id="jabatan"></div>
      </div>
      <!--akhir data pegawai-->
      <input type="text" id="kodeScan" class="contact-btn" name="kode_scan" value="" />
      <a href="#" class="contact-btn" id="btnScan" >Scan</a>
      <a href="#" class="contact-btn" id="btnAbsen" >Absen</a>
    </div>
    <div class="card-footer">
      <div class="numbers">
        <div class="item">
          <span><div id="clock-wrapper"></div></span>
          JAM MASUK :
        </div>
      </div>
    </div>
  </div>
</body>

</html>
<script type="text/javascript" src="jam.js"></script>
<script type="text/javascript" src="absen.js"></script>