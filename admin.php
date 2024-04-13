<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">

    <link rel="stylesheet" href="css/admin-style.css">

</head>
<body>


<header>

    <input type="checkbox" name="" id="toggler">
    <label for="toggler" class="fas fa-bars"></label>

    <a href="#" class="logo">Dessert <span>Cafe</span></a>

    <nav class="navbar">
        <a href="#home">home</a>
        <a href="#products">products</a>
        <a href="#review">review orders</a>
        <a href="logout.php">logout</a>
    </nav>
</header>


<section class="home" id="home">

    <div class="content">
        <h3>Dessert Cafe Admin!</h3>
        <span>Selamat Datang dihalaman Admin</span>
    </div>
</section>
    
<section class="products" id="products">

    <h1 class="heading"> All <span>Products</span></h1>

    <div class="box-container">

       <div class="box">
            <div class="image">
                <img src="img/kue1.jpg" alt="">
            </div>
            <div class="content">
                <h3>Strawberry Yogurt</h3>
                <div class="price"> Rp.45.000</div>
            </div>
       </div>

       <div class="box">
            <div class="image">
                <img src="img/kue2.jpg" alt="">
            </div>
            <div class="content">
                <h3>Macaroon Love</h3>
                <div class="price"> Rp.55.000</span></div>
            </div>
       </div>

       <div class="box">
            <div class="image">
                <img src="img/kue3.jpg" alt="">
            </div>
            <div class="content">
                <h3>Mango Sweety</h3>
                <div class="price"> Rp.70.000</span></div>
            </div>
       </div>

       <div class="box">
            <div class="image">
                <img src="img/kue4.jpg" alt="">
            </div>
            <div class="content">
                <h3>Pancake Strawmolly</h3>
                <div class="price"> Rp.41.660</span></div>
            </div>
       </div>

       <div class="box">
            <div class="image">
                <img src="img/kue5.jpg" alt="">
            </div>
            <div class="content">
                <h3>Catty Cake</h3>
                <div class="price"> Rp.65.000</div>
            </div>
       </div>

       <div class="box">
            <div class="image">
                <img src="img/kue6.jpg" alt="">
            </div>
            <div class="content">
                <h3>Pudding Honey</h3>
                <div class="price"> Rp.43.000</div>
            </div>
       </div>

       <div class="box">
            <div class="image">
                <img src="img/kue7.jpg" alt="">
            </div>
            <div class="content">
                <h3>Bread Snoopy</h3>
                <div class="price"> Rp.66.000</div>
            </div>
       </div>

       <div class="box">
            <div class="image">
                <img src="img/kue8.jpg" alt="">
            </div>
            <div class="content">
                <h3>Donat Party</h3>
                <div class="price">Rp.39.000</div>
            </div>
       </div>
    </div>
</section>

<section class="review" id="review">

<h1 class="heading"> customer's <span>review</span> </h1>

<div class="box-container">

    <div class="box">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>Sangat Enak,aku paling suka dengan bread snoopy!</p>
        <div class="user">
            <img src="img/person1.jpg" alt="">
            <div class="user-info">
                <h3>Giselle Aeri</h3>
                <span>Happy Customer</span>
            </div>
        </div>
        <span class="fas fa-quote-right"></span>
    </div>

    <div class="box">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>Saya pasti akan kembali membeli dessert disini!karena membuat nagih saking enaknya</p>
        <div class="user">
            <img src="img/person5.jpg" alt="">
            <div class="user-info">
                <h3>Haruto</h3>
                <span>Happy Customer</span>
            </div>
        </div>
        <span class="fas fa-quote-right"></span>
    </div>

    <div class="box">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>Markotop deh ni cafe!</p>
        <div class="user">
            <img src="img/person3.jpg" alt="">
            <div class="user-info">
                <h3>Jihoon Park</h3>
                <span>Happy Customer</span>
            </div>
        </div>
        <span class="fas fa-quote-right"></span>
    </div>

    <div class="box">
        <div class="stars">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
        </div>
        <p>Kok bisa ya dessert-dessertnya enak semua?!</p>
        <div class="user">
            <img src="img/person4.jpg" alt="">
            <div class="user-info">
                <h3>Christian Yu</h3>
                <span>Happy Customer</span>
            </div>
        </div>
        <span class="fas fa-quote-right"></span>
    </div>

</div>
</section>

</body>
</html>


