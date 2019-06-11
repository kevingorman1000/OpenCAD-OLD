# OpenCAD
Open Source Computer Aided Dispatch System for GTA V Roleplay Communities.

## Installation Requirements
* Operating System: Linux or Windows
* Webserver: Apache or Nginx
* PHP: 7.0 (Recommended), 7.0 (Minimum)
* Database: MySQL >=5.5 or MariaDB >=10.0  (Recommended Version: 10.3)

### Deployment Notes

#### Unsuppported Environments
* Free hosting of any kind

#### Important Notes
* This has been tested to work on Linux, Windows and cPanel.
* The OpenCAD Development team **DOES NOT** recommend the utilization of "free" webhosting solutions due to a multitude of reasons. Our team has compiled a *[list of Recommended Hosting Providers](https://guides.opencad.io/alldoc/installation-guides/recommended-hosting-providers)*.

## Support

Need Help? [View our Confluence](https://guides.opencad.io/alldoc) which has all the documentation you need.

Still Having Trouble? on the community Discord post your issue in [#support-triadge](https://discord.gg/ufBBmaN) In addition to the Discord support channel we urge you to [register an account on our JIRA](https://jira.opencad.io/secure/Signup!default.jspa) and [submit any issues you have there so they may be tracked](https://help.opencad.io/). If you encounter problems with registering in JIRA please let someone in [#general](https://discord.gg/ufBBmaN) know.

## Licens

Do you suspect someone of violating the license of OpenCAD or plagiarizing code? Please [send these reports to our security desk](https://security.opencad.io/).

# Disclosure of Fork
This version of OpenCAD is based on the original source from [Shane Gill](https://github.com/ossified/openCad).

# Auto Installer
As of version 0.0.2 (released 11/06/19), we have implemented a very bastic auto installer. Please follow these instructions on how to install:
  1. Copy all OpenCad files over to your webhost.
  2. Create a Database calling it whatever you want. 
  3. Navigate to: example.com/CadDirectory/install
  4. Enter Database login details and click submit.
  5. Enter Configuration details and click submit.
  6. Navigate back to to main Cad directory.
  7. Should now see the login page. Login with the following details:
    Username: admin@test.com
    Password: cad2017!
  8. If you can login please make sure that you delete the "Install" folder within your website directory!

# Changing Department Icons
In this version (0.0.1 released 10/06/19) you are now able to change the department icons. Within the folder /images/departmentIcons/ you can upload your own images. You are then able to change the file names in your "mdt.php" file. Lines: 75,78,81,84,87,83

#### Disclaimer

I am not the original dev of this CAD. You can find that information above. I have just taken the files, worked on them and resolved some issues. I am NOT a PHP developer so my code may not be pretty but it's functional, I'll modify and pretty up the code when I can.
