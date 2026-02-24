@extends('layouts.app')

@section('content')

<style>
/* FONT LATIN & ARAB */
@import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;800&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Amiri:wght@400;700&display=swap');

/* ========== HOME ========== */
#home {
    height: 90vh;
    background: url('{{ asset("assets/img/bg-tahfidz.jpg") }}') center/cover no-repeat;
    display: flex;
    align-items: center;
    justify-content: center;
    text-align: center;
    color: white;
    position: relative;
}

#home::before {
    content: "";
    position: absolute;
    inset: 0;
    background: rgba(0,0,0,0.5);
}

#home div {
    position: relative;
    z-index: 1;
}

.bismillah {
    font-family: 'Amiri', serif;
    font-size: 32px;
    margin-bottom: 15px;
}

.ayat {
    font-family: 'Amiri', serif;
    font-size: 22px;
    margin-top: 10px;
    opacity: 0.9;
}

/* ========== ABOUT ========== */
#about {
    padding: 60px 20px;
    background: #f9f9f9;
    text-align: center;
    font-family: 'Poppins', sans-serif;
}

#about h2 {
    font-size: 32px;
    font-weight: 800;
    margin-bottom: 25px;
    color: #2c3e50;
}

#about h2::after {
    content: "";
    width: 80px;
    height: 4px;
    background: #27ae60;
    display: block;
    margin: 10px auto 0;
    border-radius: 5px;
}

#about p {
    max-width: 900px;
    margin: auto;
    font-size: 17px;
    line-height: 1.9;
    font-weight: 500;
    color: #333;
    text-align: justify;
}

/* ========== PROGRAM ========== */
#program {
    padding: 60px 20px;
}

.cards {
    display: grid;
    grid-template-columns: repeat(auto-fit,minmax(250px,1fr));
    gap: 20px;
}

.card {
    background: #ffffff;
    padding: 25px;
    border-radius: 15px;
    box-shadow: 0 5px 15px rgba(0,0,0,0.08);
    transition: 0.3s;
}

.card:hover {
    transform: translateY(-5px);
}

.card h3 {
    color: #27ae60;
}

/* ========== GALERI ========== */
.galeri-grid {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(250px,1fr));
    gap: 20px;
}

.galeri-grid img {
    width: 100%;
    height: 220px;
    object-fit: cover;
    border-radius: 12px;
    cursor: pointer;
    transition: 0.3s;
}

.galeri-grid img:hover {
    transform: scale(1.05);
}

/* ========== MODAL IMAGE ========== */
.modal-img {
    display: none;
    position: fixed;
    z-index: 9999;
    padding-top: 60px;
    left: 0; top: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0,0,0,0.9);
}

.modal-img img {
    margin: auto;
    display: block;
    max-width: 90%;
    max-height: 80%;
    border-radius: 10px;
}

.close-modal {
    position: absolute;
    top: 20px;
    right: 35px;
    color: white;
    font-size: 40px;
    font-weight: bold;
    cursor: pointer;
}

/* ========== KONTAK ========== */
#kontak {
    padding: 60px 20px;
    background: #1e272e;
    color: white;
    text-align: center;
}

#kontak a {
    color: #2ecc71;
    text-decoration: none;
}
</style>

<section id="home">
    <div>
        <div class="bismillah">بِسْمِ اللّٰهِ الرَّحْمٰنِ الرَّحِيْمِ</div>

        <h2>"Rumah Tahfidz Sulthini El Barthaq"</h2>
        <p>Mencetak Generasi Qurani, Berakhlak Mulia dan Mandiri</p>

        <div class="ayat">وَخَيْرُكُمْ مَنْ تَعَلَّمَ الْقُرْآنَ وَعَلَّمَهُ</div>
        <div class="ayat">"Sebaik-baik kalian adalah yang mempelajari Al-Qur’an dan mengajarkannya"</div>
    </div>
</section>

<section id="about">
    <h2>Tentang Kami</h2>
    <p>
    Rumah Tahfidz Sulthoni Elbarthaq didirikan pada tanggal 23 November 2024. 
    Pendiri lembaga ini adalah Drs. H. Zahrudin Sulthoni, M.MA. 
    Rumah Tahfidz ini merupakan lembaga pendidikan Islam yang berfokus pada 
    pembinaan hafalan Al-Qur’an, perbaikan bacaan (tahsin), serta pembentukan adab dan akhlak mulia.
    Kami berkomitmen mencetak generasi Qurani yang cinta kepada Al-Qur’an, 
    berkepribadian islami, serta mampu mengamalkan nilai-nilai Al-Qur’an dalam kehidupan sehari-hari.
    </p>
</section>

<section id="program">
    <h2 style="text-align:center;margin-bottom:30px;">Program Kami</h2>
    <div class="cards">
        <div class="card">
            <h3>Tahfidz Qur'an</h3>
            <p>Program menghafal Al-Qur’an dengan metode bertahap dan terarah.</p>
        </div>
        <div class="card">
            <h3>Tahsin</h3>
            <p>Perbaikan bacaan Al-Qur’an sesuai kaidah tajwid.</p>
        </div>
        <div class="card">
            <h3>Adab & Akhlak</h3>
            <p>Pembinaan karakter islami, kedisiplinan, dan tanggung jawab santri.</p>
        </div>
    </div>
</section>

<section id="galeri">
    <h2 style="text-align:center;margin-bottom:30px;">Galeri Kegiatan</h2>
    <div class="galeri-grid">
        <img src='{{ asset("assets/img/hafalan1.jpeg") }}' onclick="openModal(this.src)">
        <img src='{{ asset("assets/img/sholat2.jpeg") }}' onclick="openModal(this.src)">
        <img src='{{ asset("assets/img/kajian3.jpeg") }}' onclick="openModal(this.src)">
        <img src='{{ asset("assets/img/olahraga4.jpg") }}' onclick="openModal(this.src)">
        <img src='{{ asset("assets/img/tahsin5.jpg") }}' onclick="openModal(this.src)">
        <img src='{{ asset("assets/img/murojaah6.jpeg") }}' onclick="openModal(this.src)">
        <img src='{{ asset("assets/img/kerjabakti7.jpeg") }}' onclick="openModal(this.src)">
        <img src='{{ asset("assets/img/mengenal8.jpeg") }}' onclick="openModal(this.src)">
    </div>
</section>

<div id="modalImage" class="modal-img">
    <span class="close-modal" onclick="closeModal()">&times;</span>
    <img id="modalContent">
</div>

<section id="kontak">
    <h2>Hubungi Kami</h2>
    <p><i class="fa-solid fa-location-dot"></i> Rt05 Rw05 Desa Banjaranyar, Kecamatan Balapulang, Kabupaten Tegal, Jawa Tengah</p>
    <p><i class="fa-brands fa-whatsapp"></i> <a href="https://wa.me/6288225439455" target="_blank">0882-2543-9455</a></p>
    <p><i class="fa-solid fa-envelope"></i> <a href="mailto:alfaruqiaverroes@gmail.com">alfaruqiaverroes@gmail.com</a></p>
    <p><i class="fa-brands fa-instagram"></i> <a href="https://www.instagram.com/avtrixy23" target="_blank">@sulthini_el_barthaq</a></p>
    <p><i class="fa-brands fa-youtube"></i> <a href="https://www.youtube.com/@averroesalfaruqi" target="_blank">Sulthini El Barthaq</a></p>
</section>

<script>
function openModal(src) {
    document.getElementById("modalImage").style.display = "block";
    document.getElementById("modalContent").src = src;
}

function closeModal() {
    document.getElementById("modalImage").style.display = "none";
}
</script>

@endsection





