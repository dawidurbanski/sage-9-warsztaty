<?php

public function hero() {
  $offers = get_field('hero_featured_offers');

  if (! $offers) {
    return;
  }

  // if only on item get item of index 0, if more get random index
  $random_offer_index = count($offers) === 1 ? 0 : rand(0, count($offers) - 1);
  $post = $offers[$random_offer_index];

  return (object) [
    'title' => get_field('short_name', $post),
    'destination' => get_field('destination', $post),
    'price_from' => get_field('price_from', $post),
    'url' => get_permalink($post),
    'background' => get_the_post_thumbnail($post, 'medium_large', [
      'class' => 'c-hero__background'
    ]),
  ];
}
