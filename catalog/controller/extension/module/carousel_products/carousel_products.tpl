
<div class="carousel">
    <?php foreach ($products as $product) { ?>
        <div class="product">
            <div class="product-image">
                <img src="<?php echo $product['image']; ?>" alt="<?php echo $product['name']; ?>">
            </div>
            <div class="product-name"><?php echo $product['name']; ?></div>
            <div class="product-price"><?php echo $product['price']; ?></div>
        </div>
    <?php } ?>
</div>

<script>
    $('.carousel').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
    });
</script>