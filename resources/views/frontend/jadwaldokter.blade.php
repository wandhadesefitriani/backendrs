@extends('frontend.app')

@section('section')
  
    <title>Jadwal Dokter</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
      <div class="search-container">
        <input type="text" id="searchInput" placeholder="Cari Nama Dokter...">
        <button id="searchButton">Cari</button>
    </div>
    <div class="table-container">
        <table>
            <thead>
                <tr>
                    <th>Foto</th>
                    <th>Nama Dokter</th>
                    <th>Nama Poli</th>
                    <th>Jadwal Praktik</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td><img src="{{asset('assetsjs/images/foto dokter/dr.kasih.png')}}"></td>
                    <td>dr. Kasih Widhi Astuti, Sp.A</td>
                    <td>Poli Anak</td>
                    <td>Senin - Jum'at, 06:00 - 08:00</td>
                </tr>
                <tr>
                    <td><img src="{{asset('assetsjs/images/foto dokter/dr.widowati.png')}}"></td>
                    <td>dr. Widowati, Sp.An</td>
                    <td>Poli Anestesi</td>
                    <td>Senin - Sabtu, 10:00 - 11:00</td>
                </tr>
                <tr>
                    <td><img src="{{asset('assetsjs/images/foto dokter/dr.abdul.png')}}"></td>
                    <td>dr. Abdul Hanan, Sp.B</td>
                    <td>Poli Bedah Umum</td>
                    <td>Senin - Sabtu, 11:00 - 12:00</td>
                </tr>
                <tr>
                    <td><img src="{{asset('assetsjs/images/foto dokter/dr.arif.png')}}"></td>
                    <td>dr. Arif Dharmawan, Sp.B</td>
                    <td>Poli Bedah Umum</td>
                    <td>Selasa - Jum'at, 18:00 - 20:00</td>
                </tr>
                <tr>
                    <td><img src="{{asset('assetsjs/images/foto dokter/ali.png')}}"></td>
                    <td>Ali Mahmud, Amd. Fis</td>
                    <td>Poli Fisioterapi</td>
                    <td>Senin - Sabtu, 08:00 - 12:00</td>
                </tr>
              <tr>
                    <td><img src="{{asset('assetsjs/images/foto dokter/drg.asriningtyas.png')}}"></td>
                    <td>drg. Asriningtyas Megawati</td>
                    <td>Poli Gigi</td>
                    <td>
                    <p>Senin - Jum'at, 08:00 - 01:00</p>
                    <p>Sabtu,          08:00 - 12:00</p>
                    <p>Senin - Jum'at, 17:30 - 19:30</p>
                    </td>
                </tr>
              <tr>
                    <td><img src="{{asset('assetsjs/images/foto dokter/drg.early.png')}}"></td>
                    <td>drg. Early Rifka Annisa</td>
                    <td>Poli Gigi</td>
                    <td>
                    <p>Senin - Jum'at, 08:00 - 01:00</p>
                    <p>Sabtu,          08:00 - 12:00</p>
                    <p>Senin - Jum'at, 17:30 - 19:30</p>
                    </td>
                </tr>
              <tr>
                    <td><img src="{{asset('assetsjs/images/foto dokter/dr.nelly.png')}}"></td>
                    <td>dr. Nelly Mulyaningsih,Sp.JP(K).,FIHA</td>
                    <td>Poli Jantung & Pembuluh Darah</td>
                    <td>Rabu & Kamis, 12:00 - 14:00</td>
                </tr>
              <tr>
                    <td><img src="{{asset('assetsjs/images/foto dokter/dr.selamat.png')}}"></td>
                    <td>dr. Selamat Widodo,M.Kes.Sp.OG</td>
                    <td>Poli kebidanan & Kandungan</td>
                    <td>
                    <p>Senin - Jum'at, 09:00 - 11:00</p>
                    <p>Senin - Jum'at, 15:00 - 17:00</p>
                    </td>
                </tr>
              <tr>
                    <td><img src="{{asset('assetsjs/images/foto dokter/dr.haris.png')}}"></td>
                    <td>dr. Haris Wibawanto,Sp.OG</td>
                    <td>Poli kebidanan & Kandungan</td>
                    <td>Senin, Rabu & Sabtu, 11:00 - 12:30</td>
                </tr>
              <tr>
                    <td><img src="{{asset('assetsjs/images/foto dokter/dr.sulistyowati.png')}}"></td>
                    <td>dr. Sulistyowati, Sp.OG</td>
                    <td>Poli kebidanan & Kandungan</td>
                    <td>Senin - Jum'at, 18:00 - 20:00</td>
                </tr>
              <tr>
                    <td><img src="{{asset('assetsjs/images/foto dokter/dr.igusti.png')}}"></td>
                    <td>dr. I Gusti Ayu Kencana Wulan, Sp. KK</td>
                    <td>Poli Kulit & Kelamin</td>
                    <td>
                    <p>Senin & Kamis, 14:00 - 16:00</p>
                    <p>Jum'at, 12:00 - 14:00</p>
                    </td>
                </tr>
              <tr>
                    <td><img src="{{asset('assetsjs/images/foto dokter/dr.dina.png')}}"></td>
                    <td>dr. Dina Wahyu, Sp.M</td>
                    <td>Poli Mata</td>
                    <td>Senin,Selasa & Rabu, 13:00 - 14:00</td>
                </tr>
              <tr>
                    <td><img src="{{asset('assetsjs/images/foto dokter/dr.arifdharmawan.png')}}"></td>
                    <td>dr. Arif Dharmawan, Sp.B</td>
                    <td>Poli Mata</td>
                    <td>
                    <p>Kamis - Jum'at, 10:00 - 11:00</p>
                    <p>(On Call)</p>
                    </td>
                </tr>
              <tr>
                    <td><img src="{{asset('assetsjs/images/foto dokter/dr.chairul.png')}}"></td>
                    <td>DR. dr. H. Chairul Yahya, Sp.OT</td>
                    <td>Poli Ortopedi</td>
                    <td>Rabu & Jum'at, 08:00 - 09:00</td>
                </tr>
              <tr>
                    <td><img src="{{asset('assetsjs/images/foto dokter/dr.reza.png')}}"></td>
                    <td>dr. Reza Muttaqien, Sp.OT</td>
                    <td>Poli Ortopedi</td>
                    <td>
                    <p>Senin, Selasa & Kamis, 08:00 - 09:30</p>
                    <p>Jum'at, 10:00 - 11:00</p>
                    </td>
                </tr>
                <tr>
                    <td><img src="{{asset('assetsjs/images/foto dokter/dr.arwin.png')}}"></td>
                    <td>dr. Arwin Achijar, Sp.PD</td>
                    <td>Poli Penyakit Dalam</td>
                    <td>Senin - Sabtu, 08:00 - 10:00</td>
                </tr>
              <tr>
                    <td><img src="{{asset('assetsjs/images/foto dokter/dr.hery.png')}}"></td>
                    <td>dr. Hery Subiakto, Sp.PD</td>
                    <td>Poli Penyakit Dalam</td>
                    <td>Selasa - Kamis, 15:00 - 17:00</td>
                </tr>
                <tr>
                    <td><img src="{{asset('assetsjs/images/foto dokter/dr.adi.png')}}"></td>
                    <td>dr. Adi Mulyono, Sp.PD</td>
                    <td>Poli Penyakit Dalam</td>
                    <td>Senin - Jum'at, 18:00 - 20:00</td>
                </tr>
              <tr>
                    <td><img src="{{asset('assetsjs/images/foto dokter/dr.aditya.png')}}"></td>
                    <td>dr. Aditya Ignasius Sigit,Sp.PK</td>
                    <td>Poli Patologi Klinik</td>
                    <td>Senin & Kamis, 07:00 - 09:00</td>
                </tr>
              <tr>
                    <td><img src="{{asset('assetsjs/images/foto dokter/dr.dedy.png')}}"></td>
                    <td>dr. Dedy Sasongko, Sp.P</td>
                    <td>Poli Paru</td>
                    <td>
                    <p>Senin, Rabu & Jum'at, 18:00 - 20:00</p>
                    <p>Selasa (On Call), 12:00 - 13:00</p>
                    </td>
                </tr>
              <tr>
                    <td><img src="{{asset('assetsjs/images/foto dokter/dr.mochammad.png')}}"></td>
                    <td>dr. Mochammad Nizam Fahmi, Sp.Rad</td>
                    <td>Poli Radiologi</td>
                    <td>Senin - Jum'at, 15:00 - 19:00</td>
                </tr>
                <tr>
                    <td><img src="{{asset('assetsjs/images/foto dokter/dr.novi.png')}}"></td>
                    <td>dr. Noviyanti, Sp.S</td>
                    <td>Poli Saraf</td>
                    <td>
                    <p>Selasa & Kamis, 13:00 - 14:00</p>
                    <p>Jum'at, 13:00 - 15:00</p>
                    </td>
                </tr>
                <tr>
                    <td><img src="{{asset('assetsjs/images/foto dokter/dr.andar.png')}}"></td>
                    <td>dr. Andar, Sp.S</td>
                    <td>Poli Saraf</td>
                    <td>Rabu, 11:30 - 13:00</td>
                </tr>   
                <tr>
                    <td><img src="{{asset('assetsjs/images/foto dokter/dr.mashari.png')}}"></td>
                    <td>dr. Mashari, Sp.THT</td>
                    <td>Poli Tht</td>
                    <td>Senin - Jum’at, 18:00 - 20:00</td>
                </tr>   
                <tr>
                    <td><img src="{{asset('assetsjs/images/foto dokter/dr.surya.png')}}"></td>
                    <td>dr. M. Surya, Sp.U</td>
                    <td>Poli Urologi</td>
                    <td>Selasa & Kamis, 14.30 – 16.30</td>
                </tr>   
                <tr>
                    <td><img src="{{asset('assetsjs/images/foto dokter/dr.arwin.png')}}"></td>
                    <td>dr. Arwin Achijar, Sp.PD</td>
                    <td>Poli Geriatri</td>
                    <td>Senin - Jum’at, 11.00 - 12.00</td>
                </tr>   
                <tr>
                    <td><img src="{{asset('assetsjs/images/foto dokter/dr.kasih.png')}}"></td>
                    <td>dr. Kasih Widhi Astuti, Sp.A</td>
                    <td>Poli Gizi Anak</td>
                    <td>
                    <p>Setiab Sabtu Di Awal Bulan (Sebulan 1X</p>
                    <p>Pagi(On Call) </p>
                    </td>
                </tr>    
            </tbody>
        </table>
    </div>
</body>
</html>
</div>

<p></p>
@endsection

@section('script')



@endsection

@section('script')

   

@endsection
         