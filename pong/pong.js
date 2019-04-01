var deplacementX, deplacementY;
var x, y;
var w, z;
var compteur;
var xmultiplier;
var ymultiplier;

function setup() 
{
 createCanvas(1000,600); 
 background(0);
 x = 200; 
 y = 200; 
 deplacementX = 10; 
 deplacementY = -6;
 xmultiplier = 0.3;
 ymultiplier = 0.2;
 w = 25; 
 z = 100;
 compteur = 0;
}

function draw() 
{
 nettoyer();
 bouger(); 
 rebondir();
 dessiner(); 
 display();
}
function display()
{
  fill(255);
  textSize(50);
 text(compteur,140,40);
}

function nettoyer() 
{  
background(0);
}

function dessiner() 
{
  smooth();
  fill(255,255,0); 
  rect(w,z,25,100);
  fill(255,0,0,255); 
  ellipse(x,y,20,20);
  line(200,0,200,400);
}

function bouger() 
{
 x = x + deplacementX; 
 y = y + deplacementY; 
 z = (mouseY); 
}
function rebondir() 
{
  if(compteur > 1)
  {
  
  }
 if (x > width-10 && deplacementX > 0) 
 {
   deplacementX = - deplacementX; 
 }
 if (y > height-10 && deplacementY > 0) 
 { 
   deplacementY = -deplacementY;
 }
 if (y < 10 && deplacementY < 10) 
 {
   deplacementY = -deplacementY;
 }
 if (x<w+40 && y>z && y<z+100)
  {
   deplacementX = -deplacementX;
   compteur++;
 }
 if (x < 10) 
 {
  noLoop(); 
 }
}


