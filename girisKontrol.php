<head>
<style>
 div{
 margin:auto;
 margin-top:20px;
 height:auto;
 width:500px;
 color:red;
 border:2px solid red;
 padding:25px;
 text-align:center;
 margin-left:10px;
 }
 .bosGiris{
 border:2px solid orange;
 color:orange;
 }
 .dogruGiris{
 border:2px solid green;
 color:green;
 }
 </style>
</head>
<body>
<?php
 $yonetim = array(
 array( "ad" => "Melih", "sifre" => "123"),
 array( "ad" => "Hüma", "sifre" => "456"),
 array( "ad" => "Afra", "sifre" => "789"),
 array( "ad" => "Göktuğ", "sifre" => "741"),
 );
 $kullanici=$_POST['kAdi'];
 $sifre=$_POST['sifre'];
 if(empty($kullanici)||empty($sifre))
 {
 echo "<div class='bosGiris'><h2>Bilgileriniz eksiktir. <br> Giriş sayfasına yönlendiriliyorsunuz.</h2></div>";
 header("Refresh: 5;url=index.php"); 
 }
 else{ 
 for ($i=0; $i <count($yonetim); $i++)
 {
 if($yonetim[$i]["ad"]==$kullanici && $yonetim[$i]["sifre"]==$sifre )
 {
 $indis=$i;
 break;
}
else
{
$indis=-1;
}
}
if($indis==-1)
{
echo "<div><h2>Sistemde Kaydınız bulunmamaktadır.<br>Giriş
sayfasına yönlendiriliyorsunuz.</h2> </div>";
header("Refresh: 5; url=index.php"); 
}
if($indis>-1)
{
echo "<div class=‘dogruGiris’><h2>Merhaba".
$yonetim[$indis]["ad"].",<br>Sisteme Girişiniz Başarıyla Gerçekleşmiştir.
</h2></div>";
}
} 
?>
</body>
</html>