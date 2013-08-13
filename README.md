terraria-host-panel
===================

A Terraria hosting control panel for linux systems, requires mono.

## Requirements
* mono-complete
* screen
* php5

### Installation

- Upload all of the files to a web-accessible directory on your server.
- Copy data/config-sample.php to data/config.php and set KT_LOCAL_IP to your server's public IP address
- Go to install.php in your browser and set up an administrator user.
- Delete install.php
- Download and extract the latest Tshock version to the home directory.

### User setup

- Log in as an administrator user
- Go to Administration
- Use the "Add a New User" form to set up a new account, the home directory SHOULD NOT be web accessible
- Download and extract the latest Tshock version to the user's home directory.
- If desired, you can now start the user's server from the Administration page
