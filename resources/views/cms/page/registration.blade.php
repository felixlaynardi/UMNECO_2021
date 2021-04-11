@extends('cms.template.app')

@section('custom-css')
<link rel="stylesheet" href="{{ asset('css/cms/page/registration.css') }}">
@endsection

@section('content')
<script>
    var student_id_list = [
        @foreach ($ecofriends as $e)
            '{{ $e->student_id }}',
        @endforeach
    ]
    var email_list = [
        @foreach ($ecofriends as $e)
            '{{ $e->email }}',
        @endforeach
    ]
    var instagram_list = [
        @foreach ($ecofriends as $e)
            '{{ $e->instagram_account }}',
        @endforeach
    ]
    var line_list = [
        @foreach ($ecofriends as $e)
            '{{ $e->line_id }}',
        @endforeach
    ]
    var phone_list = [
        @foreach ($ecofriends as $e)
            '{{ $e->phone_number }}',
        @endforeach
    ]
</script>
<header class="py-5">
    <div class="col-md-6 col-10 mx-auto">
        <h5>Real Emergency Daily life</h5>
        <h1>REGISTRATION</h1>
    </div>
</header>
<div class="form col-md-6 col-10 mx-auto">
    <form class="Persetujuan">
        <div class="row">
            <div class="step step-1 active">
                <object class="regulation-obj mb-2" data="{{ asset('files/REGULASI_RED.pdf') }}#toolbar=0&navpanes=0&scrollbar=0" type="application/pdf" style="width:100%; height:650px">
                <div class="rules mb-2">
                <h2 class="mx-auto"><b>REGULASI UMUM RED</b></h2>
                Untuk dinyatakan berhasil pada kegiatan <b>RED</b>, ECO Friends <b>WAJIB</b> menjalani dan
                menyelesaikan kegiatan yang disebut sebagai <b><em>Quest</em></b>. Bentuk <em>Quest</em> pada kegiatan ini akan dibagi
                menjadi dua yaitu, <b><em>Quest</em></b> atau misi wajib dan <b><em>Mystery Quest</em></b> atau <b>misi misteri.</b><br><br>

                <b><em>Quest</em></b> atau <b>misi yang WAJIB</b> diikuti oleh ECO Friends yaitu <b>Utopia</b> dan <b>Rise.</b>
                Sedangkan untuk <b><em>Mystery Quest</em></b> atau <b>misi misteri</b> ini adalah misi yang dapat ECO Friends pilih
                sebagai Quest tambahan, yaitu <b>Utile</b> atau <b>Raconteur.</b><br><br>

                Bagi para ECO Friends yang telah berhasil menyelesaikan <b>kedua <em>Quest</em> RED</b> yaitu
                <b>Utopia</b> dan <b>Rise,</b> akan mendapatkan <b>+1 SKKM Pengabdian Masyarakat</b> beserta <b><em>e-certificate</em></b>
                sebagai tanda bahwa ECO Friends telah menyelesaikan kedua Quest tersebut. Sedangkan bagi
                para ECO Friends yang mengikuti <b><em>Mystery Quest,</em></b> akan berkesempatan untuk memenangkan
                berbagai <b>hadiah menarik.</b><br><br>

                Di bawah ini, UMN ECO lampirkan segala regulasi serta teknis dari setiap Quest yang
                akan ECO Friends lakukan pada kegiatan <b>RED.</b> Diharapkan regulasi dan teknis ini dapat dibaca
                secara rinci dan turut ECO Friends mengerti untuk menghindari hal-hal yang tidak diharapkan.<br>
                Jika ECO Friends memiliki kendala atau pertanyaan terkait kegiatan RED, dapat
                menghubungi LINE Official Account kami di @bxd0023u.<br><br><br>

                <div class="salam"> Selamat menjalani kegiatan <b>RED!</b><br>
                UMN ECO 2021</div><br><br><br><br>

                <h2 class="mb-1">REGULASI DETAIL
                Quest (WAJIB)</h2><br>

                Regulasi & Teknis Utopia:<br><br>

                Pada <em>Quest</em> <b>Utopia,</b> ECO Friends akan bersama-sama melakukan <b>penghapusan <em>e-mail</em> selama
                12 hari.</b> Berikut merupakan regulasi <em>Quest</em> <b>Utopia.</b><br>
                    <div class="in">
                    ● Setiap harinya, ECO Friends <b>WAJIB</b> menghapus minimal <b>150 <em>e-mail.</em></b> <br>
                    ● ECO Friends akan melakukan <b><em>video recording</em></b> sebagai bukti penghapusan <em>e-mail.</em>
                    (Dapat berupa <em>screen record</em> bagi yang menggunakan ponsel, ataupun berupa
                    rekaman dari ponsel terhadap layar PC).<br>
                    ● Video berdurasi <b>MAKSIMAL</b> 15 detik atau 1 story Instagram dengan kualitas
                    HD dan wajib terbaca dengan jelas (Orientasi video: Portrait).<br>
                    ● ECO Friends <b>WAJIB</b> membuat <em>highlight</em> pada Instagram dengan judul <b>Utopia</b>
                    serta menggunakan cover <em>highlight</em> yang dapat diunduh di link berikut:<br><br>
                    </div>
                    <div class="link">http://bit.ly/CoverHighlightUtopia</div><br>

                    <div class="in">
                    ● ECO Friends <b>WAJIB</b> menggunakan tagar #RealEmergencyDailylife
                    #SmallActforBigImpact dan tag @umn_eco.<br>
                    ● Batas pengumpulan <em>Quest</em> <b>Utopia</b> setiap harinya <b>MAKSIMAL</b> pukul 23.59 WIB.</div><br><br>
                    
                    Cara penghapusan <em>e-mail</em> yang benar kami rincikan sebagai berikut;<br>
                    <div class="in">
                    ● ECO Friends akan membuka <em>e-mail</em> pada Gmail/Yahoo masing-masing.<br>
                    ● ECO Friends akan membuka <em>“All Mail”</em> pada Gmail, dan <em>“Inbox”</em> pada Yahoo.<br>
                    ● Hapuslah 150 <em>e-mail</em> dari Gmail/Yahoo.<br>
                    ● Setelah penghapusan berhasil, carilah <em>“Bin/Trash”.</em><br>
                    ● Kemudian hapus kembali 150 e-mail anda secara permanen.<br>
                    ● Recording yang harus ECO Friends lakukan dimulai pada saat <b>penghapusan
                    <em>e-mail</em> pada <em>“Trash / Bin”</em></b> dan ECO Friends <b>WAJIB</b> melakukan penghapusan
                    dengan klik fitur <b><em>“Empty bin”.</em></b><br>
                    </div><br>

                Video contoh melakukan Quest <b>Utopia</b><br><br>
                <div class="link">http://bit.ly/VideoContohKegiatanUtopi</div><br>

                Tata cara pengumpulan video;<br>
                    <div class="in">
                    ● <em>Copy link story</em> Instagram dari <em>Quest</em> <b>Utopia</b> harian kamu.<br>
                    ● Buka <em>website</em> resmi UMN ECO di <b><u>eco.umn.ac.id</u></b> dan lakukan <em>login.</em><br>
                    ● Click tombol <em>“Submit”</em> yang ada di bawah p<em>rogress bar</em> <b>Utopia.</b><br>
                    ● <em>Paste link story</em> Instagram kamu pada tempat yang sudah disediakan dan <em>click,
                    “Submit”.</em><br>
                    ● <b>Pastikan link yang kamu submit sudah benar, ya, ECO Friends,</b> karena link
                    yang sudah disubmit tidak bisa diedit lagi<br>
                    </div><br>

                Regulasi dan Teknis Rise:<br><br>
    
                Pada <em>Quest</em> <b>Rise,</b> ECO Friends akan <b>menanam pohon selama 12 hari.</b> Berikut merupakan
                regulasi kegiatan <b>Rise.</b><br>
                    <div class="in">
                    ● ECO Friends <b>WAJIB</b> menyiapkan; benih tanaman dan tanah sebagai bahan
                    utama. Untuk pot, pupuk, dan sekop merupakan kebutuhan opsional. ECO Friends
                    diperkenankan untuk <b>menyiapkan bahan-bahannya sendiri</b> atau dapat
                    membelinya di Instagram official store kami di <b>@ecostore_umn.</b><br>
                    ● Pada hari pertama, ECO Friends <b>WAJIB</b> melakukan proses perekaman
                    penanaman, mulai dari menunjukkan benih tanaman hingga benih tertanam.<br>
                    ● Durasi video <em>story</em> untuk hari pertama adalah <b>MAKSIMAL</b> 60 detik atau setara
                    dengan 4 video <em>story.</em><br>
                    ● Pada hari ke-2 hingga hari ke-12, ECO Friends <b>WAJIB merekam proses
                    penyiraman</b> serta <b>pemberian kata positif</b> kepada tanaman.<br>
                    ● Durasi video <em>story</em> untuk hari ke-2 hingga hari ke-12 adalah <b>MAKSIMAL</b> 30
                    detik atau setara dengan 2 video <em>story.</em><br>
                    ● ECO Friends <b>WAJIB</b> membuat highlight pada Instagram dengan judul <b>Rise</b> serta
                    menggunakan cover <em>highlight</em> dapat diunduh di link berikut:
                    <div class="link">
                    http://bit.ly/CoverHighlightRise</div></div><br>
                    ● ECO Friends <b>WAJIB</b> menggunakan tagar #RealEmergencyDailylife
                    #TheBeginningofANewLife dan tag @umn_eco pada <b>video <em>story</em> yang pertama
                    saja di setiap harinya.</b><br>
                    ● Batas pengumpulan <em>Quest</em> <b>Rise</b> setiap harinya <b>MAKSIMAL</b> pukul 23.59 WIB.</div><br>

                Video contoh melakukan Quest Rise
                <div class="link">
                http://bit.ly/VideoContohKegiatanRise
                </div><br>
                
                Tata cara pengumpulan video;
                    <div class="in">
                    ● <em>Copy link story</em> Instagram dari <em>Quest</em> <b>Rise</b> harian kamu.<br>
                    ● Buka <em>website</em> resmi UMN ECO di <b><u>eco.umn.ac.id</u></b> dan lakukan <em>login.</em><br>
                    ● <em>Click</em> tombol <em>“Submit”</em> yang ada di bawah <em>progress bar</em> <b>Rise.</b><br>
                    ● Paste link story Instagram pada tempat yang sudah disediakan dan <em>click,
                    “Submit”.</em><br>
                    ● <b>Pastikan link yang kamu submit sudah benar, ya, ECO Friends,</b>
                    karena link yang sudah disubmit tidak bisa diedit lagi<br><br><br>
                    </div>
                </div>
                </object>
                <button class="button p-2" type="button" id="next-btn">Menuju Registrasi</button>
            </div>
        </div>
    </form>
    <div class="step step-2 registerform">
        <form action="{{route('registration')}}" method="post" class="mb-2" id="form-register">
            @csrf
            <div class="form-group mb-3">
                <label for="Firstname" class="label">Nama Depan</label>
                <input type="text" name="Firstname" id="Firstname" placeholder="ECO Family" value="{{ old('Firstname') }}" class="form-control mb-2" required>
                @if($errors->has('Firstname'))
                <div class="error error-message">{{ $errors->first('Firstname') }}</div>
                @endif
            </div>
            <div class="form-group mb-3">
                <label for="Lastname" class="label">Nama Belakang</label>
                <input type="text" name="Lastname" id="Lastname" placeholder="ECO Family" value="{{ old('Lastname') }}" class="form-control mb-2">
                @if($errors->has('Lastname'))
                <div class="error error-message">{{ $errors->first('Lastname') }}</div>
                @endif
            </div>
            <div class="form-group mb-3">
                <label for="Student_id" class="label">NIM</label>
                <input type="text" name="Student_id" id="Student_id" placeholder="00000012345" value="{{ old('Student_id') }}" class="form-control mb-2" required onkeypress='validateNIM(event)'>
                @if($errors->has('Student_id'))
                <div class="error error-message">{{ $errors->first('Student_id') }}</div>
                @endif
            </div>
            <div class="form-group mb-3">
                <label for="Email" class="label">Email</label>
                <input type="text" name="Email" id="Email" placeholder="eco@umn.ac.id" value="{{ old('Email') }}" class="form-control mb-2" required>
                @if($errors->has('Email'))
                <div class="error error-message">{{ $errors->first('Email') }}</div>
                @endif
            </div>
            <div class="form-group mb-3">
                <label for="Major" class="label">Jurusan</label>
                <select id="Major" name="Major" value="{{ old('Major') }}" class="form-control mb-2" required>
                    <option value="Informatika">Informatika</option>
                    <option value="Teknik Komputer">Teknik Komputer</option>
                    <option value="Teknik Elektro">Teknik Elektro</option>
                    <option value="Teknik Fisika">Teknik Fisika</option>
                    <option value="Sistem Informasi">Sistem Informasi</option>

                    <option value="Akuntansi">Akuntansi</option>
                    <option value="Manajemen">Manajemen</option>
                    <option value="Perhotelan">Perhotelan</option>

                    <option value="Komunikasi Strategis">Komunikasi Strategis</option>
                    <option value="Jurnalistik">Jurnalistik</option>

                    <option value="Desain Komunikasi Visual">Desain Komunikasi Visual</option>
                    <option value="Arsitektur">Arsitektur</option>
                    <option value="Film & Animasi">Film & Animasi</option>

                    <option value="Bukan Mahasiswa">Bukan Mahasiswa</option>
                </select>
                @if($errors->has('major'))
                <div class="error error-message">{{ $errors->first('major') }}</div>
                @endif
            </div>
            <div class="form-group mb-3">
                <label for="Generation" class="label">Angkatan</label>
                <select id="Generation" name="Generation" value="{{ old('Generation') }}" class="form-control mb-2" required>
                    <option value="2014">2014</option>
                    <option value="2015">2015</option>
                    <option value="2016">2016</option>
                    <option value="2017">2017</option>
                    <option value="2018">2018</option>
                    <option value="2019">2019</option>
                    <option value="2020">2020</option>
                    <option value="Bukan Mahasiswa">Bukan Mahasiswa</option>
                </select>
                @if($errors->has('Generation'))
                <div class="error error-message">{{ $errors->first('Generation') }}</div>
                @endif
            </div>
            <div class="form-group mb-3">
                <label for="Instagram_account" class="label">Username IG (Tidak di private) </label>
                <input type="text" name="Instagram_account" id="Instagram_account" placeholder="umn_eco" value="{{ old('Instagram_account') }}" class="form-control mb-2" required>
                @if($errors->has('Instagram_account'))
                <div class="error error-message">{{ $errors->first('Instagram_account') }}</div>
                @endif
            </div>
            <div class="form-group mb-3">
                <label for="Generation" class="label">ID Line</label>
                <input type="text" name="Line_id" id="Line_id" placeholder="umn_eco" value="{{ old('Line_id') }}" class="form-control mb-2" required>
                @if($errors->has('Line_id'))
                <div class="error error-message">{{ $errors->first('Line_id') }}</div>
                @endif
            </div>
            <div class="form-group mb-3">
                <label for="Phone_number" class="label">Nomor Telepon</label>
                <input type="text" name="Phone_number" id="Phone_number" placeholder="08123456789" value="{{ old('Phone_number') }}" class="form-control mb-2" required onkeypress='validateNIM(event)'>
                @if($errors->has('Phone_number'))
                <div class="error error-message">{{ $errors->first('Phone_number') }}</div>
                @endif
            </div>
            <div class="form-group mb-3">
                <label for="Password" class="label">Password</label>
                <input type="password" name="Password" id="Password" placeholder="*********" class="form-control mb-2" required>
                @if($errors->has('Password'))
                <div class="error error-message">{{ $errors->first('Password') }}</div>
                @endif
            </div>
            <div class="form-group mb-3">
                <label for="Password_Confirmation" class="label">Konfirmasi Password</label>
                <input type="password" name="Password_confirmation" id="Password_confirmation" placeholder="*********" class="form-control mb-2" required>
                @if($errors->has('Password_confirmation'))
                <div class="error error-message">{{ $errors->first('Password_confirmation') }}</div>
                @endif
            </div>
            <div class="form-check mb-3">
                <input type="checkbox" id="Availability" name="Availability" value="1" value="{{ old('Availability') }}">
                <label class="check mt-3 col-11" for="Availability">Bersedia menjalankan kegiatan Real Emergency Daily life selama 12 hari</label>
                @if($errors->has('Availability'))
                <div class="error error-message">{{ $errors->first('Availability') }}</div>
                @endif
            </div>

            <br>
            <div class="tombol mt-5">
                <button type="submit" class="button p-2">Submit</button>
            </div>
        </form>
    </div>
</div>

<footer id="footer">
    <img src="{{ asset('images/regis/Logo Footer.png')}}" class="logo mx-auto">
    <h6 class="foot mx-auto">© UMN ECO</h6>
</footer>

</header>

@endsection

@section('custom-js')
<!-- <script src="{{ asset('js/cms/page/home.js') }}"></script> -->
<!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/bodymovin/5.7.6/lottie.min.js"></script> -->
<script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
<script src="{{ asset('js/cms/base/sweetalert/sweetalert.js') }}"></script>
<script src="{{ asset('js/cms/page/jquery.validate.min.js') }}"></script>
<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
<script src="{{ asset('js/cms/page/registration.js') }}"></script>

@if ($errors->any())
<script>
    Swal.fire("Selamat datang", "Data yang di input tidak valid", "error");
</script>
@endif
<script>
    $("#next-btn").click(function() {
        $('.step-1').removeClass('active');
        $('.step-2').addClass('active');
    });
    function validateNIM(evt) {
        var theEvent = evt || window.event;

        // Handle paste
        if (theEvent.type === 'paste') {
            key = event.clipboardData.getData('text/plain');
        } else {
        // Handle key press
            var key = theEvent.keyCode || theEvent.which;
            key = String.fromCharCode(key);
        }
        var regex = /[0-9]|\./;
        if( !regex.test(key) ) {
            theEvent.returnValue = false;
            if(theEvent.preventDefault) theEvent.preventDefault();
        }
    }
</script>
@endsection