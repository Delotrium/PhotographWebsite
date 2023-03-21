<!DOCTYPE html>
<html>
<head>
	<title>Contact Us</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./portfolioStyle.css">
  <?php include('./contactNav.php'); ?>
</head>
<style>
  .contact {
    padding: 1px 500px;
}

.contact .heading h2 {
    font-size: 70px;
    font-weight: 7000;
    margin: 100;
    padding: 100;

}

.contact .heading h2 span {
    color: #494349;
}

.contact .heading p {
    font-size: 25px;
    font-weight: 400;
    line-height: 1.7;
    color: #999999;
    margin: 20px 0 40px;
    padding: 0;
}

.contact .form-control {
    padding: 45px;
    font-size: 13px;
    margin-bottom: 10px;
    background: #c8cfdd;
    border: 0;
    border-radius: 10px;
}

.contact button.btn {
    padding: 10px;
    border-radius: 10px;
    font-size: 15px;
    background: #ff9100;
    color: #ffffff;
}

.contact .title h3 {
    font-size: 28px;
    font-weight: 600;
}

.contact .title p {
    font-size: 24px;
    font-weight: 400;
    color: #999;
    line-height: 1.6;
    margin: 0 0 40px;
}

.contact .content .info {
    margin-top: 30px;
}
.contact .content .info i {
    font-size: 30px;
    padding: 0;
    margin: 0;
    color: #02434b;
    margin-right: 20px;
    text-align: center;
    width: 200px;
}
.contact .content .info h4 {
    font-size: 24px;
    line-height: 1.4;
}

.contact .content .info h4 span {
    font-size: 24px;
    font-weight: 300;
    color: #999999;
}
</style>
  <section class="contact" id="contact">
        <div class="container">
            <div class="heading text-center">
                <h2>Contact
                    <span> Us </span></h2>
                <p>Welcome to our Contact Us page! This page is designed to make it easy for you to get in touch with us. Whether you have a question about our products or services, or you simply want to say hello, we'd love to hear from you. You can fill out the contact form on this page, and we'll get back to you as soon as possible. Thank you for choosing to reach out to us!
            </div>
            <div class="row">
                <div class="col-md-5">
                    <div class="content">
                        <!-- Info-1 -->
                        <div class="info">
                            <i class="fas fa-mobile-alt"></i>
                            <h4 class="d-inline-block">PHONE :
                                <br>
                                <span>+61 434 529 959</span></h4>
                        </div>
                        <!-- Info-2 -->
                        <div class="info">
                            <i class="far fa-envelope"></i>
                            <h4 class="d-inline-block" href="mailto:info@olessia.com.au" >EMAIL :
                                <br href="mailto:info@olessia.com.au">
                                <span href="mailto:info@olessia.com.au">info@olessia.com.au</span></h4>
                        </div>
                        <!-- Info-3 -->
                        <div class="info">
                            <i class="fas fa-map-marker-alt"></i>
                            <h4 class="d-inline-block">ADDRESS :<br>
                                <span>6743 last street , Abcd, Xyz</span></h4>
                        </div>
                    </div>
                </div>

                <div class="col-md-7">

                    <form>
                        <div class="row">
                            <div class="col-sm-6">
                                <input type="text" class="form-control" placeholder="Name">
                            </div>
                            <div class="col-sm-6">
                                <input type="email" class="form-control" placeholder="Email">
                            </div>
                            <div class="col-sm-12">
                                <input type="text" class="form-control" placeholder="Subject">
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" rows="5" id="comment" placeholder="Message"></textarea>
                        </div>
                        <button class="btn btn-block" type="submit">Send Now!</button>
                    </form>
                </div>
            </div>
        </div>
    </section>