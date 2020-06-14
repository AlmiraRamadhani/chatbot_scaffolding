<?php
include '../koneksi.php';
$dataBarang = mysqli_query($koneksi, "SELECT * FROM tb_product");
echo '<td><select name="barang" class="form-control select-barang">';
while ($db = mysqli_fetch_array($dataBarang)) {
    echo '<option value="' . $db['product_id'] . '"> ' . $db['product_name'] . '</option>';
}
echo '</select></td>';
echo '<td><input type="number" name="qty" id="qty" class="form-control"></td>';
mysqli_free_result($dataBarang);
