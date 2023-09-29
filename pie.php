<?php
/*
Este archivo simplemente cierra las etiquetas abiertas en encabezado.php
*/
?>

</main>
<div class="mt-5" id="footer">
    <div class="section">
        <ul>
            <li> <img src="images/friendly-pets.jpg" width="240" height="186" alt="">
                <h2><a href="#"></a></h2>
                <p> Lorem ipsum dolor sit amet, consectetuer adepiscing elit, sed diam nonummy nib. <a class="more" href="#">Read More</a> </p>
            </li>
            <li> <img src="images/pet-lover2.jpg" width="240" height="186" alt="">
                <h2><a href="#"></a></h2>
                <p> Lorem ipsum dolor sit amet, cons ectetuer adepis cing, sed diam euis. <a class="more" href="#">Read More</a> </p>
            </li>
            <li> <img src="images/healthy-dog.jpg" width="240" height="186" alt="">
                <h2><a href="#"></a></h2>
                <p> Lorem ipsum dolor sit amet, consectetuer adepiscing elit, sed diam nonu mmy. <a class="more" href="#">Read More</a> </p>
            </li>
            <li>
                <h2><a href="#"></a></h2>
                <p> Lorem ipsum dolor sit amet, consectetuer adepiscing elit, sed diameusim. <a class="more" href="#">Read More</a> </p>
                <img src="images/pet-lover.jpg" width="240" height="186" alt="">
            </li>
        </ul>
    </div>
    <div id="footnote">
        <div class="section">Copyright &copy; 2023 <a href="#">Pets</a> All rights reserved | Website Template By <a target="_blank" href="#">Carlos Mendoza</a></div>
    </div>
</div>
<style>
    #footer {
        background-color: #310000;
        background-image: none;
    }

    #footer .section {
        width: 960px;
        margin: 0 auto;
        overflow: hidden;
        position: relative;
    }

    #footer .section ul {
        margin: 0;
        padding: 0;
        list-style-type: none;
    }

    #footer .section ul li {
        float: left;
        width: 240px;
        height: 190px;
    }

    #footer .section ul li img {
        position: absolute;
        top: 0;
    }

    #footer .section ul li h2 {
        position: relative;
        top: 60px;
        left: 0;
        z-index: 10;
        padding: 0 10px 0 15px;
        margin: 20px 0 -15px 0;
        /*
	  *margin:30px 0 -20px 0;
	  */

    }

    #footer .section ul li h2 a {
        font-family: "Myriad Pro", Arial;
        font-size: 16px;
        color: #bffb05;
        text-decoration: none;
        font-weight: normal;
    }

    #footer .section ul li p {
        position: relative;
        top: 60px;
        padding: 0 10px 0 15px;
        z-index: 10;
        font-family: "Myriad Pro";
        font-size: 14px;
        color: #ffffff;
        line-height: 20px;
    }

    #footer .section ul li p a {
        color: #ffffff;
    }

    #footer .section ul li p a:hover {
        color: #ff6700;
    }

    #footer .section ul li p a.more {
        color: #ff6700;
    }

    #footer .section ul li p a.more:hover {
        color: #ffffff;
    }

    #footer #footnote {
        background-color: #ffad00;
    }

    #footer #footnote .section {
        width: 960px;
        height: 50px;
        text-align: center;
        line-height: 50px;
        font-family: "Myriad Pro";
        font-size: 13px;
    }

    #footer #footnote .section a {
        text-decoration: none;
        color: #000000;
    }

    #footer #footnote .section a:hover {
        color: #ffffff;
    }

    #footer .section ul li h2 {
        margin: 30px 0 -20px 0;
    }

    #footer .section ul li h2 {
        margin: 30px 0 -20px 0;
    }
</style>
</body>

</html>