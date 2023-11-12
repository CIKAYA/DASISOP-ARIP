<?php
include 'header.php';
if (isset($_GET['id'])) {
    $joran_info = $book_obj->view_book_by_book_id($_GET['id']);
    if (isset($_POST['update_book']) && $_GET['id'] === $_POST['id']) {
        $book_obj->update_book_info($_POST);
    }
} else {
    header('Location: index.php');
}
?>
<div class="container " > 
    <div class="row content">
        <a href="index.php"  class="button button-purple mt-12 pull-right">Lihat Daftar Joran</a> 
        <h3>Info Joran Terbaru</h3>
        <?php
        if (isset($_SESSION['message'])) {
            echo "<p class='custom-alert'>" . $_SESSION['message'] . "</p>";
            unset($_SESSION['message']);
        }
        ?>

        <hr/>
        <form method="post" action="">
            <input type="hidden" name="id" value="<?php if (isset($joran_info['idJoran'])) {
            echo $joran_info['idJoran'];
        } ?>" id=""  >
            <div class="form-group">
                <label for="namaRod">Nama:</label>
                <input type="text" name="namaRod" value="<?php if (isset($joran_info['namaRod'])) {
                   echo $rod_info['namaRod'];
        } ?>" id="namaRod" class="form-control" required maxlength="50">
            </div>
            <div class="form-group">
                <label for="panjangRod">Panjang:</label>
                <input type="panjangRod" class="form-control" value="<?php if (isset($joran_info['panjangRod'])) {
            echo $book_info['panjangRod'];
        } ?>" name="gambarRod" id="gambarRod" required maxlength="50">
            </div>
            <div class="form-group">
                <label for="gambarRod">Gambar:</label>
                <input type="file" class="form-control" value="<?php if (isset($joran_info['gambarRod'])) {
            echo $book_info['gamarRod'];
        } ?>" name="hargaRod" id="hargaRod"  maxlength="50">
            </div>
            <div class="form-group">
                <label for="hargaRod">Choose For:</label>
                <select class="hargaRod" name="hargaRod" id="hargaRod">
                    <option value="">Select</option>
                    <option value="sale" <?php if (isset($joran_info['hargaRod']) && $joran_info['hargaRod'] == 'sale') {
            echo 'selected';
        } ?>>Sale</option>
                    <option value="lend" <?php if (isset($joran_info['hargaRod']) && $joran_info['hargaRod'] == 'lend') {
            echo 'selected';
        } ?>>Lend</option>

                </select>

            </div> 
            <div class="form-group">
                <label for="panjangRod">Panjang:</label>
                <input type="text" name="country" value="<?php if (isset($joran_info['panjangRod'])) {
            echo $joran_info['panjangRod'];
        } ?>" id="panjangRod" class="form-control"  maxlength="50">
            </div>
            <input type="submit" class="button button-green  pull-right" name="update_book" value="Update" />
        </form> 
    </div>
</div>
<hr/>
<?php
?>

