<style>
.bd-placeholder-img {
	font-size: 1.125rem;
	text-anchor: middle;
	-webkit-user-select: none;
	-moz-user-select: none;
	user-select: none;
}

@media (min-width: 768px) {
	.bd-placeholder-img-lg {
		font-size: 3.5rem;
	}
}
</style>


<main>

<div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 240px;">

	<ul class="nav nav-pills flex-column mb-auto">
		<li class="nav-item">
			<a href="?hal=home" class="nav-link link-dark <?php
			if ($hal=="home")
				echo "active";?>" aria-current="page"> Home </a>
		</li>
		<li class="nav-item">
			<a href="?hal=register" class="nav-link link-dark  <?php
			if ($hal=="register")
				echo "active";?>"> Daftar </a>
		</li>
		<li class="nav-item">
			<a href="?hal=login-admin" class="nav-link link-dark  <?php
			if ($hal=="login-admin")
				echo "active";?>"> Masuk Admin </a>
		</li>
		<li class="nav-item">
			<a href="?hal=login-user" class="nav-link link-dark  <?php
			if ($hal=="login-user")
				echo "active";?>"> Masuk User </a>
		</li>
	</ul>
<hr>

</div>
</main>

<script src="sidebars.js"></script>

