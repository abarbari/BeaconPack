<?php

	include('includes/connection_helper.php');
	
	$map_url = ""; // RSS/XML Website URL
	
	if(( ($response_xml_data = file_get_contents($map_url)) === false))
	{
		echo "Error: Website unavailable for grabbing new content. \n";
	}
	else
	{
		libxml_use_internal_errors(true);
		$rss_news = simplexml_load_string($response_xml_data);
		if(!$rss_news)
		{
			echo "Error: Website contents are in an improper format. \n";
			foreach(libxml_get_errors() as $error)
			{
				echo $error->message . "\n";
			}
		}
		else
		{
			mysqli_query($con, "TRUNCATE data");
			foreach($rss_news -> channel -> item as $news_info)
			{
				//Use to check that the parser is grabing the correct titles
				//echo $news_info->title."\n";
				
				mysqli_query($con, "INSERT INTO data (title, link, description, pubDate, source) VALUES 
					('$news_info->title', '$news_info->guid', '$news_info->description', '$news_info->pubDate', '')");
			}
		}
	}
	mysqli_close($con);
?>
