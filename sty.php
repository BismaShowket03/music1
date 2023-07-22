
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./fontawesome-free-5.7.2-web 2/css/all.css">
    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <title>About</title>
  <style>
      @import url('https://fonts.googleapis.com/css2?family=Catamaran:wght@400;700&family=Grand+Hotel&display=swap');
*{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}
:root{
    --slantedtext:'Grand Hotel',cursive;
    --primarycolor:#698f3f;
    --secondarycolor:#fca311;
    --mainblack:#3a3e3b;
    --maingrey:#bbb8b8;
    --mainwhite:white;
    --maintrasition: all 0.3s ease-in-out;
    --letterspacing:0.5rem;
}
/* helper/utility */
a{
    text-decoration: none;
}
.text-white{
    color: var(--mainwhite);
}
.text-center{
    text-align: center;
}
.text-primary{
    color: var(--primarycolor);
}
/* clear-fix */
.clearfix::after,.clearfix::before{
    content: "";
    clear: both;
    display: table;
}
/* global */
.section-center {
    padding: 4rem 0;
    width: 80vw;
    max-width: 1170px;
    margin: 0 auto;
}
.section-subtitle{
    font-size: 2rem;
    font-family: var(--slantedtext);
    letter-spacing: var(--letterspacing);
    text-transform: capitalize;
    color: var(--primarycolor);
}
.section-title{
    font-size: 2rem;
    text-transform: uppercase;
}
/* nav-btn */
.nav-btn{
    position: fixed;
    z-index: 1;
    top: 0;
    left: 0;
    color: var(--primarycolor);
    margin: 1rem 1.2rem;
    font-size: 2rem;
    animation: bounce 2s ease-in-out infinite;
    cursor: pointer;
}
@keyframes bounce{
    0%{
        transform: scale(1);
    }
    50%{
        transform: scale(1.5);
    }
    100%{
        transform: scale(1);
    }

}
/* navbar */
.navbar{
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    bottom: 0;
    z-index: 2;
    background: var(--maingrey);
    padding-top: 1rem;
    padding-left: 2rem;
    transition: var(--maintrasition);
    /* tranform */
    transform: translateX(-100%);
}
.shownav{
    transform: translateX(0);
}
.nav-close{
    font-size: 2rem;
    cursor: pointer;

}
.nav-items{
    list-style-type: none;

}
.nav-link{
    display: block;
    font-size: 2rem;
    text-transform: uppercase;
    color: var(--primarycolor);
    transition: var(--maintrasition);
}
.nav-link:hover{
    color: var(--mainblack);
    padding-left: 0.5rem;

}
@media screen and (min-width:600px) {
    .navbar{
        width: 30vw;
        max-width: 20rem;
    }
}
/* end of navbar */
/* header */ 
.header{
    min-height: 100vh;
    /* position: fixed; */
    /* background: linear-gradient(rgba(0 , 0, 0, 0.4),rgba(0,0,0,0.4)), url('./img/main-bcg.jpeg') center/cover no-repeat fixed ; */
    background-image: url(https://png.pngtree.com/thumb_back/fh260/background/20190216/pngtree-background-design-of-dynamic-music-symbols-image_2413.jpg);
  background-size: 100% 110%;
    position: relative;

}
/* banner */
.banner{
    position: absolute;
    top: 50%;
    left: 50%;
    text-align: center;
    transform: translate(-50%,-50%);
    letter-spacing: 0.5rem;
}
.banner-subtitle{
    font-size: 2rem;
    font-family: cursive;
    color: white;
    /* animation */
    animation: slidefromright 4s ease-in-out;

}
.banner-title{
    text-transform: uppercase;
    font-size: 100px;
    color: black ;
    margin-top: 2.1rem;
    line-height: 1.3;
    font-family: 'Dancing Script', cursive;
    /* animation */
    animation: slidefromleft 4s ease-in-out;
}
.main-btn,.banner-btn{
    display: inline-block;
    background-color: greenyellow;
    text-transform: uppercase;
    padding:0.8rem 1.2rem ;
    color: black;
    font-weight: bold;
    outline: 0.2rem solid red;
    outline-offset: 4px;
    cursor: pointer;
    margin-top: 2rem;
    transition:  all 0.3s ease-in-out;
}
.main-btn:hover,.banner-btn:hover{
    color:red;
    opacity: 0.7;

}
.banner-btn{
    padding: 1.2rem 1.5rem;
    /* animation */
    animation: show 5s ease-in-out ;
}
/* end-header */
body{
    font-family: 'Catamaran',sans-serif;
    line-height: 1.5;
}
/* animation */
@keyframes show {
    0%{
        transform: scale(2);
        opacity: 0;
    }
    100%{
        transform: scale(1);
        opacity: 1;
    }
}
@keyframes slidefromright {
    0%{
        transform: translateX(1000px);
    }
    50%{
        transform: translateX(-200px);
    }
    75%{
        transform: translateX(50px);
    }
    100%{
        transform: translateX(0px);
    }
}
@keyframes slidefromleft {
    0%{
        transform: translateX(-1000px);
    }
    50%{
        transform: translateX(200px);
    }
    75%{
        transform: translateX(-50px);
    }
    100%{
        transform: translateX(0px);
    }
}

/* end-animation */
/* content-divider */
.content-divider{
    height: 1rem;
    background: linear-gradient(to left,red,green,red);

}
.like__btn {
    display: inline-block;
    background-color: palevioletred;
    text-transform: uppercase;
    padding:1rem 1.2rem ;
    color: black;
    font-weight: bold;
    outline: 0.2rem solid white;
    outline-offset: 4px;
    cursor: pointer;

    margin-left: 100px;
    transition:  all 0.3s ease-in-out;
}

  .like__btn:hover{
      background-color: royalblue;
      color: black;
      
  }
  .about-img,.about-info {
    padding: 2rem 0;
}
.about-picture-container{
    background: var(--primarycolor);
    border: 0.5rem solid red;
    border-radius: 1rem;
    /* overflow */
    overflow: hidden;
}

.about-picture{
    width: 100%;
    display: block;
    transition: var(--maintrasition);
}
.about-picture-container:hover .about-picture{
    opacity: 0.5;
    transform: scale(1.2);
}
.about-text{
    margin: 1rem 0;
    max-width: 26rem;
}
@media screen and (min-width:992px) {
    .about-img,.about-info {
    float: left;
    width: 50%;
    padding: 2rem;
    }
}
/* end of about */
/* footer */
.footer{
    background: var(--mainblack);
    text-align: center;
    padding-bottom: 1rem;
}
.social-icon{
    color: var(--mainwhite);
    font-size: 1.4rem;
    margin-right: 1rem;
    transition: var(--maintrasition);

}
.social-icon:hover{
    color: var(--primarycolor);

}
.footer-text{
    text-transform: uppercase;
    color:var(--mainwhite);
    letter-spacing: var(--letterspacing);
    margin-top: 1rem;
    font-size: 0.85rem;
}
/* end of footer */
/* word-spacing */
.word-spacing{
    word-spacing: 0.25rem;
}
      </style>
</head>

<body>
    <!-- nav-button -->
    <span class="nav-btn" id="nav-btn">
        <i class="fa fa-bars"></i>
    </span>
    <!-- nav-bar -->
    <nav class="navbar" id="navbar">
        <div class="navbar-header">
            <span class="nav-close" id="nav-close">
                <i class="fa fa-times"></i>
            </span>
        </div>
        <ul class="nav-items">
            <li><a href="#"><b>HOME</b></a></li>
            <li><a href="index.php" class="nav-link">home</a></li>
            <li><a href="skills.php" class="nav-link">Skills</a></li>
            <li><a href="about.php" class="nav-link">About</a></li>
            <li><a href="certificate.php" class="nav-link">Certificate</a></li>
        </ul>
    </nav>
    <!-- header -->
    <header class="header">
        <div class="banner">
            <h3 class="banner-subtitle">“Music can change the world because it can change people.”  </h3>
            <h1 class="banner-title">Music With Us</h1>
            <a href="songs.php" target="_blank" class="banner-btn">Explore</a>
            <button class="like__btn">
                <span id="icon"><i class="fa fa-thumbs-up"></i></span>
                <span id="count">100</span> Likes!
             </button>
             <script>
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
    </header>
    <!-- end-header -->
    <!-- content divider -->
    <div class="content-divider"></div>
    <!-- end content divider -->
    
    <!-- about  -->
    <section class="about">
        <div class="section-center clearfix">
            <!-- first column -->
            <article class="about-img">
                <div class="about-picture-container">
                    <img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcSu2XJmoum7SXeMRNjpAjaF5mpknT9Jiro7U_hpuPXg5LKsSrB81vKFNycyo-favOPUzms&usqp=CAU" alt="Playing Music" class="about-picture" height="400px" />
                </div>
            </article>
            <!-- second column -->
            <article class="about-info">
                <!-- section title -->
                <div>
                    <h3 class="section-subtitle">Hey there</h3>
                    <h2 class="section-title">Nice to meet you!</h2>
                </div>
                <!--end section title -->
                <p class="about-text">
                    MUSIC once admitted to the SOUL becomes a sort of SPIRIT and never dies
                </p>
                <p class="about-text">
                    --CREATED BY MUSIC LOVERS FOR MUSIC LOVERS--
                </p>
                <a href="about_us.php" class="main-btn">Know more</a>
            </article>
        </div>
    </section>
    <!-- end of about -->
    
    <!-- end of contact -->
    <footer class="footer">
        <div class="social-center">
            <div>
                <a href="https://instagram.com/i.m.saira_?igshid=MzNlNGNkZWQ4Mg==" target="_blank" class="social-icon">
                    <i class="fa fa-instagram"></i>
                </a>
                <!--end of social-icon -->
                <!-- social-icon -->
                <a href="https://www.hackerrank.com/syedhaya12345?hr_r=1" target="_blank" class="social-icon">
                    <i class="fa fa-header"></i>
                </a>
                <!--end of social-icon -->
                <!-- social-icon -->
                <a href="https://www.linkedin.com/in/bisma-showkat-ba6738211/" target="_blank" class="social-icon">
                    <i class="fa fa-linkedin"></i>
                </a>
                <!--end of social-icon -->
            </div>
            <p class="footer-text">
                &copy;<span class="text-primary"></span>CRAZZY TRIO
            </p>
        </div>
    </footer>

    <script src="./app.js"></script>
</body>

</html>