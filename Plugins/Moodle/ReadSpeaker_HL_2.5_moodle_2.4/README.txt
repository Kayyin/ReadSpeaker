ReadSpeaker Enterprise Highlighting 2.5 for Moodle 2.4 - README
---------------------------------------------------------------

These instructions describe how to install the ReadSpeaker Enterprise Highlighting 2.5 solution in a Moodle 2.4 environment.
The instructions are based on the installation of the Moodle sideblock in a Moodle 2.4.7 installation.
For the latest instructions on how to install add-ons in Moodle, please refer to http://docs.moodle.org/24/en/Installing_plugins


------------
Installation
------------
Before starting the installation, make sure to locate the following items:
- The ZIP-archive containing the ReadSpeaker-code (should have been sent to you along with these instructions).
- The sidebar-block folder in your Moodle installation on your server: [PATH_TO_MOODLE]/blocks

1. Download the ZIP-archive.
2. Unzip the archive to your computer or Moodle server.
3. Locate the folder "readspeaker_embhl", copy or move this folder to the location: [PATH_TO_MOODLE]/blocks
Make sure you keep all files inside the "readspeaker_embhl" folder!
4. Open up your Moodle site in your browser, log in as a Site Administrator and navigate to "Settings -> Site administration -> Notifications"
5. A message should appear saying you have plugins to install. Click the "Upgrade Moodle database" to continue.
If the installation completed without errors you're ready to move on to "configuration"!

Did you encounter any problems?
- Check the file permissions. The web server needs to be able to read the plugin files. If the the rest of Moodle works then try to make the plugin permissions and ownership match.
- Did you definitely unzip or install the add-on in the correct place?
- Because Moodle scans plugin folders for new plugins you cannot have any other files or folders there. Make sure you deleted the zip file and don't try to rename (for example) an old version of the plugin to some other name - it will break.
- Make sure the directory name for the plugin is correct. All the names have to match. If you change the name then it won't work.
- Turn on Debugging - any error messages? 
- Are you sure you are installing the correct plugin? The correct version for this sidebar block is Moodle 2.4.
- Still having problems? Contact support@readspeaker.com, make sure to include any error messages along with your ReadSpeaker Customer ID.


-------------
Configuration
-------------
Now that you've installed the Moodle sidebar block you are ready to start configuring the block.
1. If it was the first time you installed the block you may receive a settings-window, alternatively you may go to "Settings -> Site administration -> Plugins -> Blocks -> Manage blocks -> ReadSpeaker EMBHL -> Settings".
2. In the field "Customer ID", enter the ReadSpeaker Customer ID that you received in your email, which is normally 4 digits.
3. In the section "ReadID" enter the string for the readid-parameter that you would like to use in your Moodle installation. Like for example: region-main
4. In the "Language"-section, please select the language that you have access to in ReadSpeaker. Please note that it is only possible to configure one language in the installation.
5. When all the settings are configured, press "Save changes" to continue!

Did something go wrong?
- Is the language you are looking for not in the drop-down list?
Please log in to the ReadSpeaker-portal and check what languages you have access to, if the language you have access to do not exist in the list please contact support@readspeaker.com
- Can't find your ReadSpeaker Customer ID?
Check the email that you received along with the Moodle block, if you still can't find your Customer ID please send an email to support@readspeaker.com, make sure to include details such as domain-name for your site and who you have been in contact with previously (ticketID if possible) to help speed up the process.
- Don't know what the ReadID is?
The readid is the ID of the element on a page you wish to read. Let's say for example that we have an element: <div id="my-content">
that we wish to read, simply enter: my-content
in the ReadID configuration to have ReadSpeaker read that element.
Please note that the element used should be a block-level element such as a <div> or <section>.


------------------------
Adding the Listen-button
------------------------
In order to add a Listen-button to a course, follow these steps.
1. Navigate to the course that you would like to have the Listen-button.
2. Press "Turn editing on".
3. In the bottom of the sidebar there will be an "Add a block"-section. Press the drop-down list and click on "ReadSpeaker EMBHL".
Done, the Listen-button is now added!

The sidebar block can now be configured as a sticky-block, meaning you can have it appear on several pages.
To do this:
1. Click on the "Setting"-icon over the Listen-button when in editing mode.
2. In the section "Where this block appears" under "Display on page types" click and select where and how you would like the Listen-button to appear.

Note: In some versions of Moodle there is a bug that prevents sticky block configuration to be saved due to a save button missing.
To go around this problem, change the settings as you would like and then click on the first item-field that says "default value". If you now press enter the settings will be saved.

Do you have any question about the sideblock or ReadSpeaker services? Contact support@readspeaker.com with any questions, make sure to provide your ReadSpeaker Customer ID in your email!