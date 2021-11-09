$(document).ready(function () {
  var dataHasil = 0;
  tampil();

  $(".btn-tambah").click(function () {
    tambah();
  });

  $(".btn-batal").click(function () {
    tampil();
    reset();
  });

  $(".btn-ubah").click(function () {
    edit(dataHasil);
  });

  function tampil() {
    $(".targetData").html("");

    $(".btn-tambah").show();
    $(".btn-ubah").hide();
    $(".btn-batal").hide();
    $.ajax({
      type: "GET",
      url: "tampil.php",
      dataType: "JSON",
      success: function (response) {
        var i;
        var data = "";
        for (i = 0; i < response.length; i++) {
          data +=
            `<tr>
              <td ">` +(i + 1) +`</td>
              <td>` + response[i].nama +`</td>
              <td>` + response[i].nim +`</td>
              <td>` + response[i].prodi +`</td>
              <td>` + response[i].angkatan +`</td>
              <td>
                <button class='btn-edit' id='` + response[i].nim +`'>Ubah</button>
                <button class='btn-delete' id='` + response[i].nim +`'>Hapus</button>
              </td>
		        </tr>`;
        }
        $(".targetData").append(data);

        $(".btn-edit").click(function () {
          tampil_data($(this).attr("id"));
        });

        $(".btn-delete").click(function () {
          hapus($(this).attr("id"));
        });
      },
    });
  }

  function tambah() {
    var nim = $(".nomor_nim").val();
    var nama = $(".nama").val();
    var prodi = $(".prodi").val();
    var angkatan = $(".tahun_angkatan").val();
    $.ajax({
      type: "POST",
      url: "tambah.php",
      data: "nim=" + nim + "&nama=" + nama + "&prodi=" + prodi + "&angkatan=" + angkatan,
      dataType: "JSON",
      success: function (response) {
        if (response.status == "1") {
          tampil();
          reset();
        } else {
          alert(response.msg);
          tampil();
          reset();
        }
      },
    });
  }

  function tampil_data(x) {
    $.ajax({
      type: "POST",
      url: "tampil_data.php",
      data: "id=" + x,
      dataType: "JSON",
      success: function (response) {
        dataHasil = response.nim;
        $(".nomor_nim").val(response.nim);
        $(".nama").val(response.nama);
        $(".prodi").val(response.prodi);
        $(".tahun_angkatan").val(response.angkatan);

        $(".btn-tambah").hide();
        $(".btn-ubah").show();
        $(".btn-batal").show();
      },
    });
  }

  function edit(x) {
    var id = x;
    var nim = $(".nomor_nim").val();
    var nama = $(".nama").val();
    var prodi = $(".prodi").val();
    var angkatan = $(".tahun_angkatan").val();
    $.ajax({
      type: "POST",
      url: "edit.php",
      data: "id=" + id + "&nim=" + nim + "&nama=" + nama + "&prodi=" + prodi + "&angkatan=" + angkatan,
      success: function (response) {
        tampil();
        reset();
      },
    });
  }

  function hapus(x) {
    $.ajax({
      type: "POST",
      url: "delete.php",
      data: "nim=" + x,
      dataType: "JSON",
      success: function (response) {
        if (response.status == "1") {
          tampil();
          reset();
        } else {
          alert(response.msg);
          tampil();
          reset();
        }
      },
    });
  }

  function reset() {
    $(".nomor_nim").val("");
    $(".nama").val("");
    $(".prodi").val("");
    $(".tahun_angkatan").val("");
  }
});
