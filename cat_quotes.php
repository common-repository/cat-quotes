<?php
/*
Plugin Name: Cat Quote
Plugin URI: 
Description: This Plugin is based on the "Hello Dolly" WordPress Plugin , When enabled you will randomly see a Cat Quote , in the upper right of your admin screen.
Author: Brandon Roode
Version: 1.0
Author URI: http://brandonspage.atwebpages.com
*/ 

$quote =  array();

$quote[0]="Always give generously. A small bird or rodent left on the bed tells them, I care.";
$quote[1]="Climb your way to the top. That's why the drapes are there.";
$quote[2]="Curiosity never killed anything except maybe a few hours.";
$quote[3]="Find your place in the sun. Especially if it happens to be on that nice pile of warm, clean laundry.";
$quote[4]="If you're not receiving enough attention, try knocking over several expensive antique lamps.";
$quote[5]="Never sleep alone when you can sleep on someone's face";
$quote[5]="Variety is the spice of life. One day ignore people, the next day annoy them.";
$quote[6]="Of all God's creatures, there is only one that cannot be made slave of the leash. That one is the cat. If man could be crossed with the cat it would improve the man, but it would deteriorate the cat.";
$quote[7]="With their qualities of cleanliness, discretion, affection, patience, dignity, and courage, how many of us, I ask you, would be capable of becoming cats?";
$quote[8]="I have studied many philosophers and many cats. The wisdom of cats is infinitely superior";
$quote[9]="Dogs come when they're called; cats take a message and get back to you later.";
$quote[10]="After scolding one's cat one looks into its face and is seized by the ugly suspicion that it understood every word. And has filed it for reference.";
$quote[11]="There are two means of refuge from the miseries of life: music and cats.";
$quote[12]="When I play with my cat, who knows if I am not a pastime to her more than she is to me?";
$quote[13]="A meow massages the heart.";
$quote[14]="Cats are the ultimate narcissists. You can tell this by all the time they spend on personal grooming. Dogs aren't like this. A dog's idea of personal grooming is to roll in a dead fish.";
$quote[15]="If we treated everyone we meet with the same affection we bestow upon our favorite cat, they, too, would purr.";
$quote[16]="There's no need for a piece of sculpture in a home that has a cat." ;
$quote[17]="Cats' hearing apparatus is built to allow the human voice to easily go in one ear and out the other." ;



$chosen = wptexturize($quote[ mt_rand(0, count($quote)-1)]);



// This just echoes the chosen line, we'll position it later

function Motivational_Quote () {
	global $chosen;
	echo "<p id='motivational'>$chosen</p>";
}

// Now we set that function up to execute when the admin_footer action is called
add_action('admin_footer', 'Motivational_Quote');

// We need some CSS to position the paragraph
function Motivational_Quote_css() {
	echo "
	<style type='text/css'>
	#motivational {
		position: absolute;
		top: 5px;
margin: 0; padding: 0;
		right: 1em;
		font-size: 14px;
		color: #666;
	}
	</style>
	";
}

add_action('admin_head', 'Motivational_Quote_css');
?>