<?php if(isset($message)) :?>
    <div class="alert alert-success">
        <?= $message ?>
    </div>
<?php endif ?>
<link rel="stylesheet"  href="/style.css">

<div id="topnav" class="navbar">
  <a href="#" class="logo">
    <span>N</span><span>A</span><span>M</span><span>A</span><span>Z</span>
  </a>
  <div class="navbar-right menu">
    <a data-translate="namaz-naslov" class="tekstnavbar" href="#namaz">
      Namazi
    </a>
    <a href="#abdest" id="abdest-naslov">Abdest</a>
    <a data-translate="sure-naslov" class="tekstnavbar" href="#sure">
      Sure
    </a>
    <a class="tekstnavbar" data-translate="zikr-naslov" href="#zikr">
      Zikr
    </a>
  <a class="tekstnavbar" href="/tespih.html" data-translate="tespih-naslov">Tespih</a>
    <a href="/qa/inc/get.php" data-translate="qa">Q&A</a>
  </div>
  <div class="navbar-right">
    <a href="javascript:void(0);" class="icon" onclick="showMenu()">
      <i style=" 
      margin-top: -2rem;
      " class="fa fa-bars"></i>
    </a>
  </div>
</div>

<form action="index.php" method="post">
    <header>
        <h1>Pošalji nam poruku</h1>
    </header>

    <div>
        <label for="name">Ime</label>
        <input type="text" value="<?= $inputs['name'] ?? '' ?>" name="name" id="name" placeholder="Full name">       
        <small><?$errors['name'] ?? ''?></small>
    </div>

    <div>
        <label for="email">Email:</label>
        <input type="email" name="email" id="email" value="<?=$inputs['email']?? '' ?>" placeholder="Email">
        <small><?= $errors['email']?? '' ?></small>
    </div>

    <div>
        <label for="subject">Subject</label>
        <input type="subject" name="subject" id="subject" value="<?= $inputs['subject']?? '' ?>" placeholder="subject">
        <small><?=$errors['subject']?? '' ?></small>
    </div>

    <div>
        <label for="message">Poruka:</label>
        <textarea id="message" name="message" rows="5"><?= $inputs['message'] ?? '' ?></textarea>
        <small><?= $errors['message'] ?? '' ?></small>
    </div>
    <button type="submit">Send Message</button>
</form>
