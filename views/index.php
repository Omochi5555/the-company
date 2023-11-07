<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
    <title>Login</title>
</head>

<body>
    <form action="../actions/login.php" method="post" class="border rounded-2 w-50 mx-auto my-5 p-3">
        <h1 class="display-6 text-center text-uppercase">Login</h1>

        <input type="text" name="username" id="username" class="form-control mb-3" placeholder="USERNAME">

        <input type="password" name="password" id="password" class="form-control mb-4" placeholder="PASSWORD">

        <button type="submit" class="btn btn-primary w-100 mb-3">Log in</button>

        <p class="text-center">
            <a href="register.php" class="text-decoration-none">Create account</a>
        </p>
    </form>

</body>

</html>