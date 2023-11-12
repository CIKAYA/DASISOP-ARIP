<?php
class Book
{
    private $conn;
    function __construct() {
    session_start();
    $servername = "localhost";
    $dbname = "TugasWAD_Week7";
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
        
       $sql = "SELECT * FROM books ORDER BY book_id asc ";
       $result=  $this->conn->query($sql);
       return $result;  
    }
    
    public function create_book_info($post_data=array()){
         
       if(isset($post_data['create_book'])){
       $book_title= mysqli_real_escape_string($this->conn,trim($post_data['book_title']));
       $genre= mysqli_real_escape_string($this->conn,trim($post_data['genre']));
       $author= mysqli_real_escape_string($this->conn,trim($post_data['author']));
       $choose_for= mysqli_real_escape_string($this->conn,trim($post_data['choose_for']));
       $country= mysqli_real_escape_string($this->conn,trim($post_data['country']));

       $sql="INSERT INTO books (book_title, genre, author,country,choose_for) VALUES ('$book_title', '$genre', '$author','$country','$choose_for')";
        
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
       $book_id= mysqli_real_escape_string($this->conn,trim($id));
      
       $sql="Select * from students where student_id='$book_id'";
        
       $result=  $this->conn->query($sql);
     
        return $result->fetch_assoc(); 
    
       }  
    }
    
    
    public function update_book_info($post_data=array()){
       if(isset($post_data['update_book'])&& isset($post_data['id'])){
           
       $book_title= mysqli_real_escape_string($this->conn,trim($post_data['book_title']));
       $genre= mysqli_real_escape_string($this->conn,trim($post_data['genre']));
       $choose_for= mysqli_real_escape_string($this->conn,trim($post_data['choose_for']));
       $author= mysqli_real_escape_string($this->conn,trim($post_data['author']));
       $country= mysqli_real_escape_string($this->conn,trim($post_data['country']));
       $book_id= mysqli_real_escape_string($this->conn,trim($post_data['id']));

       $sql="UPDATE books SET book_title='$book_title',genre='$genre',author='$author',country='$country',choose_for='$choose_for' WHERE book_id =$book_id";
     
        $result=  $this->conn->query($sql);
        
           if($result){
               $_SESSION['message']="Successfully Updated Book Info";
           }
       unset($post_data['update_book']);
       }   
    }
    
    public function delete_book_info_by_id($id){
        
       if(isset($id)){
       $book_id= mysqli_real_escape_string($this->conn,trim($id));

       $sql="DELETE FROM  books  WHERE book_id =$book_id";
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