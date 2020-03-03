# pi-controller
<h1>Remote Control Application for RPI 4 B</h1><br/>

<h3>Contents</h3><br/>
Contains the receiver and controller application. The receiver is a python application and the controller <br/>
is a web based application. You will need to open 'connect.php' on the controller side and 'controller.py' on the receiver side <br/>
and edit the database information as instructed in the code comments. <br/>

<h4> Receiver </h4><br/>
Install the receiver on your raspberry pi, adjust the settings for the database, and then start 'listener.py'. The listener will then listen <br/>
for commands that are uploaded to the database from the web based controller, save the command, and then truncate the table for you. It will<br/>
parse the command and run it. Web app console output is not yet working, still working on developing an efficient way of displaying that.

<h4>Controller</h4><br/>
Just upload the code for the controller to any web server supporting PHP and MYSQLI, or use applications like XAMPP/WAMP to do<br/>
so on your own system. Adjust the database settings as instructed, and then just head over to 'index.php' in any browser do begin<br/>
sending commands to your pi.

<h4>Finally</h4><br/>
You should now have established a connection to the db, and the listener should now be listening on the pi for commands. <br/>
This is a very limited release, there is only capalities for sending commands to use the FM_Transmitter, console commands and a shutdown command. <br/>
This project is more of a proof of concept then it is anything for practical application, but in the future could certainly grow <br/>
in efficiency and capability to be put to use by RPI enthusiasts.
<br/>

<b>
Yes, i am well aware that SSH, VNC, RDP, etc.. are a thing. Like i said, this is just a proof of concept<br/>
and a cool little hobby project that myself and others can mess around with. It was never intended for fresh headless</br>
connection to the rpi, even though with a few workarounds, could be used as such.
</b>


