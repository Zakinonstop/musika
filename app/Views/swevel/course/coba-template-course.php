<?= $this->extend('layout/template'); ?>
<?= $this->section('content'); ?>


	<?php for($i=1; $i<=8; $i++) : ?>

		[<br>
	        'kategori' => 'Puskesmas Banyuurip',<br>
	        'gambar' => 'puskesmas_banyuurip (<?= $i; ?>).jpg',<br>
	        'created_at' => Time::now(),<br>
	        'updated_at' => Time::now(),<br>
        ],
        <br>            

	<?php endfor; ?>		





<?= $this->endSection(); ?>