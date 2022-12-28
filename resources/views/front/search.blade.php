@extends('front.layouts.main')
@section('content')
<section class="breadcrumb mb-12 mb-sm-20" style="background-image: url(/front/assets/images/breadcrumb_result.jpg);">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-lg-12">
                <h2 class="breadcrumb_title">搜尋結果</h2>
                <ul class="breadcrumb_nav">
                    <li>
                        <a href="index.html" class="text-white-50">首頁</a>
                    </li>
                    <li class="text-white text-truncate">搜尋結果</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end -->

<section class="mb-15">
    <div class="container">
        <div class="row mb-12 mb-md-20">
            <!-- <div class="col-md-3">
                <h5 class="page_aside_title bg-dark text-white fs-6 mb-0">類別</h5>
                <div class="page_aside bg-white flex-column mb-5 mb-md-0">
                    <div class="accordion accordion_secondary">
                        <div class="accordion-item">
                            <a href="#" class="d-block accordion-button">全部</a>

                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="asideFilter01">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#asideCollapse01" aria-expanded="false"
                                    aria-controls="asideCollapse01">
                                    顏色
                                </button>
                            </h2>
                            <div id="asideCollapse01" class="accordion-collapse collapse"
                                aria-labelledby="asideFilter01">
                                <div class="accordion-body pt-0">
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="asideFilterColor01">
                                        <label class="form-check-label" for="asideFilterColor01">
                                            黑色
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="asideFilterColor02">
                                        <label class="form-check-label" for="asideFilterColor02">
                                            銀色
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="asideFilterColor03">
                                        <label class="form-check-label" for="asideFilterColor03">
                                            玫瑰金
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="asideFilter02">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#asideCollapse02" aria-expanded="false"
                                    aria-controls="asideCollapse02">
                                    新品
                                </button>
                            </h2>
                            <div id="asideCollapse02" class="accordion-collapse collapse"
                                aria-labelledby="asideFilter02">
                                <div class="accordion-body pt-0">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value=""
                                            id="asideFilterNew">
                                        <label class="form-check-label" for="asideFilterNew">
                                            新品
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="accordion-item">
                            <h2 class="accordion-header" id="asideFilter03">
                                <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse"
                                    data-bs-target="#asideCollapse03" aria-expanded="false"
                                    aria-controls="asideCollapse03">
                                    性別
                                </button>
                            </h2>
                            <div id="asideCollapse03" class="accordion-collapse collapse"
                                aria-labelledby="asideFilter03">
                                <div class="accordion-body pt-0">
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="" id="asideFilterGender01">
                                        <label class="form-check-label" for="asideFilterGender01">
                                            男性
                                        </label>
                                    </div>
                                    <div class="form-check mb-2">
                                        <input class="form-check-input" type="checkbox" value="" id="asideFilterGender02">
                                        <label class="form-check-label" for="asideFilterGender02">
                                            女性
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" value="" id="asideFilterGender03">
                                        <label class="form-check-label" for="asideFilterGender03">
                                            不分性別
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div> -->
            <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                <div class="row mb-3">
                    <h3 class="fs-6 fs-md-5 text-center text-md-start"><span class="text-black-50 fw-bold">產品</span> 共有 <span class="text-primary fw-bold">24</span> 筆 <span>‘碟煞煞車’</span> 搜尋結果
                    </h3>
                </div>
                <!-- 顯示數量 start -->
                <!-- <div class="row mb-5 justify-content-center justify-content-md-end">
                    <select class="form-select form-select-sm w-auto pe-5 rounded-1 text-black-50" aria-label=".form-select-sm example">
                        <option selected>顯示 9 個</option>
                        <option value="1">顯示 18 個</option>
                        <option value="2">顯示 36 個</option>
                        <option value="3">顯示 全部</option>
                        </select>
                </div> -->
                    <!-- 顯示數量 end -->
                    <div class="bg-white pt-3 px-3 pt-md-5 px-md-5 shadow-sm">
                        <ul class="row">
                            <li class="col-6 col-md-4">
                                <a href="product_detail.html" class="box">
                                    <div class="ratio_outer mb-2 mb-md-4" style="padding-bottom: 100%;">
                                        <div class="ratio_inner bg-cover"
                                            style="background-image: url(/front/assets/images/products/EVO-Gold-Family-Main.jpg);">
                                            <div class="box_img_overlay">
                                                <span class="text-white fw-bold mb-3">DH-R EVO GOLD</span>
                                                <div href="#" class="c_btn btn_outline_white">VIEW ALL</div>
                                            </div>
                                        </div>
                                        <!-- <div class="box_img">
                                            <img src="/front/assets/images/products/EVO-Gold-Family-Main.jpg" alt="EVO-Gold-Family-Main">
                                        </div> -->
                                    </div>
                                    <h2 class="box_title">DH-R EVO GOLD</h2>
                                    <span class="box_text">MSRP $17.99 - $299.99</span>
                                </a>
                            </li>
                            <li class="col-6 col-md-4">
                                <a href="product_detail.html" class="box">
                                    <div class="ratio_outer mb-2 mb-md-4" style="padding-bottom: 100%;">
                                        <div class="ratio_inner bg-cover"
                                            style="background-image: url(/front/assets/images/products/EVO-Family3.jpg);">
                                            <div class="box_img_overlay">
                                                <span class="text-white fw-bold mb-3">DH-R EVO</span>
                                                <div href="#" class="c_btn btn_outline_white">VIEW ALL</div>
                                            </div>
                                        </div>
                                    </div>
                                    <h2 class="box_title">DH-R EVO</h2>
                                    <span class="box_text">MSRP $17.99 - $279.99</span>
                                </a>
                            </li>
                            <li class="col-6 col-md-4">
                                <a href="product_detail.html" class="box">
                                    <div class="ratio_outer mb-2 mb-md-4" style="padding-bottom: 100%;">
                                        <div class="ratio_inner bg-cover"
                                            style="background-image: url(/front/assets/images/products/EVO-Family-Matte-Black.jpg);">
                                            <div class="box_img_overlay">
                                                <span class="text-white fw-bold mb-3">DH-R EVO Matte Black</span>
                                                <div href="#" class="c_btn btn_outline_white">VIEW ALL</div>
                                            </div>
                                        </div>
                                    </div>
                                    <h2 class="box_title">DH-R EVO Matte Black</h2>
                                    <span class="box_text">MSRP $17.99 - $269.99</span>
                                </a>
                            </li>
                            <li class="col-6 col-md-4">
                                <a href="product_detail.html" class="box">
                                    <div class="ratio_outer mb-2 mb-md-4" style="padding-bottom: 100%;">
                                        <div class="ratio_inner bg-cover"
                                            style="background-image: url(/front/assets/images/products/EVO-Family3.jpg);">
                                            <div class="box_img_overlay">
                                                <span class="text-white fw-bold mb-3">DH-R EVO</span>
                                                <div href="#" class="c_btn btn_outline_white">VIEW ALL</div>
                                            </div>
                                        </div>
                                    </div>
                                    <h2 class="box_title">DH-R EVO</h2>
                                    <span class="box_text">MSRP $17.99 - $279.99</span>
                                </a>
                            </li>
                            <li class="col-6 col-md-4">
                                <a href="product_detail.html" class="box">
                                    <div class="ratio_outer mb-2 mb-md-4" style="padding-bottom: 100%;">
                                        <div class="ratio_inner bg-cover"
                                            style="background-image: url(/front/assets/images/products/EVO-Family-Matte-Black.jpg);">
                                            <div class="box_img_overlay">
                                                <span class="text-white fw-bold mb-3">DH-R EVO Matte Black</span>
                                                <div href="#" class="c_btn btn_outline_white">VIEW ALL</div>
                                            </div>
                                        </div>
                                    </div>
                                    <h2 class="box_title">DH-R EVO Matte Black</h2>
                                    <span class="box_text">MSRP $17.99 - $269.99</span>
                                </a>
                            </li>
                            <li class="col-6 col-md-4">
                                <a href="product_detail.html" class="box">
                                    <div class="ratio_outer mb-2 mb-md-4" style="padding-bottom: 100%;">
                                        <div class="ratio_inner bg-cover"
                                            style="background-image: url(/front/assets/images/products/EVO-Gold-Family-Main.jpg);">
                                            <div class="box_img_overlay">
                                                <span class="text-white fw-bold mb-3">DH-R EVO GOLD</span>
                                                <div href="#" class="c_btn btn_outline_white">VIEW ALL</div>
                                            </div>
                                        </div>
                                    </div>
                                    <h2 class="box_title">DH-R EVO GOLD</h2>
                                    <span class="box_text">MSRP $17.99 - $299.99</span>
                                </a>
                            </li>
                            <li class="col-6 col-md-4">
                                <a href="product_detail.html" class="box">
                                    <div class="ratio_outer mb-2 mb-md-4" style="padding-bottom: 100%;">
                                        <div class="ratio_inner bg-cover"
                                            style="background-image: url(/front/assets/images/products/EVO-Family-Matte-Black.jpg);">
                                            <div class="box_img_overlay">
                                                <span class="text-white fw-bold mb-3">DH-R EVO Matte Black</span>
                                                <div href="#" class="c_btn btn_outline_white">VIEW ALL</div>
                                            </div>
                                        </div>
                                    </div>
                                    <h2 class="box_title">DH-R EVO Matte Black</h2>
                                    <span class="box_text">MSRP $17.99 - $269.99</span>
                                </a>
                            </li>
                            <li class="col-6 col-md-4">
                                <a href="product_detail.html" class="box">
                                    <div class="ratio_outer mb-2 mb-md-4" style="padding-bottom: 100%;">
                                        <div class="ratio_inner bg-cover"
                                            style="background-image: url(/front/assets/images/products/Q2\ 3_SE-Lever-and-Caliper_Web-Ready.png);">
                                            <div class="box_img_overlay">
                                                <span class="text-white fw-bold mb-3">Q2.3 SE</span>
                                                <div href="#" class="c_btn btn_outline_white">VIEW ALL</div>
                                            </div>
                                        </div>
                                    </div>
                                    <h2 class="box_title">Q2.3 SE</h2>
                                    <span class="box_text">MSRP $17.99 - $269.99</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                <!-- pagination start -->
                <!-- <div class="row">
                    <div class="d-flex justify-content-center">
                        <nav aria-label="Page navigation">
                            <ul class="pagination mb-0">
                                <li class="page-item disabled">
                                    <a class="page-link" href="#" aria-label="Previous">
                                        <i class='bx bxs-chevron-left align-middle'></i>
                                    </a>
                                </li>
                                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                <li class="page-item"><a class="page-link" href="#">2</a></li>
                                <li class="page-item"><a class="page-link" href="#">3</a></li>
                                <li class="page-item">
                                    <a class="page-link" href="#" aria-label="Next">
                                        <i class='bx bxs-chevron-right align-middle'></i>
                                    </a>
                                </li>
                            </ul>
                        </nav>
                    </div>
                </div> -->
                <!-- pagination end -->
            </div>
        </div>
        <div class="row mb-12 mb-md-20">
            <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                <div class="row mb-3">
                    <h3 class="fs-6 fs-md-5 text-center text-md-start"><span class="text-black-50 fw-bold">技術手冊</span> 共有 <span class="text-primary fw-bold">2</span> 筆 <span>‘碟煞煞車’</span> 搜尋結果
                    </h3>
                </div>
                    <div class="bg-white p-3 p-md-5 shadow-sm">
                        <ul class="row">
                            <div class="">
                            <div class="accordion_primary accordion accordion-flush" id="collapseFilterOne">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingOne">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFilter01"
                                            aria-expanded="false" aria-controls="collapseFilter01">
                                            油壓碟煞礦物油
                                        </button>
                                    </h2>
                                    <div id="collapseFilter01" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingOne" data-bs-parent="#collapseFilterOne">
                                        <div class="accordion-body">
                                            <div class="p-md-4">
                                                <span class="bg-primary text-white p-2 rounded-1 fs-7 mb-4 d-inline-block">使用手冊</span>
                                                <ul>
                                                    <li class="mb-3">
                                                        <i class='bx bxs-file-pdf'></i>
                                                        <a href="#">Auriga Twin+ / Auriga+</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <i class='bx bxs-file-pdf'></i>
                                                        <a href="#">TEKTRO HYDRAULIC DISC BRAKE</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <i class='bx bxs-file-pdf'></i>
                                                        <a href="#">Orion / Auriga Pro / Volans - Installation Instruction</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <i class='bx bxs-file-pdf'></i>
                                                        <a href="#">Brake Pads - Installation Instruction</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <i class='bx bxs-file-pdf'></i>
                                                        <a href="#">Auriga Twin - Installation Instruction</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <i class='bx bxs-file-pdf'></i>
                                                        <a href="#">Auriga Twin - Installation Instruction (Germany)</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <i class='bx bxs-file-pdf'></i>
                                                        <a href="#">HD-R310 / HD-R510 Hydraulic Road Disc Brake - Installation Instruction</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <i class='bx bxs-file-pdf'></i>
                                                        <a href="#">Hose Cutter</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <i class='bx bxs-file-pdf'></i>
                                                        <a href="#">EZ PLUG-IN Installation Instruction</a>
                                                    </li>
                                                </ul>

                                            </div>
                                            <div class="p-md-4">
                                                <span class="bg-primary text-white p-2 rounded-1 fs-7 mb-4 d-inline-block">BOM 清單</span>
                                                <ul>
                                                    <li class="mb-3">
                                                        <i class='bx bxs-file-pdf'></i>
                                                        <a href="#">登山車 - 卡鉗零件更換BOM清單</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <i class='bx bxs-file-pdf'></i>
                                                        <a href="#">公路車 - 卡鉗零件更換BOM清單</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <i class='bx bxs-file-pdf'></i>
                                                        <a href="#">林道越野車 - 卡鉗零件更換BOM清單</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <i class='bx bxs-file-pdf'></i>
                                                        <a href="#">電動車 - 卡鉗零件更換BOM清單</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="accordion_primary accordion accordion-flush" id="collapseFilterTwo">
                                <div class="accordion-item">
                                    <h2 class="accordion-header" id="flush-headingTwo">
                                        <button class="accordion-button collapsed" type="button"
                                            data-bs-toggle="collapse" data-bs-target="#collapseFilter02"
                                            aria-expanded="false" aria-controls="collapseFilter02">
                                            油壓碟煞
                                        </button>
                                    </h2>
                                    <div id="collapseFilter02" class="accordion-collapse collapse"
                                        aria-labelledby="flush-headingTwo" data-bs-parent="#collapseFilterTwo">
                                        <div class="accordion-body">
                                            <div class="p-md-4">
                                                <span class="bg-primary text-white p-2 rounded-1 fs-7 mb-4 d-inline-block">使用手冊</span>
                                                <ul>
                                                    <li class="mb-3">
                                                        <i class='bx bxs-file-pdf'></i>
                                                        <a href="#">Auriga Twin+ / Auriga+</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <i class='bx bxs-file-pdf'></i>
                                                        <a href="#">TEKTRO HYDRAULIC DISC BRAKE</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <i class='bx bxs-file-pdf'></i>
                                                        <a href="#">Orion / Auriga Pro / Volans - Installation Instruction</a>
                                                    </li>
                                                </ul>

                                            </div>
                                            <div class="p-md-4">
                                                <span class="bg-primary text-white p-2 rounded-1 fs-7 mb-4 d-inline-block">BOM 清單</span>
                                                <ul>
                                                    <li class="mb-3">
                                                        <i class='bx bxs-file-pdf'></i>
                                                        <a href="#">登山車 - 卡鉗零件更換BOM清單</a>
                                                    </li>
                                                    <li class="mb-3">
                                                        <i class='bx bxs-file-pdf'></i>
                                                        <a href="#">公路車 - 卡鉗零件更換BOM清單</a>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            </div>
                        </ul>
                    </div>
            </div>
        </div>
        <div class="row mb-12 mb-md-20">
            <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                <div class="row mb-3">
                    <h3 class="fs-6 fs-md-5 text-center text-md-start"><span class="text-black-50 fw-bold">影音分享</span> 共有 <span class="text-primary fw-bold">2</span> 筆 <span>‘碟煞煞車’</span> 搜尋結果
                    </h3>
                </div>
                    <div class="bg-white pt-3 px-3 pt-md-5 px-md-5 shadow-sm">
                        <ul class="row">
                        <div class="col-md-6 col-lg-4 mb-12">
                            <div class="mb-4 overflow-hidden">
                                <a href="info_news_detail.html" class="ratio_outer" style="padding-bottom: 56.25%;">
                                    <iframe class="ratio_inner" src="https://www.youtube.com/embed/T0tGjlU27YI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </a>
                            </div>
                            <div class="">
                                <h3 class="fw-bold fs-6">Introducing the Drive – Eminent Cycles All-New E-Bike</h3>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-12">
                            <div class="mb-4 overflow-hidden">
                                <a href="info_news_detail.html" class="ratio_outer" style="padding-bottom: 56.25%;">
                                    <iframe class="ratio_inner" src="https://www.youtube.com/embed/T0tGjlU27YI" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                                </a>
                            </div>
                            <div class="">
                                <h3 class="fw-bold fs-6">Richie Schley Video: Returning Home</h3>
                                <p class="text-muted fs-7 fs-md-6"></p>
                            </div>
                        </div>
                        </ul>
                    </div>
            </div>

        </div>
        <div class="row">
            <div class="col-lg-8 offset-lg-2 col-md-10 offset-md-1">
                <div class="row mb-3">
                    <h3 class="fs-6 fs-md-5 text-center text-md-start"><span class="text-black-50 fw-bold">最新消息</span> 共有 <span class="text-primary fw-bold">4</span> 筆 <span>‘碟煞煞車’</span> 搜尋結果
                    </h3>
                </div>
                    <div class="bg-white pt-3 px-3 pt-md-5 px-md-5 shadow-sm">
                        <div class="row">
                        <div class="col-md-6 col-lg-4 mb-12">
                            <div class="mb-4 overflow-hidden">
                                <a href="info_news_detail.html" class="ratio_outer" style="padding-bottom: 66%;">
                                    <div class="ratio_inner bg-cover hover_transform_scale"
                                        style="background-image: url('/front/assets/images/info_news_img02.png');"></div>
                                </a>
                            </div>
                            <div class="">
                                <h3 class="title_h2">Introducing the Drive – Eminent Cycles All-New E-Bike</h3>
                                <p class="text-muted fs-7 fs-md-6">TRP Cycling Components is excited to announce the new Eminent Cycles ‘Drive” E-MTB coming standard…</p>
                                <a href="info_news_detail.html" class="btn_arrow d-block fw-bold fs-7">CONTINUE READING
                                    <i class='bx bx-right-arrow-alt align-middle fs-5'></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-12">
                            <div class="mb-4 overflow-hidden">
                                <a href="info_news_detail.html" class="ratio_outer" style="padding-bottom: 66%;">
                                    <div class="ratio_inner bg-cover hover_transform_scale"
                                        style="background-image: url('/front/assets/images/info_news_img03.jpg');"></div>
                                </a>
                            </div>
                            <div class="">
                                <h3 class="title_h2">Richie Schley Video: Returning Home</h3>
                                <p class="text-muted fs-7 fs-md-6"></p>
                                <a href="info_news_detail.html" class="btn_arrow d-block fw-bold fs-7">CONTINUE READING
                                    <i class='bx bx-right-arrow-alt align-middle fs-5'></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-12">
                            <div class="mb-4 overflow-hidden">
                                <a href="info_news_detail.html" class="ratio_outer" style="padding-bottom: 66%;">
                                    <div class="ratio_inner bg-cover hover_transform_scale"
                                        style="background-image: url('/front/assets/images/info_news_img04.jpg');"></div>
                                </a>
                            </div>
                            <div class="">
                                <h3 class="title_h2">IFR Team Video from World Cup Finals – Snowshoe, West Virginia</h3>
                                <p class="text-muted fs-7 fs-md-6">Words to describe a World Cup. Rough. Yanky. Oooooh. Yeah. Scary. Just Cool. Familiar-ish. Those…</p>
                                <a href="info_news_detail.html" class="btn_arrow d-block fw-bold fs-7">CONTINUE READING
                                    <i class='bx bx-right-arrow-alt align-middle fs-5'></i>
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-4 mb-12">
                            <div class="mb-4 overflow-hidden">
                                <a href="info_news_detail.html" class="ratio_outer" style="padding-bottom: 66%;">
                                    <div class="ratio_inner bg-cover hover_transform_scale"
                                        style="background-image: url('/front/assets/images/info_news_img05.jpg');"></div>
                                </a>
                            </div>
                            <div class="">
                                <h3 class="title_h2">Sending Queenstown with Reece Potter</h3>
                                <p class="text-muted fs-7 fs-md-6">“Reece and George were pretty keen to shoot a dad-cam(ish) shreddit and so I kinda…</p>
                                <a href="info_news_detail.html" class="btn_arrow d-block fw-bold fs-7">CONTINUE READING
                                    <i class='bx bx-right-arrow-alt align-middle fs-5'></i>
                                </a>
                            </div>
                        </div>
                        </div>
                    </div>
            </div>

        </div>
    </div>
</section>
@endsection