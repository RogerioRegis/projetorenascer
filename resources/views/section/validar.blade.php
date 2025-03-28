<script src="https://d2599kud7uucku.cloudfront.net/themes/h2/hostinger.min.js?v=7.2.5" type="text/javascript"></script>
<script src="https://assets.pagar.me/js/pagarme.min.js"></script> 
<script type="text/javascript" src="/js/jquery.inputmask.bundle.min.js"></script>

<script type="text/javascript">
    var form = $("#create_form");
    $(document).ready(function() {
        $('#create_form').parent('.portlet-body').addClass('form portlet-form-body');
        $('#fone').inputmask("(99)99999-9999", {
            autoUnmask: true,
            "clearIncomplete": true
        });
        $('#placa').inputmask("999-9999", {
            autoUnmask: true
        });
        $('#cpf').inputmask("999.999.999-99", {
            autoUnmask: true
        });
        $('#data_nasc').inputmask("99/99/9999", {
            autoUnmask: true
        });
    });
</script>