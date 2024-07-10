let days = document.querySelector('.container');
let viewNow = document.getElementById('NowDate');
let list = '';
let Now = '';
var now = new Date(); 

//현재 상태 받기
let Now_Year = now.getFullYear();
let Now_Month = now.getMonth()+1;
let Now_Date = now.getDate();
let last = new Date(Now_Year, Now_Month, 0);
last.getDate();
Now+=`${Now_Year}년 ${Now_Month}월`;

viewNow.innerHTML=(Now);