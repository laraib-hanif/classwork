<?php
 $number1 = $_POST['number1'];
 $number2 = $_POST['number2'];
$grade = '';
$switch = $_POST["plus"];
if(is_numeric($number1) && (is_numeric($number2))){
  switch ($switch) {
    case 'add':
        $grade = $number1 + $number2;
        break;
        case 'minus':
        $grade = $number1 - $number2;
        break;
        case 'multiple':
         $grade = $number1 * $number2;
        break;
        case 'divide':
        $grade = $number1 / $number2;
         break;
    default:
        # code...
        break;
  }
    }

?>

<form  method = "post" action="" class = "form-group">
                    
                    <input type ="text" name ="number1" placeholder ="Enter your number" class ="form-control" value ="<?php echo $number1 ?>">
                    
                    <input type ="text" name ="number2" placeholder ="Enter your number " class ="form-control" value ="<?php echo $number2 ?>"> 

                    <input value="<?php echo $grade ?>">
                    
                    <input type ="submit" name ="plus" value ="add" class ="btn btn-success mt-2">
                    <input type ="submit" name ="plus" value ="minus" class ="btn btn-success mt-2">
                    <input type ="submit" name ="plus" value ="multiple" class ="btn btn-success mt-2">
                    <input type ="submit" name ="plus" value ="divide" class ="btn btn-success mt-2">
                </form>
