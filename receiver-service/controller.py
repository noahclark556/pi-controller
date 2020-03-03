import mysql.connector
import transmit
import atexit
import subprocess
import sendToShell
from subprocess import call
from mysql.connector import Error
def control():
    try:
        #Database info
        #TABLE: test
        #Collumns:
        #   id - int
        #   type - varchar
        #   command - varchar
        #   console - varchar
        connection = mysql.connector.connect(host='',
                                             database='',
                                             user='',
                                             password='')
        sql_select_Query = "select * from test"
        sql_delete_Query = "truncate table test"
        command = ""
        action = ""
        cursor = connection.cursor()
        cursor.execute(sql_select_Query)
        records = cursor.fetchall()
        for row in records:
            command=row[2]
            action=row[1]
        cursor.execute(sql_delete_Query)
        if(action == "transmit"):
            new = command.split(":")
            freq = new[0]
            band = new[1]
            print("received transmit to " + freq + " with band " + band + " ")
            print(transmit.transmit(freq, band))
        if(action == "killTransmit"):            
            print(transmit.killTransmit())
            print("Transmission Terminated")
        if(action == "command"):
            print("Received command: " + command + " ")
            print(sendToShell.shell(command))
        if(action == "shutdown"):
            print("Shutdown recieved")
            call("sudo nohup shutdown -h now", shell=True)   
                
        
        connection.close()
        cursor.close()
        #cursor.execute(sql_delete_Query)
        #print(command)
       # print("ROWS:", cursor.rowcount)
        #print("\n Printing")
        #for row in records:
         #   command=row[1]
          #  if(command == 'be mean'):
           
           #print("YOUR A PUSSY")
            #else:
             #   print("Whatever fag")
            
                
    except Error as e:
        print("Error")
    finally:
        if(connection.is_connected()):
            connection.close()
            cursor.close()
            print("closed")
def close():
    connection.close()
    cursor.close()
atexit.register(close)
