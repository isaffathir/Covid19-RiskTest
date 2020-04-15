<html>
    <head>
        <link rel="stylesheet" type="text/css" href="/styles/bootstrap4/bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="/css/global.css">
        <style>
            body{
                height: 100vh;
                overflow: hidden;
            }
        </style>
                <title>COVID 19 - RISK TEST</title>

    </head>
    <body>
        <form action="/form-submit" id="formBody" class="form-body">
            <div class="form-section d-flex flex-column justify-content-center" id="form">
                <div class="container">
                    <div class="row">
                        <div class="col-md-8 offset-md-2">
                            <div class="form-content">
                                @if (session('failed'))
                                <div class="alert alert-danger" role="alert">
                                    {{ session('failed') }}
                                </div>
                                @endif
                                <div class="form-group row">
                                    <div class="col-sm-2"></div>
                                <h1 class="judul">COVID 19 - RISK TEST</h1>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label ">Nama</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="name" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Usia</label>
                                    <div class="col-sm-3">
                                        <input type="number" class="form-control" name="age" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Pekerjaan</label>
                                    <div class="col-sm-8">
                                        <input type="text" class="form-control" name="profession" />
                                    </div>
                                </div>
                                <div class="form-group row">
                                    <label class="col-sm-2 col-form-label">Email</label>
                                    <div class="col-sm-8">
                                        <input type="email" class="form-control" name="email" />
                                    </div>
                                </div>
                                <div class="text-center">
                                    <button type="button" id="button" class="w-25 btn btn-info">DAFTAR</button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="question" class="question-section">
                <div class="text-center my-4">
                    <button type="button" id="backToTop" class="w-25 btn btn-danger">Kembali</button>
                </div>
                <div class="question-content">
                    <div class="container">
                        <table class="table table-bordered">
                            <thead>
                                <tr class="kepala1">
                                    <td>Pertanyaan</h1>
                                    <td>Ya</td>
                                    <td>Tidak</td>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="kepala">
                                    <td colspan="3">A. Potensi Tertular Didalam Rumah</td>
                                </tr>
                                <tr class="badan">
                                    <td>1. Saya pergi keluar rumah</td>
                                    <td class="text-center"><input required  type="radio" name="Q1" value="Ya"></td>
                                    <td class="text-center"><input required  type="radio" name="Q1" value="Tidak"></td>
                                </tr>
                                <tr class="badan">
                                    <td>2. Saya menggunakan transportasi umum : online, angkot, bus, taksi, kereta api</td>
                                    <td class="text-center"><input required  type="radio" name="Q2" value="Ya"></td>
                                    <td class="text-center"><input required  type="radio" name="Q2" value="Tidak"></td>
                                </tr>
                                <tr class="badan">
                                    <td>3. Saya tidak memakai masker pada saat berkumpul dengan orang lain</td>
                                    <td class="text-center"><input required  type="radio" name="Q3" value="Ya"></td>
                                    <td class="text-center"><input required  type="radio" name="Q3" value="Tidak"></td>
                                </tr>
                                <tr class="badan">
                                    <td>4. Saya berjabat tangan dengan orang lain</td>
                                    <td class="text-center"><input required  type="radio" name="Q4" value="Ya"></td>
                                    <td class="text-center"><input required  type="radio" name="Q4" value="Tidak"></td>
                                </tr>
                                <tr class="badan">
                                    <td>5. Saya tidak membersihkan tangan dengan hand sanitizer / tissue basah   
                                        sebelum pegang kemudi mobil / motor
                                     </td>
                                     <td class="text-center"><input required  type="radio" name="Q5" value="Ya"></td>
                                     <td class="text-center"><input required  type="radio" name="Q5" value="Tidak"></td>
                                </tr>
                                <tr class="badan">
                                    <td>6. Saya menyentuh benda / uang yang juga disentuh orang lain
                                    </td>
                                    <td class="text-center"><input required  type="radio" name="Q6" value="Ya"></td>
                                    <td class="text-center"><input required  type="radio" name="Q6" value="Tidak"></td>
                                </tr>
                                <tr class="badan">
                                    <td>7. Saya tidak menjaga jarak 1,5 meter dengan orang lain ketika : belanja, bekerja, belajar, ibadah.</td>
                                    <td class="text-center"><input required  type="radio" name="Q7" value="Ya"></td>
                                    <td class="text-center"><input required  type="radio" name="Q7" value="Tidak"></td>
                                </tr>
                                <tr class="badan">
                                    <td>8. Saya makan diluar rumah (warung/restaurant)</td>
                                    <td class="text-center"><input required  type="radio" name="Q8" value="Ya"></td>
                                    <td class="text-center"><input required  type="radio" name="Q8" value="Tidak"></td>
                                </tr>
                                <tr class="badan">
                                    <td>9. Saya tidak minum hangat & cuci tangan dengan sabun setelah tiba di tujuan</td>
                                    <td class="text-center"><input required  type="radio" name="Q9" value="Ya"></td>
                                    <td class="text-center"><input required  type="radio" name="Q9" value="Tidak"></td>
                                </tr>
                                <tr class="badan">
                                    <td>10. Saya berada di wilayah kelurahan tempat pasien tertular</td>
                                    <td class="text-center"><input required  type="radio" name="Q10" value="Ya"></td>
                                    <td class="text-center"><input required  type="radio" name="Q10" value="Tidak"></td>
                                </tr>
                                <tr class="kepala">
                                    <td colspan="3">B. Potensi Tertular Diluar Rumah</td>
                                </tr>
                                <tr class="badan">
                                        <td>11. Saya tidak pasang hand sanitizer di depan pintu masuk, untuk bersihkan tangan 
                                            sebelum pegang gagang (handle) pintu masuk rumah</td>
                                        <td class="text-center"><input required  type="radio" name="Q11" value="Ya"></td>
                                        <td class="text-center"><input required  type="radio" name="Q11" value="Tidak"></td>  
                                </tr>
                                <tr class="badan">
                                    <td>12. Saya tidak mencuci tangan dengan sabun setelah tiba di rumah</td>
                                    <td class="text-center"><input required  type="radio" name="Q12" value="Ya"></td>
                                    <td class="text-center"><input required  type="radio" name="Q12" value="Tidak"></td>
                                </tr>
                                <tr class="badan">
                                    <td>13. Saya tidak menyediakan : tissue basah/antiseptic, masker, sabun antiseptic 
                                        bagi keluarga di rumah</td>
                                        <td class="text-center"><input required  type="radio" name="Q13" value="Ya"></td>
                                        <td class="text-center"><input required  type="radio" name="Q13" value="Tidak"></td>
                                </tr>
                                <tr class="badan">
                                    <td>14. Saya tidak segera merendam baju & celana bekas pakai diluar rumah kedalam 
                                        air panas / sabun</td>
                                    <td class="text-center"><input required  type="radio" name="Q14" value="Ya"></td>
                                    <td class="text-center"><input required  type="radio" name="Q14" value="Tidak"></td>
                                </tr>
                                <tr class="badan">
                                    <td>15. Saya tidak segera mandi keramas setelah saya tiba dirumah</td>
                                    <td class="text-center"><input required  type="radio" name="Q15" value="Ya"></td>
                                    <td class="text-center"><input required  type="radio" name="Q15" value="Tidak"></td>
                                </tr>
                                <tr class="badan">
                                    <td>16. Saya tidak mensosialisasikan check list penilaian resiko pribadi ini kepada
                                        keluarga di rumah</td>
                                    <td class="text-center"><input required  type="radio" name="Q16" value="Ya"></td>
                                    <td class="text-center"><input required  type="radio" name="Q16" value="Tidak"></td>
                                </tr>
                                <tr class="kepala">
                                    <td colspan="3">C. Daya Tahan (Imunitas)</td>
                                </tr>
                                <tr class="badan">
                                    <td>17. Saya dalam sehari tidak kena cahaya matahari minimal 15 menit</td>
                                    <td class="text-center"><input required  type="radio" name="Q17" value="Ya"></td>
                                    <td class="text-center"><input required  type="radio" name="Q17" value="Tidak"></td>
                                </tr>
                                <tr class="badan">
                                    <td>18. Saya tidak jalan kaki / berolahraga minimal 30 menit setiap hari</td>
                                    <td class="text-center"><input required  type="radio" name="Q18" value="Ya"></td>
                                    <td class="text-center"><input required  type="radio" name="Q18" value="Tidak"></td>
                                </tr>
                                <tr class="badan">
                                    <td>19. Saya jarang minum vitamin C & E, dan kurang tidur</td>
                                    <td class="text-center"><input required  type="radio" name="Q19" value="Ya"></td>
                                    <td class="text-center"><input required  type="radio" name="Q19" value="Tidak"></td>
                                </tr>
                                <tr class="badan">
                                    <td>20. Usia saya diatas 60 tahun</td>
                                    <td class="text-center"><input required  type="radio" name="Q20" value="Ya"></td>
                                    <td class="text-center"><input required  type="radio" name="Q20" value="Tidak"></td>
                                </tr>
                                <tr class="badan">
                                    <td>21. Saya mempunyai penyakit : jantung/diabetes/gangguan pernafasan kronik</td>
                                    <td class="text-center"><input required  type="radio" name="Q21" value="Ya"></td>
                                    <td class="text-center"><input required  type="radio" name="Q21" value="Tidak"></td>
                                </tr>
                            </tbody>
                        </table>
                        <div class="text-center my-4">
                            <button type="submit" class="w-25 btn btn-danger">Selesai</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
        <script src="/js/jquery-3.3.1.min.js"></script>

        <script>
            $("#button").click(function() {
                $('#formBody').animate({
                    scrollTop: $("#question").offset().top
                }, 1000);
            });
            $("#backToTop").click(function() {
                $('#formBody').animate({
                    scrollTop: $("#form").offset().top
                }, 1000);
            });
        </script>
    </body>
</html>