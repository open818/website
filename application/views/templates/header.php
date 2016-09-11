<header class="m_header" style="position:<?php echo $position;?>;<?php if(isset($background_color)) echo 'background-color:'.$background_color.';'; ?>max-height: <?php echo $max_height; ?>px; padding-top: <?php echo $padding_top; ?>px;padding-bottom: <?php echo $padding_bottom; ?>px;">
	<div class="nav-left" style="padding-left:<?php echo $logo['padding_left']; ?>px;">
		<a href="/" title="">
			<img class="logo" style="height: <?php echo $logo['height']; ?>px" src="/resource/img/logo.jpg" />
		</a>
	</div>
	<div class="nav-right" style="float: right;">
		<ul class="nav">
			<?php $i = 0; foreach ($menus as $item){ ?>
			<li>
				<a class="a<?php echo $i; ?>" href="<?php echo $item['url'] ?>" style="color: <?php echo $item['font_color']; ?>;">
					<?php echo $item['name'] ?>
				</a>
				<style>header .nav > li:hover > a.a<?php echo $i; ?> { background-color: <?php echo $item['hover_background_color']; ?>;  }</style>
			</li>
			<?php $i++; } ?>
		</ul>
	</div>
</header>