function playGame(){
    var grid = document.querySelectorAll('.block');
var hitPosition;
var score = 0; 
var pointGainedOnce=0;
var gameSpeed = 750;

var timer__html = document.querySelector('#timer');
var timeLeft = 10
gameSpeed = 1250;


var timerID = setInterval(function(){
    if (timeLeft<1) {
        clearInterval(timerID);
        gameStatus="stale";
        startButton.style.background='#27ae60';    
        startButton.style.fontWeight='Initial'; 

        document.querySelector('.game-captcha').style.display='none';
        document.getElementById('js_captcha_score').value = score;
        document.querySelector('.duration').style.cursor='pointer';
    }

    timer__html.textContent=timeLeft;
    timeLeft--;
 }, 1000);


function popTom(randomBLockNo){
    
    grid[randomBLockNo].classList.add("tom");
}

function removeTom(){
    grid.forEach(element => {
        element.classList.remove("tom");
    });
}

grid.forEach(element => {
    element.addEventListener('click',()=>{
        if(element.id == hitPosition+1 && timeLeft > 0 && pointGainedOnce){
            score++;
            document.querySelector('#score__text').textContent = score; 
            pointGainedOnce=0;           
        }
    })
});




var tomTimer = setInterval(() => {
    if (timeLeft < 1) {
        clearInterval(tomTimer)
    }
    removeTom();
    let randomBLockNo = Math.floor((Math.random())*16);
    hitPosition = randomBLockNo;
    popTom(randomBLockNo);
    pointGainedOnce=1;
}, gameSpeed);

}


var startButton = document.querySelector('#play');
var gameStatus = "stale";


startButton.addEventListener('click',()=>{
    if (gameStatus == "stale") {
        document.querySelector('.game-captcha').style.display='block';
        playGame();
        gameStatus='Running';
        startButton.style.background='#2980b9'; 
        startButton.disabled = true;
    }   

})


var modal = document.getElementById("myModal");
var btn = document.getElementById("myBtn");
var span = document.getElementsByClassName("close")[0];

window.onclick = function(event) {
  if (event.target == modal) {
    modal.style.display = "none";
  }
}
