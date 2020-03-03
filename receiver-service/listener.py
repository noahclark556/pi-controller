import controller
import threading

def listen():
    threading.Timer(5.0, listen).start()
    controller.control()

print("Listening for Pi Controller")
listen()