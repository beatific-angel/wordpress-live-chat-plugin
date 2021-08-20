=== BuddyPress Instant Chat ===

Contributors: richardphelps
Donate link: http://www.iamrichardphelps.com
Tags: buddypress, chat, instant, messaging, communication, contact, users, plugin, page, AJAX, social, free
Requires at least: 3.9
Tested up to: 4.6
Stable tag: 1.6
License: GPLv2
License URI: http://www.gnu.org/licenses/gpl-2.0.txt

Instant chat plugin for BuddyPress allowing user to connect and talk in real time.

== Description ==

This plugin allows users to chat in real time using AJAX. Users can connect with any other users.

Use the [tomchat] shortcode to embed the front end chat on any page.

== Installation ==

= Upload Manually =

1. Download and unzip the plugin
2. Upload the 'tomchat' folder to the 'wp-content/plugins' directory.
3. In the admin area, find the plugin named 'BuddyPress Instant Chat' and click 'activate'.

= Install Through WordPress Admin =

1. In the WordPress admin area, go to 'Plugins > Add New'.
2. Search for 'BuddyPress Instant Chat' and click 'Install Now' then when prompted - click 'Activate Plugin'.

== Frequently Asked Questions ==

Where can I set the dimensions of the avatar for messages?

- If you go to the WordPress admin and click the tab at the bottom of the black bar with the text 'BuddyPress Instant Chat'.

== Screenshots ==

1. The plugin settings page.

== Changelog ==

= 1.0 =

* Launch of the plugin

= 1.1 =

* Fixed bug where if a user tried to go to an existing chat, it would redirect them back to the main chat page
* Added all chats on the main chat page

= 1.2 =

* Added ability to see all messages for all chats between 2 users from admin

= 1.2.1 =

* Added message to the message control view explaining what can be done
* Bug fix for version 1.2 where no message is displayed if a chat doesn't exist between the 2 users

= 1.3 =

* Added the ability to allow users to chat with their friends only which can be enabled and disabled in the settings

= 1.4 =

* Fixed bug where friends only warning would show even if the settings in both plugins was disabled.
* Add the ability to add the chat page on any page using a shortcode

= 1.5 =

* Fixed bug where the name display setting could not be updated.
* Fixed bug where certain wordpress tables couldn't be found in some queries because of the incorrect database prefix being used.
* Added the ability to remove messages from a chat and add the messages back through message control in admin.

= 1.6 =

* Fixed bug where the name display seetings is not set correctly when installing the plugin.
* Changed the display of the messages so they display as speech bubbles.

== Upgrade Notice ==

* Version 1.0 is working on WordPress version 4.5.2
* Version 1.1 is working on WordPress version 4.5.2
* Version 1.2 is working on WordPress version 4.5.3
* Version 1.2.1 is working on WordPress version 4.5.3
* Version 1.3 is working on WordPress version 4.5.3
* Version 1.4 is working on WordPress version 4.5.3
* Version 1.5 is working on WordPress version 4.5.3
* Version 1.5 is working on WordPress version 4.6
