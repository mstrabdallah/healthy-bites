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




    <!-- header -->
    <?php include '../layout/header.php'  ?>
    <?php include '../layout/menu.php'; ?>
    <?php include './login.php'; ?>
    <?php include './register.php'; ?>

    <!-- end header -->


    <div class="cartPage pageHeader">
        <div class="head_">
            <h1>عربة التسوق</h1>
        </div>

        <div class="container_">
            <section class="content">
                <div class="row">

                    <div class="col-12 col-md-6 col-lg-7 col-xl-8">
                        <div class="CPaddress">

                            <div class="flex_">
                                <div class="IconMap__">
                                    <div class="IconMap_"></div>
                                </div>
                                <h3>تفاصيل العنوان</h3>
                            </div>

                            <div class="CPaddress_content">
                                <form class="form_" method="POST" action="">
                                    <div class="col-12  mt-4">
                                        <div class="form-group form-group_">
                                            <i class="IconMap icon_ icon__"></i>

                                            <select class="form-select input_" aria-label="Default select example">
                                                <option selected>المحافظة</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                    </div>

                                    <div class="col-12  mt-4">
                                        <div class="form-group form-group_">
                                            <i class="IconMap icon_ icon__"></i>

                                            <input type="text" class="form-control custom-input input_" name="address" value="" placeholder="العنوان" required>
                                        </div>
                                    </div>
                                    <div class="CPnexStep_">
                                        <button class="CPnexStep">تأكيد</button>
                                    </div>

                                </form>
                            </div>


                        </div>


                    </div>
                    <div class="col-12 col-md-6 col-lg-5 col-xl-4">
                        <div class="CPProducts">

                            <h2>تفاصيل المنتج</h2>

                            <?php

                            for ($x = 0; $x <= 3; $x++) {
                                echo '
                                    <div class="CPProducts_item flex__">

                                    <div class="flex" >
                                    <div class="CPPI_img"><img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcRPopQPYZgF2MXikpmbR3y-KkITi6DPrHEbne97Glt-2ER2xtleHw3Zz-nuFDBHnZukDzE&usqp=CAU" /></div>
                                    <div class="CPPI_content">
                                    <h3>مقرمشات لوز</h3>
                                    <div class="categories">مقرمشات</div>

                                    <div class="MCquantity flex__">

                                    <div class="flex__ MCquantity_">
                                        <div class="MCQplus"><span>+</span></div>
                                        <div class="MCQinput">
                                            <input type="text" value="1" required>

                                        </div>
                                        <div class="MCQminus"><span>_</span></div>
                                    </div>
                                </div>
                                
                                    </div>

                                    </div>

                                    <div class="CPPI_price">
                                    <div class="close">x</div>

                                    <div class="price">300 جنيه</div>
                                    </div>
                                    </div>
                                    ';
                            }
                            ?>


                            <div class="CPcart_footer">

                                <div class="flex__">
                                    <strong class="coupon"> كوبون الخصم</strong>
                                    <input type="text" class="form-control custom-input input_" name="address" value="" placeholder="###" required>
                                </div>

                                <div class="flex__">
                                    <span class="productPrice">سعر المنتج</span>
                                    <span class="productPricenum">300 جنيه</span>
                                </div>

                                <div class="flex__">
                                    <span class="productShipping">الشحن</span>
                                    <span class="productShippingnum">300 جنيه</span>
                                </div>

                                <div class="flex__ total">
                                    <strong class="productTotal">اجمالى السعر</strong>
                                    <strong class="productTotalnum">350 جنيه</strong>
                                </div>


                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <?php include '../sections/news.php'; ?>

    </div>






    </div>

    <?php include '../layout/footer.php'; ?>



    <!-- javascript -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js"></script>

    <script src="../js/functions.js"></script>
</body>

</html>