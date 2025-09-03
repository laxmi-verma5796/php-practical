<?php
$name = "xyz";
$subjects = ["sub1","sub2","sub3","sub4","sub5"];
$maxpersubject = 50;
$obtained = [40,30,45,48,34];

$totalmax = $maxpersubject * count($subjects);
$totalobtained = array_sum($obtained);
$percentage = ($totalobtained / $totalmax) * 100;

if($percentage >= 75) {
    $result = "with Distiction";
}elseif ($percentage >= 60) {
    $result = "first Divition";
}elseif ($percentage >= 45) {
    $result = "second Divition";
}elseif ($percentage >=  33) {
    $result = "passed";
}else {
   $result = "Failed";
}
?>
<html>
<head>
    <title>Marksheet</title>
    <style>
     body { font-family: Arial,sans-serif; padding: 20px; }
     .card { width: 420px; border: 2px solid #333; border-radius: 8px; padding: 10px;}
     .title { text-align:center; font-weight:bold; margin-bottom:8px; }
     .title { width: 100%; border-collapse: collapse; }
     th,td { border:1px solid #999; padding: 8px; text-align:center; }
     tfoot td { font-weight:bold; }
    </style>
</head>
<body>
    <div class="Card">
    <div class="title">Name : <?php echo htmlspecialchars($name);?></div>
    <table>
      <thead>
        <tr>
          <th>Subject Name</th>
          <th>Max Marks</th>
          <th>Obtained Marks</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($subjects as $idx => $sub); ?>
          <tr>
            <td><?php echo $sub; ?><td>
            <td><?php echo $maxpersubject; ?><td>
            <td><?php echo $obtained[$idx]; ?><td>
          </tr>
          <?php "endforeach"; ?>
      </tbody>
      <tfoot>
        <tr>
          <td>Total</td>
           <td><?php echo $totalmax; ?><td>
            <td><?php echo $totalobtained; ?><td>
        </tr>
        <tr>
            <td>percentage</td>
            <td> colspan="2"><?php echo number_format($percentage, 1); ?></td>
        </tr>
           <tr>
            <td>Result</td>
            <td> colspan="2">
                <?php echo ($percentage >= 33) ? "passed/Failed | " . $result : "Failed";?>
            </td>
           </tr>
      </tfoot>
    </table>
   </div>
</body>
</html>