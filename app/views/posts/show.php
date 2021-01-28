<?php require_once APPROOT . '/views/inc/header.php'; ?>
<h1><?php echo $data['post']->title ?></h1>
<div class="bg-secondary text-white p-2 mb-3">
    Created by <?php echo $data['post']->user_id; ?> at <?php echo $data['post']->created_at; ?>
</div>
<p><?php echo $data['post']->content; ?></p>
<a href="<?php echo URLROOT ?>/posts" class="btn btn-info">Back</a>
<?php require_once APPROOT . '/views/inc/footer.php'; ?>
