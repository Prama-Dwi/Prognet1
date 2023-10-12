<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/css/bio.css">
    <title>Form Javascript</title>
</head>

<body>
    <div class="container-fluid">
        <div class="card col-12 m-auto mt-5 w-75 shadow p-3 bg-body rounded" style="width: 18rem;">
            <h1 class="card-tittle">Form Biodata</h1>
            <form onsubmit="return validateForm()" method="post" action="proses_form.php">
                <div class="mb-3">
                    <label for="nama" class="form-label">Nama Lengkap</label>
                    <input type="text" class="form-control" id="nama" aria-describedby="emailHelp" name="nama">
                </div>
                <div class="mb-3">
                    <label for="nim" class="form-label">NIM</label>
                    <input type="text" class="form-control" id="nim" name="nim">
                </div>
                <div class="mb-3">
                    <label for="alamat" class="form-label">Alamat</label>
                    <input type="text" class="form-control" id="alamat" aria-describedby="emailHelp" name="alamat">
                </div>
                Jenis Kelamin:
                <div class="mt-3 form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_laki" value="Laki-laki">
                    <label class="form-check-label" for="jenis_laki">
                        Laki - Laki
                    </label>
                </div>
                <div class="mb-3 form-check">
                    <input class="form-check-input" type="radio" name="jenis_kelamin" id="jenis_perempuan" value="Perempuan">
                    <label class="form-check-label" for="jenis_perempuan">
                        Perempuan
                    </label>
                </div>
                <label for="jurusan" class="form-label">Jurusan</label>
                <select class="mb-3 form-select" id="jurusan" name="jurusan">
                    <option selected hidden>Pilih Jurusan</option>
                    <option value="Teknologi Informasi">Teknologi Informasi</option>
                    <option value="Teknik Elektro">Teknik Elektro</option>
                    <option value="Teknik Industri">Teknik Industri</option>
                    <option value="Teknik Lingkungan">Teknik Lingkungan</option>
                    <option value="Teknik Mesin">Teknik Mesin</option>
                    <option value="Teknik Sipil">Teknik Sipil</option>
                </select>
                <div class="mb-3">
                    <label for="email" class="form-label">Email</label>
                    <input type="" class="form-control" id="email" aria-describedby="emailHelp" name="email">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
            </form>
        </div>
    </div>
    <script>
        function validateForm() {
            var nama = document.getElementById("nama").value;
            var nim = document.getElementById("nim").value;
            var alamat = document.getElementById("alamat").value;
            var jenis_kelamin_laki = document.getElementById("jenis_laki").checked;
            var jenis_kelamin_perempuan = document.getElementById("jenis_perempuan").checked;
            var jurusan = document.getElementById("jurusan").value;
            var email = document.getElementById("email").value;

            var namaRegex = /^[a-zA-Z\s]+$/;
            if (!nama.match(namaRegex)) {
                alert("Nama hanya boleh berisi huruf dan spasi.");
                return false;
            }

            if (nim.length !== 10 || isNaN(nim)) {
                alert("NIM harus terdiri dari 10 digit angka.");
                return false;
            }

            if (alamat.trim() === "") {
                alert("Alamat harus diisi.");
                return false;
            }

            if (!jenis_kelamin_laki && !jenis_kelamin_perempuan) {
                alert("Pilih jenis kelamin.");
                return false;
            }

            if (jurusan === "Pilih Jurusan") {
                alert("Pilih jurusan.");
                return false;
            }

            var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
            if (!email.match(emailRegex)) {
                alert("Masukkan alamat email yang valid.");
                return false;
            }

            alert("Data anda berhasil disimpan.");
            return true;
        }
    </script>
</body>

</html>
