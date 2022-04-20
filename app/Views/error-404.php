<?= $this->extend('layouts/landing-page') ?>
<?= $this->section('content') ?>
<section class="clean-block clean-hero" style="background-image:url(http://kuliahsambilkerja.info/wp-content/uploads/2017/01/GUNDAR.jpg);color:rgba(125, 0, 118, 0.85);min-height: 200px;">
    <div class="text">
        <h4>Biro Administrasi Perencanaan dan Sistem Informasi<br>Universitas Gunadarma</h4>
    </div>
</section>
<section class="clean-block" style="padding-bottom: 0px">
    <div class="container mt-5 mb-5">
        <h1 class="text-center display-1"><i class="fas fa-triangle-exclamation text-danger"></i></h1>
        <h3 class="mt-5">Error 404 - <span class="text-muted">Data not found</span></h3>
        <h6>
            <?php if(! empty($message) && $message !== '(null)'): ?>
                <?= nl2br(esc($message)) ?>
            <?php else: ?>
                "Oops, I screwed up and you discovered my fatal flaw. Well, we're not all perfect, but we try.  Can you try this again or maybe visit our <a href="<?= base_url() ?>" title="Biro Administrasi Perencanaan dan Sistem Informasi – Universitas Gunadarma">Home page</a> to start fresh.  We'll do better next time."
            <?php endif ?>
        </h6>
    </div>
    <div class="clearfix"></div>
</section>
<?= $this->endSection() ?>