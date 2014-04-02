<!doctype html>
<html lang="en" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Messages for you - KickStart</title>
  <meta name="description" content="A simple message from someone can help to inspire and motivate. Here are words from some who would like to reach out and encourage the developer community in Maldives.">
  <meta name="keywords" content="kickstart, hackathon, maldives, male, programming, competition, software, development">

  <meta property="og:title" content="Messages for you - KickStart" />
  <meta property="og:url" content="http://www.kickstart.mv/kh1/"/>
  <meta property="og:site_name" content="Kickstart"/>
  <meta property="og:type" content="website"/>
  <meta property="og:description" content="A simple message from someone can help to inspire and motivate. Here are words from some who would like to reach out and encourage the developer community in Maldives."/>
  <meta property="og:image" content="http://kickstart.mv/kh1/img/cover_image.jpg"/>

  <meta name="ops-profile-twitter:card" content="summary_large_image"/>
  <meta name="ops-profile-twitter:site" content="@kickstartmv"/>
  <meta name="ops-profile-twitter:creator" content="@kickstartmv"/>
  <meta name="ops-profile-twitter:title" content="Messages for you - KickStart"/>
  <meta name="ops-profile-twitter:description" content="A simple message from someone can help to inspire and motivate. Here are words from some who would like to reach out and encourage the developer community in Maldives."/>
  <meta name="twitter:image:src" content="http://kickstart.mv/kh1/img/cover_image.jpg"/>

  <link rel="stylesheet" href="/kh1/css/foundation.min.css" />
  <link rel="stylesheet" href="/kh1/css/style.css?v=1.3"/>
  <script src="/kh1/js/modernizr.js"></script>
  <link rel="shortcut icon" href="/kh1/img/favicon.ico" type="image/x-icon">
  <link rel="icon" href="/kh1/img/favicon.ico" type="image/x-icon">

</head>
<body>

<section id="header" class="slide slide-header">
  <div id="navbar">
    <div class="row">

      <div class="column large-2 logo">
        <a href="/"><img src="/kh1/img/logo-colored.png"/></a>
      </div>

      <div class="column large-10">
        <?php include("_topmenu.html"); ?>

        <div class="social-links">
          <?php include("_sociallinks.html"); ?>
        </div>
      </div>

    </div>
  </div>

  <div class="row">
      <div class="columns large-10 large-centered big-ass-text">
          <h2>Messages for <span class="bold">You</span></h2>
          <h4>A simple message from someone can help inspire and motivate. Here are words from some who would like to reach out and encourage the developer community in Maldives.</h4>
      </div>
    </div>
  </div>
</section>

<section id="quotes" class="slide">
  <div class="row">
    <div id="quotelisting" class="column large-12">

      <?php
      $quotes = array(
        array(
          'name' => 'Steve Wozniak',
          'designation' => 'CO-FOUNDER, APPLE',
          'message' => "Geeks have no better fun than at hackathons. Fun is better motivation than rewards like salaries and bonuses and grades. There is a lot more creativity at hackathons than in general technology work. You are trying to impress peers with how clever you are. I hope this event is successful and the start of something big",
          'img' => '/kh1/img/avatars/woz.jpg'
        ),
        array(
          'name' => 'Ismail Rasheed',
          'designation' => 'CHIEF EXECUTIVE, DHIRAAGU',
          'message' => "The ability to write smart programs whether to solve a real life problem, or create an innovative mobile application is a great skill that can improve your employability today in a wide range of industries.  This event by Kickstart is a great opportunity for the young Maldivians to demonstrate their programming skills.",
          'img' => '/kh1/img/avatars/dhiraagu_ce2.jpg'
        ),
        array(
          'name' => 'Mohamed Shareef',
          'designation' => 'CTO, NCIT',
          'message' => "Hackathons are an integral component of NCIT's strategy to spark innovation, foster youth entrepreneurship and build our IT industry. We are delighted to provide strategic support to Kickstart Hackathon 2014 event and look foward to inclusive productive creative fun at this event.",
          'img' => '/kh1/img/avatars/shareef_ncit.jpg'
        ),
        array(
          'name' => 'Ali Rafeeq',
          'designation' => 'EDITOR, HAVEERUONLINE',
          'message' => "Coders and designers are key drivers of the media revolution that is redefining communication and social discourses. Be part of the transformation, and actively play your roles. Code, collaborate and contribute.",
          'img' => '/kh1/img/avatars/alirafeeg.jpg'
        ),
        array(
          'name' => 'Mohamed Nasheed',
          'designation' => 'FORMER PRESIDENT, REP OF MALDIVES',
          'message' => "In small island states such as the Maldives, information technology plays a crucial role. It enables communication, education, commerce and ensures for greats transparency in governance. 

            Connectivity is the first step in expanding the Maldives' ITC sector, allowing for the creation of attractive career options for youth, and contributing to the national economy. I'm deeply encouraged by the Maldives first hackathon organised by Kickstart",
          'img' => '/kh1/img/avatars/mohamednasheed.jpg'
        ),
        array(
          'name' => 'Ameen Ibrahim',
          'designation' => 'MINISTER OF TRANSPORT AND COMMUNICATION, REP OF MALDIVES',
          'message' => "Ours is a nation full of smart and talented youth, where platforms like the Kickstart Hackathon are very much in need to unlock the unparalleled potentials and creativity of our youth to drive social, cultural, political, as well as, economic development of this nation. I applaud this initiative by a group of our youth and would like to see this platform developed into a national hackathon series in the future.",
          'img' => '/kh1/img/avatars/min_ameen.jpg'
        ),
        array(
          'name' => 'Mohamed Maleeh Jamal',
          'designation' => 'MINISTER OF YOUTH AND SPORTS, REP OF MALDIVES',
          'message' => "At a juncture when the nation needs innovative youth to stand up and be counted, it is highly encouraging to see a group of youth taking the initiative to organize such an event. The first ever Hackathon in the Maldives will provide a much needed opportunity for the many talented developers, designers and programmers to come together and hopefully will pave the way to developing our IT industry. <br/><br/> I hope that this event will also lead to future Hackthons devoted to improving the government and resolving some of our social and economic problems. I'm a firm believer that the ripple effects of a combination of smart people, actions and ideas in a highly motivated environment can always prove invaluable.",
          'img' => '/kh1/img/avatars/maleehj.png'
        ),
      );
  
      shuffle($quotes);

      foreach($quotes as $quote){ ?>
      <div class="message column medium-push-1 medium-5 sweetwords">
        <div class="avatar" style="background-image:url('<?php echo $quote['img']; ?>');background-size:cover"></div>
        <div class="details">
          <div class="name"><?php echo $quote['name']; ?></div>
          <div class="designation"><?php echo $quote['designation']; ?></div>
          <p>
            <?php echo nl2br($quote['message']); ?>
          </p>
        </div>
      </div>

      <?php } ?>

    </div>
  </div>
</section>

<section id="footer" class="slide">
    <div class="row">
        <div class="columns medium-7">
          <div class="contact">
            Contact / Email: <b>info[at]kickstart.mv</b>, Twitter: <b><a href="http://twitter.com/kickstartmv" target="_blank">@kickstartmv</a></b>
          </div>
        </div>
        <div class="columns medium-5">
          <div class="copyright text-center">
          Made with ♥ in <b><a href="http://en.wikipedia.org/wiki/Maldives" target="_blank">Maldives</a></b>. &copy; 2014 kickstart.mv</div>
          </div>
        </div>
    </div>
</section>

<script src="/kh1/js/jquery.min.js"></script>
<script src="/kh1/js/foundation.min.js"></script>
<script src="/kh1/js/masonry.min.js"></script>
<script>
$(document).ready(function(){
  $(document).foundation();

  $('#quotelisting').masonry({
    itemSelector: '.message'
  });

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-48994103-1', 'kickstart.mv');
ga('send', 'pageview');
});
</script>

</body>
</html>