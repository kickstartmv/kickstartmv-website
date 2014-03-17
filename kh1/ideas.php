<!doctype html>
<html lang="en" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>KickStart Hackathon 1 - First ever public hackathon in Maldives</title>
  <meta name="description" content="Kickstart Hackathon 1, a 24 hr hackathon to be held on 4th-5th April 2014. Participation open and free for all developers in Maldives. Have fun and try win some awesome prizes!">
  <meta name="keywords" content="kickstart, hackathon, maldives, male, programming, competition, software, development">

  <meta property="og:title" content="KickStart Hackathon 1 - First ever public hackathon in Maldives" />
  <meta property="og:url" content="http://www.kickstart.mv/kh1/"/>
  <meta property="og:site_name" content="Kickstart"/>
  <meta property="og:type" content="website"/>
  <meta property="og:description" content="Kickstart Hackathon 1, a 24 hr hackathon to be held on 4th-5th April 2014. Participation open and free for all developers in Maldives. Have fun and try win some awesome prizes!"/>
  <meta property="og:image" content="http://kickstart.mv/kh1/img/cover_image.jpg"/>

  <meta name="ops-profile-twitter:card" content="summary_large_image"/>
  <meta name="ops-profile-twitter:site" content="@kickstartmv"/>
  <meta name="ops-profile-twitter:creator" content="@kickstartmv"/>
  <meta name="ops-profile-twitter:title" content="KickStart Hackathon 1 - First ever public hackathon in Maldives"/>
  <meta name="ops-profile-twitter:description" content="Kickstart Hackathon 1, a 24 hr hackathon to be held on 4th-5th April 2014. Participation open and free for all developers in Maldives. Have fun and try win some awesome prizes."/>
  <meta name="twitter:image:src" content="http://kickstart.mv/kh1/img/cover_image.jpg"/>

  <link rel="stylesheet" href="css/foundation.min.css" />
  <link rel="stylesheet" href="css/style.css?v=1.2"/>
  <link rel="stylesheet" href="css/reveal.css"/>
  <script src="js/modernizr.js"></script>
  <link rel="shortcut icon" href="img/favicon.ico" type="image/x-icon">
  <link rel="icon" href="img/favicon.ico" type="image/x-icon">
</head>
<body>

<section id="header" class="slide slide-header dark">
  <div id="navbar">
    <div class="row">

      <div class="column large-2 logo">
        <a href="/"><img src="img/logo-colored.png"/></a>
      </div>

      <div class="column large-10">
        <ul class="navigation">
          <li><a href="/kh1/about.html">About</a></li>
          <li><a href="/kh1">Hackathons</a></li>
          <li><a href="/blog">Blog</a></li>
        </ul>

        <div class="social-links">
          <a href="https://twitter.com/kickstartmv" title="Follow us on Twitter" target="_blank"><img src="img/twitter.png"/></a>
          <a href="http://facebook.com/kickstartmv" title="Follow us on Facebook" target="_blank"><img src="img/facebook.png"/></a>
          <a href="http://instagram.com/kickstartmv" title="Follow us on Instagram" target="_blank"><img src="img/instagram.png"/></a>
        </div>
      </div>

    </div>
  </div>
</section>

<section id="ideas">
  <div class="row">
    
    <div class="columns medium-9" style="margin-bottom:30px;">

    <h2 class="narrow">Idea Bank</h2> 
      <h4 style="color:#242424;font-size:20px;">
       Maldives can come together, spend a time working on a project and, hopefully, end up with something interesting, new or useful that may potentially have high social impact or could kickstart a viable business

      </h4>
    </div>


    <!-- post modal -->
        <div id="postModal" class="reveal-modal large">
          <h2 class="text-left">Have an idea? Send it right away...</h2>
          <form id="idea-form">
            
            <input type="text" id="name" name="Idea[name]" placeholder="your name <you can leave blank to stay anonymous>"/>

            <input type="text" id="name" name="Idea[name]" placeholder="your email <you can leave blank to stay anonymous>"/>

            <input type="text" id="title" name="Idea[title]" placeholder="title of the idea"/>

            <textarea name="Idea[content]" id="content" style="height:150px;" placeholder="give us some details"></textarea>
            
            <div class="text-left" style="opacity:.8;">Leave name field blank to stay anonymous</div>

            <div class="text-right">
            <input id="submitIdea" type="button" class="button small" value="Send" />
            </div>
          </form>
        </div>

        <div id="successModal" class="reveal-modal large">
          <h2 class="text-left">Thank you for the contribution, we will review your idea.</h2>
        </div>
    <!-- end of post modal -->

    <div class="columns medium-3 text-right">

      <a href="#" class="ideaPostBtn" id="post-idea" data-reveal-id="postModal">Submit Idea</a>
    
    </div>
  </div>
    <div class="row">
    <?php
    $feed = json_decode(file_get_contents("http://www.kickstart.mv/blog/wp_api/v1/posts/?post_type=ideas"),true);

    $posts = $feed['posts'];

    $postc = count($posts);

    foreach($posts as $i => $post){
    ?>
      <div class="columns medium-3" style="<?php if($i+1 == $postc){ echo "float:left;"; } ?>">
        <div class="idea-card">
          <h6><?php echo $post['title']; ?></h6>

          <div class="sent-by">
            By: <?php echo $post['meta']['custom_fields']['wpcf-name']; ?>
          </div>

          <div class="category">
            Category: 
          </div>

          <?php echo $post['content_display']; ?>
        </div>
      </div>
    <?php } ?>
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

<script src="js/jquery.js"></script>
<script src="js/foundation.min.js"></script>
<script src="js/jquery.foundation.reveal.js"></script>
<script>
  $(document).foundation();

  $(document).ready(function(){

    $('#submitIdea').on('click',function(){

      var params = $('#idea-form').serialize();

      
      $.post('post-idea.php',params,function(response){
        if(response.status == 0){
          // errors
        }
        else{
          displaySucces();
        }
      },'json'); 

    });

  });

  function displaySucces(){
    $('#postModal').trigger('reveal:close');
    $('#successModal').trigger('reveal:open');
  }

  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');
ga('create', 'UA-48994103-1', 'kickstart.mv');
ga('send', 'pageview');
</script>

</body>
</html>