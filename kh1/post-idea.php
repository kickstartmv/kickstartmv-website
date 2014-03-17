<?php 
require_once 'inc/wpclass.php';

$post = $_POST['Idea'];

$wp = new WordPress('ideabank', 'q#8KWzf30CH3', 'http://www.kickstart.mv/blog/xmlrpc.php');

$wp->publish_post($post['title'], $post['content'], array('tag 1', 'tag 2'), array('category test'));
?>