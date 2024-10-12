<div class="container">
    <h2>Terima Kasih atas Donasi Anda</h2>
    <h3>Detail Donasi:</h3>
    <?php foreach ($donations as $donation) : ?>
        <p>Donatur: <?php echo $donation['is_anonim'] ? 'Anonim' : htmlspecialchars($donation['nama_donatur'], ENT_QUOTES, 'UTF-8'); ?></p>
    <?php endforeach; ?>
</div>