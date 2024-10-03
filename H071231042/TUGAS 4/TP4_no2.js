function hitungDiskon() {
    let hargaBarang = prompt("Masukkan Harga Barang: ");
    let jenisBarang = prompt("Masukkan Jenis Barang: ");
    // if (jenisBarang == "Elektronik") {
    //     diskon = 10;    
    // } else if (jenisBarang == "Pakaian") {
    //     diskon = 20;
    // } else if (jenisBarang == "Makanan") {
    //     diskon = 5;
    // } else {
    //     diskon = 0;
    // }

    switch (jenisBarang) {
        case "Elektronik":  
            diskon = 10;
            break;
        case "Pakaian": 
            diskon = 20;
            break;
        case "Makanan": 
            diskon = 5;
            break;
        case "Minuman": 
            diskon = 50;
            break;
        default:
            diskon = 0;
            break;
    }
    hargaDiskon = hargaBarang - (hargaBarang * diskon / 100);
    console.log("Harga Awal : " + hargaBarang);
    console.log("Diskon : " + diskon + "%");
    console.log("Harga Setelah Diskon : " + hargaDiskon);
    
}


