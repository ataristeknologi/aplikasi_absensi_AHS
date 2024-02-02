
setInterval(function() {
    var date = new Date();
    $('#clock-wrapper').html(
        date.getHours() + ":" + date.getMinutes() + ":" + date.getSeconds()
        );
}, 500);

function awal(){
    $('#dataPegawai').hide();
    $('#btnAbsen').hide();
}
$(document).ready(function() {
    awal();
});

$('#btnScan').click(function() {
  $('#dataPegawai').show();
  $('#kodeScan').hide();
  $('#btnScan').hide();
  $('#btnAbsen').show();
});

$('#btnAbsen').click(function() {
    toastr.options = {
        "debug": false,
        "positionClass": "toast-bottom-full-width",
        "onclick": null,
        "fadeIn": 300,
        "fadeOut": 1000,
        "timeOut": 5000,
        "extendedTimeOut": 1000
      }
    toastr.warning('Selamat bekerja jangan lupa bahagia', 'Absen Berhasil,');
    $('#kodeScan').show();
    $('#btnScan').show();
    awal();
});