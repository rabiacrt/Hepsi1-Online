<?php 
session_start(); 
include "db_conn.php";
?>

<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>CodePen - CSS-only Slide-up Caption Hover Effect</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css2?family=Noto+Sans+JP&amp;display=swapps://github.com/produle/MockFlowFont/blob/master/MockFlowFont1/dist/MockFlowFont1.woff'>
<link rel='stylesheet' href='https://assets.css-tricks.ir/font/font.css'><link rel="stylesheet" href="./style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<style>
 
#page-wrapper {
  border-radius: 30px;
  width: 650px;
  background: #FFF;
  padding: 1em;
  margin: 1em auto;
  border-top: 5px solid #69c773;
  box-shadow: 0 2px 10px rgba(0,0,0,0.8);
}

h1 {
	margin-top: 0;
}

#status {
  font-size: 0.9rem;
  margin-bottom: 1rem;
}

.open {
  color: green;
}





.sent {
  background-color: #F7F7F7;
}

.received {}

#message-form {
  margin-top: 1.5rem;
}

textarea {
  width: 100%;
  padding: 0.5rem;
  font-size: 1rem;
  border: 1px solid #D9D9D9;
  border-radius: 3px;
  box-shadow: inset 0 1px 1px rgba(0, 0, 0, 0.1);
  min-height: 100px;
  margin-bottom: 1rem;
}

button {
  display: inline-block;
  border-radius: 3px;
  border: none;
  font-size: 0.9rem;
  padding: 0.6rem 1em;
  color: white;
  margin: 0 0.25rem;
  text-align: center;
  background: #BABABA;
  border-bottom: 1px solid #999;
}

button[type="submit"] {
  background: #86b32d;
  border-bottom: 1px solid #5d7d1f;
}

button:hover {
  opacity: 0.75;
  cursor: pointer;
}

</style>
<?php
                                     $uname = $_SESSION['user_name'];
                                    if (isset($uname)){
                                        ?>
                                        <div id="page-wrapper">
  <h1>Yorum </h1>
  

  
  <ul id="messages"></ul>
  
  <form id="message-form" action="yrms.php" method="post">
  <?php if (isset($_GET['error'])) { ?>
     		<p class="error"><?php echo $_GET['error']; ?></p>
     	<?php } ?>

          <?php if (isset($_GET['success'])) { ?>
               <p class="success"><?php echo $_GET['success']; ?></p>
          <?php } ?>
    <textarea id="message" placeholder="Bizimle düşüncelerinizi paylaşın..." name="msg" required></textarea>
    <button type="submit">Gönder</button>
    
  </form>
</div> 
                                        <?php
                                    }
                                    
                                    
                                    ?>



<ul class="cards">
<?php 
         $bul3 = "SELECT * FROM yrm";
         $kayit3 =$conn->query($bul3);
         if($kayit3->num_rows>0){
             while($satir3=$kayit3->fetch_assoc()){
?>
  <li>
    <a href="" class="card">
      <img src="./deneme.jpg" class="card__image" alt="" />
      <div class="card__overlay">        
        <div class="card__header">
          <svg class="card__arc" xmlns="http://www.w3.org/2000/svg"><path /></svg>                 
          <img class="card__thumb" src="./user.png" alt="" />
          <div class="card__header-text">
            <h3 class="card__title"><?php echo $satir3["user_name"];?></h3>
            <span class="card__status"><?php echo $satir3["tar"];?></span>
          </div>
        </div>
        <p class="card__description"><?php echo $satir3["msg"];?></p>
      </div>
    </a>
  </li>
  <?php


}
}
?>
</ul>
<!-- partial -->
  <script  src="./script.js"></script>

</body>
</html>
