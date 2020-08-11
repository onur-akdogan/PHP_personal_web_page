<?php
include "header.php";
?>
<?php 


if ($_GET['id']==0) {
    
$ayarsor0=$db->prepare("Select * from blog where blog_id=:id");
$ayarsor0->execute(array(
  'id'=>0
));
$ayarcek0=$ayarsor->fetch(PDO::FETCH_ASSOC);
$baslik=$ayarcek0['blog_baslik'];
$icerik=$ayarcek0['blog_icerik'];
$resim=$ayarcek0['blog_resim'];








}
elseif ($_GET['id']==1) {
    $secilensayi=1;
  
    $ayarsor1=$db->prepare("Select * from blog where blog_id=:id");
    $ayarsor1->execute(array(
      'id'=>1
    ));
    $ayarcek1=$ayarsor1->fetch(PDO::FETCH_ASSOC);
 
     $baslik=$ayarcek1['blog_baslik'];
     $icerik=$ayarcek1['blog_icerik'];
     $resim=$ayarcek1['blog_resim'];

}
elseif ($_GET['id']==2) {
    $secilensayi=1;
  
    $ayarsor2=$db->prepare("Select * from blog where blog_id=:id");
    $ayarsor2->execute(array(
      'id'=>2
    ));
    $ayarcek2=$ayarsor2->fetch(PDO::FETCH_ASSOC);
    $baslik=$ayarcek2['blog_baslik'];
    $icerik=$ayarcek2['blog_icerik'];
    $resim=$ayarcek2['blog_resim'];


}





?>

   <img class="card-img-top" src="<?php echo $resim ?>"   style="width: 100%;height:100%;">     
<div id="İletisimbaslik">

       
            <Center>
        
                    <H1><?php echo $baslik ?></H1>
            </Center>
     
</div>



<div class="tanitim">

        <div class="media">
            
            <div class="col-lg-8 col-md-3 col-sm-6 social-widget">
                <div class=" media-body ">
                    
                        <p>
                            <h4><?php echo $icerik ?>
                        </p>
                </div>
            </div>
        </div>
    </div>














<?php include "footer.php";




