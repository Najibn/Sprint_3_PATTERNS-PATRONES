<?php
require_once 'SoapApplication.php';
require_once 'RinserApplication.php';
require_once 'Dryer.php';
require_once 'AutomaticDishWasherFacade.php';

$boosch = new AutomaticDishWasherFacade(new SoapApplication(), new RinserApplication(), new DryerApplication());
$boosch->StartOnButton();



// A dishwasher:
// Adds water and tablet or gel.
// Heats the water to the appropriate temperature.
// Automatically opens the detergent dispenser at the right time.
// Shoots the water through spray arms to get the dishes clean.
// Drains the dirty water.
// Sprays more water on the dishes to rinse them.
// Drains itself again.

// When we wash dishes (by hand), we generally 
// take a piece of laundry, soap it, rinse it, and put it in the dryer.

// These steps are fully automated with an automatic dishwasher where,
// basically, we put in a tablet or gel,
// press the "on" button, and
// it proceeds with these steps automatically. 
// Implement this logic using the Facade pattern.

?>