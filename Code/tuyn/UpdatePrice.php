

<?php if(isset($_GET["choice"])){ $food=$_GET["choice"]; $quantity=$_GET["quantity"];
 $c = count($food);
 $price = 0.0; 
for ($i=0; $i<$c ; $i++)
{ if ($food[$i] == 1)
{ $price = $price + 15 * $quantity[$i];
 echo "You have selected " .$quantity[$i]." Chicken <br>"; }

 if ($food[$i] == 2)
{ $price = $price + 10 * $quantity[$i]; echo "You have selected" .$quantity[$i]." Meat <br>"; } 
if ($food[$i] == 3){ $price = $price + 9 * $quantity[$i]; echo "You have selected " .$quantity[$i]."Pasta <br>"; }
 if
 ($food[$i] == 4){ $price = $price + 12 * $quantity[$i]; echo "You have selected" .$quantity[$i]." Pizza <br>"; } } echo "Total: ".$price . "<br>"; } else { echo "Please select something!"; } ?>
