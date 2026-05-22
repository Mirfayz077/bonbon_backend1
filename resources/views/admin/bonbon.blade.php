<!DOCTYPE html>
<html lang="uz">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Cafe BonBon — Bukhara</title>
<link rel="preconnect" href="https://fonts.googleapis.com">
<link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,700;1,400&family=Inter:wght@300;400;500;600&display=swap" rel="stylesheet">
<style>
*{margin:0;padding:0;box-sizing:border-box;}
:root{
  --bg:#2a1000;
  --or:#F07800;
  --or2:#FF8C1A;
  --or3:#D06000;
  --gold:#FFB347;
  --cream:#FFF5E6;
  --muted:rgba(255,245,230,0.65);
  --faint:rgba(255,245,230,0.28);
  --max:1100px;
}
html,body{
  background:var(--bg);color:var(--cream);
  font-family:"Inter",sans-serif;overflow-x:hidden;
  scrollbar-width:thin;scrollbar-color:rgba(240,120,0,0.25) transparent;
}
body::-webkit-scrollbar{width:4px;}
body::-webkit-scrollbar-thumb{background:rgba(240,120,0,0.25);border-radius:4px;}

#bb-canvas{position:fixed;top:0;left:0;width:100%;height:100%;pointer-events:none;z-index:0;}
.aurora{position:fixed;inset:0;z-index:0;pointer-events:none;}
.blob{position:absolute;border-radius:50%;filter:blur(110px);animation:blobFloat ease-in-out infinite;}
@keyframes blobFloat{0%,100%{transform:translate(0,0) scale(1);}33%{transform:translate(30px,-40px) scale(1.1);}66%{transform:translate(-20px,20px) scale(0.95);}}
.particles{position:fixed;inset:0;pointer-events:none;z-index:1;overflow:hidden;}
.pt{position:absolute;border-radius:50%;animation:rise linear infinite;pointer-events:none;}
@keyframes rise{0%{transform:translateY(110vh) translateX(0);opacity:0;}10%{opacity:1;}90%{opacity:0.5;}100%{transform:translateY(-10vh) translateX(var(--drift));opacity:0;}}

.bb-wrap{position:relative;z-index:10;min-height:100vh;}
.container{max-width:var(--max);margin:0 auto;padding:0 20px;}

/* NAV */
nav{position:sticky;top:0;z-index:100;background:rgba(42,16,0,0.88);backdrop-filter:blur(22px);border-bottom:0.5px solid rgba(240,120,0,0.18);}
.nav-inner{max-width:var(--max);margin:0 auto;padding:14px 20px;display:flex;align-items:center;justify-content:space-between;}
.nav-logo{font-family:"Playfair Display",serif;font-size:22px;font-weight:700;color:var(--gold);letter-spacing:0.12em;}
.nav-links{display:flex;gap:24px;align-items:center;}
.nav-link{font-size:13px;color:var(--muted);cursor:pointer;text-decoration:none;transition:color 0.2s;}
.nav-link:hover{color:var(--gold);}
.nav-cta{padding:8px 18px;border-radius:10px;background:var(--or);color:var(--cream);font-size:13px;font-weight:600;border:none;cursor:pointer;transition:background 0.2s,transform 0.2s;}
.nav-cta:hover{background:var(--or2);transform:translateY(-1px);}
.nav-ham{display:none;width:38px;height:38px;border-radius:10px;background:rgba(255,255,255,0.04);border:0.5px solid rgba(240,120,0,0.22);align-items:center;justify-content:center;cursor:pointer;color:var(--muted);font-size:20px;transition:all 0.2s;}
.nav-ham:hover{border-color:rgba(240,120,0,0.5);color:var(--gold);}
.mobile-menu{display:none;flex-direction:column;background:rgba(42,16,0,0.97);border-bottom:0.5px solid rgba(240,120,0,0.18);padding:16px 20px 20px;gap:14px;}
.mobile-menu.open{display:flex;}
.mobile-menu .nav-link{font-size:15px;}
.mob-cta{padding:12px;border-radius:11px;background:var(--or);color:var(--cream);font-size:14px;font-weight:600;border:none;cursor:pointer;font-family:"Inter",sans-serif;text-align:center;}

/* ORBIT HERO */
.orbit-hero{display:flex;flex-direction:column;align-items:center;padding:48px 20px 20px;}
.hero-badge{display:inline-flex;align-items:center;gap:7px;background:rgba(240,120,0,0.12);border:0.5px solid rgba(240,120,0,0.32);color:rgba(255,200,90,0.95);font-size:10px;letter-spacing:0.28em;text-transform:uppercase;padding:6px 16px;border-radius:30px;margin-bottom:32px;}
.badge-dot{width:5px;height:5px;border-radius:50%;background:var(--gold);animation:dotPulse 2s ease-in-out infinite;}
@keyframes dotPulse{0%,100%{opacity:0.4;transform:scale(1);}50%{opacity:1;transform:scale(1.5);}}

/* RING WRAP */
.ring-wrap{position:relative;width:360px;height:360px;}
@media(min-width:600px){.ring-wrap{width:480px;height:480px;}}
@media(min-width:900px){.ring-wrap{width:580px;height:580px;}}

/* CENTER LOGO */
.center-logo{
  position:absolute;top:50%;left:50%;transform:translate(-50%,-50%);
  width:145px;height:145px;border-radius:50%;
  overflow:hidden;
  border:none;
  box-shadow:0 0 0 3px rgba(240,120,0,0.55),0 0 0 8px rgba(240,120,0,0.12),0 0 50px rgba(240,120,0,0.4),0 0 100px rgba(240,120,0,0.18);
  animation:logoPulse 4s ease-in-out infinite;z-index:5;
  background:#F07800;
}
.center-logo img{width:100%;height:100%;object-fit:cover;display:block;}
@media(min-width:600px){.center-logo{width:175px;height:175px;}}
@media(min-width:900px){.center-logo{width:205px;height:205px;}}
@keyframes logoPulse{
  0%,100%{box-shadow:0 0 0 3px rgba(240,120,0,0.5),0 0 0 8px rgba(240,120,0,0.1),0 0 50px rgba(240,120,0,0.35),0 0 90px rgba(240,120,0,0.12);}
  50%{box-shadow:0 0 0 4px rgba(240,120,0,0.75),0 0 0 12px rgba(240,120,0,0.18),0 0 80px rgba(240,120,0,0.55),0 0 150px rgba(240,120,0,0.25);}
}

/* ORBITS */
.orbit{position:absolute;top:50%;left:50%;border-radius:50%;border:0.5px solid rgba(240,120,0,0.14);transform:translate(-50%,-50%);animation:spinOrbit linear infinite;}
.orbit1{width:205px;height:205px;animation-duration:14s;}
.orbit2{width:315px;height:315px;animation-duration:22s;animation-direction:reverse;border-color:rgba(255,160,64,0.1);}
.orbit3{width:360px;height:360px;animation-duration:34s;border-color:rgba(240,120,0,0.07);}
@media(min-width:600px){.orbit1{width:270px;height:270px;}.orbit2{width:405px;height:405px;}.orbit3{width:480px;height:480px;}}
@media(min-width:900px){.orbit1{width:325px;height:325px;}.orbit2{width:490px;height:490px;}.orbit3{width:580px;height:580px;}}
@keyframes spinOrbit{from{transform:translate(-50%,-50%) rotate(0deg);}to{transform:translate(-50%,-50%) rotate(360deg);}}

/* ===== PLANET CARDS ===== */
.planet{position:absolute;top:0;left:0;}

.planet-inner{
  width:86px;height:86px;border-radius:22px;
  display:flex;flex-direction:column;align-items:center;justify-content:center;
  gap:6px;cursor:pointer;text-decoration:none;
  transition:transform 0.28s cubic-bezier(.34,1.56,.64,1),box-shadow 0.22s;
  position:relative;overflow:hidden;
  background:linear-gradient(145deg,#F07800,#D06000);
  box-shadow:0 6px 24px rgba(208,96,0,0.5),0 2px 8px rgba(0,0,0,0.4);
}
.planet-inner::before{
  content:"";position:absolute;inset:0;
  background:linear-gradient(135deg,rgba(255,255,255,0.18) 0%,transparent 60%);
  border-radius:inherit;pointer-events:none;
}
.planet-inner:hover{transform:scale(1.12) translateY(-4px);box-shadow:0 12px 36px rgba(208,96,0,0.65),0 4px 12px rgba(0,0,0,0.4);}
.planet-inner img,.planet-inner svg{width:36px;height:36px;object-fit:contain;position:relative;z-index:1;}
.planet-lbl{font-size:9.5px;font-weight:600;letter-spacing:0.04em;color:rgba(255,255,255,0.88);position:relative;z-index:1;text-shadow:0 1px 4px rgba(0,0,0,0.3);}

/* Google — white card */
.planet-google .planet-inner{
  background:linear-gradient(145deg,#ffffff,#f0f0f0);
  box-shadow:0 6px 24px rgba(0,0,0,0.35),0 2px 8px rgba(0,0,0,0.25);
}
.planet-google .planet-inner:hover{box-shadow:0 12px 36px rgba(0,0,0,0.45);}
.planet-google .planet-lbl{color:rgba(60,60,60,0.85);text-shadow:none;}

/* Yandex — red */
.planet-yandex .planet-inner{
  background:linear-gradient(145deg,#FC3F1D,#d42d10);
  box-shadow:0 6px 24px rgba(252,63,29,0.55),0 2px 8px rgba(0,0,0,0.35);
}
.planet-yandex .planet-inner:hover{box-shadow:0 12px 36px rgba(252,63,29,0.7);}

/* 2GIS — blue */
.planet-2gis .planet-inner{
  background:linear-gradient(145deg,#1C87E5,#0d65c0);
  box-shadow:0 6px 24px rgba(28,135,229,0.55),0 2px 8px rgba(0,0,0,0.35);
}
.planet-2gis .planet-inner:hover{box-shadow:0 12px 36px rgba(28,135,229,0.7);}

/* TripAdvisor — green */
.planet-trip .planet-inner{
  background:linear-gradient(145deg,#00AA6C,#007f50);
  box-shadow:0 6px 24px rgba(0,170,108,0.55),0 2px 8px rgba(0,0,0,0.35);
}
.planet-trip .planet-inner:hover{box-shadow:0 12px 36px rgba(0,170,108,0.7);}

/* Instagram — gradient */
.planet-ig .planet-inner{
  background:linear-gradient(145deg,#f9317a,#c528a6,#8b2be2,#4f6df5);
  box-shadow:0 6px 24px rgba(200,40,166,0.55),0 2px 8px rgba(0,0,0,0.35);
}
.planet-ig .planet-inner:hover{box-shadow:0 12px 36px rgba(200,40,166,0.7);}

/* Reviews star — amber */
.planet-star .planet-inner{
  background:linear-gradient(145deg,#ffb700,#e08000);
  box-shadow:0 6px 24px rgba(255,183,0,0.55),0 2px 8px rgba(0,0,0,0.35);
}
.planet-star .planet-inner:hover{box-shadow:0 12px 36px rgba(255,183,0,0.7);}

@media(min-width:600px){
  .planet-inner{width:104px;height:104px;border-radius:26px;gap:7px;}
  .planet-inner img,.planet-inner svg{width:44px;height:44px;}
  .planet-lbl{font-size:10.5px;}
}
@media(min-width:900px){
  .planet-inner{width:122px;height:122px;border-radius:30px;gap:8px;}
  .planet-inner img,.planet-inner svg{width:52px;height:52px;}
  .planet-lbl{font-size:11.5px;}
}

/* HERO TEXT */
.hero-text{text-align:center;padding:28px 20px 36px;}
.hero-title{font-family:"Playfair Display",serif;font-size:clamp(48px,9vw,96px);font-weight:700;line-height:1.0;margin-bottom:14px;}
.h1-line1{display:block;color:var(--cream);}
.h1-line2{display:block;color:var(--gold);font-style:italic;}
.hero-sub{font-size:12px;font-weight:300;color:var(--muted);letter-spacing:0.22em;text-transform:uppercase;margin-bottom:32px;}
.hero-btns{display:flex;gap:12px;justify-content:center;flex-wrap:wrap;}
.hbtn{display:inline-flex;align-items:center;gap:8px;padding:14px 28px;border-radius:13px;font-size:14px;font-weight:600;cursor:pointer;border:none;font-family:"Inter",sans-serif;transition:transform 0.2s,background 0.2s;text-decoration:none;}
.hbtn:hover{transform:translateY(-2px);}
.hbtn-p{background:var(--or);color:var(--cream);}
.hbtn-p:hover{background:var(--or2);}
.hbtn-o{background:rgba(255,255,255,0.05);color:var(--muted);border:0.5px solid rgba(255,245,230,0.16);}
.hbtn-o:hover{background:rgba(255,255,255,0.1);color:var(--cream);}

/* ICONS in buttons */
.btn-icon{width:18px;height:18px;}

/* DIVIDER */
.div-line{display:flex;align-items:center;gap:14px;max-width:var(--max);margin:0 auto;padding:0 20px;}
.dl{flex:1;height:0.5px;background:rgba(240,120,0,0.18);}
.di{color:var(--gold);font-size:18px;opacity:0.6;}

/* SECTIONS */
.section{padding:52px 20px;max-width:var(--max);margin:0 auto;}
.sec-eyebrow{font-size:10px;letter-spacing:0.28em;text-transform:uppercase;color:var(--gold);font-weight:600;margin-bottom:10px;opacity:0.9;}
.sec-title{font-family:"Playfair Display",serif;font-size:clamp(26px,5vw,40px);font-weight:700;color:var(--cream);line-height:1.15;margin-bottom:28px;}

/* STATS */
.stats-row{display:grid;grid-template-columns:repeat(2,1fr);gap:12px;margin-bottom:44px;}
@media(min-width:600px){.stats-row{grid-template-columns:repeat(4,1fr);}}
.stat-card{background:rgba(240,120,0,0.07);border:0.5px solid rgba(240,120,0,0.2);border-radius:16px;padding:20px;text-align:center;transition:border-color 0.25s,transform 0.25s;}
.stat-card:hover{border-color:rgba(240,120,0,0.5);transform:translateY(-2px);}
.stat-num{font-family:"Playfair Display",serif;font-size:32px;font-weight:700;color:var(--gold);display:block;margin-bottom:4px;}
.stat-lbl{font-size:10px;color:var(--faint);letter-spacing:0.12em;}

/* ABOUT */
.about-grid{display:grid;grid-template-columns:1fr;gap:14px;}
@media(min-width:700px){.about-grid{grid-template-columns:repeat(3,1fr);}}
.acard{background:rgba(240,120,0,0.05);border:0.5px solid rgba(240,120,0,0.16);border-radius:18px;padding:22px;position:relative;overflow:hidden;transition:border-color 0.25s,background 0.25s,transform 0.25s;}
.acard::before{content:"";position:absolute;top:0;left:0;right:0;height:0.5px;background:linear-gradient(90deg,transparent,rgba(240,120,0,0.45),transparent);}
.acard:hover{border-color:rgba(240,120,0,0.4);background:rgba(240,120,0,0.1);transform:translateY(-3px);}
.acard-icon{width:48px;height:48px;border-radius:13px;background:rgba(240,120,0,0.18);border:0.5px solid rgba(240,120,0,0.32);display:flex;align-items:center;justify-content:center;font-size:22px;color:var(--or2);margin-bottom:14px;}
.acard-title{font-family:"Playfair Display",serif;font-size:17px;font-weight:700;color:var(--cream);margin-bottom:7px;}
.acard-text{font-size:13px;font-weight:300;color:var(--muted);line-height:1.75;}

/* LOCATIONS */
.loc-grid{display:grid;grid-template-columns:1fr;gap:14px;}
@media(min-width:700px){.loc-grid{grid-template-columns:repeat(2,1fr);}}
.loc-card{background:rgba(240,120,0,0.05);border:0.5px solid rgba(240,120,0,0.16);border-radius:18px;padding:22px;position:relative;overflow:hidden;transition:border-color 0.25s,transform 0.25s;}
.loc-card::before{content:"";position:absolute;top:0;left:0;right:0;height:0.5px;background:linear-gradient(90deg,transparent,rgba(240,120,0,0.45),transparent);}
.loc-card:hover{border-color:rgba(240,120,0,0.45);transform:translateY(-2px);}
.loc-head{display:flex;align-items:flex-start;gap:14px;margin-bottom:16px;}
.loc-badge{width:48px;height:48px;border-radius:13px;flex-shrink:0;background:linear-gradient(135deg,#F07800,#D06000);box-shadow:0 4px 14px rgba(208,96,0,0.4);display:flex;align-items:center;justify-content:center;font-size:22px;}
.loc-name{font-family:"Playfair Display",serif;font-size:18px;font-weight:700;color:var(--cream);}
.loc-addr{font-size:12px;color:var(--faint);margin-top:3px;line-height:1.5;}
.loc-meta{display:flex;gap:20px;margin-bottom:16px;flex-wrap:wrap;}
.loc-m{display:flex;align-items:center;gap:6px;font-size:12px;color:var(--muted);}
.loc-tags{display:flex;gap:8px;flex-wrap:wrap;}
.tag{padding:7px 13px;border-radius:10px;border:0.5px solid rgba(240,120,0,0.22);font-size:11px;font-weight:500;cursor:pointer;background:rgba(240,120,0,0.05);color:var(--muted);transition:all 0.18s;display:flex;align-items:center;gap:5px;text-decoration:none;}
.tag:hover{background:rgba(240,120,0,0.18);border-color:rgba(240,120,0,0.6);color:var(--gold);}
.tag-icon{width:14px;height:14px;display:inline-block;vertical-align:middle;}

/* MAP */
.map-vis{margin-top:20px;height:180px;border-radius:16px;border:0.5px solid rgba(240,120,0,0.18);background:rgba(240,120,0,0.03);position:relative;overflow:hidden;cursor:pointer;transition:border-color 0.25s;}
@media(min-width:700px){.map-vis{height:220px;}}
.map-vis:hover{border-color:rgba(240,120,0,0.48);}
.map-pin{position:absolute;top:50%;left:50%;transform:translate(-50%,-65%);font-size:36px;animation:pinBounce 2.5s ease-in-out infinite;z-index:3;}
@keyframes pinBounce{0%,100%{transform:translate(-50%,-65%);}50%{transform:translate(-50%,-80%);}}
.map-city{position:absolute;bottom:16px;left:50%;transform:translateX(-50%);font-size:11px;color:rgba(255,245,230,0.35);letter-spacing:0.14em;text-transform:uppercase;z-index:3;}
.map-hint{position:absolute;bottom:4px;left:50%;transform:translateX(-50%);font-size:9px;color:rgba(240,120,0,0.5);z-index:3;}

/* CALL */
.call-wrap{display:grid;grid-template-columns:1fr;gap:14px;}
@media(min-width:700px){.call-wrap{grid-template-columns:1fr 1fr;align-items:start;}}
.call-card{background:rgba(240,120,0,0.1);border:0.5px solid rgba(240,120,0,0.28);border-radius:20px;padding:30px;text-align:center;position:relative;overflow:hidden;}
.call-card::before{content:"";position:absolute;top:0;left:0;right:0;height:0.5px;background:linear-gradient(90deg,transparent,rgba(240,120,0,0.7),transparent);}
.call-ring{position:absolute;border-radius:50%;pointer-events:none;}
.cr1{width:220px;height:220px;top:-90px;right:-60px;border:55px solid rgba(240,120,0,0.07);animation:rPulse 4s ease-in-out infinite;}
.cr2{width:160px;height:160px;bottom:-55px;left:-30px;border:40px solid rgba(255,160,64,0.06);animation:rPulse 4s ease-in-out infinite 1.5s;}
@keyframes rPulse{0%,100%{transform:scale(1);opacity:0.6;}50%{transform:scale(1.08);opacity:1;}}
.call-lbl{font-size:10px;letter-spacing:0.22em;text-transform:uppercase;color:var(--faint);margin-bottom:10px;position:relative;z-index:2;}
.call-num{font-family:"Playfair Display",serif;font-size:clamp(26px,5vw,38px);font-weight:700;color:var(--cream);margin-bottom:22px;letter-spacing:0.06em;position:relative;z-index:2;}
.call-btn{display:inline-flex;align-items:center;gap:8px;background:var(--or);color:var(--cream);padding:13px 30px;border-radius:13px;font-size:14px;font-weight:600;border:none;cursor:pointer;font-family:"Inter",sans-serif;transition:background 0.2s,transform 0.2s;position:relative;z-index:2;}
.call-btn:hover{background:var(--or2);transform:translateY(-1px);}
.call-hours{font-size:11px;color:rgba(255,245,230,0.28);margin-top:12px;position:relative;z-index:2;}
.social-stack{display:flex;flex-direction:column;gap:10px;}
.sbtn{display:flex;align-items:center;justify-content:center;gap:8px;padding:15px;border-radius:13px;font-size:14px;font-weight:600;cursor:pointer;font-family:"Inter",sans-serif;transition:all 0.18s;border:0.5px solid;}
.sbtn-wa{background:rgba(37,211,102,0.06);border-color:rgba(37,211,102,0.22);color:rgba(37,211,102,0.85);}
.sbtn-wa:hover{background:rgba(37,211,102,0.18);border-color:rgba(37,211,102,0.55);color:#25D366;}
.sbtn-tg{background:rgba(0,136,204,0.06);border-color:rgba(0,136,204,0.22);color:rgba(0,136,204,0.85);}
.sbtn-tg:hover{background:rgba(0,136,204,0.18);border-color:rgba(0,136,204,0.55);color:#0088cc;}
.sbtn-ig{background:rgba(225,48,108,0.06);border-color:rgba(225,48,108,0.22);color:rgba(225,48,108,0.85);}
.sbtn-ig:hover{background:rgba(225,48,108,0.18);border-color:rgba(225,48,108,0.55);color:#E1306C;}
.sbtn-icon{width:20px;height:20px;}

/* FOOTER */
footer{border-top:0.5px solid rgba(240,120,0,0.12);padding:48px 20px 32px;position:relative;z-index:10;}
.footer-inner{max-width:var(--max);margin:0 auto;display:grid;grid-template-columns:1fr;gap:28px;}
@media(min-width:700px){.footer-inner{grid-template-columns:1.5fr 1fr 1fr;}}
.f-logo{font-family:"Playfair Display",serif;font-size:26px;font-weight:700;color:var(--gold);letter-spacing:0.12em;margin-bottom:6px;}
.f-tag{font-size:12px;color:rgba(255,245,230,0.28);line-height:1.7;margin-bottom:18px;}
.f-social{display:flex;gap:10px;}
.f-soc-a{width:36px;height:36px;border-radius:10px;background:rgba(240,120,0,0.06);border:0.5px solid rgba(240,120,0,0.18);display:flex;align-items:center;justify-content:center;cursor:pointer;transition:all 0.18s;}
.f-soc-a:hover{background:rgba(240,120,0,0.18);border-color:rgba(240,120,0,0.5);}
.f-soc-a svg{width:17px;height:17px;}
.f-col-title{font-size:11px;letter-spacing:0.2em;text-transform:uppercase;color:var(--gold);font-weight:600;opacity:0.85;margin-bottom:16px;}
.f-link{display:block;font-size:13px;color:rgba(255,245,230,0.32);cursor:pointer;transition:color 0.18s;margin-bottom:10px;text-decoration:none;}
.f-link:hover{color:var(--gold);}
.f-copy{max-width:var(--max);margin:28px auto 0;padding-top:20px;border-top:0.5px solid rgba(240,120,0,0.09);font-size:11px;color:rgba(255,245,230,0.18);letter-spacing:0.06em;text-align:center;}

/* FADE */
.fade-in{opacity:0;transform:translateY(22px);transition:opacity 0.65s ease,transform 0.65s cubic-bezier(.22,1,.36,1);}
.fade-in.show{opacity:1;transform:translateY(0);}
.d1{transition-delay:0.08s;}.d2{transition-delay:0.16s;}.d3{transition-delay:0.24s;}

/* MOBILE */
@media(max-width:480px){
  .nav-links{display:none;}.nav-ham{display:flex;}
  .ring-wrap{width:300px;height:300px;}
  .center-logo{width:100px;height:100px;}
  .orbit1{width:165px;height:165px;}.orbit2{width:258px;height:258px;}.orbit3{width:300px;height:300px;}
  .planet-inner{width:64px;height:64px;border-radius:17px;}
  .planet-inner img,.planet-inner svg{width:28px;height:28px;}
  .planet-lbl{font-size:8.5px;}
}
@media(min-width:481px) and (max-width:768px){.nav-links{display:none;}.nav-ham{display:flex;}}
</style>
</head>
<body>

<div class="aurora">
  <div class="blob" style="width:650px;height:650px;top:-170px;right:-150px;background:radial-gradient(circle,rgba(240,112,32,0.14),transparent 70%);animation-duration:14s;"></div>
  <div class="blob" style="width:420px;height:420px;top:500px;left:-110px;background:radial-gradient(circle,rgba(255,160,50,0.09),transparent 70%);animation-duration:19s;animation-delay:3s;"></div>
  <div class="blob" style="width:340px;height:340px;top:1100px;right:-70px;background:radial-gradient(circle,rgba(224,80,16,0.1),transparent 70%);animation-duration:17s;animation-delay:7s;"></div>
  <div class="blob" style="width:290px;height:290px;top:1700px;left:60px;background:radial-gradient(circle,rgba(255,160,50,0.08),transparent 70%);animation-duration:23s;animation-delay:5s;"></div>
</div>
<div class="particles" id="pcontainer"></div>
<canvas id="bb-canvas"></canvas>

<!-- NAV -->
<nav>
  <div class="nav-inner">
    <div class="nav-logo">BONBON</div>
    <div class="nav-links">
      <a class="nav-link" href="#about">О нас</a>
      <a class="nav-link" href="#locations">Локации</a>
      <a class="nav-link" href="#contact">Контакты</a>
      <button class="nav-cta">Меню</button>
    </div>
    <div class="nav-ham" id="hamBtn" onclick="toggleMenu()">
      <svg width="20" height="20" viewBox="0 0 20 20" fill="none"><rect x="2" y="5" width="16" height="1.8" rx="0.9" fill="currentColor"/><rect x="2" y="9.1" width="16" height="1.8" rx="0.9" fill="currentColor"/><rect x="2" y="13.2" width="16" height="1.8" rx="0.9" fill="currentColor"/></svg>
    </div>
  </div>
  <div class="mobile-menu" id="mobileMenu">
    <a class="nav-link" href="#about" onclick="toggleMenu()">О нас</a>
    <a class="nav-link" href="#locations" onclick="toggleMenu()">Локации</a>
    <a class="nav-link" href="#contact" onclick="toggleMenu()">Контакты</a>
    <button class="mob-cta">Посмотреть меню</button>
  </div>
</nav>

<div class="bb-wrap">

<!-- ORBIT HERO -->
<section class="orbit-hero fade-in">
  <div class="hero-badge"><div class="badge-dot"></div>Bukhara · Est. 2019</div>

  <div class="ring-wrap" id="ringWrap">
    <div class="orbit orbit1"></div>
    <div class="orbit orbit2"></div>
    <div class="orbit orbit3"></div>

    <!-- CENTER LOGO — real PNG -->
    <div class="center-logo">
      <img src="data:image/png;base64,/9j/4AAQSkZJRgABAQAAAQABAAD/4gHYSUNDX1BST0ZJTEUAAQEAAAHIAAAAAAQwAABtbnRyUkdCIFhZWiAH4AABAAEAAAAAAABhY3NwAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAQAA9tYAAQAAAADTLQAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAlkZXNjAAAA8AAAACRyWFlaAAABFAAAABRnWFlaAAABKAAAABRiWFlaAAABPAAAABR3dHB0AAABUAAAABRyVFJDAAABZAAAAChnVFJDAAABZAAAAChiVFJDAAABZAAAAChjcHJ0AAABjAAAADxtbHVjAAAAAAAAAAEAAAAMZW5VUwAAAAgAAAAcAHMAUgBHAEJYWVogAAAAAAAAb6IAADj1AAADkFhZWiAAAAAAAABimQAAt4UAABjaWFlaIAAAAAAAACSgAAAPhAAAts9YWVogAAAAAAAA9tYAAQAAAADTLXBhcmEAAAAAAAQAAAACZmYAAPKnAAANWQAAE9AAAApbAAAAAAAAAABtbHVjAAAAAAAAAAEAAAAMZW5VUwAAACAAAAAcAEcAbwBvAGcAbABlACAASQBuAGMALgAgADIAMAAxADb/2wBDAAUDBAQEAwUEBAQFBQUGBwwIBwcHBw8LCwkMEQ8SEhEPERETFhwXExQaFRERGCEYGh0dHx8fExciJCIeJBweHx7/2wBDAQUFBQcGBw4ICA4eFBEUHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh4eHh7/wAARCAQ4BDgDASIAAhEBAxEB/8QAHAABAAEFAQEAAAAAAAAAAAAAAAcBBAUGCAID/8QAUBABAAEDAwEFAwcJBQQIBgIDAAECAwQFBhEhBxIxQVETYXEiMlKBkaGxCBQVIzNCcoLBFmKS0eEkQ1OiJURUY4OywvAXNDZFc5M1s5TS8f/EABsBAQACAwEBAAAAAAAAAAAAAAAGBwEEBQMC/8QAQBEBAAEDAgMEBwcCBQMEAwAAAAECAwQFEQYhMRJBUWETIjJxgZGhFEKxwdHh8CMzFRZDUqJykvEkNWLiU4LC/9oADAMBAAIRAxEAPwDjIAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAA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AAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAAB//2Q==" alt="BonBon Logo">
    </div>

    <!-- p0: Instagram -->
    <a class="planet planet-ig" id="p0" href="https://instagram.com/bonbon.bukhara" target="_blank">
      <div class="planet-inner">
        <svg viewBox="0 0 48 48" fill="none"><rect x="7" y="7" width="34" height="34" rx="10" stroke="white" stroke-width="3"/><circle cx="24" cy="24" r="8" stroke="white" stroke-width="3"/><circle cx="35.5" cy="12.5" r="2.5" fill="white"/></svg>
        <span class="planet-lbl">Instagram</span>
      </div>
    </a>

    <!-- p1: Google -->
    <a class="planet planet-google" id="p1" href="https://www.google.com/maps/place/Bon+Bon+Caf%C3%A9+%26+Pastry/@39.7720855,64.4283554,17z" target="_blank">
      <div class="planet-inner">
        <svg viewBox="0 0 48 48" fill="none">
          <path d="M44 24.5c0-1.38-.12-2.72-.34-4H24v7.57h11.23A9.6 9.6 0 0131 34.7l6.18 4.8C41.1 35.9 44 30.6 44 24.5z" fill="#4285F4"/>
          <path d="M24 45c5.4 0 9.93-1.8 13.23-4.87l-6.47-5.02C29 36.5 26.67 37.25 24 37.25c-5.22 0-9.65-3.53-11.23-8.27l-6.62 5.12C9.3 40.7 16.12 45 24 45z" fill="#34A853"/>
          <path d="M12.77 28.98A13.26 13.26 0 0112 24c0-1.73.3-3.4.77-4.98L6.15 13.9A22.12 22.12 0 004 24c0 3.65.86 7.1 2.15 10.1l6.62-5.12z" fill="#FBBC05"/>
          <path d="M24 10.75c2.95 0 5.6 1.02 7.68 2.7L37.6 7.4C34 4.1 29.42 2 24 2 16.12 2 9.3 6.3 6.15 13.9l6.62 5.12C14.35 14.28 18.78 10.75 24 10.75z" fill="#EA4335"/>
        </svg>
        <span class="planet-lbl">Google</span>
      </div>
    </a>

    <!-- p2: Yandex -->
    <a class="planet planet-yandex" id="p2" href="https://yandex.uz/maps/org/83177594825/reviews/?ll=64.435159%2C39.736119&z=16" target="_blank">
      <div class="planet-inner">
        <svg viewBox="0 0 48 48" fill="none">
          <path d="M28 6H23.5C18.5 6 15 9.5 15 15C15 19.8 17.5 22.8 22 25.5L15 42H21L27.5 28H30V42H36V6H28ZM30 22.5H27C23.5 22.5 21 20.5 21 15.5C21 10.5 23.5 9 27 9H30V22.5Z" fill="white"/>
        </svg>
        <span class="planet-lbl">Yandex</span>
      </div>
    </a>

    <!-- p3: 2GIS -->
    <a class="planet planet-2gis" id="p3" href="https://2gis.uz/bukhara/firm/70000001083516500/tab/reviews?m=64.433056%2C39.772833%2F16.7" target="_blank">
      <div class="planet-inner">
        <svg viewBox="0 0 48 48" fill="none">
          <text x="24" y="18" text-anchor="middle" font-family="Arial Black,Arial" font-weight="900" font-size="13" fill="white">2GIS</text>
          <path d="M10 26C10 20 16.5 15 24 15C31.5 15 38 20 38 26C38 33 31 39 24 39C17 39 10 33 10 26Z" stroke="white" stroke-width="2.5" fill="none"/>
          <circle cx="24" cy="26" r="5" fill="white"/>
        </svg>
        <span class="planet-lbl">2GIS</span>
      </div>
    </a>

    <!-- p4: TripAdvisor -->
    <a class="planet planet-trip" id="p4" href="https://www.tripadvisor.com/UserReviewEdit-g303936-d19139820-Bon_Bon-Bukhara_Bukhara_Province.html" target="_blank">
      <div class="planet-inner">
        <svg viewBox="0 0 48 48" fill="none">
          <circle cx="16" cy="26" r="7" stroke="white" stroke-width="3" fill="none"/>
          <circle cx="32" cy="26" r="7" stroke="white" stroke-width="3" fill="none"/>
          <circle cx="16" cy="26" r="3" fill="white"/>
          <circle cx="32" cy="26" r="3" fill="white"/>
          <path d="M8 22C10 18 13 15 16 15H32C35 15 38 18 40 22" stroke="white" stroke-width="2.5" stroke-linecap="round" fill="none"/>
        </svg>
        <span class="planet-lbl">TripAdvisor</span>
      </div>
    </a>

    <!-- p5: Reviews star -->
    <div class="planet planet-star" id="p5">
      <div class="planet-inner">
        <svg viewBox="0 0 48 48" fill="none">
          <path d="M24 8L27.8 18.5H39L29.6 25L33.4 35.5L24 29L14.6 35.5L18.4 25L9 18.5H20.2L24 8Z" fill="white" stroke="white" stroke-width="1.5" stroke-linejoin="round"/>
        </svg>
        <span class="planet-lbl">Отзывы</span>
      </div>
    </div>
  </div>
</section>

<!-- HERO TEXT -->
<div class="hero-text fade-in d1">
  <h1 class="hero-title">
    <span class="h1-line1">Cafe</span>
    <span class="h1-line2">BonBon</span>
  </h1>
  <p class="hero-sub">Добро пожаловать в BonBon</p>
  <div class="hero-btns">
    <button class="hbtn hbtn-p">
      <svg class="btn-icon" viewBox="0 0 20 20" fill="none"><rect x="3" y="4" width="14" height="12" rx="2" stroke="currentColor" stroke-width="1.5"/><line x1="6" y1="8" x2="14" y2="8" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/><line x1="6" y1="11" x2="11" y2="11" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/></svg>
      Посмотреть меню
    </button>
    <button class="hbtn hbtn-o">
      <svg class="btn-icon" viewBox="0 0 20 20" fill="none"><path d="M10 2C7.24 2 5 4.24 5 7C5 10.75 10 18 10 18C10 18 15 10.75 15 7C15 4.24 12.76 2 10 2ZM10 9C8.9 9 8 8.1 8 7C8 5.9 8.9 5 10 5C11.1 5 12 5.9 12 7C12 8.1 11.1 9 10 9Z" fill="currentColor"/></svg>
      Найти нас
    </button>
  </div>
</div>

<!-- STATS -->
<div class="container fade-in d2">
  <div class="stats-row">
    <div class="stat-card"><span class="stat-num">2019</span><span class="stat-lbl">ГОД ОСНОВАНИЯ</span></div>
    <div class="stat-card"><span class="stat-num">2</span><span class="stat-lbl">ФИЛИАЛА</span></div>
    <div class="stat-card"><span class="stat-num">4.8★</span><span class="stat-lbl">РЕЙТИНГ</span></div>
    <div class="stat-card"><span class="stat-num">50k+</span><span class="stat-lbl">ГОСТЕЙ</span></div>
  </div>
</div>

<!-- DIVIDER -->
<div class="div-line fade-in"><div class="dl"></div>
  <span class="di"><svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M10 3C8 3 6.5 4 6 5.5C5.5 7 6 9 7 10.5C8 12 10 14 10 14C10 14 12 12 13 10.5C14 9 14.5 7 14 5.5C13.5 4 12 3 10 3Z" stroke="currentColor" stroke-width="1.3" fill="none"/><circle cx="10" cy="7" r="1.5" fill="currentColor"/><path d="M6 17C6 17 7 15 10 15C13 15 14 17 14 17" stroke="currentColor" stroke-width="1.3" stroke-linecap="round"/></svg></span>
<div class="dl"></div></div>

<!-- ABOUT -->
<section class="section fade-in" id="about">
  <div class="sec-eyebrow">Our Story</div>
  <div class="sec-title">Biz haqimizda</div>
  <div class="about-grid">
    <div class="acard fade-in">
      <div class="acard-icon">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><rect x="3" y="6" width="18" height="14" rx="2" stroke="currentColor" stroke-width="1.6"/><path d="M8 6V5C8 3.9 8.9 3 10 3H14C15.1 3 16 3.9 16 5V6" stroke="currentColor" stroke-width="1.6"/><line x1="12" y1="11" x2="12" y2="16" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/><line x1="9.5" y1="13.5" x2="14.5" y2="13.5" stroke="currentColor" stroke-width="1.6" stroke-linecap="round"/></svg>
      </div>
      <div class="acard-title">Кто мы</div>
      <p class="acard-text">BonBon — современное кафе европейского стиля, рождённое в самом сердце Бухары. С 2019 года мы создаём пространство, где ароматный кофе, свежая выпечка и тёплая атмосфера объединяются в единое особенное настроение.</p>
    </div>
    <div class="acard fade-in d1">
      <div class="acard-icon">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M12 2C7 2 3 6 3 11C3 14 4.5 16.5 7 18L8 22H16L17 18C19.5 16.5 21 14 21 11C21 6 17 2 12 2Z" stroke="currentColor" stroke-width="1.6" fill="none"/><circle cx="12" cy="11" r="3" stroke="currentColor" stroke-width="1.6"/></svg>
      </div>
      <div class="acard-title">Наша философия</div>
      <p class="acard-text">Каждая чашка кофе тщательно отбирается и готовится с вниманием к деталям. Каждый десерт создаётся свежим каждый день. Мы верим, что качество в мелочах делает жизнь прекраснее.</p>
    </div>
    <div class="acard fade-in d2">
      <div class="acard-icon">
        <svg width="24" height="24" viewBox="0 0 24 24" fill="none"><path d="M12 2L14.9 8.9L22 9.8L17 14.6L18.2 21.8L12 18.3L5.8 21.8L7 14.6L2 9.8L9.1 8.9L12 2Z" stroke="currentColor" stroke-width="1.6" fill="none" stroke-linejoin="round"/></svg>
      </div>
      <div class="acard-title">Признание гостей</div>
      <p class="acard-text">BonBon входит в число любимых кафе Бухары на TripAdvisor, Yandex Maps и Google. Наши гости называют это место своим вторым домом, куда хочется возвращаться снова и снова.</p>
    </div>
  </div>
</section>

<!-- DIVIDER -->
<div class="div-line fade-in"><div class="dl"></div>
  <span class="di"><svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M10 2C7.24 2 5 4.24 5 7C5 10.75 10 18 10 18C10 18 15 10.75 15 7C15 4.24 12.76 2 10 2ZM10 9C8.9 9 8 8.1 8 7C8 5.9 8.9 5 10 5C11.1 5 12 5.9 12 7C12 8.1 11.1 9 10 9Z" fill="currentColor"/></svg></span>
<div class="dl"></div></div>

<!-- LOCATIONS -->
<section class="section fade-in" id="locations">
  <div class="sec-eyebrow">Наши локации</div>
  <div class="sec-title">Наши филиалы</div>
  <div class="loc-grid">
    <div class="loc-card fade-in">
      <div class="loc-head">
        <div class="loc-badge">
          <svg width="22" height="22" viewBox="0 0 22 22" fill="none"><rect x="2" y="5" width="18" height="14" rx="2.5" stroke="white" stroke-width="1.8"/><path d="M7 5V4C7 2.9 7.9 2 9 2H13C14.1 2 15 2.9 15 4V5" stroke="white" stroke-width="1.8"/></svg>
        </div>
        <div><div class="loc-name">BonBon Central</div><div class="loc-addr">12 Lyabi Hauz Square, Old City, Bukhara</div></div>
      </div>
      <div class="loc-meta">
        <div class="loc-m">
          <svg width="15" height="15" viewBox="0 0 15 15" fill="none"><circle cx="7.5" cy="7.5" r="6" stroke="currentColor" stroke-width="1.4"/><path d="M7.5 4.5V7.5L9.5 9.5" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/></svg>
          <span>09:00 – 23:00</span>
        </div>
        <div class="loc-m">
          <svg width="15" height="15" viewBox="0 0 15 15" fill="none"><path d="M3 2C3 2 2 2 2 4C2 8 7 13 11 13C13 13 13 12 13 12L13 10L10 9L9 10.5C8 10 5 7 4.5 6L6 5L5 2L3 2Z" stroke="currentColor" stroke-width="1.3" fill="none"/></svg>
          <span>+998 65 221 0011</span>
        </div>
      </div>
      <div class="loc-tags">
        <a class="tag" href="https://www.google.com/maps/place/Bon+Bon+Caf%C3%A9+%26+Pastry/@39.7720855,64.4283554,17z" target="_blank">
          <svg class="tag-icon" viewBox="0 0 14 14" fill="none"><path d="M12.5 7.1c0-.4-.03-.8-.1-1.15H7v2.18h3.22A2.75 2.75 0 019 9.98l1.78 1.38C11.95 10.3 12.5 8.8 12.5 7.1z" fill="#4285F4"/><path d="M7 13c1.55 0 2.85-.51 3.8-1.4L9.02 10.2C8.55 10.5 7.83 10.7 7 10.7c-1.5 0-2.77-1.01-3.22-2.37L2.03 9.77C2.95 11.7 4.83 13 7 13z" fill="#34A853"/><path d="M3.78 8.33A3.8 3.8 0 013.5 7c0-.46.08-.9.28-1.33L2.03 4.23A6.5 6.5 0 001.5 7c0 1.05.25 2.04.53 2.77l2.25-1.44z" fill="#FBBC05"/><path d="M7 3.3c.85 0 1.6.29 2.2.77L10.82 2.5C9.72 1.53 8.45 1 7 1 4.83 1 2.95 2.3 2.03 4.23l2.25 1.44C4.23 4.31 5.5 3.3 7 3.3z" fill="#EA4335"/></svg>
          Google
        </a>
        <a class="tag" href="https://yandex.uz/maps/org/83177594825/reviews/?ll=64.435159%2C39.736119&z=16" target="_blank">
          <svg class="tag-icon" viewBox="0 0 14 14" fill="none"><circle cx="7" cy="7" r="6.5" fill="#FC3F1D"/><path d="M8.3 2.8H7C5.5 2.8 4.5 3.7 4.5 5.2C4.5 6.5 5.1 7.2 6.2 7.9L4.3 11.2H6L7.8 7.7H8.5V11.2H10V2.8H8.3ZM8.5 6.5H7.7C6.8 6.5 6.2 6 6.2 5.1C6.2 4.2 6.8 3.8 7.7 3.8H8.5V6.5Z" fill="white"/></svg>
          Yandex
        </a>
        <a class="tag" href="https://2gis.uz/bukhara/firm/70000001083516500/tab/reviews?m=64.433056%2C39.772833%2F16.7" target="_blank">
          <svg class="tag-icon" viewBox="0 0 14 14" fill="none"><rect width="14" height="14" rx="3" fill="#1C7ECF"/><text x="7" y="9.5" text-anchor="middle" font-family="Arial Black" font-weight="900" font-size="4.5" fill="white">2GIS</text></svg>
          2GIS
        </a>
        <a class="tag" href="https://www.tripadvisor.com/UserReviewEdit-g303936-d19139820-Bon_Bon-Bukhara_Bukhara_Province.html" target="_blank">
          <svg class="tag-icon" viewBox="0 0 14 14" fill="none"><circle cx="14" cy="14" r="13" fill="#00AA6C"/><circle cx="5" cy="8" r="2.5" stroke="white" stroke-width="1.2" fill="none"/><circle cx="9" cy="8" r="2.5" stroke="white" stroke-width="1.2" fill="none"/><circle cx="5" cy="8" r="1" fill="white"/><circle cx="9" cy="8" r="1" fill="white"/></svg>
          TripAdvisor
        </a>
      </div>
    </div>
    <div class="loc-card fade-in d1">
      <div class="loc-head">
        <div class="loc-badge">
          <svg width="22" height="22" viewBox="0 0 22 22" fill="none"><rect x="2" y="5" width="18" height="14" rx="2.5" stroke="white" stroke-width="1.8"/><path d="M7 5V4C7 2.9 7.9 2 9 2H13C14.1 2 15 2.9 15 4V5" stroke="white" stroke-width="1.8"/></svg>
        </div>
        <div><div class="loc-name">BonBon Ark</div><div class="loc-addr">7 Ark Fortress Road, Bukhara</div></div>
      </div>
      <div class="loc-meta">
        <div class="loc-m">
          <svg width="15" height="15" viewBox="0 0 15 15" fill="none"><circle cx="7.5" cy="7.5" r="6" stroke="currentColor" stroke-width="1.4"/><path d="M7.5 4.5V7.5L9.5 9.5" stroke="currentColor" stroke-width="1.4" stroke-linecap="round"/></svg>
          <span>08:00 – 22:00</span>
        </div>
        <div class="loc-m">
          <svg width="15" height="15" viewBox="0 0 15 15" fill="none"><path d="M3 2C3 2 2 2 2 4C2 8 7 13 11 13C13 13 13 12 13 12L13 10L10 9L9 10.5C8 10 5 7 4.5 6L6 5L5 2L3 2Z" stroke="currentColor" stroke-width="1.3" fill="none"/></svg>
          <span>+998 65 221 0022</span>
        </div>
      </div>
      <div class="loc-tags">
        <a class="tag" href="https://www.google.com/maps/place/Bon+Bon+Caf%C3%A9+%26+Pastry/@39.7720855,64.4283554,17z" target="_blank">
          <svg class="tag-icon" viewBox="0 0 14 14" fill="none"><path d="M12.5 7.1c0-.4-.03-.8-.1-1.15H7v2.18h3.22A2.75 2.75 0 019 9.98l1.78 1.38C11.95 10.3 12.5 8.8 12.5 7.1z" fill="#4285F4"/><path d="M7 13c1.55 0 2.85-.51 3.8-1.4L9.02 10.2C8.55 10.5 7.83 10.7 7 10.7c-1.5 0-2.77-1.01-3.22-2.37L2.03 9.77C2.95 11.7 4.83 13 7 13z" fill="#34A853"/><path d="M3.78 8.33A3.8 3.8 0 013.5 7c0-.46.08-.9.28-1.33L2.03 4.23A6.5 6.5 0 001.5 7c0 1.05.25 2.04.53 2.77l2.25-1.44z" fill="#FBBC05"/><path d="M7 3.3c.85 0 1.6.29 2.2.77L10.82 2.5C9.72 1.53 8.45 1 7 1 4.83 1 2.95 2.3 2.03 4.23l2.25 1.44C4.23 4.31 5.5 3.3 7 3.3z" fill="#EA4335"/></svg>
          Google
        </a>
        <a class="tag" href="https://yandex.uz/maps/org/83177594825/reviews/?ll=64.435159%2C39.736119&z=16" target="_blank">
          <svg class="tag-icon" viewBox="0 0 14 14" fill="none"><circle cx="7" cy="7" r="6.5" fill="#FC3F1D"/><path d="M8.3 2.8H7C5.5 2.8 4.5 3.7 4.5 5.2C4.5 6.5 5.1 7.2 6.2 7.9L4.3 11.2H6L7.8 7.7H8.5V11.2H10V2.8H8.3ZM8.5 6.5H7.7C6.8 6.5 6.2 6 6.2 5.1C6.2 4.2 6.8 3.8 7.7 3.8H8.5V6.5Z" fill="white"/></svg>
          Yandex
        </a>
        <a class="tag" href="https://2gis.uz/bukhara/firm/70000001083516500/tab/reviews?m=64.433056%2C39.772833%2F16.7" target="_blank">
          <svg class="tag-icon" viewBox="0 0 14 14" fill="none"><rect width="14" height="14" rx="3" fill="#1C7ECF"/><text x="7" y="9.5" text-anchor="middle" font-family="Arial Black" font-weight="900" font-size="4.5" fill="white">2GIS</text></svg>
          2GIS
        </a>
        <a class="tag" href="https://www.tripadvisor.com/UserReviewEdit-g303936-d19139820-Bon_Bon-Bukhara_Bukhara_Province.html" target="_blank">
          <svg class="tag-icon" viewBox="0 0 14 14" fill="none"><circle cx="14" cy="14" r="13" fill="#00AA6C"/><circle cx="5" cy="8" r="2.5" stroke="white" stroke-width="1.2" fill="none"/><circle cx="9" cy="8" r="2.5" stroke="white" stroke-width="1.2" fill="none"/><circle cx="5" cy="8" r="1" fill="white"/><circle cx="9" cy="8" r="1" fill="white"/></svg>
          TripAdvisor
        </a>
      </div>
    </div>
  </div>
  <div class="map-vis fade-in" onclick="window.open('https://www.google.com/maps/place/Bon+Bon+Caf%C3%A9+%26+Pastry/@39.7720855,64.4283554,17z','_blank')">
    <svg style="position:absolute;inset:0;width:100%;height:100%" viewBox="0 0 800 220" preserveAspectRatio="none"><line x1="0" y1="55" x2="800" y2="55" stroke="rgba(240,112,32,0.08)" stroke-width="0.5"/><line x1="0" y1="110" x2="800" y2="110" stroke="rgba(240,112,32,0.08)" stroke-width="0.5"/><line x1="0" y1="165" x2="800" y2="165" stroke="rgba(240,112,32,0.08)" stroke-width="0.5"/><line x1="160" y1="0" x2="160" y2="220" stroke="rgba(240,112,32,0.06)" stroke-width="0.5"/><line x1="320" y1="0" x2="320" y2="220" stroke="rgba(240,112,32,0.06)" stroke-width="0.5"/><line x1="480" y1="0" x2="480" y2="220" stroke="rgba(240,112,32,0.06)" stroke-width="0.5"/><line x1="640" y1="0" x2="640" y2="220" stroke="rgba(240,112,32,0.06)" stroke-width="0.5"/><path d="M 30 190 Q 150 140 230 160 Q 340 180 400 110 Q 460 60 550 90 Q 640 130 770 75" stroke="rgba(240,112,32,0.15)" stroke-width="1" fill="none"/><circle cx="400" cy="110" r="8" fill="rgba(240,112,32,0.6)" stroke="rgba(240,112,32,0.9)" stroke-width="1.5"/><circle cx="400" cy="110" r="22" fill="rgba(240,112,32,0.1)" stroke="rgba(240,112,32,0.22)" stroke-width="0.7"/><circle cx="400" cy="110" r="42" fill="rgba(240,112,32,0.05)" stroke="rgba(240,112,32,0.1)" stroke-width="0.5"/></svg>
    <div class="map-pin">📍</div>
    <div class="map-city">Бухара, Узбекистан</div>
    <div class="map-hint">Нажмите, чтобы открыть карту</div>
  </div>
</section>

<!-- DIVIDER -->
<div class="div-line fade-in"><div class="dl"></div>
  <span class="di"><svg width="20" height="20" viewBox="0 0 20 20" fill="none"><path d="M4 2C4 2 3 2 3 5C3 11 9 17 15 17C18 17 18 16 18 16V13L14 12L12.5 14C11 13 7 9 6.5 7.5L9 6L8 2L4 2Z" stroke="currentColor" stroke-width="1.4" fill="none"/></svg></span>
<div class="dl"></div></div>

<!-- CONTACT -->
<section class="section fade-in" id="contact">
  <div class="sec-eyebrow">Свяжитесь с нами</div>
  <div class="sec-title">Контакты</div>
  <div class="call-wrap">
    <div class="call-card">
      <div class="call-ring cr1"></div>
      <div class="call-ring cr2"></div>
      <div class="call-lbl">Мы всегда на связи с вами</div>
      <div class="call-num">+998 65 221 00 00</div>
      <button class="call-btn" onclick="window.location.href='tel:+998652210000'">
        <svg width="18" height="18" viewBox="0 0 18 18" fill="none"><path d="M3.5 2C3.5 2 2.5 2 2.5 4.5C2.5 9.5 8.5 15.5 13.5 15.5C16 15.5 16 14.5 16 14.5V12L13 11L11.5 13C10 12 7 9 6.5 7.5L9 6L8 3L3.5 2Z" stroke="currentColor" stroke-width="1.5" fill="none"/></svg>
        Позвонить
      </button>
      <div class="call-hours">Открыто: 09:00 – 23:00 · Ежедневно</div>
    </div>
    <div class="social-stack">
      <button class="sbtn sbtn-wa" onclick="window.open('https://wa.me/998652210000','_blank')">
        <svg class="sbtn-icon" viewBox="0 0 24 24" fill="none"><circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.5"/><path d="M7.5 15.5C8.5 16.5 9.8 17 11.5 17C15 17 17.5 14.5 17.5 11.5C17.5 8.5 15 6 12 6C9 6 6.5 8.5 6.5 11.5C6.5 12.8 7 14 7.5 15L7 17L9 16.5C9.5 16.8 10.5 17 11.5 17" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" fill="none"/><path d="M10 10.5C10 10 10.5 9.5 11 10L12 11C12.5 11.5 12.5 12 12 12.5L11.5 13C12 14 13 14.8 13.5 14.5L14 14C14.5 13.5 15 13.5 15.5 14L16 15C16.5 15.5 16 16 15.5 16" stroke="currentColor" stroke-width="1.2" stroke-linecap="round" fill="none"/></svg>
        WhatsApp
      </button>
      <button class="sbtn sbtn-tg" onclick="window.open('https://t.me/bonbon_uz_bot','_blank')">
        <svg class="sbtn-icon" viewBox="0 0 24 24" fill="none"><path d="M21 5L2 12.5L9 14M21 5L18 20L9 14M21 5L9 14M9 14V21L12.5 17.5" stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/></svg>
        Telegram
      </button>
      <button class="sbtn sbtn-ig" onclick="window.open('https://instagram.com/bonbon.bukhara','_blank')">
        <svg class="sbtn-icon" viewBox="0 0 24 24" fill="none"><rect x="3" y="3" width="18" height="18" rx="5" stroke="currentColor" stroke-width="1.5"/><circle cx="12" cy="12" r="4.5" stroke="currentColor" stroke-width="1.5"/><circle cx="17.5" cy="6.5" r="1.2" fill="currentColor"/></svg>
        Instagram
      </button>
    </div>
  </div>
</section>

<!-- FOOTER -->
<footer>
  <div class="footer-inner">
    <div>
      <div class="f-logo">BONBON</div>
      <p class="f-tag">В центре Бухары<br>Европейская кофейная атмосфера.</p>
      <div class="f-social">
        <div class="f-soc-a">
          <svg width="17" height="17" viewBox="0 0 17 17" fill="none"><rect x="2" y="2" width="13" height="13" rx="3.5" stroke="rgba(255,248,240,0.5)" stroke-width="1.2"/><circle cx="8.5" cy="8.5" r="3" stroke="rgba(255,248,240,0.5)" stroke-width="1.2"/><circle cx="12.5" cy="4.5" r="0.8" fill="rgba(255,248,240,0.5)"/></svg>
        </div>
        <div class="f-soc-a">
          <svg width="17" height="17" viewBox="0 0 17 17" fill="none"><path d="M15 3.5L1 9L6.5 10.5M15 3.5L13 15L6.5 10.5M15 3.5L6.5 10.5M6.5 10.5V15L8.5 13" stroke="rgba(255,248,240,0.5)" stroke-width="1.2" stroke-linecap="round" stroke-linejoin="round"/></svg>
        </div>
        <div class="f-soc-a">
          <svg width="17" height="17" viewBox="0 0 17 17" fill="none"><path d="M8.5 1.5L10.5 6.5H16L11.5 9.8L13.5 15L8.5 12L3.5 15L5.5 9.8L1 6.5H6.5L8.5 1.5Z" stroke="rgba(255,248,240,0.5)" stroke-width="1.2" fill="none" stroke-linejoin="round"/></svg>
        </div>
        <div class="f-soc-a">
          <svg width="17" height="17" viewBox="0 0 17 17" fill="none"><path d="M8.5 1.5C5.2 1.5 2.5 4.2 2.5 7.5C2.5 11.3 8.5 15.5 8.5 15.5C8.5 15.5 14.5 11.3 14.5 7.5C14.5 4.2 11.8 1.5 8.5 1.5ZM8.5 9.5C7.4 9.5 6.5 8.6 6.5 7.5C6.5 6.4 7.4 5.5 8.5 5.5C9.6 5.5 10.5 6.4 10.5 7.5C10.5 8.6 9.6 9.5 8.5 9.5Z" fill="rgba(255,248,240,0.5)"/></svg>
        </div>
      </div>
    </div>
    <div>
      <div class="f-col-title">Страницы</div>
      <a class="f-link" href="#about">О нас</a>
      <a class="f-link" href="#locations">Локации</a>
      <a class="f-link" href="#contact">Контакты</a>
      <a class="f-link" href="#">Меню</a>
      <a class="f-link" href="#">Бронирование</a>
    </div>
    <div>
      <div class="f-col-title">Время работы</div>
      <p class="f-link" style="cursor:default">BonBon Central<br><span style="color:rgba(255,248,240,0.2);font-size:11px">09:00 – 23:00</span></p>
      <p class="f-link" style="cursor:default;margin-top:10px">BonBon Ark<br><span style="color:rgba(255,248,240,0.2);font-size:11px">08:00 – 22:00</span></p>
    </div>
  </div>
  <div class="f-copy">© 2025 Café BonBon · Бухара, Узбекистан</div>
</footer>

</div>

<script>
function toggleMenu(){document.getElementById("mobileMenu").classList.toggle("open");}

// PARTICLES — orange tones
const pC=document.getElementById("pcontainer");
const ptC=["rgba(240,112,32,","rgba(255,160,50,","rgba(255,210,80,"];
for(let i=0;i<70;i++){
  const pt=document.createElement("div");pt.className="pt";
  const s=1.2+Math.random()*4,c=ptC[Math.floor(Math.random()*3)];
  const a=0.07+Math.random()*0.22,dur=9+Math.random()*18,del=Math.random()*15;
  const drift=(Math.random()-0.5)*100,left=Math.random()*100,isC=Math.random()>0.45;
  pt.style.cssText="width:"+s+"px;height:"+s+"px;left:"+left+"%;bottom:-10px;background:"+(isC?c+a+")":"transparent")+";border:"+(isC?"none":"0.5px solid "+c+(a*0.5)+")")+";border-radius:50%;--drift:"+drift+"px;animation-duration:"+dur+"s;animation-delay:-"+del+"s;";
  pC.appendChild(pt);
}

// CANVAS
const canvas=document.getElementById("bb-canvas");
const ctx=canvas.getContext("2d");
let W,H,t=0;
function resizeCanvas(){W=canvas.width=window.innerWidth;H=canvas.height=Math.max(document.documentElement.scrollHeight,window.innerHeight);}
resizeCanvas();
window.addEventListener("resize",()=>{resizeCanvas();placePlanets();});
setTimeout(resizeCanvas,400);
function drawWave(){
  ctx.clearRect(0,0,W,H);
  [{y:H*.18,amp:22,freq:.007,spd:.018,a:.028,c:"rgba(240,112,32,"},{y:H*.38,amp:16,freq:.009,spd:-.014,a:.022,c:"rgba(255,160,50,"},{y:H*.6,amp:26,freq:.005,spd:.012,a:.025,c:"rgba(224,80,16,"},{y:H*.8,amp:18,freq:.008,spd:-.02,a:.018,c:"rgba(255,160,50,"}].forEach(w=>{
    ctx.beginPath();ctx.moveTo(0,w.y);
    for(let x=0;x<=W;x+=5){ctx.lineTo(x,w.y+Math.sin(x*w.freq+t*w.spd*60)*w.amp);}
    ctx.strokeStyle=w.c+w.a+")";ctx.lineWidth=1;ctx.stroke();
  });
  t+=.016;requestAnimationFrame(drawWave);
}
drawWave();

// PLANET PLACEMENT
function placePlanets(){
  const ring=document.getElementById("ringWrap");
  const rw=ring.offsetWidth;
  const cx=rw/2,cy=rw/2;
  const isSm=window.innerWidth<480,isMd=window.innerWidth<600;
  const R1=isSm?60:isMd?82:rw*0.27;
  const R2=isSm?98:isMd?132:rw*0.43;
  const pSize=isSm?64:isMd?86:window.innerWidth>=900?122:104;
  const half=pSize/2;
  const cfgs=[
    {r:R1,a:-Math.PI/2},
    {r:R2,a:-Math.PI/6},
    {r:R2,a:Math.PI/2+Math.PI/6},
    {r:R1,a:Math.PI/2},
    {r:R2,a:Math.PI+Math.PI/6},
    {r:R2,a:-Math.PI-Math.PI/6},
  ];
  document.querySelectorAll(".planet").forEach((p,i)=>{
    const c=cfgs[i]||{r:R2,a:0};
    const x=cx+Math.cos(c.a)*c.r-half;
    const y=cy+Math.sin(c.a)*c.r-half;
    p.style.transform="translate("+x+"px,"+y+"px)";
  });
}
setTimeout(placePlanets,80);

// PLANET FLOAT
(function(){
  document.querySelectorAll(".planet-inner").forEach((p,i)=>{
    const ph=i*(Math.PI*2/6);
    function tick(time){p.style.transform="translateY("+Math.sin(time*.0009+ph)*6+"px)";requestAnimationFrame(tick);}
    requestAnimationFrame(tick);
  });
})();

// SCROLL FADE
const obs=new IntersectionObserver(entries=>{entries.forEach(e=>{if(e.isIntersecting)e.target.classList.add("show");});},{threshold:0.08});
document.querySelectorAll(".fade-in").forEach(el=>obs.observe(el));
setTimeout(()=>{document.querySelectorAll(".fade-in").forEach(el=>{if(el.getBoundingClientRect().top<window.innerHeight)el.classList.add("show");});},100);
</script>
</body>
</html>