<div id="testimoni"> </div>
<style>
.testimonial-section {
    background-color: #f8f8f8;
    padding: 40px 0;
}

.testimonial-container {
    max-width: 800px;
    margin: 0 auto;
}

.testimonial-item {
    display: flex;
    margin-bottom: 20px;
}

.testimonial-image {
    width: 80px;
    height: 80px;
    border-radius: 50%;
    margin-right: 20px;
}

.testimonial-content {
    flex: 1;
}

.testimonial-review {
    font-size: 16px;
    line-height: 1.6;
    margin-bottom: 10px;
}

.author-name {
    font-weight: bold;
    margin-right: 5px;
}

.author-rating {
    font-size: 18px;
}

</style>
<h2 style="text-align: center">Testimoni</h2>
  <br>
<section class="testimonial-section">
    <div class="testimonial-container">
        <div class="testimonial-item">
          <img src="{{asset("img/t1.png")}}" alt="User 1" class="testimonial-image">
            <div class="testimonial-content">
                <p class="testimonial-review">"Harga terbaik dan pelayanan luar biasa. Saya sangat puas dengan pembelian saya."</p>
                <div class="testimonial-author">
                    <span class="author-name">Heni</span>
                    <span class="author-rating">⭐⭐⭐⭐⭐</span>
                </div>
            </div>
        </div>
        <div style="text-align: center">
          <img src="{{asset("img/t1.png")}}" style="width: 80%; height: auto;">
      </div>      
        <br>
        <br><br><br><br><br>
        <div class="testimonial-item">
          <img src="{{asset("img/i2.jpg")}}" alt="User 2" class="testimonial-image">
            <div class="testimonial-content">
                <p class="testimonial-review">"Produk berkualitas tinggi dan pengiriman cepat. Sangat merekomendasikan!"</p>
                <div class="testimonial-author">
                    <span class="author-name">Yusuf</span>
                    <span class="author-rating">⭐⭐⭐⭐⭐</span>
                </div>
            </div>
        </div>
        <div style="text-align: center">
          <img src="{{asset("img/t2.png")}}" style="width: 80%; height: auto;">
      </div>    
    </div>
</section>

</body>
</html>
