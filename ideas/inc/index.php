<?php 

	require_once 'wpclass.php';
    $wp = new WordPress('admin', 'pass', 'http://localhost/kickstart-blog/xmlrpc.php');

    $wp->publish_post('This is a test', 'this is some test content', array('tag 1', 'tag 2'), array('category test'));

?>
<form action="?" method="post">
	<label for="title">Title</label>
	<input type="text" name="title"/>
	<br>
	<label for="idea">Idea</label>
	<input type="text" name="idea"/>

</form>