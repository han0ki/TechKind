<?php
    //check if submit button is clicked
  If(isset($_POST['submit'])){
    try {
    $conn = new PDO("mysql:host=localhost;dbname=h904139105_s0", "h904139105_u0", "2BTCBmQ_");
    $conn->query("SET NAMES 'utf8'");

  // set the PDO error mode to exception
   $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

   // prepare sql and bind parameters
   $stmt = $conn->prepare("INSERT INTO tam2 (first_name, last_name, email, tel, textarea1)
    VALUES (:first_name, :last_name, :email, :tel, :textarea1)");
    $stmt->bindParam(':first_name', $first_name);
   $stmt->bindParam(':last_name', $last_name);
    $stmt->bindParam(':email', $email);
   $stmt->bindParam(':tel', $tel);
   $stmt->bindParam(':textarea1', $textarea1);

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $tel = $_POST['tel'];
    $textarea1 = $_POST['textarea1'];
    $stmt->execute();
    echo "Сообщение успешно отправлено";
}catch(PDOException $e){
  echo "Error: " . $e->getMessage();
}
$conn = null;
}
?>