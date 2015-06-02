<?php
/**
 * @file
 * Contains all the blocks for this site.
 */


/**
 * Implements hook_block_info().
 * @return type
 */
function rose_social_block_info() {

  $blocks['social_tweets'] = array(
    'info' => t('Social: tweets'),
    'cache' => DRUPAL_NO_CACHE,
  );

  $blocks['social_pocket'] = array(
    'info' => t('Social: pocket'),
    'cache' => DRUPAL_NO_CACHE,
  );

  $blocks['social_lastfm'] = array(
    'info' => t('Social: lastfm'),
    'cache' => DRUPAL_NO_CACHE,
  );

  $blocks['social_something'] = array(
    'info' => t('Social: something'),
    'cache' => DRUPAL_NO_CACHE,
  );

  return $blocks;
}

/**
* Implements hook_block_view().
*/
function rose_social_block_view($delta = '') {

  $block = array();

  //The $delta parameter tells us which block is being requested.
  switch ($delta) {
    case 'social_pocket':
      $block['subject'] = 'I read';
      $block['content'] = rose_social_generate_social_pocket();
      break;
    case 'social_lastfm':
      $block['subject'] = 'I listen';
      $block['content'] = rose_social_generate_social_lastfm();
      break;
    case 'social_something':
      $block['subject'] = NULL;
      $block['content'] = rose_social_generate_social_something();
      break;
    case 'social_tweets':
      $block['subject'] = 'I tweet';
      $block['content'] = rose_social_generate_social_tweets();
      break;
  }

  return $block;
}


/**
* Block callback to generate social blocks.
*/
function rose_social_generate_social_pocket() {

  $use_existing = false;

  // Only get new data if there's never been data or it's been over an hour.
  if (variable_get('pocket_updated') == NULL || time() >= (variable_get('pocket_updated') + 3600)) {
    // Fetch new data.
    if ($pocket_data = _rose_fetch_pocket_data()) {

      $article = $pocket_data->channel->item;

      $article_title = (string)$article->title;
      $article_url = (string)$article->link;

      variable_set('pocket_article_title', $article_title);
      variable_set('pocket_url', $article_url);

      // Update the time when last updated.
      variable_set('pocket_updated', time());
    }
    else {
      $use_existing = true;
    }
  }
  else {
    $use_existing = true;
  }

  if ($use_existing == true) {
    // Use the existing data.
    $article_title = variable_get('pocket_article_title');
    $article_url = variable_get('pocket_url');
  }

  $pocket_block = array(
    'content' => array(
      '#type' => 'markup',
      '#prefix' => '<span class="article">',
      '#markup' => '<a href="' . $article_url . '">' . $article_title . '</a>',
      '#suffix' => '</span>'
    ),
  );

  // Return a lovely render array.
  return $pocket_block;
}

/**
* Block callback to generate social blocks
*/
function rose_social_generate_social_lastfm() {

  $use_existing = false;
  $track_url = '';
  $album_art_url = '';
  $album_alt_text = '';
  $track_name = '';
  $artist = '';

  // Only get new data if there's never been data or it's been over an hour.
  if (variable_get('lastfm_updated') == NULL || time() >= (variable_get('lastfm_updated') + 3600)) {
    // Fetch new data.
    if ($lastfm_data = _rose_fetch_lastfm_data()) {

      $track = $lastfm_data->recenttracks->track[0];

      if (!empty($track->image[1]->{'#text'})) {
        $album_art_url = $track->image[1]->{'#text'};
        $album_alt_text = $track->artist->{'#text'} . ', ' . $track->album->{'#text'} . ' album art';
      }
      else {
        $album_art_url = '/' . drupal_get_path('theme', 'rosenichols') . '/img/album-art-placeholder.gif';
        $album_alt_text = 'Album art placeholder';
      }

      $track_url = $track->url;
      $artist = $track->artist->{'#text'};
      $track_name = $track->name;

      variable_set('lastfm_track_url', $track->url);
      variable_set('lastfm_artist', $track->artist->{'#text'});
      variable_set('lastfm_album_art_url', $album_art_url);
      variable_set('lastfm_album_alt_text', $album_alt_text);
      variable_set('lastfm_track', $track->name);

      // Update the time when last updated.
      variable_set('lastfm_updated', time());
    }
    else {
      $use_existing = true;
    }
  }
  else {
    $use_existing = true;
  }

  if ($use_existing == true) {
    // Use the existing data
    $track_url = variable_get('lastfm_track_url');
    $artist = variable_get('lastfm_artist');
    $album_art_url = variable_get('lastfm_album_art_url');
    $album_alt_text = variable_get('lastfm_album_alt_text');
    $track_name = variable_get('lastfm_track');
    $img_url = variable_get('lastfm_img_url');
  }

  $lastfm_block = array(
    'album' => array(
      '#type' => 'markup',
      '#prefix' => '<a href="' . $track_url . '" class="album-art">',
      '#markup' => '<img src="' . $album_art_url . '" alt="' . $album_alt_text . '">',
      '#suffix' => '</a>'
    ),
    'track_name' => array(
      '#type' => 'markup',
      '#prefix' => '<div class="track-details">',
      '#markup' => '<span class="track-name">' . $track_name . '</span>',
    ),
    'track_artist' => array(
      '#type' => 'markup',
      '#markup' => '<span class="track-artist">' . $artist . '</span>',
      '#suffix' => '</div>'
    )
  );

  // Return a lovely render array.
  return $lastfm_block;
}

/**
* Block callback to generate social blocks
*/
function rose_social_generate_social_something() {

  return '<div id="i-something" class="social">
    <h2 class="block-title">I write</h2>
    <div class="content">Vivamus sagittis lacus vel augue laoreet rutrum faucibus dolor auctor.</div>
    <footer><a href="https://twitter.com/rosenichols">Read my writing</a></footer>
  </div>';

}

/**
* Block callback to generate social blocks
*/
function rose_social_generate_social_tweets() {
  $tweets = views_embed_view('tweets', 'rose_tweets');

  return $tweets;
}

/**
 * Helper for Lastfm block.
 *
 */
function _rose_fetch_lastfm_data() {
  $data = json_decode(file_get_contents('http://ws.audioscrobbler.com/2.0/?format=json&method=user.getrecenttracks&limit=2&user=RoseNichols&api_key=1518a982f9d78ee7faf7eddcd8d76f1b'));

  return $data;
}

/**
 * Helper for Pocket block.
 *
 */
function _rose_fetch_pocket_data() {
  $data = simplexml_load_file('http://getpocket.com/users/rosenichols.uk/feed/all');

  return $data;
}
