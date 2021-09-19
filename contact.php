<?php
require_once 'template/header.php';
?>
<link rel="stylesheet" href="css/contact.css">

<div class="main">
    <br><br>
    <h5> <span style="font-size: xxx-large">.</span>      ابقى متواصلا معنا      <span style="font-size: xxx-large">.</span> </h5>
    <i class="fas fa-book-open"></i>
    <br>
    <input class="info" name="name" type="text" placeholder="اسمك">
    <input class="info" name="email" type="email" placeholder="ايميلك">
    <br>
    <br>
    <input class="info" name="number" type="number" placeholder="رقم هاتفك">
    <br>
    <br>
    <textarea name="problem" cols="50" rows="1" class="problem" placeholder="مشكلتك"></textarea>
    <button class="btn1">ارسل</button>

</div>


<?php
require_once 'template/footer.php';
?>

