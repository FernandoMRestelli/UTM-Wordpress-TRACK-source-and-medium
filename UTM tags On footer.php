//I did it on wordpress, aditionaly using the plugin:HandL UTM Grabber. But you can get the job done eith out this plugin too.
// On footer.php - This would do the job of saving the utm data when an user goes form page to page.

<?php $utm_source = isset($_GET['utm_source']) ? $_GET['utm_source'] : ""; ?>
<?php $utm_medium = isset($_GET['utm_medium']) ? $_GET['utm_medium'] : ""; ?>
<?php $utm_campaign = isset($_GET['utm_campaign']) ? $_GET['utm_campaign'] : ""; ?>
<?php $utm_term = isset($_GET['utm_term']) ? $_GET['utm_term'] : ""; ?>
<?php $utm_content = isset($_GET['utm_content']) ? $_GET['utm_content'] : ""; ?>


<script type="text/javascript">
  jQuery(document).ready(function ($) {
    $(function() {
      $("a").attr('href', function(i, h) {
      return h + (h.indexOf('?') != -1 ? "&utm_source=<?php echo $utm_source; ?>&utm_medium=<?php echo $utm_medium; ?>&utm_campaign=<?php echo $utm_campaign; ?>&utm_term=<?php echo $utm_term; ?>&utm_content=<?php echo $utm_content; ?>" : "?utm_source=<?php echo $utm_source; ?>&utm_medium=<?php echo $utm_medium; ?>&utm_campaign=<?php echo $utm_campaign; ?>&utm_term=<?php echo $utm_term; ?>&utm_content=<?php echo $utm_content; ?>");
  });
    });
      });
</script>
