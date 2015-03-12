<?php
//Scan directory 'nk' and get list of filenames
$dir    = 'nk';
$files = scandir($dir, 1);
$n = sizeof($files)-2;
$files = array_slice($files, 0, $n);
?>

<!DOCTYPE HTM>
<html>
  <head>
    <title>Scatter Plot Examples</title>
    
    <script src="http://d3js.org/d3.v3.min.js"></script>
    <script src="js/main.js"></script>
    <script type="text/javascript" src="js/plot.js"></script>
    <link rel="stylesheet" href="css/plot.css"/>
  </head>
  <body>

  <h1>n and k plotter</h1>  
  <h2>testing git</h2>
    <select id="tf_select" name="tf_select" onchange="plotNew('nk/'+this.value);">
      <option value="">Select...</option>
        <?php
          $a = $files;
          foreach($a as $e) {
            echo "<option value='".$e."'>".str_replace(".csv", "", $e)."</option>";
          }
        ?>
    </select>
    <div id="plot" class="svg-holder svg-holder-simple"></div>
  </body>
</html>
