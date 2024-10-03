
function HariBerikut(hariSekarang, HariKeDepan) {
  const hari = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
  const indeksHariSekarang = hari.indexOf(hariSekarang);
  const indeksHariBerikut = (indeksHariSekarang + HariKeDepan) % 7;
  return hari[indeksHariBerikut];
}

const hariSekarang = 'Jumat';
const jumlahHariKeDepan = 1000;
const hariBerikut = HariBerikut(hariSekarang, jumlahHariKeDepan);
console.log(`Hari ini adalah ${hariSekarang}, maka ${jumlahHariKeDepan} hari yang akan datang adalah hari ${hariBerikut}`);
