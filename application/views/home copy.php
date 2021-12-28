<!DOCTYPE>
<html>
<head>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

<style>
  .top_background_img
  {
    background-image: url(<?=base_url("assert/images/top_backg.jpg")?>);
    height: 20.125rem;
  }
</style>
</head>
<body>
<!-- header -->
<?php include("application/views/componets/header.php")?>
<div class="top_background_img">
  <div class="top_text_content ">
      <div class="search_content">
      <center>
        <input class="search_input" placeholder="Search......." type="text">
        <button class="search_btn">Search</button>
      </center>
      
      </div>
  </div>
</div>
<center>
<div class="our_service_title">
Our Service
</div>
  <div class="our_services">
    <div id="" align="middle">
      <a href="<?=site_url("real_estate") ?>">
        <img class="our_service_img"  src="<?=base_url("assert/images/real_e.jpeg")?>" width="80%"><br />
        <span> REAL ESTATE</span>
      </a>
    </div>
    <br >
    <div id="" align="middle">
      <img class="our_service_img" src="<?=base_url("assert/images/marketing.jpeg")?>" width="80%"><br />
      <span> SALES AND MARKETING</span>
    </div>
    <br />
    <div id="" align="middle">
      <img class="our_service_img" src="<?=base_url("assert/images/accounting.jpeg")?>" width="80%"><br />
      <span> ACCOUNTING CONSULTANCY</span>
    </div>
  </div>
</center>
<div class="footer">
  <div>
  </div>
  <footer><p>Coded by <a href="httsthenewbreedtechnologies.com/">NBT</a></p>
  <img class="facebook" src="<?=base_url("assert/images/facebook.jpg")?>" width="80%"><br />
  <img class="twitter" src="<?=base_url("assert/images/twitter.jpg")?>" width="80%"><br />
  <img class="gmail" src="<?=base_url("assert/images/gmail .jpg")?>" width="80%"><br />
  <div class="About_Us"> About US </div>

</div>
  
  </footer>

</div>
</body>
</html>


