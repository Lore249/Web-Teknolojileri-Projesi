/* Genel RegEx’ler */
const epostaDesenGenel =
  /^[a-z0-9.!#$%&'*+/=?^_`{|}~-]+@([a-z0-9-]+\.)+[a-z]{2,}$/i;
const telefonDesen = /^[0-9]{10,11}$/;

/* ---- Düz JavaScript ile anlık kontrol butonu ---- */
function dogrulaJS() {           // hâlâ “JS ile Kontrol” butonunda kullanılıyor
  return temelKontrol("JS");
}

/* ---- Form gönderilmeden önce otomatik kontrol ---- */
function gonderOncesiKontrol() {  // form onsubmit’te çağrılır
  return temelKontrol("Gönder");
}

/* Ortak doğrulama mantığı */
function temelKontrol(kaynak) {
  const frm      = document.getElementById('iletisimFormu');
  const adSoyad  = frm.ad_soyad.value.trim();
  const eposta   = frm.eposta.value.trim();
  const telefon  = frm.telefon.value.trim();
  const konu     = frm.konu.value;
  const mesaj    = frm.mesaj.value.trim();

  /* Boş alan kontrolü */
  if (!adSoyad || !eposta || !telefon || !konu || !mesaj) {
    alert(kaynak + ": Lütfen tüm alanları doldurun!");
    return false;
  }

  /* E‑posta & telefon kontrolü */
  if (!epostaDesenGenel.test(eposta)) {
    alert(kaynak + ": Geçerli bir e‑posta adresi girin!");
    return false;
  }
  if (!telefonDesen.test(telefon)) {
    alert(kaynak + ": Telefon 10‑11 rakamdan oluşmalı!");
    return false;
  }

  /* Kontrol geçti */
  if (kaynak !== "Gönder")          // manuel kontrolde yeşil tik mesajı kalsın
      alert(kaynak + ": Form geçerli görünüyor ✅");
  return true;
}


