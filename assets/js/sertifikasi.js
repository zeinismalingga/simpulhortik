$(document).ready(function(){

   var base_url = window.location.origin + "/simbulhortik";

    $('#pilih_komoditas').change(function(){
        var id= $('#pilih_komoditas').val();
        $.ajax({
            url : base_url+ "/sertifikasi_apbd/get_varietas",
            method : "POST",
            data : {id: id},
            async : false,
            dataType : 'json',
            success: function(data){
                var html = '';
                var i;
                for(i=0; i<data.length; i++){
                    html += '<option value=' +data[i].id_varietas +'>'+data[i].nama_varietas+'</option>';
                }
                $('#pilih_varietas').html(html);                   
            }
        });

    });

    $('#pilih_jenis').change(function(){
        var id= $('#pilih_jenis').val();
        $.ajax({
            url : base_url+ "/cek_mutu_pangan/get_varietas",
            method : "POST",
            data : {id: id},
            async : false,
            dataType : 'json',
            success: function(data){
                var html = '';
                var i;
                for(i=0; i<data.length; i++){
                    html += '<option value=' +data[i].id_varietas +'>'+data[i].nama_varietas+'</option>';
                }
                $('#pilih_varietas').html(html);                   
            }
        });

    });

    $('#pilih_kota').change(function(){
        var id= $('#pilih_kota').val();
        $.ajax({
            url : base_url+ "/sertifikasi_apbd/get_kecamatan",
            method : "POST",
            data : {id: id},
            async : false,
            dataType : 'json',
            success: function(data){
                var html = '';
                var i;
                for(i=0; i<data.length; i++){
                    html += '<option value=' +data[i].id_kecamatan +'>'+data[i].nama_kecamatan+'</option>';
                }
                $('#pilih_kecamatan').html(html);                   
            }
        });

    });

    $('#perbanyakan_benih').change(function(){
        var biji = ['14', '13', '12', '8'];
        var anakan = ['10', '4','5','9'];
        var okulasi = ['1','3'];

        var isi = $('#perbanyakan_benih').val();

        if(biji.includes(isi)){
            $('#biji').css("display", "block");
            $('#anakan').css("display", "none");
            $('#okulasi').css("display", "none");
        }
        if(anakan.includes(isi)){
            $('#biji').css("display", "none");
            $('#anakan').css("display", "block");
            $('#okulasi').css("display", "none");
        }
        if(okulasi.includes(isi)){
            $('#biji').css("display", "none");
            $('#anakan').css("display", "none");
            $('#okulasi').css("display", "block");
        }
        
    });
   


});