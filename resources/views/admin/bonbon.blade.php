
<style>
@import url('https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;1,400&family=Inter:wght@300;400;500;600&display=swap');

*{margin:0;padding:0;box-sizing:border-box;}
:root{
  --bg:#0f0a05;
  --or:#c8620a;
  --or2:#e07010;
  --gold:#c9a84c;
  --gold2:#e8c97a;
  --cream:#fdf6ec;
  --muted:rgba(253,246,236,0.45);
  --faint:rgba(253,246,236,0.18);
}

body,html{background:transparent;}

.bb-wrap{
  font-family:'Inter',sans-serif;
  background:var(--bg);
  color:var(--cream);
  min-height:100vh;
  position:relative;
  overflow:hidden;
}

/* === ANIMATED CANVAS BG === */
#bb-canvas{
  position:fixed;top:0;left:0;
  width:100%;height:100%;
  pointer-events:none;z-index:0;
}

/* === FLOATING PARTICLES === */
.particles{
  position:fixed;inset:0;
  pointer-events:none;z-index:1;
  overflow:hidden;
}
.pt{
  position:absolute;
  border-radius:50%;
  animation:rise linear infinite;
  pointer-events:none;
}
@keyframes rise{
  0%{transform:translateY(110vh) translateX(0) scale(1);opacity:0;}
  10%{opacity:1;}
  90%{opacity:0.6;}
  100%{transform:translateY(-10vh) translateX(var(--drift)) scale(0.7);opacity:0;}
}

/* === AURORA BLOBS === */
.aurora{
  position:fixed;inset:0;z-index:0;pointer-events:none;
}
.blob{
  position:absolute;border-radius:50%;filter:blur(80px);
  animation:blobFloat ease-in-out infinite;
}
@keyframes blobFloat{
  0%,100%{transform:translate(0,0) scale(1);}
  33%{transform:translate(30px,-40px) scale(1.1);}
  66%{transform:translate(-20px,20px) scale(0.95);}
}

/* === CONTENT === */
.content{position:relative;z-index:10;}

/* === ICON ROW === */
.icon-section{
  display:flex;justify-content:center;align-items:center;
  padding:36px 20px 20px;
  gap:0;
}
.icon-ring{
  position:relative;
  width:280px;height:280px;
}
.center-logo{
  position:absolute;top:50%;left:50%;
  transform:translate(-50%,-50%);
  width:80px;height:80px;
  border-radius:24px;
  background:linear-gradient(135deg,rgba(200,98,10,0.25),rgba(201,168,76,0.15));
  border:1px solid rgba(201,168,76,0.3);
  display:flex;align-items:center;justify-content:center;
  font-family:'Playfair Display',serif;
  font-size:22px;font-weight:700;color:var(--gold);
  letter-spacing:0.05em;
  box-shadow:0 0 40px rgba(200,98,10,0.2),0 0 80px rgba(201,168,76,0.08);
  animation:logoPulse 4s ease-in-out infinite;
  z-index:5;
}
@keyframes logoPulse{
  0%,100%{box-shadow:0 0 30px rgba(200,98,10,0.15),0 0 60px rgba(201,168,76,0.06);}
  50%{box-shadow:0 0 50px rgba(200,98,10,0.3),0 0 100px rgba(201,168,76,0.12);}
}

/* orbit rings */
.orbit{
  position:absolute;top:50%;left:50%;
  border-radius:50%;border:0.5px solid rgba(201,168,76,0.12);
  transform:translate(-50%,-50%);
  animation:spinOrbit linear infinite;
}
.orbit1{width:140px;height:140px;animation-duration:12s;}
.orbit2{width:220px;height:220px;animation-duration:20s;animation-direction:reverse;border-color:rgba(200,98,10,0.08);}
.orbit3{width:280px;height:280px;animation-duration:30s;border-color:rgba(201,168,76,0.06);}
@keyframes spinOrbit{from{transform:translate(-50%,-50%) rotate(0deg);}to{transform:translate(-50%,-50%) rotate(360deg);}}

/* icon planets */
.planet{
  position:absolute;
  top:50%;left:50%;
  transform-origin:0 0;
}
.planet-inner{
  width:46px;height:46px;
  border-radius:14px;
  background:rgba(15,10,5,0.8);
  border:0.5px solid rgba(201,168,76,0.2);
  display:flex;flex-direction:column;align-items:center;justify-content:center;
  gap:2px;
  cursor:pointer;
  transition:transform 0.25s cubic-bezier(.34,1.56,.64,1),border-color 0.2s;
  text-decoration:none;color:var(--cream);
  backdrop-filter:blur(8px);
  position:relative;
}
.planet-inner:hover{
  transform:scale(1.15);
  border-color:rgba(201,168,76,0.5);
  background:rgba(201,168,76,0.1);
}
.planet-inner i{font-size:18px;color:rgba(253,246,236,0.7);}
.planet-lbl{font-size:8px;color:rgba(253,246,236,0.4);letter-spacing:0.08em;}

/* === HERO TEXT === */
.hero{
  text-align:center;
  padding:12px 24px 40px;
}
.hero-badge{
  display:inline-flex;align-items:center;gap:6px;
  background:rgba(201,168,76,0.08);
  border:0.5px solid rgba(201,168,76,0.2);
  color:rgba(201,168,76,0.8);
  font-size:10px;letter-spacing:0.25em;text-transform:uppercase;
  padding:5px 14px;border-radius:30px;margin-bottom:18px;
}
.badge-dot{width:4px;height:4px;border-radius:50%;background:var(--gold);animation:dotPulse 2s ease-in-out infinite;}
@keyframes dotPulse{0%,100%{opacity:0.4;transform:scale(1);}50%{opacity:1;transform:scale(1.4);}}

.hero h1{
  font-family:'Playfair Display',serif;
  font-size:52px;font-weight:700;line-height:1.05;
  margin-bottom:10px;
}
.h1-line1{display:block;color:var(--cream);}
.h1-line2{display:block;color:var(--gold);font-style:italic;}
.hero-sub{
  font-size:12px;font-weight:300;color:var(--muted);
  letter-spacing:0.18em;text-transform:uppercase;margin-bottom:28px;
}
.hero-btns{display:flex;gap:10px;justify-content:center;flex-wrap:wrap;}
.hbtn{
  display:flex;align-items:center;gap:7px;
  padding:12px 24px;border-radius:12px;
  font-size:13px;font-weight:500;cursor:pointer;
  border:none;font-family:'Inter',sans-serif;
  transition:transform 0.2s,opacity 0.2s;
  text-decoration:none;
}
.hbtn:hover{transform:translateY(-2px);opacity:0.9;}
.hbtn-p{background:var(--or);color:var(--cream);}
.hbtn-o{background:rgba(255,255,255,0.05);color:var(--muted);border:0.5px solid rgba(253,246,236,0.15);}

/* === DIVIDER === */
.div-line{
  display:flex;align-items:center;gap:12px;
  padding:0 32px;margin:4px 0;
}
.dl{flex:1;height:0.5px;background:rgba(201,168,76,0.12);}
.di{color:var(--gold);font-size:13px;opacity:0.5;}

/* === SECTIONS === */
.section{padding:36px 24px;position:relative;z-index:10;}
.sec-eyebrow{font-size:10px;letter-spacing:0.25em;text-transform:uppercase;color:var(--gold);font-weight:500;margin-bottom:8px;opacity:0.8;}
.sec-title{font-family:'Playfair Display',serif;font-size:28px;font-weight:700;color:var(--cream);line-height:1.2;margin-bottom:18px;}

/* === ABOUT CARDS === */
.about-grid{display:grid;gap:12px;}
.acard{
  background:rgba(255,255,255,0.035);
  border:0.5px solid rgba(201,168,76,0.1);
  border-radius:16px;padding:18px;
  position:relative;overflow:hidden;
  transition:border-color 0.25s,background 0.25s,transform 0.25s;
}
.acard::before{
  content:'';position:absolute;top:0;left:0;right:0;height:0.5px;
  background:linear-gradient(90deg,transparent,rgba(201,168,76,0.25),transparent);
}
.acard:hover{border-color:rgba(201,168,76,0.25);background:rgba(255,255,255,0.055);transform:translateY(-2px);}
.acard-icon{
  width:40px;height:40px;border-radius:11px;
  background:rgba(200,98,10,0.12);border:0.5px solid rgba(200,98,10,0.2);
  display:flex;align-items:center;justify-content:center;
  font-size:18px;color:var(--or2);margin-bottom:12px;
}
.acard-title{font-family:'Playfair Display',serif;font-size:16px;font-weight:700;color:var(--cream);margin-bottom:5px;}
.acard-text{font-size:12px;font-weight:300;color:var(--muted);line-height:1.7;}

/* === LOCATION CARDS === */
.loc-card{
  background:rgba(255,255,255,0.035);
  border:0.5px solid rgba(201,168,76,0.1);
  border-radius:16px;padding:18px;
  margin-bottom:12px;
  position:relative;overflow:hidden;
  transition:border-color 0.25s,transform 0.25s;
}
.loc-card::before{
  content:'';position:absolute;top:0;left:0;right:0;height:0.5px;
  background:linear-gradient(90deg,transparent,rgba(201,168,76,0.25),transparent);
}
.loc-card:hover{border-color:rgba(201,168,76,0.25);transform:translateY(-1px);}
.loc-head{display:flex;align-items:flex-start;gap:12px;margin-bottom:14px;}
.loc-badge{
  width:40px;height:40px;border-radius:11px;flex-shrink:0;
  background:rgba(200,98,10,0.12);border:0.5px solid rgba(200,98,10,0.18);
  display:flex;align-items:center;justify-content:center;
  font-size:18px;color:var(--or2);
}
.loc-name{font-family:'Playfair Display',serif;font-size:16px;font-weight:700;color:var(--cream);}
.loc-addr{font-size:11px;color:var(--faint);margin-top:2px;}
.loc-meta{display:flex;gap:18px;margin-bottom:14px;}
.loc-m{display:flex;align-items:center;gap:5px;font-size:11px;color:var(--muted);}
.loc-m i{font-size:13px;color:var(--gold);opacity:0.65;}
.loc-tags{display:flex;gap:7px;flex-wrap:wrap;}
.tag{
  padding:6px 12px;border-radius:9px;
  border:0.5px solid rgba(201,168,76,0.15);
  font-size:11px;font-weight:500;cursor:pointer;
  background:rgba(255,255,255,0.02);color:var(--muted);
  transition:all 0.18s;display:flex;align-items:center;gap:4px;
}
.tag:hover{background:rgba(201,168,76,0.1);border-color:rgba(201,168,76,0.35);color:var(--gold);}
.tag i{font-size:12px;}

/* === CALL SECTION === */
.call-card{
  background:rgba(200,98,10,0.09);
  border:0.5px solid rgba(200,98,10,0.22);
  border-radius:18px;padding:24px;
  text-align:center;position:relative;overflow:hidden;
  margin-bottom:12px;
}
.call-card::before{
  content:'';position:absolute;top:0;left:0;right:0;height:0.5px;
  background:linear-gradient(90deg,transparent,rgba(232,120,15,0.45),transparent);
}
.call-ring1,.call-ring2{
  position:absolute;border-radius:50%;
  pointer-events:none;
}
.call-ring1{
  width:200px;height:200px;top:-80px;right:-60px;
  border:50px solid rgba(200,98,10,0.05);
  animation:ringPulse 4s ease-in-out infinite;
}
.call-ring2{
  width:140px;height:140px;bottom:-50px;left:-30px;
  border:35px solid rgba(201,168,76,0.04);
  animation:ringPulse 4s ease-in-out infinite 1.5s;
}
@keyframes ringPulse{0%,100%{transform:scale(1);opacity:0.6;}50%{transform:scale(1.08);opacity:1;}}
.call-lbl{font-size:10px;letter-spacing:0.22em;text-transform:uppercase;color:var(--faint);margin-bottom:8px;position:relative;z-index:2;}
.call-num{
  font-family:'Playfair Display',serif;
  font-size:32px;font-weight:700;color:var(--cream);
  margin-bottom:18px;letter-spacing:0.06em;position:relative;z-index:2;
}
.call-btn{
  display:inline-flex;align-items:center;gap:7px;
  background:var(--or);color:var(--cream);
  padding:12px 28px;border-radius:12px;
  font-size:13px;font-weight:600;border:none;cursor:pointer;
  font-family:'Inter',sans-serif;
  transition:background 0.2s,transform 0.2s;
  position:relative;z-index:2;
}
.call-btn:hover{background:var(--or2);transform:translateY(-1px);}
.call-hours{font-size:11px;color:rgba(253,246,236,0.22);margin-top:10px;position:relative;z-index:2;}

/* === SOCIAL ROW === */
.social-row{display:flex;gap:8px;margin-bottom:14px;}
.sbtn{
  flex:1;display:flex;align-items:center;justify-content:center;gap:6px;
  padding:11px 8px;border-radius:11px;font-size:12px;font-weight:500;
  cursor:pointer;font-family:'Inter',sans-serif;transition:all 0.18s;border:0.5px solid;
}
.sbtn-wa{background:rgba(37,211,102,0.06);border-color:rgba(37,211,102,0.18);color:rgba(37,211,102,0.7);}
.sbtn-wa:hover{background:rgba(37,211,102,0.14);border-color:rgba(37,211,102,0.4);color:#25D366;}
.sbtn-tg{background:rgba(0,136,204,0.06);border-color:rgba(0,136,204,0.18);color:rgba(0,136,204,0.7);}
.sbtn-tg:hover{background:rgba(0,136,204,0.14);border-color:rgba(0,136,204,0.4);color:#0088cc;}
.sbtn-ig{background:rgba(225,48,108,0.06);border-color:rgba(225,48,108,0.18);color:rgba(225,48,108,0.7);}
.sbtn-ig:hover{background:rgba(225,48,108,0.14);border-color:rgba(225,48,108,0.4);color:#E1306C;}
.sbtn i{font-size:15px;}

/* === MAP VISUAL === */
.map-vis{
  margin-top:14px;
  height:150px;
  border-radius:14px;
  border:0.5px solid rgba(201,168,76,0.12);
  background:rgba(255,255,255,0.02);
  position:relative;overflow:hidden;cursor:pointer;
  transition:border-color 0.25s;
}
.map-vis:hover{border-color:rgba(201,168,76,0.3);}
.map-pin-center{
  position:absolute;top:50%;left:50%;
  transform:translate(-50%,-60%);
  font-size:28px;
  animation:pinBounce 2.5s ease-in-out infinite;
  z-index:3;
}
@keyframes pinBounce{0%,100%{transform:translate(-50%,-60%);}50%{transform:translate(-50%,-70%);}}
.map-city{
  position:absolute;bottom:14px;left:50%;
  transform:translateX(-50%);
  font-size:11px;color:rgba(253,246,236,0.35);
  letter-spacing:0.12em;text-transform:uppercase;z-index:3;
}
.map-hint-txt{
  position:absolute;bottom:2px;left:50%;
  transform:translateX(-50%);
  font-size:9px;color:rgba(201,168,76,0.35);
  letter-spacing:0.1em;z-index:3;
}

/* === FOOTER === */
.footer{
  border-top:0.5px solid rgba(201,168,76,0.08);
  padding:28px 24px 24px;
  position:relative;z-index:10;
}
.f-logo{
  font-family:'Playfair Display',serif;
  font-size:22px;font-weight:700;color:var(--gold);
  letter-spacing:0.1em;margin-bottom:4px;
}
.f-tag{font-size:11px;color:rgba(253,246,236,0.22);line-height:1.6;margin-bottom:14px;}
.f-social{display:flex;gap:8px;margin-bottom:22px;}
.f-soc-a{
  width:32px;height:32px;border-radius:9px;
  background:rgba(255,255,255,0.03);
  border:0.5px solid rgba(201,168,76,0.1);
  display:flex;align-items:center;justify-content:center;
  color:rgba(253,246,236,0.25);font-size:14px;
  cursor:pointer;transition:all 0.18s;
}
.f-soc-a:hover{background:rgba(201,168,76,0.08);border-color:rgba(201,168,76,0.28);color:var(--gold);}
.f-links{display:flex;gap:20px;flex-wrap:wrap;margin-bottom:18px;}
.f-link{font-size:12px;color:rgba(253,246,236,0.3);cursor:pointer;transition:color 0.18s;}
.f-link:hover{color:var(--gold);}
.f-copy{font-size:10px;color:rgba(253,246,236,0.15);letter-spacing:0.06em;}

/* === FADE ANIMATIONS === */
.fade-in{
  opacity:0;transform:translateY(22px);
  transition:opacity 0.6s ease,transform 0.6s cubic-bezier(.22,1,.36,1);
}
.fade-in.show{opacity:1;transform:translateY(0);}

/* === TYPING INDICATOR === */
.typing{display:flex;align-items:center;gap:4px;margin-top:8px;justify-content:center;}
.tdot{
  width:4px;height:4px;border-radius:50%;background:var(--gold);
  animation:tdot 1.4s ease-in-out infinite;
}
.tdot:nth-child(2){animation-delay:.2s;}
.tdot:nth-child(3){animation-delay:.4s;}
@keyframes tdot{0%,80%,100%{transform:scale(0.6);opacity:0.3;}40%{transform:scale(1.1);opacity:0.8;}}

/* scrollbar hidden */
.bb-wrap::-webkit-scrollbar{display:none;}
</style>

<div class="bb-wrap" id="bbwrap">
{{-- <h2 class="sr-only">Cafe BonBon — Buxorodagi premium evropa kafesi. Menyuni ko'ring, joylashuvlarni toping, aloqa ma'lumotlarini oling.</h2> --}}

<!-- Aurora blobs -->
<div class="aurora">
  <div class="blob" style="width:400px;height:400px;top:-100px;right:-100px;background:radial-gradient(circle,rgba(200,98,10,0.09),transparent 70%);animation-duration:14s;"></div>
  <div class="blob" style="width:300px;height:300px;top:350px;left:-80px;background:radial-gradient(circle,rgba(201,168,76,0.06),transparent 70%);animation-duration:18s;animation-delay:3s;"></div>
  <div class="blob" style="width:250px;height:250px;top:800px;right:-50px;background:radial-gradient(circle,rgba(200,98,10,0.07),transparent 70%);animation-duration:16s;animation-delay:7s;"></div>
  <div class="blob" style="width:200px;height:200px;top:1200px;left:50px;background:radial-gradient(circle,rgba(201,168,76,0.05),transparent 70%);animation-duration:22s;animation-delay:5s;"></div>
</div>

<!-- Particles container -->
<div class="particles" id="pcontainer"></div>

<!-- Canvas for wave effect -->
<canvas id="bb-canvas"></canvas>

<div class="content">

<!-- ICON ORBIT SECTION -->
<div class="icon-section fade-in" id="icoSection">
  <div class="icon-ring">
    <!-- Orbit rings -->
    <div class="orbit orbit1"></div>
    <div class="orbit orbit2"></div>
    <div class="orbit orbit3"></div>

    <!-- Center logo -->
    <div class="center-logo">BB</div>

    <!-- Planet icons: positioned by JS -->
    <a class="planet" id="p0" href="https://yandex.uz/maps" target="_blank" style="--angle:0deg">
      <div class="planet-inner">
        <svg width="18" height="18" viewBox="0 0 26 26" fill="none"><circle cx="13" cy="13" r="12" fill="#FC3F1D"/><path d="M15.2 6H12.5C10.1 6 8.5 7.4 8.5 9.5C8.5 11.3 9.5 12.4 11.3 13.6L8 20H10.5L13.6 14.1H14.6V20H16.9V6H15.2ZM14.6 12.1H13.4C11.9 12.1 11.0 11.2 11.0 9.6C11.0 8.0 11.9 7.2 13.5 7.2H14.6V12.1Z" fill="white"/></svg>
        <span class="planet-lbl">Yandex</span>
      </div>
    </a>
    <a class="planet" id="p1" href="https://maps.google.com" target="_blank">
      <div class="planet-inner">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><path d="M12 2C8.13 2 5 5.13 5 9c0 5.25 7 13 7 13s7-7.75 7-13c0-3.87-3.13-7-7-7zm0 9.5c-1.38 0-2.5-1.12-2.5-2.5s1.12-2.5 2.5-2.5 2.5 1.12 2.5 2.5-1.12 2.5-2.5 2.5z" fill="#4285F4"/></svg>
        <span class="planet-lbl">Google</span>
      </div>
    </a>
    <a class="planet" id="p2" href="https://2gis.uz" target="_blank">
      <div class="planet-inner">
        <svg width="18" height="18" viewBox="0 0 24 24" fill="none"><rect width="24" height="24" rx="5" fill="#1C7ECF"/><text x="12" y="15.5" text-anchor="middle" font-family="Arial" font-weight="900" font-size="7.5" fill="white">2GIS</text></svg>
        <span class="planet-lbl">2GIS</span>
      </div>
    </a>
    <a class="planet" id="p3" href="https://tripadvisor.com" target="_blank">
      <div class="planet-inner">
        <svg width="18" height="18" viewBox="0 0 26 26" fill="none"><circle cx="13" cy="13" r="12" fill="#00AA6C"/><circle cx="9" cy="13" r="3" fill="white"/><circle cx="17" cy="13" r="3" fill="white"/><circle cx="9" cy="13" r="1.2" fill="#00AA6C"/><circle cx="17" cy="13" r="1.2" fill="#00AA6C"/><path d="M5 10.5C6.5 8.5 9 7.5 9 7.5H17C17 7.5 19.5 8.5 21 10.5" stroke="white" stroke-width="1.5" fill="none"/></svg>
        <span class="planet-lbl">TripAdvisor</span>
      </div>
    </a>
    <div class="planet" id="p4">
      <div class="planet-inner">
        <i class="ti ti-layout-grid" aria-hidden="true"></i>
        <span class="planet-lbl">Menu</span>
      </div>
    </div>
    <div class="planet" id="p5">
      <div class="planet-inner">
        <i class="ti ti-star" aria-hidden="true"></i>
        <span class="planet-lbl">Reviews</span>
      </div>
    </div>
  </div>
</div>

<!-- HERO -->
<section class="hero fade-in" id="heroSec">
  <div class="hero-badge">
    <div class="badge-dot"></div>
    Bukhara · Est. 2019
  </div>
  <h1>
    <span class="h1-line1">Cafe</span>
    <span class="h1-line2">BonBon</span>
  </h1>
  <p class="hero-sub">Premium European experience in Bukhara</p>
  <div class="hero-btns">
    <button class="hbtn hbtn-p"><i class="ti ti-book-2" aria-hidden="true"></i>Explore Menu</button>
    <button class="hbtn hbtn-o"><i class="ti ti-map-pin" aria-hidden="true"></i>Find Location</button>
  </div>
  <div class="typing" style="margin-top:16px">
    <div class="tdot"></div><div class="tdot"></div><div class="tdot"></div>
  </div>
</section>

<!-- DIVIDER -->
<div class="div-line fade-in"><div class="dl"></div><span class="di"><i class="ti ti-coffee" aria-hidden="true"></i></span><div class="dl"></div></div>

<!-- ABOUT -->
<section class="section fade-in" id="aboutSec">
  <div class="sec-eyebrow">Our Story</div>
  <div class="sec-title">About BonBon</div>
  <div class="about-grid">
    <div class="acard fade-in">
      <div class="acard-icon"><i class="ti ti-building-store" aria-hidden="true"></i></div>
      <div class="acard-title">Who we are</div>
      <p class="acard-text">BonBon — Buxoroning qalbida tug'ilgan zamonaviy evropa uslubidagi kafe. 2019-yildan beri biz ajoyib qahva, yangi pishirilgan shirinliklar va iliq muhitni bir joyda birlashtirdik.</p>
    </div>
    <div class="acard fade-in">
      <div class="acard-icon"><i class="ti ti-leaf" aria-hidden="true"></i></div>
      <div class="acard-title">Falsafamiz</div>
      <p class="acard-text">Har bir chashka diqqat bilan tanlangan, qovurilgan va tayyorlangan. Har bir desert yangi tayyorlanadi. Sekin ertalab va sifatli detallar hayotni boyitadi deb ishonimiz.</p>
    </div>
    <div class="acard fade-in">
      <div class="acard-icon"><i class="ti ti-award" aria-hidden="true"></i></div>
      <div class="acard-title">Tan olinish</div>
      <p class="acard-text">TripAdvisor, Yandex Maps va Google'da Buxorodagi eng yaxshi kafeler orasida. Mehmonlarimiz bu joyni o'zlarining ikkinchi uyi deb ataydi.</p>
    </div>
  </div>
</section>

<!-- DIVIDER -->
<div class="div-line fade-in"><div class="dl"></div><span class="di"><i class="ti ti-map-pin" aria-hidden="true"></i></span><div class="dl"></div></div>

<!-- LOCATIONS -->
<section class="section fade-in" id="locSec">
  <div class="sec-eyebrow">Find Us</div>
  <div class="sec-title">Our Locations</div>

  <div class="loc-card fade-in">
    <div class="loc-head">
      <div class="loc-badge"><i class="ti ti-building-store" aria-hidden="true"></i></div>
      <div>
        <div class="loc-name">BonBon Central</div>
        <div class="loc-addr">12 Lyabi Hauz Square, Old City, Bukhara</div>
      </div>
    </div>
    <div class="loc-meta">
      <div class="loc-m"><i class="ti ti-clock" aria-hidden="true"></i><span>09:00 – 23:00</span></div>
      <div class="loc-m"><i class="ti ti-phone" aria-hidden="true"></i><span>+998 65 221 0011</span></div>
    </div>
    <div class="loc-tags">
      <div class="tag"><i class="ti ti-brand-google" aria-hidden="true"></i>Google</div>
      <div class="tag"><i class="ti ti-map" aria-hidden="true"></i>Yandex</div>
      <div class="tag"><i class="ti ti-map-2" aria-hidden="true"></i>2GIS</div>
      <div class="tag"><i class="ti ti-star" aria-hidden="true"></i>Trip</div>
    </div>
  </div>

  <div class="loc-card fade-in" style="border-color:rgba(201,168,76,0.16)">
    <div class="loc-head">
      <div class="loc-badge" style="background:rgba(201,168,76,0.08);border-color:rgba(201,168,76,0.15);color:var(--gold)"><i class="ti ti-building-store" aria-hidden="true"></i></div>
      <div>
        <div class="loc-name">BonBon Ark</div>
        <div class="loc-addr">7 Ark Fortress Road, Bukhara</div>
      </div>
    </div>
    <div class="loc-meta">
      <div class="loc-m"><i class="ti ti-clock" aria-hidden="true"></i><span>08:00 – 22:00</span></div>
      <div class="loc-m"><i class="ti ti-phone" aria-hidden="true"></i><span>+998 65 221 0022</span></div>
    </div>
    <div class="loc-tags">
      <div class="tag"><i class="ti ti-brand-google" aria-hidden="true"></i>Google</div>
      <div class="tag"><i class="ti ti-map" aria-hidden="true"></i>Yandex</div>
      <div class="tag"><i class="ti ti-map-2" aria-hidden="true"></i>2GIS</div>
      <div class="tag"><i class="ti ti-star" aria-hidden="true"></i>Trip</div>
    </div>
  </div>

  <div class="map-vis fade-in">
    <svg style="position:absolute;inset:0;width:100%;height:100%" viewBox="0 0 400 150" preserveAspectRatio="none" aria-hidden="true">
      <line x1="0" y1="30" x2="400" y2="30" stroke="rgba(201,168,76,0.06)" stroke-width="0.5"/>
      <line x1="0" y1="60" x2="400" y2="60" stroke="rgba(201,168,76,0.06)" stroke-width="0.5"/>
      <line x1="0" y1="90" x2="400" y2="90" stroke="rgba(201,168,76,0.06)" stroke-width="0.5"/>
      <line x1="0" y1="120" x2="400" y2="120" stroke="rgba(201,168,76,0.06)" stroke-width="0.5"/>
      <line x1="80" y1="0" x2="80" y2="150" stroke="rgba(201,168,76,0.05)" stroke-width="0.5"/>
      <line x1="160" y1="0" x2="160" y2="150" stroke="rgba(201,168,76,0.05)" stroke-width="0.5"/>
      <line x1="240" y1="0" x2="240" y2="150" stroke="rgba(201,168,76,0.05)" stroke-width="0.5"/>
      <line x1="320" y1="0" x2="320" y2="150" stroke="rgba(201,168,76,0.05)" stroke-width="0.5"/>
      <path d="M 20 130 Q 80 90 130 100 Q 180 110 210 70 Q 250 40 290 65 Q 330 90 380 55" stroke="rgba(201,168,76,0.1)" stroke-width="1" fill="none"/>
      <circle cx="200" cy="75" r="6" fill="rgba(200,98,10,0.4)" stroke="rgba(200,98,10,0.6)" stroke-width="1"/>
      <circle cx="200" cy="75" r="14" fill="rgba(200,98,10,0.08)" stroke="rgba(200,98,10,0.15)" stroke-width="0.5"/>
    </svg>
    <div class="map-pin-center">📍</div>
    <div class="map-city">Bukhara, Uzbekistan</div>
    <div class="map-hint-txt">Tap to open map</div>
  </div>
</section>

<!-- DIVIDER -->
<div class="div-line fade-in"><div class="dl"></div><span class="di"><i class="ti ti-phone" aria-hidden="true"></i></span><div class="dl"></div></div>

<!-- CALL CENTER -->
<section class="section fade-in" id="callSec">
  <div class="sec-eyebrow">Get in Touch</div>
  <div class="sec-title">Call Center</div>
  <div class="call-card">
    <div class="call-ring1"></div>
    <div class="call-ring2"></div>
    <div class="call-lbl">We're always here for you</div>
    <div class="call-num">+998 65 221 00 00</div>
    <button class="call-btn"><i class="ti ti-phone" aria-hidden="true"></i>Call Now</button>
    <div class="call-hours">Open 09:00 – 23:00 · Every day</div>
  </div>
  <div class="social-row">
    <button class="sbtn sbtn-wa"><i class="ti ti-brand-whatsapp" aria-hidden="true"></i>WhatsApp</button>
    <button class="sbtn sbtn-tg"><i class="ti ti-brand-telegram" aria-hidden="true"></i>Telegram</button>
    <button class="sbtn sbtn-ig"><i class="ti ti-brand-instagram" aria-hidden="true"></i>Instagram</button>
  </div>
</section>

<!-- FOOTER -->
<footer class="footer fade-in">
  <div class="f-logo">BONBON</div>
  <p class="f-tag">European café experience<br>in the heart of Bukhara.</p>
  <div class="f-social">
    <div class="f-soc-a"><i class="ti ti-brand-instagram" aria-hidden="true"></i></div>
    <div class="f-soc-a"><i class="ti ti-brand-telegram" aria-hidden="true"></i></div>
    <div class="f-soc-a"><i class="ti ti-star" aria-hidden="true"></i></div>
    <div class="f-soc-a"><i class="ti ti-map-2" aria-hidden="true"></i></div>
  </div>
  <div class="f-links">
    <span class="f-link">About</span>
    <span class="f-link">Locations</span>
    <span class="f-link">Contact</span>
    <span class="f-link">Menu</span>
    <span class="f-link">Reserve</span>
  </div>
  <div class="f-copy">© 2025 Cafe BonBon · Bukhara</div>
</footer>

</div><!-- end content -->
</div><!-- end bbwrap -->

<script>
// === PARTICLES ===
const pCont = document.getElementById('pcontainer');
const ptColors = [
  'rgba(201,168,76,',
  'rgba(200,98,10,',
  'rgba(253,246,236,'
];
for(let i=0;i<55;i++){
  const pt = document.createElement('div');
  pt.className='pt';
  const size = 1.2 + Math.random()*3.5;
  const col = ptColors[Math.floor(Math.random()*ptColors.length)];
  const alpha = 0.08 + Math.random()*0.2;
  const dur = 8 + Math.random()*16;
  const delay = Math.random()*12;
  const drift = (Math.random()-0.5)*80;
  const left = Math.random()*100;
  const isCircle = Math.random()>0.5;
  pt.style.cssText = `
    width:${size}px;height:${size}px;
    left:${left}%;bottom:-10px;
    background:${isCircle ? col+alpha+')' : 'transparent'};
    border:${isCircle ? 'none' : `0.5px solid ${col+(alpha*0.5)+')'}`};
    border-radius:50%;
    --drift:${drift}px;
    animation-duration:${dur}s;
    animation-delay:-${delay}s;
  `;
  pCont.appendChild(pt);
}

// === CANVAS WAVE ===
const canvas = document.getElementById('bb-canvas');
const ctx = canvas.getContext('2d');
let W,H,t=0;

function resizeCanvas(){
  W=canvas.width=window.innerWidth;
  H=canvas.height=Math.max(document.documentElement.scrollHeight,window.innerHeight);
}
resizeCanvas();
window.addEventListener('resize',resizeCanvas);
setTimeout(resizeCanvas,300);

function drawWave(){
  ctx.clearRect(0,0,W,H);
  const waves=[
    {y:H*0.2,amp:18,freq:0.007,spd:0.018,alpha:0.025,color:'rgba(200,98,10,'},
    {y:H*0.42,amp:12,freq:0.009,spd:-0.014,alpha:0.018,color:'rgba(201,168,76,'},
    {y:H*0.65,amp:22,freq:0.005,spd:0.012,alpha:0.02,color:'rgba(200,98,10,'},
    {y:H*0.82,amp:14,freq:0.008,spd:-0.02,alpha:0.015,color:'rgba(201,168,76,'},
  ];
  waves.forEach(w=>{
    ctx.beginPath();
    ctx.moveTo(0,w.y);
    for(let x=0;x<=W;x+=4){
      const y=w.y+Math.sin(x*w.freq+t*w.spd*60)*w.amp;
      ctx.lineTo(x,y);
    }
    ctx.strokeStyle=w.color+w.alpha+')';
    ctx.lineWidth=1;
    ctx.stroke();
  });
  t+=0.016;
  requestAnimationFrame(drawWave);
}
drawWave();

// === ORBIT PLANETS ===
function placePlanets(){
  const ring = document.querySelector('.icon-ring');
  const rect = ring.getBoundingClientRect();
  const cx = 140, cy = 140; // relative to icon-ring
  const planets = document.querySelectorAll('.planet');
  const n = planets.length;
  const radii = [68,68,110,110,110,68]; // alternating inner/outer
  const angles = [
    -Math.PI/2,         // top
    Math.PI/6,          // right-bottom
    -Math.PI*5/6,       // left-top
    -Math.PI/6,         // right-top
    Math.PI*5/6,        // left-bottom
    Math.PI/2,          // bottom
  ];
  planets.forEach((p,i)=>{
    const r = radii[i]||100;
    const a = angles[i]||0;
    const x = cx + Math.cos(a)*r - 23;
    const y = cy + Math.sin(a)*r - 23;
    p.style.transform = `translate(${x}px, ${y}px)`;
    p.style.position='absolute';
    p.style.top='0';
    p.style.left='0';
  });
}
setTimeout(placePlanets, 50);

// === SUBTLE PLANET FLOAT ===
(function animatePlanets(){
  const planets = document.querySelectorAll('.planet-inner');
  planets.forEach((p,i)=>{
    const phase=i*(Math.PI*2/planets.length);
    let raf;
    function tick(time){
      const dy=Math.sin(time*0.001+phase)*4;
      p.style.transform=`translateY(${dy}px)`;
      raf=requestAnimationFrame(tick);
    }
    requestAnimationFrame(tick);
  });
})();

// === SCROLL FADE IN ===
const observer = new IntersectionObserver(entries=>{
  entries.forEach(e=>{
    if(e.isIntersecting){e.target.classList.add('show');}
  });
},{threshold:0.1});
document.querySelectorAll('.fade-in').forEach(el=>observer.observe(el));
setTimeout(()=>{
  document.querySelectorAll('.fade-in').forEach(el=>{
    if(el.getBoundingClientRect().top<window.innerHeight)
      el.classList.add('show');
  });
},80);
</script>
