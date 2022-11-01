<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Student Data</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/js/bootstrap.bundle.min.js"></script>
</head>
<body>
    
    <center>
        <h1>Student Data Form</h1>
        @if ($errors->any())
        <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
        </div>
        @endif

        @if(Session::has('success'))
        <div class="alert alert-success">{{Session::get('success')}}</div>

        @endif

        <form action="/dept" method="post">
           {{csrf_field()}}
           <label>Department Name : </label>
           <input type="text" name="dept_name"><br><br>
           <label>Department Code : </label>
           <input type="text" name="dept_code"><br><br>
           <label>Students Name : </label>
           <input type="text" name="std_name"><br><br>
           <label>Students ID : </label>
           <input type="text" name="std_id"><br><br>
           <label>Students Mail : </label>
           <input type="text" name="std_mail"><br><br>
           <input type="submit" value="Submit">

        </form>

    </center>
</body>
</html>