@extends('front.layouts.main')
@section('content')
<section class="breadcrumb mb-12 mb-sm-20"
    style="background-image: url(/front/assets/images/connect_partner_thumbnail.jpg);">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-lg-12">
                <h2 class="breadcrumb_title">全球據點</h2>
                <ul class="breadcrumb_nav">
                    <li>
                        <a href="index.html" class="text-white-50">首頁</a>
                    </li>
                    <li class="text-white-50">聯絡</li>
                    <li class="text-white text-truncate">全球據點</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end -->

<section class="container">
    <div class="row mb-12 mb-md-25">
        <div class="col-10 offset-1">
            <h2 class="text-center title mb-4 mb-md-5">FIND A DEALER</h2>
            <form action="" method="" class="global_form_group">

                <div class="mb-4 mb-md-4">
                    <div class="d-flex align-items-md-center justify-content-md-center flex-column flex-md-row">
                            <!-- <label class="form-label fw-bold d-block ">地區</label> -->
                            <div class="text-nowrap me-md-5 mb-2 mb-md-0 fw-bold fs-6">地區</div>
                            <select class="form-select" aria-label="Default select" data-live-search="true">
                                    <option selected>All</option>
                                    <option value="1">One</option>
                                    <option value="2">Two</option>
                                    <option value="3">Three</option>
                            </select>
                    </div>
                </div>
                <div class="mb-4 mb-md-5">
                    <!-- <label class="form-label fw-bold">品牌</label> -->
                    <div class="d-flex align-items-md-center justify-content-md-center flex-column flex-md-row">
                        <div class="text-nowrap me-md-5 mb-2 mb-md-0 fw-bold fs-6">品牌</div>
                        <select class="form-select" aria-label="Default select" data-live-search="true">
                                <option selected>TEKTRO</option>
                                <option value="1">One</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                        </select>
                    </div>
                </div>
                <div class="d-flex justify-content-center">
                    <input type="submit" value="搜尋" class="c_btn btn_dark">
                </div>
                
            </form>
        </div>
    </div>

    <div class="row">
        <div class="col-10 offset-1">
            <div class="row justify-content-between">
                <div class="col-sm-6 col-md-4 mb-3 mb-md-5">
                    <h5 class="fw-bold text-uppercase mb-3 fs-6">Spain</h5>
                    <ul class="list_group">
                        <li>BICICLETAS DE ALAVA</li>
                        <li>Tel: 34-(9)45-135202</li>
                        <li>E-mail: info@bhsa.es</li>
                        <li>Website: www.bhbikes.com</li> 
                    </ul>
                </div>
                <div class="col-sm-6 col-md-4 mb-3 mb-md-5">
                    <h5 class="fw-bold text-uppercase mb-3 fs-6">Switzerland</h5>
                    <ul class="list_group">
                        <li>TEKNO PARTS LTD</li>
                        <li>Tel: 0041 32 332 84 60</li>
                        <li>E-mail: info@teknoparts.ch</li>
                        <li>Website: www.teknoparts.ch</li>
                    </ul>
                    
                </div>
                <div class="col-sm-6 col-md-4 mb-3 mb-md-5">
                    <h5 class="fw-bold text-uppercase mb-3 fs-6">UK</h5>
                    <ul class="list_group">
                        <li>UPGRADE BIKES LTD</li>
                        <li>Tel: 44(0)1403 711 611</li>
                        <li>E-mail: info@upgradebikes.co.uk</li>
                        <li>Website: www.upgradebikes.co.uk</li>
                    </ul>

                </div>
                <div class="col-sm-6 col-md-4 mb-3 mb-md-5">
                    <h5 class="fw-bold text-uppercase mb-3 fs-6">Spain</h5>
                    <ul class="list_group">
                        <li>BICICLETAS DE ALAVA</li>
                        <li>Tel: 34-(9)45-135202</li>
                        <li>E-mail: info@bhsa.es</li>
                        <li>Website: www.bhbikes.com</li> 
                    </ul>
                </div>
                <div class="col-sm-6 col-md-4 mb-3 mb-md-5">
                    <h5 class="fw-bold text-uppercase mb-3 fs-6">Switzerland</h5>
                    <ul class="list_group">
                        <li>TEKNO PARTS LTD</li>
                        <li>Tel: 0041 32 332 84 60</li>
                        <li>E-mail: info@teknoparts.ch</li>
                        <li>Website: www.teknoparts.ch</li>
                    </ul>
                    
                </div>
                <div class="col-sm-6 col-md-4 mb-3 mb-md-5">
                    <h5 class="fw-bold text-uppercase mb-3 fs-6">UK</h5>
                    <ul class="list_group">
                        <li>UPGRADE BIKES LTD</li>
                        <li>Tel: 44(0)1403 711 611</li>
                        <li>E-mail: info@upgradebikes.co.uk</li>
                        <li>Website: www.upgradebikes.co.uk</li>
                    </ul>

                </div>

            </div>
        </div>
    </div>
</section>
@endsection