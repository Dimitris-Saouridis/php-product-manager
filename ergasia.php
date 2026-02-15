<?php
$products=[['name'=>"Potatoes",'price'=>4,'quantity'=>16],
 ['name'=>"Cucambers",'price'=>3.75,'quantity'=>7],
 ['name'=>"Oranges",'price'=>2,'quantity'=>11],
 ['name'=>"Breads",'price'=>3,'quantity'=>3]];
function addProduct(&$products, $name, $price, $quantity){
$products[]=['name'=>$name,'price'=>$price,'quantity'=>$quantity];
echo "Προστέθηκε το προιόν με όνομα $name, σε τιμή $price και με ποσότητα $quantity.<br><br>";
}
function removeProduct(&$products, $name){
  $flag=false;
  foreach($products as $index=>$item){
    if(strtolower($item['name'])==strtolower($name)){
      echo "Το στοιχείο με όνομα $name θα σβηστεί απο τον πίνακα - λίστα.<br><br>";
      $flag=true;
      unset($products[$index]);          
	}
       }     
    if(!$flag){
      echo "Το στοιχείο με όνομα $name δεν βρέθηκε στο πίνακα.<br><br>";
	}
$products=array_values($products);           
}
function updateQuantity(&$products, $name, $newQuantity){
  $flag=false;
  foreach($products as $index=>$item){
    if (strtolower($item['name'])==strtolower($name)){
      $products[$index]['quantity']=$newQuantity;
      $flag=true;
      echo "Το προιόν με το όνομα $name αλλάζει ποσότητα και γίνεται $newQuantity.<br><br>"; 
      break;
  } 
}
  if(!$flag){
    echo"Δεν βρέθηκε το όνομα $name και επομένως δεν μπορουμε να βαλουμε την καινουρια ποσότητα με ποσότοτητα $newQuantity.<br><br>"; 
  }
}
function sortByPrice(&$products){
  usort($products,function($a,$b){
    return $a['price'] <=> $b['price'];
  });
  foreach ($products as $item){
    echo "Το προιόν {$item['name']} - με τιμή {$item['price']} - και με ποσότητα {$item['quantity']}<br>";
	}      
}        
addProduct($products, "Milk", 2, 4);
removeProduct($products, "Potatoes"); 
updateQuantity($products, "Breads", 6);
echo "Τα προιόντα ταξινομήμενα με αυξουσα σείρα, ως προς την τιμή  <br>";
sortByPrice($products);
?>