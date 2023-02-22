<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PROSES LOGIN</title>
</head>
<body>
    <form action="/login_proses" method="POST" enctype="multipart/form-data">
        @csrf 
        <input class="form-input" type="text" namae="txt_email" id="" placeholder="Email">
        <input class="form-input" type="text" namae="txt_password" id="" placeholder="Password">
        <button type="text" class="btn">LOGIN</button>
    </form>
</body>
</html>