@extends('cms.template.app')

@section('custom-css')
    <link rel="stylesheet" href="{{ secure_asset('css/cms/page/form-wizard.css') }}">
    <link rel="stylesheet" href="{{ secure_asset('css/cms/page/oprec_form.css') }}">
@endsection

@section('content')

    <div class="fullpage pt-5 pb-5">
        <div class="wrapper">
            <div id="wizard" class="wizard col-md-12 col-10">
                <div class="wizard__content">
                <header class="wizard__header">
                    <!-- <div class="wizard__header-overlay"></div> -->
                    <div class="wizard__header-content">
                        <!-- <h1 class="wizard__title" >FORM PENDAFTARAN</h1>
                        <p class="wizard__subheading"></p> -->
                    </div>

                    <div class="wizard__steps">
                        <nav class="steps">
                            <div class="step">
                                <div class="step__content">
                                    <p class="step__number"><i class="fas fa-user"></i></p>
                                    <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                        <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                                        <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                                    </svg>

                                    <div class="lines">
                                        <div class="line -start">
                                        </div>

                                        <div class="line -background">
                                        </div>

                                        <div class="line -progress">
                                        </div>
                                    </div>  
                                </div>
                            </div>
                            
                            <div class="step">
                                <div class="step__content">
                                    <p class="step__number"><i class="fa fa-book"></i></p>
                                    <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                        <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                                        <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                                    </svg>

                                    <div class="lines">
                                        <div class="line -background">
                                        </div>

                                        <div class="line -progress">
                                        </div>
                                    </div> 
                                </div>
                            </div>

                            <div class="step">
                                <div class="step__content">
                                    <p class="step__number"><i class="fas fa-users"></i></p>
                                    <svg class="checkmark" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 52 52">
                                        <circle class="checkmark__circle" cx="26" cy="26" r="25" fill="none"/>
                                        <path class="checkmark__check" fill="none" d="M14.1 27.2l7.1 7.2 16.7-16.8"/>
                                    </svg>

                                    <div class="lines">
                                        <div class="line -background">
                                        </div>

                                        <div class="line -progress">
                                        </div>
                                    </div> 
                                </div>
                            </div>
                        </nav>
                    </div>

                </header>

                <!-- data-rule-uniquestagename="true" -->
                <div class="panels">
                    <form action="{{ route('oprecPost') }}" method="post" enctype="multipart/form-data">
                        @csrf 
                        <input type="hidden" name="teamname" value="{{ $item }}">
                        <div class="panel firstpanel">
                            
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group mb-2">
                                        <label>Nama Lengkap<span class="text-danger">*</span></label>
                                        <input name="fullname" type="text" class="form-control" placeholder="UMN ECO">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>NIM<span class="text-danger">*</span></label>
                                        <input name="nim" type="number" class="form-control" placeholder="00000012345">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Fakultas<span class="text-danger">*</span></label>
                                        <select name="faculty" class="form-select" onchange="majorsCheck(this)">
                                            <option selected value="comm">Fakultas Ilmu Komunikasi</option>
                                            <option value="design">Fakultas Seni & Design</option>
                                            <option value="business">Fakultas Bisnis & Perhotelan</option>
                                            <option value="fti">Fakultas Teknik & Informatika</option>
                                        </select>
                                    </div>
                                    <!-- Teknik & Informatika -->
                                    <div class="form-group mb-2 form-fti" style="display:none;">
                                        <label>Jurusan<span class="text-danger">*</span></label>
                                        <select name="majors_fti" class="form-select">
                                            <option selected value="informatika">Informatika</option>
                                            <option value="sistem_informasi">Sistem Informasi</option>
                                            <option value="teknik_komputer">Teknik Komputer</option>
                                            <option value="teknik_elektro">Teknik Elektro</option>
                                            <option value="teknik_fisika">Teknik Fisika</option>
                                        </select>
                                    </div>
                                    <!-- Bisnis -->
                                    <div class="form-group mb-2 form-business" style="display:none;">
                                        <label>Jurusan<span class="text-danger">*</span></label>
                                        <select name="majors_business" class="form-select">
                                            <option selected value="akuntansi">Akuntansi</option>
                                            <option value="manajemen">Manajemen</option>
                                            <option value="perhotelan">Perhotelan</option>
                                        </select>
                                    </div>
                                    <!-- Ilmu Komunikasi -->
                                    <div class="form-group mb-2 form-comm">
                                        <label>Jurusan<span class="text-danger">*</span></label>
                                        <select name="majors_comm" class="form-select">
                                            <option selected value="strakom">Komunikasi Strategis</option>
                                            <option value="jurnalistik">Jurnalistik</option>
                                        </select>
                                    </div>
                                    <!-- Seni & Design -->
                                    <div class="form-group mb-2 form-design" style="display:none;">
                                        <label>Jurusan<span class="text-danger">*</span></label>
                                        <select name="majors_design" class="form-select">
                                            <option selected value="dkv">Design Komunikasi Visual</option>
                                            <option value="arsitektur">Arsitektur</option>
                                            <option value="film_animasi">Film & Animasi</option>
                                        </select>
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Angkatan<span class="text-danger">*</span></label>
                                        <input name="classyear" data-rule-classy="true" type="number" class="form-control" placeholder="2021">
                                    </div>
                                    <div class="form-group mb-2 birthform" style="width:100%">
                                        <label class="w-100">Tempat & Tanggal Lahir<span class="text-danger">*</span></label>
                                            <input name="place_of_birth" type="text" class="form-control form-pob" placeholder="Tangerang">
                                            <input name="birthdate" type="text" class="form-control date-picker form-date" id="birthdate" placeholder="15 Februari 2021" >
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Username Instagram<span class="text-danger">*</span></label>
                                        <input name="instagram" type="text" class="form-control" placeholder="umn_eco">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>ID Line<span class="text-danger">*</span></label>
                                        <input name="line" type="text" class="form-control" placeholder="umn_eco">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Nomor Telepon<span class="text-danger">*</span></label>
                                        <input name="phonenumber" type="text" class="form-control phone" placeholder="0812-3456-789">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Email Student<span class="text-danger">*</span></label>
                                        <input name="email" type="email" id="email" class="form-control" placeholder="umneco@student.umn.ac.id">
                                    </div>
                                    <div class="form-group mb-2">
                                        <label>Foto<span class="text-danger">*</span> <small>(dalam format ... )</small></label>
                                        <div class="custom-file">
                                            <input type="file" class="form-control" name="photo" id="photo">
                                            <div class="invalid-feedback">Invalid file</div>
                                        </div>
                                    </div>

                                    <div class="form-group mb-2">
                                        <label>Pengalaman Organisasi<span class="text-danger">*</span></label>
                                        <textarea name="experience" class="form-control" placeholder="Menjadi anggota UMN ECO sebagai bagian dari tim Eco Friends" rows="3"></textarea>
                                    </div>
                                </div>
                            </div>
        
                        </div>

                        <div class="panel secondpanel col-10">
                            <div class="form-group mb-2">
                                <label>Apa itu UMN ECO?<span class="text-danger">*</span></label>
                                <textarea name="about" class="form-control" placeholder="Tulis apa yang kamu ketahui." rows="3"></textarea>
                            </div>
                            <div class="form-group mb-2">
                                <label>Kenapa ingin bergabung di UMN ECO?<span class="text-danger">*</span></label>
                                <textarea name="why" class="form-control" placeholder="Tuliskan alasanmu." rows="3" ></textarea>
                            </div>
                            <div class="form-group mb-2">
                                <label>Kenapa ingin bergabung dengan divisi yang dipilih?<span class="text-danger">*</span></label>
                                <textarea name="division" class="form-control" placeholder="Tuliskan alasanmu." rows="3"></textarea>
                            </div>
                        </div>

                        <div class="panel thirdpanel">
                            @switch($item)
                                @case('genta')
                                    <div id="form-genta">
                                        <div class="middle mb-2">
                                            <label>
                                                <input type="radio" name="radio" value="pr" onclick="radioCheck1();" checked />
                                                <div class="front-end box">
                                                    <span>Public Relation</span>
                                                </div>
                                            </label>
                                        
                                            <label>
                                                <input type="radio" name="radio" value="visual" onchange="radioCheck2();"/>
                                                <div class="back-end box">
                                                    <span>Visual</span>
                                                </div>
                                            </label>
                                        </div>
                                        <div id="form-visual" class="hide">
                                            <div class="form-group mb-2" >
                                                <label>Jika anda harus membuat motion graphic dari 0, hal apa saja yang anda lakukan demi menyelesaikannya secara efisien dan tepat?<span class="text-danger">*</span></label>
                                                <textarea name="visualQ1" class="form-control" placeholder="Tim Genta UMN ECO 2021" rows="3" ></textarea>
                                                </br></br>
                                                <p ><strong>Portofolio Genta Subtim Visual</strong></p></br>
                                                <p class="text-smaller">Portofolio yang harus dikumpulkan:</p>
                                                <p class="text-smaller">1 motion graphic / design graphic</p>
                                                <p class="text-smaller">1 karya bebas</p>
                                                <p class="text-smaller">Harap portofolio dikirimkan ke email genta.umneco2021@gmail.com dengan subjek Visual - Nama Lengkap (contoh: Visual - Alex Setiawan).</p>
                                                <input name="validateport1" class="inp-cbx" id="validateport1" type="checkbox" onclick="hiddenCheck1();" />
                                                <label class="cbx" for="validateport1"><span><svg width="6px" height="5px"><use xlink:href="#check"></use></svg></span><span>Saya sudah membaca dan mengerti mengenai ketentuan diatas</span></label>
                                                <svg class="inline-svg"><symbol id="check" viewbox="0 0 12 10"><polyline points="1.5 6 4.5 9 10.5 1"></polyline></symbol></svg>
                                                <input type="text" name="hiddencheck" id="hiddencheck" value="" style="opacity: 0;position: absolute;left: -2000000px;">
                                            </div>
                                        </div>
                                        <div id="form-pr" class="">
                                            <div class="img-question">
                                                <img src="{{ secure_asset('images/oprec/question-genta.png') }}" class="img-fluid">
                                            </div>
                                            <div class="form-group mb-2">
                                                <label>Buatlah caption untuk gambar tersebut!<span class="text-danger">*</span></label>
                                                <textarea name="prQ1" class="form-control" placeholder="Tim Genta UMN ECO 2021" rows="3" ></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    @break
                                @case('bacarita')
                                    <div id="form-bacarita">
                                        <div class="middle mb-2">
                                            <label>
                                                <input type="radio" name="radio" value="foto" onclick="radioCheck3();" checked/>
                                                <div class="front-end box">
                                                    <span>Photo</span>
                                                </div>
                                            </label>
                                        
                                            <label>
                                                <input type="radio" name="radio" value="video" onchange="radioCheck4();"/>
                                                <div class="back-end box">
                                                    <span>Video</span>
                                                </div>
                                            </label>
                                        </div>

                                        <div id="form-photo" class="">
                                            <div class="form-group mb-2" >
                                                <label>Jika berbicara tentang foto, anda lebih memilih moment atau estetika?<span class="text-danger">*</span></label>
                                                <textarea name="bacaritaQ1" class="form-control" placeholder="Tim Bacarita UMN ECO 2021" rows="3" ></textarea>
                                                </br></br>
                                                <p ><strong>Portofolio Bacarita Subtim Foto</strong></p></br>
                                                <p class="text-smaller">Portofolio yang harus dikumpulkan:</p>
                                                <p class="text-smaller">3 foto human interest</p>
                                                <p class="text-smaller">3 virtual documentation</p>
                                                <p class="text-smaller">1 digital imaging (opsional dan akan menjadi nilai tambah jika ada)</p>
                                                <p class="text-smaller">Harap portofolio dikirimkan ke email bacarita.umneco2021@gmail.com dengan subjek Foto - Nama Lengkap (contoh: Foto - Alex Setiawan).</p>
                                                <input name="validateport2" class="inp-cbx" id="validateport2" type="checkbox" onclick="hiddenCheck2();"/>
                                                <label class="cbx" for="validateport2"><span><svg width="6px" height="5px"><use xlink:href="#check"></use></svg></span><span>Saya sudah membaca dan mengerti mengenai ketentuan diatas</span></label>
                                                <svg class="inline-svg"><symbol id="check" viewbox="0 0 12 10"><polyline points="1.5 6 4.5 9 10.5 1"></polyline></symbol></svg>
                                                <input type="text" name="hiddencheck2" id="hiddencheck2" value="" style="opacity: 0;position: absolute;left: -2000000px;">
                                            </div>
                                        </div>
                                        <div id="form-video" class="hide">
                                            <div class="form-group mb-2">
                                                <label>Apabila acara sedang berlangsung dan tiba-tiba camera terkena format, apa tindakan yang harus dilakukan dan apa antisipasinya?<span class="text-danger">*</span></label>
                                                <textarea name="bacaritaQ2" class="form-control" placeholder="Tim Bacarita UMN ECO 2021" rows="3" ></textarea>
                                                </br></br>
                                                <p ><strong>Portofolio Bacarita Subtim Video</strong></p></br>
                                                <p class="text-smaller">Portofolio yang harus dikumpulkan:</p>
                                                <p class="text-smaller">1 video reel dengan durasi 1-2 menit</p>
                                                <p class="text-smaller">1 video mograph (opsional dan akan menjadi nilai tambah jika ada)</p>
                                                <p class="text-smaller">Harap portofolio dikirimkan ke email bacarita.umneco2021@gmail.com dengan subjek Video - Nama Lengkap (contoh: Video - Alex Setiawan).</p>
                                                <input name="validateport3" class="inp-cbx" id="validateport3" type="checkbox" onclick="hiddenCheck3();"/>
                                                <label class="cbx" for="validateport3"><span><svg width="6px" height="5px"><use xlink:href="#check"></use></svg></span><span>Saya sudah membaca dan mengerti mengenai ketentuan diatas</span></label>
                                                <svg class="inline-svg"><symbol id="check" viewbox="0 0 12 10"><polyline points="1.5 6 4.5 9 10.5 1"></polyline></symbol></svg>
                                                <input type="text" name="hiddencheck3" id="hiddencheck3" value="" style="opacity: 0;position: absolute;left: -2000000px;">
                                            </div>
                                        </div>
                                    </div>
                                    @break
                                @case('liku')
                                    <div id="form-liku">
                                        <div class="middle ">
                                            <label>
                                                <input type="radio" name="radio" value="sponsor" onclick="radioCheck5();" checked/>
                                                <div class="front-end box">
                                                    <span>Sponsor</span>
                                                </div>
                                            </label>
                                        
                                            <label>
                                                <input type="radio" name="radio" value="medpar" onchange="radioCheck6();"/>
                                                <div class="back-end box">
                                                    <span>Media Partner</span>
                                                </div>
                                            </label>
                                        </div>

                                        <div id="form-sponsor" class="">
                                            <div class="form-group mb-2" >
                                                <label>Sebutkan relasi atau kenalan perusahaan/organisasi yang anda ketahui dan apakah anda dapat menjalin kerjasama dengan mereka sebagai sponsor UMN ECO?<span class="text-danger">*</span></label>
                                                <textarea name="likuQ1" class="form-control" placeholder="Tim Liku UMN ECO 2021" rows="3" ></textarea>
                                            </div>
                                            
                                        </div>
                                        <div id="form-medpar" class="hide">
                                            <div class="form-group mb-2">
                                                <label>Menurutmu, bagaimana seharusnya untuk mengapproach media agar bisa bekerja sama dengan UMN ECO?<span class="text-danger">*</span></label>
                                                <textarea name="likuQ2" class="form-control" placeholder="Tim Liku UMN ECO 2021" rows="3" ></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    @break
                                @case('anta')
                                    <div id="form-anta">
                                        <div class="form-group mb-2">
                                            <label>Urutkan skala prioritas dalam hidupmu.</label>
                                            <textarea name="antaQ1" rows="3" class="form-control" placeholder="Tim Anta UMN ECO 2021"></textarea>
                                        </div>
                                        <div class="form-group mb-2">
                                            <label>Buatlah konsep kegiatan UMN ECO 2021 secara garis besar untuk offline dan online.</label>
                                            <textarea name="antaQ2" rows="3" class="form-control" placeholder="Tim Anta UMN ECO 2021"></textarea>
                                        </div>
                                    </div>
                                @break
                                @case('gantar')
                                    <div id="form-gantar">
                                        <div class="form-group mb-2">
                                            <label>Menurut anda, seberapa penting tugas tim insurer (divisi keamanan) di dalam sebuah organisasi?</label>
                                            <textarea name="gantarQ1" rows="3" class="form-control" placeholder="Tim Gantar UMN ECO 2021"></textarea>
                                        </div>
                                        <div class="form-group mb-2">
                                            <label>Menurut anda, apakah galak dengan tegas memilik arti yang berbeda? Jika ya, jelaskan letak perbedaannya!</label>
                                            <textarea name="gantarQ2" rows="3" class="form-control" placeholder="Tim Gantar UMN ECO 2021"></textarea>
                                        </div>
                                    </div>
                                @break
                                @case('arto')
                                    <div id="form-arto">
                                        <div class="form-group mb-2">
                                            <label>Berikan input kreatif-mu dalam upaya mencari dana untuk UMN ECO (out of the box ideas)</label>
                                            <textarea name="artoQ1" rows="3" class="form-control" placeholder="Tim Arto UMN ECO 2021"></textarea>
                                        </div>
                                        <div class="form-group mb-2">
                                            <label>Ketika tim finance dalam pelaksanaan jobdesc nya mendapatkan reaksi yang tidak sesuai dengan harapan dari para panitia lain, apa yang akan anda lakukan?</label>
                                            <textarea name="artoQ2" rows="3" class="form-control" placeholder="Tim Arto UMN ECO 2021"></textarea>
                                        </div>
                                    </div>
                                @break
                                @case('lua')
                                    <div id="form-lua">
                                        <div class="form-group mb-2">
                                            <label>Apakah anda tau teknis livestreaming menggunakan obs atau semacamnya?</label>
                                            <textarea name="luaQ1" rows="3" class="form-control" placeholder="Tim Lua UMN ECO 2021"></textarea>
                                        </div>
                                        <div class="form-group mb-2">
                                            <label>Apakah sudah bisa mengoprasikan zoom dengan baik? Karena kita akan menggunakan zoom cukup sering?</label>
                                            <textarea name="luaQ2" rows="3" class="form-control" placeholder="Tim Lua UMN ECO 2021"></textarea>
                                        </div>
                                    </div>
                                @break
                                @case('lawang')
                                    <div id="form-lawang">
                                        <div class="form-group mb-2">
                                            <label>Sikap apa saja yang perlu dimiliki dalam berkontribusi sebagai Tim Lawang di UMN ECO? Berikan alasannya!</label>
                                            <textarea name="lawangQ1" rows="3" class="form-control" placeholder="Tim Lawang UMN ECO 2021"></textarea>
                                        </div>
                                        <div class="form-group mb-2">
                                            <label>Apa yang anda ketahui tentang Tim Lawang UMN ECO? Kira-kira seperti apa pekerjaannya?</label>
                                            <textarea name="lawangQ2" rows="3" class="form-control" placeholder="Tim Lawang UMN ECO 2021"></textarea>
                                        </div>
                                    </div>
                                @break
                                @case('orta')
                                    <div id="form-orta">
                                        <div class="form-group mb-2">
                                            <label>Apa yang anda ketahui tentang website? Jelaskan secara singkat!</label>
                                            <textarea name="ortaQ1" rows="3" class="form-control" placeholder="Tim Orta UMN ECO 2021"></textarea>
                                        </div>
                                        <div class="form-group mb-2">
                                            <label>Menurut anda desain website yang tidak bagus itu seperti apa?</label>
                                            <textarea name="ortaQ2" rows="3" class="form-control" placeholder="Tim Orta UMN ECO 2021"></textarea>
                                        </div>
                                    </div>
                                @break
                            @endswitch
                        </div>
                        <!-- </div> -->

                        <div class="wizard__footer">
                            <button type="button" class="button previous">Previous</button>
                            <button type="button" class="button next">Next</button>
                            <button type="submit" class="button fin hide">Finish</button>
                        </div>
                    </form>
                </div>

                <!-- <h1 class="wizard__congrats-message">
                    Congratulations, you are now in a world of pain and suffering!
                </h1> -->
            </div>
        </div>
    </div>

@endsection

@section('custom-js')
    <script src="{{ secure_asset('js/cms/base/jquery/jquery-ui.min.js') }}"></script>
    <script src="{{ secure_asset('js/cms/page/jquery.validate.min.js') }}"></script>
    <script src="{{ secure_asset('js/cms/page/form-wizard.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
    
    <script>
        $(document).ready(function(){
            $('.date-picker').datepicker();
        })
        function majorsCheck(input){    
            if(input.options[input.selectedIndex].value == "comm"){
                $(".form-comm").css("display","block");
                $(".form-business").css("display","none");
                $(".form-design").css("display","none");
                $(".form-fti").css("display","none");
            }
            else if(input.options[input.selectedIndex].value == "business"){
                $(".form-business").css("display","block");
                $(".form-comm").css("display","none");
                $(".form-design").css("display","none");
                $(".form-fti").css("display","none");
            }
            else if(input.options[input.selectedIndex].value == "design"){
                $(".form-design").css("display","block");
                $(".form-comm").css("display","none");
                $(".form-business").css("display","none");
                $(".form-fti").css("display","none");
            }
            else{
                $(".form-fti").css("display","block");
                $(".form-design").css("display","none");
                $(".form-comm").css("display","none");
                $(".form-business").css("display","none");
            }
        }
    </script>
    <script>
        function radioCheck1(){
            document.getElementById('form-pr').style.display='block';
            document.getElementById('form-visual').style.display='none';
        }
        function radioCheck2(){
            document.getElementById('form-pr').style.display='none';
            document.getElementById('form-visual').style.display='block';
        }
        function radioCheck3(){
            document.getElementById('form-photo').style.display='block';
            document.getElementById('form-video').style.display='none';
        }
        function radioCheck4(){
            document.getElementById('form-photo').style.display='none';
            document.getElementById('form-video').style.display='block';
        }
        function radioCheck5(){
            document.getElementById('form-sponsor').style.display='block';
            document.getElementById('form-medpar').style.display='none';
        }
        function radioCheck6(){
            document.getElementById('form-sponsor').style.display='none';
            document.getElementById('form-medpar').style.display='block';
        }
        function hiddenCheck1(){
            var check = document.getElementById('hiddencheck');
            if(check.value != ""){
                check.value = "";
            }else{
                check.value ="terisi";
            }
        }
        function hiddenCheck2(){
            var check2 = document.getElementById('hiddencheck2');
            if(check2.value != ""){
                check2.value = "";
            }else{
                check2.value ="terisi";
            }
        }
        function hiddenCheck3(){
            var check3 = document.getElementById('hiddencheck3');
            if(check3.value != ""){
                check3.value = "";
            }else{
                check3.value ="terisi";
            }
        }
    </script>
    <script>
        (function ($) {
        $.fn.usPhoneFormat = function (options) {
            var params = $.extend(
                {
                    format: "xxx-xxx-xxxx",
                    international: false,
                },
                options
            );

            if (params.format === "x") {
                $(this).bind("paste", function (e) {
                    e.preventDefault();
                    var inputValue = e.originalEvent.clipboardData.getData("Text");
                    if (!$.isNumeric(inputValue)) {
                        return false;
                    } else {
                        if(inputValue < 9 && inputValue > 1){
                            $(this).val(inputValue);
                        }
                    }
                });
            } else if (params.format === "xxxx-xxxx-xxx") {
                $(this).on("keypress", function (e) {
                    if (
                        e.which != 8 &&
                        e.which != 0 &&
                        (e.which < 48 || e.which > 57)
                    ) {
                        return false;
                    }
                    var curchr = this.value.length;
                    var curval = $(this).val();
                    if (curchr == 4 || curchr == 9) {
                        $(this).val(curval + "-");
                    }
                    $(this).attr("maxlength", "15");
                });
                $(this).bind("paste", function (e) {
                    e.preventDefault();
                    var inputValue = e.originalEvent.clipboardData.getData("Text");
                    console.log(inputValue);
                    if (!$.isNumeric(inputValue)) {
                        return false;
                    } else {
                        inputValue = String(
                            inputValue.replace(
                                /(\d{0,4})(\d{0,4})(\d{0,5})/,
                                "$1-$2-$3"
                            )
                        );
                        console.log(inputValue);
                        $(this).val(inputValue);
                        $(this).val("");
                        inputValue = inputValue.substring(0, 15);
                        $(this).val(inputValue);
                    }
                });
            } else if(params.format === "xx") {
                $(this).bind("paste", function (e) {
                    e.preventDefault();
                    var inputValue = e.originalEvent.clipboardData.getData("Text");
                    if (!$.isNumeric(inputValue)) {
                        return false;
                    } else {
                        if(inputValue.length >= 10 && inputValue.length <= 18){
                            $(this).val(inputValue);
                        }
                    }
                });
            }
        };
    })(jQuery);
    $(document).ready(function () {
        $(".phone").usPhoneFormat({
            format: "xxxx-xxxx-xxx",
        });
    });

    </script>
@endsection
