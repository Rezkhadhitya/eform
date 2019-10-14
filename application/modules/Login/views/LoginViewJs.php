<script>
$(document).ready(function(){

   

    $('#btnLogin').click(function(){
        $.ajax({
        url : '<?php echo site_url("$this->controller/CekLogin") ?>',
        data : new FormData($('#frmLogin')[0]),
        contentType: false,
        processData: false,
        type : 'post',
        dataType : 'json',
        success : function(obj){
            window.swal({
                text: "Mohon Tunggu",
                buttons: false,
                closeOnEsc: false,
                allowOutsideClick: false,
                imageAlt: 'Loading Imge',
                animation: false
            });
            
            if(obj.error==false) {
                    window.swal("Informasi!", obj.message, "success").then((value) => {
                    location.href=(obj.url);
                        });
                }
                else {
                    window.swal('Error', obj.message, 'error', {
                        className: "red-bg",
                    });
                }
            }
        });
    });
});
</script>