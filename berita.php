<?php
								function rip_tags($string) { 
								    
								    // ----- remove HTML TAGs ----- 
								    $string = preg_replace ('/<[^>]*>/', ' ', $string); 
								    
								    // ----- remove control characters ----- 
								    $string = str_replace("\r", '', $string);    // --- replace with empty space
								    $string = str_replace("\n", ' ', $string);   // --- replace with space
								    $string = str_replace("\t", ' ', $string);   // --- replace with space
								    
								    // ----- remove multiple spaces ----- 
								    $string = trim(preg_replace('/ {2,}/', ' ', $string));
								    
								    return $string; 

								}
								
								$opts = array(
    									'http' => array(
      									'user_agent' => 'PHP libxml agent',
    									)
								);

								$context = stream_context_create($opts);					
								libxml_set_streams_context($context);

								$rss = new DOMDocument();
								$rss->load('http://diklatprofesi.com/wp-berita/feed/');
						
								$feed = array();
								foreach ($rss->getElementsByTagName('item') as $node) {
									$htmlStr = $node->getElementsByTagName('description')->item(0)->nodeValue;
  									$html = new DOMDocument(); 
  									libxml_use_internal_errors(true);       
  									$html->loadHTML($htmlStr);
  									libxml_use_internal_errors(false);
									//get the first image tag from the description HTML
        							$imgTag = $html->getElementsByTagName('img');
        							$img = ($imgTag->length==0)?'noimg.png':$imgTag->item(0)->getAttribute('src');
									$item = array ( 
										'title' => $node->getElementsByTagName('title')->item(0)->nodeValue,
										'desc' => $node->getElementsByTagName('description')->item(0)->nodeValue,
										'link' => $node->getElementsByTagName('link')->item(0)->nodeValue,
										'date' => $node->getElementsByTagName('pubDate')->item(0)->nodeValue,
										'image' => $img,
									);
									array_push($feed, $item);
								}
								
								//Menampilkan RSS FEED (maksimal 4)
								$limit = 4;
								for($x=0;$x<$limit;$x++) {
									$title = str_replace(' & ', ' &amp; ', $feed[$x]['title']);
									$link = $feed[$x]['link'];
									$description = substr(rip_tags($feed[$x]['desc']), 0, 150)." [...]";
									$image = $feed[$x]['image'];
									//$image = preg_replace("/(http:\/\/blog.ittoday.web.id\/wp-content\/uploads\/)([0-9]+\/[0-9]+)\/([a-zA-Z0-9_-]+)-[0-9]+x[0-9]+\.(jpg|png|jpeg|bmp)/","blog/wp-content/uploads/$2/$3.$4", $feed[$x]['image']);
									$date = date('l F d, Y', strtotime($feed[$x]['date']));
									if($x==0) echo '<div class="item active">';
									else echo '<div class="item">';
										echo '<img src="'.$image.'" alt="'.$title.'" style="opacity:0.4;filter:alpha(opacity=40);">';
										echo '<div class="carousel-caption">';
											echo '<h3><strong><a href="'.$link.'" title="'.$title.'">'.$title.'</a></strong></h3>';
											echo '<p><small><em>Posted on '.$date.'</em></small></p>';
											echo '<p><small>'.$description.'</small></p>';
											echo '<a href="'.$link.'" title="'.$title.'"><button type="button" class="btn btn-ittoday btn-danger">READ MORE</button></a>';
										echo '</div>';
									echo '</div>';
								}
							?>