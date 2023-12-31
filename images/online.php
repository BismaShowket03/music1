
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./fontawesome-free-5.7.2-web 2/css/all.css">
    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 
    <link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@700&display=swap" rel="stylesheet">
    <title>Online Music Classes</title>
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
    color:black;
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

/* product */
/* .products-info{
    margin-left: 1rem;
} */
.products{
    background:lightslategrey;
}
.products-info,.products-inventory{
    padding: 2rem 0;

}
.flex-box{
    display: flex;
    justify-content:flex-start;
}
.product-text{
    color: var(--mainwhite);
    margin: 1rem 0;
    max-width: 26rem;
    font-size: 24px;
}
.product{
    padding: 2rem 0;
}
.product-title{
    color: var(--mainwhite);
    /* text-transform: uppercase; */
    text-transform: capitalize;/**/
    text-align: center;/**/
    /* letter-spacing: var(--letterspacing); */
    margin-bottom: 1rem;
}
.product-price{
    
    /* letter-spacing: var(--letterspacing); */
    text-align: center;/**/
    text-transform: uppercase;
    font-family:Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
}
.main-btn{
    margin-left: 50px;
}
@media screen and (min-width:768px) {
    .product{
        float: left;
        width: 50%;
        padding: 2rem 1rem;
    }
    .products-info{
        padding: 2rem 1rem;
    }
}
@media screen and (min-width:992px) {
    .product{
        width: 33.3%;  
    }
    
}
@media screen and (min-width:1200px) {
    .products-info{
        float: left;
        width: 30%;
    }
    .products-inventory{
        float: left;
        width: 70%;
    }
    .product{
        padding: 1.5rem 1rem 0 1rem;
    }
    
}
.product-img{
    width:100%;
    display: block;
    border-radius: 0.4rem;
    margin-bottom: 2rem;
}
/* end of product */


/* footer */
.footer{
    background: pink;
    text-align: center;
    padding-bottom: 2rem;
}
.social-icon{
    color: black;
    font-size: 1.4rem;
    margin-right: 1rem;
    transition: var(--maintrasition);

}
.social-icon:hover{
    color: var(--primarycolor);

}
.footer-text{
    text-transform: uppercase;
    color:black;
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
            <li><a href="vedioes.php" class="nav-link"><i class="fa fa-play-circle-o" aria-hidden="true"></i> Reels</a></li>
            <li><a href="#" class="nav-link"><i class="fa fa-laptop" aria-hidden="true"></i> Tutorials</a></li>
            <li><a href="we.php" class="nav-link"><i class="fa fa-address-card" aria-hidden="true"></i>
 About Us</a></li>
            <li><a href="customer.php" class="nav-link"><i class="fa fa-star" aria-hidden="true"></i>
 Customer Reviews</a></li>
        </ul>
    </nav>
    
    
    
    <section class="products">
        <div class="section-center clearfix">
            <!-- product info -->
            <article class="products-info">
                <!-- section title -->
                <div>
                    <h3 class="section-subtitle">Check Out</h3>
                    <h2 class="section-title text-white">Our Online Music Classes</h2>
                </div>
                <!--end section title -->
                <p class="product-text">
                    Start shaping your future with "Music With Us".
                    Here are some music classes...Hope you like them...
                  <br>
                    Click the picture to join the class..
                </p>
                
            </article>
            <!-- product inventory -->
            <article class="products-inventory clearfix">
                <!-- single product -->
                <article class="product">
                    <a href="https://www.youtube.com/watch?v=gl0zRKJ_h5s"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTUZASiDE6M0cngKnX8JiCWOtYlp6kZuJYWKw&usqp=CAU" height="230px" width="250px"></a>
                    <h3 class="product-title">Piano Classes</h3>
                    <h3 class="product-price">By Abhuday Music</h3>
                    
                </article>
                <!-- end single product -->
                <!-- single product -->
                <article class="product">
                    <a href="https://www.youtube.com/watch?v=orp7WHibnaU"><img src="https://static.musiciansfriend.com/thehub/binaries/content/gallery/mf/buying-guides/acoustic-string-buying-guide.jpg" height="230px" width="250px"></a>
                    <h3 class="product-title">Guitar Classes</h3>
                    <h3 class="product-price">By Online courses</h3>
                    
                </article>
                <!-- end single product -->
                <!-- single product -->
                <article class="product">
                    <a href="https://www.youtube.com/watch?v=0pMVCqejJQE&feature=youtu.be"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQmmwJzAo2PF_ni2lzgVO6gbzMMkNHfLnS-0KhKuzByFRBuAgVEeJeupUBbqHDiBX2jIng&usqp=CAU" height="230px" width="250px"></a>
                    <h3 class="product-title">Sitar Classes</h3>
                    <h3 class="product-price">By Sayan Goyal</h3>
                    
                </article>
                <!-- end single product -->
               
                <!-- single product -->
                <article class="product">
                    <a href="https://www.youtube.com/watch?v=NGxQb6OHvdA&feature=youtu.be"><img src="/images/dhol.png" height="230px" width="250px"></a>
                    <h3 class="product-title">Dhol Classes</h3>
                    <h3 class="product-price">By Indy Notta</h3>
                    
                </article>
                <!-- end single product -->
                <!-- single product -->
                <article class="product">
                    <a href="https://www.youtube.com/watch?v=8ZqS3z7CKZo"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRu-78m3GRTvn-6Jav7roVOUk7nx1DEe06mtA&usqp=CAU" height="230px" width="250px"></a>
                    <h3 class="product-title">Flute classes</h3>
                    <h3 class="product-price">By flute School</h3>
                    
                </article>
                <!-- end single product -->
                 <!-- single product -->
                 <article class="product">
                    <a href="https://www.youtube.com/watch?v=DYPGlF1Lcw8&feature=youtu.be"><img src="https://t4.ftcdn.net/jpg/03/19/56/81/360_F_319568101_QVZ7J04ey8NZZUBlrTyuZ39LVOZTJWXa.jpg" height="230px" width="250px"></a>
                    <h3 class="product-title">Sexophone Classes</h3>
                    <h3 class="product-price">By Gaurav goel</h3>
                    
                </article>
                <!-- end single product -->
            </article>
        </div>
    </section>
    <!-- end of product -->
    
    <footer class="footer">
        <div class="social-center">
            <div class="social-icons">
                
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