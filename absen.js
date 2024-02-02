
$(document).on('click', '#btnScan', function(){
	var id = $('#kodeScan').val();
	$.ajax({
		type: 'POST',
		url: "data_pegawai.php",
		data: {id:id},			
		success: function(data) {				
			//setelah simpan data, update data terbaru;
			console.log(data);	
            myObj = JSON.parse(data)
			//$("#idPegawai").html(data['id_pegawai']);
			$("#jabatan").html(myObj.jabatan);
			$("#namaPegawai").html(myObj.nama_pegawai);
			//$("#foto").attr("src",myObj.foto);
		}
	});
});