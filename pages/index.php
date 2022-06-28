<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Healthy Bites</title>

    <!-- css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper@8/swiper-bundle.min.css" />
    <link href="../styles/all.css" rel="stylesheet" />
</head>

<body id="body">




    <?php include '../layout/header.php'  ?>


    <?php include './login.php'; ?>
    <?php include './register.php'; ?>
    <?php include './cartModel.php'; ?>


    <?php include '../layout/menu.php'; ?>


    <div class="container_">
        <section class="section head">

            <div class="row">
                <div class="col-12 col-md-12 col-lg-7">
                    <h1>اختار افضل <span>مكان</span>
                        <p>لبيع المنتجات <span>الصحية</span></p>
                    </h1>

                    <div class="des">هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص</div>
                </div>

                <div class="col-12 col-md-12 col-lg-5">
                    <div class="headImg">
                        <img src="../images/headImg.png" />
                    </div>
                </div>
            </div>

        </section>
    </div>

    <div class="container_">
        <section class="products">
            <h2 class="titleSection">الأكثر مبيعا</h2>


            <div class="boxsProductsIndex">

                <div class="row">
                    <?php

                    for ($x = 0; $x <= 3; $x++) {
                        echo ' <div class="col-12 col-md-6 col-lg-3">
                        <div class="product">
                            <div class="save ">
                                <div class="saveIcon"></div>
                            </div>
                            <div class="PHeader">
                                <img src="../photos/rre.png" />
                            </div>

                            <div class="Pcontent">
                                <h3>مقرمشات فاخره مشكل</h3>
                                <div class="rate">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                </div>

                                <div class="Pfooter flex__">
                                    <div class="price">150 جنية</div>
                                    <div class="addToCart" data-bs-toggle="modal" data-bs-target="#cart">
                                        <div class="addToCartIcon"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>';
                    }
                    ?>


                </div>
                <a href="##">
                    <button class="btn_">مشاهدة المزيد</button>
                </a>
            </div>



        </section>
    </div>

    <div class="container_">
        <section class="products">
            <h2 class="titleSection">عسل ابيض</h2>


            <div class="boxsProductsIndex">

                <div class="row">
                    <?php

                    for ($x = 0; $x <= 3; $x++) {
                        echo ' <div class="col-12 col-md-6 col-lg-3">
                        <div class="product">
                            <div class="save ">
                                <div class="saveIcon"></div>
                            </div>
                            <div class="PHeader">
                                <img src="../photos/rre.png" />
                            </div>

                            <div class="Pcontent">
                                <h3>مقرمشات فاخره مشكل</h3>
                                <div class="rate">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                </div>

                                <div class="Pfooter flex__">
                                    <div class="price">150 جنية</div>
                                    <div class="addToCart">
                                        <div class="addToCartIcon"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>';
                    }
                    ?>


                </div>
                <a href="##">
                    <button class="btn_">مشاهدة المزيد</button>
                </a>
            </div>
        </section>
    </div>

    <div class="container_">
        <section class="ads">
            <div class="row">

                <div class="col-12 col-md-12 col-lg-6">
                    <div class="sec_ads">
                        <div class="adsImg">
                            <img src="../photos/ads1.jpg" />
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-12 col-lg-6">
                    <div class="sec_ads">
                        <div class="sec_ads2">
                            <div class="adsImg">
                                <img src="../photos/ads2.jpg" />
                            </div>
                        </div>

                        <div class="sec_ads2 ads3">
                            <div class="adsImg">
                                <img src="../photos/ads3.jpg" />
                            </div>
                        </div>
                    </div>
                </div>
        </section>
    </div>

    <div class="container_">
        <section class="products">
            <h2 class="titleSection">مقترحات</h2>


            <div class="boxsProductsIndex">

                <div class="row">
                    <?php

                    for ($x = 0; $x <= 3; $x++) {
                        echo ' <div class="col-12 col-md-6 col-lg-3">
                        <div class="product">
                            <div class="save ">
                                <div class="saveIcon"></div>
                            </div>
                            <div class="PHeader">
                                <img src="../photos/rre.png" />
                            </div>

                            <div class="Pcontent">
                                <h3>مقرمشات فاخره مشكل</h3>
                                <div class="rate">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                </div>

                                <div class="Pfooter flex__">
                                    <div class="price">150 جنية</div>
                                    <div class="addToCart">
                                        <div class="addToCartIcon"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>';
                    }
                    ?>


                </div>
                <a href="##">
                    <button class="btn_">مشاهدة المزيد</button>
                </a>
            </div>
        </section>
    </div>

    <div class="container_">
        <section class="products">
            <h2 class="titleSection">الأكثر مبيعا</h2>


            <div class="boxsProductsIndex">

                <div class="row">
                    <?php

                    for ($x = 0; $x <= 3; $x++) {
                        echo ' <div class="col-12 col-md-6 col-lg-3">
                        <div class="product">
                            <div class="save ">
                                <div class="saveIcon"></div>
                            </div>
                            <div class="PHeader">
                                <img src="../photos/rre.png" />
                            </div>

                            <div class="Pcontent">
                                <h3>مقرمشات فاخره مشكل</h3>
                                <div class="rate">
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star checked"></span>
                                    <span class="fa fa-star"></span>
                                </div>

                                <div class="Pfooter flex__">
                                    <div class="price">150 جنية</div>
                                    <div class="addToCart"  >
                                    
                                        <div class="addToCartIcon"></div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>';
                    }
                    ?>


                </div>
                <a href="##">
                    <button class="btn_">مشاهدة المزيد</button>
                </a>
            </div>
        </section>
    </div>

    <div class="container_">
        <section class="whyHealthy">

            <div class="row">
                <div class="col-12 col-lg-4 ">
                    <div class="head">
                        <h2>ليه تختار هيلثى <div>مميزات</div>
                        </h2>
                        <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص</p>
                    </div>
                </div>

                <div class="col-12 col-lg-8 ">

                    <div class="whyHealthyItems flex__">
                        <div class="whyHealthyItem flex_">
                            <div class="icon"><i class="quikly"></i></div>
                            <div class="contact">
                                <h3>توصيل اسرع</h3>
                                <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم </p>
                            </div>
                        </div>

                        <div class="whyHealthyItem flex_">
                            <div class="icon"><i class="wallet"></i></div>
                            <div class="contact">
                                <h3>دفع امان</h3>
                                <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم </p>
                            </div>
                        </div>
                    </div>

                    <div class="whyHealthyItems mt-5 flex__">
                        <div class="whyHealthyItem flex_">
                            <div class="icon"><i class="quality"></i></div>
                            <div class="contact">
                                <h3>افضل جوده</h3>
                                <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم </p>
                            </div>
                        </div>

                        <div class="whyHealthyItem flex_">
                            <div class="icon"><i class="return"></i></div>
                            <div class="contact">
                                <h3>سياسية الاسترجاع</h3>
                                <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <?php include '../sections/customerReviews.php'; ?>
    <?php include '../sections/news.php'; ?>






    <?php include '../layout/footer.php'; ?>


    <!-- javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>


    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

 
    <script src="../js/functions.js"></script>




</body>

</html>