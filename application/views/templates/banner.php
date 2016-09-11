<div class="banner" style="padding-top: <?php echo $padding_top; ?>px;">
	<ul>
		<?php for($i=1; $i <= count($items); $i++){ ?>
		<li <?php if($i==1){?>class="on"<?php }?>><?php echo $i;?></li>
		<?php } ?>
	</ul>

	<div class="banner_list">
		<?php foreach ($items as $item ){ ?>
		<a <?php if(isset($item['url']) && !empty($item['url'])){ ?> href="$item['url']" <?php } ?>><img style="max-width: 100%" src="<?php echo $item['img']; ?>"></a>
		<?php } ?>
	</div>
</div>

<script type="text/javascript">
	var t = n = 0, count;
	$(document).ready(function() {
		count = $(".banner_list a").length;
		$(".banner_list a:not(:first-child)").hide();
		$(".banner li").click(function() {
			var i = $(this).text() - 1; //获取Li元素内的值，即1，2，3，4
			n = i;
			if (i >= count) return;
			$(".banner_list a").filter(":visible").fadeOut(0).parent().children().eq(i).fadeIn(0);
			$(".banner").css('background',"");
			$(this).toggleClass("on");
			$(this).siblings().removeAttr("class");
		});
		t = setInterval("showAuto()", <?php echo $time; ?>);
		$(".banner").hover(function() {
				clearInterval(t)
			},
			function() {
				t = setInterval("showAuto()", <?php echo $time; ?>);
			});
	})

	function showAuto() {
		n = n >= (count - 1) ? 0 : ++n;
		$(".banner li").eq(n).trigger('click');
	}
</script>