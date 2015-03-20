<div class="wrap">
<h2>Add This Event Preferences</h2>

<form method="post" action="options.php">
<?php wp_nonce_field('update-options'); ?>
<?php settings_fields('addthisevent'); ?>

<p>The real work here is done by the good folks at <a href="http://addthisevent.com">addthisevent.com</a>. If you're using this on a site that makes money please go buy a license.</p>
<table class="form-table">

    <tr>
        <th scope="row">Add This Event License:</th>
        <td>
            <input type="text" name="ate_license" value="<?php echo get_option('ate_license'); ?>" />
        </td>
    </tr>
    <tr>
    <th scope="row">Use default CSS:</th>
        <td>
            <input type="checkbox" name="ate_css" value="true" />
        </td>
    </tr>

</table>

<input type="hidden" name="action" value="update" />

<p class="submit">
<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
</p>

</form>
</div>
