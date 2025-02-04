<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko sederhana</title>
     <link rel="stylesheet" href="combine.css">
</head>
<body><center>    
    <label><h4>Toko Bumi melayang</h4></label>
    <img src="buah.jpg">
    <form action="#" method="get"><br>
     <table border="2">
      <tr>
        <td><label>buah</label></td>
        <td><label>harga per(Kg)</label></td>
        <td><label>kg</label></td>
      
      </tr>
       <tr>
     <td><input type="text" name="jualan1" placeholder="Barang yang di beli"></td> 
     <td><input type="number" name="jualan1" placeholder="Harga Barang"></td>
     <td><input type="number" name="kg1" placeholder="Jumlah Perkilo"></td>
     </tr>
     <tr>
       <td><input type="text" name="jualan2" placeholder="Barang yang di beli"></td>
       <td><input type="number" name="jualan2" placeholder="Harga Barang"></td>
       <td><input type="number" name="kg2" placeholder="Jumlah Perkilo"></td>
       </tr>
        <tr>
       <td><input type="text" name="jualan3" placeholder="Barang yang di beli"></td>>
       <td><input type="number" name="jualan3" placeholder="Harga Barang"></td>>
       <td><input type="number" name="kg3" placeholder="Jumlah Perkilo"></td>
       </tr>
       <tr>
</tr>
        <td></td> 
     <td align = "center" colspan ="3"><input type ="submit" value="hitung" name="tambah">
    </form>


<?php
  if (isset($_GET['tambah'])){
    $jualan1 = $_GET['jualan1'];
    $jualan2 = $_GET['jualan2'];
    $jualan3 = $_GET['jualan3'];
    $kg1 = $_GET['kg1'];
    $kg2 = $_GET['kg2'];
    $kg3 = $_GET['kg3'];
    $barang1 = $_GET['jualan1'];
    $barang2 = $_GET['jualan2'];
    $barang3 = $_GET['jualan3'];
    $total1 = $jualan1 * $kg1;
    $total2 = $jualan2 * $kg2;
    $total3 = $jualan3 * $kg3;
    $total = ($jualan1 * $kg1) + ($jualan2 * $kg2) + ($jualan3 * $kg3);
    if ($total <100000) {
     echo "<table class='table-echo' border='1'>
     <tr>
         <th>Barang</th>
         <th>Harga</th>
         <th>Jumlah</th>
         <th>Total</th>
     </tr>
      <tr>
         <td>$jualan1</td> 
         <td>Rp.$jualan1</td>
         <td>$kg1</td>
         <td>$total1</td>   
      </tr>   
     <tr>
         <td>$jualan2</td>
         <td>Rp.$jualan2</td>
         <td>$kg2</td>
         <td>$total2</td>
     </tr>    
      <tr>
         <td>$jualan3</td>
         <td>Rp.$jualan3</td>
         <td>$kg3</td>
         <td>$total3</td>
      </tr>
      <tr> 
         <td colspan='2'>Total Harga </td>
         <td colspan='2'> Rp.$total</td>
      </tr>    
      </table>";
    }
    }
  
    // <table>
    // <tr>
    // <td>Buah Naga = Rp.$jualan1 X $kg1 kilo</td>
    // </tr>
    // <tr>
    // <td>Buah Mangga = Rp.$jualan2 X $kg2 kilo </td>
    // </tr>
    // <td>Buah Manggis 
    //  </table>

    // if ($total < 100000){
    //   echo $total;
    // }if ($total > 100000){
    //   $diskon = $total / 100 * 27;
    //   $totalbaru = $total - $diskon;
    //   echo "<table class="table-echo border="1">
    //       <td>harga barang</td>

    //   echo "selamat! anda mendapat diskon $diskon harga menjadi $totalbaru ";
    // } else {
    //   echo "harga : ".$total;
    // }
   elseif ($total >=100000) {
    $diskon = 20 * $total / 100;
    $totalbaru = $total - $diskon;
    
    echo "<table class='table-echo' border='1'>
        <tr>
            <th>Barang</th>
            <th>Harga Asli</th>
            <th>Jumlah Kg</th>
            <th>Total</th>
        </tr>
         <tr>
         <td>$jualan1</td> 
         <td>Rp.$jualan1</td>
         <td>$kg1</td>
         <td>$total1</td>   
      </tr>   
     <tr>
         <td>$jualan2</td>
         <td>$Rp.$jualan2</td>
         <td>$kg2</td>
         <td>$total2</td>
     </tr>    
      <tr>
         <td>$jualan3</td>
         <td>Rp.$jualan3</td>
         <td>$kg3</td>
         <td>$total3</td>
      </tr>
        <tr>
            <td colspan='2'>Total Harga </td>
            <td colspan='2'> Rp.$total</td>
        </tr>
        <tr>
            <td colspan='2'>Diskon 20%</td>
            <td colspan='2'>Rp.$diskon</td>
        </tr>
        <tr>
            <td colspan='2'>Total Bayar</td>
            <td colspan='2'>Rp.$totalbaru</td>
        </tr>
        </table>";
}
   
  
  

?>
</center>
</body>
</html>        