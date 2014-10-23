<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <title></title>
    <link rel="stylesheet" href="css/miniproject3.css" type="text/css" media="screen" />
  </head>
  <body>
    
    <?php
    if (isset($_GET['lvl'])) {
      $lvl = urlencode($_GET['lvl']);
    }
    else {
      $lvl = '1';
    }
      
    if (isset($_GET['area'])) {
      $area = urlencode($_GET['area']);
    }
    else {
      $area = 's-asia';
    }
    
    if (isset($_GET['type'])) {
      $type = urlencode($_GET['type']);
    }
    else {
      $type = 'pop';
    }
    ?>
    
    <div id="backhome"><p><a href="index.php">—Back to index</a></p></div>
    
    <div id="wrapper">
    
    <h1>Climate Change Data Visualisation</h1>
    
    <p>Sometimes facts about climate change can feel like a stream of confusing numbers. With 1022 people/mi&#0178;, South Asia is one of the most densely populated areas of the world. Ever wondered what the data shows will be the effect on the population and land mass with rising sea levels in this area?</p>
    
    <p>Choose a water level (in metres) and data type to compare.</p>
    
    <div id="wrapper_watercontainer">
      
      <div id="waterlevel_5"><a href="?type=<?php echo $type ?>&lvl=5" <?php if ($lvl == 5) echo 'style="background-position: left bottom"' ?>></a></div><br/>
      <div id="waterlevel_4"/><a href="?type=<?php echo $type ?>&lvl=4" <?php if ($lvl == 4) echo 'style="background-position: left bottom"' ?>></a></div><br/>
      <div id="waterlevel_3"/><a href="?type=<?php echo $type ?>&lvl=3" <?php if ($lvl == 3) echo 'style="background-position: left bottom"' ?>></a></div><br/>
      <div id="waterlevel_2"/><a href="?type=<?php echo $type ?>&lvl=2" <?php if ($lvl == 2) echo 'style="background-position: left bottom"' ?>></a></div><br/>
      <div id="waterlevel_1"/><a href="?type=<?php echo $type ?>&lvl=1" <?php if ($lvl == 1) echo 'style="background-position: left bottom"' ?>></a></div><br/>
      
    </div>
<!--    
    <p>First choose an area...</p>
    
    <div id="area_choice">
      <a href="?lvl=<?php echo $lvl ?>&type=<?php echo $type ?>&area=lat-am">Latin America and Caribbean</a>
      <a href="?lvl=<?php echo $lvl ?>&type=<?php echo $type ?>&area=s-asia">South Asia</a>
    </div>-->
    
    <div id="type_choice">
      <p>Data types:
      <a href="?type=pop&lvl=<?php echo $lvl ?>" <?php if ($type == pop) echo 'style="text-decoration: underline; color: #9A1061"' ?>/>Population</a> (in millions) or 
      <a href="?type=area&lvl=<?php echo $lvl ?>" <?php if ($type == area) echo 'style="text-decoration: underline; color: #9A1061"' ?>/>Area</a> (in km&#0178;)
      </p>
    </div>
    
    <div id="data_container">
      
      <img src="images/<?php echo $area ?>-<?php echo $type ?>-<?php echo $lvl ?>.png" class="<?php echo $area ?>-<?php echo $type ?>-1"/></br>
      <img src="images/<?php echo $area ?>-pie-<?php echo $type ?>-<?php echo $lvl ?>.png" class="<?php echo $area ?>-pie-<?php echo $type ?>-5" />
      
      <br class="clear" />
      
      <div id="barchartinfo">
        <p style="font-weight: bold"><?php if ($type == 'pop') echo 'Population'; else echo 'Area' ?> affected with <?php echo $lvl ?>m water rise</p>
        
       <?php
       
       if ($type == 'pop')
       
       if ($lvl == 1)
  echo '<p>5.9 million out of 1.6 billion...</p>';
elseif ($lvl == 2)
  echo '<p>10.2 million out of 1.6 billion...</p>';
elseif ($lvl == 3)
  echo '<p>17.8 million out of 1.6 billion...</p>';
elseif ($lvl == 4)
  echo '<p>22.1 million out of 1.6 billion...</p>';
elseif ($lvl == 5)
  echo '<p>39.5 million out of 1.6 billion...</p>';
else
  echo 'Error';


elseif ($type == 'area') 
  if ($lvl == 1)
  echo '<p>12,362km&#0178; out of 4.4 million km&#0178;...</p>';
elseif ($lvl == 2)
  echo '<p>21,983km&#0178; out of 4.4 million km&#0178;...</p>';
elseif ($lvl == 3)
  echo '<p>35,696km&#0178; million out of 4.4 million km&#0178;...</p>';
elseif ($lvl == 4)
  echo '<p>52,207km&#0178; out of 4.4 million km&#0178;...</p>';
elseif ($lvl == 5)
  echo '<p>69,225km&#0178; out of 4.4 million km&#0178;...</p>';
else
  echo 'Error';

else
  echo 'Error';
  
  ?>
        
        
        
      </div>
      
      <div id="piechartinfo">
        
        <?php
       
       if ($type == 'pop')
       
       if ($lvl == 1)
  echo '<p>...which represents less than 1% of the population.</p>';
elseif ($lvl == 2)
  echo '<p>...which represents around 1% of the population.</p>';
elseif ($lvl == 3)
  echo '<p>...which represents around 1% of the population.</p>';
elseif ($lvl == 4)
  echo '<p>...which represents around 1% of the population.</p>';
elseif ($lvl == 5)
  echo '<p>...which represents around 2% of the population.</p>';
else
  echo 'Error';


elseif ($type == 'area') 
  if ($lvl == 1)
  echo '<p>...which represents less than 1% of the total area.</p>';
elseif ($lvl == 2)
  echo '<p>...which represents less than 1% of the total area.</p>';
elseif ($lvl == 3)
  echo '<p>...which represents around 1% of the total area.</p>';
elseif ($lvl == 4)
  echo '<p>...which represents around 1% of the total area.</p>';
elseif ($lvl == 5)
  echo '<p>...which represents around 2% of the total area.</p>';
else
  echo 'Error';

else
  echo 'Error';
  
  ?>
      </div>
     

      
    </div>
   
    </div>
    <br class="clear" />
    <p id="footer">&copy; 09019365</p>
  </body>
</html>
