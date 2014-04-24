<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the id=main div and all content
 * after.  Calls sidebar-footer.php for bottom widgets.
 *
 * @package WordPress
 * @subpackage GF Theme Ver2

 */
?>
		<br class="clear" />
		<div class="footer">
		<?php if(!isWebsiteAVanityDomain($_SERVER['SERVER_NAME'])){ ?>
			<p><a href="/">Corporate Home Page</a> &bull; <a href="/?page_id=46">About Goldberg Law Group</a> &bull; <a href="/?page_id=130">Directions</a> &bull; <a href="/?page_id=132">Disclaimer</a> &bull; <a href="/?page_id=134">Site Map</a>
			<br />
			<a href="/?page_id=7">Healthcare Law</a> &bull; <a href="/?page_id=258">Information for Doctors</a> &bull; <a href="/?page_id=260">Information for Nurses</a> &bull; <a href="/?page_id=11">Grandparent Visitation Rights</a> &bull; <a href="/?page_id=13">Family Law - Divorce &amp; Custody Issues</a></p>
		<?php }else{ ?>
			<p><a href="/">Home Page</a> &bull; <a href="/?page_id=46">About Goldberg Law Group</a> &bull; <a href="/?page_id=130">Directions</a> &bull; <a href="/?page_id=132">Disclaimer</a></p>
		<?php } ?>
			<p>&copy; 2011 Goldberg Law Group, LLC &bull;  All rights reserved &bull; The  information contained on this web site is advertising material.
			<br />
			120 South Riverside Plaza, Suite 1675 &bull;   Chicago, IL 60606-6101 &bull;  Phone:  (312) 930-5600 &bull;  Fax: (312) 930-0944 &bull; E-mail: <a href="mailto:mgoldberg@goldberglawoffice.com">mgoldberg@goldberglawoffice.com</a> or <a href="mailto:jgoldberg@goldberglawoffice.com">jgoldberg@goldberglawoffice.com</a></p>
			<?php
				/* Always have wp_footer() just before the closing </body>
				 * tag of your theme, or you will break many plugins, which
				 * generally use this hook to reference JavaScript files.
				 */

				wp_footer();
			?>
		</div>
	</div>
	<script src="http://www.apexchat.com/scripts/invitation.ashx?company=goldberg"></script>
</body>
</html>