<div class="banner">
	<div class="page-wrap">
		<ul class="nav-tab clearfix" id="J_banner_trigger">
			<?php for($i=0; $i < count($items); $i++){ ?>
				<li data-index="<?php echo $i;?>" <?php if($i==0){ ?> class="active" <?php }?>>
					<a></a>
				</li>
			<?php } ?>
		</ul>
	</div>

	<div class="banner-container">
		<?php foreach ($items as $item ){ ?>
			<div class="banner-item">
				<img src="<?php echo $item['img']; ?>" alt="">
				<div class="container">
					<div class="container-font">
						<?php echo $item['content']; ?>
					</div>
					<div class="container-button">
						<a href="<?php echo $item['button']['url']; ?>">
							<?php echo $item['button']['name']; ?>
						</a>
					</div>
				</div>
			</div>
		<?php } ?>
	</div>
</div>