int a0,a1,a2,a3,avg;
void setup()
{
  // put your setup code here, to run once:
  pinMode(A0,INPUT);//input pin
  pinMode(A1,INPUT);
  pinMode(A2,INPUT);
  pinMode(A3,INPUT);
  pinMode(9,OUTPUT);
  Serial.begin(9600);
}

void loop() {
  // put your main code here, to run repeatedly:
  a0=analogRead(A0);
  a1=analogRead(A1);
  a2=analogRead(A2);
  a3=analogRead(A3);
  delay(100);
  avg=(a0+a1+a2+a2+a3)/4;
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
    Serial.print("avg is found to be:");
    Serial.println(avg);//average found
    }
}
