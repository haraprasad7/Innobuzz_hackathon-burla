int a0,a1,a2,a3;
int t=80;
void setup() {
  // put your setup code here, to run once:
pinMode(A0,INPUT);
pinMode(A1,INPUT);
pinMode(A2,INPUT);
pinMode(A3,INPUT);
pinMode(9,OUTPUT);
Serial.begin(9600);
}

void loop() 
{
  a0=analogRead(A0);
  a1=analogRead(A1);
  a2=analogRead(A2);
  a3=analogRead(A3);

if(a0>=80 || a1>=80 || a2>=80 || a3>=80 )
{
  Serial.print(" ");
  Serial.print(a0);
  Serial.print(" ");
  Serial.print(a1);
  Serial.print(" ");
  Serial.print(a2);
  Serial.print(" ");
  Serial.println(a3);
  Serial.println("detecting......");
  delay(100);
  Serial.println("elephant detected.....!!!!!");
}
}
