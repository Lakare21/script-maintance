<?php
// maintenance.php
http_response_code(503);
header('Retry-After: 3600'); // kasih tau browser/server coba lagi 1 jam
?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>We’re Currently Under Maintenance</title>
  <style>
    body {
      background: #0d1117;
      color: #fff;
      font-family: Arial, sans-serif;
      text-align: center;
      padding: 100px;
    }
    h1 {
      font-size: 42px;
      margin-bottom: 20px;
    }
    p {
      font-size: 18px;
      color: #ccc;
    }
  </style>
</head>
<body>
  <h1>🚧 We’re Currently Under Maintenance 🚧</h1>
  <p>Kami sedang melakukan perbaikan dan pembaruan sistem.</p>
  <p>Silakan coba lagi nanti. 🙏</p>
</body>
</html>
