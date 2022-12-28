@extends('front.layouts.main')
@section('content')
<section class="breadcrumb mb-12 mb-sm-20"
    style="background-image: url(/front/assets/images/support_FAQ_thumbnail.jpg);">

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-10 col-lg-12">
                <h2 class="breadcrumb_title">常見問題</h2>
                <ul class="breadcrumb_nav">
                    <li>
                        <a href="index.html" class="text-white-50">首頁</a>
                    </li>
                    <li class="text-white-50">支援</li>
                    <li class="text-white text-truncate">常見問題</li>
                </ul>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb end -->

<section class="mb-15">
    <div class="container">
        <div class="row mb-5">
            <div class="col-md-8 offset-md-4">
                <form action="" method="" class="d-flex w-100 justify-content-start align-items-end">
                    <input type="text" name="" placeholder="請輸入關鍵字" class="form_transparent_dark w-100">
                    <button class="c_btn btn_transparent_dark pe-0 fw-normal hover_opacity" type="submit" name=""
                        style="min-width: 120px;">搜尋
                        <i class='bx bx-search text-primary fs-4 align-middle text-dark ps-2'></i>
                    </button>
                </form>
            </div>
        </div>
        <div class="row">
            <div class="col-md-3">
                <h5 class="page_aside_title bg-dark text-white fs-6 mb-0">類別</h5>
                <ul class="nav nav-fill page_aside bg-white flex-column mb-5 mb-md-0">
                    <li class="nav-item">
                        <button class="page_aside_filter nav-link active" data-bs-toggle="tab" data-bs-target="#qaFilterAll" type="button"
                            role="tab" aria-selected="false">全部</button>
                    </li>
                    <li class="nav-item">
                        <button class="page_aside_filter nav-link" data-bs-toggle="tab" data-bs-target="#qaFilterTektro" type="button"
                            role="tab" aria-selected="false">TEKTRO</button>
                    </li>
                    <li class="nav-item">
                        <button class="page_aside_filter nav-link" data-bs-toggle="tab" data-bs-target="#qaFilterTrp" type="button"
                            role="tab" aria-selected="false">TRP</button>
                    </li>
                </ul>
            </div>
            <div class="col-md-8 offset-md-1">
                <div class="tab-content">
                    <div class="tab-pane fade show active" role="tabpanel" id="qaFilterAll">

                        <!-- tektro accordion start -->
                        <div class="accordion_primary accordion accordion-flush" id="collapseFilterTektro">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-heading01">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse01"
                                        aria-expanded="false" aria-controls="collapse01">
                                        Q: 在哪裡可以看到Tektro產品的分解圖和使用方法?
                                    </button>
                                </h2>
                                <div id="collapse01" class="accordion-collapse collapse"
                                    aria-labelledby="flush-heading01" data-bs-parent="#collapseFilterTektro">
                                    <div class="accordion-body">
                                            Tektro的官方網站，點擊支援裡的「影音分享」選項，即可找到您要的資訊。
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-heading02">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse02"
                                        aria-expanded="false" aria-controls="collapse02">
                                        Q: 前輪夾式煞車器跟後輪夾式煞車器有什麼不一樣?
                                    </button>
                                </h2>
                                <div id="collapse02" class="accordion-collapse collapse"
                                    aria-labelledby="flush-heading02" data-bs-parent="#collapseFilterTektro">
                                    <div class="accordion-body">
                                        前輪夾式煞車器是安裝在前叉上, 而後輪的夾式煞車器是安裝在車架上, 安裝的條件不同, 需依前後輪不同位置, 設定夾器的中心螺栓長度, 方能將夾器安全穩定的鎖在前叉或車架上.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-heading03">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse03"
                                        aria-expanded="false" aria-controls="collapse03">
                                        Q: 是不是所有Tektro的煞車器的是可以調整的?
                                    </button>
                                </h2>
                                <div id="collapse03" class="accordion-collapse collapse"
                                    aria-labelledby="flush-heading03" data-bs-parent="#collapseFilterTektro">
                                    <div class="accordion-body">
                                        前輪夾式煞車器是安裝在前叉上, 而後輪的夾式煞車器是安裝在車架上, 安裝的條件不同, 需依前後輪不同位置, 設定夾器的中心螺栓長度, 方能將夾器安全穩定的鎖在前叉或車架上.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tektro accordion end -->
                        <!-- TRP accordion start -->
                        <div class="accordion_primary accordion accordion-flush" id="collapseFilterTrp">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingA">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseA"
                                        aria-expanded="false" aria-controls="collapseA">
                                        Q: 公路用手把可不可以和登山用前輪變速器一起使用?
                                    </button>
                                </h2>
                                <div id="collapseA" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingA" data-bs-parent="#collapseFilterTrp">
                                    <div class="accordion-body">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, ratione! Provident numquam dolorum, quae et rerum mollitia laboriosam quam illo?
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingB">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseB"
                                        aria-expanded="false" aria-controls="collapseB">
                                        Q: 當加速或是滑行時，如何防止碟煞的摩擦?
                                    </button>
                                </h2>
                                <div id="collapseB" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingB" data-bs-parent="#collapseFilterTrp">
                                    <div class="accordion-body">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque eum non, dolorem ducimus est aliquam, facilis facere impedit tenetur fugit accusamus? Aperiam harum atque ducimus dignissimos, laboriosam exercitationem non doloremque?
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingC">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseC"
                                        aria-expanded="false" aria-controls="collapseC">
                                        Q: 任何礦物油都可以使用在 TRP 的碟煞上嗎?
                                    </button>
                                </h2>
                                <div id="collapseC" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingC" data-bs-parent="#collapseFilterTrp">
                                    <div class="accordion-body">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic vel quod natus cumque non nihil iste ullam? Dolorum nesciunt vel exercitationem doloremque recusandae et, qui iste illo unde necessitatibus quam?
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- TRP accordion end -->
                    </div>
                    <div class="tab-pane fade" role="tabpanel" id="qaFilterTektro">
                        <!-- tektro accordion start -->
                        <div class="accordion_primary accordion accordion-flush" id="collapseFilterTektro">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-heading01">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse01"
                                        aria-expanded="false" aria-controls="collapse01">
                                        Q: 在哪裡可以看到Tektro產品的分解圖和使用方法?
                                    </button>
                                </h2>
                                <div id="collapse01" class="accordion-collapse collapse"
                                    aria-labelledby="flush-heading01" data-bs-parent="#collapseFilterTektro">
                                    <div class="accordion-body">
                                            Tektro的官方網站，點擊支援裡的「影音分享」選項，即可找到您要的資訊。
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-heading02">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse02"
                                        aria-expanded="false" aria-controls="collapse02">
                                        Q: 前輪夾式煞車器跟後輪夾式煞車器有什麼不一樣?
                                    </button>
                                </h2>
                                <div id="collapse02" class="accordion-collapse collapse"
                                    aria-labelledby="flush-heading02" data-bs-parent="#collapseFilterTektro">
                                    <div class="accordion-body">
                                        前輪夾式煞車器是安裝在前叉上, 而後輪的夾式煞車器是安裝在車架上, 安裝的條件不同, 需依前後輪不同位置, 設定夾器的中心螺栓長度, 方能將夾器安全穩定的鎖在前叉或車架上.
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-heading03">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapse03"
                                        aria-expanded="false" aria-controls="collapse03">
                                        Q: 是不是所有Tektro的煞車器的是可以調整的?
                                    </button>
                                </h2>
                                <div id="collapse03" class="accordion-collapse collapse"
                                    aria-labelledby="flush-heading03" data-bs-parent="#collapseFilterTektro">
                                    <div class="accordion-body">
                                        前輪夾式煞車器是安裝在前叉上, 而後輪的夾式煞車器是安裝在車架上, 安裝的條件不同, 需依前後輪不同位置, 設定夾器的中心螺栓長度, 方能將夾器安全穩定的鎖在前叉或車架上.
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- tektro accordion end -->
                    </div>
                    <div class="tab-pane fade" role="tabpanel" id="qaFilterTrp">
                        <!-- TRP accordion start -->
                        <div class="accordion_primary accordion accordion-flush" id="collapseFilterTrp">
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingA">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseA"
                                        aria-expanded="false" aria-controls="collapseA">
                                        Q: 公路用手把可不可以和登山用前輪變速器一起使用?
                                    </button>
                                </h2>
                                <div id="collapseA" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingA" data-bs-parent="#collapseFilterTrp">
                                    <div class="accordion-body">
                                            Lorem ipsum dolor sit amet consectetur adipisicing elit. Fugiat, ratione! Provident numquam dolorum, quae et rerum mollitia laboriosam quam illo?
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingB">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseB"
                                        aria-expanded="false" aria-controls="collapseB">
                                        Q: 當加速或是滑行時，如何防止碟煞的摩擦?
                                    </button>
                                </h2>
                                <div id="collapseB" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingB" data-bs-parent="#collapseFilterTrp">
                                    <div class="accordion-body">
                                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Eaque eum non, dolorem ducimus est aliquam, facilis facere impedit tenetur fugit accusamus? Aperiam harum atque ducimus dignissimos, laboriosam exercitationem non doloremque?
                                    </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="flush-headingC">
                                    <button class="accordion-button collapsed" type="button"
                                        data-bs-toggle="collapse" data-bs-target="#collapseC"
                                        aria-expanded="false" aria-controls="collapseC">
                                        Q: 任何礦物油都可以使用在 TRP 的碟煞上嗎?
                                    </button>
                                </h2>
                                <div id="collapseC" class="accordion-collapse collapse"
                                    aria-labelledby="flush-headingC" data-bs-parent="#collapseFilterTrp">
                                    <div class="accordion-body">
                                        Lorem ipsum dolor sit amet consectetur, adipisicing elit. Hic vel quod natus cumque non nihil iste ullam? Dolorum nesciunt vel exercitationem doloremque recusandae et, qui iste illo unde necessitatibus quam?
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- TRP accordion end -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection