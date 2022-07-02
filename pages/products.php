<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>المنتجات</title>

    <!-- css -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link href="../styles/all.css" rel="stylesheet" />
</head>

<body id="body">




    <!-- header -->
    <?php include '../layout/header.php'  ?>
    <?php include '../layout/menu.php'; ?>
    <?php include './login.php'; ?>
    <?php include './register.php'; ?>

    <!-- end header -->


    <div class="ProductsPage pageHeader">
        <div class="head_">
            <h1>المنتجات</h1>
        </div>

        <div class="container_">
            <section class="content">

                <div class="input-group mb-3 flex_ PPsearch">

                    <i class="iconSearch"></i>
                    <input type="text" class="form-control" placeholder="البحث عن المنتج" aria-label="search" aria-describedby="basic-addon1">

                    <button class="btn_">
                        <i class="iconSearchBtn"></i>
                    </button>
                </div>
                <div class="PSPItems">





                    <div class="row">

                        <div class="col-12 col-md-12 col-lg-4  col-xl-3">

                            <div class="PSPFilter">
                                <h3 class="PSPF_title">اقسام المنتجات</h3>
                                <form class="form_" method="POST" action="">
                                    <div class="PSPF_content">

                                        <?php
                                        for ($x = 0; $x <= 6; $x++) {
                                            echo '
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="checkPrice' . $x . '">
                                                    <label class="form-check-label" for="checkPrice' . $x . '">
                                                        قسم الهدايا
                                                    </label>
                                                </div>
                                            ';
                                        }
                                        ?>




                                        <div class="PSPF_price">
                                            <h3>سعر المنتج</h3>

                                            <input type="range" min="1" max="5000" step="0.5" value="5000" class="form-range" id="priceRange">

                                            <div class="flex__">
                                                <input type="text" value="0" class="form-control custom-input inputP_" name="priceFrom" required>
                                                <input type="text" value="5000" class="form-control custom-input inputP_" name="priceTo" id="priceTo" required>

                                            </div>

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>

                        <div class="col-12 col-md-12 col-lg-8 col-xl-9">
                            <div class="row">

                                <div class="showProducts">
                                    <h3> عرض 45 منتج</h3>
                                </div>
                                <?php

                                for ($x = 0; $x <= 5; $x++) {
                                    echo ' <div class="col-12 col-md-6 col-lg-6 col-xl-4">
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

                            <nav aria-label="Page navigation example">
                                <ul class="pagination">
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Previous">
                                            <span aria-hidden="true">&laquo;</span>
                                        </a>
                                    </li>
                                    <li class="page-item active"><a class="page-link" href="#">1</a></li>
                                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                                    <li class="page-item"><a class="page-link" href="#">6</a></li>
                                    <li class="page-item"><a class="page-link" href="#">7</a></li>
                                    <li class="page-item">
                                        <a class="page-link" href="#" aria-label="Next">
                                            <span aria-hidden="true">&raquo;</span>
                                        </a>
                                    </li>
                                </ul>
                            </nav>
                        </div>
                    </div>


                </div>

        </div>
        </section>
    </div>
    <?php include '../sections/whyHealthy.php'; ?>

    <?php include '../sections/news.php'; ?>

    </div>






    </div>

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