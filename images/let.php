<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=!, initial-scale=1.0">
    <title>Home</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>

<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
   <style>
       *{
    margin: 0;
    padding: 0;
    font-family: 'Times New Roman', Times, serif;
}

.container{
    height: 100vh;
    width: 100vw;
    background-image: url(https://fltmag.com/wp-content/uploads/2019/10/nov19music.jpg);
    background-size: cover;
    background-position: center;
    position: sticky;
}

.navbar{
    margin: auto;
    padding: 15px 0;
    display: flex;
    align-items: center;
    justify-content: right;
}

.logo{
    cursor: pointer;
    width:40px;
    background-position: left;
    padding: 0;
}

.navbar ul li{
    list-style: none;
    display: inline-block;
    margin: 0 55px;
}

.navbar ul li a{
    color: black;
    font-size: 16px;
    text-decoration: none;
    text-align: right;
    
}



.ab{
    margin-left: 200px;
    margin-bottom: 1000px;
    padding: 15px 0;
    display: flex;
    align-items: right;
    justify-content: right;
}


ul{
    font-size: 35px;
}
.ab ul li{
    list-style: none;
    display: inline-block;
    margin: 0 20px;
}

.ab ul li a{
    color: crimson;
    font-size: 30px;
    text-decoration: none;
    text-align: right;
    padding: 10px;
    margin: 50px;
}


h2{
    font-size: 80px;
    font-weight:1000px;
    font-family: 'Dancing Script', cursive;
    color:rgb(102, 9, 144);
    text-align:left;
   
}
.like__btn {
    padding: 10px 15px;
    background: red;
    font-size: 18px;
    font-family: "Open Sans", sans-serif;
    border-radius: 5px;
    color: #e8efff;
    outline: none;
    border: none;
    cursor: pointer;
  }

  .like__btn:hover{
      background-color: blue;
      
  }
  
       </style>
</head>
<body>
    <div class="container">
        
        <div class="navbar">
        <img src="/images/logo.jpg" class="logo">
        <ul>

         <li><a href="#"><b>HOME</b></a></li>
         <li><a href="main.php" target="_blank"><b>MAIN</b></a></li>
         <li><a href="about_us.php" target="_blank"><b>ABOUT</b></a></li>
         <li><a href="specification.php"><b>SPECIFICATIONS</b></a></li>
         <li><a href="playlist.php"  target="_blank"><b>VIEW PLAYLIST</b></a></li>
         <li><a href="contact_us.php" target="_blank"><b>CONTACT US</b></a></li>
        </ul>
    </div>
    
    <h2>Music with us</h2>
    
    <button class="like__btn">
   <span id="icon"><i class="far fa-thumbs-up"></i></span>
   <span id="count">100</span> Likes!
</button>
     
 
<div class="ab">  
  <ul> Lets get In Some Music:
  <br>
         <li><a href="https://wynk.in/music/playlist/rock-songs/srch_bsb_1533795770694"><b>Rock songs</b></a></li>
         <br>
         <li><a href="https://wynk.in/music/list/patriotic-songs/srch_bsb_1565348568689" target="_blank"><b>Patrotic songs</b></a></li>
           <br>
         <li><a href="https://wynk.in/music/list/workout-music/bb_1528709650241"><b>Workout Music</b></a></li>
           <br>
         <li><a href="https://wynk.in/music/playlist/sufi-music/srch_bsb_1505718272429"  target="_blank"><b>Sufi Music</b></a></li>
           <br>
         <li><a href="https://wynk.in/music/playlist/dj-songs/srch_bsb_1548838682329" target="_blank"><b>DJ Songs</b></a></li>
        </ul>
        </div>
</div>
</div>
</div>

<script>
$('.message a').click(function(){$('form').animate({height: "toggle",opacity: "toggle"},"slow");});
const likeBtn = document.querySelector(".like__btn");
let likeIcon = document.querySelector("#icon"),
  count = document.querySelector("#count");

let clicked = false;


likeBtn.addEventListener("click", () => {
  if (!clicked) {
    clicked = true;
    likeIcon.innerHTML = `<i class="fas fa-thumbs-up"></i>`;
    count.textContent++;
  } else {
    clicked = false;
    likeIcon.innerHTML = `<i class="far fa-thumbs-up"></i>`;
    count.textContent--;
  }
});

</script>

</div>


</body>
</html>
