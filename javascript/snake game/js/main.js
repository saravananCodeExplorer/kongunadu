document.addEventListener("DOMContentLoaded" ,function(){
const gameBoard = document.getElementById('gameBoard')

const context = gameBoard.getContext('2d');

const scoreText = document.getElementById("scoreVal")
 const WIDTH = gameBoard.width
 const HEIGHT = gameBoard.height
const UNIT = 20

let FOODx
let FOODy

// starting move snake 
let xMove = 20
let yMove = 0
let score = 0;
let active = true;
let started = false;

let snake = [
    {x:UNIT*3,y:0},
    {x:UNIT*2,y:0},
    {x:UNIT,y:0},
    {x:0,y:0}
]
window.addEventListener('keydown',keyPress)

startGame();

function startGame(){
    context.fillStyle = "#212121";
    // fillRect(xStart,yStart,width,height)
    context.fillRect(0,0,WIDTH,HEIGHT)
     
    createFood();
    displayFood();
    drawSnake();
    // moveSnake();
    // clearBoard();
    // drawSnake();
    nextTick();
    
}   
     function clearBoard(){
        context.fillStyle = "#212121";
        // fillRect(xStart,yStart,width,height)
        context.fillRect(0,0,WIDTH,HEIGHT)

     }

     function createFood(){
        // random food genrate

        FOODx =Math.floor(Math.random()*WIDTH/UNIT)*UNIT;
        // console.log("X",FOODx)
        FOODy =Math.floor(Math.random()*HEIGHT/UNIT)*UNIT;
        // console.log("y",FOODy)


     }
    
   function displayFood()  {
    // foos display
        context.fillStyle = ('red')
        context.fillRect(FOODx,FOODy,UNIT,UNIT)

    }

    function drawSnake(){
        // snake
        context.fillStyle = 'green';
        snake.forEach((snakePart) => {
            context.fillRect(snakePart.x,snakePart.y,UNIT,UNIT)
            context.strokeRect(snakePart.x,snakePart.y,UNIT,UNIT)
      })
     }
     function moveSnake(){
        const head = {x:snake[0].x+xMove,
                       y:snake[0].y+yMove}
        snake.unshift(head)
        if(snake[0].x == FOODx && snake[0].y == FOODy){
            score+=100
            scoreText.textContent = score;
            createFood();
        }else{
            snake.pop()

        }
                       

     }
     function nextTick(){
        if (active) {
            
        setTimeout(()=>{
            clearBoard();
            displayFood();
            moveSnake();
            drawSnake();
            checkGameOver();
            nextTick();

        },500)
    }else{
        clearBoard();
        context.font = "bold 50px serif"
        context.fillStyle = "white"
        context.textAlign = "center"
        context.fillText("Game Over!",WIDTH/2,HEIGHT/2)
    }
     }
     function keyPress(event){
        if(!started){
            started = true;
            nextTick();
        }
        const LEFT = 37
        const UP = 38
        const RIGHT = 39
        const DOWN = 40

        switch(true){
            case(event.keyCode == LEFT && xMove != UNIT):
                 xMove =-UNIT;
                 yMove = 0;
                 break;
            case(event.keyCode == RIGHT && xMove != -UNIT):
                 xMove = UNIT;
                 yMove = 0;
                 break;
            case(event.keyCode == UP && yMove != UNIT):
                 xMove = 0;
                 yMove = -UNIT;
                 break;
            case(event.keyCode == DOWN && yMove != -UNIT):
                 xMove = 0;
                 yMove = UNIT;
                 break;     


        }
 
      }

      function checkGameOver(){
        switch(true){
            case(snake[0].x<0):
            case(snake[0].x>=WIDTH):
            case(snake[0].y<0):
            case(snake[0].y>=HEIGHT):
            active = false
            break;
        }
      }


})
