<!DOCTYPE html>
<html lang="en">
<head>
    <!-- <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> -->
    <title></title>

    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">

</head>
<body>

    <div class="container">
        <h1 class="text-center">Add Data</h1>
        <form method="POST" action="/store">
            @csrf
            <div class = "mb-3">
                <label><b>branch_name</b></label>
                <input type="text" name="title" class="form-control" >
            </div>

            <div class = "mb-3">
                <label><b>admin<b></label>
                <input type="text" name="admin" class="form-control">
                
            </div>
   
            <div class = "mb-3">
                <label><b>area<b></label>
                <input type="text" name="area" class="form-control">
                
            </div>

            <div class = "mb-3">
                <label><b>departments<b></label>
                <input type="text" name="departments" class="form-control">
                
            </div>

            <div class = "mb-3">
                <label><b>employees<b></label>
                <input type="text" name="employees" class="form-control">
                
            </div>

            <div class = "mb-3">
                <label><b>users<b></label>
                <input type="text" name="users" class="form-control">
                
            </div>

            <input type ="submit" name="insert" value="Insert" class="btn btn-primary" >
            
        </form>
    </div>
    
</body>
</html>