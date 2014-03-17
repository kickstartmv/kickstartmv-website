<?php 
require_once 'inc/wpclass.php';

$post = $_POST['Idea'];

$wp = new WordPress('ideabank', 'q#8KWzf30CH3', 'http://www.kickstart.mv/blog/xmlrpc.php');
$json = array();
if($wp->publish_post($post['title'], $post['content'], array(), array(), array('name' => empty($post['name']) ? "Anonymous" : $post['name'], 'email' => $post['email']))){
	$json['status'] = 1;
}
else{
	$json['status'] = 0;
}

echo json_encode($json);
?>