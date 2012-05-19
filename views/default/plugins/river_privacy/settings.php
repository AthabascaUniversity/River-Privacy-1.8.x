<?php

$options = array(
	'name' => 'params[hide_old_items]',
	'value' => $vars['entity']->hide_old_items ? $vars['entity']->hide_old_items : 'yes',
	'options_values' => array(
		'yes' => elgg_echo('option:yes'),
		'no' => elgg_echo('option:no'), 
	),
);

echo elgg_echo('river_privacy:hide_old:label') . "<br>";
echo elgg_view('input/dropdown', $options);

echo "<br><br>" . elgg_echo('river_privacy:hide_old:description');

echo "<br><br>";