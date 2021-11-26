<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\assets\AppAsset;
use app\widgets\Alert;
use yii\bootstrap4\Breadcrumbs;
use yii\bootstrap4\Html;
use yii\bootstrap4\Nav;
use yii\bootstrap4\NavBar;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>" class="h-100">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body class="d-flex flex-column h-100">
<?php $this->beginBody() ?>

<!DOCTYPE html>
<html lang="en">
<head>
<title>Logistics &mdash; Colorlib Website Template</title>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

<link rel="stylesheet" href="/static/css/style.css">

<link rel="stylesheet" href="/static/css/bootstrap.min.css">
<link rel="stylesheet" href="/static/css/magnific-popup.css">
<link rel="stylesheet" href="/static/css/jquery-ui.css">
<link rel="stylesheet" href="/static/css/owl.carousel.min.css">
<link rel="stylesheet" href="/static/css/owl.theme.default.min.css">

<link rel="stylesheet" href="/static/css/bootstrap-datepicker.css">

<link rel="stylesheet" href="/static/css/flaticon.css">



<link rel="stylesheet" href="/static/css/aos.css">

<link rel="stylesheet" href="/static/css/style1.css">

</head>
<body data-spy="scroll" data-target=".site-navbar-target" data-offset="200">

<!-- <div class="site-wrap"> -->

<div class="site-mobile-menu site-navbar-target">
  <div class="site-mobile-menu-header">
	<div class="site-mobile-menu-close mt-3">
	  <span class="icon-close2 js-menu-toggle"></span>
	</div>
  </div>
  <div class="site-mobile-menu-body"></div>
</div>

<header class="site-navbar py-3 js-site-navbar site-navbar-target" role="banner" id="site-navbar">

  <div class="container">
	<div class="row align-items-center">
	  
	  <div class="col-11 col-xl-2 site-logo">
		<h1 class="mb-0"><a href="" class="text-white h2 mb-0">AZ</a></h1>
	  </div>
	  <div class="col-12 col-md-10 d-none d-xl-block">
		<nav class="site-navigation position-relative text-right" role="navigation">

		  <ul class="site-menu js-clone-nav mx-auto d-none d-lg-block">
			<li><a href="#section-主页" class="nav-link">主页</a></li>
			<li class="has-children">
			  <a href="#section-about" class="nav-link">冬奥会简介</a>
			  <ul class="dropdown">
				<li><a href="#section-how-it-works" class="nav-link">How It Works</a></li>
				<li><a href="#section-our-team" class="nav-link">Our Team</a></li>
			  </ul>
			</li>
			<li><a href="#section-services" class="nav-link">Services</a></li>
			<li><a href="#section-industries" class="nav-link">Industries</a></li>
			<li><a href="#section-blog" class="nav-link">Blog</a></li>
			<li><a href="#section-contact" class="nav-link">Contact</a></li>
		  </ul>
		</nav>
	  </div>


	  <div class="d-inline-block d-xl-none ml-md-0 mr-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle"><span class="icon-menu h3"></span></a></div>

	  </div>

	</div>
  
  
</header>



<div class="site-blocks-cover overlay" style="background-image: url(/static/image/hero_bg_2.jpg);" data-aos="fade" data-stellar-background-ratio="0.5" id="section-主页">
  <div class="container">
	<div class="row align-items-center justify-content-center text-center">

	  <div class="col-md-8" data-aos="fade-up" data-aos-delay="400">
		

		<h1 class="text-white font-weight-light text-uppercase font-weight-bold" data-aos="fade-up">2022北京冬奥会</h1>
		<p class="mb-5" data-aos="fade-up" data-aos-delay="100">一场冰雪盛宴</p>
		<p data-aos="fade-up" data-aos-delay="200"><a href="javascript:;" class="btn btn-primary py-3 px-5 text-white">Get Started!</a></p>

	  </div>
	</div>
  </div>
</div>  

<div class="site-section" id="section-about">
  <div class="container">
	<div class="row mb-5">
	  
	  <div class="col-md-5 ml-auto mb-5 order-md-2" data-aos="fade-up" data-aos-delay="100">
		<img src="/static/picture/img_3.jpg" alt="Image" class="img-fluid rounded">
	  </div>
	  <div class="col-md-6 order-md-1" data-aos="fade-up">
		<div class="text-left pb-1 border-primary mb-4">
		  <h2 class="text-primary">冬奥会简介</h2>
		</div>
		<p>冬季奥林匹克运动会（Olympic Winter Games），简称为冬季奥运会、冬奥会。主要由全世界地区举行，是世界规模最大的冬季综合性运动会，每四年举办一届，1994年起与夏季奥林匹克运动会相间举行。参与国主要分布在世界各地，包括欧洲、非洲、美洲、亚洲、大洋洲。由国际奥林匹克委员会(International Olympic Committee)主办。按实际举行次数计算届数。</p>
		<p class="mb-5">1986年，国际奥委会全会决定把冬季奥运会和夏季奥运会从1994年起分开，每两年间隔举行，1992年冬季奥运会是最后一届与夏季奥运会同年举行的冬奥会。自1924年开始第1届，截至2018年共举办了23届，每四年一届。</p>
		
		<ul class="ul-check list-unstyled success">
		  <li>2014年02月07日-2014年02月23日 俄罗斯索契</li>
		  <li>2018年02月09日-2018年02月25日 韩国平昌</li>
		  <li>2022年02月04日-2022年02月20日 中国北京</li>
		</ul>
		
	  </div>
	  
	</div>
  </div>
</div>

<div class="site-section bg-image overlay" style="background-image: url('/static/image/hero_bg_4.jpg');" id="section-how-it-works">
  <div class="container">
	<div class="row justify-content-center mb-5">
	  <div class="col-md-7 text-center border-primary">
		<h2 class="font-weight-light text-primary" data-aos="fade">How It Works</h2>
	  </div>
	</div>
	<div class="row">
	  <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
		<div class="how-it-work-item">
		  <span class="number">1</span>
		  <div class="how-it-work-body">
			<h2>Make An Order</h2>
			<p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt praesentium dicta consectetur fuga neque fugit a at. Cum quod vero assumenda iusto.</p>
			<ul class="ul-check list-unstyled success">
			  <li class="text-white">Error minus sint nobis dolor</li>
			  <li class="text-white">Voluptatum porro expedita labore esse</li>
			  <li class="text-white">Voluptas unde sit pariatur earum</li>
			</ul>
		  </div>
		</div>
	  </div>

	  <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
		<div class="how-it-work-item">
		  <span class="number">2</span>
		  <div class="how-it-work-body">
			<h2>Make A Payment</h2>
			<p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt praesentium dicta consectetur fuga neque fugit a at. Cum quod vero assumenda iusto.</p>
			<ul class="ul-check list-unstyled success">
			  <li class="text-white">Error minus sint nobis dolor</li>
			  <li class="text-white">Voluptatum porro expedita labore esse</li>
			  <li class="text-white">Voluptas unde sit pariatur earum</li>
			</ul>
		  </div>
		</div>
	  </div>

	  <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="300">
		<div class="how-it-work-item">
		  <span class="number">3</span>
		  <div class="how-it-work-body">
			<h2>Track Your Order</h2>
			<p class="mb-5">Lorem ipsum dolor sit amet consectetur adipisicing elit. Incidunt praesentium dicta consectetur fuga neque fugit a at. Cum quod vero assumenda iusto.</p>
			<ul class="ul-check list-unstyled success">
			  <li class="text-white">Error minus sint nobis dolor</li>
			  <li class="text-white">Voluptatum porro expedita labore esse</li>
			  <li class="text-white">Voluptas unde sit pariatur earum</li>
			</ul>
		  </div>
		</div>
	  </div>

	</div>
  </div>
</div>

<div class="site-section border-bottom" id="section-our-team">
  <div class="container">
	<div class="row justify-content-center mb-5">
	  <div class="col-md-7 text-center border-primary">
		<h2 class="font-weight-light text-primary" data-aos="fade">Our Team</h2>
	  </div>
	</div>
	<div class="row">
	  <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="100">
		<div class="person">
		  <img src="/static/picture/person_1.jpg" alt="Image" class="img-fluid rounded mb-5 w-75 rounded-circle">
		  <h3>Christine Rooster</h3>
		  <p class="position text-muted">Co-Founder, President</p>
		  <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi at consequatur unde molestiae quidem provident voluptatum deleniti quo iste error eos est praesentium distinctio cupiditate tempore suscipit inventore deserunt tenetur.</p>
		  <ul class="ul-social-circle">
			<li><a href="#"><span class="icon-facebook"></span></a></li>
			<li><a href="#"><span class="icon-twitter"></span></a></li>
			<li><a href="#"><span class="icon-linkedin"></span></a></li>
			<li><a href="#"><span class="icon-instagram"></span></a></li>
		  </ul>
		</div>
	  </div>
	  <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="200">
		<div class="person">
		  <img src="/static/picture/person_2.jpg" alt="Image" class="img-fluid rounded mb-5 w-75 rounded-circle">
		  <h3>Brandon Sharp</h3>
		  <p class="position text-muted">Co-Founder, COO</p>
		  <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi at consequatur unde molestiae quidem provident voluptatum deleniti quo iste error eos est praesentium distinctio cupiditate tempore suscipit inventore deserunt tenetur.</p>
		  <ul class="ul-social-circle">
			<li><a href="#"><span class="icon-facebook"></span></a></li>
			<li><a href="#"><span class="icon-twitter"></span></a></li>
			<li><a href="#"><span class="icon-linkedin"></span></a></li>
			<li><a href="#"><span class="icon-instagram"></span></a></li>
		  </ul>
		</div>
	  </div>
	  <div class="col-md-6 col-lg-4 mb-5 mb-lg-0" data-aos="fade" data-aos-delay="300">
		<div class="person">
		  <img src="/static/picture/person_4.jpg" alt="Image" class="img-fluid rounded mb-5 w-75 rounded-circle">
		  <h3>Connor Hodson</h3>
		  <p class="position text-muted">Marketing</p>
		  <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi at consequatur unde molestiae quidem provident voluptatum deleniti quo iste error eos est praesentium distinctio cupiditate tempore suscipit inventore deserunt tenetur.</p>
		  <ul class="ul-social-circle">
			<li><a href="#"><span class="icon-facebook"></span></a></li>
			<li><a href="#"><span class="icon-twitter"></span></a></li>
			<li><a href="#"><span class="icon-linkedin"></span></a></li>
			<li><a href="#"><span class="icon-instagram"></span></a></li>
		  </ul>
		</div>
	  </div>
	</div>
  </div>
</div>





<div class="site-section bg-light" id="section-services">
  <div class="container">
	<div class="row justify-content-center mb-5" data-aos="fade-up">
	  <div class="col-md-7 text-center border-primary">
		<h2 class="mb-0 text-primary">Our Services</h2>
		<p class="color-black-opacity-5">Lorem ipsum dolor sit amet.</p>
	  </div>
	</div>
	<div class="row align-items-stretch">
	  <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
		<div class="unit-4 d-flex">
		  <div class="unit-4-icon mr-4"><span class="text-primary flaticon-plane"></span></div>
		  <div>
			<h3>Air Freight</h3>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
			<p><a href="#">Learn More</a></p>
		  </div>
		</div>
	  </div>
	  <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
		<div class="unit-4 d-flex">
		  <div class="unit-4-icon mr-4"><span class="text-primary flaticon-boat-ship"></span></div>
		  <div>
			<h3>Ocean Freight</h3>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
			<p><a href="#">Learn More</a></p>
		  </div>
		</div>
	  </div>
	  <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
		<div class="unit-4 d-flex">
		  <div class="unit-4-icon mr-4"><span class="text-primary flaticon-truck"></span></div>
		  <div>
			<h3>Land Transportation</h3>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
			<p><a href="#">Learn More</a></p>
		  </div>
		</div>
	  </div>


	  <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="300">
		<div class="unit-4 d-flex">
		  <div class="unit-4-icon mr-4"><span class="text-primary flaticon-warehouse"></span></div>
		  <div>
			<h3>Warehousing</h3>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
			<p><a href="#">Learn More</a></p>
		  </div>
		</div>
	  </div>
	  <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="400">
		<div class="unit-4 d-flex">
		  <div class="unit-4-icon mr-4"><span class="text-primary flaticon-wooden"></span></div>
		  <div>
			<h3>Storage</h3>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
			<p><a href="#">Learn More</a></p>
		  </div>
		</div>
	  </div>
	  <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="500">
		<div class="unit-4 d-flex">
		  <div class="unit-4-icon mr-4"><span class="text-primary flaticon-worldwide"></span></div>
		  <div>
			<h3>Worldwide Delivery</h3>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Perferendis quis molestiae vitae eligendi at.</p>
			<p><a href="#">Learn More</a></p>
		  </div>
		</div>
	  </div>

	</div>
  </div>
</div>



<div class="site-section block-13" id="section-industries">

  <div class="container">
	<div class="row justify-content-center mb-5">
	  <div class="col-md-7 text-center border-primary">
		<h2 class="mb-0 text-primary">Industries</h2>
		<p class="color-black-opacity-5">Lorem ipsum dolor sit amet.</p>
	  </div>
	</div>
  </div>

  <div class="owl-carousel nonloop-block-13">
	<div>
	  <a href="#" class="unit-1 text-center">
		<img src="/static/picture/img_1.jpg" alt="Image" class="img-fluid">
		<div class="unit-1-text">
		  <h3 class="unit-1-heading">Storage</h3>
		</div>
	  </a>
	</div>

	<div>
	  <a href="#" class="unit-1 text-center">
		<img src="/static/picture/img_2.jpg" alt="Image" class="img-fluid">
		<div class="unit-1-text">
		  <h3 class="unit-1-heading">Air Transports</h3>
		</div>
	  </a>
	</div>

	<div>
	  <a href="#" class="unit-1 text-center">
		<img src="/static/picture/img_3.jpg" alt="Image" class="img-fluid">
		<div class="unit-1-text">
		  <h3 class="unit-1-heading">Cargo Transports</h3>
		</div>
	  </a>
	</div>

	<div>
	  <a href="#" class="unit-1 text-center">
		<img src="/static/picture/img_4.jpg" alt="Image" class="img-fluid">
		<div class="unit-1-text">
		  <h3 class="unit-1-heading">Cargo Ship</h3>
		</div>
	  </a>
	</div>

	<div>
	  <a href="#" class="unit-1 text-center">
		<img src="/static/picture/img_5.jpg" alt="Image" class="img-fluid">
		<div class="unit-1-text">
		  <h3 class="unit-1-heading">Ware Housing</h3>
		</div>
	  </a>
	</div>


  </div>
</div>


<div class="site-blocks-cover overlay inner-page-cover" style="background-image: url(/static/image/hero_bg_2.jpg); background-attachment: fixed;">
  <div class="container">
	<div class="row align-items-center justify-content-center text-center">

	  <div class="col-md-7" data-aos="fade-up">
		<a href="#" class="play-single-big mb-4 d-inline-block popup-vimeo"><span class="icon-play"></span></a>
		<h2 class="text-white font-weight-light mb-5 h1">Watch The Video</h2>
		
	  </div>
	</div>
  </div>
</div>  

<div class="site-section border-bottom">
  <div class="container">

	<div class="row justify-content-center mb-5">
	  <div class="col-md-7 text-center border-primary">
		<h2 class="font-weight-light text-primary">用户留言</h2>
	  </div>
	</div>

	<div class="slide-one-item 主页-slider owl-carousel">
	  <div>
		<div class="testimonial">
		  <figure class="mb-4">
			<img src="/static/picture/person_1.jpg" alt="Image" class="img-fluid mb-3">
			
		  </figure>
		  <blockquote>
			<p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
			<p class="author"> &mdash; John Trump</p>
		  </blockquote>
		</div>
	  </div>
	  <div>
		<div class="testimonial">
		  <figure class="mb-4">
			<img src="/static/picture/person_2.jpg" alt="Image" class="img-fluid mb-3">
			
		  </figure>
		  <blockquote>
			<p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
			<p class="author"> &mdash; Roger Moore</p>
		  </blockquote>
		</div>
	  </div>

	  <div>
		<div class="testimonial">
		  <figure class="mb-4">
			<img src="/static/picture/person_4.jpg" alt="Image" class="img-fluid mb-3">
		  </figure>
		  <blockquote>
			<p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
			<p class="author"> &mdash; Ben Carson</p>
		  </blockquote>
		</div>
	  </div>

	  <div>
		<div class="testimonial">
		  <figure class="mb-4">
			<img src="/static/picture/person_5.jpg" alt="Image" class="img-fluid mb-3">
		  </figure>
		  <blockquote>
			<p>&ldquo;Lorem ipsum dolor sit amet consectetur adipisicing elit. Consectetur unde reprehenderit aperiam quaerat fugiat repudiandae explicabo animi minima fuga beatae illum eligendi incidunt consequatur. Amet dolores excepturi earum unde iusto.&rdquo;</p>
			<p class="author"> &mdash; Jed Smith</p>
		  </blockquote>
		</div>
	  </div>

	</div>
  </div>
</div>

<div class="site-section" id="section-blog">
  <div class="container">
	<div class="row justify-content-center mb-5">
	  <div class="col-md-7 text-center border-primary">
		<h2 class="font-weight-light text-primary">Our Blog</h2>
		<p class="color-black-opacity-5">See Our Daily News &amp; Updates</p>
	  </div>
	</div>
	<div class="row mb-5 align-items-stretch">
	  <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up">
		<div class="h-entry">
		  <a href="single.html"><img src="/static/picture/blog_1.jpg" alt="Image" class="img-fluid"></a>
		  <h2 class="font-size-regular"><a href="single.html">How Logistics Company Improve Spendings</a></h2>
		  <div class="meta mb-4">by Jed Wilson <span class="mx-2">&bullet;</span> Jan 18, 2021 <span class="mx-2">&bullet;</span> <a href="#">News</a></div>
		  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
		</div> 
	  </div>
	  <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="100">
		<div class="h-entry">
		  <a href="single.html"><img src="/static/picture/blog_2.jpg" alt="Image" class="img-fluid"></a>
		  <h2 class="font-size-regular"><a href="single.html">How Logistics Company Improve Spendings</a></h2>
		  <div class="meta mb-4">by Jed Wilson <span class="mx-2">&bullet;</span> Jan 18, 2021 <span class="mx-2">&bullet;</span> <a href="#">News</a></div>
		  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
		</div> 
	  </div>
	  <div class="col-md-6 col-lg-4 mb-4 mb-lg-4" data-aos="fade-up" data-aos-delay="200">
		<div class="h-entry">
		  <a href="single.html"><img src="/static/picture/blog_3.jpg" alt="Image" class="img-fluid"></a>
		  <h2 class="font-size-regular"><a href="single.html">How Logistics Company Improve Spendings</a></h2>
		  <div class="meta mb-4">by Jed Wilson <span class="mx-2">&bullet;</span> Jan 18, 2021 <span class="mx-2">&bullet;</span> <a href="#">News</a></div>
		  <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Natus eligendi nobis ea maiores sapiente veritatis reprehenderit suscipit quaerat rerum voluptatibus a eius.</p>
		</div>
	  </div>
	</div>
	<div class="row">
	  <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="300">
		<p class="mb-0"><a href="javascript:;" class="btn btn-primary py-3 px-5 text-white">View All Blog Posts</a></p>
	  </div>
	</div>
  </div>
</div>

<div class="site-section bg-light" id="section-contact">
  <div class="container">
	<div class="row justify-content-center mb-5">
	  <div class="col-md-7 text-center border-primary">
		<h2 class="font-weight-light text-primary">Contact Us</h2>
		<p class="color-black-opacity-5">See Our Daily News &amp; Updates</p>
	  </div>
	</div>
	<div class="row">
	  <div class="col-md-7 mb-5">

		

		<form action="#" class="p-5 bg-white">
		 

		  <div class="row form-group">
			<div class="col-md-6 mb-3 mb-md-0">
			  <label class="text-black" for="fname">First Name</label>
			  <input type="text" id="fname" class="form-control">
			</div>
			<div class="col-md-6">
			  <label class="text-black" for="lname">Last Name</label>
			  <input type="text" id="lname" class="form-control">
			</div>
		  </div>

		  <div class="row form-group">
			
			<div class="col-md-12">
			  <label class="text-black" for="email">Email</label> 
			  <input type="email" id="email" class="form-control">
			</div>
		  </div>

		  <div class="row form-group">
			
			<div class="col-md-12">
			  <label class="text-black" for="subject">Subject</label> 
			  <input type="subject" id="subject" class="form-control">
			</div>
		  </div>

		  <div class="row form-group">
			<div class="col-md-12">
			  <label class="text-black" for="message">Message</label> 
			  <textarea name="message" id="message" cols="30" rows="7" class="form-control"></textarea>
			</div>
		  </div>

		  <div class="row form-group">
			<div class="col-md-12">
			  <input type="submit" value="Send Message" class="btn btn-primary py-2 px-4 text-white">
			</div>
		  </div>


		</form>
	  </div>
	  <div class="col-md-5">
		
		<div class="p-4 mb-3 bg-white">
		  <p class="mb-0 font-weight-bold">Address</p>
		  <p class="mb-4">203 Fake St. Mountain View, San Francisco, California, USA</p>

		  <p class="mb-0 font-weight-bold">Phone</p>
		  <p class="mb-4"><a href="#">+1 232 3235 324</a></p>

		  <p class="mb-0 font-weight-bold">Email Address</p>
		  <p class="mb-0"><a href="#">youremail@domain.com</a></p>

		</div>
		
		<div class="p-4 mb-3 bg-white">
		  <h3 class="h5 text-black mb-3">More Info</h3>
		  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsa ad iure porro mollitia architecto hic consequuntur. Distinctio nisi perferendis dolore, ipsa consectetur? Fugiat quaerat eos qui, libero neque sed nulla.</p>
		  <p><a href="#" class="btn btn-primary px-4 py-2 text-white">Learn More</a></p>
		</div>

	  </div>
	</div>
  </div>
</div>


<footer class="site-footer">
  <div class="container">
	<div class="row">
	  <div class="col-md-9">
		<div class="row">
		  <div class="col-md-5 mr-auto">
			<h2 class="footer-heading mb-4">冬奥会简介</h2>
			<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam iure deserunt ut architecto dolores quo beatae laborum aliquam ipsam rem impedit obcaecati ea consequatur.</p>
		  </div>
		  
		  <div class="col-md-3">
			<h2 class="footer-heading mb-4">Quick Links</h2>
			<ul class="list-unstyled">
			  <li><a href="#">冬奥会简介</a></li>
			  <li><a href="#">Services</a></li>
			  <li><a href="#">用户留言</a></li>
			  <li><a href="#">Contact Us</a></li>
			</ul>
		  </div>
		  <div class="col-md-3">
			<h2 class="footer-heading mb-4">Follow Us</h2>
			<a href="#" class="pl-0 pr-3"><span class="icon-facebook"></span></a>
			<a href="#" class="pl-3 pr-3"><span class="icon-twitter"></span></a>
			<a href="#" class="pl-3 pr-3"><span class="icon-instagram"></span></a>
			<a href="#" class="pl-3 pr-3"><span class="icon-linkedin"></span></a>
		  </div>
		</div>
	  </div>
	  <div class="col-md-3">
		<h2 class="footer-heading mb-4">Subscribe Newsletter</h2>
		<form action="#" method="post">
		  <div class="input-group mb-3">
			<input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
			<div class="input-group-append">
			  <button class="btn btn-primary text-white" type="button" id="button-addon2">Send</button>
			</div>
		  </div>
		</form>
	  </div>
	</div>
	<div class="row pt-5 mt-5 text-center">
	  <div class="col-md-12">
		<div class="border-top pt-5">
		  <p>Copyright &copy; 2021.Company name All rights reserved.<a target="_blank" href="https://sc.chinaz.com/moban/">&#x7F51;&#x9875;&#x6A21;&#x677F;</a></p>
		</div>
	  </div>
	  
	</div>
  </div>
</footer>
<!-- </div> -->

<script src="/static/js/jquery-3.3.1.min.js"></script>
<script src="/static/js/jquery-migrate-3.0.1.min.js"></script>
<script src="/static/js/jquery-ui.js"></script>
<script src="/static/js/jquery.easing.1.3.js"></script>
<script src="/static/js/popper.min.js"></script>
<script src="/static/js/bootstrap.min.js"></script>
<script src="/static/js/owl.carousel.min.js"></script>
<script src="/static/js/jquery.stellar.min.js"></script>
<script src="/static/js/jquery.countdown.min.js"></script>
<script src="/static/js/jquery.magnific-popup.min.js"></script>
<script src="/static/js/bootstrap-datepicker.min.js"></script>
<script src="/static/js/aos.js"></script>
<script src="/static/js/main.js"></script>

</body>
</html>
