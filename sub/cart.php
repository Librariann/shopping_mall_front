<?php include('../../inc/header.php'); ?>
<main class="section_wrapper cart_main">
    <section id="cart" class="section_common cart_section">
        <ul class="cart_tab_list">
            <li>국내배송상품</li>
            <li>해외배송상품</li>
            <li>장바구니에 담긴 상품은 5일 동안 보관됩니다.</li>
        </ul>
        <div class="domestic">
            <form id="cart_item">
                <div class="non_data"><img src="../../images/goods/cart/img_cart_empty.jpg" /></div>
                <div class="goods_list">
                    <p class="goods_kind">일반상품<i class="goods_total_number">(1)</i></p>
                    <table class="cart_goods_detail">
                        <tr>
                            <th><input type="checkbox" /></th>
                            <th>이미지</th>
                            <th>상품정보</th>
                            <th>판매가</th>
                            <th>수량</th>
                            <th>적립금</th>
                            <th>배송구분</th>
                            <th>배송비</th>
                            <th>합계</th>
                            <th>선택</th>
                        </tr>
                        <tr>
                            <td><input type="checkbox" /></td>
                            <td><img class="product_img" src="../../images/goods/cart/cart_detail_thum.webp" /></td>
                            <td>
                                <a class="goods_name" href="#">상품명</a>
                                <p class="goods_option">[옵션:상품옵션]</p>
                                <div class="change_option_pop">
                                    <span class="option_btn">옵션변경</span>
                                    <div class="change_option">
                                        <h3 class="option_pop_title">옵션변경</h3>
                                        <p class="goods_name">상품명</p>
                                        <p class="goods_option">[옵션:상품옵션]</p>
                                        <div class="select_box ">
                                            <div class="option1_box option_box clearfix">
                                                <label for="newColor">COLOR</label>
                                                <select id="newColor">
                                                    <option>- [필수] 옵션을 선택해 주세요 -</option>
                                                    <option>color1</option>
                                                    <option>color2</option>
                                                    <option>color3</option>
                                                    <option>color4</option>
                                                </select>
                                            </div>
                                            <div class="option2_box option_box clearfix">
                                                <label for="newSize">SIZE</label>
                                                <select id="newSize">
                                                    <option>- [필수] 옵션을 선택해 주세요 -</option>
                                                    <option>size1</option>
                                                    <option>size2</option>
                                                    <option>size3</option>
                                                    <option>size4</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="option_btn_box">
                                            <input type="submit" value="추가" />
                                            <input type="submit" value="변경" />
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>판매가 : 42,000 won</td>
                            <td class="quantity">
                                <input type="text" value="">
                                <span class="quantity_box">
                                    <a class="quantity_btn quantity_plus"><img src="../../images/goods/cart/btn_quantity_up.gif" alt="상품갯수추가" /></a>
                                    <a class="quantity_btn quantity_minus"><img src="../../images/goods/cart/btn_quantity_down.gif" alt="상품갯수감소" /></a>
                                </span>
                                <input id="quantityChange" type="button" value="변경" />
                            </td>
                            <td> - </td>
                            <td>기본배송<span class="block">(해외배송가능)</span></td>
                            <td>2,500 won</td>
                            <td>44,500 won</td>
                            <td class="buy_product">
                                <a href="">주문하기</a>
                                <a href="">관심상품등록</a>
                                <a href="">삭제</a>
                            </td>
                        </tr>
                    </table>
                </div>
                <div class="total_price">
                    <p class="desc">[기본배송]</p>
                    <p class="price_add">삼품구매금약 42,000 + 배송비 2,500 = 합계 : 44,500 won</p>
                </div>
                <div class="product_info_option">
                    <p class="desc">선택상품을</p>
                    <ul class="option_btn_list">
                        <li><button>삭제하기</button></li>
                        <li><button>해외배송상품 장바구니로 이동</button></li>
                        <li><button>견적서출력</button></li>
                        <li><button>장바구니비우기</button></li>
                    </ul>
                </div>
                <table class="total_price_table">
                    <tr>
                        <th>총 상품금액</th>
                        <th>총 배송비</th>
                        <th>결제예정금액</th>
                    </tr>
                    <tr>
                        <td>0 won</td>
                        <td>+0 won</td>
                        <td>=0 won</td>
                    </tr>
                </table>
                <div class="order_btn_box">
                    <input type="submit" value="전체상품주문">
                    <input type="submit" value="선택상품주문">
                    <a href="#" class="going_shopping">쇼핑계속하기</a>
                </div>
            </form>
        </div>
        <!-- <div class="overseas">
            <div class="non_data">
                <img src="../../images/cart/img_cart_empty.jpg" />
            </div>
        </div> -->
        <div class="">
            <h2 class="">이용안내</h2>
            <p class="">
                장바구니 이용안내
                해외배송 상품과 국내배송 상품은 함께 결제하실 수 없으니 장바구니 별로 따로 결제해 주시기 바랍니다.
                해외배송 가능 상품의 경우 국내배송 장바구니에 담았다가 해외배송 장바구니로 이동하여 결제하실 수 있습니다.
                선택하신 상품의 수량을 변경하시려면 수량변경 후 [변경] 버튼을 누르시면 됩니다.
                [쇼핑계속하기] 버튼을 누르시면 쇼핑을 계속 하실 수 있습니다.
                장바구니와 관심상품을 이용하여 원하시는 상품만 주문하거나 관심상품으로 등록하실 수 있습니다.
                파일첨부 옵션은 동일상품을 장바구니에 추가할 경우 마지막에 업로드 한 파일로 교체됩니다.
                무이자할부 이용안내
                상품별 무이자할부 혜택을 받으시려면 무이자할부 상품만 선택하여 [주문하기] 버튼을 눌러 주문/결제 하시면 됩니다.
                [전체 상품 주문] 버튼을 누르시면 장바구니의 구분없이 선택된 모든 상품에 대한 주문/결제가 이루어집니다.
                단, 전체 상품을 주문/결제하실 경우, 상품별 무이자할부 혜택을 받으실 수 없습니다.
            </p>
        </div>

    </section>
</main>
<?php include('../../footer.php'); ?>
<script>
    $(function() {
        $('.option_btn').click(function() {
            $('.change_option').toggleClass('active');
        })

    });
</script>