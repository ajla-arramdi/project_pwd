<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/style.css') }}">
    <title>Document</title>
</head>
<body>
    

    <form action="login.html" method="post">
        <H1>Form Pendaftaran</H1>

        <label for="nama">Nama :</label><br>
        <input type="text" id="nama" name="nama" required><br>

        <div class="form-group">
            <label for="Email" class="label">Email:</label>
            <input type="email" id="Email" name="Email" class="input" required>
        </div>

        <div class="form-group">
            <label for="Password" class="label">Password:</label>
            <input type="password" id="Password" name="Password" class="input" required>
        </div>

        <!-- <label for="password">Password:</label><br> -->
        <!-- <input type="text" id="password" name="password" required><br> -->

        <div class="button-container">
            <button><a href="login.html">Next</a></button>
            <!-- <button type="submit" class="button">Submit</button> -->
        </div>
    </form>
</body>
</html>