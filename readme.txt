=== EDD Download Shortcodes ===
Contributors: Bento4Extend 
Donate link:http://extend.bt4.me/downloads/edd-download-extendify/
Tags: EDD,Shortcodes,Download
Requires at least: Wordpress 4.3
Tested up to: Wordpress 4.4
Stable tag: 1.0
License: GPLv2

This plugin will allow for you to extend your usage of Easy Digital Downloads through the use of shortcodes and to customize your display.

== Description ==

This plugin will allow you to show, either on a download's page or off, different download ids.

The following shortcodes are available for your usage:

[download\_url\_addtocart id=a style=b option=c price=d text=e color=f class=g direct=h direct=i show=j]
* This will sllow for a download add to cart button to show. The parameters are: id = the post id for the download / if not used then it will check the current page instead. option = the id number of the option to reference. show = url will show the url instead of the button, although if not used it will show a butotn. class = will use the css class for styling the button. style = will accept "button" or "text" for styling as a button or showing as text. color = will set the color style of the button gray, blue, green, dark gray, or yellow. price = if 1 then it will show the price, if 0 it won't. text = will change the text in the parameter.

[download_date id=a format=b type=c]
* This will show the date for the specified download to be shown. id = the post id for the download, or if not used it will show the current post id if on the download. format = will show the date in the format provided. Can see the different format options on: <a href="https://codex.wordpress.org/Formatting_Date_and_Time" target="_blank" title="https://codex.wordpress.org/Formatting_Date_and_Time">https://codex.wordpress.org/Formatting_Date_and_Time</a>. The default is "Y/m/d \a\t g:i A". Adding type = modified will have it use the modified date instead of the published date.

[download\_description id=a addtext=b limit=c limit\_words=d shortcodes=e]
* Will get the description. The id parameter works the same as the previous shortcodes. addtext = will use this text to add on to the end if it is shortended using limit or limit\_words. limit will shorten it to the specified number of characters. limit\_words will shorten it to the specified number of characters. shortcodes if set to trim will trim the shortcodes from the text. By default shortcodes are processed.

[download\_excerpt id=a addtext=b limit=c limit\_words=d shortcodes=e more=f]
* Will get the description. The id parameter works the same as the previous shortcodes. addtext = will use this text to add on to the end if it is shortended using limit or limit\_words. limit will shorten it to the specified number of characters. limit\_words will shorten it to the specified number of characters. shortcodes if set to trim will trim the shortcodes from the text. By default shortcodes are processed. If more = yes then it will override any limit / limit\_words parameter if there is a more tag in the description or excerpt, or if no limit / limit\_words parameter is set it will limit to 55 words.

[download_id]
* This will return the id of the current download. Really only useful if currently on a download page unless using the pro / extendify version of this plugin which has a loop functionality in it to go through all downloads.

[download_name id=a limit=b]
* This will return the name of the download. The id parameter works the same as for previous shortcodes, and so does the limit parameter if used.

[download_url id=a  show=b before=c after=d text=e rel=f style=g class=h title=i tabindex=j attributes=k]
* This will return the url for the specified download. The id parameter works the same way as for previous shortcodes. show = this will show the url without any html code if set to "url". Only the “before” and “after” parameters will work with this parameter. before = this will add text before any of the type of outputs. Will allow html or shortcodes to be passed with it. after = this will add text after any of the type of outputs. Will allow html or shortcodes to be passed with it. text = if set to no it would not have it so that no text or </a> is automatically added. This will allow for further customization as it'd be manually added and that way shortcodes can be used. If set to anything else it will set the text shown for the link to what is in it. HTML can be processed but shortcodes cannot be due to wordpress limitations. target, rel, style, class, title, and tabindex will pass what is set to the <A> html link. attributes = will pass whatever is set here as additional parameters for the <A> html link.

[download\_url\_image id=a show=b before=c after=d align=e alt=f width=g height=h style=i class=j title=k tabindex=l attributes=m size=n]
* This will show the featured image for the download. id works the same as for previous shortcodes. show=url will just return the url and parse out any <img> html code but will only work with the before and after parameters. before = shows this text before any <img> code for the download. after = shows this text after any <img> code for the download. align, alt, width, height, style, class, title, and tabindex will pass these parameters to the <img> html tag. attributes = will add this parameter to the end of the <img> tag as any tag or text or attribute wished.  size = will set the thumbnail size for the image url passed based on wordpress standards in <a href="https://codex.wordpress.org/Function_Reference/the_post_thumbnail" target="_blank" title="https://codex.wordpress.org/Function_Reference/the_post_thumbnail">https://codex.wordpress.org/Function_Reference/the_post_thumbnail</a>.

[download_price id=a]
* This will return the default price for the download. the id parameter works the same as for previous shortcodes.

[download\_price\_lowest id=a]
* This will return the lowest price whether there is only one or many. The id parameter works the same as for previous shortcodes.

We also have more conditional logic shortcodes available in this version:

[if\_download\_description]
[if\_download\_excerpt]
[if\_download\_id]
[if\_download\_url_image]
[if\_download\_price_lowest]
[if\_download\_price]
[if\_download\_name]

To get more information and help on these shortcodes you can find them via: <a href="http://extend.bt4.me/documentation/edd-download-extendify/" target="_blank" title="http://extend.bt4.me/documentation/edd-download-extendify/">http://extend.bt4.me/documentation/edd-download-extendify/</a>

All parameters work in the free version for the provided shortcodes. But you will see many shortcodes, including loop shortcodes, that are available in the extendify'd verison.

Feel free to check this plugin out. You can purchase the extended version at: <a href="http://extend.bt4.me/downloads/edd-download-extendify/" target="_blank" title="http://extend.bt4.me/downloads/edd-download-extendify/">http://extend.bt4.me/downloads/edd-download-extendify/</a>

== Installation ==

Extract the zip file and just drop the contents in the wp-content/plugins/ directory of your WordPress installation and then activate the Plugin from Plugins page. Or you can install and activate it from the Add Plugins field.

For the extended / professional version you can go to: <a href="http://extend.bt4.me/downloads/edd-download-extendify/" target="_blank" title="http://extend.bt4.me/downloads/edd-download-extendify/">http://extend.bt4.me/downloads/edd-download-extendify/</a>
== Frequently Asked Questions ==

You can get a lot of details at:

<a href="http://extend.bt4.me/documentation/edd-download-extendify/" target="_blank" title="http://extend.bt4.me/documentation/edd-download-extendify/">http://extend.bt4.me/documentation/edd-download-extendify/</a>

== Changelog ==

* Initial version

== Upgrade Notice ==

To upgrade to the pro version go to: <a href="http://extend.bt4.me/downloads/edd-download-extendify/" target="_blank" title="http://extend.bt4.me/downloads/edd-download-extendify/">http://extend.bt4.me/downloads/edd-download-extendify/</a>

== Screenshots ==

No screenshots. To view more information go to: <a href="http://extend.bt4.me/downloads/edd-download-extendify/" target="_blank" title="http://extend.bt4.me/downloads/edd-download-extendify/">http://extend.bt4.me/downloads/edd-download-extendify/</a>