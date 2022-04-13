<?php include APPROOT . '/views/includes/header.php'; ?>

<div class="container">
    <h2>Edit Review</h2>
    <form action="" method="POST">
        <label for="range"><b># Stars</b></label>
        <input type="range" min="1" max="5" name="newValue" value="<?php echo $data['review']->value ?>" id="range" oninput="this.nextElementSibling.value = this.value + '/5'">
        <output><?php echo $data['review']->value ?>/5</output>
        <br>
        <label for="message"><b>Message</b></label>
        <br>
        <textarea name="newMessage" id="message" cols="45" rows="5"><?php echo $data['review']->message ?></textarea>
        <br>
        <button class="btn btn-primary" type="submit" name="submit">Save</button>
    </form>
</div>

<?php include APPROOT . '/views/includes/footer.php'; ?>