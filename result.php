<?php
$grade = '';

if(isset($_POST['result'])){
   $name = $_POST['name'];
   $fathername = $_POST['f_name'];
   $rollno = $_POST['roll'];
   $standard = $_POST['standard'];

   $math = $_POST['math'];
   $urdu = $_POST['urdu'];
   $english = $_POST['english'];
   $islamiat = $_POST['islamiat'];
   $physics = $_POST['physics'];

  $obtained_marks = $math + $urdu + $english + $islamiat + $physics;

  $percentage = $obtained_marks * 100 / 500;
 
}
if ($percentage >=80){
    $grade = "Your grade is A-1";
}
else if($percentage >= 70){
    $grade = "Your grade is A";
}
else if($percentage >=60){
    $grade = "your grade is B";
}
else if($percentage >=50){
    $grade = "Your grade is C";
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <h1>This is your result page</h1>
    <div class = "container" style = "margin-top: 20%;">
        <table class="table text-center" border="5">
            <thead class = "thead-dark">
                <tr>
                    <th> Your Name </th>
                    <th> Your Father Name </th>
                    <th> Your Roll </th>
                    <th> Your Class </th>
                    <th> Your Obtained Marks </th>
                    <th> Your Percentage </th>
                    <th> Your Grade </th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td> <?php echo $name ?></td>
                    <td> <?php echo $fathername ?></td>
                    <td> <?php echo $rollno ?></td>
                    <td> <?php echo $standard ?></td>
                    <td> <?php echo $obtained_marks ?></td>
                    <td> <?php echo $percentage . "%"?></td>
                    <td> <?php echo $grade ?></td> 
                </tr>
            </tbody>
        </table>
        </div>

</body>
</html>