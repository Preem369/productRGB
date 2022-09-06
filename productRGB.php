<!DOCTYPE html>
<html>
<body>
<?php
    $products = 
    array(  array("0001","iu-necklace","฿1055.07","img/iu-necklace.jpg"),
            array("0002","iu-sticker","฿271.13","img/iu-sticker.jpg"),
            array("0003","iu-2019-season","฿1117.21","img/iu-2019-season.jpg"),
            array("0004","iu-2020-season","฿1117.21","img/iu-2020-season.png"),
            array("0005","iu-documentary","฿2107.95","img/iu-documentary.jpg"),
            array("0006","iu-photocard","฿331.46","img/iu-photocard.jpg"),
            array("0007","iu-fabric-poster","฿362.35","img/iu-fabric-poster.jpg"),
            array("0008","iu-lilac-posters","฿361.62","img/iu-lilac-posters.jpg"),
            array("0009","iu-tour-2019","฿1769.59","img/iu-tour-2019.jpg"),
            array("0010","iu-the-present-1","฿843.91","img/lu-the-present-1.png"),
    );

    echo '<table width"100%" border="1">
    <tr>
      <th>id</th>
      <th>name</th>
      <th>price</th>
      <th>img</th>
    </tr>
    ';

    for($i=0;$i<10;$i++){
        $r = rand(0,256);
        $g = rand(0,256);
        $b = rand(0,256);
        echo "<tr>
        <td style ='color:rgb($r,$g,$b)'>".$products[$i][0]."</td>
        <td style ='color:rgb($r,$g,$b)'>".$products[$i][1]."</td>
        <td style ='color:rgb($r,$g,$b)'>".$products[$i][2]."</td>
        <td ><img src=".$products[$i][3]." width='230' height='298.5'/></td>
        </tr>";
    }

    echo '</table>';
?>

</body>
</html>