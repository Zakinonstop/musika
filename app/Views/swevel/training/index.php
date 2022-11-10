<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>
    <?= $this->include('swevel/course/navbar-course'); ?>
    <?= $this->include('swevel/training/training'); ?>    
    <?= $this->include('swevel/course/footer-course'); ?>
<?= $this->endSection(); ?>