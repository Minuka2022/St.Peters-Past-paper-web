<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="icon" href="./res/img/logo.svg" type="image/png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="./style/animate.css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <style>
* {
  font-family: Nunito, sans-serif;
}

.responsive-container-block {
  min-height: 75px;
  height: fit-content;
  width: 100%;
  padding-top: 0px;
  padding-right: 0px;
  padding-bottom: 0px;
  padding-left: 0px;
  display: flex;
  flex-wrap: wrap;
  margin-top: 0px;
  margin-right: auto;
  margin-bottom: 0px;
  margin-left: auto;
  justify-content: flex-start;
}

.text-blk {
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 0px;
  margin-left: 0px;
  padding-top: 10px;
  padding-right: 10px;
  padding-bottom: 10px;
  padding-left: 10px;
  line-height: 25px;
}

.responsive-container-block.bigContainer {
  flex-direction: column;
  align-items: center;
  justify-content: center;
  padding-top: 10px;
  padding-right: 50px;
  padding-bottom: 10px;
  padding-left: 50px;
}

.text-blk.headingText {
  font-size: 23px;
  font-weight: 700;
  line-height: 28px;
  color: rgb(0, 135, 177);
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 10px;
  margin-left: 0px;
  padding-top: 0px;
  padding-right: 10px;
  padding-bottom: 0px;
  padding-left: 0px;
}

.allText {
  padding-top: 0px;
  padding-right: 0px;
  padding-bottom: 0px;
  padding-left: 0px;
  width: 50%;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 0px;
  margin-left: 0px;
}

.text-blk.subHeadingText {
  color: rgb(102, 102, 102);
  font-size: 32px;
  line-height: 40px;
  font-weight: 700;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 15px;
  margin-left: 0px;
  padding-top: 0px;
  padding-right: 10px;
  padding-bottom: 0px;
  padding-left: 0px;
}

.text-blk.description {
  font-size: 18px;
  line-height: 28px;
  color: rgb(153, 153, 153);
  padding-top: 0px;
  padding-right: 10px;
  padding-bottom: 0px;
  padding-left: 0px;
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 40px;
  margin-left: 0px;
}

.explore {
  font-size: 18px;
  line-height: 28px;
  color: rgb(255, 255, 255);
  background-color: #01204E;
  border-top-width: 0px;
  border-right-width: 0px;
  border-bottom-width: 0px;
  border-left-width: 0px;
  border-top-style: outset;
  border-right-style: outset;
  border-bottom-style: outset;
  border-left-style: outset;
  border-top-color: rgb(244, 152, 146);
  border-right-color: rgb(244, 152, 146);
  border-bottom-color: rgb(244, 152, 146);
  border-left-color: rgb(244, 152, 146);
  border-image-source: initial;
  border-image-slice: initial;
  border-image-width: initial;
  border-image-outset: initial;
  border-image-repeat: initial;
  cursor: pointer;
  box-shadow: rgba(244, 152, 146, 0.25) 0px 10px 20px;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  border-bottom-right-radius: 10px;
  border-bottom-left-radius: 10px;
  padding-top: 9px;
  padding-right: 45px;
  padding-bottom: 9px;
  padding-left: 45px;
}

.explore:hover {
  background-image: initial;
  background-position-x: initial;
  background-position-y: initial;
  background-size: initial;
  background-repeat-x: initial;
  background-repeat-y: initial;
  background-attachment: initial;
  background-origin: initial;
  background-clip: initial;
  background-color: #032C68;
  color: #CFD300;
}

.responsive-container-block.Container {
  margin-top: 80px;
  margin-right: auto;
  margin-bottom: 50px;
  margin-left: auto;
  justify-content: center;
  align-items: center;
  max-width: 1320px;
  padding-top: 10px;
  padding-right: 10px;
  padding-bottom: 10px;
  padding-left: 10px;
}

.responsive-container-block.Container.bottomContainer {
  flex-direction: row;
  margin-top: 50px;
  margin-right: auto;
  margin-bottom: 50px;
  margin-left: auto;
}

.allText.aboveText {
  margin-top: 0px;
  margin-right: 0px;
  margin-bottom: 0px;
  margin-left: 40px;
}

.allText.bottomText {
  margin-top: 0px;
  margin-right: 10px;
  margin-bottom: 0px;
  margin-left: 0px;
}

.mainVideo {

  margin-top: -30px;
  margin-right: 0px;
  margin-bottom: 0px;
  margin-left: 25px;
  border-top-left-radius: 10px;
  border-top-right-radius: 10px;
  border-bottom-right-radius: 10px;
  border-bottom-left-radius: 10px;
}

.videoContainer {
  width: 46%;
  height: 600px;
  display: flex;
  justify-content: flex-start;
  align-items: center;
  position: relative;
  padding-top: 0px;
  padding-right: 0px;
  padding-bottom: 0px;
  padding-left: 10px;
}

.mainVideo {
  z-index: 10;
}

.dotsImg {
  position: absolute;
  width: 80%;
  height: 600px;
  top: 0px;
  right: 0px;
  object-fit: cover;
}

@media (max-width: 1024px) {
  .responsive-container-block.Container {
    max-width: 850px;
  }

  .text-blk.description {
    font-size: 18px;
  }

  .allText {
    width: 40%;
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 20px;
  }

  .responsive-container-block.bigContainer {
    padding-top: 10px;
    padding-right: 10px;
    padding-bottom: 10px;
    padding-left: 10px;
  }

  .text-blk.subHeadingText {
    font-size: 30px;
  }

  .responsive-container-block.Container.bottomContainer {
    margin-top: 80px;
    margin-right: auto;
    margin-bottom: 50px;
    margin-left: auto;
  }

  .responsive-container-block.Container {
    max-width: 830px;
  }

  .allText.aboveText {
    margin-top: 30px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 40px;
  }

  .allText.bottomText {
    margin-top: 30px;
    margin-right: 40px;
    margin-bottom: 0px;
    margin-left: 0px;
  }

  .allText.bottomText {
    width: 100%;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    margin-top: 30px;
    margin-right: 0px;
    margin-bottom: 30px;
    margin-left: 0px;
  }

  .responsive-container-block.Container.bottomContainer {
    flex-direction: column;
  }

  .text-blk.headingText {
    text-align: center;
    font-size: 22px;
  }

  .text-blk.subHeadingText {
    text-align: center;
  }

  .text-blk.description {
    text-align: center;
  }

  .explore {
    margin-top: 0px;
    margin-right: auto;
    margin-bottom: 0px;
    margin-left: auto;
  }

  #inc0s {
    margin-top: 0px;
    margin-right: auto;
    margin-bottom: 0px;
    margin-left: auto;
  }

  .dotsImg {
    width: 50%;
    left: 50%;
    transform: translateX(-50%);
  }

  .videoContainer {
    width: 100%;
    padding-top: 0px;
    padding-right: 0px;
    padding-bottom: 0px;
    padding-left: 0px;
  }

  .mainVideo {
    width: 100%;
  }

  .allText.bottomText {
    margin-top: 30px;
    margin-right: 0px;
    margin-bottom: 60px;
    margin-left: 0px;
  }

  .text-blk.description {
    padding-top: 0px;
    padding-right: 0px;
    padding-bottom: 0px;
    padding-left: 0px;
  }

  .text-blk.headingText {
    padding-top: 0px;
    padding-right: 0px;
    padding-bottom: 0px;
    padding-left: 0px;
  }

  .text-blk.subHeadingText {
    padding-top: 0px;
    padding-right: 0px;
    padding-bottom: 0px;
    padding-left: 0px;
  }

  .mainVideo {
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
  }
}

@media (max-width: 768px) {
  .allText {
    width: 100%;
    margin-top: 0px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
    display: flex;
    flex-direction: column;
    justify-content: center;
    align-items: center;
    padding-top: 0px;
    padding-right: 0px;
    padding-bottom: 0px;
    padding-left: 0px;
  }

  .responsive-container-block.Container {
    flex-direction: column;
    height: auto;
  }

  .text-blk.headingText {
    text-align: center;
  }

  .text-blk.subHeadingText {
    text-align: center;
    font-size: 28px;
    line-height: 38px;
  }

  .text-blk.description {
    text-align: center;
    font-size: 18px;
    line-height: 27px;
  }

  .allText {
    margin-top: 40px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
  }

  .allText.aboveText {
    margin-top: 40px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
  }

  .responsive-container-block.Container {
    margin-top: 80px;
    margin-right: auto;
    margin-bottom: 50px;
    margin-left: auto;
  }

  .responsive-container-block.Container.bottomContainer {
    margin-top: 50px;
    margin-right: auto;
    margin-bottom: 50px;
    margin-left: auto;
    padding-top: 0px;
    padding-right: 0px;
    padding-bottom: 0px;
    padding-left: 10px;
  }

  .allText.bottomText {
    margin-top: 40px;
    margin-right: 0px;
    margin-bottom: 0px;
    margin-left: 0px;
  }

  .allText.bottomText {
    margin-top: 40px;
    margin-right: 0px;
    margin-bottom: 60px;
    margin-left: 0px;
  }

  .mainVideo {
    height: 400px;
  }

  .videoContainer {
    height: 550px;
  }

  .explore {
    font-size: 16px;
    padding-top: 8px;
    padding-right: 40px;
    padding-bottom: 8px;
    padding-left: 40px;
  }

  .responsive-container-block.bigContainer {
    padding-top: 0px;
    padding-right: 50px;
    padding-bottom: 0px;
    padding-left: 50px;
  }
}

@media (max-width: 500px) {
  .responsive-container-block.Container {
    padding-top: 10px;
    padding-right: 0px;
    padding-bottom: 10px;
    padding-left: 0px;
    width: 100%;
    max-width: 100%;
  }

  .responsive-container-block.bigContainer {
    padding-top: 10px;
    padding-right: 25px;
    padding-bottom: 10px;
    padding-left: 25px;
  }

  .allText {
    padding-top: 0px;
    padding-right: 0px;
    padding-bottom: 0px;
    padding-left: 0px;
    width: 100%;
  }

  .responsive-container-block.bigContainer {
    padding-top: 10px;
    padding-right: 20px;
    padding-bottom: 10px;
    padding-left: 20px;
  }

  .explore {
    font-size: 16px;
    line-height: 25px;
    padding: 8px 35px 8px 35px;
  }

  .dotsImg {
    width: 80%;
    height: 100%;
  }

  .mainVideo {
    height: 260px;
  }

  .videoContainer {
    height: 320px;
  }

  .responsive-container-block.Container.bottomContainer {
    padding: 0 0 0 0;
  }

  .text-blk.description {
    font-size: 16px;
    line-height: 23px;
    margin: 0 0 30px 0;
  }

  .text-blk.subHeadingText {
    font-size: 24px;
  }
}


*,
*:before,
*:after {
  -moz-box-sizing: border-box;
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
}

body {
  margin: 0;
}

.wk-desk-1 {
  width: 8.333333%;
}

.wk-desk-2 {
  width: 16.666667%;
}

.wk-desk-3 {
  width: 25%;
}

.wk-desk-4 {
  width: 33.333333%;
}

.wk-desk-5 {
  width: 41.666667%;
}

.wk-desk-6 {
  width: 50%;
}

.wk-desk-7 {
  width: 58.333333%;
}

.wk-desk-8 {
  width: 66.666667%;
}

.wk-desk-9 {
  width: 75%;
}

.wk-desk-10 {
  width: 83.333333%;
}

.wk-desk-11 {
  width: 91.666667%;
}

.wk-desk-12 {
  width: 100%;
}

@media (max-width: 1024px) {
  .wk-ipadp-1 {
    width: 8.333333%;
  }

  .wk-ipadp-2 {
    width: 16.666667%;
  }

  .wk-ipadp-3 {
    width: 25%;
  }

  .wk-ipadp-4 {
    width: 33.333333%;
  }

  .wk-ipadp-5 {
    width: 41.666667%;
  }

  .wk-ipadp-6 {
    width: 50%;
  }

  .wk-ipadp-7 {
    width: 58.333333%;
  }

  .wk-ipadp-8 {
    width: 66.666667%;
  }

  .wk-ipadp-9 {
    width: 75%;
  }

  .wk-ipadp-10 {
    width: 83.333333%;
  }

  .wk-ipadp-11 {
    width: 91.666667%;
  }

  .wk-ipadp-12 {
    width: 100%;
  }
}

@media (max-width: 768px) {
  .wk-tab-1 {
    width: 8.333333%;
  }

  .wk-tab-2 {
    width: 16.666667%;
  }

  .wk-tab-3 {
    width: 25%;
  }

  .wk-tab-4 {
    width: 33.333333%;
  }

  .wk-tab-5 {
    width: 41.666667%;
  }

  .wk-tab-6 {
    width: 50%;
  }

  .wk-tab-7 {
    width: 58.333333%;
  }

  .wk-tab-8 {
    width: 66.666667%;
  }

  .wk-tab-9 {
    width: 75%;
  }

  .wk-tab-10 {
    width: 83.333333%;
  }

  .wk-tab-11 {
    width: 91.666667%;
  }

  .wk-tab-12 {
    width: 100%;
  }
}

@media (max-width: 500px) {
  .wk-mobile-1 {
    width: 8.333333%;
  }

  .wk-mobile-2 {
    width: 16.666667%;
  }

  .wk-mobile-3 {
    width: 25%;
  }

  .wk-mobile-4 {
    width: 33.333333%;
  }

  .wk-mobile-5 {
    width: 41.666667%;
  }

  .wk-mobile-6 {
    width: 50%;
  }

  .wk-mobile-7 {
    width: 58.333333%;
  }

  .wk-mobile-8 {
    width: 66.666667%;
  }

  .wk-mobile-9 {
    width: 75%;
  }

  .wk-mobile-10 {
    width: 83.333333%;
  }

  .wk-mobile-11 {
    width: 91.666667%;
  }

  .wk-mobile-12 {
    width: 100%;
  }
}
    </style>
    <title>Contact</title>
</head>
<body>


<?php include 'navbar.php'; ?>

<div class="responsive-container-block bigContainer">
  <div class="responsive-container-block Container bottomContainer">
    <div class="allText bottomText">
      <p class="text-blk headingText">
        About
      </p>
      <p class="text-blk subHeadingText">
        We build to your bespoke
      </p>
      <p class="text-blk description">
        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Fermentum pulvinar ullamcorper suspendisse ac eget. Pellentesque tempus leo in ullamcorper quis vestibulum ligula elementum ut. Congue in dignissim tincidunt ut dolor eu. Mi, eget posuere vitae sed purus nisl lorem.
      </p>
      <a>
        <button class="explore">
          View More
        </button>
      </a>
    </div>
    <div class="videoContainer">
      <img src="https://www.stpeterscollege.lk/wp-content/uploads/2020/09/SPC_Web-Crest_New.png"  class="mainVideo"   alt="">
     
    </div>
  </div>
</div>
<?php include 'footer.php' ?>
<!-- SB Forms JS -->
<script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
<script src="https://cdn.startbootstrap.com/sb-forms-latest.js"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
        crossorigin="anonymous"></script>
<script src="https://smtpjs.com/v3/smtp.js"></script>


</body>
</html>