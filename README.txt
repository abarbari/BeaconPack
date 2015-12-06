README.txt

CONTENTS OF THIS FILE
-----------------------------------------------------------------------

*Introduction
*Requirements
*Recommended Modules (Optional)
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

*No current page for project

*Bugs and Reports can be sent to my email (provided later once project
is fully available)


REQUIREMENTS
----------------------------------------------------------------------
 * Requires the following programming packages and versions for the 
   system to be operational:
   


RECOMMENDED MODULES
----------------------------------------------------------------------



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