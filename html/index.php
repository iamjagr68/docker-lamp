<?php 
/*
 * This is a friendly neighborhood reminder about permissions and bind mounts.
 *
 * The php:7.2-apache docker image runs as the `www-data` user by default.
 * While you can override this through the use of ENV variables if need be,
 * you will still need to make sure your files can be read by the web user.
 *
 * OSX and Windows handle docker file permissions differently than Linux.
 * This will have an affect on any files created inside the container.
 * Any file created inside a container by the web user will be owned by
 * the web user.  
 *
 * OSX/Windows will maintain the host user's permissions on the host
 * machine; inside the container the file permissions may vary.
 *
 * Linux hosts will maintain the "ID" for the user/group for any files
 * created; names are not mapped. You can end up with files written to a
 * mounted directory that are not owned by a non-existent user.
 */
phpinfo();
