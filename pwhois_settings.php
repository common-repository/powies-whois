<div class="wrap">
<h2><?php _e('Powie\'s WHOIS Settings', 'powies-whois') ?></h2>
<form method="post" action="options.php">
<?php
settings_fields( 'pwhois-settings' );
?>
<div id="poststuff">
<div class="postbox">
<h3> <?php _e('Result Settings', 'powies-whois') ?></h3>
	<div class="inside">
    <table class="form-table">
        <tr valign="top">
	        <th scope="row"><?php _e('Show www. before domain field', 'powies-whois') ?></th>
    	    <td><input type="checkbox" name="show-www" id="show-www" value="1" <?php checked(esc_attr(get_option('show-www')), 1); ?> /></td>
        </tr>
        <tr valign="top">
	        <th scope="row"><?php _e('Show whois output in result', 'powies-whois') ?></th>
    	    <td><input type="checkbox" name="show-whois-output" id="show-whois-output" value="1" <?php checked(esc_attr(get_option('show-whois-output')), 1); ?> /></td>
        </tr>
        <tr valign="top">
        	<th scope="row"><?php _e('Show on available domains', 'powies-whois') ?></th>
        	<td><textarea rows="3" name="display-on-free" style="width:100%;"><?php echo esc_attr(get_option('display-on-free')); ?></textarea></td>
        </tr>
        <tr valign="top">
        	<th scope="row"><?php _e('Show on unavailable domains', 'powies-whois') ?></th>
        	<td><textarea rows="3" name="display-on-connect" style="width:100%;"><?php echo esc_attr(get_option('display-on-connect')); ?></textarea></td>
        </tr>
        <tr valign="top">
        	<th scope="row"><?php _e('Show on invalid domain', 'powies-whois') ?></th>
        	<td><textarea rows="3" name="display-on-invalid" style="width:100%;"><?php echo esc_attr(get_option('display-on-invalid')); ?></textarea></td>
        </tr>

        <tr valign="top">
        	<th scope="row"><?php _e('HTML before whois output', 'powies-whois') ?></th>
        	<td><input type="text" name="before-whois-output" value="<?php echo esc_attr(get_option('before-whois-output')); ?>" style="width:100%;" /></td>
        </tr>
        <tr valign="top">
        	<th scope="row"><?php _e('HTML after whois output', 'powies-whois') ?></th>
        	<td><input type="text" name="after-whois-output" value="<?php echo esc_attr(get_option('after-whois-output')); ?>" style="width:100%;"/></td>
        </tr>

        <tr valign="top">
        	<th scope="row"><?php _e('Remark', 'powies-whois') ?></th>
        	<td><?php _e('The status of free/connected can not be determined with certainty', 'powies-whois') ?></td>
        </tr>
    </table>
    </div>
</div>
</div>
<input type="submit" class="button-primary" value="<?php _e('Save Changes') ?>" />
</form>
<br />

<div id="poststuff">
<div class="postbox">
<h3><?php _e('Powie\'s WHOIS Usage', 'powies-whois') ?></h3>
	<div class="inside">
	<?php _e('To display the whois form on a page or post insert this shortcode: <code>[pwhois]</code>','powies-whois') ?>
	<br /><br />
	<?php _e('To select the default TLD use the default parameter: <code>[pwhois default=com]</code>','powies-whois') ?>
    </div>
</div>

<div id="poststuff">
<div class="postbox">
<h3><?php _e('Powie\'s WHOIS Pro', 'powies-whois') ?></h3>
	<div class="inside">
	<?php _e('To have more options and define your own TLDs and whois servers you can get Powie\'s WHOIS Pro','powies-whois') ?>
	<br />
		<a href="https://powie.de/wordpress/powies-whois-pro/">https://powie.de</a>
    </div>
</div>

<div class="postbox">
<h3><?php _e('About', 'powies-whois') ?></h3>
	<div class="inside" style="overflow:auto">
		<div style="float:left;margin-right: 10px; display:inline;">
		<!-- www -->
		<a href="https://powie.de">https://powie.de</a>
		</div>

		<div style="float:left;margin-right: 10px; display:inline;">
		<!-- twitter -->
		<a href="https://twitter.com/PowieT" class="twitter-follow-button" data-show-count="false" data-lang="de">@PowieT folgen</a>
		<script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0];if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src="//platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
		</div>

		<div style="float:left;margin-right: 10px; display:inline;">
		<!-- fb -->
		<iframe src="//www.facebook.com/plugins/like.php?href=https%3A%2F%2Fwww.facebook.com%2Fpowiede&amp;send=false&amp;layout=standard&amp;width=450&amp;show_faces=false&amp;font&amp;colorscheme=light&amp;action=like&amp;height=35" scrolling="no" frameborder="0" style="border:none; overflow:hidden; width:350px; height:35px;" allowTransparency="true"></iframe>
		</div>

    </div>
</div>

</div>

</div>