<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>E-comm Project</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</head>
<body>
    <?php echo e(View::make('header')); ?>

    <?php echo $__env->yieldContent('content'); ?>
    <?php echo e(View::make('footer')); ?>


</body>
<style>
    .custom-login{
        height: 500px;
        padding-top: 100px;
        padding-bottom: 100px;
        color: green;
        background-image: url("images/product-1.jpg");

    }

    img.slider-img{
        height: 400px !important
        
    }
    .custom-product{
        height: 800px;
        width :100%;
        
    }
    .slider-text{
        background-color: #35443585 !important;
    }
    .trending-image{
        height: 100px;
    }
    
    .trening-item{
        float: left;
        width: 20%;
        max-width: 1080px;
  margin: auto;
  padding-left: 25px;
  padding-right: 25px;

    }
    .trending-wrapper{
        margin: 30px;
    }
   
    .detail-img{
        height: 200px;
    }
    .search-box{
        width: 500px !important
    }
    .cart-list-devider{
        border-bottom: 1px solid #ccc;
        margin-bottom: 20px;
        padding-bottom: 20px;
        color:#FF007F;
       
    }   



    .custom-login{
    height:620px;
    width:1500px;
    position :auto;
    top:-10%; left: 0;
    z-index: 100;
    background-image: url("/images/bgimage.jpg");

    display: flex;
    align-items: center;
    justify-content: center;
    }

    .custom-login.popup{
        top:0;
    }

    .custom-login form{
        width:35rem;
        background:#fff;
        margin:0 2rem;
        padding:1rem 3rem;
        border-radius: .5rem;
        box-shadow: 0 .1rem .3rem #333;
        position: relative;
    }

    .custom-login form h3{
        font-size: 3rem;
        color:#f39c12;
        padding:1rem 0;
    }

.custom-login form .box{
    width:100%;
    padding:1rem 0;
    margin:1rem 0;
    border-bottom: .2rem solid #666;
    font-size: 1.6rem;
    color:#333;
    text-transform: none;
    position:center;
}

.custom-login form .box::placeholder{
    text-transform: capitalize;
}

.custom-login form .box:focus{
    border-color: red;
}

.custom-login form .box:nth-child(3){
    margin-bottom: 5rem;
}

.custom-login form p{
    font-size: 1.4rem;
    color:#666;
    padding:.5rem 0;
}

.custom-login form p a{
    color:#f39c12;
}

.custom-login form .btn{
    width: 100%;
    margin:2rem 0;
}

.custom-login form .btn:hover{
    background:yellow;
}

.custom-login form .fa-times{
    position: absolute;
    top:1.5rem; right:2rem;
    font-size: 2.5rem;
    cursor: pointer;
    color:#999;
}

.custom-login form .fa-times:hover{
    color:#444;
}

:root{
    --gradient:linear-gradient(90deg, #029cf2,#9db3bf);
}

.cutom-login{
    font-family: 'Open Sans', sans-serif;
    margin:0; padding:0;
    box-sizing: border-box;
    border:none; outline: none;
    text-decoration: none;
    text-transform: capitalize;
    transition: all .2s linear;
}

.custom.login::selection{
    background:#f39c12;
    color:#fff


</style>
</html><?php /**PATH C:\xampp\htdocs\ecommerece-website\resources\views/master.blade.php ENDPATH**/ ?>