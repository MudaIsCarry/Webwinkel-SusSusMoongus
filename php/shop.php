<!DOCTYPE html>
<html>
<body>
<?php
$roboimg = array('/robo1.jpg', '/Robo2.jpg', '/Robo3.jpg', '/Robo4.jpg', '/Robo5.jpg');
$roboprice = array(100, 200, 150, 300, 250);
$roboname = array('Robot 1', 'Robot 2', 'Robot 3', 'Robot 4', 'Robot 5');

$random = rand(0, 4); 

// $random = $colors[array_rand($roboimg, $roboprice, $roboname )];

$selectedImg = $roboimg[$random];
$selectedPrice = $roboprice[$random];
$selectedName = $roboname[$random];


$roboDiscount = 0.2 * $roboprice[$random]; 


?>

<!DOCTYPE html>
<html lang="nl">
<head>
<title>Robot</title>
<link rel="stylesheet" type="text/css" href="css/style.css">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-aFq/bzH65dt+w6FI2ooMVUpc+21e0SRygnTpmBvdBgSdnuTN7QbdgL+OapgHtvPp" crossorigin="anonymous">
</head>
<body>
<div class="container text-center" style="width: 40rem;  " >
          <div class="row">
              <div class="col">
                <div class="cards"><div class="card" style="width: 28rem;  align-items: center; justify-items: center; justify-content: center; text-align: center;">
                <img src="img/<?php echo $roboimg[$random]; ?>"style="width: 300px; height: 400px; align-items: center; justify-items: center;">
                    <div class="card-body" >
                      <h1 class="card-text" >
                        
                      <?= $roboname[$random]?> normaal $<?= $roboprice[$random] ?>
                          <?= $roboprice[$random] - $roboDiscount ?></h1>
                                          </div>
                                        </div>
                      
</body>

</html>

</body>
</html>