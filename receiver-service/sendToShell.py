import subprocess
import os
import signal
import globalVars
from subprocess import *

def shell(cmd):
    return subprocess.check_output(cmd, shell=True)
    
    
