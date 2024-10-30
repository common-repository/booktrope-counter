=== Booktrope - Counter ===
Contributors: blahblahyaya
Tags: apple, style, flip counter, counter, enumerator, flip clock counter, apple flip counter, count up
Donate Link: http://andylroberts.com/plugins/
Requires at least: 3.1
Tested up to: 3.5.2
Stable tag: 1.1

Easily create an apple style visual counter

== Description ==

This plugin creates a beautiful "Apple style" flip-clock counter on your post, page or widget using a single short code. This plugin was created to track the number of books delivered by Booktrope Publishing, but could have many other uses. You can set the starting number, the increment, the pace, and a seed date (the date on which the seed number was correct).

You can see an example of the counter in action at http://booktrope.com

Short Code: 

[thecounter num="989432" date="2013-04-01" increment="2" pace="600"]

 	num - starting number
	date - seed date YYYY-MM-DD (date on which the number was valid)
	increment - how many to add each time the counter fires
	pace - how long in milliseconds to wait until adding the increment

If a seed date exists, the plugin will calculate how many times the counter would have fired and update the starting number to be correct for the current time.

== Installation ==

1. Upload the `bt-counter` folder to the `/wp-content/plugins/` directory
1. Activate the plugin through the 'Plugins' menu in WordPress
1. To test: 
1. Create a new page or post and add the text: <strong>[thecounter]</strong>
1. Publish the page and the counter should appear using the default values.
1. Edit the page or post and customize the counter rate, increment, starting value and date 

Short Code Definition:

[thecounter num="989432" date="2013-04-01" increment="2" pace="600"]

        num - starting number
        date - seed date YYYY-MM-DD (date on which the number was valid)
        increment - how many to add each time the counter fires
        pace - how long in milliseconds to wait until adding the increment

== Screenshots ==

1. Booktrope Apple Style Counter in action

== Frequently Asked Questions ==


== Changelog ==

= 0.1 =
* Initial release

