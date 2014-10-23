<script language="php">
    
 function station_to_kml($station){
// Transform a station XML object to a KML string 
// CDATA is used here to embed the html as plain characters rather then XML
  return <<<EOT
<Placemark>
    <name>{$station->title}</name>
    <description>
      <![CDATA[ 
	          <p>
			  <a href="{$station->base}">Weather Link</a><br/>
			  <a href="{$station->wiki_link}">Wiki Link</a><br/>
			  <a href="{$station->tourist_link}">Tourist Info</a></p>
			]]>  
    </description>
    <Point>
       <coordinates>{$station->longitude},{$station->latitude},0</coordinates>
    </Point>
</Placemark>
EOT;
};
    $text = file_get_contents("dsa_xml_config.xml");  // read the configuration file from the current directory
    $config = new simpleXMLElement($text);       // convert the text to an xml object
    header("Content-type: application/vnd.google-earth.kml+xml");  //set the content type to that for KML
</script>
<kml xmlns="http://www.opengis.net/kml/2.2">
  <Folder>
  <name>WDL stations</name>
        <?php
          foreach ($config->weather->station as $station) //iterate through the stations in the configuration file
            echo station_to_kml($station);   // convert each one to a piece of kml and output 
        ?>
  </Folder>
</kml>