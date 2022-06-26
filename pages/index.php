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

    <link href="../styles/all.css" rel="stylesheet" />
</head>

<body id="body">

    <div class="container_">


       <?php include '../layout/header.php'  ?>


        <?php include './login.php'; ?>
        <?php include './register.php'; ?>
        <?php include './cart.php'; ?>


        <nav class="menu" id="menu">
            <div class="menuIcon" onclick="openMenu()"></div>

            <div class="input-group rounded">
                <input type="search" class="form-control rounded" placeholder="Search" aria-label="Search" aria-describedby="search-addon" />

            </div>

            <div class="menuUl">
                <ul>
                    <li><a href="#" onclick="openMenu()">الرئيسية</a></li>
                    <li><a href="#" onclick="openMenu()">كل المنتجات</a></li>
                    <li><a href="#" onclick="openMenu()">افضل المنتجات</a></li>
                    <li><a href="#" onclick="openMenu()">عروضنا</a></li>
                    <li><a href="#" onclick="openMenu()">من نحن</a></li>
                </ul>
            </div>
        </nav>


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


        <section class="news">

            <div class="news_center">
                <div class="row">
                    <div class="col-12 col-lg-6">
                        <div class="news_content">
                            <h2>يمكن متابعه اخبارنا اول باول</h2>

                            <div class="input-group mb-3 flex_">
                                <i></i>
                                <input type="text" class="form-control" placeholder="البريد الالكترونى" aria-label="Username" aria-describedby="basic-addon1">

                                <button class="btn_">اشتراك الان</button>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-lg-6">
                        <div class="news_img">
                            <img src="../images/beautiful-young-woman-with-vegetables-grocery-bag-home.png" alt="beautiful-young-woman-with-vegetables-grocery-bag-home" />
                        </div>
                    </div>
                </div>
            </div>
        </section>




    </div>

    <footer class="footer">
        <div class="container_">
            <div class="Fsections1">
                <div class="row">
                    <div class="col-12 col-lg-4">
                        <div class="footer_logo">
                            <img class="Flogo" src="../images/logo.png" />
                            <p>هذا النص هو مثال لنص يمكن أن يستبدل في نفس المساحة، لقد تم توليد هذا النص من مولد النص العربى، حيث يمكنك أن تولد مثل هذا النص</p>
                        </div>
                    </div>
                    <div class="col-12 col-lg-2">
                        <div class="footerSection products">
                            <div class="title">المنتجات</div>
                            <ul>
                                <li><a href="#">مقرمشات</a></li>
                                <li><a href="#">دقيق</a></li>
                                <li><a href="#">زيتوت</a></li>
                                <li><a href="#">أنواع العسل</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg-2">
                        <div class="footerSection">
                            <div class="title">اكتشف</div>
                            <ul>
                                <li><a href="#">تنزيلات</a></li>
                                <li><a href="#">محدّد موقع المتجر</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg-2">
                        <div class="footerSection">
                            <div class="title">عنا</div>
                            <ul>
                                <li><a href="#">الآراء والتعليقات</a></li>
                                <li><a href="#">جولة في الموقع</a></li>

                            </ul>
                        </div>
                    </div>
                    <div class="col-12 col-lg-2">
                        <div class="footerSection">
                            <div class="title">مساعدة</div>
                            <ul>
                                <li><a href="#">اتصل بنا</a></li>
                                <li><a href="#">الشحن والتوصيل</a></li>
                                <li><a href="#">إجراءات الإرجاع</a></li>
                                <li><a href="#">سياسة الإرجاع</a></li>

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

            <div class="Fsections2">
                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="Fsections2Item flex_">
                            <div class="icon"><i class="phone"></i></div>
                            <div class="contact">
                                <h3>التحدث الينا</h3>
                                <p>02205151515521</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="Fsections2Item flex_">
                            <div class="icon"><i class="question"></i></div>
                            <div class="contact">
                                <h3>مركز المساعده</h3>
                                <p>help.healthy.com</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="Fsections2Item flex_">
                            <div class="icon"><i class="email"></i></div>
                            <div class="contact">
                                <h3>راسلنا</h3>
                                <p>mangaia@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


        </div>
        <div class="Fsections3">
            جميع الحقوق محفوظة لدى شركة @ هيلثى
        </div>
    </footer>



    <!-- javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

    <script>
        function openMenu() {
            var element = document.getElementById("menu");
            var element2 = document.getElementsByTagName('body')[0]

            if (element.classList.contains('active')) {
                element.classList.remove('active');
                element2.classList.remove('active')
            } else {
                element.classList.add('active')
                element2.classList.add('active')
            }
            // element.classList.add("active");

            // document.getElementsByClassName("menu").addcslashes = "block";
        }
    </script>
</body>

</html>