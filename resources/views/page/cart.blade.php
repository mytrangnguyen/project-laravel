@extends('master')
@section('content')
<div class="cart-section">
    <div class="bill-section">
        <table>
            <!-- content -->
            <!-- Bill section container -->
            <div class="bill-item-container-header">
                <!--  -->
                <div class="bill-item-product">
                    <div class="bill-title">Sản phẩm</div>
                </div>

                <!--  -->
                <div class="bill-item-detail">
                    <div class="info-product"></div>

                    <div class="info-price">
                        <div class="bill-title">Giá</div>
                    </div>
                    <div class="info-quantity">
                        <div class="bill-title">Số lượng</div>
                    </div>
                    <div class="info-total">
                        <div class="bill-title">Tổng tiền</div>
                    </div>
                </div>
            </div>

            <!-- Bill section container -->
            <div class="bill-item-container">
                <div class="bill-item-product">
                    <div class="bill-title-image">
                        <img src="image/5a893da4cab487-trthomcphclong.png" alt="" sizes="80%" srcset=""
                            class="image-info-product">
                    </div>
                </div>
                <div class="bill-item-detail">
                    <div class="info-product">
                        <p>Hoa tai ngọc trai</p>
                    </div>

                    <div class="info-price">
                        <div class="bill-title price-text">50.000 đ</div>
                    </div>
                    <div class="info-quantity">
                        <div class="bill-title-image">
                            <div class="minus">-</div>
                            <div class="number">1</div>
                            <div class="plus">+</div>
                        </div>
                    </div>
                    <div class="info-total">
                        <div class="bill-title total-text">50.000 đ</div>
                    </div>
                </div>
            </div>

            <!-- Bill section container -->
            <div class="bill-item-container">
                <div class="bill-item-product">
                    <div class="bill-title-image">
                        <img src="image/5a893da4cab487-trthomcphclong.png" alt="" sizes="80%" srcset=""
                            class="image-info-product">
                    </div>
                </div>
                <div class="bill-item-detail">
                    <div class="info-product">
                        <p>Giày len cho bé</p>
                    </div>

                    <div class="info-price info-price-text">
                        <div class="bill-title price-text">50.000 đ</div>
                    </div>
                    <div class="info-quantity">
                        <div class="bill-title-image">
                            <div class="minus">-</div>
                            <div class="number">1</div>
                            <div class="plus">+</div>
                        </div>
                    </div>
                    <div class="info-total">
                        <div class="bill-title total-text">50.000 đ</div>
                    </div>
                </div>
            </div>

            <div class="bill-item-container">
                <div class="bill-item-product">
                    <p>Tổng tiền:
                        <h4 class="total">50.000 đ</h4>
                    </p>
                </div>
            </div>

            <div class="btn-row">
                <button class="btn-back"><i class="fa fa-arrow-left"></i> QUAY LẠI</button>
                <button class="btn-next">BƯỚC TIẾP THEO <i class="fa fa-arrow-right"></i></button>
            </div>
        </table>
    </div>
</div>
@endsection