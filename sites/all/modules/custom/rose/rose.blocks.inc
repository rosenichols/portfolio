<?php
/**
 * @file
 * Contains all the blocks for this site.
 */


/**
 * Implements hook_block_info().
 * @return type
 */
function rose_block_info() {

  $blocks['logo'] = array(
    'info' => t('Logo'),
    'cache' => DRUPAL_CACHE_PER_ROLE,
  );

  $blocks['cv_references'] = array(
    'info' => t('CV references'),
    'cache' => DRUPAL_CACHE_PER_ROLE,
  );

  $blocks['testimonials'] = array(
    'info' => t('Testimonials'),
    'cache' => DRUPAL_CACHE_PER_ROLE,
  );

  $blocks['sub_menu'] = array(
    'info' => t('Sub menu'),
    'cache' => DRUPAL_CACHE_PER_ROLE,
  );

  $blocks['feed_icon'] = array(
    'info' => t('Feed icon'),
    'cache' => DRUPAL_CACHE_PER_ROLE,
  );

  $blocks['homepage_intro'] = array(
    'info' => t('Homepage intro'),
    'cache' => DRUPAL_CACHE_PER_ROLE,
  );

  $blocks['copyright'] = array(
    'info' => t('Copyright'),
    'cache' => DRUPAL_CACHE_PER_ROLE,
  );

  $blocks['homepage_services'] = array(
    'info' => t('Homepage services'),
    'cache' => DRUPAL_CACHE_PER_ROLE,
  );

  $blocks['main_menu'] = array(
    'info' => t('Main menu'),
    'cache' => DRUPAL_CACHE_PER_ROLE,
  );

  $blocks['contact_intro'] = array(
    'info' => t('Contact intro'),
    'cache' => DRUPAL_CACHE_PER_ROLE,
  );

  $blocks['cv_sidebar_status'] = array(
    'info' => t('CV sidebar status'),
    'cache' => DRUPAL_CACHE_PER_ROLE,
  );

  $blocks['cv_sidebar_education'] = array(
    'info' => t('CV sidebar education'),
    'cache' => DRUPAL_CACHE_PER_ROLE,
  );

  $blocks['about_hobbies'] = array(
    'info' => t('About page hobbies'),
    'cache' => DRUPAL_CACHE_PER_ROLE,
  );

  $blocks['about_hobbies_heading'] = array(
    'info' => t('About page hobbies heading'),
    'cache' => DRUPAL_CACHE_PER_ROLE,
  );

  $blocks['project_banner'] = array(
    'info' => t('Project banner'),
    'cache' => DRUPAL_CACHE_PER_ROLE,
  );

  $blocks['project_side_visit_site'] = array(
    'info' => t('Project sidebar: visit site'),
    'cache' => DRUPAL_CACHE_PER_ROLE,
  );

  $blocks['project_side_summary'] = array(
    'info' => t('Project side: summary'),
    'cache' => DRUPAL_CACHE_PER_ROLE,
  );

  $blocks['project_side_accreditation'] = array(
    'info' => t('Project side: accreditation'),
    'cache' => DRUPAL_CACHE_PER_ROLE,
  );

  $blocks['project_side_further_reading'] = array(
    'info' => t('Project side: further reading'),
    'cache' => DRUPAL_CACHE_PER_ROLE,
  );

  $blocks['project_side_contact'] = array(
    'info' => t('Project side: get in touch'),
    'cache' => DRUPAL_CACHE_PER_ROLE,
  );

  $blocks['tools_trade'] = array(
    'info' => t('Tools of my trade'),
    'cache' => DRUPAL_CACHE_PER_ROLE,
  );

  $blocks['home_social_blocks'] = array(
    'info' => t('Homepage social blocks'),
    'cache' => DRUPAL_CACHE_PER_ROLE,
  );

  return $blocks;
}

/**
* Implements hook_block_view().
*/
function rose_block_view($delta = '') {

  $block = array();

  //The $delta parameter tells us which block is being requested.
  switch ($delta) {
    case 'logo':
      $block['subject'] = NULL;
      $block['content'] = rose_generate_logo();
      break;
    case 'cv_references':
      $block['subject'] = NULL;
      $block['content'] = rose_generate_cv_references();
      break;
    case 'testimonials':
      $block['subject'] = 'What people are saying about me';
      $block['content'] = rose_generate_testimonials();
      break;
    case 'sub_menu':
      $block['subject'] = t('Sub menu');
      $block['content'] = rose_generate_sub_menu();
      break;
    case 'feed_icon':
      $block['subject'] = NULL;
      $block['content'] = rose_generate_feed_icon();
      break;
    case 'homepage_intro':
      $block['subject'] = NULL;
      $block['content'] = rose_generate_homepage_intro();
      break;
    case 'copyright':
      $block['subject'] = NULL;
      $block['content'] = rose_generate_copyright();
      break;
    case 'homepage_services':
      $block['subject'] = NULL;
      $block['content'] = rose_generate_homepage_services();
      break;
    case 'main_menu':
      $block['subject'] = NULL;
      $block['content'] = rose_generate_main_menu();
      break;
    case 'contact_intro':
      $block['subject'] = NULL;
      $block['content'] = rose_generate_contact_intro();
      break;
    case 'cv_sidebar_status':
      $block['subject'] = NULL;
      $block['content'] = rose_generate_cv_sidebar_status();
      break;
    case 'cv_sidebar_education':
      $block['subject'] = NULL;
      $block['content'] = rose_generate_cv_sidebar_education();
      break;
    case 'about_hobbies':
      $block['subject'] = NULL;
      $block['content'] = rose_generate_about_hobbies();
      break;
    case 'about_hobbies_heading':
      $block['subject'] = NULL;
      $block['content'] = rose_generate_about_hobbies_heading();
      break;
    case 'project_banner':
      $block['subject'] = NULL;
      $block['content'] = rose_generate_project_banner();
      break;
    case 'project_side_visit_site':
      $block['subject'] = NULL;
      $block['content'] = rose_generate_project_side_visit_site();
      break;
    case 'project_side_summary':
      $block['subject'] = NULL;
      $block['content'] = rose_generate_project_side_summary();
      break;
    case 'project_side_accreditation':
      $block['subject'] = NULL;
      $block['content'] = rose_generate_project_side_accreditation();
      break;
    case 'project_side_further_reading':
      $block['subject'] = NULL;
      $block['content'] = rose_generate_project_side_further_reading();
      break;
    case 'project_side_contact':
      $block['subject'] = NULL;
      $block['content'] = rose_generate_project_side_contact();
      break;
    case 'tools_trade':
      $block['subject'] = 'The tools of my trade';
      $block['content'] = rose_generate_tools_trade();
      break;
    case 'home_social_blocks':
      $block['subject'] = NULL;
      $block['content'] = rose_generate_home_social_blocks();
      break;
  }
  return $block;
}



function rose_generate_logo() {
  return '<span><a href="/">Rose Nichols</a></span>';
}

function rose_generate_cv_references() {
  return '
  <section>
    <h3>Employment</h3>
    <p><a href="http://uk.linkedin.com/in/rosenicholsuk/">Visit my profile on LinkedIn</a></p>
  </section>
  <section>
    <h3>References</h3>
    <p>These are available on request.<br />
    <a href="/contact">Contact me</a></p>
  </section>';

}

function rose_generate_testimonials() {
  return '
      <blockquote>
        <h3><a href="http://www1.uwe.ac.uk/students/studysupport/peerassistedlearning.aspx" target="_blank">Fiorella Bettin</a></h3>
        <p>I have known Rose as her PAL Supervisor. She has proved to be a motivated, responsible and highly creative individual. I would most definitely re-employ Rose if I had the chance.</p>
      </blockquote>

      <blockquote>
        <h3><a href="http://people.uwe.ac.uk/Pages/person.aspx?accountname=campus%5Cpa-hulbert" target="_blank">Paul Hulbert</a></h3>
        <p>I taught Rose in each year of her [course at UWE]. Overall she was an excellent student, with particular strengths in complex areas such as information architecture and program development.</p>
        <p>She took part in several major team projects, carrying out real-life work for clients both inside and outside the university. She proved to be a good communicator and team worker, successfully integrating teams of various professional backgrounds.</p>
      </blockquote>';

}

/**
* Block callback to generate sub menu
*/
function rose_generate_sub_menu() {
  // Menu block parameters.
  $config = array(
    'menu_name' => 'main-menu',
    'parent_mlid' => 0,
    'sort' => FALSE,
    'follow' => 0,
    'level' => 2,
    'depth' => 1,
    'expanded' => TRUE,
    'title_link' => FALSE,
    'delta' => 0,
  );

  // Build the menu tree via menu block module.
  $menu_tree = menu_tree_build($config);

  if (!empty($menu_tree['content']['#content'])) {
   // Return the renderable tree.
    return $menu_tree['content']['#content'];
  }
  else {
    return NULL;
  }
}


/**
* Block callback to generate homepage intro
*/
function rose_generate_homepage_intro() {
  return 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam porta sem malesuada magna mollis euismod. Donec sed odio dui. Aenean lacinia bibendum nulla sed consectetur.';
}





/**
* Block callback to generate copyright
*/
function rose_generate_copyright() {
  return '&copy; 2014 Rose Nichols. All rights reserved.';
}

function rose_generate_homepage_services() {

   // Start off a new entity field query.
  $query = new EntityFieldQuery();

  // Build the query.
  $query->entityCondition('entity_type', 'node')
  ->entityCondition('bundle', 'homepage_service')
  ->propertyOrderBy('created', 'DESC')
  ->range(0, 3)
  ->propertyCondition('status', 1);

  // execute the query.
  $result = $query->execute();

  // If there were any results.
  if (isset($result['node'])) {
    $nid = array_keys($result['node']);
  } else {
    // No results, return NULL whcih hides the block completely
    return NULL;
  }

  // At this point we have a list of node ids in the $nid variable.
  // Load up all the nodes at once.
  $nodes = node_load_multiple($nid);

  // return the rendered node views using the teaser display view mode.
  return drupal_render(node_view_multiple($nodes,'full'));
}



/**
* Block callback to generate main menu
*/
function rose_generate_main_menu() {
  // Menu block parameters.
  $config = array(
    'menu_name' => 'main-menu',
    'parent_mlid' => 0,
    'sort' => FALSE,
    'follow' => 0,
    'level' => 1,
    'depth' => 1,
    'expanded' => TRUE,
    'title_link' => FALSE,
    'delta' => 0,
  );

  // Build the menu tree via menu block module.
  $menu_tree = menu_tree_build($config);

  if (!empty($menu_tree['content']['#content'])) {
    // Return the renderable tree.
    return '<button id="menu-toggle" class="closed">Menu</button>' . drupal_render($menu_tree['content']['#content']);
  }
  else {
    return NULL;
  }
}



/**
* Block callback to generate last fm feed
*/
function _rose_generate_last_fm() {

  $lastfm_raw = json_decode(file_get_contents('http://ws.audioscrobbler.com/2.0/?format=json&method=user.getrecenttracks&limit=3&user=RoseNichols&api_key=1518a982f9d78ee7faf7eddcd8d76f1b'));

  if (empty($lastfm_raw)) {
    return FALSE;
  }

  $tracks = '';

  foreach ($lastfm_raw->recenttracks->track as $track) {

    $track_markup = '<div class="latest-listen">';

    $track_markup .= '<a href="' . $track->url . '">';

    if (!empty($track->image[1]->{'#text'})) {
      $album_art_url = $track->image[1]->{'#text'};
      $track_alt_text = $track->artist->{'#text'} . ', ' . $track->album->{'#text'} . ' album art';
    }
    else {
      $album_art_url = '/' . drupal_get_path('theme', 'rosenichols') . '/images/album-art-placeholder.gif';
      $track_alt_text = 'Album art placeholder';
    }

    $track_markup .= '<img src="' . $album_art_url . '" alt="' . $track_alt_text . '" class="albumart" />';

    $track_markup .= '</a><div class="track details">';

    $track_markup .= '<span class="track name">' . $track->name . '</span>';

    $track_markup .= '<span class="track artist">' . $track->artist->{'#text'} . '</span>';

    $track_markup .= '</div></div>';

    $tracks .= $track_markup;

  }

  return $tracks;

}

/**
* Block callback to generate delicious feed
*/
function _rose_generate_delicious() {

  $pass = file_get_contents('/config/del.txt');

  $ch = curl_init('http://feeds.delicious.com/v2/json/rosenichols/portfolio?count=4');
  curl_setopt($ch, CURLOPT_USERPWD, 'rosenichols:' . $pass);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_TIMEOUT, 5);
  $feed_data = curl_exec($ch);
  $info = curl_getinfo($ch);
  curl_close($ch);

  kpr($info);


  if ((int)$info['http_code'] == 200) {

    $output = json_decode($feed_data);

    $articles = '';

    foreach($output as $article) {
      $article_markup = '<div class="read">';

      $article_markup .= '<span><a href="' . $article->u . '">' . $article->d . '</a></span>';

      $article_markup .= '<span class="notes">' . $article->n . '</span></div>';

      $articles .= $article_markup;
    }

  }
  else {
    // gracefully deal with error codes
     return 'My Delicious feed is unavailable right now. Boo!';
  }

  return $articles;

}

/**
* Block callback to generate social blocks
*/
function rose_generate_home_social_blocks() {
  $songs = _rose_generate_last_fm();
  $articles = _rose_generate_delicious();
  $tweets = views_embed_view('tweets', 'rose_tweets');

  return '
  <div id="i-read">
    <h2 class="block-title">I read</h2>
    <div class="content">' . $articles . '</div>
    <div class="footer">
      <a href="https://delicious.com/rosenichols">Read the entire archive</a>
    </div>
  </div>
  <div id="i-talk">
    <h2 class="block-title">I talk</h2>
    <div class="content">' . $tweets . '</div>
    <div class="footer"><a href="https://twitter.com/rosenichols">See all of my tweets</a></div>
  </div>
  <div id="i-listen">
    <h2 class="block-title">I listen</h2>
    <div class="content">' . $songs . '</div>
    <div class="footer"><a href="http://www.last.fm/user/RoseNichols">Visit my Last.fm profile</a></div>
  </div>
  ';
}


/**
* Block callback to generate contact intro
*/
function rose_generate_contact_intro() {
  return '<div class="contact-info">
    <div class="email"><span class="email-address">hello at rose nichols dot co dot uk</span></div>
    <div class="linkedin"><a href="http://uk.linkedin.com/in/rosenicholsuk">/rosenichols-uk</a></div>
    <div class="twitter last"><a href="https://twitter.com/rosenichols">@rosenichols</a></div>
    </div>';
}


/**
* Block callback to generate cv sidebar content
*/
function rose_generate_cv_sidebar_status() {
  return '<div class="status-wrapper">
    <div class="status-employment">
      <div class="heading">
        <h3>I\'m currently...</h3>
      </div>
      <div class="content">
        <ul>
          <li>Looking for full-time employment</li>
          <li>Available for freelance work</li>
        </ul>
      </div>
    </div>
    <div class="status-skills">
      <div class="heading">
        <h3>Looking to do more...</h3>
      </div>
      <div class="content">
        <ul>
          <li>Drupal development</li>
          <li>Front-end development</li>
          <li>Web design</li>
        </ul>
      </div>
    </div>
    <div class="status-skills">
      <div class="heading">
        <h3>Also interested in...</h3>
      </div>
      <div class="content">
        <ul>
          <li>Usability/UX</li>
          <li>Copywriting</li>
          <li>Content strategy</li>
        </ul>
      </div>
    </div>
  </div>';
}


/**
* Block callback to generate cv sidebar content
*/
function rose_generate_cv_sidebar_education() {
  return '
    <div class="uni3">
      <div class="heading">
        <h3>Final Year of Uni</h3>
        <span class="cvsidebaravg">Avg: 67% including...</span>
      </div>
      <div class="content">
        <table class="results">
          <tbody>
            <tr>
              <td class="result">71</td>
              <td>Digital Media Project</td>
            </tr>
            <tr>
              <td>68</td>
              <td>Interaction Design</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="uni2">
      <div class="heading">
        <h3>2nd Year of Uni</h3>
        <span class="cvsidebaravg">Avg: 69% including...</span>
      </div>
      <div class="content">
        <table class="results">
          <tbody>
            <tr>
              <td class="result">72</td>
              <td>Human-Computer Interaction</td>
            </tr>
            <tr>
              <td>87</td>
              <td>Information Architecture</td>
            </tr>
            <tr>
              <td>75</td>
              <td>Data, Schemas &amp; Applications</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="uni1">
      <div class="heading">
        <h3>1st Year of Uni</h3>
        <span class="cvsidebaravg">Avg: 74% including...</span>
      </div>
      <div class="content">
        <table class="results">
          <tbody>
            <tr>
               <td class="result">82</td>
               <td>Introduction to Program Development</td>
            </tr>
            <tr>
               <td>78</td>
               <td>Systems Development</td>
            </tr>
            <tr>
               <td>74</td>
               <td>Media Technologies</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="a-levels">
      <div class="heading">
        <h3>A Levels</h3>
        <span class="cvsidebaravg">4 A-B including...</span>
      </div>
      <div class="content">
        <table class="results">
          <tbody>
            <tr>
               <td class="result">A</td>
               <td>English Literature</td>
            </tr>
            <tr>
               <td>A</td>
               <td>Computing (AS)</td>
            </tr>
            <tr>
               <td>B</td>
               <td>Law (AS)</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
    <div class="gcses">
      <div class="heading">
        <h3>GCSEs</h3>
        <span class="cvsidebaravg">11 A*-A including...</span>
      </div>
      <div class="content">
        <table class="results">
          <tbody>
            <tr>
               <td class="result">A*A</td>
               <td>English Lit/Lang</td>
            </tr>
            <tr>
               <td>AA</td>
               <td>Science</td>
            </tr>
            <tr>
               <td>A</td>
               <td>Art</td>
            </tr>
            <tr>
               <td>A*</td>
               <td>French</td>
            </tr>
          </tbody>
        </table>
      </div>
    </div>
  ';
}


/**
* Block callback to generate about hobbies heading content
*/
function rose_generate_about_hobbies_heading() {
  return '<h2>What I get up to in my spare time</h2>';
}


/**
* Block callback to generate about hobbies content
*/
function rose_generate_about_hobbies() {
  return '
  <div class="about-hobby piano">
    <span class="element-invisible">Piano</span>
  </div>
  <div class="about-hobby painting">
    <span class="element-invisible">Painting</span>
  </div>
  <div class="about-hobby squash">
    <span class="element-invisible">Squash</span>
  </div>
  <div class="about-hobby reading">
    <span class="element-invisible">Reading</span>
  </div>';
}


/**
* Block callback to generate project banner
*/
function rose_generate_project_banner() {
  $nid = arg(1);
  $node = node_load($nid);

  if (!empty($node->field_project_banner)) {
    return '
    <div class="project-banner" style="background: url(\'' . file_create_url($node->field_project_banner['und'][0]['uri']) . '\') top center no-repeat; height: 315px;">
      <span class="element-invisible">Project banner</span>
      <div class="title">' . $node->title . '</div>
    </div>';
  }

  return NULL;
}


/**
* Block callback to generate project sidebar
*/
function rose_generate_project_side_visit_site() {
  $nid = arg(1);
  $node = node_load($nid);

  if (!empty($node->field_project_visit_link['und'][0]['url'])) {
    return '<a href="/' . $node->field_project_visit_link['und'][0]['url'] . '" class="project-visit-site">' . $node->field_project_visit_link['und'][0]['title'] . '</a>';
  }

  return NULL;
}

/**
* Block callback to generate project sidebar
*/
function rose_generate_project_side_summary() {
  $nid = arg(1);
  $node = node_load($nid);

  if (!empty($node->field_project_intro)) {
    return '<div class="project-sidebar summary">
    <div class="heading">
    <h3>Summary</h3>
    </div>
    <div class="content">
    ' . $node->field_project_intro['und'][0]['safe_value'] . '
    </div>
    </div>';
  }

  return NULL;
}

/**
* Block callback to generate project sidebar
*/
function rose_generate_project_side_accreditation() {
  $nid = arg(1);
  $node = node_load($nid);

  if (!empty($node->field_project_accreditation)) {
    return '<div class="project-sidebar accreditation">
    <div class="heading">
    <h3>Accreditation</h3>
    </div>
    <div class="content">
    ' . $node->field_project_accreditation['und'][0]['value'] . '
    </div>
    </div>';
  }

  return NULL;
}

/**
* Block callback to generate project sidebar
*/
function rose_generate_project_side_further_reading() {
  $nid = arg(1);
  $node = node_load($nid);

  if (!empty($node->field_project_reading)) {
    return '<div class="project-sidebar further-reading">
    <div class="heading">
    <h3>Further reading</h3>
    </div>
    <div class="content">' . $node->field_project_reading['und'][0]['safe_value'] . '</div>
    </div>';
  }

  return NULL;
}

/**
* Block callback to generate project sidebar
*/
function rose_generate_project_side_contact() {
  $nid = arg(1);
  $node = node_load($nid);

  if (!empty($node)) {
    return '<div class="project-sidebar contact">
    <div class="heading">
    <h3>Get in touch</h3>
    </div>
    <div class="content">
      <a href="/contact?sub=' . strtolower(drupal_clean_css_identifier($node->title)) . '">Contact me about this project</a>
    </div>
    </div>';
  }

  return NULL;
}


/**
* Block callback to generate tools of my trade
*/
function rose_generate_tools_trade() {
    return '
  <div class="tools-trade macbook">
    <span class="element-invisible">MacBook Pro</span>
  </div>
  <div class="tools-trade sass">
    <span class="element-invisible">Sass</span>
  </div>
  <div class="tools-trade drupal">
    <span class="element-invisible">Drupal</span>
  </div>
  <div class="tools-trade photoshop">
    <span class="element-invisible">Photoshop</span>
  </div>
  <div class="tools-trade graphics-tablet">
    <span class="element-invisible">Graphics tablet</span>
  </div>
  <div class="tools-trade sublime-text">
    <span class="element-invisible">Sublime Text 2</span>
  </div>';
}
