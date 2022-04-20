<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, shrink-to-fit=no">

        <title>BAPSI UG</title>

        <!-- Font Style -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,400;0,600;0,700;1,400;1,600;1,700&display=swap">

        <!-- Assets -->
        <link rel="stylesheet" href="<?= base_url('public/css/bootstrap.min.css') ?>">
        <link rel="stylesheet" href="<?= base_url('public/css/vanilla-zoom.min.css') ?>">

        <!-- CDN Assets -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.1/css/all.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/simple-line-icons/2.4.1/css/simple-line-icons.min.css">

        <link rel="stylesheet" href="<?= base_url('public/css/custom.css?q='.time()) ?>">
    </head>
    <body>
        <div class="page-movement" style="display: none;">
            <nav class="navbar navbar-light navbar-expand-lg fixed-top bg-white clean-navbar">
                <div class="container">
                    <a class="navbar-brand fw-bold logo" href="<?= base_url() ?>">BAPSI UG</a>
                    <button data-bs-toggle="collapse" class="navbar-toggler" data-bs-target="#navcol-1">
                        <span class="visually-hidden">Toggle navigation</span><span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navcol-1">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item"><a class="nav-link active" href="<?= base_url() ?>">Home</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('about') ?>">About</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('download') ?>">Download</a></li>
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('faq') ?>">FAQ</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="ddTIK" role="button" data-bs-toggle="dropdown" aria-expanded="false">TIK</a>
                                <ul class="dropdown-menu" aria-labelledby="ddTIK">
                                    <li><a class="dropdown-item" href="<?= base_url('fasilitas-tik') ?>">Fasilitas</a></li>
                                    <li><a class="dropdown-item" href="<?= base_url('infrastruktur-tik') ?>">Infrastruktur</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('news') ?>">News</a></li>
                            <li class="nav-item dropdown">
                                <a class="nav-link dropdown-toggle" href="#" id="ddSite" role="button" data-bs-toggle="dropdown" aria-expanded="false">Site</a>
                                <ul class="dropdown-menu" aria-labelledby="ddSite">
                                    <li><a class="dropdown-item" href="<?= base_url('helpdesk') ?>">Helpdesk</a></li>
                                    <li><a class="dropdown-item" href="<?= base_url('staffsite') ?>">Staffsite</a></li>
                                    <li><a class="dropdown-item" href="<?= base_url('studentsite') ?>">Studentsite</a></li>
                                </ul>
                            </li>
                            <li class="nav-item"><a class="nav-link" href="<?= base_url('ug-on-the-press') ?>">UG On The Press</a></li>
                        </ul>
                    </div>
                </div>
            </nav>
            <main class="page landing-page">
                <?= $this->renderSection('content') ?>
            </main>
            <footer class="page-footer dark">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-4">
                            <ul>
                                <li><a href="https://baak.gunadarma.ac.id/">BAAK</a></li>
                                <li><a href="https://v-class.gunadarma.ac.id/">V-Class</a></li>
                                <li><a href="http://inherent.gunadarma.ac.id/">Inherent</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <ul>
                                <li><a href="http://staffsite.gunadarma.ac.id/">Staffsite</a></li>
                                <li><a href="http://elearning.gunadarma.ac.id/">E-Learning</a></li>
                                <li><a href="https://gunadarma.ac.id/">UG Website</a></li>
                            </ul>
                        </div>
                        <div class="col-sm-4">
                            <ul>
                                <li><a href="https://studentsite.gunadarma.ac.id/">Studentsite</a></li>
                                <li><a href="http://career.gunadarma.ac.id/">Career Center</a></li>
                                <li><a href="http://community.gunadarma.ac.id/">UG Community</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="footer-copyright">
                    <p>Copyright © 2022 Abthal Hashilah Yusuf × ShennX Network</p>
                </div>
            </footer>
        </div>

        <!-- JQuery -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>

        <!-- CDN Assets -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/baguettebox.js/1.10.0/baguetteBox.min.js"></script>

        <!-- Custom Script -->
        <script>
            $(document).ready(function(){
                $('.page-movement').slideDown(1800);
            });
        </script>

        <!-- Theme -->
        <script src="<?= base_url('public/js/vanilla-zoom.js') ?>"></script>
        <script src="<?= base_url('public/js/theme.js') ?>"></script>
    </body>
</html>