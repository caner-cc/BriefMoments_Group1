<?php include 'includes/header.php'; ?>
<?php include 'includes/menu.php'; ?>
<!--lower bar-->
<div class="lowerbar">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <!--navbar for roles-->
                <div class="roles">
                    <span class="B" onclick="currentSlide(1)">Design</span>

                    <span class="B" onclick="currentSlide(2)">Front-end</span>

                    <span class="B" onclick="currentSlide(3)">Back-end</span>
                </div>
            </div>
        </div>
    </div>
</div>
<!--slideshow-->
<div class="slideshow-container">
    <!--DESIGNER profile-->
    <div class="container">
        <div class="mySlides">
            <div class="row">

                <div class="col-lg-4 mb-4">
                    <div class="thirdpart">
                        <div class="thirdpartbox height">
                            <div class="movingtext">
                                <h1>Design</h1> <a class="typewrite" data-period="2000" data-type='[ "is like the icing on a donut.", "is stunning.", "makes you satisfied."]'>
                                    <span class="wrap"></span>
                                </a>
                            </div>
                            <a href="contact.html"><button type="button" class="btn btn-primary">Get an offer</button></a>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="thirdpart">
                        <div class="thirdpartbox">
                            <img src="img/designer.jpg" alt="Designer" class="responsive">
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 mb-4">
                    <div class="thirdpart">
                        <div class="thirdpartbox">
                            <div class="box4">
                                <p><strong class="greeting">Hi,</strong>
                                    <br>I'm Eszter. I'm resposible for...</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--FRONT-END profile-->
    <div class="container">
        <div class="mySlides">
            <div class="row">

                <div class="col-lg-4 mb-4">
                    <div class="thirdpart">
                        <div class="thirdpartbox height">
                            <div class="movingtext">
                                <h1>Front-end</h1> <a class="typewrite" data-period="2000" data-type='[ "is like the donut itself.", "is cool.", "makes you comfortable."]'>
                                    <span class="wrap"></span>
                                </a>
                            </div>
                            <button type="button" class="btn btn-primary">Get an offer</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="thirdpart">
                        <div class="thirdpartbox">
                            <img src="img/frontend.png" alt="Designer" class="responsive">
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 mb-4">
                    <div class="thirdpart">
                        <div class="thirdpartbox">
                            <div class="box4">
                                <p><strong class="greeting">Welcome here,</strong>
                                    <br>I'm Caner. I'm resposible for...</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!--BACK-END profile-->
    <div class="container">
        <div class="mySlides">
            <div class="row">

                <div class="col-lg-4 mb-4">
                    <div class="thirdpart">
                        <div class="thirdpartbox height">
                            <div class="movingtext">
                                <h1>Back-end</h1>
                                <a class="typewrite" data-period="2000" data-type='[ "is like the oil, what you use to fry the donut.", "is magic.", "is what you cannot see, but it`s still there..."]'>
                                    <span class="wrap"></span>
                                </a>
                            </div>
                            <button type="button" class="btn btn-primary">Get an offer</button>
                        </div>
                    </div>
                </div>

                <div class="col-lg-4 mb-4">
                    <div class="thirdpart">
                        <div class="thirdpartbox">
                            <img src="img/backend.png" alt="Designer" class="responsive">
                        </div>
                    </div>
                </div>


                <div class="col-lg-4 mb-4">
                    <div class="thirdpart">
                        <div class="thirdpartbox">
                            <div class="box4">
                                <p><strong class="greeting">Hey,</strong>
                                    <br>I'm Alex. I'm resposible for...</p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- rectangle buttons for slides -->

    <div class="box2">
        <div style="text-align:center">
            <span class="dot" onclick="currentSlide(1)"></span>
            <span class="dot" onclick="currentSlide(2)"></span>
            <span class="dot" onclick="currentSlide(3)"></span>
        </div>
    </div>
    <script>
        var slideIndex = 1;
        showSlides(slideIndex);

        // Next/previous controls
        function plusSlides(n) {
            showSlides(slideIndex += n);
        }

        // Thumbnail image controls
        function currentSlide(n) {
            showSlides(slideIndex = n);
        }

        function showSlides(n) {
            var i;
            var slides = document.getElementsByClassName("mySlides");
            var dots = document.getElementsByClassName("dot");
            var b = document.getElementsByClassName("B");
            if (n > slides.length) {
                slideIndex = 1
            }
            if (n < 1) {
                slideIndex = slides.length
            }
            for (i = 0; i < slides.length; i++) {
                slides[i].style.display = "none";
            }
            for (i = 0; i < dots.length; i++) {
                dots[i].className = dots[i].className.replace(" active", "");
            }
            for (i = 0; i < b.length; i++) {
                b[i].className = b[i].className.replace(" Bactive", "");
            }
            slides[slideIndex - 1].style.display = "block";
            dots[slideIndex - 1].className += " active";
            b[slideIndex - 1].className += " Bactive";
        }
    </script>

    <script>
        var TxtType = function(el, toRotate, period) {
            this.toRotate = toRotate;
            this.el = el;
            this.loopNum = 0;
            this.period = parseInt(period, 10) || 2000;
            this.txt = '';
            this.tick();
            this.isDeleting = false;
        };

        TxtType.prototype.tick = function() {
            var i = this.loopNum % this.toRotate.length;
            var fullTxt = this.toRotate[i];

            if (this.isDeleting) {
                this.txt = fullTxt.substring(0, this.txt.length - 1);
            } else {
                this.txt = fullTxt.substring(0, this.txt.length + 1);
            }

            this.el.innerHTML = '<span class="wrap">' + this.txt + '</span>';

            var that = this;
            var delta = 200 - Math.random() * 100;

            if (this.isDeleting) {
                delta /= 2;
            }

            if (!this.isDeleting && this.txt === fullTxt) {
                delta = this.period;
                this.isDeleting = true;
            } else if (this.isDeleting && this.txt === '') {
                this.isDeleting = false;
                this.loopNum++;
                delta = 500;
            }

            setTimeout(function() {
                that.tick();
            }, delta);
        };

        window.onload = function() {
            var elements = document.getElementsByClassName('typewrite');
            for (var i = 0; i < elements.length; i++) {
                var toRotate = elements[i].getAttribute('data-type');
                var period = elements[i].getAttribute('data-period');
                if (toRotate) {
                    new TxtType(elements[i], JSON.parse(toRotate), period);
                }
            }
            // INJECT CSS
            var css = document.createElement("style");
            css.type = "text/css";
            css.innerHTML = ".typewrite > .wrap";
            document.body.appendChild(css);
        };
    </script>
    <?php include 'includes/footer.php' ?>