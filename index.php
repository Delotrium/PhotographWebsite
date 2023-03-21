<!DOCTYPE html>
<style>

body, html {
  height: 100%;
  margin: 0;
  font: 400 15px/1.8 "Lato", sans-serif;
  color: #777;
}

.bgimg-1, .bgimg-2, .bgimg-3, .bgimg-4 , .bgimg-5 {
  position: relative;
  opacity: 0.95;
  background-attachment: fixed;
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;

}
.bgimg-1 {
  background-image: url("./img/photoone.png");
  min-height: 50%;
}

.bgimg-2 {
  background-image: url("./img/photoSunrise.png");
  min-height: 450px;
}

.bgimg-3 {
  background-image: url("./img/camera.png");
  min-height: 450px;
}
.bgimg-4 {
  background-image: url("./img/AdvertPhoto.png");
  min-height: 450px;
}
.bgimg-5 {
  background-image: url("./img/Family.png");
  min-height: 450px;
}
.caption {
  position: absolute;
  left: 0;
  top: 50%;
  width: 100%;
  text-align: center;
  color: #000;
}

.caption span.border {
  background-color: #111;
  color: #fff;
  padding: 18px;
  font-size: 25px;
  letter-spacing: 10px;
}

h3 {
  letter-spacing: 5px;
  text-transform: uppercase;
  font: 20px "Lato", sans-serif;
  color: #111;
}

/* Turn off parallax scrolling for tablets and phones */
@media only screen and (max-device-width: 1024px) {
  .bgimg-1, .bgimg-2, .bgimg-3 {
    background-attachment: scroll;
  }
}
</style>

<!-- Container element -->
<head>
  <?php include('./navbar.php'); ?>
</head>
<body>

    <div class="bgimg-1">
      <div class="caption">
      <span class="border">Olessia</span>
      </div>
    </div>
    
    <div style="color: #777;background-color:white;text-align:center;padding:50px 80px;text-align: justify;">
      <h3 style="text-align:center;">Hi!</h3>
      <p>Welcome to my photography freelancer website! My name is Olessia, and I'm a professional photographer with years of experience in the field. I specialize in capturing stunning images that tell a story and evoke emotion. Whether you're looking for corporate headshots, event photography, or lifestyle portraits, I've got the skills and expertise to bring your vision to life. I take pride in delivering exceptional customer service and ensuring that every client is happy with the final product. Browse through my portfolio to see some of my past work, and don't hesitate to reach out if you have any questions or would like to discuss a potential project. Thank you for visiting my photography freelancer website, and I look forward to working with you!</p>
    </div>
    
    <div class="bgimg-2">
      <div class="caption">
      <span class="border" style="font-size:25px;color: #f7f7f7;">NATURE</span>
      </div>
    </div>
    
    <div style="position:relative;">
      <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
      <p>Nature photography is one of my passions, and I love nothing more than capturing the beauty and wonder of the natural world through my lens. Whether it's a majestic mountain range, a tranquil forest scene, or a vibrant sunset over the ocean, I strive to showcase the stunning diversity and complexity of the world around us. If you're looking to bring a piece of nature into your home or office, or to add a unique touch to your branding or marketing materials, my nature photography services can provide you with breathtaking images that will inspire and captivate.</p>
      </div>
    </div>
    
    <div class="bgimg-3">
      <div class="caption">
      <span class="border" style="font-size:25px;color: #f7f7f7;">WEDDINGS</span>
      </div>
    </div>
    
    <div style="position:relative;">
      <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
      <p>If you're looking for beautiful and timeless wedding photography, you've come to the right place. My wedding photography services are tailored to meet your unique needs and preferences, ensuring that your special day is captured in a way that reflects your personal style and love story. With a keen eye for detail and a passion for capturing candid, emotional moments, I strive to create images that you'll cherish for a lifetime. Contact me to learn more about my wedding photography packages and how I can help make your big day even more unforgettable.</p>
      </div>
    </div>

    <div class="bgimg-4">
      <div class="caption">
      <span class="border" style="font-size:25px;color: #f7f7f7;">ADVERTISING</span>
      </div>
    </div>
    
    <div style="position:relative;">
      <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
      <p>Advertising photography is all about telling a story and capturing the essence of a brand or product. As an experienced advertising photographer, I understand the importance of creating visually stunning images that not only grab the viewer's attention but also convey a clear message. Whether you need product photography, lifestyle images, or branding shots, I work closely with my clients to ensure that their vision is realized and their objectives are met. Let's collaborate to create stunning advertising photography that takes your brand to the next level.</p>
      </div>
    </div>
    
    <div class="bgimg-5">
      <div class="caption">
        <span class="border" style="font-size:25px;color: #f7f7f7;">FAMILY</span>
      </div>
    </div>

    <div style="position:relative;">
      <div style="color:#ddd;background-color:#282E34;text-align:center;padding:50px 80px;text-align: justify;">
      <p>Family photography is all about capturing the joy and love that families share. As a family photographer, I understand the importance of creating beautiful images that showcase the unique bond between family members. Whether it's a family portrait, a candid moment, or a special occasion, I strive to create images that tell your family's story and capture your personalities and relationships. Let's work together to create beautiful family photography that you'll treasure for years to come.</p>
      </div>
    </div>

    <div class="bgimg-1">
      <div class="caption">
      <span class="border">Check out my Gallary for more Pictures!</span>
      </div>
    </div>
    
    
    </body>
</html>