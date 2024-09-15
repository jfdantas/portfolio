<?php
$page = isset($_GET['page']) ? $_GET['page'] : 'apresentacao';
$app = isset($_GET['app']) ? $_GET['app'] : '';

if (isset($_COOKIE['mode'])) {
  $mode = $_COOKIE['mode'] == 'light' ? 'light' : 'dark';
} else {
  $mode = '';
}

require "views/config.php";
?>
<!DOCTYPE html>
<html lang="pt-BR">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>
    <?php
    if ($app) {
      echo $projects[$app]['name'];
    } elseif ($page == 'apresentacao') {
      echo $config[$page]["name"];
    } else {
      echo $config[$page]['title'];
    }
    ?>
  </title>
  <link rel="stylesheet" type="text/css" href="assets/css/main.css" />
  <script src="assets/js/main.js"></script>
</head>

<body <?= $mode == 'light' ? 'class="light-mode"' : '' ?>>
  <div class="app">
    <div class="header">
      <div class="menu">
        <nav>
          <ul>
            <?php foreach ($config as $key => $menu): ?>
              <li>
                <a href="?page=<?= $key ?>" class="<?= $page == $key ? 'active' : '' ?>">
                  <?= $menu["name"] ?>
                </a>
              </li>
            <?php endforeach ?>
          </ul>
        </nav>
        <div style="text-align: center">
          <div class="toggle-container">
            <input type="checkbox" id="toggle" <?= $mode == 'light' ? 'checked' : '' ?> />
            <label for="toggle" class="slider round" onclick="mode()"></label>
          </div>
        </div>
      </div>
      <div class="header_avatar">
        <img src="views/<?= $app ? "$page/$app" : "$page"; ?>/logo.jpg" alt="" class="avatar" />
        <p class="name">
          <?php
          if ($app) {
            echo $projects[$app]['name'];
          } else {
            echo $config[$page]['title'];
          }
          ?>
        </p>
      </div>
    </div>
    <div class="container">
      <?php
      if ($app) {
        require "views/$page/$app/contents.php";
      } else {
        require "views/$page/contents.php";
      }
      ?>
    </div>
  </div>

  <!-- <button id="openModal">Abrir Modal</button> -->

  <div id="modal" class="modal">
    <div class="modal-content">
      <span class="close-button">&times;</span>
      <h2>Este é um Modal</h2>
      <p>Conteúdo do modal aqui.</p>
    </div>
  </div>
  <style>
    .modal {
      display: none;
      position: fixed;
      z-index: 1;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      overflow: auto;
      background-color: rgba(0, 0, 0, 0.5);
    }

    .modal-content {
      background-color: #fff;
      margin: 15% auto;
      padding: 20px;
      border: 1px solid #888;
      width: 80%;
      max-width: 500px;
      border-radius: 10px;
      color: #000;
    }

    .close-button {
      color: #aaa;
      float: right;
      font-size: 28px;
      font-weight: bold;
    }

    .close-button:hover,
    .close-button:focus {
      color: #000;
      text-decoration: none;
      cursor: pointer;
    }
  </style>

  <script>
    // document.getElementById('openModal').addEventListener('click', function() {
    //   document.getElementById('modal').style.display = 'block';
    // });

    // document.querySelector('.close-button').addEventListener('click', function() {
    //   document.getElementById('modal').style.display = 'none';
    // });

    // window.addEventListener('click', function(event) {
    //   if (event.target == document.getElementById('modal')) {
    //     document.getElementById('modal').style.display = 'none';
    //   }
    // });
  </script>
</body>

</html>