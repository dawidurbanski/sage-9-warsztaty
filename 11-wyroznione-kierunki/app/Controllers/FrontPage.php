<?php

public function destinations() {
  $destinations = get_field('featured_destinations');

  $featured_destinations = [];

  foreach ($destinations as $destination) {
    $term_acf_id = "term_$destination->term_id";

    array_push($featured_destinations, (object) [
      'title' => $destination->name,
      'price_from' => get_field('price_from', $term_acf_id),
      'background' => wp_get_attachment_image(get_field('photo', $term_acf_id), 'medium', false, [
        'class' => 'c-featured-destination__background'
      ]),
      'url' => get_term_link($destination),
    ]);
  }

  return $featured_destinations;
}
