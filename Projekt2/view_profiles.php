<?php include "model_profiles.php"; ?>

<form method="GET">
    Sortera på: 
    <select name="sort" onchange="this.form.submit()">
        <option value="id">Nyast</option>
        <option value="salary">Högst lön</option>
        <option value="likes">Mest gillade</option>
    </select>
    Filtrera preferens:
    <select name="filter" onchange="this.form.submit()">
        <option value="%">Alla</option>
        <option value="Man">Man</option>
        <option value="Kvinna">Kvinna</option>
    </select>
</form>

<div class="ads-container">
    <?php foreach ($profiles as $p): ?>
        <div class="ad-card" style="border:1px solid #ddd; padding:15px; margin:10px 0;">
            <h3><?= htmlspecialchars($p['realname']) ?> (<?= htmlspecialchars($p['username']) ?>)</h3>
            <p><?= htmlspecialchars($p['bio']) ?></p>
            <p>Stad: <?= htmlspecialchars($p['city']) ?></p>
            
            <?php if (isset($_SESSION['username'])): ?>
                <p><strong>E-post:</strong> <?= htmlspecialchars($p['email']) ?></p>
                <p><strong>Årslön:</strong> <?= number_format($p['salary'], 0, ' ', ' ') ?> kr</p>
                <p>❤️ <?= $p['likes'] ?> likes</p>
<a href="vote.php?id=<?= $p['id'] ?>&action=like">❤️ Gilla</a> | 
<a href="vote.php?id=<?= $p['id'] ?>&action=dislike">💔 Ogilla</a>            <?php else: ?>
                <p><em>Logga in för att se lön och kontaktuppgifter.</em></p>
            <?php endif; ?>
            <?php if (isset($_SESSION['role']) && $_SESSION['role'] == 'admin'): ?>
    <a href="admin_action.php?delete_profile=<?= $p['id'] ?>" style="color:red">RADERA PROFIL (ADMIN)</a>
<?php endif; ?>
        </div>
    <?php endforeach; ?>
</div>
<div class="pagination">
    <a href="?page=<?= $page - 1 ?>&sort=<?= $sort ?>">Föregående</a>
    <span> Sida <?= $page ?> </span>
    <a href="?page=<?= $page + 1 ?>&sort=<?= $sort ?>">Nästa</a>
</div>