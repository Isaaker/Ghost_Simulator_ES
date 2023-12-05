import os
import sys
import time

# GhostSim auto-installer script
# Created by: Isaaker

print ("""
 ██████╗ ██╗  ██╗ ██████╗ ███████╗████████╗███████╗██╗███╗   ███╗    ██╗███╗   ██╗███████╗████████╗ █████╗ ██╗     ██╗     ███████╗██████╗ 
██╔════╝ ██║  ██║██╔═══██╗██╔════╝╚══██╔══╝██╔════╝██║████╗ ████║    ██║████╗  ██║██╔════╝╚══██╔══╝██╔══██╗██║     ██║     ██╔════╝██╔══██╗
██║  ███╗███████║██║   ██║███████╗   ██║   ███████╗██║██╔████╔██║    ██║██╔██╗ ██║███████╗   ██║   ███████║██║     ██║     █████╗  ██████╔╝
██║   ██║██╔══██║██║   ██║╚════██║   ██║   ╚════██║██║██║╚██╔╝██║    ██║██║╚██╗██║╚════██║   ██║   ██╔══██║██║     ██║     ██╔══╝  ██╔══██╗
╚██████╔╝██║  ██║╚██████╔╝███████║   ██║   ███████║██║██║ ╚═╝ ██║    ██║██║ ╚████║███████║   ██║   ██║  ██║███████╗███████╗███████╗██║  ██║
 ╚═════╝ ╚═╝  ╚═╝ ╚═════╝ ╚══════╝   ╚═╝   ╚══════╝╚═╝╚═╝     ╚═╝    ╚═╝╚═╝  ╚═══╝╚══════╝   ╚═╝   ╚═╝  ╚═╝╚══════╝╚══════╝╚══════╝╚═╝  ╚═╝
                                                                                                                                          """)
print ("GhostSim auto-installer script")
print ("Created by: Isaaker")
print ("")
print ("[For more info visit: https://github.com/Isaaker/Ghost_Simulator_ES/wiki]")

time.sleep(1)

print ("")
print ("Obtaining the requirements...")
file_requirements="./requirements.txt"
if os.path.exists('file_requirements'):
	if file_requirements.redable():
		open("file_requirements", mode="r")
	else:
		print ("""Requirements file is not redable: You can fix this re-downloading the code:
        	> git clone https://github.com/Isaaker/piscinadeentropia.git
        	> wget https://github.com/Isaaker/piscinadeentropia/archive/refs/heads/main.zip
        	> curl -O https://github.com/Isaaker/piscinadeentropia/archive/refs/heads/main.zip""")
        	exit (1)
else:
	print ("""Requirements file not found: You can fix this re-downloading the code: 
	> git clone https://github.com/Isaaker/piscinadeentropia.git
	> wget https://github.com/Isaaker/piscinadeentropia/archive/refs/heads/main.zip   
	> curl -O https://github.com/Isaaker/piscinadeentropia/archive/refs/heads/main.zip""")
	exit (1)

print ("")
print ("Checking for compliance with requirements...")
readLine


print ("Checking for Python3 version...")

