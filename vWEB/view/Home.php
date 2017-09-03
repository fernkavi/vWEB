<?php
/**
 * Created by PhpStorm.
 * User: feriya
 * Date: 2/7/2560
 * Time: 9:45
 */
include("inc/NavHome.inc.php");
?>
<div class="container" style="margin-top: 50px">
    <h1>Computer Engineering Laboratory</h1>
    <div id="hCarousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#hCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#hCarousel" data-slide-to="1"></li>
            <li data-target="#hCarousel" data-slide-to="2"></li>
        </ol>

        <div class="carousel-inner">
            <div class="item active">
                <img src="pictures/pic01.png" >
            </div>

            <div class="item">
                <img src="pictures/pic02.jpg" >
            </div>

            <div class="item">
                <img src="pictures/pic03.jpg" >
            </div>
        </div>

        <a class="left carousel-control" href="#hCarousel" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="right carousel-control" href="#hCarousel" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>

<div class="container" style="margin-top: 50px">
    <div class="row">
        <div class="col-sm-4">
            <img src="pictures/pic01.png" style="width: 100%">
        </div>
        <div class="col-sm-4">
            <img src="pictures/pic02.jpg" style="width: 100%">
        </div>
        <div class="col-sm-4">
            <img src="pictures/pic03.jpg" style="width: 100%">
        </div>
    </div>
</div>


</body>
</html>
