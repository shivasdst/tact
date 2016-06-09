<script src='https://www.google.com/recaptcha/api.js'></script>

<div class="container-fluid gap-above-large" id="about-trust">
    <div class="row">
        <div class="col-md-12">
            <h1>About</h1> 
            <p>Founded in 1934 by Sir C V Raman the Indian Academy of Sciences, Bangalore was registered as a Society on 27 April 1934 with the main objective of promoting the progress and upholding the cause of science. The Academy began functioning with 65 Founding Fellows and the formal inauguration took place at the Indian Institute of Science.</p>
            <p>On the same afternoon its first general meeting of Fellows was held during which Sir C V Raman was elected President and the draft resolution of the Academy was adopted.</p>
            <p>In the same month of 1934, the first issue of the Academy’s earliest publication was published. The Academy from its very beginnings has taken great interest and initiative in publishing science research and today publishes 10 science journals in different disciplines, uses an online submission and review management system that’s trackable, papers are peer reviewed and published content is made available online and open access.</p>
            <p>The Academy’s contribution to science and society is also reflected through its policies, values and its range of activities which include:</p>
            <p class="gap-below">
                <span class="text-black">The Academy Fellowship</span> ⚫ 
                <span class="text-black">Annual and Mid-Year Meetings</span> ⚫ 
                <span class="text-black">Science Education Programmes</span> ⚫ 
                <span class="text-black">Sponsorship of Discussion Meetings</span> ⚫ 
                <span class="text-black">The Women in Science Panel</span> ⚫ 
                <span class="text-black">Repository of Scientific Publications of Academy Fellows</span> ⚫ 
                <span class="text-black">Oral History Archives</span> ⚫ 
                <span class="text-black">Committee on Scientific Values</span> ⚫ 
                <span class="text-black">Raman Chair Professorship</span> ⚫ 
                <span class="text-black">Jubilee Chair Professorship</span> ⚫ 
                <span class="text-black">Publications of the Academy</span> ⚫ 
                <span class="text-black">Contributions to Science Policy</span>
            </p>
        </div>
    </div>
</div>

<div class="container-fluid gap-above-large" id="trust-news">
    <div class="row">
        <div class="col-md-12">
            <h1>News</h1> 
            <p>Trust latest news goes here</p>
        </div>
    </div>
</div>

<div class="container-fluid stats gap-above-large" id="collection">
    <div class="row">
        <div class="col-md-12">
            <h1>Statistics</h1>
            <ul class="list-inline">
                <li class="stat-elem">
                    <a href="#">
                        <h2><i class="fa fa-instagram"></i></h2>
                        <p>instagram</p>
                    </a>
                </li>
                <li class="stat-elem">
                    <a href="<?=BASE_URL?>Publications">
                        <h2><i class="fa fa-twitter"></i></h2>
                        <p>twitter</p>
                    </a>
                </li>
                <li class="stat-elem">
                    <a href="#">
                        <h2><i class="fa fa-facebook"></i></h2>
                        <p>facebook</p>
                    </a>
                </li>
                <li class="stat-elem">
                    <a href="#">
                        <h2><i class="fa fa-google-plus"></i></h2>
                       <p>google-plus</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>
</div>
<div class="container-fluid physical" id="physical">
    <div class="row">
        <div class="col-md-12">
            <h1>Gallery</h1>
        </div>
    </div>
    <div class="row">
        <div class="col-md-4">
            <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/thumb-4.jpg">
            <h2>Picture 1</h2>
            <p>Description of the picture goes here</p>
        </div>
        <div class="col-md-4">
            <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/thumb-6.jpg">
            <h2>Picture 2</h2>
            <p>Description of the picture goes here</p>
        </div>
        <div class="col-md-4">
            <img class="img-responsive" src="<?=PUBLIC_URL?>images/stock/image-3.jpg">
            <h2>Picture 3</h2>
            <p>Description of the picture goes here</p>
        </div>
    </div>
</div>

<div class="container-fluid" id="contact">
    <div class="row first-row gap-left-large">
        <div class="col-md-8 clear-paddings">
            <div class="mainpage">
                <h2>Get in touch</h2><br />
                <form method="post" action="<?=BASE_URL . 'mail/send'?>">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" id="name" placeholder="Name" required="required">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="email" id="email" placeholder="Email" required="required">
                    </div>
                    <div class="form-group">
                        <textarea rows="5" class="form-control" name="message" id="message" placeholder="Your message here" required="required"></textarea>
                    </div>
<!--                <div class="form-group">
                        <div class="g-recaptcha" data-sitekey="6Le_DBsTAAAAACt5YrgWhjW00CcAF0XYlA30oLPc"></div>
                    </div> -->
                    <button type="submit" class="btn email-submit">Submit</button>
                </form>
                <p>
                    <br /><br /><small>
                        © 2016 Indian The Academy Trust.<br />
                    </small><br />
                </p>
            </div>
        </div>
    </div>
</div>
