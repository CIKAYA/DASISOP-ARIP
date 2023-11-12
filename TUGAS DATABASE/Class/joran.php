<?php
class Joran
{
    private $conn;
    function __construct() {
    session_start();
    $servername = "localhost";
    $dbname = "arkana_riang_kail_indah";
    $username = "root";
    $password = "";
  

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
      if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
       }else{
        $this->conn=$conn;  
       }

    }


    public function book_list(){
        
       $sql = "SELECT * FROM jorans ORDER BY idRod asc ";
       $result=  $this->conn->query($sql);
       return $result;  
    }
    
    public function create_book_info($post_data=array()){
         
       if(isset($post_data['create_book'])){
       $book_title= mysqli_real_escape_string($this->conn,trim($post_data['idRod']));
       $genre= mysqli_real_escape_string($this->conn,trim($post_data['namaRod']));
       $author= mysqli_real_escape_string($this->conn,trim($post_data['panjangRod']));
       $choose_for= mysqli_real_escape_string($this->conn,trim($post_data['hargaRod']));
       $country= mysqli_real_escape_string($this->conn,trim($post_data['gambarRod']));

       $sql="INSERT INTO jorans (idRod, namaRod, panjangRod, hargaRod, gambarRod) VALUES ('$idRod', '$namaRod', '$panjangRod','$hargaRod','$gambarRod')";
        
        $result=  $this->conn->query($sql);
        
           if($result){
           
               $_SESSION['message']="Successfully Created Book Info";
               
              header('Location: index.php');
           }
          
       unset($post_data['create_book']);
       }
       
        
    }
    
    public function view_book_by_book_id($id){
       if(isset($id)){
       $idRod= mysqli_real_escape_string($this->conn,trim($id));
      
       $sql="Select * from students where student_id='$idRod'";
        
       $result=  $this->conn->query($sql);
     
        return $result->fetch_assoc(); 
    
       }  
    }
    
    
    public function update_joran_info($post_data=array()){
       if(isset($post_data['update_book'])&& isset($post_data['id'])){
           
       $book_title= mysqli_real_escape_string($this->conn,trim($post_data['idRod']));
       $genre= mysqli_real_escape_string($this->conn,trim($post_data['namaRod']));
       $choose_for= mysqli_real_escape_string($this->conn,trim($post_data['panjangRod']));
       $author= mysqli_real_escape_string($this->conn,trim($post_data['hargaRod']));
       $country= mysqli_real_escape_string($this->conn,trim($post_data['gambarRod']));
       $joran_id= mysqli_real_escape_string($this->conn,trim($post_data['id']));

       $sql="UPDATE books SET book_title='$book_title',genre='$genre',author='$author',country='$country',choose_for='$choose_for' WHERE joran_id =$joran_id";
     
        $result=  $this->conn->query($sql);
        
           if($result){
               $_SESSION['message']="Successfully Updated Book Info";
           }
       unset($post_data['update_book']);
       }   
    }
    
    public function delete_book_info_by_id($id){
        
       if(isset($id)){
       $joran_id= mysqli_real_escape_string($this->conn,trim($id));

       $sql="DELETE FROM  books  WHERE joran_id =$joran_id";
        $result=  $this->conn->query($sql);
        
           if($result){
               $_SESSION['message']="Successfully Deleted Book Info";
            
           }
       }
         header('Location: index.php'); 
    }
    function __destruct() {
    mysqli_close($this->conn);  
    }
    
}

?>