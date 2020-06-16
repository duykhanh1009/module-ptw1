<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<section id="woocommerce_product_categories-2" class="widget woocommerce widget_product_categories">
    <div class="widget-title">Product categories</div>
    <ul class="product-categories"><li class="cat-item cat-item-156">
        <a href="https://the7.io/fashion-store/product-category/clothing/clothing-aesthetic/">Shop by aesthetic</a></li><li class="cat-item cat-item-157">
            <a href="https://the7.io/fashion-store/product-category/clothing/clothing-category/">Shop by category</a></li></ul></section>
<section id="woocommerce_layered_nav-2" class="widget woocommerce widget_layered_nav woocommerce-widget-layered-nav">
        <div class="widget-title">Filter by color</div>
           <ul class="woocommerce-widget-layered-nav-list">
               <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term ">
                   <a rel="nofollow" href="https://the7.io/fashion-store/product-category/clothing/?filter_color=black">Black</a> 
                   <span class="count">(8)</span></li><li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term ">
                   <a rel="nofollow" href="https://the7.io/fashion-store/product-category/clothing/?filter_color=blue">Blue</a>
                   <span class="count">(2)</span></li><li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term ">
                   <a rel="nofollow" href="https://the7.io/fashion-store/product-category/clothing/?filter_color=camel">Camel</a> 
                   <span class="count">(3)</span></li><li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term ">
                   <a rel="nofollow" href="https://the7.io/fashion-store/product-category/clothing/?filter_color=grey">Grey</a> 
                   <span class="count">(5)</span></li><li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term ">
                   <a rel="nofollow" href="https://the7.io/fashion-store/product-category/clothing/?filter_color=pink">Pink</a> 
                   <span class="count">(3)</span></li><li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term ">
                   <a rel="nofollow" href="https://the7.io/fashion-store/product-category/clothing/?filter_color=red">Red</a> 
                   <span class="count">(3)</span></li><li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term ">
                   <a rel="nofollow" href="https://the7.io/fashion-store/product-category/clothing/?filter_color=white">White</a> 
                   <span class="count">(11)</span></li><li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term ">
                   <a rel="nofollow" href="https://the7.io/fashion-store/product-category/clothing/?filter_color=yellow">Yellow</a> 
                   <span class="count">(2)</span></li></ul>
</section> 
<section id="woocommerce_price_filter-2" class="widget woocommerce widget_price_filter">
    <div class="widget-title">Filter by price</div>
    <form method="get" action="https://the7.io/fashion-store/product-category/clothing/">
        <div class="price_slider_wrapper">
            <div class="price_slider ui-slider ui-slider-horizontal ui-widget ui-widget-content ui-corner-all" style="">
                <div class="ui-slider-range ui-widget-header ui-corner-all" style="left: 0%; width: 100%;"></div>
                <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 0%;"></span>
                <span class="ui-slider-handle ui-state-default ui-corner-all" tabindex="0" style="left: 100%;"></span></div><div class="price_slider_amount" data-step="10">
                    <input type="text" id="min_price" name="min_price" value="20" data-min="20" placeholder="Min price" style="display: none;">
                    <input type="text" id="max_price" name="max_price" value="240" data-max="240" placeholder="Max price" style="display: none;">
                    <button type="submit" class="button">Filter</button>
                    <div class="price_label" style=""> Price: <span class="from">$20</span> — <span class="to">$240</span></div><div class="clear">  
                    </div>                       
                </div>                   
        </div>
    </form>
</section>