import serial
import webbrowser
ser = serial.Serial()
ser.baudrate = 9600
ser.port = 'COM6'
ser.open()
while(True):
    s=ser.read(3)
    st=s.decode('utf-8')
    ser.flushInput()
    if(st!=""):
        f=open("php.txt","w")
        print(st)
        f.write(st)
        f.close()
        webbrowser.open('localhost/elephanthome.php')
        
        
        
  