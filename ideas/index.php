<!doctype html>
<html lang="en" xmlns:og="http://ogp.me/ns#" xmlns:fb="http://www.facebook.com/2008/fbml">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>KickStart - Idea Bank</title>
  <meta name="description" content="IdeaBank is our repository of concepts, ideas and suggestions that developers can use as inspirations for projects at hackathons. It can be a specification of a real-world problem that is begging a solution or a concept for a new application. Got a near idea? Submit it here.">
  <meta name="keywords" content="kickstart, hackathon, maldives, male, programming, competition, software, development">

  <meta property="og:title" content="KickStart - Idea Bank" />
  <meta property="og:url" content="http://www.kickstart.mv/ideas/"/>
  <meta property="og:site_name" content="Kickstart"/>
  <meta property="og:type" content="website"/>
  <meta property="og:description" content="IdeaBank is our repository of concepts, ideas and suggestions that developers can use as inspirations for projects at hackathons. It can be a specification of a real-world problem that is begging a solution or a concept for a new application. Got a near idea? Submit it here."/>
  <meta property="og:image" content="http://kickstart.mv/ideas/cover_image.jpg"/>

  <meta name="ops-profile-twitter:card" content="summary_large_image"/>
  <meta name="ops-profile-twitter:site" content="@kickstartmv"/>
  <meta name="ops-profile-twitter:creator" content="@kickstartmv"/>
  <meta name="ops-profile-twitter:title" content="KickStart - Idea Bank"/>
  <meta name="ops-profile-twitter:description" content="IdeaBank is our repository of concepts, ideas and suggestions that developers can use as inspirations for projects at hackathons. It can be a specification of a real-world problem that is begging a solution or a concept for a new application. Got a near idea? Submit it here."/>
  <meta name="twitter:image:src" content="http://kickstart.mv/ideas/cover_image.jpg"/>

  <link rel="stylesheet" href="../kh1/css/foundation.min.css" />
  <link rel="stylesheet" href="../kh1/css/style.css?v=1.2"/>
  <link rel="stylesheet" href="../kh1/css/reveal.css"/>
  <script src="../kh1/js/modernizr.js"></script>
  <link rel="shortcut icon" href="../kh1/img/favicon.ico" type="image/x-icon">
  <link rel="icon" href="../kh1/img/favicon.ico" type="image/x-icon">
</head>
<body>

<section id="header" class="slide slide-header dark">
  <div id="navbar">
    <div class="row">

      <div class="column large-2 logo">
        <a href="/"><img src="../kh1/img/logo-colored.png"/></a>
      </div>
      <div class="column large-10">
        <?php include '../kh1/_topmenu.html'; ?>

        <div class="social-links">
          <a href="https://twitter.com/kickstartmv" title="Follow us on Twitter" target="_blank"><img src="../kh1/img/twitter.png"/></a>
          <a href="http://facebook.com/kickstartmv" title="Follow us on Facebook" target="_blank"><img src="../kh1/img/facebook.png"/></a>
          <a href="http://instagram.com/kickstartmv" title="Follow us on Instagram" target="_blank"><img src="../kh1/img/instagram.png"/></a>
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
       IdeaBank is our repository of concepts, ideas and suggestions that developers can use as inspirations for projects at hackathons. It can be a specification of a real-world problem that is begging a solution or a concept for a new application. Got a near idea? Submit it here.

      </h4>
    </div>


    <!-- post modal -->
        <div id="postModal" class="reveal-modal large">
          <h2 class="text-left" id="post-label">Have an idea? Send it right away...</h2>
          <form id="idea-form">
            
            <input type="text" id="name" name="Idea[name]" placeholder="your name <you can leave blank to stay anonymous>"/>

            <input type="text" id="email" name="Idea[email]" placeholder="your email <you can leave blank to stay anonymous>"/>

            <input type="text" id="title" name="Idea[title]" placeholder="title of the idea"/>

            <textarea name="Idea[content]" id="content" style="height:150px;" placeholder="give us some details"></textarea>

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

          <div class="category" style="display:none">
            Category: <?php //echo $post['taxonomies']['category'][0]['name']; ?>
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

<script src="../kh1/js/jquery.js"></script>
<script src="../kh1/js/foundation.min.js"></script>
<script src="../kh1/js/jquery.foundation.reveal.js"></script>
<script>
  $(document).foundation();

  $(document).ready(function(){

    $('#submitIdea').on('click',function(){

      var params = $('#idea-form').serialize();

      $('#post-label').text('Posting..');
      $('#submitIdea').attr('disabled','true');
      
      $.post('post-idea.php',params,function(response){
        if(response.status == 0){
          // errors
        }
        else{
          displaySuccess();
          $('#submitIdea').removeAttr('disabled');
          $('#post-label').text('Have an idea? Send it right away...');

          $('#idea-form').find('input').each(function(){
          	$(this).reset();
          });
        }
      },'json'); 

    });

  });

  function displaySuccess(){
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