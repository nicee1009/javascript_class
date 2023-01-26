//exec04.js

// //큰사진 변수에 저장
// let big = document.querySelector('#big_img');
// let small = document.querySelectorAll('.small');

// for(let i=0;i<small.length;i++){
//   small[i].addEventListener('click',imgChange);
// }

// function imgChange(){
//   let url = this.src;
//   big_img.setAttribute('src', url);

//   for(let j=0;j<small.length;j++){
//     small[j].style.border='none';
//     this.style.border='2px solid red';
//   }
// }

// let n = 1;
// document.getElementById('page').innerHTML=n+'/15건';

// function plus(){
//   if(n==15){
//     n=1;
//   }else{
//     n++;
//   }
//   document.getElementById('page').innerHTML=n+'/15건';
//   document.getElementsByClassName('small').src="./img/movi"+n+".jpg";
// }

// function minus(){
//   if(n==1){
//     n=15;
//   }else{
//     n--;
//   }
//   document.getElementById('page').innerHTML=n+'/15건';
//   document.getElementsByClassName('small').src="./img/movi"+n+".jpg";
// }


let n = 1;
const imgList = document.querySelectorAll('.thum>li');
const leftBtn = document.querySelector('i.fa-caret-left');
const righthBtn = document.querySelector('i.fa-caret-right');
const leftBtn2 = document.getElementById('faleft');
const righthBtn2 = document.getElementById('faright');
const bOx = document.querySelectorAll('.thum>li');


imgList.forEach((a, index) => {
  a.onclick = () =>{
    n = index+1;
    imgChange();
  }
});

leftBtn.addEventListener('click',function(){
  if(n==1){
    n=16;
  }else{
    n--;
  }
  imgChange();
});

righthBtn.addEventListener('click',function(){
  if(n==16){
    n=1;
  }else{
    n++;
  }
  imgChange();
});

leftBtn2.addEventListener('click',function(){
  if(n==1){
    n=16;
  }else{
    n--;
  }
  imgChange();
});

righthBtn2.addEventListener('click',function(){
  if(n==16){
    n=1;
  }else{
    n++;
  }
  imgChange();
});


function imgChange(){
  for(let j=0;j<bOx.length;j++){
    bOx[j].style.border='none';
  }
  document.getElementById('page').innerHTML= n + '/16건';
  document.getElementById('photo').src='./img/movi0'+n+'.jpg';
  bOx[n-1].style.border='2px solid red';
};



