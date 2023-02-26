<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Marksheet</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css" integrity="sha512-SbiR/eusphKoMVVXysTKG/7VseWii+Y3FdHrt0EpKgpToZeemhqHeZeLWLhJutz/2ut2Vw1uQEj2MbRF+TVBUA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <div class = "container">
        <div class ="row">
            <div class = "col-m-6 m-auto">
                <form  method = "post"action="result.php" class = "form-group">
                    <label> student  Name: </label>
                    <input type ="text" name = "name" placeholder = "Enter your name" class = "form-control">
                    <label> Father  Name: </label>
                    <input type ="text" name = "f_name" placeholder = "Enter your father name" class = "form-control"> 
                    <label> Your Roll No: </label>
                    <input type ="text" name = "roll" placeholder = "Enter your roll number" class = "form-control"> 
                    <label> Class: </label>
                    <input type ="text" name = "standard" placeholder = "Enter your class" class = "form-control"> 
                    <label> Math Marks: </label>
                    <input type ="text" name = "math" placeholder = "Enter Math marks" class = "form-control"> 
                    <label> Urdu Marks: </label>
                    <input type ="text" name = "urdu" placeholder = "Enter Urdu marks" class = "form-control"> 
                    <label> English Marks: </label>
                    <input type ="text" name = "english" placeholder = "Enter English marks" class = "form-control"> 
                    <label> Islamiat Marks: </label>
                    <input type ="text" name = "islamiat" placeholder = "Enter islamiat marks" class = "form-control"> 
                    <label> Physics Marks: </label>
                    <input type ="text" name = "physics" placeholder = "Enter physics marks" class = "form-control"> 
                    <input type = "submit" name = "result" value = "Chech Result" class = "btn btn-success mt-2">
                </form>
            </div>
        </div>
    </div>
</body>
</html>