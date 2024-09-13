<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="form.css">
    <title>Document</title>
</head>
<body>
    <div class="container">
        <form action="index.html" method="POST">
            <h1>Login</h1>
            <div class="form-group">
                <label for="Email" class="label">Email:</label>
                <input type="email" id="Email" name="Email" class="input" required>
            </div>
            <div class="form-group">
                <label for="Password" class="label">Password:</label>
                <input type="password" id="Password" name="Password" class="input" required>
            </div>
            <div class="button-container">
                <!-- <button><a href="index.html">Submit</a></button> -->
                <a href="index.html"><button type="submit" class="button">Submit</button></a>
            </div>
        </form>
    </div>
</body>
</html>