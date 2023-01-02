<!DOCTYPE html>
<html lang="ca">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" href="<?= base_url('/assets/css/bulma.css') ?>">
	<script src="https://kit.fontawesome.com/7cb3f7dca8.js" crossorigin="anonymous"></script>
	<title>La meva Página d'Inici</title>
</head>

<body>
	<div class="container is-widescreen">
		<div class="navbar">
			<div class="navbar-brand">
				<p class="navbar-item">
					<?php if(date('H')<12 && date('H'>6)): ?>
						Bon dìa!
					<?php elseif(date('H')>12 && date('H')<20): ?>
						Bona tarda!
					<?php else: ?>
						Bona nit!
					<?php endif; ?>
				</p>
				<p class="navbar-item"><strong>Avui és</strong>&nbsp;<?= date('d-m-Y') ?></p>
			</div>
			<div class="navbar-end">
				
			</div>
		</div>
