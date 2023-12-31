
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./fontawesome-free-5.7.2-web 2/css/all.css">
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <title>Videos</title>
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
    padding: 20px;
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


/* service */
.services{
    background: lightskyblue;
}
.services-title{
    padding-top: 4rem;
}

.service-card{
    border: 0.3rem solid black;
    padding: 0.3rem;
    border-radius: 1rem;
    margin: 2rem 0;
    /* box-shadow style */
    -webkit-box-shadow: 5px 5px 2px 0px rgba(0,0,0,0.75);
    -moz-box-shadow: 5px 5px 2px 0px rgba(0,0,0,0.75);
    box-shadow: 5px 5px 2px 0px rgba(0,0,0,0.75);
    transition: var(--maintrasition);
}
.service-card:hover{
    -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
    -moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
    box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
}
.service-img{
    width: 100%;
    display: block;
    /* more style */
    border-top-left-radius: 0.5rem;
    border-top-right-radius: 0.5rem;

}
.service-info{
    background: grey;
    border-bottom-left-radius: 0.5rem;
    border-bottom-right-radius: 0.5rem;
    text-align: center;
    font-size: 1.3rem;
    /* letter-spacing: var(--letterspacing); */ /**/
    color: var(--mainwhite);
    text-transform: capitalize;
    padding: 2.5rem 0 1rem 0;
}
.service-btn{
    display: inline-block;
    background: var(--mainwhite);
    text-decoration: none;
    text-transform: capitalize;
    padding: 0.8rem 2rem;
    color: var(--primarycolor);
    font-weight: bold;
    border: 0.2rem solid var(--mainwhite);
    border-radius: 0.5rem;
    cursor: pointer;
    margin-top: 1rem;
    transition: var(--maintrasition);
}
.service-btn:hover{
    background: transparent;
    color: var(--mainwhite);

}
@media screen and (min-width:768px){
    .service-card{
        float: left;
        width: 45%;
        margin-right: 5%;
        /*  */

    }
}
@media screen and (min-width:992px){
    .service-card{
        float: left;
        width: 30%;
        margin-right: 3.33%;
        /*  */
    }
}
.service-img-container{
    position: relative;
}
.service-icon{
    position: absolute;
    bottom: 0;
    left: 50%;
    font-size: 2rem;
    background-color: pink;
    padding: 0.25rem 0.6rem;
    border-radius: 50%;
    border: 0.2rem solid black;
    color: var(--mainblack);
    transform: translate(-50%,50%);
    /* box-shadow: ; */
    -webkit-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
    -moz-box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);
    box-shadow: 10px 10px 5px 0px rgba(0,0,0,0.75);

}
/* end of service */
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
        <li><a href="main.php" class="nav-link"><i class="fa fa-columns" aria-hidden="true"></i> Dashboard</a></li>
            <li><a href="songs.php" class="nav-link"><i class="fa fa-headphones" aria-hidden="true"></i> Audio Playlist</a></li>
            <li><a href="#" class="nav-link"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Reels</a></li>
            <li><a href="online.php" class="nav-link"><i class="fa fa-laptop" aria-hidden="true"></i> Tutorials</a></li>
            <li><a href="we.php" class="nav-link"><i class="fa fa-address-card" aria-hidden="true"></i>
 About Us</a></li>
            <li><a href="customer.php" class="nav-link"><i class="fa fa-star" aria-hidden="true"></i>
 Customer Reviews</a></li>
        </ul>
    </nav>
    
    
    
            
    <!-- services -->
    <section class="services">
        <!-- section title -->
        <div class="services-title text-center">
            <h3 class="section-subtitle">Videos</h3>
            <h2 class="section-title ">Here are some reels/music videos</h2>
            
            
        </div>

        <!--end section title -->
        <div class="section-center clearfix">
            <!-- single-card -->
            <article class="service-card">
                <!-- img containner -->
                <div class="service-img-container">
                    <!-- igm -->
                    <video src="vedios/music1.mp4" height="300px" width="290px" poster="https://previews.123rf.com/images/nicky2342/nicky23421203/nicky2342120300001/12781980-music-notes-background.jpg" controls></video>
                    <!-- service icon -->
                    <span class="service-icon">
                        <i class="fa fa-music" aria-hidden="true"></i>
                    </span>
                </div>
                <!-- service-info -->
                <div class="service-info">
                   
                    <i class="fa fa-heart" aria-hidden="true"></i>
                    <i class="fa fa-heart" aria-hidden="true"></i>
                    <i class="fa fa-heart" aria-hidden="true"></i>
                    
                </div>
            </article>
            <!--end of  single-card -->
            <!-- single-card -->
            <article class="service-card">
                <!-- img containner -->
                <div class="service-img-container">
                    <!-- igm -->
                    <video src="vedios/music2.mp4" height="300px" width="290px" poster="/images/green.jpg" controls></video>                   
                    <!-- service icon -->
                    <span class="service-icon">
                        
                        <i class="fa fa-music" aria-hidden="true"></i>
                    </span>
                </div>
                <!-- service-info -->
                <div class="service-info">
                    
                    <i class="fa fa-heart" aria-hidden="true"></i>
                    <i class="fa fa-heart" aria-hidden="true"></i>
                    <i class="fa fa-heart" aria-hidden="true"></i>
                    <i class="fa fa-heart" aria-hidden="true"></i>
                </div>
            </article>
            <!--end of  single-card -->
            <!-- single-card -->
            <article class="service-card">
                <!-- img containner -->
                <div class="service-img-container">
                    <!-- igm -->
                    <video src="vedios/music 3.mp4" height="300px" width="290px"poster="https://wallpaperaccess.com/full/1162634.jpg" controls></video>                   
                    <!-- service icon -->
                    <span class="service-icon">
                        <i class="fa fa-music" aria-hidden="true"></i>
                    </span>
                </div>
                <!-- service-info -->
                
                <div class="service-info">
                    <i class="fa fa-heart" aria-hidden="true"></i>
                    <i class="fa fa-heart" aria-hidden="true"></i>
                    <i class="fa fa-heart" aria-hidden="true"></i>
                </div>
            </article>
            <!--end of  single-card -->
      <br>
      <article class="service-card">
        <!-- img containner -->
        <div class="service-img-container">
            <!-- igm -->
            <video src="vedios/music4.mp4" height="300px" width="290px" poster="https://img3.goodfon.com/wallpaper/nbig/1/cb/muzyka-ekvalayzer-bit.jpg" controls></video>           
            <!-- service icon -->
            <span class="service-icon">
                <i class="fa fa-music" aria-hidden="true"></i>
            </span>
        </div>
        <!-- service-info -->
        <div class="service-info">
            <i class="fa fa-heart" aria-hidden="true"></i>
            <i class="fa fa-heart" aria-hidden="true"></i>
            <i class="fa fa-heart" aria-hidden="true"></i>
        </div>
    </article>
    <!--end of  single-card -->
    <!-- single-card -->
    <article class="service-card">
        <!-- img containner -->
        <div class="service-img-container">
            <!-- igm -->
            <video src="vedios/music5.mp4" height="300px" width="290px" poster="https://thumbs.dreamstime.com/b/violet-music-notes-sheet-tonality-blurred-lights-background-112324226.jpg" controls></video>          
            <!-- service icon -->
            <span class="service-icon">
                
                <i class="fa fa-music" aria-hidden="true"></i>
            </span>
        </div>
        <!-- service-info -->
        <div class="service-info">
           
            <i class="fa fa-heart" aria-hidden="true"></i>
            <i class="fa fa-heart" aria-hidden="true"></i>
            <i class="fa fa-heart" aria-hidden="true"></i>
            
        </div>
    </article>
    <!--end of  single-card -->
    <!-- single-card -->
    <article class="service-card">
        <!-- img containner -->
        <div class="service-img-container">
            <!-- igm -->
            <video src="vedios/music6.mp4" height="300px" width="290px" poster="https://i.pinimg.com/originals/95/04/9c/95049cad79fbb4fbf22f5f0d075009cb.jpg" controls></video>          
            <!-- service icon -->
            <span class="service-icon">
                <i class="fa fa-music" aria-hidden="true"></i>
            </span>
        </div>
        <!-- service-info -->
        
        <div class="service-info">
            <i class="fa fa-heart" aria-hidden="true"></i>
            <i class="fa fa-heart" aria-hidden="true"></i>
            <i class="fa fa-heart" aria-hidden="true"></i>
            <i class="fa fa-heart" aria-hidden="true"></i>
            <i class="fa fa-heart" aria-hidden="true"></i>
            
        </div>
    </article>    
    <article class="service-card">
        <!-- img containner -->
        <div class="service-img-container">
            <!-- igm -->
            <video src="vedios/music9.mp4" height="300px" width="290px" poster="https://cdn.guidingtech.com/imager/assets/WordPress-Import/2017/08/183037/Click-to-enlarge-free-music-wallpaper-backgrounds-and-download_4d470f76dc99e18ad75087b1b8410ea9.jpg?1594275686" controls></video>
            <!-- service icon -->
            <span class="service-icon">
                <i class="fa fa-music" aria-hidden="true"></i>
            </span>
        </div>
        <!-- service-info -->
        <div class="service-info">
           
            <i class="fa fa-heart" aria-hidden="true"></i>
            <i class="fa fa-heart" aria-hidden="true"></i>
            <i class="fa fa-heart" aria-hidden="true"></i>
            <i class="fa fa-heart" aria-hidden="true"></i>
            <i class="fa fa-heart" aria-hidden="true"></i>
        </div>
    </article>
    <!--end of  single-card -->
    
    <article class="service-card">
        <!-- img containner -->
        <div class="service-img-container">
            <!-- igm -->
            <video src="vedios/music8.mp4" height="300px" width="290px" poster="https://i.pinimg.com/originals/83/6e/84/836e84586da179931d04e8aafa0a672f.jpg" controls></video>
            <!-- service icon -->
            <span class="service-icon">
                <i class="fa fa-music" aria-hidden="true"></i>
            </span>
        </div>
        <!-- service-info -->
        <div class="service-info">
            <i class="fa fa-heart" aria-hidden="true"></i>
            <i class="fa fa-heart" aria-hidden="true"></i>
            <i class="fa fa-heart" aria-hidden="true"></i>
            <i class="fa fa-heart" aria-hidden="true"></i>
            
        </div>
    </article>
    <!--end of  single-card -->

    <article class="service-card">
        <!-- img containner -->
        <div class="service-img-container">
            <!-- igm -->
            <video src="vedios/music7.mp4" height="300px" width="290px" poster="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRC8jRdIMxUtvlzhp8b3_1u1oeWw3rMYSBroQ&usqp=CAU" controls></video>
            <!-- service icon -->
            <span class="service-icon">
                <i class="fa fa-music" aria-hidden="true"></i>
            </span>
        </div>
        <!-- service-info -->
        <div class="service-info">
           
            <i class="fa fa-heart" aria-hidden="true"></i>
            <i class="fa fa-heart" aria-hidden="true"></i>
            <i class="fa fa-heart" aria-hidden="true"></i>
            
        </div>
    </article>
    <!--end of  single-card -->
        </div>
    </section>
    <!-- end of services -->
   
    <footer class="footer">
        <div class="social-center">
            <div>
                <a href="https://www.instagram.com/ydv_pr.iya/" target="_blank" class="social-icon">
                    <i class="fa fa-instagram"></i>
                </a>
                <!--end of social-icon -->
                <!-- social-icon -->
                <a href="https://www.hackerrank.com/priyayadav220306" target="_blank" class="social-icon">
                    <i class="fa fa-header"></i>
                </a>
                <!--end of social-icon -->
                <!-- social-icon -->
                <a href="https://www.linkedin.com/in/priya-yadav-165591200/" target="_blank" class="social-icon">
                    <i class="fa fa-linkedin"></i>
                </a>
                <!--end of social-icon -->
            </div>
            <p class="footer-text">
                &copy;<span class="text-primary"></span>CRAZZY TRIO
            </p>
        </div>
    </footer>
    <script>
        const navBtn = document.getElementById('nav-btn');
const navBar = document.getElementById('navbar');
const navClose = document.getElementById('nav-close');
navBtn.addEventListener('click',()=>{
    navBar.classList.add("shownav");
});
navClose.addEventListener('click', () => {
    navBar.classList.remove("shownav");
});
    </script>
    
</body>

</html>