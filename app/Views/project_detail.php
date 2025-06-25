<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
    <h1><?= esc($project['title']) ?></h1>
    <img src="<?= base_url($project['image']) ?>" alt="<?= esc($project['title']) ?>" class="img-fluid mb-3">
    <p><?= esc($project['body']) ?></p>
<?= $this->endSection() ?>
