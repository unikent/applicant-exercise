<?php

require_once 'lib/Curl.php';

use Libs\Curl;

$kbs_news_events = json_decode(Curl::loadURL('https://api.kent.ac.uk/api/v1/blogs/kbs-news-events/posts_per_page/5'));
$music_matters = json_decode(Curl::loadURL('https://api.kent.ac.uk/api/v1/blogs/music-matters/posts_per_page/5'));
$staff_student_news = json_decode(Curl::loadURL('https://api.kent.ac.uk/api/v1/blogs/staff-student-news/posts_per_page/5'));

$all_posts = array_merge($kbs_news_events->posts, $music_matters->posts, $staff_student_news->posts);
$post = $all_posts[0];


?><!DOCTYPE html>
<html>
<head>
	<title>Blog post</title>
	<link rel="stylesheet" type="text/css" href="assets/css/app.css">
</head>
<body>
<?php include 'views/post.php'; ?>
</body>
</html>
