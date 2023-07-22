<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reels</title>
    <style>
        marquee{
            font-size: 40px;
            color: darkslategray;
            font-family: cursive;
        }
        body{
            background-image: url(https://i.pinimg.com/originals/12/19/cd/1219cdba2a62d4ae520de28d8d5a9f8b.jpg);
            background-size: 100% 100%;
        }
        ul li a{
	font-size: 25px;
	align-items: flex-start;
    color: black;
}
ul li{
    list-style: none;
	display: inline-block;
}
.navbar ul li{
    list-style: none;
    display: inline-block;
    color: black;
    font-size: 20px;
    text-decoration: none;
    text-align: right;
    padding: 10px;
    margin: 20px;
}

.navbar ul li a{
    color: black;
    
    text-decoration: none;
    
}

.navbar ul li a:hover{
    color: white;
    text-decoration: none;
    background-color: rgb(14, 173, 75);
    border-radius: 50%;
}
.logo{
    cursor: pointer;
    width:40px;
    background-position: left;
    padding: 0;
}
    </style>
</head>
<body>
    <div class="navbar">
        <img src="/images/logo.jpg" class="logo">
        <ul>
         <li><a href="index.php"><b>HOME</b></a></li>
         <li><a href="main.php"><b>MAIN</b></a></li>
         <li><a href="about_us.php" target="_blank"><b>ABOUT</b></a></li>
         <li><a href="specification.php"><b>SPECIFICATIONS</b></a></li>
         <li><a href="#"  target="_blank"><b>VIEW PLAYLIST</b></a></li>
        
         <li><a href="playlist.php"><b>English songs</b></a></li>
       
        <li><a href="Punjabi.php" ><b>Punjabi songs</b></a></li>
        <li><a href="#" style="color: blue;"><b>Reels</b></a></li>
        <li><a href="hindi.php" ><b>Hindi songs</b></a></li>
    
        
        </ul>
   
    <marquee>Trending Reels:</marquee>
    <br>
    <video src="vedios/music1.mp4" width="33%" height="300" poster="https://previews.123rf.com/images/nicky2342/nicky23421203/nicky2342120300001/12781980-music-notes-background.jpg" controls></video>
    <video src="vedios/music2.mp4" width="33%" height="300" poster="/images/green.jpg" controls></video>
    <video src="vedios/music 3.mp4" width="33%" height="300" poster="https://wallpaperaccess.com/full/1162634.jpg" controls></video>
    <br>
    <br>
    <br>
    <br>
    <video src="vedios/music4.mp4" width="33%" height="300" poster="https://img3.goodfon.com/wallpaper/nbig/1/cb/muzyka-ekvalayzer-bit.jpg" controls></video>
    <video src="vedios/music5.mp4" width="33%" height="300" poster="https://thumbs.dreamstime.com/b/violet-music-notes-sheet-tonality-blurred-lights-background-112324226.jpg" controls></video>
    <video src="vedios/music6.mp4" width="33%" height="300" poster="https://i.pinimg.com/originals/95/04/9c/95049cad79fbb4fbf22f5f0d075009cb.jpg" controls></video>
</body>
</html>