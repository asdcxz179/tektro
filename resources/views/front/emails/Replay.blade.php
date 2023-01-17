<!-- <!DOCTYPE html> -->
<html lang="{{$_COOKIE['lang']??'en'}}"><!--<![endif]-->

<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="description" content="" />
<meta name="keywords" content="" />
<title>EXSHO</title>
<link rel="shortcut icon" type="image/x-icon" href="{{asset('front/images/favicon.ico')}}">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Fira+Mono&display=swap" rel="stylesheet">

<!-- animation -->
<style type="text/css">
    .navbar {
        position: fixed;
        width: 100%;
        top: 0;
        left: 0;
        z-index: 101;
        background: #000;
        border-bottom: #e10052 solid 4px;
        color: #fff;
        text-align: center;
    }
    .navbar-brand {
        margin: 0 auto;
    }
    .navbar-brand img {
        max-height: 100%;
    }
    .footer {
        background: #fff;
        color: #878787;
        border-top: 7px solid #f5cc30;
        padding: 30px 0 20px;
        font-size: 12px;
        text-align: center;
    }
    .foot_link, .foot_logo {
        display: flex;
        justify-content: flex-end;
        flex-flow: wrap;
    }
    .foot_link .btn {
        padding: 0 50px;
        display: flex;
        align-items: center;
        justify-content: center;
    }
    .btn {
        background: #e10052;
        color: #fff;
        height: 40px;
        padding: 10px;
        line-height: 20px;
        border-radius: 0;
        border: none;
    }
    .foot_nav li {
        width: 25%;
    }
    .gs li {
        margin-left: 15px;
    }
    ul {
        list-style:none;
    }
    .main {
        margin:100px 50px;
    }
    .main p {
        text-align: center;
        font-size:16px;
    }
    .footer .copyright {
        color: #999;
        margin-top: 15px;
        font-size: .75rem;
    }
</style>
</head>

<body>

<div class="wrap">
<!--header-->
<header id="header" class="navbar navbar-static-top" role="navigation">
	<div class="container-fluid clearfix">
		<div class="navbar-header">
            <div class="">
                <div class="brand_logo">
                    <div class="d-flex align-items-center">
                        <a href="{{route('front.brand.show',['lang'=>$lang,'brand'=>1])}}" class="link-tektro d-block">
                            <img src="https://tektro.henryegg8.com/front/assets/images/TEKTRO_w.png" alt="TEKTRO logo">
                        </a>
                        <div class="logo_divider"></div>
                        <a href="{{route('front.brand.show',['lang'=>$lang,'brand'=>2])}}" class="link-trp d-block">
                            <img src="https://tektro.henryegg8.com/front/assets/images/TRP_w.svg" alt="TRP logo">
                        </a>
                    </div>
                </div>
            </div>
		</div><!-- /.navbar-header -->
		<div class="clearfix"></div>
	</div><!-- /.container -->
</header>

<!--main-->
    <div class="main">
        <p>{{__('front.email.auto_reply')}}</p>
        {!!$content!!}
    </div>
<!--main end-->
<!--footer-->
	<footer class="footer" data-aos="fade-right">
		<div class="container-fluid clearfix" role="footer">
			<div class="row">
				<!-- <div class="col-sm-6 foot_info">
					<div class="foot_logo"><img src="{{asset('front/images/foot_logo.png')}}" alt=""></div>
					<div class="foot_link">
						<a href="#" title="" class="btn fs_20">{{__('front.footer.join_us')}}</a>
						<div class="sns_link">
							@if(__('social.facebook'))
							<a href="{{__('social.facebook')}}"><i class="fa fa-facebook"></i></a>
							@endif
							@if(__('social.twitter'))
							<a href="{{__('social.twitter')}}"><i class="fa fa-twitter"></i></a>
							@endif
							@if(__('social.instagram'))
							<a href="{{__('social.instagram')}}"><i class="fa fa-instagram"></i></a>
							@endif
							@if(__('social.youtube'))
							<a href="{{__('social.youtube')}}"><i class="fa fa-youtube-play"></i></a>
							@endif
							@if(__('social.linkedin'))
							<a href="{{__('social.linkedin')}}"><i class="fa fa-linkedin"></i></a>
							@endif
						</div>
					</div>
				</div> -->
				<div class="col-sm-12 text-center copyright">
					<span>TEKTRO ALL RIGHT RESERVED.</span>
					<!-- <ul class="list-inline">
						<li><a href="#" title="">{{__('front.footer.privacy')}}</a></li>
						<li><a href="#" title="">{{__('front.footer.policy')}}</a></li>
					</ul> -->
				</div>
			</div>
		</div>
	</footer>

<!--footer end-->


</div>
</body>

</html>
