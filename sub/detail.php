<?php include('../inc/header.php'); ?>
<main class="section_wrapper prodcut_detail">
    <section class="section_common prodcut_detail_top">
        <!-- //상품 이미지 -->
        <div class="thumb">
            <img class="thumb_img" src="../images/goods/detail/detali_sample_thumb.jpg" alt="제품이미지" title="제품명" />
        </div>
        <!-- 상품 이미지// -->
        <!-- //회원 혜택 -->
        <div class="event_dc">
            <img class="dc_img" src="../images/goods/detail/detali_sample_dc_event.jpg" alt="회원혜택" title="회원혜택" />
        </div>
        <!-- 회원 혜택// -->
        <!-- //상품 가격정보 -->
        <div class="sale_info">
            <h2 class="product_name">상품명</h2>
            <p class="product_comment">상품 코멘트</p>
            <form>
                <table class="info_table">
                    <tr class="price">
                        <th>가격/PRICE</th>
                        <td>12000 <p class="won">원/won/\</p>
                        </td>
                    </tr>
                    <tr class="dc_price">
                        <th>할인가격/D.C PRICE</th>
                        <td>12000 <p class="won">원/won/\</p>
                        </td>
                    </tr>
                    <tr class="event">
                        <th>이벤트명</th>
                        <td>이벤트 기간</td>
                    </tr>
                    <tr>
                        <th>적립/POINT</th>
                        <td>120<p class="won">원/won/point</p> (<p class="persent">1</p>%)</td>
                    </tr>
                    <tr>
                        <th>배송선택/DELIVERY</th>
                        <td>
                            <input type="radio" value="국내배송" />
                            <label>국내배송</label>
                            <input type="radio" value="해외배송" />
                            <label>해외배송</label>
                        </td>
                    </tr>
                    <tr>
                        <th>SIZE</th>
                        <td>
                            <select class="select_size">
                                <option value="- [필수] 옵션을 선택해주세요 -" selected>- [필수] 옵션을 선택해주세요 -</option>
                                <option value="90/S">90/S</option>
                                <option value="95/M">95/M</option>
                                <option value="100/L">100/L</option>
                                <option value="105/XL">105/XL</option>
                            </select>
                        </td>
                    </tr>
                </table>
                <p class="total_price"></p>
                <div class="button_box">
                    <button type="button" class="add_btn" value="">ADD CART / 장바구니</button>
                    <button type="button" class="add_btn" value="">WISH LIST / 관심상품</button>
                    <button type="submit" class="add_btn buy_btn" value="">BUY IT NOW / 지금구매</button>
                </div>
            </form>
        </div>
        <!-- 상품 가격정보 // -->
        <!-- // 회원혜택 -->
        <div class="benefit">
            <ul class="benefit_list list_common">
                <li>
                    <a href="#">
                        <div class="contents_box">
                            <img src="../images/goods/detail/benefit_btn_01.png" />
                            <p class="desc">신규고객 3,000원 즉시적립</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="contents_box">
                            <img src="../images/goods/detail/benefit_btn_02.png" />
                            <p class="desc">5만원이상 무료배송</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="contents_box">
                            <img src="../images/goods/detail/benefit_btn_03.png" />
                            <p class="desc">멤버쉽혜택</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="contents_box">
                            <img src="../images/goods/detail/benefit_btn_04.png" />
                            <p class="desc">매주 후기퀸 최대2만원 적립</p>
                        </div>
                    </a>
                </li>
                <li>
                    <a href="#">
                        <div class="contents_box">
                            <img src="../images/goods/detail/benefit_btn_05.png" />
                            <p class="desc">데일리 출석체크 이벤트</p>
                        </div>
                    </a>
                </li>
            </ul>
        </div>
    </section>
    <section class="information">

        <div class="recommend_list">
            <h2 class="list_title">
                <img src="../images/goods/detail/img_recommend_comemnet.png" />
            </h2>
            <div class="first_recommend recommend_slick">
                <div class="recommend_product">
                    <a href="">
                        <img src="../images/goods/detail/recommend_sample_01.gif" />
                    </a>
                </div>
            </div>
            <div class="first_recommend recommend_slick">
                <div class="recommend_product">
                    <a href="">
                        <img src="../images/goods/detail/recommend_sample_02.gif" />
                    </a>
                </div>
            </div>
            <div class="first_recommend recommend_slick">
                <div class="recommend_product">
                    <a href="">
                        <img src="../images/goods/detail/recommend_sample_03.gif" />
                    </a>
                </div>
            </div>
            <div class="first_recommend recommend_slick">
                <div class="recommend_product">
                    <a href="">
                        <img src="../images/goods/detail/recommend_sample_04.gif" />
                    </a>
                </div>
            </div>
            <div class="first_recommend recommend_slick">
                <div class="recommend_product">
                    <a href="">
                        <img src="../images/goods/detail/recommend_sample_05.jpg" />
                    </a>
                </div>
            </div>
        </div>
        <div class="information_tab">
            <ul class="information_tab_list list_common">
                <li><a href="#detail_info">상세정보</a></li>
                <li><a href="#size_table">사이즈표</a></li>
                <li><a href="#coordination">코디아이템</a></li>
                <li><a href="#ditail_review">상품후기</a></li>
                <li><a href="#ditail_qna">상품문의</a></li>
            </ul>
        </div>
        <div id="detail_info" class="informations detail_info">
            <img src="../images/goods/detail/detali_info_03.png" />
        </div>
        <div id="size_table" class="informations size_table">
            <img src="../images/goods/detail/detali_info_02.png" />
        </div>
        <div class="informations wear_info">
            <img src="../images/goods/detail/detali_sample_img_01.jpg" />
            <img src="../images/goods/detail/detali_sample_img_02.jpg" />
        </div>
        <div class="informations caution_info">
            <img src="../images/goods/detail/detali_caution_info.jpg" />
        </div>
        <div id="coordination" class="informations coordination">
            <div class="coordination_contents">
                <div class="coordination_slick">
                    <div class="coordination_text_box">
                        <h3 class="coordination_title">상품명</h3>
                        <p class="coordi_item_price">41000 원/won</p>
                    </div>
                    <div class="coordination_text_box">
                        <h3 class="coordination_title">상품명</h3>
                        <p class="coordi_item_price">41000 원/won</p>
                    </div>
                    <div class="coordination_text_box">
                        <h3 class="coordination_title">상품명</h3>
                        <p class="coordi_item_price">41000 원/won</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="informations customer_guide">
            <img src="../images/goods/detail/detali_customer_guide.jpg" />
        </div>
        <div id="ditail_review" class="ditail_review">
            <h3 class="review_title">REVIEW</h3>
            <p class="desc">상품의 사용후기를 적어주세요.</p>
            <div class="review_fliter clearfix">
                <ul class="review_select_list">
                    <li class="new active">최신순<span class="new_count">(1)</span></li>
                    <li class="grade">평점순<span class="grade_count">(2)</span></li>
                    <li class="like">좋아요순<span class="like_count">(3)</span></li>
                    <li class="view">조회수순<span class="view_count">(4)</span></li>
                </ul>
                <div class="form_box">
                    <form id="review_form" action="">
                        <input id="review_check" id="potoReview" type="checkBox" value="" />
                        <label for="review_check">포토리뷰만 보기</label>
                        <select id="review_selet">
                            <option selected>내용</option>
                            <option>제목</option>
                            <option>아이디</option>
                        </select>
                        <input type="search" placeholder="검색어 입력" value="" />
                    </form>
                </div>
            </div>
            <ul class="review_list">
                <li>
                    <div class="review_contents">
                        <div class="grade_box">
                            <span class="star on"></span>
                            <span class="star on"></span>
                            <span class="star on"></span>
                            <span class="star on"></span>
                            <span class="star"></span>
                        </div>
                        <p class="wright_id">inc***********</p>
                        <p class="like_number">좋아요 : <span class="like_count">1</span></p>
                        <p class="view_number">조회수 : <span class="view_count">1</span></p>
                        <div class="review_info">
                            <p class="desc"><a href="#">보는 그대로 기본 블랙터틀넥 티에요 촉감이 일단 부드럽고 가벼워서 좋네요 너무 붙는 스탈이면 어쩌나 했는데 사이즈 딱 좋습니다 올 겨울 잘 입을듯^^;</a></p>
                            <div class="btn_box">
                                <span class="like_btn"><img src="../images/goods/detail/ico_like.png"></span>
                            </div>
                        </div>
                    </div>
                </li>
                <li>
                    <div class="review_contents">
                        <div class="grade_box">
                            <span class="star on"></span>
                            <span class="star on"></span>
                            <span class="star on"></span>
                            <span class="star"></span>
                            <span class="star"></span>
                        </div>
                        <p class="wright_id">test***********</p>
                        <p class="like_number">좋아요 : <span class="like_count">2</span></p>
                        <p class="view_number">조회수 : <span class="view_count">2</span></p>
                        <div class="review_info">
                            <p class="desc"><a href="#">보는 그대로 가벼워서 좋네요 너무 붙는 스탈이면 어쩌나 했는데 사이즈 딱 좋습니다 올 겨울 잘 입을듯^^;</a></p>
                            <div class="btn_box">
                                <span class="like_btn"><img src="../images/goods/detail/ico_like.png"></span>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>

        <div id="ditail_qna" class="ditail_qna">
            <h3 class="qna_title">Q &amp; A</h3>
            <p class="desc">상품에 대해 궁금한 점을 해결해 드립니다.</p>
            <table class="ditail_qna_table qna_table">
                <tr class="ditail_qna_th_wrap">
                    <th class="number">번호</th>
                    <th class="subject">제목</th>
                    <th class="user_name">이름</th>
                    <th class="date">날짜</th>
                    <th class="hit">조회수</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>상품문의
                        <span class="answer">
                            <i class="answer_re"></i>
                            <i class="answer_lock"></i>
                            <a href="#">답변입니다.</a>
                        </span>
                    </td>
                    <td>홍**</td>
                    <td>2020.11.11</td>
                    <td>1</td>
                </tr>
                <tr>
                    <td>1</td>
                    <td>상품문의<span class="answer"></span></td>
                    <td>김**</td>
                    <td>2020.11.11</td>
                    <td>0</td>
                </tr>
            </table>
            <div class="qna_page_btn_box">
                <a href="#"><img src="../images/goods/detail/btn_comment_first.gif" /></a>
                <a href="#"><img src="../images/goods/detail/btn_comment_prev.gif" /></a>
                <ol class="page_list">
                    <li>
                        <a href="">1</a>
                    </li>
                    <li>
                        <a href="">2</a>
                    </li>
                    <li>
                        <a href="">3</a>
                    </li>
                </ol>
                <a href="#"><img src="../images/goods/detail/btn_comment_next.gif" /></a>
                <a href="#"><img src="../images/goods/detail/btn_comment_last.gif" /></a>
            </div>
        </div>
    </section>
</main>
<script>
    $(document).ready(function() {
        $('.coordination_slick').slick({

        });
    });
</script>
<?php include('../inc/footer.php'); ?>