int a0,a1,a2,a3;
int t=80;
#include <RH_ASK.h>
#include <SPI.h> 
RH_ASK rf_driver;
void setup() {
  // put your setup code here, to run once:
pinMode(A0,INPUT);
pinMode(A1,INPUT);
pinMode(A2,INPUT);
pinMode(A3,INPUT);
pinMode(30,OUTPUT);
Serial.begin(9600);
rf_driver.init();
}

void loop() {
  // put your main code here, to run repeatedly:
a0=analogRead(A0);
a1=analogRead(A1);
a2=analogRead(A2);
a3=analogRead(A3);
if(a0>t || a1>t || a2>t || a3>t)
{
    const char *msg ="109";
    rf_driver.send((uint8_t *)msg, strlen(msg));
    rf_driver.waitPacketSent();
    speaker();
    Serial.println(msg);
}
if(a0!=0 || a1!=0 || a2!=0 || a3!=0)
{
  Serial.print(" a0 ");
  Serial.print(a0);
  Serial.print(" a1 ");
  Serial.print(a1);
  Serial.print(" a2 ");
  Serial.print(a2);
  Serial.print(" a3 ");
  Serial.println(a3);
}
}
void speaker()
{
  digitalWrite(30,HIGH);
  delay(5000);
  digitalWrite(30,LOW);
}

