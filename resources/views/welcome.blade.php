<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
   <link rel="stylesheet" href="{{ asset('style.css') }}">
</head>
<body>   
    
    <form action="/form-example" method="get" class="form-example">
        <div class="form-example">
            <label for="name">Enter your name: </label>
            <input type="text" name="name" id="name" required />
        </div>
        <div class="form-example">
            <label for="text">Enter your feedback: </label>
            <input type="text" name="feedback" id="feedback" required />
        </div>
        <div class="form-example">
            <input type="submit" value="Sūtīt"/>
        </div>
    </form> 

  

</body>
</html>
