<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <link rel="stylesheet" href="../assets/css/dashboard.css">
  <link href="https://cdn.jsdelivr.net/npm/@sweetalert2/theme-dark@4/dark.css" rel="stylesheet">

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.js"></script>
</head>

<body>
  <div class="d-flex flex-column flex-lg-row h-lg-full bg-surface-secondary">
    <?php include("components/dashboard/navbar.php"); ?>

    <div class="h-screen flex-grow-1 overflow-y-lg-auto">
      <?php include("components/dashboard/header.php"); ?>

      <?php include("components/dashboard/main.php"); ?>
    </div>
  </div>
</body>

</html>