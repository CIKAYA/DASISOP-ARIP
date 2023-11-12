<?php
include 'header.php';
if (isset($_POST['buat_joran'])) {
    $joran_obj->create_joran_info($_POST);
}
?>
<div class="container"> 
    <div class="row content">
        <a  href="index.php"  class="button button-purple mt-12 pull-right">Daftar Joran</a> 
        <h3>Buat Info Joran</h3>
        <hr/>
        <form method="post" action="">
            <div class="form-group">
                <label for="idRod">ID:</label>
                <input type="text" name="idRod" id="idRod" class="form-control" required maxlength="50">
            </div>
            <div class="form-group">
                <label for="namaRod">Nama`:</label>
                <input type="namaRod" class="form-control" name="namaRod" id="namaRod" required maxlength="50">
            </div>
            <div class="form-group">
                <label for="panjangRod">Panjang:</label>
                <input type="text" class="form-control" name="panjangRod" id="panjangRod"  maxlength="50">
            </div>
            <div class="form-group">
                <label for="hargaRod">Choose For:</label>
                <select class="form-control" name="hargaRod" id="hargaRod">
                    <option value="" selected>Select</option>
                    <option value="sale" >Sale</option>
                    <option value="lend" >Lend</option>
                </select>
            </div> 
            <div class="form-group">
                <label for="gambarRod">Gambar:</label>
                <input type="file" name="gambarRod" id="gambarRod" class="form-control"  maxlength="50">
            </div>
            <input type="submit" class="button button-green  pull-right" name="create_student" value="Submit" onclick="return confirm('Data berhasil ditambahkan!')"/>
        </form> 
    </div>
</div>
<hr/>
<?php
?>

