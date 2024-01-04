<!DOCTYPE html>
<html lang="ja">

<head>
  <meta charset="UTF-8">
  <title>PHP基礎編</title>
</head>

<body>
  <p>
    <?php
    function sort_2way($Arrays, $order)
    {

      $nums = [15, 4, 18, 23, 10 ];
      
      $Array = $nums;
      if($order){
        echo '昇順にソートします' . '<br>';
        sort($Arrays);
      } else {
        echo '降順にソートします' . '<br>';
        rsort($Arrays);
      }
      
      foreach($Arrays as $Array) {
        echo $Array . '<br>';
      }
    }
    
    $nums = [15, 4, 18, 23, 10 ];
    sort_2way($nums, true);
    sort_2way($nums, false);
    ?>
  </p>
</body>

</html>