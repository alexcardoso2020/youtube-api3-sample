<?php 
$video_ID = "5Et58JawpDc";
$jsonURL = file_get_contents("https://www.googleapis.com/youtube/v3/videos?id={$video_ID}&key=AIzaSyD-Zbq1gtL0GojKrBFTS117mdu8jsh8QHA&type=video&part=snippet");
$json = json_decode($jsonURL);

$title	= $json->{'items'}[0]->{'snippet'}->{'title'};


echo '<b>Video ID:</b> '. $video_ID .'
<br />
<b>Title:</b> '. $title .'
<br />
<b>URL:</b> <a onclick="this.target= \'_blank\';return true;" href="http://www.youtube.com/watch?v=5Et58JawpDc">http://www.youtube.com/watch?v=5Et58JawpDc</a>
<br />
<b>Retrieving video information:</b> <a onclick="this.target= \'_blank\';return true;" href="https://www.googleapis.com/youtube/v3/videos?id='.$video_ID.'%20&key=AIzaSyD-Zbq1gtL0GojKrBFTS117mdu8jsh8QHA&part=snippet">click here</a>';
