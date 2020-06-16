<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>


<div class="type-1117 ">
    <div onclick="demo_hidden()" class="backgroud-see position-fixed "></div>
    <div id="choose_demo" class="see-demo position-fixed ">
        <div class="manipulation position-absolute">
            <div onclick="show()" class="manipulation__open position-relative">
                <a href="#"  title="Open/close demo panel">
                    <img src="https://the7.io/elementor-starter/wp-content/plugins/dt-demostand/assets/settings-demo.svg" alt="">
                </a>
            </div>
                <a href="#" title="Purchase The7">
                    <img src="https://the7.io/elementor-starter/wp-content/plugins/dt-demostand/assets/buy-demo.svg" alt="">
                </a>

        </div>
        <div class="page-other position-absolute">
            <div class="select-link">
                <p class="box-title ">
                    <span class="position-relative">See other demos</span>
                </p>
                <a href="#" class="link_img float-left">
                    <div class="position-relative">
                        <img src="./images/the7-1.PNG" alt="">
                    </div>
                </a>
                <a href="#" class="link_img float-left">
                    <div class="position-relative">
                        <img src="./images/the7-2.PNG" alt="">
                    </div>
                </a>
                <a href="#" class="link_img float-left">
                    <div class="position-relative">
                        <img src="./images/the7-3.PNG" alt="">
                    </div>
                </a>
                <a href="#" class="link_img float-left">
                    <div class="position-relative">
                        <img src="./images/the7-4.PNG" alt="">
                    </div>
                </a>
                <a href="#" class="link_img float-left">
                    <div class="position-relative">
                        <img src="./images/the7-5.PNG" alt="">
                    </div>
                </a>
                <a href="#" class="link_img float-left">
                    <div class="position-relative">
                        <img src="./images/the7-6.PNG" alt="">
                    </div>
                </a>
                <a href="#" class="link_img float-left">
                    <div class="position-relative">
                        <img src="./images/the7-7.PNG" alt="">
                    </div>
                </a>
                <a href="#" class="link_img float-left">
                    <div class="position-relative">
                        <img src="./images/the7-8.PNG" alt="">
                    </div>
                </a>
                <a href="#" class="link_img float-left">
                    <div class="position-relative">
                        <img src="./images/the7-9.PNG" alt="">
                    </div>
                </a>
                <a href="#" class="link_img float-left">
                    <div class="position-relative">
                        <img src="./images/the7-10.PNG" alt="">
                    </div>
                </a>
                <a href="#" class="link_img float-left">
                    <div class="position-relative">
                        <img src="./images/the7-11.PNG" alt="">
                    </div>
                </a>
                <a href="#" class="link_img float-left">
                    <div class="position-relative">
                        <img src="./images/the7-12.PNG" alt="">
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>