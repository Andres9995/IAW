

var canvas, context;
var fieldWidth, fieldHeight;

canvas = $("#camp")[0];

fieldWidth = canvas.width;
fieldHeight = canvas.height;
context = canvas.getContext('2d');

var goalsLeft = 0 ,goalsRight = 0;

// Ball
var xBall, yBall;
var ballWidth, ballHeight;
var incBall, incX, incY;

// Sticks
var stickWidth, stickHeight, stickSeparation;
var incStick;
var leftStickX, leftStickY, rightStickX, rightStickY;

//TECLAS
LEFT_UP = 'W';
LEFT_DOWN = 'S';
RIGHT_UP = 'I';
RIGHT_DOWN = 'K';
SOUND='O';

loopGame();
initBall();
initSticks();


function loopGame(){
    drawField();
    drawLeftStick();
    drawRightStick();
    drawBall();
    updateBall();
    setTimeout(loopGame, 4); //milisegundos
    drawScore();
}

//definir linia del centro
function drawField(){
    context.fillStyle = "red";
    context.clearRect(0,0,fieldWidth, fieldHeight);
    context.fillRect(fieldWidth/2,0,2,fieldHeight);
}

//marcador

function drawScore() {
    context.fillStyle="white";
    context.font="48px Georgia";
    context.fillText(goalsLeft, fieldWidth/4,30);
    context.fillText(goalsRight,3*fieldWidth/4,30);
}

//definir format bolla
function initBall(){
    xBall = fieldWidth / 2;
    yBall = fieldHeight / 2;
    ballWidth = 22;
    ballHeight = 22;
    incBall = 1;
    incY = -1 + 2*Math.random();
    incX = -1 + 2*Math.random();
}

//dibuixar bolla
function drawBall(){
    context.fillStyle = "blue";
    context.beginPath();
    context.arc(xBall,yBall,ballWidth,0,2*Math.PI);
    context.fill();
}

function updateBall() {
    xBall +=incX;
    yBall +=incY;

    if (yBall<ballWidth/2){
        incY*=-1;
    }

    if (yBall>fieldHeight - ballWidth/2){
        incY*=-1;
    }

    else if(xBall<ballWidth/2){
        incX*=-1;
    }

    else if(xBall>fieldWidth - ballWidth/2){
        incX*=-1;
    }
    //pala derecha
    if ((yBall>=leftStickY) &&
        (yBall <= leftStickX +  stickHeight -1 )
        && (xBall - ballWidth <=leftStickX +stickWidth)){
        incX*=-1;
    };

    //pala izquierda
    if ((yBall>=rightStickY) &&
        (yBall<= rightStickY+ stickHeight-1)
        && (xBall + stickWidth <= stickWidth)){
        incX*=-1;
    };

    //left goal
    if (xBall<ballWidth/2){
        goalsRight++;
        initBall();
    }

    //right goal
    if (xBall>= fieldWidth - ballWidth/2){
        goalsLeft++;
        initBall();
    }
}

//definir format paletes
function initSticks(){
    stickWidth = 30;
    stickHeight = 100;
    stickSeparation = 20;
    incStick = 5;
    leftStickX = stickSeparation;
    leftStickY = fieldHeight/2 - stickHeight/2;
    rightStickX= fieldWidth- stickSeparation - stickWidth;
    rightStickY = fieldHeight/2 - stickHeight/2;
}

//dibuixar paleta dreta
function drawLeftStick() {
    context.fillStyle = "white";
    context.fillRect(leftStickX,leftStickY, stickWidth, stickHeight);
}

//dibuixar paleta esquerra
function drawRightStick() {
    context.fillStyle = "white";
    context.fillRect(rightStickX,rightStickY, stickWidth, stickHeight);
}

function moveUpLeftStick() {
    leftStickY-= incStick;
    if(leftStickY<0){
        leftStickY=1;
    }
}
function moveDownLeftStick() {
    leftStickY+= incStick;
    if(leftStickY>fieldHeight - stickHeight){
        leftStickY = fieldHeight - stickHeight -1;
    }
}

function moveUpRightStick() {
    rightStickY-= incStick;
    if(rightStickY<0){
        rightStickY=1;
    }
}

function moveDownRightStick() {
    rightStickY+= incStick;
    if(rightStickY>fieldHeight - stickHeight){
        rightStickY = fieldHeight - stickHeight -1;
    }
}
