<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>

<div class="type-1472">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="col-sm-24">
                    <div class="custom">
                        <div class="column-inner">
                            <div class="column">
                                <div class="item-content">
                                    <h2 class="custom-font"> New S/S 2020 collection</h2>
                                    <h2 class="custom-font-2"> Latest trends & actual models</h2>
                                    <div class="space">
                                        <span class="empty-space"></span>
                                    </div>
                                    <a href="#" class="btn">
                                        <span class="btn-text">Shop Now</span>
                                    </a>
                                </div>
                                <div class="qc">
                                    <div class="cheo">
                                        What's new
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-sm-24">
                    <div class="custom2">
                        <div class="column-inner">
                            <div class="column">
                                <div class="item-content">
                                    <h2 class="custom-font">Save Up to 40% Off</h2>
                                    <h2 class="custom-font-2">On All Apple Products</h2>
                                    <div class="space">
                                        <span class="empty-space"></span>
                                    </div>
                                    <a href="#" class="btn">
                                        <span class="btn-text">Shop Now</span>
                                    </a>
                                </div>
                                <div class="qc">
                                    <div class="cheo">
                                        Shoes sale
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="col-sm-24">
                    <div class="custom3">
                        <div class="column-inner">
                            <div class="column">
                                <div class="item-content">
                                    <h2 class="custom-font">Save Up to 40% Off</h2>
                                    <h2 class="custom-font-2">On All Apple Products</h2>
                                    <div class="space">
                                        <span class="empty-space"></span>
                                    </div>
                                    <a href="#" class="btn">
                                        <span class="btn-text">Shop Now</span>
                                    </a>
                                </div>
                                <div class="qc">
                                    <div class="cheo">
                                        fashion blog
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="quar">
            <div class="row">
                <div class="col-md-3">
                    <div class="fast">
                        <div class="col-md-2 left">
                            <i class="fas fa-volleyball-ball"></i>
                        </div>
                        <div class="col-md-10 right">
                            Customer Suport
                            <div class="cont">
                                CONTACT US NOW
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="fast">
                        <div class="col-md-2 left">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <div class="col-md-10 right">
                            30 days return period
                            <div class="cont">
                                RETURNS & REFUNDS
                            </div>
                        </div>

                    </div>
                </div>
                <div class="col-md-3">
                    <div class="fast">
                        <div class="col-md-2 left">
                            <i class="fas fa-car-side"></i>
                        </div>
                        <div class="col-md-10 right">
                            Flexible shipping
                            <div class="cont">
                                SHIPPING DETAILS
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="fast">
                        <div class="col-md-2 left">
                            <i class="fas fa-credit-card"></i>
                        </div>
                        <div class="col-md-10 right">
                            Secure payments
                            <div class="cont">
                                PAYMENT METHODS
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>