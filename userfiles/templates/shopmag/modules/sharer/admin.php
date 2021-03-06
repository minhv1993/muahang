<?php only_admin_access(); ?>



<?php

    $facebook_enabled = get_option('facebook_enabled', $params['id']) == 'y';
    $twitter_enabled = get_option('twitter_enabled', $params['id']) == 'y';
    $googleplus_enabled = get_option('googleplus_enabled', $params['id']) == 'y';
    $pinterest_enabled = get_option('pinterest_enabled', $params['id']) == 'y';



?>


<?php



?>


<div class="module-live-edit-settings">
<style scoped="scoped">

.module-social-links-settings-table .mw-ui-inline-label{
  margin-right:0;
  padding-right: 3px;
  width: 130px;
  text-align: right;
}

.module-social-links-settings-table [class*='mw-icon-']{
  font-size: 27px;
}

</style>

<table width="100%" cellspacing="0" cellpadding="0" class="mw-ui-table mw-ui-table-basic module-social-links-settings-table">
  <thead>
    <tr>
        <th>Icon </th>
        <th>Enabled </th>
        <th>URL</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td><span class="mw-icon-facebook"></span></td>
      <td><label class="mw-ui-check">
                <input type="checkbox" class="mw_option_field" name="facebook_enabled" value="y" <?php if($facebook_enabled) print 'checked="checked"'; ?>><span></span>
            </label></td>
    </tr>
    <tr>
      <td><span class="mw-icon-twitter"></span></td>
      <td><label class="mw-ui-check">
                <input type="checkbox" class="mw_option_field" name="twitter_enabled" value="y" <?php if($twitter_enabled) print 'checked="checked"'; ?>><span></span>
            </label></td>
    </tr>

    <tr>
      <td><span class="mw-icon-googleplus"></span></td>
      <td><label class="mw-ui-check">
                <input type="checkbox" class="mw_option_field" name="googleplus_enabled" value="y" <?php if($googleplus_enabled) print 'checked="checked"'; ?>><span></span>
            </label></td>
    </tr>

    <tr>
      <td><span class="mw-icon-social-pinterest"></span></td>
      <td><label class="mw-ui-check">
                <input type="checkbox" class="mw_option_field" name="pinterest_enabled" value="y" <?php if($pinterest_enabled) print 'checked="checked"'; ?>><span></span>
            </label></td>
    </tr>

    
  </tbody>
</table>


</div>