<?php

/**
 * Event List Widget: Standard List
 *
 * The template is used for displaying the [eo_event] shortcode *unless* it is wrapped around a placeholder: e.g. [eo_event] {placeholder} [/eo_event].
 *
 * You can use this to edit how the output of the eo_event shortcode. See http://docs.wp-event-organiser.com/shortcodes/events-list
 * For the event list widget see widget-event-list.php
 *
 * For a list of available functions (outputting dates, venue details etc) see http://codex.wp-event-organiser.com/
 *
 ***************** NOTICE: *****************
 *  Do not make changes to this file. Any changes made to this file
 * will be overwritten if the plug-in is updated.
 *
 * To overwrite this template with your own, make a copy of it (with the same name)
 * in your theme directory. See http://docs.wp-event-organiser.com/theme-integration for more information
 *
 * WordPress will automatically prioritise the template in your theme directory.
 ***************** NOTICE: *****************
 *
 * @package Event Organiser (plug-in)
 * @since 1.7
 */
global $eo_event_loop, $eo_event_loop_args;

//The list ID / classes
$id = ($eo_event_loop_args['id'] ? 'id="' . $eo_event_loop_args['id'] . '"' : '');
$classes = $eo_event_loop_args['class'];

?>

<?php if ($eo_event_loop->have_posts()) :  ?>

	<h1>Eventos</h1>

	<div <?php echo $id; ?> class="row events-container <?php echo esc_attr($classes); ?>">

		<?php while ($eo_event_loop->have_posts()) :  $eo_event_loop->the_post(); ?>

			<?php
			//Generate HTML classes for this event
			$eo_event_classes = eo_get_event_classes();

			//For non-all-day events, include time format
			$format = eo_get_event_datetime_format();
			?>


			<div class="col-md-6 col-lg-4 col-xxl-3 mb-4 event-card">

				<?php the_post_thumbnail(); ?>

				<p class="event-title"><?php the_title(); ?></p>
				<p class="event-excerpt"><?php the_excerpt(); ?></p>
				<p class="event-date"> <?php echo __('on', 'eventorganiser') . ' ' . eo_get_the_start($format); ?></p>


				<p class="event-btn text-center"><a href="<?php echo eo_get_permalink(); ?>"> Ver evento</a></p>

			</div>




		<?php endwhile; ?>

	</div>

<?php elseif (!empty($eo_event_loop_args['no_events'])) :  ?>

	<ul id="<?php echo esc_attr($id); ?>" class="<?php echo esc_attr($classes); ?>">
		<li class="eo-no-events"> <?php echo $eo_event_loop_args['no_events']; ?> </li>
	</ul>

<?php endif;
