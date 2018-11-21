$(document).ready(function(){
    $(".btn-gender").click(function(){
        $(".ingender").toggle(500);
    }); 

    // Konfirmasi hapus
    $(".btn-hapus").click(function(){
        $( "#konfirmasi-hapus" ).dialog({
          resizable: false,
          height: "auto",
          width: 400,
          modal: true,
          buttons: {
            "Ya": function() {
              $("#frm-hapus").submit()
            },
            "Tidak": function() {
              $( this ).dialog( "close" );
            }
          }
        });
    }); 

});

$( function() {
    $( ".indatepicker" ).datepicker({
        changeMonth: true,
        changeYear: true,
        dateFormat: 'dd-mm-yy'
    });
  });

function reset_btn(){
    document.getElementById("inname").value = "";
    document.getElementById("inemail").value = "";
    document.getElementById("intgl_lahir").value = "";
    document.getElementById("intelepon").value = "";
    document.getElementById("ingender").value = "";
    document.getElementById("inalamat").value = "";
}