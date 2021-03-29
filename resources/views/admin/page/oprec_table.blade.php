@extends('admin.template.admin')

@section('custom-css')
    <style>

        .data-modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1000; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

            /* Modal Content/Box */
        .data-modal-content {
            position: relative;
            background-color: #fefefe;
            margin: 15% auto; /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
        }

        .data-modal-content p{
            margin: 0;
            padding-left: 2%;
            padding-right: 2%;
        }

            /* The Close Button */
        .data-close {
            color: #ffffff;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .data-close:hover,
        .data-close:focus {
            color: black;
            text-decoration: none;
            cursor: pointer;
        }

        .data-modal-header {
            padding: 2px 16px;
            background-color: #d39c45;
            color: white;
        }
        .data-modal-header h2{
            margin : 0;
            padding : 1%;
        }
        .foto-p{
            width:30%;
            margin: auto;
            margin-bottom: 2%;
            margin-top : 3%;
        }
        .image-fluid{
            width:100%;
        }
        .header-text{
            font-size: 1.2em;
            font-weight: bold;
            color: #f56701;
            margin-top: 3%;
            margin-bottom: 1.5%;
        }
        .text-content{
            color: black;
            text-align: justify;
        }
    </style>
@endsection

@section('content')

    <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tables</h1>

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
                <h6 class="m-0 font-weight-bold text-primary">DataTables Example</h6>
            </div>
            <div class="card-body">
                <div class="table-responsive">
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>Tim</th>
                                <th>Nama Lengkap</th>
                                <th>NIM</th>
                                <th>Angkatan</th>
                                <th>Jurusan</th>
                                <th>Option</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>Tim</th>
                                <th>Nama Lengkap</th>
                                <th>NIM</th>
                                <th>Angkatan</th>
                                <th>Jurusan</th>
                                <th>Option</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            
                            @foreach($items as $item)
                            <tr>
                                <td>
                                    @switch($item->team)
                                        @case('genta')
                                            GENTA
                                        @break
                                        @case('gantar')
                                            GANTAR
                                        @break
                                        @case('orta')
                                            ORTA
                                        @break
                                        @case('lua')
                                            LUA
                                        @break
                                        @case('anta')
                                            ANTA
                                        @break
                                        @case('liku')
                                            LIKU
                                        @break
                                        @case('bacarita')
                                            BACARITA
                                        @break
                                        @case('arto')
                                            ARTO
                                        @break
                                        @case('lawang')
                                            LAWANG
                                        @break
                                    @endswitch
                                </td>
                                <td>{{ $item->fullname }}</td>
                                <td>{{ $item->nim }}</td>
                                <td>{{ $item->classyear }}</td>
                                <td>
                                    @switch($item->major)
                                        @case('informatika')
                                            Informatika
                                        @break
                                        @case('sistem_informasi')
                                            Sistem Informasi
                                        @break
                                        @case('teknik_komputer')
                                            Teknik Komputer
                                        @break
                                        @case('teknik_elektro')
                                            Teknik Elektro
                                        @break
                                        @case('teknik_fisika')
                                            Teknik Fisika
                                        @break
                                        @case('akuntansi')
                                            Akuntansi
                                        @break
                                        @case('manajemen')
                                            Manajemen
                                        @break
                                        @case('perhotelan')
                                            Perhotelan
                                        @break
                                        @case('strakom')
                                            Komunikasi Strategis
                                        @break
                                        @case('jurnalistik')
                                            Jurnalistik
                                        @break
                                        @case('dkv')
                                            Design Komunikasi Visual
                                        @break
                                        @case('arsitektur')
                                            Arsitektur
                                        @break
                                        @case('film_animasi')
                                            Film & Animasi
                                        @break
                                    @endswitch
                                </td>
                                <td>
                                    <button id="moreData{{$item->id}}">View More</button>

                                    <div id="moreDataModal{{$item->id}}" class="data-modal">
                                        <!-- Modal content -->
                                        <div class="data-modal-content">
                                            <div class="data-modal-header">
                                                <span class="data-close{{$item->id}} data-close">&times;</span>
                                                <h2>
                                                    {{ $item->fullname }} 
                                                    @if( $item->subdiv != 'none')
                                                        @switch($item->subdiv)
                                                            @case('pr')
                                                                - Public Relation
                                                            @break
                                                            @case('sponsor')
                                                                - Sponsor
                                                            @break
                                                            @case('video')
                                                                - Video
                                                            @break
                                                            @case('foto')
                                                                - Photo
                                                            @break
                                                            @case('medpar')
                                                                - Media Partner
                                                            @break
                                                            @case('visual')
                                                                - Visual
                                                            @break
                                                        @endswitch
                                                    @endif
                                                </h2>
                                            </div>
                                            <div class="foto-p">
                                                <img src="{{ asset($item->photo) }}" alt="" class="image-fluid">
                                            </div>
                                            <p class="header-text">Email Student</p>
                                            <p class="text-content">{{ $item->email }}</p>
                                            <p class="header-text">Tempat, tanggal lahir</p>
                                            <p class="text-content">{{ $item->place_of_birth }}, {{ $item->birthdate }}</p>
                                            <p class="header-text">Instagram</p>
                                            <p class="text-content">{{ $item->instagram }}</p>
                                            <p class="header-text">Line</p>
                                            <p class="text-content">{{ $item->line }}</p>
                                            <p class="header-text">Nomor Telepon</p>
                                            <p class="text-content">{{ $item->phonenumber }}</p>
                                            <p class="header-text">Pengalam Organisasi</p>
                                            <p class="text-content">{{ $item->experience }}</p>
                                            <p class="header-text">Apa itu UMN ECO?</p>
                                            <p class="text-content">{{ $item->about }}</p>
                                            <p class="header-text">Kenapa ingin bergabung di UMN ECO?</p>
                                            <p class="text-content">{{ $item->why }}</p>
                                            <p class="header-text">Kenapa ingin bergabung dengan divisi yang dipilih?</p>
                                            <p class="text-content">{{ $item->division }}</p>
                                            @switch($item->team)
                                                @case('anta')
                                                    <p class="header-text">Urutkan skala prioritas dalam hidupmu.</p>
                                                    <p class="text-content">{{ $item->question1 }}</p>
                                                    <p class="header-text">Buatlah konsep kegiatan UMN ECO 2021 secara garis besar untuk offline dan online.</p>
                                                    <p class="text-content">{{ $item->question2 }}</p>
                                                @break
                                                @case('gantar')
                                                    <p class="header-text">Menurut anda, seberapa penting tugas tim insurer (divisi keamanan) di dalam sebuah organisasi?</p>
                                                    <p class="text-content">{{ $item->question1 }}</p>
                                                    <p class="header-text">Menuru anda, apakah galak dengan tegas memilik arti yang berbeda? Jika ya, jelaskan letak perbedaannya!</p>
                                                    <p class="text-content">{{ $item->question2 }}</p>
                                                @break
                                                @case('arto')
                                                    <p class="header-text">Berikan input kreatif-mu dalam upaya mencari dana untuk UMN ECO (out of the box ideas)</p>
                                                    <p class="text-content">{{ $item->question1 }}</p>
                                                    <p class="header-text">Ketika tim finance dalam pelaksanaan jobdesc nya mendapatkan reaksi yang tidak sesuai dengan harapan dari para panitia lain, apa yang akan anda lakukan?</p>
                                                    <p class="text-content">{{ $item->question2 }}</p>
                                                @break
                                                @case('genta')
                                                    @if($item->subdiv == 'pr')
                                                        <p class="header-text">Buatlah caption untuk gambar tersebut.</p>
                                                        <p class="text-content">{{ $item->question1 }}</p>
                                                    @else
                                                        <p class="header-text">Jika anda harus membuat motion graphic dari 0, hal apa saja yang anda lakukan demi menyelesaikannya secara efisien dan tepat?</p>
                                                        <p class="text-content">{{ $item->question1 }}</p>
                                                    @endif
                                                @break
                                                @case('lua')
                                                    <p class="header-text">Apakah anda tau teknis livestreaming menggunakan obs atau semacamnya?</p>
                                                    <p class="text-content">{{ $item->question1 }}</p>
                                                    <p class="header-text">Apakah sudah bisa mengoprasikan zoom dengan baik? Karena kita akan menggunakan zoom cukup sering?</p>
                                                    <p class="text-content">{{ $item->question2 }}</p>
                                                @break
                                                @case('bacarita')
                                                    @if($item->subdiv == 'foto')
                                                        <p class="header-text">Jika berbicara tentang foto, anda lebih memilih moment atau estetika?</p>
                                                        <p class="text-content">{{ $item->question1 }}</p>
                                                    @else
                                                        <p class="header-text">Apabila acara sedang berlangsung dan tiba-tiba camera terkena format, apa tindakan yang harus dilakukan dan apa antisipasinya?</p>
                                                        <p class="text-content">{{ $item->question1 }}</p>
                                                    @endif
                                                @break
                                                @case('liku')
                                                    @if($item->subdiv == 'sponsor')
                                                        <p class="header-text">Sebutkan relasi atau kenalan perusahaan/organisasi yang anda ketahui dan apakah anda dapat menjalin kerjasama dengan mereka sebagai sponsor UMN ECO?</p>
                                                        <p class="text-content">{{ $item->question1 }}</p>
                                                    @else
                                                        <p class="header-text">Menurutmu, bagaimana seharusnya untuk mengapproach media agar bisa bekerja sama dengan UMN ECO?</p>
                                                        <p class="text-content">{{ $item->question1 }}</p>
                                                    @endif
                                                @break
                                                @case('lawang')
                                                    <p class="header-text">Sikap apa saja yang perlu dimiliki dalam berkontribusi sebagai Tim Lawang di UMN ECO? Berikan alasannya!</p>
                                                    <p class="text-content">{{ $item->question1 }}</p>
                                                    <p class="header-text">Apa yang anda ketahui tentang Tim Lawang UMN ECO? Kira-kira seperti apa pekerjaannya?</p>
                                                    <p class="text-content">{{ $item->question2 }}</p>
                                                @break
                                                @case('orta')
                                                    <p class="header-text">Apa yang anda ketahui tentang website? Jelaskan secara singkat!</p>
                                                    <p class="text-content">{{ $item->question1 }}</p>
                                                    <p class="header-text">Menurut anda desain website yang tidak bagus itu seperti apa?</p>
                                                    <p class="text-content">{{ $item->question2 }}</p>
                                                @break
                                            @endswitch

                                        </div>
                                    </div>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->

   
    

@endsection

@section('custom-js')

    <script>
        @foreach($items as $item)
        // Get the modal
        var modal{{$item->id}} = document.getElementById("moreDataModal{{$item->id}}");

        // Get the button that opens the modal
        var btn{{$item->id}} = document.getElementById("moreData{{$item->id}}");

        // Get the <span> element that closes the modal
        var span{{$item->id}} = document.getElementsByClassName("data-close{{$item->id}}")[0];

        // When the user clicks on the button, open the modal
        btn{{$item->id}}.onclick = function() {
            modal{{$item->id}}.style.display = "block";
        }

        // When the user clicks on <span> (x), close the modal
        span{{$item->id}}.onclick = function() {
            modal{{$item->id}}.style.display = "none";
        }

        //When the user clicks anywhere outside of the modal, close it
        window.onclick = function(event) {
            if (event.target == modal{{$item->id}}) {
                modal{{$item->id}}.style.display = "none";
            }
        }
        @endforeach
    </script>
    
@endsection
