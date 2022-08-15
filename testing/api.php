<?php
 use jcobhams\NewsApi\NewsApi;

 $newsapi = new NewsApi("https://newsapi.org/v2/top-headlines?country=gb&category=sports&apiKey=ecdb75bf03494e40899f49ea4edbcdd1");

 $all_articles = $newsapi->getEverything($q, $sources, $domains, $exclude_domains, $from, $to, $language, $sort_by,  $page_size, $page);

?>