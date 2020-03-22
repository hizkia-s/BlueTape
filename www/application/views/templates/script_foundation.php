<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><script src="/public/js/vendor/jquery.min.js"></script>
<script src="/public/js/vendor/what-input.min.js"></script>
<script src="/public/js/foundation.min.js"></script>
<script src="/public/js/app.js"></script>
<script src="/public/lib/xdan-datetimepicker/jquery.datetimepicker.full.min.js"></script>
<script>
    $(document).ready(function(){
        var skipToContent = document.createElement("div");
        skipToContent.innerHTML += '<a class="skip-navbar" href="#mainContent">Lompat ke menu utama</a>';
        document.body.insertBefore(skipToContent, document.body.firstChild);
    })
</script>