<?php
try {
    $db=new PDO("mysql:host=id14542536_mypage;dbname=id14542536_mypage;charset=utf8",'onurakdogan','a5qnSV5JjNM/+vXh');
    //echo "Veritabanı bağlantısı başarılı";


} catch (PDOException $e) {
    
    echo $e->getMessage();

}
?>