<script src="/site/js/jquery.min.js"></script>
<script src="/site/js/popper.min.js"></script>
<script src="/site/js/bootstrap.bundle.min.js"></script>
<script src="/site/js/jquery-3.0.0.min.js"></script>
<script src="/site/js/plugin.js"></script>
<script src="/site/js/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="/site/js/custom.js"></script>
<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script >
    $("#select-all").click(function(e) {
        if(this.checked) {
            // Iterate each checkbox
            $(':checkbox').each(function() {
                this.checked = true;
            });
        } else {
            $(':checkbox').each(function() {
                this.checked = false;
            });
        }
        var chkArray = [];
        $("input[name='checkbox[]']:checked").map(function() {
            chkArray.push(this.value);
        }).get();
        var selected;
        selected = chkArray.join(',') + ",";
        if(selected.length > 1){
            alert('Hamısı seçilsin?');
        } else { alert('Seçilənlər ləğv edilsin?'); }
    });
</script>
</body>
</html>
