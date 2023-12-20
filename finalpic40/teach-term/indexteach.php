#!/usr/local/bin/php
<?php
$db = new SQLite3('robot.db');
$tableExists = $db->query("SELECT name FROM sqlite_master WHERE type='table' AND name='position'")->fetchArray();

if(!$tableExists){
    $statement = 'CREATE TABLE IF NOT EXISTS position(username TEXT, credit REAL)';
    $db->exec($statement);
}
?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width">
  <title>Teach Terminal</title>
  <link href="style.css" rel="stylesheet" type="text/css" />
</head>

<body>

  <div class="topbar">
    <div class="dropdown">
      <button class="dropbtn">Mode</button>
      <div class="dropdown-content">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">System</button>
      <div class="dropdown-content">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">I/Os</button>
      <div class="dropdown-content">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">Reports</button>
      <div class="dropdown-content">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">Diagnostics</button>
      <div class="dropdown-content">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">Config</button>
      <div class="dropdown-content">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
      </div>
    </div>
    <div class="dropdown">
      <button class="dropbtn">Edit</button>
      <div class="dropdown-content">
        <a href="#">Link 1</a>
        <a href="#">Link 2</a>
        <a href="#">Link 3</a>
      </div>
    </div>
  </div>

  <main>

    <div class="left">
      <div class="top-left">
        <input class="top-left-slider" type="range" min="1" max="3" value="1">
        <div class="num-row-wrap">
          <div class="num-row">
            <input type="number" id="numOne" name="numOne" value="00.00">
            <input type="checkbox" id="clearOne" name="clearOne">
          </div>
          <div class="num-row">
            <input type="number" id="numOne" name="numOne" value="00.00">
            <input type="checkbox" id="clearOne" name="clearOne">
          </div>
          <div class="num-row">
            <input type="number" id="numOne" name="numOne" value="00.00">
            <input type="checkbox" id="clearOne" name="clearOne">
          </div>
        </div>
      </div>
      <div class="bottom-left">

        <div class="bottom-left-arrows"></div>

        <div class="bottom-left-sliders">

          <div class="bottom-left-slider-wrap">
            <p class="">Step</p>
            <input class="bottom-left-step" type="range" min="0" max="1" value="0" step="0.01">
          </div>

          <div class="bottom-left-slider-wrap">
            <p class="">Speed</p>
            <input class="bottom-left-speed" type="range" min="0" max="3" value="0" step="0.1">
          </div>

        </div>

      </div>

    </div>
    <div class="stations"></div>

  </main>

  <div class="bottom"></div>



  <script src="script.js"></script>
</body>

</html>