

let n = 1;//초기값
const img_list = document.querySelectorAll('.lnb>li');
const left_btn = document.querySelector('i.fa-angle-left');
const right_btn = document.querySelector('i.fa-angle-right');

document.getElementById('page').innerHTML= n + '/16건';

img_list.forEach((el, index) => { //el은 li를 의미하고, index는 배열에 번호를 0부터 매기겠다.
  el.onclick =()=>{ //=> = function
    console.log(index);
    n = index+1;//인덱스 번호에 1을 더하여 1부터 숫자가 나오게..


    document.getElementById('page').innerHTML= n + '/16건';
    document.getElementById('photo').src='./images/movie_image' + n + '.jpg';
  }
});

left_btn.addEventListener('click',function(){
  if(n==1){
    n=16;
  }else{
    n--;
  }
  console.log(n);//확인한다.
  document.getElementById('page').innerHTML= n + '/16건';
  document.getElementById('photo').src='./images/movie_image'+n+'.jpg';
});
right_btn.addEventListener('click',function(){
  if(n==16){
    n=1;
  }else{
    n++;
  }
  console.log(n);//확인한다.
  document.getElementById('page').innerHTML= n + '/16건';
  document.getElementById('photo').src='./images/movie_image'+n+'.jpg';
});