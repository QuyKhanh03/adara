<?php
    // echo print_r($_SESSION["cart"]);
?>
<main>

<!-- breadcrumb-area -->
<section class="breadcrumb-area breadcrumb-bg" data-background="public/layout/img/bg/breadcrumb_bg03.jpg">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcrumb-content">
                    <h2>Cart Page</h2>
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">Cart</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- breadcrumb-area-end -->
<?php 
    

             ?>
<!-- cart-area -->
<div class="cart-area pt-100 pb-100">
    <div class="container">
        
        <div class="row">
            <div class="col-12">
                <div class="cart-wrapper">
                    <div class="table-responsive">
                        <table class="table mb-0">
                            <thead>
                                <tr>
                                    <th class="product-thumbnail"></th>
                                    <th class="product-name">Product</th>
                                    <th class="product-price">Price</th>
                                    <th class="product-quantity">QUANTITY</th>
                                    <th class="product-subtotal">SUBTOTAL</th>
                                    <th class="product-delete"></th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach($_SESSION["cart"] as $key) { ?>
                                <tr>
                                    <td class="product-thumbnail"><a href="prd_detail.php"><img src="public/layout/img/product/<?php echo $key[2] ?>" alt=""></a></td>
                                    <td class="product-name">
                                        <h4><a href="shop-details.html"><?php echo $key[1]  ?></a></h4>
                                    </td>
                                    <td class="product-price">$ <?php echo $key[3]  ?>.00</td>
                                    <td class="product-quantity">
                                        <div class="cart-plus-minus">
                                            <form action="#" class="num-block">
                                                <input type="text" class="in-num" value="<?php echo $key[4] ?>" readonly="">
                                                <div class="qtybutton-box">
                                                    <span class="plus"><img src="img/icon/plus.png" alt=""></span>
                                                    <span class="minus dis"><img src="img/icon/minus.png" alt=""></span>
                                                </div>
                                            </form>
                                        </div>
                                    </td>
                                    <td class="product-subtotal"><span>$ <?php echo $key[5] ?>.00</span></td>
                                    <td class="product-delete"><a href="#"><i class="flaticon-trash"></i></a></td>
                                </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                    <div class="shop-cart-bottom mt-20">
                        <div class="cart-coupon">
                            <form action="#">
                                <input type="text" placeholder="Enter Coupon Code...">
                                <button class="btn">Apply Coupon</button>
                            </form>
                        </div>
                        <div class="continue-shopping">
                            <a href="shop.html" class="btn">update shopping</a>
                        </div>
                    </div>
                </div>
                <div class="cart-total pt-95">
                    <h3 class="title">CART TOTALS</h3>
                    <div class="shop-cart-widget">
                        <form action="#">
                            <ul>
                                <li class="sub-total"><span>SUBTOTAL</span> $ 136.00</li>
                                <li>
                                    <span>SHIPPING</span>
                                    <div class="shop-check-wrap">
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck1">
                                            <label class="custom-control-label" for="customCheck1">FLAT RATE: $15</label>
                                        </div>
                                        <div class="custom-control custom-checkbox">
                                            <input type="checkbox" class="custom-control-input" id="customCheck2">
                                            <label class="custom-control-label" for="customCheck2">FREE SHIPPING</label>
                                        </div>
                                        <a href="#" class="calculate">Calculate shipping</a>
                                    </div>
                                </li>
                                <li class="cart-total-amount"><span>TOTAL</span> <span class="amount">$ 151.00</span></li>
                            </ul>
                            <a href="checkout.html" class="btn">PROCEED TO CHECKOUT</a>
                        </form>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- cart-area-end -->

</main>