import subprocess
import os
import signal
import globalVars
from subprocess import *


def transmit(freq, band):
    cmd = "sudo /home/pi/Desktop/picontroller/fm_transmitter/fm_transmitter -f " + freq + " -b " + band + " -r /home/pi/Desktop/picontroller/fm_transmitter/acoustic_guitar_duet.wav"
    globalVars.tran = subprocess.Popen(cmd, stdin=PIPE, stderr=PIPE, stdout=PIPE, shell=True, preexec_fn=os.setsid)
    return int(globalVars.tran.pid)+6
#print(tran)
def killTransmit():
#os.killpg(os.getpgid(globalVars.tran.pid), signal.SIGTERM)
    newint = int(globalVars.tran.pid)+6
    os.system("sudo kill " + str(newint))
    return int(globalVars.tran.pid)+6
    
    
#handle.stdout.read()
#handle.flush()
    
#os.chdir('/home/pi/Desktop/PI_FM/fm_transmitter')
#os.system('sudo ./fm_transmitter -f 128.8 acoustic_guitar_duet.wav')