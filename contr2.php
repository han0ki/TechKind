
<?php
    //check if submit button is clicked
  If(isset($_POST['submit1'])){
    try {
    $conn = new PDO("mysql:host=localhost;dbname=h904139105_s0", "h904139105_u0", "2BTCBmQ_");
    $conn->query("SET NAMES 'utf8'");

  // set the PDO error mode to exception
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   // prepare sql and bind parameters
   $stmt = $conn->prepare("INSERT INTO tab1 (name,  tel)
    VALUES (:name,:tel)");


    $stmt->bindParam(':name', $name);
     $stmt->bindParam(':tel', $tel);
  

    $name = $_POST['name'];
    $tel = $_POST['tel'];
   
    $stmt->execute();
    echo "Сообщение успешно отправлено";
}catch(PDOException $e){
  echo "Error: " . $e->getMessage();
}
$conn = null;
}
?>