
 <!--================Cart Area =================-->
  <section class="cart_area">
    <div class="container">
        <div class="cart_inner">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Product</th>
                            <th scope="col">Price</th>
                            <th scope="col">Quantity</th>
                            <th scope="col">Total</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>
                                <div class="media">
                                    <div class="d-flex">
                                        <img src="img/cart.jpg" alt="">
                                    </div>
                                    <div class="media-body">
                                        <p>Asus core i11 gen new</p>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <h5>Rp.7.000.000</h5>
                            </td>
                            <td>
                                <div class="product_count">
                                    <input type="text" name="qty" id="sst" maxlength="12" value="1" title="Quantity:"
                                        class="input-text qty">
                                    <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst )) result.value++;return false;"
                                        class="increase items-count" type="button"><i class="lnr lnr-chevron-up"></i></button>
                                    <button onclick="var result = document.getElementById('sst'); var sst = result.value; if( !isNaN( sst ) &amp;&amp; sst > 0 ) result.value--;return false;"
                                        class="reduced items-count" type="button"><i class="lnr lnr-chevron-down"></i></button>
                                </div>
                            </td>
                            <td>
                                <h5>Rp.7.000.000</h5>
                            </td>
                        </tr>
               
                        <tr class="bottom_button">
                            <td>
                                <a class="gray_btn" href="#">Update Cart</a>
                            </td>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>
                            
                        </tr>
                        <tr>
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>
                                <h5>Subtotal</h5>
                            </td>
                            <td>
                                <h5>Rp.7.010.000</h5>
                            </td>
                        </tr>
                        <tr class="shipping_area">
                            <td>

                            </td>
                            <td>

                            </td>
                            <td>
                                <h5>Pengiriman</h5>
                            </td>
                            <td>
                                <div class="shipping_box">
                                    <ul class="list">
                                       <li><a href="#">Biaya Pengiriman: Rp.10.000</a></li>
                                    </ul>
<br><br>
                                    <h6>Metode Pembayaran <i aria-hidden="true"></i></h6>
                                    <select class="shipping_select">
                                        <option value="1">Transfer bank</option>
                                        <option value="2">Cod</option>
                                    </select>

                                    <input type="text" placeholder="No.rekening bank">
                                    <a class="primary-btn" href="#"> </a>

                                    <h6>Calculate Shipping <i  aria-hidden="true"></i></h6>
                                    <select class="shipping_select">
                                        <option value="1">Bandar Lampung</option>
                                        <option value="2">Jakarta</option>
                                    </select>
                                   
                                    <input type="text" placeholder="Postcode/Zipcode">
                                    <a class="primary-btn" href="{{ route('thanksindex') }}">Pesan Sekarang </a>
                                </div>
                            </td>
                        </tr>
                      
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</section>
<!--================End Cart Area =================-->

