#!/bin/bash

	# # Create new database
	# if [ "$MYSQL_USER_DB" != "" ]; then
	# 	echo "[i] Creating database: $MYSQL_USER_DB"
	# 	echo "CREATE DATABASE IF NOT EXISTS \`$MYSQL_USER_DB\` CHARACTER SET utf8 COLLATE utf8_general_ci;" >> $tfile

	# 	# set new User and Password
	# 	if [ "$MYSQL_USER" != "" ] && [ "$MYSQL_USER_PWD" != "" ]; then
	# 	echo "[i] Creating user: $MYSQL_USER with password $MYSQL_USER_PWD"
	# 	echo "GRANT ALL ON \`$MYSQL_USER_DB\`.* to '$MYSQL_USER'@'%' IDENTIFIED BY '$MYSQL_USER_PWD';" >> $tfile
	# 	fi
	# else
	# 	# don`t need to create new database,Set new User to control all database.
	# 	if [ "$MYSQL_USER" != "" ] && [ "$MYSQL_USER_PWD" != "" ]; then
	# 	echo "[i] Creating user: $MYSQL_USER with password $MYSQL_USER_PWD"
	# 	echo "GRANT ALL ON *.* to '$MYSQL_USER'@'%' IDENTIFIED BY '$MYSQL_USER_PWD';" >> $tfile
	# 	fi
	# fi