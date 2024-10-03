const angkaAcak = prompt("masukkan angka acak antara 1 dan 100 : ");
let percobaan = 0;
let tebakan = 0;

while (tebakan !== angkaAcak) {
    tebakan = parseInt(prompt("masukkan tebakan : "));
    percobaan++;

    if (isNaN(tebakan) ||  tebakan < 1 || tebakan > 100) {
        console.log("tebakan tidak valid! coba lagi.");
    } else if (tebakan > angkaAcak) {
        console.log("terlalu tinggi! coba lagi.");
    } else if (tebakan < angkaAcak) {
        console.log("terlalu rendah! coba lagi.");
    } else {
        console.log(`Selamat! Kamu berhasil menebak angka ${angkaAcak} dengan benar.`);
        console.log(`Sebanyak ${percobaan}x percobaan.`);
        break;
    }

}