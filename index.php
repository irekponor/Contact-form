<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="" type="text/css">
</head>

<body>
    <div class="container">
        <form action="process.php" method="post">
            <input type="text" class="form-control mt-4" name="fullname" id="" placeholder="Fullname">
            <input type="email" class="form-control mt-4" name="email" id="" placeholder="Email">
            <input type="subject" class="form-control mt-4" name="subject" id="" placeholder="subject">
            <textarea name="message" id="" cols="30" rows="10" placeholder="Message"></textarea>
            <input type="submit" class="btn btn-primary mt-4" value="Send" name="submit">
        </form>
    </div>
</body>

</html>