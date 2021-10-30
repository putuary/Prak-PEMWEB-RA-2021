// Fungsi untuk memilih pilihan fungsi gelap/terang
function pilihtema() {
  let hasil = document.getElementById("tema").value;
  if (hasil === "terang") {
    lightMode();
  } else {
    darkMode();
  }
}

// Fungsi darkmode yang membuat background menjadi hitam dan font menjadi putih
function darkMode() {
  let konten = document.getElementById("konten");

  konten.style.background = "black";
  konten.style.color = "white";
}

// Fungsi lightmode yang membuat background menjadi putih dan font menjadi hitam
function lightMode() {
  let konten = document.getElementById("konten");

  konten.style.background = "white";
  konten.style.color = "black";
}

// Fungsi untuk memilih cuaca dan menampilkan tulisan pada tag yang memiliki id="kalimat"
function kondisi() {
  let cuaca = document.getElementById("cuaca").value;

  if (cuaca === "cerah") {
    document.getElementById("kalimat").innerHTML = "It is nice and sunny outside today. Wear shorts! Go to the beach, or the park, and get an ice cream";
  } else {
    document.getElementById("kalimat").innerHTML = "Rain is falling outside, take a rain coat and a brolly, and don't say out for too long";
  }
}

// Fungsi untuk melakukan Faktorial kemudian hasilnya akan ditampilkan pada tag yang memiliki id="hasil"
function faktorial() {
  let bilangan = document.getElementById("bilangan").value;
  let hasil_faktorial = 1;

  for (let i = 1; i <= bilangan; i++) {
    hasil_faktorial = hasil_faktorial * i;
  }
  document.getElementById("hasil").innerHTML = "The factorial of " + bilangan + " is " + hasil_faktorial;
}
