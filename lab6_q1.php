<!DOCTYPE html>
<html lang="en">
<head>
 <title>Lab 6 Q1</title>
</head>
<body>
 <?php
 $name = "NORDINI EMILY BINTI MOHATHIR";
 $matricNo="DI220108";
 $course="BIT";
 $yearOfStudy=2;
 $address="NO 11, JALAN DURIAN, TAMAN MAJU, 86400 SR GADING BATU PAHAT, JOHOR.";

 ?>
 <h1>Question 1</h1><br>
 <h2>Student Information</h2><br>
 <table border="2">
 <tr>
 <td>Name</td>
 <td><?php echo "$name"; ?></td>
 </tr
 >
 <tr>
 <td>Matric number</td>
 <td><?php echo "$matricNo"; ?></td>
 </tr>

 <tr>
 <td>Course</td>
 <td><?php echo "$course"; ?></td>
 </tr>

 <tr>
 <td>Year of study</td>
 <td><?php echo "$yearOfStudy"; ?></td>
 </tr>
 
 <tr>
 <td>Address</td>
 <td><?php echo "$address"; ?></td>
 </tr>
 </table>

</body>
</html>