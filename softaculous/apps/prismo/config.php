<?php  

### Main Settings ###

// Website Name
$config["website_name"] = "My Video Site";

// Website Url with slash		  
$config["website_url"] = "[[softurl]]/"; 

// Website Description
$config["meta_description"] = "Collection of the best videos on the internet";

// Website Keywords
$config["meta_keywords"] = "internet videos, insteresting videos, viral videos, movies";

// Youtube Developer Key
$config["yt_dev_key"] = "";

### Player Settings ###

// [true / false] if false, will play in a regular flash player 
$config["youtube_player"] = true; 


// [true / false] -> only if using custom player			 	 
$config["enable_player_playlist"] = false; 


### Cache Settings ###

$config["xml_cache_enable"] = true;


// Cache XML Directory Path with slash
$config["xml_cache_dir"] = "cache_xml/";		  


// Cache HTML Directory Path with slash
$config["html_cache_dir"] = "cache_html/";	


$config["xml_cache_timeout"] = 86400;


// [1 to 50] how often cache tags on every page load
$config["tags_cache_timeout"] = 5; 
  	
		
// [1 to 50] how often cache stats on every page load			 
$config["stats_cache_timeout"] = 20; 


// [1 to 50] how often cache new videos for a specific tag, 1 will cache on every page load						 
$config["rss_cache_timeout"] = 50;    


### Tags Settings ###


// Maximum tags to display						 
$config["tags_max_display"] = 100; 

//tags font size settings
$config["tag_max_size"] = 250;
$config["tag_min_size"] = 90;


### Display Settings ###

// [on / off] 
$config["default_filter_value"] = "on";

$config["list_per_page"] = 12;

$config["list_on_home_page"] = 12;

$config["search_videos_view_mode"] = "detailed";

$config["home_videos_view_mode"] = "detailed";

$config["user_uploaded_list_per_page"] = 12;

$config["user_favorites_list_per_page"] = 12;

$config["related_videos_position"] = "sidebar";

$config["active_template"] = "moderntube";

### Advertising ###

$config["ads_468_top"] = "<a href=\"http://www.alurian.com/php-video-script/\" target=\"_blank\">
<img src=\"http://www.alurian.com/ads/images/468x60Banner.png\" border=\"0\">
</a>";

$config["ads_468"] = "<a href=\"http://www.alurian.com/php-video-script/\" target=\"_blank\">
<img src=\"http://www.alurian.com/ads/images/468x60Banner2.png\" border=\"0\">
</a>";

$config["ads_728"] = "<a href=\"http://www.alurian.com/php-video-script/\" target=\"_blank\">
<img src=\"http://www.alurian.com/ads/images/728x90Banner.png\" border=\"0\">
</a>";

$config["ads_300"] = "<a href=\"http://www.alurian.com/php-video-script/\" target=\"_blank\">
<img src=\"http://www.alurian.com/ads/images/300x250Banner.png\" border=\"0\">
</a>";


### Tracking Code ###

$config["tracking_code"] = "";


?>