<header class="m_header" style="position:<?php echo $position;?>;<?php if(isset($background_color)) echo 'background-color:'.$background_color.';'; ?>max-height: <?php echo $max_height; ?>px; padding-top: <?php echo $padding_top; ?>px;padding-bottom: <?php echo $padding_bottom; ?>px;">
	<div class="nav-left" style="padding-left:<?php echo $logo['padding_left']; ?>px;">
		<a href="/" title="">
			<img class="logo" style="height: <?php echo $logo['height']; ?>px" src="/resource/img/logo.jpg" />
		</a>
	</div>
	<div class="nav-right" style="float: right;">
		<ul class="nav">
			<?php foreach ($menu as $item){ ?>
			<li>
				<a href="<?php echo $item['url'] ?>">
					<?php echo $item['name'] ?>
				</a>
			</li>
			<?php } ?>
		</ul>
	</div>
</header>