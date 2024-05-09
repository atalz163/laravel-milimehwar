<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>MiliMehwar</title>
  <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
  <style>

    /* Background image */
.backgroundImage {
    Position:fixed;
    Top: 0;
    Bottom: 0;
    Width: 100vh;
    Height: 100vh;
    Opacity: 0.25;
    Z-index: -5000;
    background-color: #01a3eb;
    
}

.backgroundImage img {
    width:100vw;
    height: 100vh;
}
.content {
    position: absolute;
    top: 50%;
    left: 50%;
    transform: translate(-50%, -50%);
    display: flex;
    flex-direction: column;
    align-items: center; /* Center horizontally */
    justify-content: center; /* Center vertically */
}

  </style>
</head>
<body>
    <div class="backgroundImage">
        <img src="../images/q1.jpg" />
  </div>
<div class="content">
  <!-- Logo -->
  <img src="../images/milimehwar.png" alt="Logo" class="logo mb-4">

  <!-- Buttons -->
  <div class="btn-group">
 
    <a type="button" class="btn btn-secondary mr-2" href="{{ route('localization', ['locale' => 'en']) }}" style="background-color:black; color: white;">English</a>
<button type="button" class="btn btn-secondary mr-2" style="background-color: red !important;">
    <a href="{{ route('localization', ['locale' => 'ps']) }}" style="color: white;">Pashto</a>
</button>
<button type="button" class="btn btn-success" style="background-color: green !important;">
    <a href="{{ route('localization', ['locale' => 'dr']) }}" style="color: white;">Dari</a>
</button>

    
  </div>
</div>

</body>
</html>
