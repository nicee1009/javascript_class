const slide = document.querySelector('.slide');
const slide_img = document.querySelectorAll('.slide li');
const prev_btn = document.getElementById('prev_btn');
const next_btn = document.getElementById('next_btn');


const img_n = slide_img.length;
console.log(img_n);

const img_w = 100;
const s_con = 1;

let count = 0;

function mslide(n){
  slide.style.left = (img_w)*-n+"%";
  count = n;
  console.log(count);
}

prev_btn.addEventListener('click',function(){
  if(count > 0){
    mslide(count-1);
  }else{
    mslide(img_n-s_con);
  }
})

next_btn.addEventListener('click',function(){
  if(count < img_n-s_con){
    mslide(count+1);
  }else{
    mslide(0);
  }
})

let Timer = setInterval(function(){
  if(count < img_n-s_con){
    mslide(count+1);
  }else{
    mslide(0);
  }
},3000);

prev_btn.addEventListener('mouseout',function(){
  Timer = setInterval(function(){
    if(count < img_n-s_con){
      mslide(count+1);
    }else{
      mslide(0);
    }
  },3000);
});

prev_btn.addEventListener('mouseout',function(){
  Timer = setInterval(function(){
    if(count < img_n-s_con){
      mslide(count+1);
    }else{
      mslide(0);
    }
  },3000);
});



