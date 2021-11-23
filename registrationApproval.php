<?php
include 'db_connection.php';

if(isset($_POST['accept'])){
    $arr = explode(' ', $_POST['accept']);
    $email = $arr[0];
    $table = $arr[1];
    
    $sql = "UPDATE $table
    SET approval = 1
    WHERE email = '$email';";
    

    if ($conn->query($sql) === TRUE) {
        echo "Registration Approved Successfully.";
      } else {
        echo "Error updating record: " . $conn->error;
      }
}elseif(isset($_POST['decline'])){
    $arr = explode(' ', $_POST['decline']);
    $email = $arr[0];
    $table = $arr[1];
    $sql = "DELETE FROM $table WHERE email='$email' ";
    
    if ($conn->query($sql) === TRUE) {
        echo "Registration Declined Successfully.";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
}


$sql = "SELECT fName,lName, email
FROM Patient
WHERE approval = 0;";

$presult = $conn->query($sql);

$sql = "SELECT fName,lName, email
FROM FamilyMember
WHERE approval = 0;";

$fresult = $conn->query($sql);

$sql = "SELECT fName,lName, role, email
FROM Employee
WHERE approval = 0;";

$eresult = $conn->query($sql);

?>
<html>
<head>
  <link rel="stylesheet" href="CSS/patientStyles.css">
</head>
    <body>
        <form action="registrationApproval.php" id="form1" method="POST">
        <table width='30%' border=0>
                
                    <th>Name</th>
                    <th>Role</th>
                    <th>Select</th>
                </tr>
                <?php 
            
                while($res = mysqli_fetch_array($presult)) {         
                    echo "<tr>";
                    echo "<td>" . $res['fName'] . " " . $res['lName'] . "</td>";
                    echo "<td>Patient</td>";
                    ?>
                    <td><button type="submit" name="accept" form="form1" id="accept" value="<?php echo $res['email'] . ' Patient'?>">&#10004;</button>
                    <button type="submit" name="decline" form="form1" id="decline" value="<?php echo $res['email'] . ' Patient'?>">X</button></td>
                    <?php
                }
                while($res = mysqli_fetch_array($fresult)) {
                    echo "<tr>";
                    echo "<td>" . $res['fName'] . " " . $res['lName'] . "</td>";
                    echo "<td>Family Member</td>";
                    ?>
                    <td><button type="submit" name="accept" form="form1" id="accept" value="<?php echo $res['email'] . ' FamilyMember'?>">&#10004;</button>
                    <button type="submit" name="decline" form="form1" id="decline" value="<?php echo $res['email'] . ' FamilyMember'?>">X</button></td>
                    <?php
                }
                while($res = mysqli_fetch_array($eresult)) {         
                    echo "<tr>";
                    echo "<td>" . $res['fName'] . " " . $res['lName'] . "</td>";
                    echo "<td>" . $res['role'] . "</td>";  
                    ?>
                    <td><button type="submit" name="accept" form="form1" id="accept" value="<?php echo $res['email'] . ' Employee'?>">&#10004;</button>
                    <button type="submit" name="decline" form="form1" id="decline" value="<?php echo $res['email'] . ' Employee'?>">X</button></td>
                    <?php
                }
                ?>
         </table>
         </form>
    </body>
</html>