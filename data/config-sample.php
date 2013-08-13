<?php // Terraria Host Panel Configuration

// Server IP Address
define('KT_LOCAL_IP','127.0.0.1');

// Prefix for GNU-Screen names (prepended to username)
define('KT_SCREEN_NAME_PREFIX','ts-');

// Screen commands (these should never be modified)
define('KT_SCREEN_CMD_START','/usr/bin/screen -dmS %s mono TerrariaServer.exe');
define('KT_SCREEN_CMD_EXEC','/usr/bin/screen -S %s -p 0 -X stuff "%s$(printf \\\\r)"');
define('KT_SCREEN_CMD_KILL','/usr/bin/screen -X -S %s quit');
define('KT_SCREEN_CMD_KILLALL','killall /usr/bin/screen');
define('KT_SCREEN_CMD_KILLALL_USER','for session in $(/usr/bin/screen -ls | /bin/grep -o \'[0-9]*\\.%s\'); do /usr/bin/screen -S "${session}" -X quit; done');
