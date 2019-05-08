<?php
$url_host = $_SERVER['HTTP_HOST'];

$pattern_document_root = addcslashes(realpath($_SERVER['DOCUMENT_ROOT']), '\\');

$pattern_uri = '/' . $pattern_document_root . '(.*)$/';

preg_match_all($pattern_uri, __DIR__, $matches);

$url_path = $url_host . $matches[1][0];

$url_path = str_replace('\\', '/', $url_path);
?>
<div class="type-1537">
    <div class="container mod">
        <div class="row">
            <div class="col-md-9">
                <div class="tabs">
                <h3>More posts</h3>
                    <ul class="tabs-list">
                        <li class="active"><a href="#tab1">Popular</a></li>
                        <li><a href="#tab2">Post</a></li>
                        <li><a href="#tab3">Latest</a></li>
                    </ul>

                    <div id="tab1" class="tab active">
                        <div class="col-md-6">
                            <figure>
                                <a href="#" title="Growing Turnips">
                                    <img src="./images/1.jpg" alt="Growing Turnips" style="width:70px; height:70px;">
                                </a>
                                <h5 class="text">
                                    <a href="#" title="In the Fields">In the Fields</a>
                                </h5>
                            </figure>
                        </div>
                    </div>
                    <div id="tab2" class="tab">
                        <div class="col-md-6">
                            <figure>
                                <a href="#" title="Growing Turnips">
                                    <img src="./images/2.jpg" alt="Growing Turnips" style="width:70px; height:70px;">
                                </a>
                                <h5 class="text">
                                    <a href="#" title="Growing Turnips">Farmer’s Day</a>
                                </h5>
                            </figure>
                            <figure>
                                <a href="#" title="Growing Turnips">
                                    <img src="./images/4.jpg" alt="Growing Turnips" style="width:70px; height:70px;">
                                </a>
                                <h5 class="text">
                                    <a href="#" title="Growing Turnips">Horticulture News</a>
                                </h5>
                            </figure>
                        </div>
                        <div class="col-md-6">
                            <figure>
                                <a href="#" title="Growing Turnips">
                                    <img src="./images/3.jpg" alt="Growing Turnips" style="width:70px; height:70px;">
                                </a>
                                <h5 class="text">
                                    <a href="#" title="Growing Turnips">Fruity Music</a>
                                </h5>
                            </figure>
                            <figure>
                                <a href="#" title="Growing Turnips">
                                    <img src="./images/5.jpg" alt="Growing Turnips" style="width:70px; height:70px;">
                                </a>
                                <h5 class="text">
                                    <a href="#" title="Growing Turnips">Horticulture News</a>
                                </h5>
                            </figure>
                        </div>



                    </div>
                    <div id="tab3" class="tab">
                        <div class="col-md-6">
                            <figure>
                                <a href="#" title="Growing Turnips">
                                    <img src="./images/6.jpg" alt="Growing Turnips" style="width:70px; height:70px;">
                                </a>
                                <h5 class="text">
                                    <a href="#" title="Growing Turnips">Growing Turnips</a>
                                </h5>
                            </figure>
                            <figure>
                                <a href="#" title="Growing Turnips">
                                    <img src="./images/7.jpg" alt="Blueberry Feast" style="width:70px; height:70px;">
                                </a>
                                <h5 class="text">
                                    <a href="#" title="Growing Turnips">Blueberry Feast</a>
                                </h5>
                            </figure>
                        </div>
                        <div class="col-md-6">
                            <figure>
                                <a href="#" title="Growing Turnips">
                                    <img src="./images/8.jpg" alt="Horticulture News" style="width:70px; height:70px;">
                                </a>
                                <h5 class="text">
                                    <a href="#" title="Growing Turnips">Horticulture News</a>
                                </h5>
                            </figure>
                            <figure>
                                <a href="#" title="Growing Turnips">
                                    <img src="./images/9.jpg" alt="Autumn Harvest" style="width:70px; height:70px;">
                                </a>
                                <h5 class="text">
                                    <a href="#" title="Growing Turnips">Autumn Harvest</a>
                                </h5>
                            </figure>
                        </div>



                    </div>

                </div>
            </div>


        </div>
    </div>

</div>