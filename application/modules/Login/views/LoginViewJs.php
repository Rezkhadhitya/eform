<script>
$(document).ready(function(){

    window.swal({
                title: "Proses...",
                text: "Mohon Tunggu",
                imageUrl: 'https://unsplash.it/400/200',
                imageWidth: 400,
                imageHeight: 200,
                buttons: false,
                allowOutsideClick: false,
                imageAlt: 'Loading Imge',
                animation: false
            });

    $('#btnLogin').click(function(){
        $.ajax({
        url : '<?php echo site_url("$this->controller/CekLogin") ?>',
        data : new FormData($('#frmLogin')[0]),
        contentType: false,
        processData: false,
        type : 'post',
        dataType : 'json',
        success : function(obj){
            if(obj.error==false) {
                    window.swal("Informasi!", obj.message, "success").then((value) => {
                    location.href=(obj.url);
                        });
                }
                else {
                    window.swal('Error', obj.message, 'error');
                }
            }
        });
    });
});
</script>