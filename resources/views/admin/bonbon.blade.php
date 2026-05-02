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
  background:#F27D00;
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
.logo-section{
  margin-top:30px;
  display:flex;
  flex-direction:column;
  align-items:center;
}
.logo-ring{
  position:relative;
  width:160px;
  height:160px;
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
  inset:8px;
  border-color:rgba(255,255,255,.15);
  border-top-color:rgba(255,255,255,.8);
  animation:spin 10s linear infinite reverse;
}
@keyframes spin{to{transform:rotate(360deg);}}
.ring-svg{
  position:absolute;
  inset:0;
  animation:spin 18s linear infinite;
}
.logo-img-wrap{
  width:120px;
  height:120px;
  border-radius:50%;
  overflow:hidden;
  position:relative;
  z-index:2;
  box-shadow:0 0 0 2px rgba(255,255,255,.4),0 20px 60px rgba(0,0,0,.3);
  background:var(--mocha);
  display:flex;
  align-items:center;
  justify-content:center;
}
.logo-placeholder{
  font-family:'Cormorant Garamond',serif;
  font-size:32px;
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
  font-size:38px;
  font-weight:400;
  color:#fff;
  letter-spacing:.12em;
  margin-top:22px;
  text-align:center;
  line-height:1;
}
.cafe-name em{
  font-style:italic;
  color:rgba(255,240,200,1);
}
.cafe-tagline{
  font-size:11px;
  font-weight:300;
  letter-spacing:.25em;
  color:rgba(255,255,255,.6);
  text-transform:uppercase;
  margin-top:8px;
  text-align:center;
}
.divider{
  display:flex;
  align-items:center;
  gap:12px;
  margin:32px 0 28px;
  width:calc(100% - 40px);
  max-width:340px;
}
.divider::before,.divider::after{
  content:'';
  flex:1;
  height:1px;
  background:linear-gradient(90deg, transparent, rgba(255,255,255,.4), transparent);
}
.divider-icon{
  color:#fff;
  font-size:10px;
  opacity:.8;
}
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
.sh-insta{background:linear-gradient(135deg,#F9CE34 0%,#EE2A7B 50%,#6228D7 100%);}
.sh-menu {background:linear-gradient(135deg,#E8C56D 0%,#C8863A 50%,#7A3F1E 100%);}
.sh-trip {background:linear-gradient(135deg,#00C49A 0%,#00897B 100%);}
.sh-gis  {background:linear-gradient(135deg,#1C7ECF 0%,#1565C0 100%);}
.sh-yandex{background:linear-gradient(135deg,#FF6F3C 0%,#E53935 100%);}
.sh-google{background:conic-gradient(from 180deg at 50% 50%,#EA4335 0deg,#FBBC05 90deg,#34A853 180deg,#4285F4 270deg,#EA4335 360deg);}
.bottom-strip{
  margin-top:48px;
  width:calc(100% - 40px);
  max-width:340px;
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
      <svg class="ring-svg" viewBox="0 0 160 160" fill="none" xmlns="http://www.w3.org/2000/svg">
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
/* Rotating dot ring */
(function(){
  const g=document.getElementById('dots');
  const cx=80,cy=80,r=72,n=24;
  for(let i=0;i<n;i++){
    const a=(i/n)*Math.PI*2-Math.PI/2;
    const x=cx+r*Math.cos(a);
    const y=cy+r*Math.sin(a);
    const sz=i%3===0?2.5:1.5;
    const op=i%3===0?0.7:0.3;
    const c=document.createElementNS('http://www.w3.org/2000/svg','circle');
    c.setAttribute('cx',x);c.setAttribute('cy',y);
    c.setAttribute('r',sz);c.setAttribute('fill',`rgba(255,255,255,${op})`);
    g.appendChild(c);
  }
})();

/* Background animation */
const canvas=document.getElementById('bg');
const ctx=canvas.getContext('2d');
let W,H;
function resize(){W=canvas.width=window.innerWidth;H=canvas.height=window.innerHeight;}
resize();
window.addEventListener('resize',resize);

class Particle{
  constructor(){this.reset(true);}
  reset(init){
    this.x=Math.random()*W;
    this.y=init?Math.random()*H:H+20;
    this.vy=-(0.25+Math.random()*0.5);
    this.vx=(Math.random()-0.5)*0.25;
    this.radius=1+Math.random()*2.5;
    this.life=0;
    this.maxLife=200+Math.random()*220;
    const g=Math.floor(100+Math.random()*60);
    this.color=`255,${g},0`;
  }
  update(){
    this.life++;
    const t=this.life/this.maxLife;
    this.alpha=t<0.2?t*5*0.22:(t>0.8?(1-t)*5*0.22:0.22);
    this.x+=this.vx+Math.sin(this.life*0.028)*0.3;
    this.y+=this.vy;
    if(this.life>=this.maxLife)this.reset(false);
  }
  draw(){
    ctx.beginPath();
    ctx.arc(this.x,this.y,this.radius,0,Math.PI*2);
    ctx.fillStyle=`rgba(${this.color},${this.alpha})`;
    ctx.fill();
  }
}

class Orb{
  constructor(){this.reset();}
  reset(){
    this.x=Math.random()*W;this.y=Math.random()*H;
    this.targetX=Math.random()*W;this.targetY=Math.random()*H;
    this.r=120+Math.random()*180;
    this.alpha=0.04+Math.random()*0.06;
    this.speed=0.003+Math.random()*0.004;
    this.t=0;
  }
  update(){
    this.t+=this.speed;
    if(this.t>=1){this.x=this.targetX;this.y=this.targetY;this.reset();this.t=0;}
    this.cx=this.x+(this.targetX-this.x)*this.t;
    this.cy=this.y+(this.targetY-this.y)*this.t;
  }
  draw(){
    const grd=ctx.createRadialGradient(this.cx,this.cy,0,this.cx,this.cy,this.r);
    grd.addColorStop(0,`rgba(255,220,120,${this.alpha})`);
    grd.addColorStop(1,`rgba(255,100,0,0)`);
    ctx.beginPath();ctx.arc(this.cx,this.cy,this.r,0,Math.PI*2);
    ctx.fillStyle=grd;ctx.fill();
  }
}

class Sparkle{
  constructor(){this.reset();}
  reset(){
    this.x=Math.random()*W;this.y=Math.random()*H;
    this.size=0.5+Math.random()*2;
    this.life=0;this.maxLife=60+Math.random()*80;
    this.delay=Math.random()*120;
  }
  update(){if(this.delay>0){this.delay--;return;}this.life++;if(this.life>=this.maxLife)this.reset();}
  draw(){
    if(this.delay>0)return;
    const t=this.life/this.maxLife;
    const a=t<0.4?t/0.4:1-(t-0.4)/0.6;
    ctx.beginPath();ctx.arc(this.x,this.y,this.size*a,0,Math.PI*2);
    ctx.fillStyle=`rgba(255,240,180,${a*0.7})`;ctx.fill();
    const s=this.size*a*3;
    ctx.beginPath();
    ctx.moveTo(this.x-s,this.y);ctx.lineTo(this.x+s,this.y);
    ctx.moveTo(this.x,this.y-s);ctx.lineTo(this.x,this.y+s);
    ctx.strokeStyle=`rgba(255,240,180,${a*0.35})`;ctx.lineWidth=0.5;ctx.stroke();
  }
}

class Ring{
  constructor(){this.reset();}
  reset(){
    this.x=Math.random()*W;this.y=Math.random()*H;
    this.r=0;this.maxR=80+Math.random()*120;
    this.speed=0.4+Math.random()*0.3;
    this.delay=Math.random()*300;
  }
  update(){if(this.delay>0){this.delay--;return;}this.r+=this.speed;if(this.r>=this.maxR)this.reset();}
  draw(){
    if(this.delay>0||this.r<=0)return;
    const a=(1-this.r/this.maxR)*0.12;
    ctx.beginPath();ctx.arc(this.x,this.y,this.r,0,Math.PI*2);
    ctx.strokeStyle=`rgba(255,200,80,${a})`;ctx.lineWidth=1;ctx.stroke();
  }
}

const particles=Array.from({length:90},()=>new Particle());
const orbs=Array.from({length:5},()=>new Orb());
const sparkles=Array.from({length:40},()=>new Sparkle());
const rings=Array.from({length:6},()=>new Ring());

function loop(){
  ctx.clearRect(0,0,W,H);
  orbs.forEach(o=>{o.update();o.draw();});
  rings.forEach(r=>{r.update();r.draw();});
  particles.forEach(p=>{p.update();p.draw();});
  sparkles.forEach(s=>{s.update();s.draw();});
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