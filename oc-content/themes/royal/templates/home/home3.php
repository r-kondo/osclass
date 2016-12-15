<?php
    /*
     *       Royal Multipurpose Osclass Themes
     *       
     *       Copyright (C) 2016 OSCLASS.me
     * 
     *       This is Royal Multipurpose Osclass Themes with Single License
     *  
     *       This program is a commercial software. Copying or distribution without a license is not allowed.
     *         
     *       If you need more licenses for this software. Please read more here <http://www.osclass.me/osclass-me-license/>.
     */
?>
<style>
.space {
    height: 20px;
}
.ad-footers {
    display: none;
}
#footer, section#footerme {
    margin-top: 0px;
}
</style>
<div class="container">
    <div class="col-md-6 catico">
        <h2 id="anita" class="kir"><?php _e("Categories", 'royal');?>
<span class="arrdot"></span>
</h2>
        <div class="clr"></div>
        <ul>
            <?php osc_goto_first_category(); ?>
            <?php $tak=0; while(osc_has_categories() && $tak < 8 ) { ?>
            <a href="<?php echo osc_search_category_url() ; ?>">
                <li>
                    <div style="background:url(<?php echo osc_current_web_theme_url() ; ?>/images/category/<?php echo osc_category_id() ; ?>.png) no-repeat" class="icos <?php echo osc_category_slug() ; ?>"></div>
                    <a href="<?php echo osc_search_category_url() ; ?>">
                        <?php echo osc_category_name() ; ?> </a>
                </li>
            </a>
            <?php $tak++;} ?>
            <?php View::newInstance()->_erase('category') ; ?> </ul>
        <div id="me" class="location" style="display:none;">
            <?php $tak=12 ; while( osc_has_categories() && $tak++ ) { ?>
            <ul>
                <a href="<?php echo osc_search_category_url() ; ?>">
                    <li>
                        <div style="background:url(<?php echo osc_current_web_theme_url() ; ?>/images/category/<?php echo osc_category_id() ; ?>.png) no-repeat" class="icos <?php echo osc_category_slug() ; ?>"></div>
                        <a href="<?php echo osc_search_category_url() ; ?>">
                            <?php echo osc_category_name() ; ?> </a>
                    </li>
                </a>
            </ul>
            <?php } ?> </div> <strong><a id="clickme" class="more" href="javascript:toggleAndChangeText();"><?php _e('View more...', 'royal'); ?> &#9660;</a></strong>
        <div class="empty"></div>
    </div>
    <div class="col-md-6 prop">
        <div class="cinta"> </div>
        <h2 id="anita" class="kir"><?php _e("Region", 'royal');?>
<span class="arrdot"></span>
</h2>
        <div class="horbar"></div>
        <?php View::newInstance()->_exportVariableToView('list_regions', Search::newInstance()->listRegions('%%%%', '>=') ) ; ?>
        <?php if(osc_count_list_regions()> 0 ) { ?>
        <?php $tac=0 ; while(osc_has_list_regions() && $tac < 28 ) { ?>
        <ul id="pilihprop-top" class="col-x col-md-3">
            <li>
                <a href="<?php echo osc_search_url( array( 'sRegion' => osc_list_region_name() ) ) ; ?>">
                    <?php echo osc_list_region_name() ; ?> </a>
            </li>
        </ul>
        <?php $tac++;} ?>
        <?php View::newInstance()->_erase('regions') ; ?>
        <div id="mes" class="location2" style="display:none;">
            <?php $tac=9 ; while(osc_has_list_regions() && $tac++ ) { ?>
            <ul id="pilihprop-top" class="col-x col-md-3">
                <li>
                    <a href="<?php echo osc_search_url( array( 'sRegion' => osc_list_region_name() ) ) ; ?>">
                        <?php echo osc_list_region_name() ; ?> </a>
                </li>
            </ul>
            <?php } ?> </div> <strong><a id="clickmes" class="more" href="javascript:toggleAndChangeText();"><?php _e('View more...', 'royal'); ?> &#9660;</a></strong>
        <?php } ?> </div>
</div>
<?php osc_current_web_theme_path(''.osc_get_preference('katalog-royal', 'royal').'.php') ; ?>

<script>
$(".more").toggle(function(){
    $(this).text("<?php _e('View less...', 'royal'); ?>").siblings("#mes").show();    
}, function(){
    $(this).text("<?php _e('View more...', 'royal'); ?>").siblings("#mes").hide();    
});
</script>
<script>
$(document).ready(function() {
     $('#clickme').click(function() {
          $('#me').animate({
               height: 'toggle'
               }, 500
          );
     });
});
</script>
<script>
$(document).ready(function() {
     $('#clickmes').click(function() {
          $('#mes').animate({
               height: 'toggle'
               }, 500
          );
     });
});
</script>