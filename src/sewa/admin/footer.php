<script script src="../assets/js/select2.min.js">
</script>
<script type="text/javascript">
    $(document).ready(function() {
        $('.select-barang').select2();
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
</body>

</html>