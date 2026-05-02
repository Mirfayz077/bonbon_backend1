<!DOCTYPE html>
<html lang="uz">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Menyu</title>

  <!-- Font -->
  <link href="https://fonts.googleapis.com/css2?family=Outfit:wght@400;600&display=swap" rel="stylesheet">

  <style>
    body {
      margin: 0;
      font-family: 'Outfit', sans-serif;
      background: #FF6F1E;
      color: #fff;
      overflow-x: hidden;
    }

    /* Til tanlash */
    .language-selector {
      position: fixed;
      top: 15px;
      right: 15px;
      z-index: 1000;
    }

    .language-selector select {
      background: rgba(0,0,0,0.6);
      color: #fff;
      padding: 6px 12px;
      border-radius: 6px;
      border: none;
      font-size: 1rem;
      cursor: pointer;
    }

    /* Sarlavha */
    .page-title {
      text-align: center;
      font-size: 2.2rem;
      font-weight: bold;
      margin-top: 60px;
      margin-bottom: 20px;
      text-transform: uppercase;
    }

    /* Scrollable gallery */
    .gallery {
      width: 100%;
    }

    .gallery img {
      width: 100%;
      height: 100vh;
      object-fit: contain;
      background: #FF6F1E;
      display: block;
      cursor: pointer;
    }

    .gallery img:hover {
      transform: scale(1.02);
    }

    /* Modal fullscreen */
    .modal {
      display: none;
      position: fixed;
      z-index: 2000;
      left: 0;
      top: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0,0,0,0.9);
      justify-content: center;
      align-items: center;
    }

    .modal img {
      max-width: 95%;
      max-height: 95%;
      border-radius: 10px;
    }

    .close-btn {
      position: absolute;
      top: 20px;
      right: 30px;
      font-size: 2rem;
      color: white;
      text-decoration: none;
      font-weight: bold;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .page-title {
        font-size: 1.6rem;
        margin-top: 50px;
      }
    }
  </style>
</head>
<body>

  <!-- Til tanlash -->
  <div class="language-selector">
    <select id="languageSwitcher">
      <option value="uz">O‘zbekcha</option>
      <option value="ru">Русский</option>
      <option value="en">English</option>
    </select>
  </div>

  <!-- Sarlavha -->
  <h1 class="page-title" id="pageTitle">Bonbon kafesi menyu</h1>

  <!-- Rasmlar -->
  <div class="gallery" id="menuGallery"></div>

  <!-- Modal -->
  <div id="imgModal" class="modal">
    <a href="#" class="close-btn">&times;</a>
    <img id="modalImage" src="" alt="Rasm">
  </div>

  <script>
    const gallery = document.getElementById("menuGallery");
    const modal = document.getElementById("imgModal");
    const modalImg = document.getElementById("modalImage");
    const pageTitle = document.getElementById("pageTitle");

    // Doimiy menyu rasmlar
    const baseImages = ["menyu_g_1.jpg", "menyu_g_2.jpg"];

    // Tilga qarab qo'shiladigan rasmlar
    const langImages = {
      uz: ["uzb_1.jpg", "uzb_2.jpg"],
      ru: ["rus_1.jpg", "rus_2.jpg"],
      en: ["eng_1.jpg", "eng_2.jpg"]
    };

    // Tilga qarab sarlavha
    const titles = {
      uz: "Bonbon kafesi menyu",
      ru: "Меню кафе Bonbon",
      en: "Bonbon Café Menu"
    };

    function loadImages(lang) {
      gallery.innerHTML = "";
      pageTitle.textContent = titles[lang]; // sarlavha almashtirish
      const allImages = [...baseImages, ...langImages[lang]];
      allImages.forEach(img => {
        const el = document.createElement("img");
        el.src = `menyu/${img}`;
        el.onclick = () => {
          modal.style.display = "flex";
          modalImg.src = el.src;
        };
        gallery.appendChild(el);
      });
    }

    // Boshlang‘ich yuklash
    loadImages("uz");

    // Til almashtirganda
    document.getElementById("languageSwitcher").addEventListener("change", function () {
      loadImages(this.value);
    });

    // Modal yopish
    modal.addEventListener("click", function (e) {
      if (e.target === modal || e.target.classList.contains("close-btn")) {
        modal.style.display = "none";
      }
    });
  </script>
</body>
</html>
