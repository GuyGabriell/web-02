<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Associative-Array-web-002</title>
</head>
<body>


<h1>Recommended Books</h1>
   
  <?php
  
 

    $Books = [

      [
        'name' => 'Do Andriods Dream Electric Sheep',
        'author' => 'Philip K. Dick',
        'releaseYear' => 1968,
        'purchaseUrl' => 'http://example.com'
      ],



      [
         'name' => 'Project Hail Mary',
         'author' => 'Andy Weir',
          'releaseYear' => 2021,
         'purchaseUrl' => 'http://example.com'
      ],
      

      
       [
         'name' => 'The Martian',
         'author' => 'Andy Weir',
          'releaseYear' => 2011,
         'purchaseUrl' => 'http://example.com'
      ],
      


    ];


  
  ?>
  

 <ul>

    <?php foreach ($Books as $Book) :?>

      <li>
        <a href="<?= $Book['purchaseUrl']?>">
             <?= $Book['name']?>(<?= $Book['releaseYear']?>) -By <?= $Book['author'] ?>
        </a>
       
      </li>

   <?php endforeach; ?>

 </ul>


</body>
</html>