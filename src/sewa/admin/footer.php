</body>

</html>
<script type="text/javascript">
    $(document).ready(function() {
        $('.select-tb_product').select2();
        var i = 1;
        $('#add').click(function() {
            i++;
            $.post('form.php', function(data) {
                $('#tbl_barang').append(`<tr>` + data + `</tr>`);
                $('.select-barang').select2();
            });
        });
    });
</script>