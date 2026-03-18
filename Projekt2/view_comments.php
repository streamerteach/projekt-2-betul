<?php include "model_comments.php"; ?>

<section style="margin-top: 20px; border-top: 2px solid #eee; padding-top: 20px;">
    <h3>Dina mottagna kommentarer</h3>

    <?php if (empty($my_comments)): ?>
        <p>Inga kommentarer ännu.</p>
    <?php else: ?>
        <?php foreach ($my_comments as $c): ?>
            <div style="background: #f9f9f9; padding: 10px; margin-bottom: 10px; border-radius: 5px;">
                <strong>Från: <?= htmlspecialchars($c['username']) ?></strong>
                <p><?= htmlspecialchars($c['comment']) ?></p>
                
                <form action="profile.php" method="POST" style="margin-top: 5px;">
                    <input type="hidden" name="receiver_id" value="<?= $c['sender_id'] ?>">
                    <input type="text" name="comment_content" placeholder="Svara användaren..." required>
                    <input type="submit" name="send_comment" value="Svara">
                </form>
            </div>
        <?php endforeach; ?>
    <?php endif; ?>
</section>