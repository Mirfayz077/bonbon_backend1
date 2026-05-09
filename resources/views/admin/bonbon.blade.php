<!DOCTYPE html>
<html lang="uz">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width,initial-scale=1.0">
<link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,400;0,600;1,400&family=DM+Sans:wght@300;400;500&display=swap" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
<style>
*{margin:0;padding:0;box-sizing:border-box;}
:root{
  --cream:#F5EDD8;
  --caramel:#C8863A;
  --mocha:#6B3D2E;
  --foam:#FAF5E9;
  --gold:#D4A853;
}
body{
  font-family:'DM Sans',sans-serif;
  background:#E8650A;
  min-height:100vh;
  overflow-x:hidden;
  position:relative;
}
canvas#bg{
  position:fixed;
  inset:0;
  z-index:0;
  pointer-events:none;
}
.wrapper{
  position:relative;
  z-index:2;
  min-height:100vh;
  display:flex;
  flex-direction:column;
  align-items:center;
  padding:0 0 60px;
}
.lang-wrap{
  align-self:flex-end;
  margin:18px 20px 0;
}
.lang-wrap select{
  background:rgba(255,255,255,.15);
  border:1px solid rgba(255,255,255,.35);
  color:#fff;
  padding:6px 14px;
  border-radius:30px;
  font-family:'DM Sans',sans-serif;
  font-size:12px;
  letter-spacing:.08em;
  cursor:pointer;
  outline:none;
  -webkit-appearance:none;
  transition:border-color .3s;
}
.lang-wrap select:hover{border-color:rgba(255,255,255,.7);}

/* LOGO — kattaroq */
.logo-section{
  margin-top:24px;
  display:flex;
  flex-direction:column;
  align-items:center;
}
.logo-ring{
  position:relative;
  width:200px;
  height:200px;
  display:flex;
  align-items:center;
  justify-content:center;
}
.logo-ring::before,
.logo-ring::after{
  content:'';
  position:absolute;
  border-radius:50%;
  border:1px solid;
}
.logo-ring::before{
  inset:0;
  border-color:rgba(255,255,255,.35);
  animation:spin 18s linear infinite;
}
.logo-ring::after{
  inset:10px;
  border-color:rgba(255,255,255,.12);
  border-top-color:rgba(255,255,255,.75);
  animation:spin 10s linear infinite reverse;
}
@keyframes spin{to{transform:rotate(360deg);}}
.ring-svg{
  position:absolute;
  inset:0;
  animation:spin 18s linear infinite;
}
.logo-img-wrap{
  width:155px;
  height:155px;
  border-radius:50%;
  overflow:hidden;
  position:relative;
  z-index:2;
  box-shadow:0 0 0 3px rgba(255,255,255,.4),0 20px 60px rgba(0,0,0,.35);
  background:var(--mocha);
  display:flex;
  align-items:center;
  justify-content:center;
}
.logo-placeholder{
  font-family:'Cormorant Garamond',serif;
  font-size:42px;
  color:var(--cream);
  letter-spacing:.06em;
}
.logo-img-wrap img{
  width:100%;
  height:100%;
  object-fit:cover;
}
.cafe-name{
  font-family:'Cormorant Garamond',serif;
  font-size:44px;
  font-weight:400;
  color:#fff;
  letter-spacing:.14em;
  margin-top:20px;
  text-align:center;
  line-height:1;
}
.cafe-name em{
  font-style:italic;
  color:rgba(255,240,190,1);
}
.cafe-tagline{
  font-size:11px;
  font-weight:300;
  letter-spacing:.28em;
  color:rgba(255,255,255,.58);
  text-transform:uppercase;
  margin-top:9px;
  text-align:center;
}
.divider{
  display:flex;
  align-items:center;
  gap:12px;
  margin:28px 0 24px;
  width:calc(100% - 40px);
  max-width:340px;
}
.divider::before,.divider::after{
  content:'';
  flex:1;
  height:1px;
  background:linear-gradient(90deg,transparent,rgba(255,255,255,.4),transparent);
}
.divider-icon{color:#fff;font-size:10px;opacity:.8;}

.grid{
  display:grid;
  grid-template-columns:repeat(3,1fr);
  gap:14px;
  width:calc(100% - 40px);
  max-width:360px;
}
.icon-card{
  display:flex;
  flex-direction:column;
  align-items:center;
  gap:10px;
  text-decoration:none;
  cursor:pointer;
  transition:transform .35s cubic-bezier(.34,1.56,.64,1);
  -webkit-tap-highlight-color:transparent;
}
.icon-card:hover{transform:translateY(-5px) scale(1.03);}
.icon-card:active{transform:scale(.96);}
.icon-shell{
  width:72px;
  height:72px;
  border-radius:22px;
  display:flex;
  align-items:center;
  justify-content:center;
  font-size:24px;
  color:white;
  position:relative;
  overflow:hidden;
  transition:box-shadow .3s;
}
.icon-shell::after{
  content:'';
  position:absolute;
  inset:0;
  border-radius:inherit;
  background:linear-gradient(135deg,rgba(255,255,255,.18) 0%,transparent 60%);
  pointer-events:none;
}
.icon-card:hover .icon-shell{
  box-shadow:0 16px 40px rgba(0,0,0,.4),0 0 0 1px rgba(255,255,255,.15);
}
.icon-label{
  font-size:11px;
  font-weight:400;
  color:rgba(255,255,255,.85);
  letter-spacing:.06em;
  text-align:center;
}
.sh-insta {background:linear-gradient(135deg,#F9CE34 0%,#EE2A7B 50%,#6228D7 100%);}
.sh-menu  {background:linear-gradient(135deg,#E8C56D 0%,#C8863A 50%,#7A3F1E 100%);}
.sh-trip  {background:linear-gradient(135deg,#00C49A 0%,#00897B 100%);}
.sh-gis   {background:linear-gradient(135deg,#1C7ECF 0%,#1565C0 100%);}
.sh-yandex{background:linear-gradient(135deg,#FF6F3C 0%,#E53935 100%);}
.sh-google{background:conic-gradient(from 180deg at 50% 50%,#EA4335 0deg,#FBBC05 90deg,#34A853 180deg,#4285F4 270deg,#EA4335 360deg);}
.sh-branch{background:linear-gradient(135deg,#8B5E3C 0%,#4A2512 100%);}

.bottom-strip{
  margin-top:44px;
  display:flex;
  justify-content:center;
  gap:6px;
}
.dot{
  width:5px;height:5px;
  border-radius:50%;
  background:#fff;
  opacity:.25;
  animation:pulse 2.4s ease-in-out infinite;
}
.dot:nth-child(2){animation-delay:.3s;opacity:.4;}
.dot:nth-child(3){animation-delay:.6s;opacity:.55;}
.dot:nth-child(4){animation-delay:.9s;opacity:.4;}
.dot:nth-child(5){animation-delay:1.2s;opacity:.25;}
@keyframes pulse{0%,100%{transform:scaleY(1);}50%{transform:scaleY(2.2);opacity:.8;}}
</style>
</head>
<body>
<canvas id="bg"></canvas>

<div class="wrapper">
  <div class="lang-wrap">
    <select>
      <option>UZ</option>
      <option>RU</option>
      <option>EN</option>
    </select>
  </div>

  <div class="logo-section">
    <div class="logo-ring">
      <svg class="ring-svg" viewBox="0 0 200 200" fill="none" xmlns="http://www.w3.org/2000/svg">
        <g id="dots"></g>
      </svg>
      <div class="logo-img-wrap">
        <img src="{{ asset('image_2023-01-13_18-16-47.png') }}"
             onerror="this.style.display='none';this.nextElementSibling.style.display='flex';"
             alt="BonBon Cafe Logo">
        <div class="logo-placeholder" style="display:none;">BB</div>
      </div>
    </div>
    <h1 class="cafe-name"><em>Bon</em>Bon <em>Cafe</em></h1>
    <p class="cafe-tagline">Toshkent · Since 2019</p>
  </div>

  <div class="divider">
    <span class="divider-icon"><i class="fa-solid fa-mug-hot"></i></span>
  </div>

  <div class="grid">
    <a class="icon-card" href="https://www.instagram.com/bon_boncafe/" target="_blank">
      <div class="icon-shell sh-insta"><i class="fa-brands fa-instagram"></i></div>
      <span class="icon-label">Instagram</span>
    </a>

    <a class="icon-card" href="{{ route('menu') }}">
      <div class="icon-shell sh-menu"><i class="fa-solid fa-book-open"></i></div>
      <span class="icon-label">Menyu</span>
    </a>

    <a class="icon-card" href="https://www.tripadvisor.ru/UserReviewEdit-g303936-d19139820-Bon_Bon-Bukhara_Bukhara_Province.html" target="_blank">
      <div class="icon-shell sh-trip"><i class="fa-solid fa-star"></i></div>
      <span class="icon-label">Tripadvisor</span>
    </a>

    <a class="icon-card" href="https://2gis.uz/uz/bukhara/firm/70000001083516500/tab/reviews/addreview" target="_blank">
      <div class="icon-shell sh-gis"><i class="fa-solid fa-location-dot"></i></div>
      <span class="icon-label">2GIS</span>
    </a>

    <a class="icon-card" href="https://yandex.uz/maps/org/31117169236/reviews/?ll=64.430900%2C39.772119&z=16" target="_blank">
      <div class="icon-shell sh-yandex"><i class="fa-brands fa-yandex"></i></div>
      <span class="icon-label">Yandex</span>
    </a>

    <a class="icon-card" href="" target="_blank">
      <div class="icon-shell sh-google"><i class="fa-brands fa-google"></i></div>
      <span class="icon-label">Google</span>
    </a>

    <a class="icon-card" href="#">
      <div class="icon-shell sh-branch"><i class="fa-solid fa-map-location-dot"></i></div>
      <span class="icon-label">Filiallar</span>
    </a>
  </div>

  <div class="bottom-strip">
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
    <div class="dot"></div>
  </div>
</div>

<script>
/* Rotating dot ring — kattaroq */
(function(){
  const g=document.getElementById('dots');
  const cx=100,cy=100,r=90,n=28;
  for(let i=0;i<n;i++){
    const a=(i/n)*Math.PI*2-Math.PI/2;
    const x=cx+r*Math.cos(a);
    const y=cy+r*Math.sin(a);
    const sz=i%3===0?2.8:1.6;
    const op=i%3===0?0.7:0.28;
    const c=document.createElementNS('http://www.w3.org/2000/svg','circle');
    c.setAttribute('cx',x);c.setAttribute('cy',y);
    c.setAttribute('r',sz);
    c.setAttribute('fill',`rgba(255,255,255,${op})`);
    g.appendChild(c);
  }
})();

/* ── BACKGROUND ANIMATION ── */
const canvas=document.getElementById('bg');
const ctx=canvas.getContext('2d');
let W,H,frame=0;
function resize(){W=canvas.width=window.innerWidth;H=canvas.height=window.innerHeight;}
resize();
window.addEventListener('resize',resize);
const PI2=Math.PI*2;

/* Steam lines — bug' chiziqlar, butun fon bo'ylab */
class Steam{
  constructor(i){
    this.ox=10+Math.random()*(window.innerWidth-20);
    this.life=Math.random()*340;
    this.init();
  }
  init(){
    this.maxLife=260+Math.random()*220;
    this.speed=0.45+Math.random()*0.55;
    this.amp=16+Math.random()*24;
    this.freq=0.016+Math.random()*0.012;
    this.phase=Math.random()*PI2;
    this.w=0.7+Math.random()*1.5;
    this.segLen=14+Math.random()*10;
  }
  update(){
    this.life+=this.speed;
    if(this.life>=this.maxLife){this.ox=10+Math.random()*(W-20);this.life=0;this.init();}
  }
  draw(){
    const prog=this.life/this.maxLife;
    const baseAlpha=prog<0.15?prog/0.15:prog>0.78?(1-prog)/0.22:1;
    const y=H+10-(prog*(H+30));
    const x=this.ox+Math.sin(this.life*this.freq+this.phase)*this.amp;
    ctx.strokeStyle=`rgba(255,215,140,${baseAlpha*0.26})`;
    ctx.lineWidth=this.w;
    ctx.beginPath();
    ctx.moveTo(x,y);
    ctx.lineTo(x+Math.sin(this.life*this.freq+this.phase+0.5)*4,y+this.segLen);
    ctx.stroke();
  }
}

/* Floating circles — suzuvchi doiralar */
class Bubble{
  constructor(init){this.reset(init);}
  reset(init){
    this.x=8+Math.random()*(W-16);
    this.y=init?Math.random()*H:H+25;
    this.r=3+Math.random()*20;
    this.vy=-(0.12+Math.random()*0.22);
    this.vx=(Math.random()-0.5)*0.18;
    this.life=0;
    this.maxLife=320+Math.random()*280;
    this.filled=this.r<9;
    this.wobble=Math.random()*PI2;
    this.ws=0.01+Math.random()*0.012;
  }
  update(){
    this.life++;this.wobble+=this.ws;
    this.x+=this.vx+Math.sin(this.wobble)*0.2;
    this.y+=this.vy;
    if(this.life>=this.maxLife||this.y<-28)this.reset(false);
  }
  draw(){
    const p=this.life/this.maxLife;
    const a=p<0.16?p/0.16:p>0.8?(1-p)/0.2:1;
    ctx.beginPath();ctx.arc(this.x,this.y,this.r,0,PI2);
    if(this.filled){ctx.fillStyle=`rgba(180,110,40,${a*0.32})`;ctx.fill();}
    else{ctx.strokeStyle=`rgba(255,200,90,${a*0.2})`;ctx.lineWidth=0.8;ctx.stroke();}
  }
}

/* Coffee beans — qahva donalari */
class Bean{
  constructor(init){this.reset(init);}
  reset(init){
    this.x=6+Math.random()*(W-12);
    this.y=init?Math.random()*H:-12;
    this.sz=5+Math.random()*9;
    this.vy=0.1+Math.random()*0.16;
    this.rot=Math.random()*PI2;
    this.dr=(Math.random()-0.5)*0.022;
    this.life=0;
    this.maxLife=380+Math.random()*240;
  }
  update(){
    this.life++;this.y+=this.vy;
    this.x+=Math.sin(this.life*0.019)*0.25;
    this.rot+=this.dr;
    if(this.life>=this.maxLife||this.y>H+12)this.reset(false);
  }
  draw(){
    const p=this.life/this.maxLife;
    const a=p<0.1?p/0.1:p>0.88?(1-p)/0.12:1;
    ctx.save();ctx.translate(this.x,this.y);ctx.rotate(this.rot);
    ctx.fillStyle=`rgba(100,52,32,${a*0.52})`;
    ctx.beginPath();ctx.ellipse(0,0,this.sz*0.48,this.sz,0,0,PI2);ctx.fill();
    ctx.strokeStyle=`rgba(200,130,55,${a*0.38})`;ctx.lineWidth=0.6;
    ctx.beginPath();ctx.moveTo(0,-this.sz*0.78);ctx.lineTo(0,this.sz*0.78);ctx.stroke();
    ctx.restore();
  }
}

/* Edge flourishes — chet dekorlar: spiral, gul, yulduz */
class Flourish{
  constructor(init){this.reset(init);}
  reset(init){
    /* chetlarga yaqin — chap yoki o'ng */
    const side=Math.random()>0.5?'L':'R';
    this.side=side;
    this.x=side==='L'?4+Math.random()*55:W-4-Math.random()*55;
    this.y=init?Math.random()*H:H+28;
    this.sz=16+Math.random()*36;
    this.rot=Math.random()*PI2;
    this.dr=(Math.random()-0.5)*0.007;
    this.vy=-(0.07+Math.random()*0.1);
    this.life=0;
    this.maxLife=480+Math.random()*320;
    this.type=Math.floor(Math.random()*3); /* 0=spiral,1=doira,2=yulduz */
  }
  update(){
    this.life++;this.y+=this.vy;this.rot+=this.dr;
    if(this.life>=this.maxLife||this.y<-50)this.reset(false);
  }
  draw(){
    const p=this.life/this.maxLife;
    const a=p<0.12?p/0.12:p>0.82?(1-p)/0.18:1;
    ctx.save();ctx.translate(this.x,this.y);ctx.rotate(this.rot);
    ctx.strokeStyle=`rgba(255,215,130,${a*0.28})`;ctx.lineWidth=0.8;ctx.fillStyle='none';
    if(this.type===0){
      ctx.beginPath();
      for(let i=0;i<=72;i++){
        const ang=(i/72)*PI2*3;
        const r=(i/72)*this.sz*0.5;
        const px=Math.cos(ang)*r,py=Math.sin(ang)*r;
        i===0?ctx.moveTo(px,py):ctx.lineTo(px,py);
      }
      ctx.stroke();
    } else if(this.type===1){
      [0.5,0.32,0.16].forEach(f=>{
        ctx.beginPath();ctx.arc(0,0,this.sz*f,0,PI2);ctx.stroke();
      });
    } else {
      const pts=5;
      ctx.beginPath();
      for(let i=0;i<pts*2;i++){
        const ang=(i/(pts*2))*PI2-Math.PI/2;
        const r=i%2===0?this.sz*0.5:this.sz*0.2;
        i===0?ctx.moveTo(Math.cos(ang)*r,Math.sin(ang)*r):ctx.lineTo(Math.cos(ang)*r,Math.sin(ang)*r);
      }
      ctx.closePath();ctx.stroke();
    }
    ctx.restore();
  }
}

/* Expanding rings — kengayuvchi halqalar */
class ExpandRing{
  constructor(){this.reset();}
  reset(){
    this.x=Math.random()*W;this.y=Math.random()*H;
    this.r=0;this.maxR=70+Math.random()*110;
    this.spd=0.38+Math.random()*0.3;
    this.delay=Math.random()*280;
  }
  update(){if(this.delay>0){this.delay--;return;}this.r+=this.spd;if(this.r>=this.maxR)this.reset();}
  draw(){
    if(this.delay>0||this.r<=0)return;
    const a=(1-this.r/this.maxR)*0.11;
    ctx.beginPath();ctx.arc(this.x,this.y,this.r,0,PI2);
    ctx.strokeStyle=`rgba(255,195,75,${a})`;ctx.lineWidth=0.9;ctx.stroke();
  }
}

/* Subtle wave lines */
class WaveLine{
  constructor(i){this.idx=i;this.off=Math.random()*PI2;}
  draw(t){
    const yBase=H*(0.2+this.idx*0.22);
    ctx.strokeStyle=`rgba(255,170,60,0.038)`;
    ctx.lineWidth=1;ctx.beginPath();
    for(let x=0;x<=W;x+=4){
      const y=yBase+Math.sin(x*0.016+t*0.007+this.off)*20+Math.cos(x*0.009+t*0.005)*12;
      x===0?ctx.moveTo(x,y):ctx.lineTo(x,y);
    }
    ctx.stroke();
  }
}

/* Orbs — yumaloq yorug'lik */
class Orb{
  constructor(){this.reset();}
  reset(){
    this.x=Math.random()*W;this.y=Math.random()*H;
    this.tx=Math.random()*W;this.ty=Math.random()*H;
    this.r=110+Math.random()*160;
    this.alpha=0.035+Math.random()*0.05;
    this.spd=0.003+Math.random()*0.004;
    this.t=0;
  }
  update(){
    this.t+=this.spd;
    if(this.t>=1){this.x=this.tx;this.y=this.ty;this.reset();this.t=0;}
    this.cx=this.x+(this.tx-this.x)*this.t;
    this.cy=this.y+(this.ty-this.y)*this.t;
  }
  draw(){
    const g=ctx.createRadialGradient(this.cx,this.cy,0,this.cx,this.cy,this.r);
    g.addColorStop(0,`rgba(255,215,110,${this.alpha})`);
    g.addColorStop(1,'rgba(230,90,0,0)');
    ctx.beginPath();ctx.arc(this.cx,this.cy,this.r,0,PI2);
    ctx.fillStyle=g;ctx.fill();
  }
}

/* Side vignette — chet qorayishi */
function drawVignette(){
  const ww=W*0.18;
  const gL=ctx.createLinearGradient(0,0,ww,0);
  gL.addColorStop(0,'rgba(120,35,0,0.22)');gL.addColorStop(1,'rgba(120,35,0,0)');
  ctx.fillStyle=gL;ctx.fillRect(0,0,ww,H);
  const gR=ctx.createLinearGradient(W,0,W-ww,0);
  gR.addColorStop(0,'rgba(120,35,0,0.22)');gR.addColorStop(1,'rgba(120,35,0,0)');
  ctx.fillStyle=gR;ctx.fillRect(W-ww,0,ww,H);
}

/* Init all particles */
const steams   =Array.from({length:80}, (_,i)=>new Steam(i));
const bubbles  =Array.from({length:55}, ()=>new Bubble(true));
const beans    =Array.from({length:65}, ()=>new Bean(true));
const flourishes=Array.from({length:28}, ()=>new Flourish(true));
const exRings  =Array.from({length:8},  ()=>new ExpandRing());
const waves    =Array.from({length:4},  (_,i)=>new WaveLine(i));
const orbs     =Array.from({length:5},  ()=>new Orb());

function loop(){
  ctx.clearRect(0,0,W,H);
  frame++;
  orbs.forEach(o=>{o.update();o.draw();});
  waves.forEach(w=>w.draw(frame));
  exRings.forEach(r=>{r.update();r.draw();});
  bubbles.forEach(b=>{b.update();b.draw();});
  beans.forEach(b=>{b.update();b.draw();});
  flourishes.forEach(f=>{f.update();f.draw();});
  steams.forEach(s=>{s.update();s.draw();});
  drawVignette();
  requestAnimationFrame(loop);
}
loop();

/* Entrance animation */
document.querySelectorAll('.icon-card').forEach((el,i)=>{
  el.style.opacity='0';
  el.style.transform='translateY(24px)';
  el.style.transition='opacity .5s ease, transform .5s cubic-bezier(.34,1.56,.64,1)';
  setTimeout(()=>{el.style.opacity='1';el.style.transform='translateY(0)';},400+i*80);
});
const ls=document.querySelector('.logo-section');
ls.style.opacity='0';ls.style.transform='translateY(-16px)';
ls.style.transition='opacity .7s ease, transform .7s ease';
setTimeout(()=>{ls.style.opacity='1';ls.style.transform='translateY(0)';},150);
</script>
</body>
</html>