<?php
 include 'header.php';
 

 if(isset($_GET['id'])){
  $joran_info=$joran_obj->view_book_by_book_id($_GET['id']);
  


     
 }else{
  header('Location: index.php');
 }
 
 
 ?>
<div class="container " > 
    
  <div class="row content">

       
          
           
             <a  href="index.php"  class="button button-purple mt-12 pull-right">Lihat Info Joran</a> 
     
 <h3>Lihat info Joran</h3>
       
    
     <hr/>
   
   
 
      
    <label >Nama:</label>
   <?php  if(isset($joran_info['namaRod'])){echo $joran_info['namaRod']; }?>

<br/>
    <label>Panjang:</label>
  <?php  if(isset($joran_info['panjangRod'])){echo $joran_info['panjangRod'];} ?>
    
    <br/>
    <label >Harga:</label>
      <?php  if(isset($joran_info['hargaRod'])){echo $joran_info['hargaRod'];} ?>
    <br/>

  <label >Panjang:</label>
   <?php  if(isset($pancing_info['panjangRod'])){echo $pancing_info['panjangRod'];} ?>
  <br/>
    <label >Gambar:</label>
      <?php  if(isset($pancing_info['gambarRod'])){echo $pancing_info['gambarRod'];} ?>
    <br/>

          

    <a href="<?php echo 'update-joran-info.php?id='.$joran_info["idRod"] ?>" class="button button-blue">Edit</a>

   
  
     
   
  </div>
     
</div>
<hr/>
 <?php
 include 'footer.php';
 ?>

