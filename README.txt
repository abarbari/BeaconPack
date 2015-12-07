README.txt

CONTENTS OF THIS FILE
-----------------------------------------------------------------------

*Introduction
*Requirements
*Recommended Modules
*Installation
*Configuration
*Troubleshooting
*FAQ
*Maintainers and Contributors


INTRODUCTION
-----------------------------------------------------------------------

The BeaconPack repository is to maintain and host a simplistic SMS 
response system that provides information to a user. Examples of 
information are news articles, informational articles, excerpts
for a specific set of information, etc. The system was designed based 
on a STEM research and social benefit conference for the purposes of 
bringing remote locations in third world countries closer to recent 
information and news. 

The system is compiled of three components: SMS processing file, 
a parser for information, and helpers for various remedial tasks
(user_input_processor.php; rss_parser.php; connection_helper.php, as
an example). These files are designed to work with the cell service 
Tropo, but can be used with other services provided that the files are
in the service's recommended language.

*No current webpage for project.

*Bugs and Reports can be sent to my email (provided later once project
is fully available)


REQUIREMENTS
----------------------------------------------------------------------
 * Requires the following programming packages and versions for the 
   system to be operational:
   
     Technology		|	Version
   - Apache			|	2.4.9 or higher
   - PHP 			|	5.5.12 or higher
   - MySQL			|	5.6.17 or higher
   - Tropo			|	Get most recent version available on GitHub
   - Python			|	3.5 or higher
   
 * Make sure to create a developers account with Tropo because this
   will help you find how scalable this project is for free use and 
   for large scale use.


RECOMMENDED MODULES
----------------------------------------------------------------------

 * WAMP
   - This tool is extremely useful especially when dealing with a 
     majority of web based scripting and projects. Use this to get all
	 necessary technologies except for Python. Will give you the most 
	 recent versions and its available for free. Plus the community is
	 excellent for help with problems or advanced methods for free 
	 software packages like this.
	 
 * RapidSMS
   - A great versatile tool that would be helpful if you have a mobile
     broadcast tool like a cellular modem. This will make it easier to
	 move away from Tropo, but will still be able to use the same code
	 with various modifications.


INSTALLATION
----------------------------------------------------------------------
 * For installation there is no extensive installation file neccessary 
   to add this project to another, but rather just to append it to a 
   current system.
 
 * Please make sure to download and include this project within
   Tropo's Web API for PHP directory (commonly /tropo-webapi-php). 
   This provided me with the simplest setup considering the user 
   interface is through a phone and not with a computer.
 
 * A setup/installation script(setup.py) that is to be run setting up 
   mostly file and directory permissions.


CONFIGURATION
----------------------------------------------------------------------

 * Configuring file and directory permissions to make sure your 
   any personal information is secure from use:
   
   - Directories:
	  ~ /includes: 
	    > chmod 755 /includes
		  This makes your directory accessible to various files, but 
		  only full permissions to you.
		> chmod 775 /includes
		  Only use if you plan to make this a group project, basically
		  for multiuser editing.
	  ~ /parsers:
	    > chmod 755 /parsers
		> chmod 775 /parsers
   
   - Files:
     ~ all files:
	   > chmod 644 <filename>
	     This should be the default but please check permissions or 
		 the system may not run properly.
		 
 * NEVER 'chmod 644' A DIRECTORY/FOLDER!!! This may cause files to be
   inaccessible to files outside the directory.
   
 * For additional help for file permissions and directory permissions 
   please use this link.
   
   http://ss64.com/bash/chmod.html


TROUBLESHOOTING
----------------------------------------------------------------------

 * If a phone uses a wireless connection to send messages please try 
   the following:
 
   - Please disable that portion of message sending considering Tropo
     is designed for SMS and not message sending protocols like 
	 iMessage. 

 * More to come based on bugs and their error reports


FAQ
----------------------------------------------------------------------

 * None until a proper user base and reports have been submitted

 
MAINTAINERS and CONTRIBUTORS
----------------------------------------------------------------------

Current maintainers and contributors:
 * Aidan M. Barbari	(abarbari) 

Previous maintainers and contributors:
 * Aidan M. Barbari	(abarbari)
 * James Mack 		(GitHub username being acquired)
 * James Terry 		(GitHub username being acquired)
 
This project was sponsered and all rights are owned by:
 * CTA (Community Technology Alliance) and British Airways
   - Both in partner after the British Airways' Ungrounded 
	 Innovation Lab. Jen Padgett(CTA) adn Glenn Morgan(British 
	 Airways') provided all resources needed to complete this 
	 Science, Technology, Engineering and Math (STEM) project for
	 countries with developing countries and economies.
   - a GNU GENERAL PUBLIC LICENSE holds anyone accountable according
     to the terms of this public license(subject to a lawsuit if 
	 utilizing any familiar code if deployed in a consumer setting).