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
    <link href="../styles/profile.css" rel="stylesheet" />
</head>

<body id="body">


    <!-- header -->
    <?php include '../layout/header.php'  ?>
    <?php include '../layout/menu.php'; ?>
    <?php include './login.php'; ?>
    <?php include './register.php'; ?>

    <!-- end header -->


    <div class="profilePage pageHeader">
        <div class="head_">
            <h1>الصفحة الشخصية</h1>
        </div>

        <div class="container_">
            <section class="content">
                <div class="row">

                    <div class="col-12 col-md-12 col-lg-12 col-xl-3">
                        <div class="CPProfile">
                            <div class="PPI_img"><img src="https://img.etimg.com/thumb/width-640,height-480,imgsize-144736,resizemode-1,msid-69037337/small-biz/startups/newsbuzz/fraud-is-only-possible-if-user-grants-access-oldrich-mller-coo-anydesk/oldrich-muller.jpg" /></div>
                            <h4>محمد عبد الرحمن ابرهيم</h4>
                            <p>mohamed@gmail.com</p>
                        </div>
                        <button type="button" class="modal_btn" data-bs-toggle="modal" data-bs-target="#exampleModal" data-bs-whatever="@mdo">
                            <span class="fa fa-star-o"></span>
                            <span>قولنا رايك فينا</span>
                        </button>
                        <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                        <div class="modal-dialog">
                            <div class="modal-content">
                            <div class="img">
                            <img src="../images/star.png" />
                            </div>
                            <h3>قولنا رايك فينا</h3>
                            <div class="modal-body">
                                <form  method="POST" action="">
                                    <textarea class="form-control" id="message-text" placeholder="اكتبلنا رايك"></textarea>
                                    <div class="send_btn" >
                                        <button type="button" class="btn">ارسال</button>
                                    </div>
                                </form>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>

                    <div class="col-12 col-md-12 col-lg-12 col-xl-9">
                    <div class="profileHeader flex_">
                            <ul class="flex_">
                                <li class="flex_">
                                    <a href="#">
                                        <i class="menu_user_profile"></i>
                                        <span>تعديل الملف الشخصي</span>
                                    </a>
                                </li>
                                <li class="flex_">
                                    <a href="#">
                                        <i class="IconMap_"></i>
                                        <span>العناوين</span>
                                    </a>
                                </li>
                                <li class="flex_">
                                    <a href="#">
                                        <i class="menu_user_Favorites"></i>
                                        <span>التفضيلات</span>
                                    </a>
                                </li>
                                <li class="flex_ active">
                                    <a href="#">
                                        <i class="menu_user_Orders"></i>
                                        <span>الطلبات</span>
                                    </a>
                                </li>
                               
                            </ul>
                        </div>

                        <div class="CADD">
          
                            
                                <div class="addressHeader">
                                    <ul>
                                        <li>رقم التوصيل</li>
                                        <li>العنوان</li>
                                        <li>عدد العناصر</li>
                                        <li>اجمالى</li>
                                    </ul>
                                </div>
                                <div class="addressBody">
                                    <ul>
                                        <li>
                                        <i class="menu_user_Orders"></i>
                                            <span>1515151511</span>
                                        </li>
                                        <li>القاهره-المقطم</li>
                                        <li>3</li>
                                        <li>650 جنية</li>
                                    </ul>
                                </div>

                                <div class="addressBody">
                                    <ul>
                                        <li>
                                           <i class="menu_user_Orders"></i>
                                            <span>1515151511</span>
                                        </li>
                                        <li>القاهره-المقطم</li>
                                        <li>3</li>
                                        <li>650 جنية</li>
                                    </ul>
                                </div>

                                <div class="addressBody">
                                    <ul>
                                        <li>
                                        <i class="menu_user_Orders"></i>
                                            <span>1515151511</span>
                                        </li>
                                        <li>القاهره-المقطم</م>
                                        <li>3</li>
                                        <li>650 جنية</li>
                                    </ul>
                                </div>

                                <div class="addressBody">
                                    <ul>
                                        <li>
                                        <i class="menu_user_Orders"></i>
                                            <span>1515151511</span>
                                        </li>
                                        <li>القاهره-المقطم</li>
                                        <li>3</li>
                                        <li>650 جنية</li>
                                    </ul>
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
    <script src="https://unpkg.com/swiper@8/swiper-bundle.min.js"></script>

    <script src="../js/functions.js"></script>
</body>

</html>