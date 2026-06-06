# BonBon Cafe — Bukhara

BonBon Cafe uchun Laravel asosidagi sayt. Hozirgi loyiha landing page, rasmli menyu sahifasi va stol QR sahifasidan iborat.

Bu README UI'ni qaytadan chizish uchun loyiha briefiga o'xshab tayyorlandi: statik matnlar, kontaktlar, linklar, sahifalar, assetlar va menyu bo'yicha g'oyalar shu yerda jamlangan.

## Brend

- Nomi: BonBon / BonBon Cafe
- Joylashuv: Bukhara, Uzbekistan
- Yo'nalish: European style cafe, patisserie, coffee
- Tagline: PATISSERIE & COFFEE
- QR footer matni: YAXSHI KUN - YAXSHI QAHVA - YAXSHI MOOD
- Hero salomlashuv: Xush kelibsiz BonBon Cafe
- Asosiy CTA: Посмотреть меню / Menyuni ko'rish
- Ikkinchi CTA: Найти нас / Bizni topish

## Asosiy Statistika

- 2019 — tashkil topgan yil
- 2 — filial
- 4.8★ — reyting
- 50k+ — mehmon

## About Matnlari

### Qisqa Tavsif

BonBon — Buxoro markazida joylashgan zamonaviy, Yevropa uslubidagi kafe. 2019-yildan beri aromatli qahva, yangi pishiriqlar va iliq atmosferani birlashtirgan joy sifatida ishlaydi.

### Ruscha Matnlar

Кто мы:

BonBon — современное кафе европейского стиля, рождённое в самом сердце Бухары. С 2019 года мы создаём пространство, где ароматный кофе, свежая выпечка и тёплая атмосфера объединяются в единое особенное настроение.

Наша философия:

Каждая чашка кофе тщательно отбирается и готовится с вниманием к деталям. Каждый десерт создаётся свежим каждый день. Мы верим, что качество в мелочах делает жизнь прекраснее.

Признание гостей:

BonBon входит в число любимых кафе Бухары на TripAdvisor, Yandex Maps и Google. Наши гости называют это место своим вторым домом, куда хочется возвращаться снова и снова.

Footer tavsifi:

В центре Бухары. Европейская кофейная атмосфера.

## Kontaktlar

### Asosiy Aloqa

- Telefon: +998 97 300 45 68
- Tel link: tel:+998973004568
- WhatsApp: https://wa.me/998973004568
- Telegram bot: https://t.me/bonbon_uz_bot
- Telegram kanal/profil: https://t.me/Bon_Bon_Bukhara
- Instagram: https://www.instagram.com/bistro_by_bonbon/

### Qo'shimcha Raqam

- Filiallar uchun: +998 93 383 11 33

### Kontakt Blok Matnlari

- Свяжитесь с нами
- Контакты
- Buyurtma va savollar uchun
- Qo'ng'iroq qilish
- Har kuni 08:00 - 23:00

## Filiallar Va Manzillar

### BonBon Islom Karimov

- Manzil: Islom Karimov ko'chasi, 2, Buxoro
- Ish vaqti: 08:00 - 23:00
- Telefon: +998 97 300 45 68
- Google Maps: https://www.google.com/maps/place/Bon+Bon+Caf%C3%A9+%26+Pastry/@39.7722218,64.4278325,18z/data=!4m10!1m2!2m1!1z0JHQvtC9INCR0L7QvSA!3m6!1s0x3f500607e2684b0f:0xa350171fc6ea1b0f!8m2!3d39.7720814!4d64.4309303!15sCg3QkdC-0L0g0JHQvtC9Wg8iDdCx0L7QvSDQsdC-0L2SAQRjYWZl4AEA!16s%2Fg%2F11fxc1q377?entry=ttu&g_ep=EgoyMDI2MDUyMC4wIKXMDSoASAFQAw%3D%3D
- Google review/search: https://www.google.com/maps/place/Bon+Bon+Caf%C3%A9+%26+Pastry/@39.7720855,64.4283554,17z
- Yandex reviews: https://yandex.uz/maps/org/83177594825/reviews/?ll=64.435159%2C39.736119&z=16
- 2GIS: https://2gis.uz/bukhara/firm/70000001083516500
- 2GIS reviews: https://2gis.uz/bukhara/firm/70000001083516500/tab/reviews?m=64.433056%2C39.772833%2F16.7
- TripAdvisor: https://www.tripadvisor.com/Restaurant_Review-g303936-d19139820-Reviews-Bon_Bon-Bukhara_Bukhara_Province.html
- TripAdvisor review: https://www.tripadvisor.com/UserReviewEdit-g303936-d19139820-Bon_Bon-Bukhara_Bukhara_Province.html

### BonBon Buxoro Filiallari

- Manzil: Buxoro shahri bo'ylab bir nechta filiallar
- Ish vaqti: filialga qarab farq qiladi
- Telefon: +998 93 383 11 33
- Google search: https://www.google.com/maps/search/?api=1&query=Bon%20Bon%20Bukhara
- Yandex search: https://yandex.uz/maps/?text=Bon%20Bon%20Bukhara
- 2GIS search: https://2gis.uz/bukhara/search/Bon%20Bon
- TripAdvisor: https://www.tripadvisor.com/Restaurant_Review-g303936-d19139820-Reviews-Bon_Bon-Bukhara_Bukhara_Province.html

### Footerdagi Ish Vaqtlari

- BonBon Central: 09:00 – 23:00
- BonBon Ark: 08:00 – 22:00

Eslatma: asosiy manzil blokida 08:00 - 23:00 yozilgan, footerda esa Central 09:00 – 23:00. UI qayta chizishda buni egasi bilan aniqlab bir xil qilish kerak.

## Sahifalar Va Route'lar

- `/` — landing page, view: `resources/views/admin/bonbon.blade.php`
- `/menu` — rasmli menyu sahifasi, view: `resources/views/menu/menu.blade.php`
- `/qr/{table?}` — stol QR sahifasi, view: `resources/views/qr/qr_code.blade.php`

Controller: `app/Http/Controllers/PageController.php`

QR route stol raqamini optional qabul qiladi. Masalan: `/qr/12`. Telegram bot linki stol bilan kelganda shunday hosil bo'ladi:

```text
https://t.me/bonbon_uz_bot?start=table_12
```

## Hozirgi Menyu Sahifasi

Menyu sahifasi rasm gallery formatida ishlaydi. Til tanlanganda umumiy menyu rasmlari ustiga tanlangan til rasmlari qo'shiladi.

### Til Variantlari

- O'zbekcha: `uz`
- Русский: `ru`
- English: `en`

### Sarlavhalar

- uz: Bonbon kafesi menyu
- ru: Меню кафе Bonbon
- en: Bonbon Café Menu

### Menyu Rasmlari

Umumiy:

- `public/menyu/menyu_g_1.jpg`
- `public/menyu/menyu_g_2.jpg`

O'zbekcha:

- `public/menyu/uzb_1.jpg`
- `public/menyu/uzb_2.jpg`

Ruscha:

- `public/menyu/rus_1.jpg`
- `public/menyu/rus_2.jpg`

Inglizcha:

- `public/menyu/eng_1.jpg`
- `public/menyu/eng_2.jpg`

## QR Sahifa Matnlari

- BonBon Cafe
- PATISSERIE & COFFEE
- Xush kelibsiz
- QR orqali kirdingiz
- Kerakli bo'limni tanlang
- Saytga kirish
- Rasmiy sahifa
- Telegram bot
- Tezkor buyurtma
- YAXSHI KUN - YAXSHI QAHVA - YAXSHI MOOD

## Assetlar

### Logo Va Dekor

- `public/logo.png`
- `public/images/logo-bonbon.svg`
- `public/images/bonbon-badge.png`
- `public/images/croissant-real.png`
- `public/images/coffee-cup.svg`
- `public/images/croissant.svg`
- `public/images/leaf.svg`
- `public/images/paper-texture.svg`
- `public/images/vase-leaves.svg`
- `public/images/wood-plate.svg`

### Foto Assetlar

- `public/1.1.jpg`
- `public/1.2.jpg`
- `public/2.1.jpg`
- `public/2.2.jpg`
- `public/bon1.jpg`
- `public/bon_bonik.jpg`
- `public/color.jpg`
- `public/foto.jpg`
- `public/IMG_6377.JPG`
- `public/IMG_6378.JPG`
- `resources/img/bon1.jpg`
- `resources/img/bon_bonik.jpg`
- `resources/img/IMG_6377.JPG`
- `resources/img/IMG_6378.JPG`

## UI Qayta Chizish Uchun Menyu G'oyalari

### Asosiy Navbar

Tavsiya qilingan tartib:

- Bosh sahifa
- Biz haqimizda
- Menyu
- Filiallar
- Sharhlar
- Kontakt
- Buyurtma / Telegram bot

Desktopda CTA tugma alohida ajralib tursin: `Buyurtma berish` yoki `Menyuni ko'rish`. Mobilda esa pastki sticky bar yaxshi ishlaydi: `Menyu`, `Filiallar`, `Qo'ng'iroq`, `Bot`.

### Landing Page Bo'limlari

1. Hero: logo, katta BonBon nomi, qisqa tagline, menyu va manzil CTA.
2. Quick actions: Menyu, Qo'ng'iroq, WhatsApp, Telegram, Manzil.
3. Story: qisqa about matni va 2019 / 2 filial / 4.8 reyting statistikasi.
4. Featured menu: qahva, desert, nonushta, ichimliklar uchun 4 ta kategoriya.
5. Filiallar: har bir filial kartasi, ish vaqti, telefon, Google/Yandex/2GIS tugmalari.
6. Reviews: TripAdvisor, Google, Yandex reytinglariga linklar.
7. Contact/footer: telefon, social linklar, ish vaqti, copyright.

### Menu Sahifasi Uchun G'oyalar

Hozir menyu faqat rasm sifatida ko'rsatilgan. Chiroyliroq UI uchun:

- yuqorida til tanlash: UZ / RU / EN
- kategoriya tablari: Breakfast, Coffee, Tea, Desserts, Drinks, Main dishes
- sticky search input: taom nomi bo'yicha qidirish
- rasmli menyuni saqlab qolish, lekin `PDF/image view` sifatida alohida tugmada berish
- har bir taom kartasida nom, qisqa tavsif, narx, allergen/halol belgisi
- mobil uchun pastda `Cart / Bot orqali buyurtma` sticky tugmasi
- stol QR orqali kirganda stol raqami ko'rinsin: `Stol #12`

### Visual Mood

- BonBon uchun iliq, premium, ammo juda og'ir bo'lmagan kafe uslubi mos.
- Ranglar: cream/off-white fon, deep espresso matn, caramel/gold aksent, ozgina orange aksent.
- UI juda bir xil jigarrang bo'lib ketmasin; ko'proq oq joy, foto, typografiya va nozik aksent ishlatish yaxshi.
- Font juftligi: serif display heading + sans-serif body.
- Hero uchun real kafe/foto assetlardan foydalanish yaxshiroq.

## Texnik Stack

- PHP: ^8.1
- Laravel: ^10.10
- QR: simplesoftwareio/simple-qrcode
- Auth/permission paket: spatie/laravel-permission
- Frontend build: Laravel Mix 5
- Frontend dependencylar: Bootstrap 4, jQuery, React 16, Sass

## Ishga Tushirish

```bash
composer install
cp .env.example .env
php artisan key:generate
php artisan serve
```

Frontend build kerak bo'lsa:

```bash
npm install
npm run dev
```

## Eslatmalar

- `resources/views/admin/bonbon.blade.php` ichida katta inline font/base64 bor. UI qayta chizilganda fontlarni alohida `public/fonts` yoki CDN orqali ulash yaxshiroq.
- `resources/views/menu/menu.blade.php` hozir rasmlar bilan ishlaydi, narxlar alohida data sifatida ajratilmagan.
- Kontakt Telegram linklari ikki xil: `bonbon_uz_bot` va `Bon_Bon_Bukhara`. UI'da vazifasini aniq ajratish kerak: biri buyurtma bot, biri aloqa/kanal.
- Ish vaqtlari bir nechta joyda turlicha yozilgan. Dizayn oldidan tasdiqlab olish kerak.
