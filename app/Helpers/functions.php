<?php

function get_age() {
	$date = \Carbon\Carbon::createFromDate(1985,07,24);
	return $date->diffForHumans(null, \Carbon\CarbonInterface::DIFF_ABSOLUTE);
}