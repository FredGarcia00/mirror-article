<?

$exitLink = 'https://tidycarcan.com/product/salespage.php?affId='.$_GET['affId'].'&c1='.$_GET['c1'].'&c2='.$_GET['c2'];

?>
<html>
<head>
<META NAME="ROBOTS" CONTENT="NOINDEX, NOFOLLOW">
<? date_default_timezone_set('America/Los_Angeles'); ?>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
<meta name="viewport" content="initial-scale=1,maximum-scale=1,user-scalable=no">

<script src="../js/modernizr-2.6.2-respond-1.1.0.min.js"></script>
<script src="../js/jquery.min.js"></script>
<script src="../js/jquery-ui.min.js"></script>
<script src="../js/angular.min.js"></script>

<link rel="icon" type="image/png" href="../img/icon.png">

<link href='https://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<link href="https://fonts.googleapis.com/css?family=Oswald" rel="stylesheet">



<style type="text/css">
body{
  margin: 0 0 0 0;
  font-family: 'Open Sans', sans-serif;
  background: #d5d4d0;
  padding-top: 15px;
}
a:link,
a:visited{
	text-decoration: inherit;
	color: inherit;
}
a.articleLink:link,
a.articleLink:visited{
  text-decoration: inherit;
	color:#205cc3;
  font-weight: bold;
}
a.articleLink:hover{
  color:#2b75f5;
  text-decoration: underline;
}
.clear{
	clear: both;
}
.addedTop{
  width: 100%;
  height: auto;
  text-align: center;
  color: #333;
  font-size: 17px;
  padding: 4px 0px;
}
#mainBox{
  width: 1600px;
  height: auto;
  background: #fff;
  margin: 0 auto;
  box-shadow: 0px 0px 7px #000;
}
#header{
  width: 100%;
  height: auto;
  margin: 0 auto;
  border-bottom: 2px solid #ccc;
  padding-top: 7px;
  padding-bottom: 7px;
}
#headerInner{
  width: 1250px;
  height: auto;
  margin: 0 auto;
}
#logoLeft{
  height: 70px;
  width: auto;
  float: left;
}
#textRight{
  height: 70px;
  width: auto;
  float: right;
  line-height: 70px;
  font-style: italic;
  color: #333;
  font-size: 17px;
}
#titleBox{
  width: 100%;
  height: auto;
  margin: 0 auto;
}
#titleInner{
  width: 1250px;
  height: auto;
  margin: 0 auto;
  text-align: center;
  padding-top: 20px;
}
#headline{
  width: 100%;
  height: auto;
  font-size: 34px;
  font-weight: bold;
  color: #222;
}
#author{
  width: 300px;
  height: auto;
  margin: 0 auto;
  font-size: 14px;
  font-weight: bold;
  color: #555;
  margin-top: 15px;
  padding-top: 10px;
  border-top: 1px solid #ccc;
}
#articleBox{
  width: 100%;
  height: auto;
  margin: 0 auto;
}
#articleInner{
  width: 1250px;
  height: auto;
  margin: 0 auto;
  padding-top: 35px;
}
#sidebar{
  width: 300px;
  height: auto;
  float: right;
}
.sidebarTitle{
  width: 100%;
  height: auto;
  font-size: 20px;
  text-align: left;
  font-weight: bold;
  color: #333;
  padding-bottom: 10px;
  border-bottom: 2px solid #ccc;
}
.sidebarNative{
  width: 100%;
  height: auto;
  margin: 0 auto;
  margin-top: 15px;
}
.nativeImg{
  width: 45%;
  height: auto;
  float: left;
}
.nativeText{
  width: 52%;
  height: auto;
  float: right;
  font-size: 13px;
  text-align: left;
  color: #444;
}
.nativeText:hover{
  text-decoration: underline;
}


.sidebarImg{
  width: 100%;
  height: auto;
  margin-top: 15px;
}
.sideBarText{
  width: 100%;
  height: auto;
  font-size: 17px;
  text-align: left;
  color: #333;
  margin-top: 10px;
}
#mainContent{
  width: 800px;
  height: auto;
  float: left;
  padding-bottom: 30px;
}
.articleImg{
  width: 100%;
  height: auto;
  margin: 0 auto;
  padding-bottom: 20px;
}
.articleImgsmall{
  width: 72%;
  height: auto;
  margin: 0 auto;
  padding-bottom: 20px;
}
.articleSubheader{
  width: 100%;
  height: auto;
  margin: 0 auto;
  padding-bottom: 15px;
  font-size: 22px;
  font-weight: bold;
  line-height: 28px;
  color: #17191c;
}
.blockQuote{
  width: calc(90% - 50px);
  height: auto;
  margin: 0 auto;
  border-left: 10px solid #ccc;
  background-color: #f9f9f9;
  background-image: url(../img/blockquote.png);
  background-repeat: no-repeat;
  line-height: 28px;
	padding: 10px 20px 10px 40px;
  margin-bottom: 20px;
}
.articleText{
  width: 100%;
  height: auto;
  margin: 0 auto;
  /*padding-bottom: 20px;*/
  font-size: 17px;
  line-height: 26px;
  color: #333;
}
.articleIndent{
  width: 90%;
  height: auto;
  margin: 0 auto;
  /*padding-bottom: 20px;*/
  font-size: 17px;
  line-height: 26px;
  color: #333;
}
.articleButton{
  width: calc(100% - 20px);
  height: auto;
  margin: 0 auto;
  padding: 8px;
  color: #fff;
  font-family: 'Open Sans';
  font-size: 18px;
  font-weight: bold;
  text-align: center;
  background-image: linear-gradient(to bottom,#f0ad4e 0,#eb9316 100%);
  background-repeat: repeat-x;
  border: 1px solid #e67919;
  border-radius: 4px;
}

.commentBreak{
	width:100%;
	border-bottom: 1px solid #198fff;
	margin:0 auto;
	height:80px;
}
#map {
  width: 700px;
  height: 405px
}
#footer{
  width: 100%;
  height: auto;
  margin: 0 auto;
  margin-top:60px;
  background: #5a787c;
}
#footerInner{
  width: 1040px;
  height: auto;
  margin: 0 auto;
  padding: 25px 0px;
  color: #fff;
  font-family: 'Roboto';
  font-size: 14px;
  text-align: center;
}
.linkLine{
  width: 300px;
  height: auto;
  margin: 0 auto;
  padding-top: 15px;
  color: #fff;
  font-family: 'Roboto';
  font-size: 14px;
  text-align: center;
}
.articleSubimg{
  width: 500px;
  height: auto;
  margin: 0 auto;
  padding-bottom: 20px;
}
.imageSub{
  width: 100%;
  height: auto;
  margin: 0 auto;
  padding-bottom: 20px;
  text-align: center;
  font-size: 16px;
  color: #777;
  font-style: italic;
}
li{
  padding-bottom: 15px;
}
.finalBox{
  width: calc(100% - 42px);
  height: auto;
  margin: 0 auto;
  padding: 30px 20px;
  border: 1px solid #dedede;
  margin-top: 30px;
  margin-bottom: 30px;
}
.articleButton{
  width: calc(100% - 20px);
  height: auto;
  margin: 0 auto;
  padding: 10px;
  color: #fff;
  font-family: 'Roboto';
  font-size: 30px;
  text-align: center;
  background: #63d021;
  border: none;
  outline: none;
}
.articleButton:hover{
  background: #49a511;
}
.updateBox{
  width: 100%;
  height: auto;
  margin: 0 auto;
  margin-bottom: 20px;
}
.updateTop{
  width: calc(100% - 20px);
  height: auto;
  margin: 0 auto;
  background: #459ef7;
  color: #fff;
  padding: 20px 10px;
  border-radius: 5px;
  font-size: 20px;
  font-weight: 700;
}
.updateBot{
  width: calc(100% - 20px);
  height: auto;
  margin: 0 auto;
  background: #f4f4c3;
  color: #111;
  padding: 20px 10px;
  border-radius: 2px;
  font-size: 18px;
  font-weight: 400;
}
.paperBox{
  width: calc(100% - 50px);
  height: auto;
  margin: 0 auto;
  padding: 25px;
  margin-bottom: 25px;
  background: url(../img/paperbg.jpg);
  background-repeat: repeat;
  box-shadow: 5px 5px 10px rgba(0, 0, 0, 0.8);
}
.paperTitle{
  width: 100%;
  height: auto;
  color: #222;
  font-size: 24px;
  font-weight: 700;
  text-align: center;
  padding-bottom: 20px;
}
.paperText{
  width: 100%;
  height: auto;
  color: #222;
  font-size: 18px;
  font-weight: 400;
  text-align: left;
  padding-bottom: 20px;
}
.reviewBox{
  width: calc(100% - 50px);
  height: auto;
  padding: 25px;
  border-bottom: 1px solid #ddd;
}
.namePic{
  width: 34px;
  height: 34px;
  background: #a7a7a7;
  border-radius: 50%;
  float: left;
  position: relative;
  text-align: center;
  color: #fff;
  line-height: 34px;
  font-size: 20px;
}
.nameCheck{
  width: 12px;
  height: 12px;
  position: absolute;
  right: 0;
  bottom: 0;
  z-index: 10;
}
.dateRight{
  width: 120px;
  height: auto;
  float: right;
  font-size: 14px;
  color: #777;
}
.reviewHeader{
  width: calc(100% - 184px);
  height: 34px;
  float: left;
  margin-left: 15px;
}
.rh1{
  width: 100%;
  height: 20px;
  text-align: left;
  font-size: 14px;
  color: #777;
  line-height: 20px;
}
.rh2{
  width: 100%;
  height: 14px;
}
.reviewText{
  width: 100%;
  height: auto;
  margin-top: 15px;
  font-size: 16px;
  font-style: italic;
  color: #333;
}


@media screen and (max-width: 1600px) {
  body{
    padding-top: 10px;
  }
  #mainBox{
    width: 100%;
  }
  #headerInner,
  #titleInner,
  #articleInner{
    width: 1250px;
  }
  #mainContent{
    width: 750px;
  }
}

@media screen and (max-width: 1250px) {
  #headerInner,
  #titleInner,
  #articleInner{
    width: 95%;
  }
  .barLeft{
    width: 120px;
    font-size: 15px;
  }
  .barRight{
    width: 170px;
    font-size: 12px;
  }
  .barCenter{
    width: calc(100% - 290px);
    font-size: 11px;
  }
  #mainContent{
    width: 100%;
  }
  #sidebar{
    display: none;
  }
  #footerInner{
    width: 95%;
    font-size: 12px;
    padding: 20px 0px;
  }
  .imgSubheader{
    padding-bottom: 12px;
    font-size: 18px;
    line-height: 24px;
  }
  .articleImgsmall{
    width: 80%;
  }
  .articleSubheader{
    padding-bottom: 12px;
    font-size: 26px;
    line-height: 30px;
  }
  .articleText,
  .articleIndent{
    padding-bottom: 12px;
    font-size: 22px;
    line-height: 32px;
  }
  .articleButton{
    font-size: 24px;
  }
  #footerInner{
    width: 95%;
    font-size: 11px;
    padding: 15px 0px;
  }
  #map{
    transform: scale(0.8);
    margin-left: -80px;
  }
  .updateTop{
    width: calc(100% - 16px);
    padding: 16px 8px;
    font-size: 18px;
  }
  .updateBot{
    width: calc(100% - 16px);
    padding: 16px 8px;
    font-size: 17px;
  }
  .rh1{
    font-size: 11px;
  }
}
@media screen and (max-width: 750px) {
  .blockQuote{
		font-size:18px;
		line-height:24px;
  }
  .articleSubimg{
    width: 80%;
  }
}
</style>


</head>
<body>
<!-- Facebook Pixel Code -->
<script>
!function(f,b,e,v,n,t,s){if(f.fbq)return;n=f.fbq=function(){n.callMethod?
n.callMethod.apply(n,arguments):n.queue.push(arguments)};if(!f._fbq)f._fbq=n;
n.push=n;n.loaded=!0;n.version='2.0';n.queue=[];t=b.createElement(e);t.async=!0;
t.src=v;s=b.getElementsByTagName(e)[0];s.parentNode.insertBefore(t,s)}(window,
document,'script','https://connect.facebook.net/en_US/fbevents.js');
fbq('init', '552365194970012');
fbq('track', 'PageView');
fbq('track', 'ViewContent', {
  content_ids: ['<?php echo $_GET['utm_term'] ?>'],
  content_type: 'product',
  content_category: ['tidycar']
});
</script>
<noscript><img height="1" width="1" style="display:none"
src="https://www.facebook.com/tr?id=552365194970012&ev=PageView&noscript=1"
/></noscript>
<!-- DO NOT MODIFY -->
<!-- End Facebook Pixel Code -->



<div id="mainBox">
  <div id="header">
    <div id="headerInner">
      <div id="logoLeft">
        <img src="../img/logo1.png" height="100%" />
      </div>
      <div id="textRight">
        Advertisement - Sponsored by TidyCar
      </div>
      <div class="clear"></div>
    </div>
  </div>



  <div id="titleBox">
    <div id="titleInner">
      <div id="headline">
      Tri Fold Mirror
      </div>
      <div id="author">
        Joseph Lewis | <?=date('l\, F d\, Y',strtotime('-9 days'));?>
      </div>
    </div>
  </div>


  <div id="articleBox">
    <div id="articleInner">
      <div id="sidebar">
        <div class="sidebarTitle">
          Sponsored By:
        </div>
        <div class="sidebarImg">
          <a href="https://about.att.com/pages/5g/how-5g-works.html" target="_blank">
            <img src="../img/attban.jpg" width="100%" />
          </a>
        </div>
        <div class="sidebarImg">
          <a href="https://www.mazdausa.com/vehicles/2020-cx-3" target="_blank">
            <img src="../img/mazdaban.jpg" width="100%" />
          </a>
        </div>
      </div>

      <div id="mainContent">
    <div class="articleImg">
      <img src="../img/Splash-Image-CarTrash.jpg" width="100%" />
    </div>
    <div class="articleText">
      <p>Working as a hairdresser in Hollywood for the past decade, I thought I had all the answers about glitz and glamour, especially considering some of the clients who frequent my place. As it turns out, I was dead wrong in one key area; makeup. I do my makeup in the mirror, it looks great, but then I step outside or go into a different building and it…just looks off. I always blamed the makeup, or thought I was having an off day…I used to think that, until I discovered how important lighting is when applying makeup.</p>

      <p>This a painfully recent story of how I got told.</p>

      <p>The worst kept secret in L.A. is that everyone is an actor/actress. The guy delivering mail? The girl waiting your table? The dudes working on your car at the shop? The old lady walking her dog down Rodeo Drive?</p>

      <p>Actors and actresses, one and all.</p>

      <p>We all know a lady never reveals her age, so let’s just say I’m not over the hill…but I’m climbing that way soon. I’ve lived a busy life, raising my kids while cutting and styling hair at my shop in downtown L.A. and life was great. I’ve seen so many trends come and go—most of them go just as fast as they came—but the most recent one really made me curious, especially when it didn’t fade out after a few months. I started seeing a lot of young ladies with a portable mirror. The exact same portable mirror, and they sure did spend a lot of time touching themselves up in it.</p>

      <p>I’m not talking about a little pocket mirror, here. It looked like someone took a book out of Apple’s playbook (remember how they took their iPhone and made it larger to create the iPad?) and took a standard Hollywood dressing room mirror and shrunk it to a portable size. After the third time I saw a local B-lister in my place, I asked her if I could take a peek at her mirror, and she was more than happy to show it to me.</p>

      <p>Several lights ran across the edges of the center part of the mirror, which folds out left and right in a tri-fold. I loved how I could see my whole face in the center mirror, and there was a long, thin mirror on the right that looked great for contouring at certain lighting angles. The left mirror was split into two magnified mirrors; the top one would be perfect for close-up work on lashes and eye shadow, and the bottom lined up exactly on my lips, and that’s when I realized why this mirror was so popular. With this one little mirror, I was looking directly into the optimum lighting, and at all angles; it would be impossible to get my makeup wrong with this set-up.</p>

	<div class="articleImgsmall">
      <img src="../img/CarTrash2-1.jpg" width="100%" />
      </div>


      <p>In the midst of that revelation, my customer decided to slap a Hollywood compliment across my face.</p>

      <div class="blockQuote">
         <i>“Pretty cool, huh?” She asked. “It’s called <a class="articleLink" href="<?=$exitLink;?>">ioVanity</a> . Everyone who’s anyone is using them, and it’s easy to see why. I’m surprised you don’t have one, being a stylist. You know,” she lowered her voice to barely above a whisper, “I didn’t want to say anything before, but I have noticed your makeup is a bit…inconsistent. I bet if you had one of these, you could fix that right up!”
		</i>
      </div>

      <p>She gave me a big smile. I couldn’t tell if she was being catty, or if her head was filled with air and she had no idea how she’d just insulted me. Unfortunately for me, I knew she was right; for years I’ve been going back and forth between thinking I just have my off-days or that my makeup skills weren’t up to snuff—I even blamed it on my fairly expensive products at one point, but this made perfect sense. I just wasn’t considering the lighting.</p>

      <p>I thanked her for the suggestion and asked her where people have been getting this mirror. To my surprise, she said it was only available online. I took down the  <a class="articleLink" href="<?=$exitLink;?>">website</a>  right away, and once I’d closed up for the day, I went straight to researching the [Product Name].</p>
      </div>
    <div class="articleSubheader">
      What Is It And How Does It Work?
    </div>
    <div class="articleImgsmall">
      <img src="../img/CarTrash1.jpg" width="100%" />
    </div>
    <div class="articleText">
      <p><a class="articleLink" href="<?=$exitLink;?>">ioVanity</a> is the prime solution to the most common makeup fails plaguing the fashion world—from young ladies to professional actresses and grandmothers, everyone can benefit from this Hollywood-approved portable mirror! Let’s face it, literally: most make up mistakes aren’t noticed in your bathroom mirror at home. It’s a series of odd looks from strangers when you’re out, or something you notice in a mirror out in public, and if you haven’t realized it yet, hear this: lighting, lighting, lighting! Unless you have a dressing room mirror lined with all those bright lights, you’re going to experience a totally different look everywhere you go…and that’s not exactly a good thing.</p>

      <p>It happens to the best of us. Just look at these embarrassing celebrity makeup fails:</p>

      <div class="articleImgsmall">
        <img src="../img/CarTrash1.jpg" width="100%" />
    </div>

      <p>Take control of your look with <a class="articleLink" href="<?=$exitLink;?>">ioVanity</a>, the world’s first portable dressing room mirror designed to give you the optimum lighting condition everywhere you go! This is no joke; celebrities have picked up on the [Product Name] as it’s taken Hollywood by storm. The craziest thing about it isn’t how effective it is, though; it’s the price!</p>

      <p>Designed by an aesthetician who believes that “everyone should have the opportunity to look their best,” the guiding principle for the inventor was to keep his product out of stores to cut out the middle man, keeping his product affordable for everyone, not just the rich and famous.</p>

      <p>Use 4 AAA batteries or the wall charger to power the 21 LEDs that give you the optimum lighting setting. 4 mirrors in the tri-fold design give you a full-on face look in the primary center mirror, a narrow lighting-angle specific mirror on the right, and two magnifying mirrors: 3x magnification for eye makeup and 2x magnification for lipstick applications.</p>

      <p>This mirror is your best defense against makeup fails and guarantees consistency in all lighting situations.</p>
    </div>
   
    <div class="articleSubheader">
      But…Is It Really Worth All This Hype?
    </div>
    <div class="articleText">
      <p>So far, the <a class="articleLink" href="<?=$exitLink;?>">ioVanity</a> has sold over 6 million units directly to consumers, even without the help of being sold in stores. The [Product Name] has been SELLING OUT every time new stock becomes available, it’s become THAT popular.</p>

      <p>And, it’s all from word of mouth. People just like you are loving it so much that they’re posting about it on instagram and telling everyone they know about it!</p>
    </div>
    <div class="articleImgsmall">
      <img src="../img/IGCarTrash1.jpg" width="100%" style="border: 1px solid #ddd;" />
    </div>
    <div class="articleImgsmall">
      <img src="../img/IGCarTrash2.jpg" width="100%" style="border: 1px solid #ddd;" />
    </div>
    <div class="articleText">
      <p>The [Product Name] has started to develop a cult following, and with over 10,000 5-star reviews, it makes sense. Here’s what customers are saying about it:</p>
    </div>
    <div class="reviewBox">
      <div class="namePic">
        M
        <div class="nameCheck">
          <img src="../img/revcheck.png" width="100%" />
        </div>
      </div>
      <div class="reviewHeader">
        <div class="rh1">
          <span style="font-weight: 700; color: #444; font-size: 15px;">Luke L.</span> Verified Buyer
        </div>
        <div class="rh2">
          <img src="../img/stars.png" height="100%" />
        </div>
      </div>
      <div class="dateRight">
        3/27/21
      </div>
      <div class="clear"></div>
      <div class="reviewText">
        The product was larger than I expected, in a good way ;). The materials are solid and the interior looks like it could definitely handle a few spills. The support sticks used to hold it open seem like they could fall out since there is no sleeve, but otherwise everything looks good.
      </div>
    </div>
    <div class="reviewBox">
      <div class="namePic">
        H
        <div class="nameCheck">
          <img src="../img/revcheck.png" width="100%" />
        </div>
      </div>
      <div class="reviewHeader">
        <div class="rh1">
          <span style="font-weight: 700; color: #444; font-size: 15px;">Anne A.</span> Verified Buyer
        </div>
        <div class="rh2">
          <img src="../img/stars.png" height="100%" />
        </div>
      </div>
      <div class="dateRight">
        3/30/21
      </div>
      <div class="clear"></div>
      <div class="reviewText">
         Love this car trashcan! Fits my 2008 Toyota Corolla. Both passenger and driver can easily reach it. Can use a regular plastic bag from Walmart to fit inside. I especially like the Velcro strip on the underside that sticks to the carpet to secure it in place. Highly Recommend! Great price!
      </div>
    </div>
    <div class="reviewBox" style="border-bottom: none;">
      <div class="namePic">
        E
        <div class="nameCheck">
          <img src="../img/revcheck.png" width="100%" />
        </div>
      </div>
      <div class="reviewHeader">
        <div class="rh1">
          <span style="font-weight: 700; color: #444; font-size: 15px;">Kim C.</span> Verified Buyer
        </div>
        <div class="rh2">
          <img src="../img/stars.png" height="100%" />
        </div>
      </div>
      <div class="dateRight">
        4/2/21
      </div>
      <div class="clear"></div>
      <div class="reviewText">
          I was pleasantly surprised by the quality. It might sound silly but I wanted something that would stand up to a fair amount of use as the kids and I spend a LOT of time driving and often eat on the go, creating all kinds of garbage.
			This was perfect for my needs. Good size and well designed.

      </div>
    </div>
    <div class="articleText">
      <p>After seeing the incredibly positive reception the [Product Name] was getting on the internet, and with the recommendation from one of my customers, I knew I had to try it for myself. I got on the official website and ordered it the moment it came back in stock.</p>
    </div>
    <div class="articleSubheader">
      …Here’s What I Found.
    </div>
    <div class="articleText">

      <p>I went ahead on to the website and finally ordered one. The <a class="articleLink" href="<?=$exitLink;?>">ioVanity</a> arrived in just 2 days. I was talking to my daughter when the package arrived. (The biggest mistake I’ve made with this mirror is opening the package right in front of my 15-year-old daughter!)</p>

      <div class="articleImg">
        <img src="../img/CarTrash3.jpg" width="100%" />
      </div>

	  <p>The first thing I noticed was how weightless the mirror feels. Yet, it has 4 mirrors packed inside. I opened up the flaps and revealed them. Pristine is the only word for it. The mirrors are incredibly clear and set up at precise angles. I held up the mirror in every direction I could think of. I love, love, love how it offers different magnifications. I can see my lips clearly, every detail of my eyes, cheekbones and skin. I can dim lights or max them out when it’s dark in the room with the elegant touch buttons.</p>

      <p>I ended up setting it up on my bedroom dresser and I used it the next morning. I got through my whole makeup routine faster and more precisely than I could before. I used to have to either squint or use another mirror. And I have to say, the confidence of the additional lighting was tangible. With the [Product Name], I could just slap on the makeup and turn my face, slap on a bit more, and turn my face for a final look. Perfect.</p>

      <div class="articleImg">
        <img src="../img/CarTrash3.jpg" width="100%" />
      </div>

      <p>It did not take my daughter long to use it either. Since I’m a hairdresser, she always asks me to do her hair. I’ve showed her multiple times how to do it herself but she always refused. But what do you know… She’ll take this mirror and actually put her hair up by herself!</p>

      <div class="articleImg">
        <img src="../img/CarTrash3.jpg" width="100%" />
      </div>

      <p>She started bringing over friends, and they all raved about how the [Product Name] improved their look. I’ve had to kick them out of my room, and when that didn’t exactly stop them, I ordered my daughter her own mirror! It was so affordable and effective, I just couldn’t say no.</p>

      <p>Even though I’ve had to buy her a mirror, I’ve also been able to spend time with her because of it. She’s showed me some of the new trending makeup tricks. I’ve showed her some of my old school skills, and it’s been a great bonding experience with her. It’s all thanks to the [Product Name]’s incredible functionality that allows us to see clearly all parts of our face at once.</p>
    </div>
    <div class="articleSubheader">
      How Much Does It Cost?
    </div>
    <div class="articleText">
      <p>It’s currently on sale at their official website for just $30.99!</p>
    </div>
    <div class="articleSubheader">
      Is It Worth It?
    </div>
    <div class="articleText">
      <p>I love this mirror (and so does my daughter and her friends). You can only get the mirror from the website. It’s the exact mirror that I see Hollywood actresses use, and now it’s the exact mirror that I use. It has the best lighting, the clearest reflection, and lasts the longest. You definitely want something you buy to last, and that’s what you get with the [Product Name].</p>

      <p>You’d think since actresses use this mirror that it would be really expensive. But it’s only [price]. I obviously bought one for myself and one for my daughter, so it’s really not that expensive to get. I’m thinking of getting one for her best friend whose parents rarely ever buy her anything. I don’t want her to feel left out, you know. </p>

      <p>I’m a hairdresser, not a makeup professional. I always found putting makeup on was a lot harder than putting up hair. But this mirror definitely makes it easier and I don’t have to squint every 2 seconds. But the last time I checked on the website, they were almost sold out. I’d recommend getting one ASAP!</p>

      </div>
    <div class="updateBox">
      <div class="updateTop">
        UPDATE
      </div>
      <div class="updateBot">
        <b>UPDATE <?=date('l\, F d\, Y',strtotime('-0 days'));?></b> - Ever since <a class="articleLink" href="<?=$exitLink;?>">TidyCar</a> was featured on TV, an incredible amount of buzz has been generated and has since sold over 6 million units. Due to its popularity and positive reviews, the company is so confident in their product that they are now offering a <b>one-time discount of 50% off. To see if they are still available, click on the button below.</b>
      </div>
    </div>


    <a href="<?=$exitLink;?>">
      <div class="articleButton">
        Apply Discount & Check Availability >>
      </div>
    </a>





        <div class="commentBreak" style="margin-bottom: 30px;"></div>
        <!-- Load comments -->
        <?
        $commentsUrl= 'http://blackin.top/comments/tidycar.php'; // comments location
        $commentsCh = curl_init();
        $commentsTimeout = 5;
        curl_setopt($commentsCh,CURLOPT_URL,$commentsUrl);
        curl_setopt($commentsCh,CURLOPT_RETURNTRANSFER,1);
        curl_setopt($commentsCh,CURLOPT_CONNECTTIMEOUT,$commentsTimeout);
        $commentsData = curl_exec($commentsCh);
        curl_close($commentsCh);
        echo $commentsData;
        ?>
        <!-- End comments -->







      </div>
      <div class="clear"></div>
    </div>
  </div>
</div>







<!--Footer-->
<div id="footer">
  <div id="footerInner">
    THIS IS AN ADVERTISEMENT AND NOT AN ACTUAL NEWS ARTICLE, BLOG, OR CONSUMER PROTECTION UPDATE
    <br /><br />
    MARKETING DISCLOSURE: This website is a market place. As such you should know that the owner has a monetary connection to the product and services advertised on the site. The owner receives payment whenever a qualified lead is referred but that is the extent of it.
    <br /><br />
    ADVERTISING DISCLOSURE: This website and the products & services referred to on the site are advertising marketplaces. This website is an advertisement and not a news publication. Any photographs of persons used on this site are models. The owner of this site and of the products and services referred to on this site only provides a service where consumers can obtain and compare.
    <br /><br />
    © <?=date('Y'); ?> All Rights Reserved.
    <br /><br />
      <a href="../contact.php" class="textLink" target="_blank" style="color: white;">Contact Us</a> -
      <a href="../terms.php" class="textLink" target="_blank" style="color: white;">Terms & Conditions</a> -
      <a href="../privacy.php" class="textLink" target="_blank" style="color: white;">Privacy Policy</a>
    <? include_once('../dmca.php'); ?>
  </div>
</div>
</body>
</html>
