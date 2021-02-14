<?php include('../inc/header.php'); ?>
<script>
    $(function() {
        $(".slide").slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            autoplay: true
        });
        $(".sub_slide").slick({
            infinite: true,
            slidesToShow: 1,
            slidesToScroll: 1,
            arrows: false,
            autoplay: true
        });
    });
</script>
<main id="main">
    <section class="slide_secion">
        <div class="slide">
            <div class="slide_contents">
                <img src="../images/index/m01.jpg" />
            </div>
            <div class="slide_contents">
                <img src="../images/index/m02.jpg" />
            </div>
            <div class="slide_contents">
                <img src="../images/index/m03.jpg" />
            </div>
        </div>
        <div class="sub_slide_wrapper">
            <ul class="sub_slide_list">
                <li>
                    <h2 class="slide_title">HOTDEAL</h2>
                    <p class="desc">핫 아이템! 깜짝 할인가로 만나볼 수 있는 <strong>핫딜 함께해요</strong></p>
                </li>
                <li>
                    <h2 class="slide_title">MADE BY SSUMJ</h2>
                    <p class="desc">썸제이만의 감서으을 담은 <i>자체제작</i></p>
                </li>
                <li>
                    <div class="sub_slide">
                        <div class="sub_slide_contents">
                            <img src="../images/index/sub_slide1.jpg" />
                        </div>
                        <div class="sub_slide_contents">
                            <img src="../images/index/sub_slide2.jpg" />
                        </div>
                        <div class="sub_slide_contents">
                            <img src="../images/index/sub_slide3.jpg" />
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
    <section class="best_item">
        <h2 class="section_title">BEST ITEM</h2>
        <div class="product_list_wrapper">
            <ul class="product_list list_common">
                <li>
                    <a href="#">
                        <img src="../images/index/product_list1.webp" />
                        <div class="text_box">
                            <h3 class="goods_name">by ssumj. 울100% 에르핸드메이드 코트(2col)</h3>
                            <p class="goods_event">초특가 핫딜 3만원 할인</p>
                            <p class="desc">주문폭주/마지막 4차 프리오더 12월 22일 발송시작예정</p>
                            <div class="etc_icon_box">
                                <ul class="list_common icon_list">
                                    <li><img src="../images/common/custom_26.gif" /></li>
                                    <li><img src="../images/common/custom_27.gif" /></li>
                                    <li><img src="../images/common/custom_22.gif" /></li>
                                </ul>
                            </div>
                        </div>
                    </a>
                </li>
                <li>
                    <img src="../images/index/product_list2.webp" />
                    <div class="text_box">
                        <h3 class="goods_name">by ssumj. 울100% 에르핸드메이드 코트(2col)</h3>
                        <p class="goods_event">초특가 핫딜 3만원 할인</p>
                        <p class="desc">주문폭주/마지막 4차 프리오더 12월 22일 발송시작예정</p>
                        <div class="etc_icon_box">
                            <ul class="list_common icon_list">
                                <li><img src="../images/common/custom_26.gif" /></li>
                                <li><img src="../images/common/custom_27.gif" /></li>
                                <li><img src="../images/common/custom_22.gif" /></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="../images/index/product_list3.webp" />
                    <div class="text_box">
                        <h3 class="goods_name">by ssumj. 울100% 에르핸드메이드 코트(2col)</h3>
                        <p class="goods_event">초특가 핫딜 3만원 할인</p>
                        <p class="desc">주문폭주/마지막 4차 프리오더 12월 22일 발송시작예정</p>
                        <div class="etc_icon_box">
                            <ul class="list_common icon_list">
                                <li><img src="../images/common/custom_26.gif" /></li>
                                <li><img src="../images/common/custom_27.gif" /></li>
                                <li><img src="../images/common/custom_22.gif" /></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li>
                    <img src="../images/index/product_list4.webp" />
                    <div class="text_box">
                        <h3 class="goods_name">by ssumj. 울100% 에르핸드메이드 코트(2col)</h3>
                        <p class="goods_event">초특가 핫딜 3만원 할인</p>
                        <p class="desc">주문폭주/마지막 4차 프리오더 12월 22일 발송시작예정</p>
                        <div class="etc_icon_box">
                            <ul class="list_common icon_list">
                                <li><img src="../images/common/custom_26.gif" /></li>
                                <li><img src="../images/common/custom_27.gif" /></li>
                                <li><img src="../images/common/custom_22.gif" /></li>
                            </ul>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </section>
</main>
<?php include('../inc/footer.php'); ?>