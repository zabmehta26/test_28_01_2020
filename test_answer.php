<html>
  <head>
  </head>
  <body>
  <?php
  error_reporting(E_ALL ^ E_NOTICE);
  error_reporting(E_ERROR | E_PARSE);
  //array of student marks
  $marks = array(
    array("Hindi"=>"34" , "English"=>"45" , "Maths"=>"59"),
array("Hindi"=>"23" , "English"=>"45" , "Maths"=>"68"),
array("Hindi"=>"89" , "English"=>"66" , "Maths"=>"98"),
array("Hindi"=>"45" , "English"=>"34" , "Maths"=>"90"),
array("Hindi"=>"39" , "English"=>"73" , "Maths"=>"93"),
array("Hindi"=>"28" , "English"=>"62" , "Maths"=>"67"),
array("Hindi"=>"84" , "English"=>"62" , "Maths"=>"75"),
array("Hindi"=>"69" , "English"=>"47" , "Maths"=>"93"),
array("Hindi"=>"43" , "English"=>"84" , "Maths"=>"84"),
array("Hindi"=>"26" , "English"=>"59" , "Maths"=>"94"),
array("Hindi"=>"59" , "English"=>"59" , "Maths"=>"59"),
array("Hindi"=>"48" , "English"=>"94" , "Maths"=>"90")
  );
  $sum_1 = $marks[0]["Hindi"] + $marks[0]["English"] + $marks[0]["Maths"];
  $sum_2 = $marks[1]["Hindi"] + $marks[1]["English"] + $marks[1]["Maths"];
  $sum_3 = $marks[2]["Hindi"] + $marks[2]["English"] + $marks[2]["Maths"];
  $sum_4 = $marks[3]["Hindi"] + $marks[3]["English"] + $marks[3]["Maths"];
  $sum_5 = $marks[4]["Hindi"] + $marks[4]["English"] + $marks[4]["Maths"];
  $sum_6 = $marks[5]["Hindi"] + $marks[5]["English"] + $marks[5]["Maths"];
  $sum_7 = $marks[6]["Hindi"] + $marks[6]["English"] + $marks[6]["Maths"];
  $sum_8 = $marks[7]["Hindi"] + $marks[7]["English"] + $marks[7]["Maths"];
  $sum_9 = $marks[8]["Hindi"] + $marks[8]["English"] + $marks[8]["Maths"];
  $sum_10 = $marks[9]["Hindi"] + $marks[9]["English"] + $marks[9]["Maths"];
  $sum_11 = $marks[10]["Hindi"] + $marks[10]["English"] + $marks[10]["Maths"];
  $sum_12 = $marks[11]["Hindi"] + $marks[11]["English"] + $marks[11]["Maths"];
  //array of student detail
  $student = array(
    array("Name"=>"AA" , "Class"=>"12"),
    array("Name"=>"BB" , "Class"=>"12"),
    array("Name"=>"CC" , "Class"=>"12"),
    array("Name"=>"DD" , "Class"=>"11"),
    array("Name"=>"EE" , "Class"=>"11"),
    array("Name"=>"FF" , "Class"=>"11"),
    array("Name"=>"GG" , "Class"=>"10"),
    array("Name"=>"HH" , "Class"=>"10"),
    array("Name"=>"II" , "Class"=>"10"),
    array("Name"=>"JJ" , "Class"=>"9"),
    array("Name"=>"KK" , "Class"=>"9"),
    array("Name"=>"LL" , "Class"=>"9")
);
    $sum_array = array(
    array("$sum_1" ,"$sum_2" ,"$sum_3"),
    array("$sum_4" ,"$sum_5" ,"$sum_6"),
    array("$sum_7" ,"$sum_8" ,"$sum_9"),
    array("$sum_10" ,"$sum_11" ,"$sum_12")
);

    //to sort student and mark according to the total marks
     for ($j = 0; $j < 3; $j++){
       for ($k = $j+1; $k < 3; $k++){
      if($sum_array[0][$j]<$sum_array[0][$k])
      {
      $a = $sum_array[0][$j] ;
      $sum_array[0][$j] = $sum_array[0][$k];
      $sum_array[0][$k] = $a;
       $a = $marks[$j] ;
       $marks[$j] = $marks[$k];
       $marks[$k] = $a;
        $a = $student[$j] ;
        $student[$j] = $student[$k];
        $student[$k] = $a;
      }
      if($sum_array[1][$j]<$sum_array[1][$k])
      {
      $b = $sum_array[1][$j] ;
      $sum_array[1][$j] = $sum_array[1][$k];
      $sum_array[1][$k] = $b;
                     $b = $marks[$j+3] ;
                     $marks[$j+3] = $marks[$k+3];
                     $marks[$k+3] = $b;
                      $b = $student[$j+3] ;
                      $student[$j+3] = $student[$k+3];
                      $student[$k+3] = $b;
      }
      if($sum_array[2][$j]<$sum_array[2][$k])
      {
      $c = $sum_array[2][$j] ;
      $sum_array[2][$j] = $sum_array[2][$k];
      $sum_array[2][$k] = $c;
                      $c = $marks[$j+6] ;
                      $marks[$j+6] = $marks[$k+6];
                      $marks[$k+6] = $c;
                       $c = $student[$j+6] ;
                       $student[$j+6] = $student[$k+6];
                       $student[$k+6] = $c;
      }
      if($sum_array[3][$j]<$sum_array[3][$k])
      {
      $d = $sum_array[3][$j] ;
      $sum_array[3][$j] = $sum_array[3][$k];
      $sum_array[3][$k] = $d;
                       $d = $marks[$j+9] ;
                       $marks[$j+9] = $marks[$k+9];
                       $marks[$k+9] = $d;
                        $d = $student[$j+9] ;
                        $student[$j+9] = $student[$k+9];
                        $student[$k+9] = $d;
      }
     }
    }
    //to print table
    echo "<table>";
    echo "<th>Name</th>";
    echo "<th>Class</th>";
    //echo "<th>Hindi marks</th>";
    //echo "<th>English marks</th>";
    //echo "<th>Maths marks</th>";
    echo "<th>Sum of all marks</th>";
    for($i=0;$i<12;$i++){
        echo "<tr>";
        echo "<td>".$student[$i]['Name']."<td>";
        echo "<td>".$student[$i]['Class']."<td>";
    //    echo "<td>".$marks[$i]['Hindi']."<td>";
    //    echo "<td>".$marks[$i]['English']."<td>";
    //    echo "<td>".$marks[$i]['Maths']."<td>";
    if($i==0){echo "<td>".$sum_array[0][0]."</td>";}
    if($i==1){echo "<td>".$sum_array[0][1]."</td>";}
    if($i==2){echo "<td>".$sum_array[0][2]."</td>";}
    if($i==3){echo "<td>".$sum_array[1][0]."</td>";}
    if($i==4){echo "<td>".$sum_array[1][1]."</td>";}
    if($i==5){echo "<td>".$sum_array[1][2]."</td>";}
    if($i==6){echo "<td>".$sum_array[1][0]."</td>";}
    if($i==7){echo "<td>".$sum_array[2][1]."</td>";}
    if($i==8){echo "<td>".$sum_array[2][2]."</td>";}
    if($i==9){echo "<td>".$sum_array[3][0]."</td>";}
    if($i==10){echo "<td>".$sum_array[3][1]."</td>";}
    if($i==11){echo "<td>".$sum_array[3][2]."</td>";}
    }
  ?>
  </body>
</html>
