<div class="wrap">
  <h2><img src="<?php echo PRLI_URL.'/images/pretty-link-med.png'; ?>"/>&nbsp;Pretty Link: Links</h2>
  <div id="message" class="updated fade" style="padding:5px;"><?php echo $prli_message; ?></div> 
<p><a href="?page=<?php print PRLI_PLUGIN_NAME; ?>/prli-links.php&action=new"><img src="<?php echo PRLI_URL.'/images/pretty-link-add.png'; ?>"/> Add a Pretty Link</a>&nbsp;|&nbsp;<a href="?page=<?php print PRLI_PLUGIN_NAME; ?>/prli-links.php&regenerate=true">Manually Regenerate Pretty Links</a></p>
<?php
  require(PRLI_VIEWS_PATH.'/shared/table-nav.php');
?>
<table class="widefat post fixed" cellspacing="0">
    <thead>
    <tr>
      <th class="manage-column" width="20%">Slug</th>
      <th class="manage-column" width="10%">Clicks</th>
      <th class="manage-column" width="45%">URL</th>
      <th class="manage-column" width="25%">Pretty Link</th>
    </tr>
    </thead>
  <?php

  if(count($links) <= 0)
  {
      ?>
    <tr>
      <td colspan="5"><a href="?page=<?php print PRLI_PLUGIN_NAME; ?>/prli-links.php&action=new"><img src="<?php echo PRLI_URL.'/images/pretty-link-add.png'; ?>"/> Add your First Pretty Link</a></td>
    </tr>
    <?php
  }
  else
  {
    foreach($links as $link)
    {
      ?>
      <tr>
        <td class="edit_link">
          <a class="slug_name" href="?page=<?php print PRLI_PLUGIN_NAME; ?>/prli-links.php&action=edit&id=<?php print $link->id; ?>"><?php print $link->slug; ?></a>
          <br/>
          <div class="link_actions" style="display:none;">
            <a href="?page=<?php print PRLI_PLUGIN_NAME; ?>/prli-links.php&action=edit&id=<?php print $link->id; ?>">Edit</a>&nbsp;|&nbsp;<a href="?page=<?php print PRLI_PLUGIN_NAME; ?>/prli-links.php&action=destroy&id=<?php print $link->id; ?>"  onclick="return confirm('Are you sure you want to delete your <?php print $link->slug; ?> Pretty Link?');">Destroy</a>
          </div>
        </td>
        <td><?php print $link->clicks; ?></td>
        <td><a href="<? print $link->url; ?>" target="_blank" title="Visit URL in New Window"><img src="<?php echo PRLI_URL.'/images/url_icon.gif'; ?>" name="Visit" alt="Visit"/></a>&nbsp;&nbsp;<? print $link->url; ?></td>
        <td><input type='text' style="font-size: 10px;" readonly="true" onclick='this.select();' onfocus='this.select();' value='<?php echo get_option('siteurl') . '/' . $link->slug; ?>' size="30" /></td>
      </tr>
      <?php
    }
  }
  ?>
    <tfoot>
    <tr>
      <th class="manage-column">Slug</th>
      <th class="manage-column">Clicks</th>
      <th class="manage-column">URL</th>
      <th class="manage-column">Pretty Link</th>
    </tr>
    </tfoot>
</table>
<?php
  require(PRLI_VIEWS_PATH.'/shared/table-nav.php');
?>

</div>
