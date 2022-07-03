<?php
/*
Template name: Terms of service
*/
?>
<style>
    .policy-container br{
        display: none;
    }
</style>

<?php include 'header.php'; ?>
<section class="policy-section flex flex-col items-center indent-y">
    <div class="policy-container terms-page">
        <h1><?php the_title(); ?></h1>
        <p><?php pll_e('Last Updated'); ?>: <?php echo get_the_modified_date(); ?></p>
        <?php the_content(); ?>
    </div>
</section>
<?php include 'footer.php'; ?>