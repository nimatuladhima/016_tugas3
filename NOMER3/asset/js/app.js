$( document ).ready(function() {
	//untuk memanggil plugin select2
    $('#provinsi').select2({
	  	placeholder: 'Pilih Provinsi',
	  	language: "id"
	});
	$('#kota').select2({
	  	placeholder: 'Pilih Kota/Kabupaten',
	  	language: "id"
	});
	$('#kecamatan').select2({
	  	placeholder: 'Pilih Kecamatan',
	  	language: "id"
	});


	//saat pilihan provinsi di pilih maka mengambil data di data-wilayah menggunakan ajax
	$("#provinsi").change(function(){
	      var id_provinces = $(this).val(); 
	      $.ajax({
	         type: "POST",
	         dataType: "html",
	         url: "data-wilayah.php?jenis=kota",
	         data: "id_provinces="+id_provinces,
	         success: function(){
	            getAjaxKota();                                                        
	         }
	      });                    
     });  

	$("#kota").change(getAjaxKota);
     function getAjaxKota(){
          var id_regencies = $("#kota").val();
          $.ajax({
             type: "POST",
             dataType: "html",
             url: "data-wilayah.php?jenis=kecamatan",
             data: "id_regencies="+id_regencies,
             success: function(){
               getAjaxKecamatan();                                                    
             }
          });
     }
});