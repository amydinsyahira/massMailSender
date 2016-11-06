# Simple Free Mass Mailer Sender(SFMMS)

Version
---------------------
1.0


Description
----------------------
This is a simple but very usefull Mass Mailer Sender script, that you can use from your server to send mass mails.You can for example use it to send annoncements for your members, that you have an offer for them. You can also use it as mass mailer subscriber to send weekly mails to yours subcribers.


Install
----------------------

To install SFMMS you should unzip the sfmms.zip to a folder of your choice to your hard disk  and modify the config.php in order to fit to your needs.
$server - it's the server of your mysql database, which is ussually 'localhost'
$database - is the name of your database on which your table is stored from the server
$db_user - the user of the database
$db_pass - the password for the user of the database
$fromadmin - email which the users will receive in his email
$table - the table from database where the users are stored
$table_email - the name field for the email of the $table(ex. 'email','Email')

You can customize the header.php and footer.php to fit with your website.

Upload all the files to a folder from your server.


Using it
-------------------------
Access http://www.mywebsites.com/folder/massmail.php and put all the details you wanna send to users.

Subject - is the subject that will appear in email subject to users.
Message - the message that you will send to users.
Seconds between messages - time to pass between each email that is sent to users(leave it 0.1). This is used when you send lots of messages to not overload smtp server.


License
---------------------------


Copyright (C) 2009 codestips.com

This program is free software; you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation; either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

We are not responsible for any emails that you send with this script.
Use it at your own risk.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.


