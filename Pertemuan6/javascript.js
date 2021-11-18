let namabuah = [];
let jumlahbuah = [];
let hargatotal = [];

function tampilharga(nama, jumlah) {
  let hargatot = "";
  if (nama === "Mangga") {
    hargatot = 15000 * jumlah;
    return hargatot;
  } else if (nama === "Jambu") {
    hargatot = 13000 * jumlah;
    return hargatot;
  } else if (nama === "Salak") {
    hargatot = 10000 * jumlah;
    return hargatot;
  }
}

function totalharga() {
  let total = 0;
  for (let x of hargatotal) {
    total += x;
  }
  return total;
}

function tambahBarang() {
  let buah = document.getElementById("buah").value;
  let jumlah = document.getElementById("jumlah").value;
  if (jumlah !== "") {
    namabuah.push(buah);
    jumlahbuah.push(jumlah);
    let harga = tampilharga(buah, jumlah);
    hargatotal.push(harga);
    document.getElementById("jumlah").value = "";
    show();
  }
}

function show() {
  let html = "";
  for (let i = 0; i < namabuah.length; i++) {
    html += "<tr> <td>" + (i + 1) + "</td><td>" + namabuah[i] + "</td><td>" + jumlahbuah[i] + "</td><td> Rp. " + hargatotal[i] + "</td></tr>";
  }
  let tampil = document.getElementById("tampil");
  tampil.innerHTML = "<table border=1> <tr><th>No</th><th>Nama Buah</th><th>Jumlah</th><th>Harga</th>" + html + "</table";
  document.getElementById("total").innerHTML = "Harga Total = Rp. " + totalharga();
}
