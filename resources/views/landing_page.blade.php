<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <link rel="stylesheet" href="{{ asset('/css/home.css') }}">
    <title>Document</title>
    
</head>
<body>
    <div class="navbar">
        <img src="img/logo.png" alt="">
         <div class="menu">
             <a href="index.html">Home</a>
             <a href="premium.html">Premium</a>
             <a href="login.html">Login</a> 
             <a href="register.html">Register</a>           
         </div>
     </div>
 
     <div class="navbarbawah">
         <div class="search-container">
             <select name="Kota/Daerah">
                 <option value="Kota Depok">Kota Depok</option> 
                 <option value="Kota Jakarta">Kota Jakarta</option>
                 <option value="Kota Bogor">Kota Bogor</option>
                 <option value="Kota Tanggerang">Kota Tanggerang</option>
             <input type="date" name="tanggal_sewa">
             <input type="text" placeholder="Cari lapangan...">
             <button type="submit">Search</button>
            
         </div>
     </div>
</body>
</html>