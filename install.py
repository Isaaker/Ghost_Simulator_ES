# GhostSim auto-installer script
# Created by: Isaaker

#Import
import os
import sys
import time
from platform import python_version

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
print ("PLEASE RUN THIS SCRIPT IN THE Ghost_Simulator_ES/ directory") 
print ("")
print ("[For more info visit: https://github.com/Isaaker/Ghost_Simulator_ES/wiki]")

time.sleep(3)

print ("")
print ("Obtaining the requirements...")
file_requirements='./requirements.txt'
if os.path.isfile(file_requirements):
	requirements = open(file_requirements, mode="r")
	if requirements.readable():
		requirements_readed = requirements.readlines()
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

print ("Checking for Python3 version...")

### Checking Python ###

# Get python required version

# Get line raw
required_python_version_raw = (requirements_readed[0])
# Clean raw 
required_python_version = required_python_version_raw.split("=")[-1] 

# Get System Python Version

python_version = python_version()

# Check Versions match
print ("")
if python_version == required_python_version: 
	print ("Python3 is up to date!")
else:
	print ("ERROR: System Python Version and the Required Python Version dosen´t match. [IS RECOMENDED TO USE THE LAST PYTHON VERSION]")
	print ("System Version: " + python_version)
	print ("Required Version: " + required_python_version) 

	while True:
		print("")
		input_continue = input("Do you want to continue? [Q-> Quit / C -> Continue] ")
		if input_continue == "c":
			print("Ignoring...")	
			break
		elif input_continue == "C":
			print("Ignoring...")
			break
		elif input_continue == "q":
			exit(1)
		elif input_continue == "Q":
			exit(1)

# Get Absolute Path of GhostSim directory
simulator_path = os.getcwd() + "/ghost_simulator/"

###Initialize Python Virtual Enviorement### 

print ("")
print ("Initializing Python Virtual Enviorement...")
try:
	os.system(f"cd {simulator_path} && python3 -m venv .venv")
	os.system(f"cd {simulator_path} && . .venv/bin/activate")
except:
	print ("Error Initializing Python Virtual Enviorement")	
	exit(1)

###Check for pip3 updates###
print ("")
print ("Updating pip3...")
try:
	os.system(f"cd {simulator_path} && . .venv/bin/activate && python3 -m pip install --upgrade pip")
except:
	print ("Error Updating pip3")
	exit(1)

###Install Flask###
print ("")
print ("Installing Flask with pip3...")

try:
	os.system(f"cd {simulator_path} && . .venv/bin/activate && pip3 install Flask")
except:
	print ("Error Installing Flask")
	exit(1)

###The Simulator is ready to use###
print("")
print("")
print("")
print("")
print("The Simulator is ready to use!, please read the information below to start using:")
print("") 
print("To make change on packages or use Flask, always need to start the Python Virtual Envireoment with this command: . .venv/bin/activate") 
print("") 
print("Using Flask:")
print("Developer (DON´T USE ON PRODUCTION / Run the command in the /Ghost_Simulator_ES/ directory) -> flask --app ghost_simulator run")
print("Server / Production (Install apache mod) -> https://flask.palletsprojects.com/en/3.0.x/deploying/") 

print("")
print ("END OF THE SCRIPT")
