<?php
include 'header.php';
$joran_list = $joran_obj->joran_list();
?>
<div class="container " > 
    <div class="row content">
        <a  href="create-joran-info.php"  class="button button-purple mt-12 pull-right">Input Joran</a> 
        <h3>Daftar Joran</h3>
        <?php
        if (isset($_SESSION['message'])) {
            echo "<p class='custom-alert'>" . $_SESSION['message'] . "</p>";
            unset($_SESSION['message']);
        }
        ?>
        <table class="table">
            <thead>
                <tr>
                    <th>ID Joran</th>
                    <th>Nama Joran</th>
                    <th>Panjang Joran`</th>
                    <th>Harga Joran</th>
                    <th>Gambar Joran</th>
                    <th class="text-right">Action</th>
                </tr>
            </thead>
            <tbody>
<?php
if ($joran_list->num_rows > 0) {
  while ($row = $joran_list->fetch_assoc()) {
     ?>
             <tr>
                <td><?php echo $row["idRod"] ?></td>
                <td><?php echo $row["namaRod"] ?></td>
                <td><?php echo $row["panjangRod"] ?></td>
                <td><?php echo $row["hargaRod"] ?></td>
                <td><?php echo $row["gambarRod"] ?></td>
                <td class="text-right">
                    <a  href="<?php echo 'delete-joran-info.php?id=' . $row["idRod"] ?>" class="button button-red"
                    onclick="return confirm('Apakah kamu ingin menghapus data ini?')"
                    >Delete</a>  
                    <a  href="<?php echo 'update-joran-info.php?id=' . $row["idRod"] ?>" class="button button-blue">Edit</a>  
                    <a href="<?php echo 'read-joran-info.php?id=' . $row["idRod"] ?>" class="button button-green">View</a>
                </td>
            </tr>
    <?php
    }
}
?>
           </tbody>
        </table>

    </div>
</div>
<?php
?>  

