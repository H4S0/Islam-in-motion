<?php if(isset($message)) :?>
    <div class="alert alert-success">
        <?= $message ?>
    </div>
<?php endif ?>

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
        <small>><?= $errors['email']?? '' ?></small>
    </div>

    <div>
        <label for="subject">Subject</label>
        <input type="subject" name="subject" id="subject" value="<?= $inputs['subject']?? '' ?>" placeholder="subject">
        <small><?=$errors['subject']?? '' ?></small>
    </div>

    <div>
        <label for="message">Message:</label>
        <textarea id="message" name="message" rows="5"><?= $inputs['message'] ?? '' ?></textarea>
        <small><?= $errors['message'] ?? '' ?></small>
    </div>

    <label for="nickname" aria-hidden="true" class="user-cannot-see"> Nickname
        <input type="text" name="nickname" id="nickname" class="user-cannot-see" tabindex="-1" autocomplete="off">
    </label>

    <button type="submit">Send Message</button>
</form>
