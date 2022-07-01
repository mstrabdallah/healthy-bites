<!DOCTYPE html>
<html lang="ar">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categories</title>

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


    <div class="categoriesPage pageHeader">
        <div class="head_">
            <h1>الاقسام</h1>
        </div>

        <div class="container_">
            <section class="content">

                <div class="CPItems">

                    <?php

                    for ($x = 0; $x <= 7; $x++) {
                        echo ' <div class="CPItem" style="background: #26C495;">

                                <img src="../photos/rre.png" />

                                <div class="CPItem_content">
                                    <h2>المكسرات</h2>
                                    <h4>أنواع مختلفة من المكسرات</h4>
                                </div>
                            </div>';
                    }
                    ?>

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