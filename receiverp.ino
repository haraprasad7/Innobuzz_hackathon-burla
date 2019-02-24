#include <RH_ASK.h>
#include <SPI.h> 
RH_ASK rf_driver;

void setup()
{
     pinMode(50,OUTPUT);
     rf_driver.init();
     Serial.begin(9600);
}
char i;

void loop()
{
    uint8_t buf[3];
    uint8_t buflen = sizeof(buf);
     if (rf_driver.recv(buf, &buflen))
    {
      for(i=0;i<3;i++)
      {
        Serial.print((buf[i])-48);
      } 
      //Serial.println();
      buzz(); 
    }

}
void buzz()
{
  digitalWrite(50,HIGH);
  delay(1000);
  digitalWrite(50,LOW);
}

