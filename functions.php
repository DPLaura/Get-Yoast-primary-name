<?php 
/* Function to get the mark as primary Yoast term name
*  $taxonomy is the taxonomy name you're looking for
*  $id will be $post->ID'
*/
function get_primaryTerm($taxonomy,$id) {
     $primary_term = new WPSEO_Primary_Term($taxonomy,$id); 
     $term = get_term_by('id',$primary_term->get_primary_term(),$taxonomy);
     return $term->name;     
}