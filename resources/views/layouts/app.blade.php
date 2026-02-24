<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<title>Sulthini El Barthaq</title>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<!-- FONT AWESOME (WAJIB) -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">

<style>
*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    scroll-behavior:smooth;
    font-family:"Segoe UI",sans-serif;
}
body{background:#f4f7f5;color:#333}

/* NAVBAR */
nav{
    position:fixed;
    top:0;
    width:100%;
    background:#0f3d2e;
    padding:15px 40px;
    display:flex;
    justify-content:space-between;
    align-items:center;
    z-index:1000;
}
nav h1{color:white}
nav ul{display:flex;list-style:none}
nav ul li{margin-left:20px}
nav ul li a{color:white;text-decoration:none;font-weight:bold}

/* SECTION */
section{
    padding:100px 50px 60px;
}

/* HERO */
#home{
    min-height:100vh;
    background:linear-gradient(rgba(0,0,0,.5),rgba(0,0,0,.5)),
    url('https://images.unsplash.com/photo-1584286092381-5a0fa06bb9dc') center/cover;
    color:white;
    display:flex;
    justify-content:center;
    align-items:center;
    text-align:center;
}
#home h2{font-size:50px}
#home p{font-size:20px;margin-top:20px}

/* ABOUT */
#about{background:white}
#about h2{text-align:center;margin-bottom:30px}
#about p{max-width:900px;margin:auto;line-height:1.8}

/* PROGRAM */
#program{background:#e9f5f0}
.cards{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:20px;
}
.card{
    background:white;
    padding:20px;
    border-radius:10px;
    box-shadow:0 0 10px rgba(0,0,0,.1);
    text-align:center;
}

/* GALERI */
#galeri img{width:100%;border-radius:10px}
.galeri-grid{
    display:grid;
    grid-template-columns:repeat(auto-fit,minmax(250px,1fr));
    gap:15px;
}

/* KONTAK */
#kontak{
    background:#0f3d2e;
    color:white;
    text-align:center;
}
#kontak i{
    margin-right:8px;
    color:#25D366;
}
#kontak p{
    margin:10px 0;
}
#kontak a{
    color:white;
    text-decoration:none;
}

/* FOOTER */
footer{
    background:#08281e;
    color:white;
    text-align:center;
    padding:15px;
}
</style>
</head>

<body>

<nav>
    <h1>Sulthoni Elbarthaq</h1>
    <ul>
        <li><a href="#home">Home</a></li>
        <li><a href="#about">Tentang</a></li>
        <li><a href="#program">Program</a></li>
        <li><a href="#galeri">Galeri</a></li>
        <li><a href="#kontak">Kontak</a></li>
    </ul>
</nav>

@yield('content')

<footer>
    &copy; 2026 Sulthoni Elbarthaq
</footer>

</body>
</html>
