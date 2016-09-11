<footer <?php if(isset($name)){ echo 'id="'.$name.'"'; }?> style="background-color: <?php echo $background_color; ?>;">
    <section>
        <div class="text-center" style="padding: 30px 30px;">
            <?php foreach($items as $item){ ?>
            <div class="col-md-3">
                <div class="icon-top red-text">
                    <span class="<?php echo $item['icon']; ?>" style = "font-size:30px;color:<?php echo $item['icon_color']?>;"></span>
                </div>
                <div class="zerif-footer-address" style="color: #FFFFFF"><?php echo $item['text']; ?></div>
            </div>
            <?php }?>
        </div>
    </section>
    <section class="copyright">
        <label>
            <?php echo $copyright; ?>
        </label>
    </section>
</footer>