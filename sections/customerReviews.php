<!-- Swiper -->
<section class="customerReviews">
    <div class="swiper swiperReviews">
        <div class="swiper-wrapper">

            <?php
            for ($x = 0; $x <= 3; $x++) {

                echo '   <div class="swiper-slide">

            <div class="CRContent">
                <h2>اراء العملاء فينا</h2>

                <div class="swiper-slide">

                    <div class="swiperReviews_item">
                    <i class="fa fa-quote-right" aria-hidden="true"></i>

                        <div class="des">من افضل الشركات اللى اتعاملت معاها في تحويل الأموال والتواصل معاهم سهل جدا بيحولوا في اسرع وقت من افضل الشركات اللى اتعاملت</div>

                     
                    
                        <i class="fa fa-quote-left" aria-hidden="true"></i>
                    </div>
                    <div class="rate">
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                    <span class="fa fa-star checked"></span>
                </div>

                <div class="user flex_">
                <img src="https://img.etimg.com/thumb/width-640,height-480,imgsize-144736,resizemode-1,msid-69037337/small-biz/startups/newsbuzz/fraud-is-only-possible-if-user-grants-access-oldrich-mller-coo-anydesk/oldrich-muller.jpg">
                <div class="name">
                <h3>عبداللطيف</h3>
                <p>مدير اعمال شركه مشروع</p>
                </div>
                </div>
                </div>
            </div>

        </div>';
            }

            ?>


        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>