<?php 

date_default_timezone_set("Indian/Maldives");

require_once 'inc/wpclass.php';

$post = $_POST['Idea'];

$wp = new WordPress('ideabank', 'q#8KWzf30CH3', 'http://www.kickstart.mv/blog/xmlrpc.php');
$json = array();
if($wp->publish_post(htmlentities($post['title'],ENT_QUOTES), htmlentities($post['content'],ENT_QUOTES), array(), array(), array('name' => empty($post['name']) ? "Anonymous" : htmlentities($post['name'],ENT_QUOTES), 'email' => htmlentities($post['email'],ENT_QUOTES)))){
	$json['status'] = 1;
}
else{
	$json['status'] = 0;
}

echo json_encode($json);
?>