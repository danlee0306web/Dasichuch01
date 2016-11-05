<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>大溪長老教會</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootswatch/3.3.7/cerulean/bootstrap.min.css" media="screen" title="no title">
  <link rel="stylesheet" href="css/font-awesome-4.6.3/css/font-awesome.min.css">
  <link rel="stylesheet" href="js/bxslider/jquery.bxslider.css">
  <script src="respond.min.js"></script>
  <script src="jquery-1.8.3.min.js"></script>
  <link rel="stylesheet" href="css/styles.css">
</head>
<script>
$(function(){
  var viewport = $(window).width();
  $('.SubMenu').hide();
  if(viewport<855){
    //平板以下行為
    //主導覽按鈕MenuIcon
    $('#MenuIcon').click(function(){
      if( $('#Navigation').hasClass('down') ){
        $('#Navigation').slideDown();
        $('#Navigation').removeClass('down');
      }else{
        $('#Navigation').slideUp();
        $('#Navigation').addClass('down');
      }
    });
    //#MenuIcon end
    //導覽按鈕
    $('#Navigation>li').click(function(){
      $('.SubMenu').slideUp();
      $(this).find('.SubMenu').slideDown();
    });
    //#Navigation>li end
  }else{
    //電腦版行為
      //電腦版行為
    $('#Navigation>li').hover(function(){
      $(this).find('.SubMenu').slideDown();
    },function(){
      $(this).find('.SubMenu').slideUp();
    });
  }
});
</script>
<body>
<header id="Header">
  <div class="Container">
    <div id="MenuIcon" class="BGEdit"><a class="DB" href="#"><span class="SrOnly">手機版主導覽按鈕</span></a></div>
    <h1 id="Logo" class="BGEdit"><a class="DB" href="index.php"><span class="SrOnly">大溪教會</span></a></h1>
    <h3 class="SrOnly">主導覽</h3>
    <nav id="PrimaryNavigation" class="switch">
      <ul>
        <li><a href="history.php">歷史沿革</a></li>
        <li><a href="Pastor Team.php">牧師團隊</a></li>
        <li><a href="time.php">聚會時間</a></li>
        <li id="NewsBtn"><a href="javascript:void(0)" class="DB"><span>最新消息</span></a></li>
        <li id="ProductBtn"><a href="movie.php" class="DB"><span>影音專區</span></a></li>
        <li><a href="contact.php" class="DB"><span>聯絡我們</span></a></li>
      </ul>
    </nav>
  </div>
</header>
<div id="Banner">
  <div id="BannerLeft"><img src="images/bg/banner_left.png" alt=""></div>
  <div id="BannerContent">
    <ul class="bxslider">
      <li>
        <img src="uploads/banner/banner1.jpg" />
      </li>
      <li>
        <img src="uploads/banner/banner2.jpg" />
      </li>
      <li>
        <img src="uploads/banner/banner4.jpg" />
      </li>
			  </ul>
  </div>
  <div id="BannerRight"><img src="images/bg/banner_right.png" alt=""></div>

</div>

<div id="News">
     <h4>最新消息</h4>
 <div class="Container">
   <!-- 新聞區塊 start-->
     <div class="Content">
       <div class="Wrap">
         <img src="uploads/news/news-01.jpg" alt="" class="NewsImg">
         <p class="NewsDate">2016/10/16</p>
         <p class="NewsTitle">一.慶祝本會社教紀念，，本會邀請方菊雄長老(東部中會東方教會，前慈濟大學校長)主理以下聚會:本周六(22日)9:00~12:00長職同工訓練，主題『敬重職分，盡忠服事』。本會長職、同工務必撥空參加，請至招待桌報名。下主日(23日)禮拜後專題演講，題目:『全是恩典-牽牛的孩子到大學校長』。</p>
         <p class="NewsTitle">二.本周三(19日)10:00新竹中會假竹北教會招開第77屆第一次議會，湖牧師和蔡輝榮長老將代表本會出席。</p>
         <p class="NewsTitle">三.請已報名參加11月6日野外禮拜的兄姊，儘快將報名費教給陳志偉執事，每人300元。</p>
         <p class="NewsTitle">四.長執會決議:本年度聖誕節慶祝活動如下:12月24(周六)聖誕福音茶會，18:00~19:00聖誕愛宴(每戶初一道菜)，19:00~20:30聖誕福音晚會，12月25日(主日) 09:00~10:30讚美禮拜。</p>
       </div>
     </div>
     <!-- 新聞區塊 end-->
     <!-- 新聞區塊 start-->
   <div class="Content">
     <div class="Wrap">
       <img src="uploads/news/new-02.whitebook.jpg" alt="" class="NewsImg">
       <p class="NewsDate">2016/09/18 金句</p>
       <p class="NewsTitle">恁是耶和華-恁上帝的子女(申命記14:1a)</p>
       <p class="NewsTitle">你們是上主-你們上帝的兒女(申命記14:1a)</p>
       <p class="NewsTitle"></p>
       <p class="NewsTitle"></p>
     </div>
   </div>
   <!-- 新聞區塊 end-->
  </div>
</div>
<div id="Product" class="Container">
  <!-- 介紹區塊 start-->
      <div class="Content">
        <div class="Wrap">
          <img src="images//Introduction.jpg" alt="" >
          <p></p>
        </div>
      </div>
      <!-- 介紹區塊 end-->
  </div>
</div>

<div id="Map">
  <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3619.4039651831945!2d121.28325821546538!3d24.884198750433114!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3468181f55ebd4a3%3A0x41f7f4eeaacae74d!2z5aSn5rqq5pWZ5pyD!5e0!3m2!1szh-TW!2stw!4v1473213604492" width="100%" height="440" frameborder="0" style="border:0" allowfullscreen></iframe>
</div>
<!-- 頁尾 -->
<footer id="Footer">
  <div class="Container">
    <div id="ContactContent">
      <div id="FooterLogo"><a href="index.php"><span class="SrOnly">CakeHouse</span></a></div>
      <p>Email:dasi.pct@gmail.com</p>
      <p>會址:桃園市大溪區普濟路90號</p>
      <p>電話:(03)388-8995or388-5243</p>
      <p>傳真:(03)388-0013</p>
    </div>
    <div id="SocietyContent">
      <div id="FacebookIcon"><a href="" class="DB"><i class="fa fa-facebook-square" aria-hidden="true"></i><span class="SrOnly">Facebook</span></a></div>
      <div id="GooglePlus"><a href="" class="DB"><i class="fa fa-google-plus-square" aria-hidden="true"></i><span class="SrOnly">Google+</span></a></div>
    </div>
  </div>
  <div id="Copyrights"><p>Copyright © 2016 CakeHouse. All Rights Reserved.</p></div>
</footer>
<div id="PageTop"><a class="DB" href="javascript:void(0)">^<span class="SrOnly">回到最上方</span></a></div>
</div>
<script src="js/jquery-1.8.3.min.js"></script>
<script src="js/bxslider/jquery.bxslider.js"></script>
<script src="js/script.js" charset="utf-8"></script>
</body>
</html>
