<?= $this->extend('layout') ?>

<?= $this->section('content') ?>
    <h1 class="mt-4">My Portfolio</h1>

    <div class="row">
        <?php foreach ($projects as $project): ?>
            <div class="col-md-4 mb-4">
                <div class="card">
                    <img src="<?= base_url($project['image']) ?>" class="card-img-top" alt="<?= esc($project['title']) ?>">
                    <div class="card-body">
                        <h5 class="card-title"><?= esc($project['title']) ?></h5>
                        <a href="<?= base_url('portfolio/' . $project['slug']) ?>" class="btn btn-info">View</a>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
    </div>
<?= $this->endSection() ?>
