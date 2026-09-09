<footer class="e-footer">
<div class="wrap e-footer-top">
  <div class="e-footer-brand">
    <a class="e-footer-logo" href="index.php"><img alt="S.R Legal Services" src="assets/images/logo.png"/></a>
    <div class="e-footer-tagline">Privacy. Governance. Growth.</div>
    <p>Simple privacy advice for growing businesses. Practical support across data protection, privacy governance and responsible AI.</p>
  </div>
  <div class="e-footer-col">
    <h4>Services</h4>
    <a href="gdpr-health-check.php">GDPR Health Check</a>
    <a href="business-privacy-essentials.html">Business Privacy Essentials</a>
    <a href="website-privacy-review.html">Website Compliance Review</a>
    <a href="employee-privacy-pack.html">Employee Privacy Pack</a>
    <a href="ai-for-business-review.html">AI Governance</a>
    <a href="ongoing-privacy-support.html">Ongoing Privacy Support</a>
  </div>
  <div class="e-footer-col">
    <h4>Company</h4>
    <a href="index.php">Home</a>
    <a href="about.html">About</a>
    <a href="insights.php">Insights</a>
    <a href="case-studies.php">Case studies</a>
    <a href="pricing.php">Pricing</a>
    <a href="contact.html">Contact</a>
  </div>
  <div class="e-footer-col">
    <h4>Speak with us</h4>
    <a href="tel:+447778778153">07778 778153</a>
    <a href="mailto:info@srlegalservices.co.uk">info@srlegalservices.co.uk</a>
  </div>
</div>

<div class="wrap e-footer-company">
  <div class="e-footer-company-head">
    <div>
      <span class="e-footer-company-kicker">Company information</span>
      <strong>Copyright &copy; 2026 S.R Legal Services. All rights reserved.</strong>
    </div>
  </div>
  <div class="e-footer-company-details">
    <div class="e-footer-detail e-footer-detail-wide">
      <span class="e-footer-detail-label">Trading name</span>
      <p>S.R Legal Services is the trading name of S.R Consulting Services Limited, a company registered in England and Wales.</p>
    </div>
    <div class="e-footer-detail">
      <span class="e-footer-detail-label">Registered office</span>
      <p>124 City Road, London, EC1V 2NX</p>
    </div>
    <div class="e-footer-detail">
      <span class="e-footer-detail-label">Company number</span>
      <p>11276408</p>
    </div>
    <div class="e-footer-detail">
      <span class="e-footer-detail-label">VAT number</span>
      <p>436104131</p>
    </div>
  </div>
</div>

<div class="wrap e-footer-bottom">
  <span>&copy; 2026 S.R Legal Services. All rights reserved.</span>
  <a class="e-footer-credit" href="https://techclues.co.uk/" rel="noopener" target="_blank">Designed &amp; Developed by <span class="e-footer-credit-name">Techclues Ltd</span></a>
  <span><a href="privacy.html">Privacy</a> &middot; <a href="terms.html">Terms</a> &middot; <a href="cookies.html">Cookies</a> &middot; <button class="cookie-settings-link" data-cookie-settings="" type="button">Cookie settings</button> &middot; <a href="accessibility.html">Accessibility</a></span>
</div>
</footer>
<script src="assets/js/cookie-consent.js"></script>
<script>
document.documentElement.classList.add('js');
document.addEventListener('DOMContentLoaded',()=>{
 const menuBtn=document.querySelector('[data-menu-button]');
 const mobileMenu=document.querySelector('[data-mobile-menu]');
 if(menuBtn&&mobileMenu){menuBtn.addEventListener('click',()=>{const open=mobileMenu.classList.toggle('open');menuBtn.setAttribute('aria-expanded',open?'true':'false')})}

 document.querySelectorAll('.editorial .e-index').forEach(function(list){
   var rows=Array.prototype.slice.call(list.querySelectorAll(':scope > .e-row'));
   if(rows.length<2) return;
   var i=0, paused=false, started=false;
   function activate(n){ rows.forEach(function(r,idx){ r.classList.toggle('auto', idx===n); }); }
   function tick(){ if(paused) return; activate(i); i=(i+1)%rows.length; }
   function start(){ if(started) return; started=true; tick(); setInterval(tick,1600); }
   rows.forEach(function(r){
     r.addEventListener('mouseenter',function(){ paused=true; rows.forEach(function(rr){ rr.classList.remove('auto'); }); });
     r.addEventListener('mouseleave',function(){ paused=false; });
   });
   var listIo=new IntersectionObserver(function(entries){
     entries.forEach(function(entry){ if(entry.isIntersecting){ start(); listIo.unobserve(list); } });
   },{threshold:.3});
   listIo.observe(list);
 });

 const heroSlider=document.querySelector('[data-hero-slider]');
 if(heroSlider){
   var hSlides=Array.prototype.slice.call(heroSlider.querySelectorAll('[data-hero-slide]'));
   var hDotsWrap=heroSlider.querySelector('[data-hero-dots]');
   var hIdx=hSlides.findIndex(function(s){return s.classList.contains('is-active');});
   if(hIdx<0) hIdx=0;
   var hTimer=null;
   hSlides.forEach(function(s,i){
     var b=document.createElement('button');
     if(i===hIdx) b.classList.add('is-active');
     b.setAttribute('aria-label','Show slide '+(i+1));
     b.addEventListener('click',function(){ hGo(i); hReset(); });
     hDotsWrap.appendChild(b);
   });
   var hDots=Array.prototype.slice.call(hDotsWrap.children);
   var hAnimating=false;
   function hGo(n,dir){
     n=(n+hSlides.length)%hSlides.length;
     if(n===hIdx||hAnimating) return;
     dir=dir||1;
     var cur=hSlides[hIdx];
     var nxt=hSlides[n];
     hAnimating=true;
     nxt.style.transition='none';
     nxt.style.visibility='visible';
     nxt.style.transform='translateX('+(dir*100)+'%)';
     nxt.getBoundingClientRect();
     nxt.style.transition='';
     requestAnimationFrame(function(){
       cur.style.transform='translateX('+(-dir*100)+'%)';
       nxt.style.transform='translateX(0)';
       nxt.classList.add('is-active');
     });
     hDots[hIdx].classList.remove('is-active');
     hIdx=n;
     hDots[hIdx].classList.add('is-active');
     setTimeout(function(){
       cur.classList.remove('is-active');
       cur.style.visibility='';
       cur.style.transform='';
       hAnimating=false;
     },900);
   }
   function hNext(){ hGo(hIdx+1,1); }
   function hPrev(){ hGo(hIdx-1,-1); }
   function hReset(){ if(hTimer) clearInterval(hTimer); hTimer=setInterval(hNext,2600); }
   var hPrevBtn=heroSlider.querySelector('[data-hero-prev]');
   var hNextBtn=heroSlider.querySelector('[data-hero-next]');
   if(hPrevBtn) hPrevBtn.addEventListener('click',function(){ hPrev(); hReset(); });
   if(hNextBtn) hNextBtn.addEventListener('click',function(){ hNext(); hReset(); });
   heroSlider.addEventListener('mouseenter',function(){ if(hTimer) clearInterval(hTimer); });
   heroSlider.addEventListener('mouseleave',hReset);
   hReset();
 }

 const testiTrack=document.querySelector('[data-testi-track]');
 if(testiTrack){
   var cards=Array.prototype.slice.call(testiTrack.querySelectorAll('.e-testi-card'));
   var dotsWrap=document.querySelector('[data-testi-dots]');
   var idx=cards.findIndex(function(c){return c.classList.contains('is-active');});
   if(idx<0) idx=0;
   var timer=null;
   cards.forEach(function(c,i){
     var b=document.createElement('button');
     if(i===0) b.classList.add('is-active');
     b.setAttribute('aria-label','Show testimonial '+(i+1));
     b.addEventListener('click',function(){ go(i); reset(); });
     dotsWrap.appendChild(b);
   });
   var dots=Array.prototype.slice.call(dotsWrap.children);
   function go(n){
     cards[idx].classList.remove('is-active');
     dots[idx].classList.remove('is-active');
     idx=(n+cards.length)%cards.length;
     cards[idx].classList.add('is-active');
     dots[idx].classList.add('is-active');
   }
   function next(){ go(idx+1); }
   function prev(){ go(idx-1); }
   function reset(){ if(timer) clearInterval(timer); timer=setInterval(next,2000); }
   var prevBtn=document.querySelector('[data-testi-prev]');
   var nextBtn=document.querySelector('[data-testi-next]');
   if(prevBtn) prevBtn.addEventListener('click',function(){ prev(); reset(); });
   if(nextBtn) nextBtn.addEventListener('click',function(){ next(); reset(); });
   testiTrack.addEventListener('mouseenter',function(){ if(timer) clearInterval(timer); });
   testiTrack.addEventListener('mouseleave',reset);
   reset();
 }

 const headerEl=document.querySelector('.header');
 if(headerEl){
   const setScrolled=()=>headerEl.classList.toggle('scrolled',window.scrollY>10);
   setScrolled();
   window.addEventListener('scroll',setScrolled,{passive:true});
 }
 const io=new IntersectionObserver(entries=>entries.forEach(e=>{if(e.isIntersecting){e.target.classList.add('in');io.unobserve(e.target)}}),{threshold:.1,rootMargin:'0px 0px -5% 0px'});
 document.querySelectorAll('.rise,.slide-left,.slide-right,.slide-up-scale').forEach(el=>io.observe(el));
 document.querySelectorAll('.fitem').forEach(function(it){
   var q=it.querySelector('.fq');
   var pl=it.querySelector('.pl');
   if(pl)pl.textContent=it.classList.contains('open')?'−':'+';
   if(q)q.addEventListener('click',function(){
     var open=it.classList.toggle('open');
     if(pl)pl.textContent=open?'−':'+';
   });
 });

 const counters=document.querySelectorAll('[data-counter]');
 if(counters.length){
   const countIo=new IntersectionObserver(entries=>entries.forEach(entry=>{
     if(!entry.isIntersecting) return;
     const el=entry.target;
     countIo.unobserve(el);
     const target=parseInt(el.getAttribute('data-target'),10)||0;
     const prefix=el.getAttribute('data-prefix')||'';
     const suffix=el.getAttribute('data-suffix')||'';
     const duration=1400;
     const start=performance.now();
     (function tick(now){
       const p=Math.min((now-start)/duration,1);
       const eased=1-Math.pow(1-p,3);
       el.textContent=prefix+Math.round(eased*target)+suffix;
       if(p<1) requestAnimationFrame(tick);
     })(start);
   }),{threshold:.4});
   counters.forEach(el=>countIo.observe(el));
 }
});
</script>
