//Social sharing Steph

function bigambitions_social_sharing_buttons($content) {
	global $post;
	if(is_singular(post) || is_home()){
		$bigambitionsURL = urlencode(get_permalink());
 $bigambitionsTitle = str_replace( ' ', '%20', get_the_title());
		
		
		
 
		// Build the url
		$twitterURL = 'https://twitter.com/intent/tweet?text='.$bigambitionsTitle.'&amp;url='.$bigambitionsURL.'&amp;via=bigambitions';
		$facebookURL = 'https://www.facebook.com/sharer/sharer.php?u='.$bigambitionsURL;
		$googleURL = 'https://plus.google.com/share?url='.$bigambitionsURL;
		$whatsappURL = 'whatsapp://send?text='.$bigambitionsTitle . ' ' . $bigambitionsURL;
		$linkedInURL = 'https://www.linkedin.com/shareArticle?mini=true&url='.$bigambitionsURL.'&amp;title='.$bigambitionsTitle;
                // Thumb for pinterest
                $bigambitionsThumbnail = wp_get_attachment_image_src( get_post_thumbnail_id( $post->ID ), 'full' );
		$pinterestURL = 'https://pinterest.com/pin/create/button/?url='.$bigambitionsURL.'&amp;media='.$bigambitionsThumbnail[0].'&amp;description='.$bigambitionsTitle;
		$content .= '<div class="bigambitions-social">';
		$content .= '<h5>SHARE ON</h5> <a class="bigambitions-link bigambitions-twitter" href="'. $twitterURL .'" target="_blank">Twitter</a>';
		$content .= '<a class="bigambitions-link bigambitions-facebook" href="'.$facebookURL.'" target="_blank">Facebook</a>';
		$content .= '<a class="bigambitions-link bigambitions-whatsapp" href="'.$whatsappURL.'" target="_blank">WhatsApp</a>';
		$content .= '<a class="bigambitions-link bigambitions-googleplus" href="'.$googleURL.'" target="_blank">Google+</a>';
		$content .= '<a class="bigambitions-link bigambitions-linkedin" href="'.$linkedInURL.'" target="_blank">LinkedIn</a>';
		$content .= '<a class="bigambitions-link bigambitions-pinterest" href="'.$pinterestURL.'" data-pin-custom="true" target="_blank">Pin It</a>';
		$content .= '</div>';
		
		return $content;
	}else{
		return $content;
	}
};
add_filter( 'the_content', 'bigambitions_social_sharing_buttons');
