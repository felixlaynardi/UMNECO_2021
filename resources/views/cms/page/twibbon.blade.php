@extends('cms.template.app')

@section('custom-css')
<link rel="stylesheet" href="{{ asset('css/cms/page/twibbon.css') }}">
<link rel="stylesheet" href="https://unpkg.com/jcrop/dist/jcrop.css">
@endsection

@section('content')
<div class="twibbon-header">
    <div class="twibbon-header-inner">
        <img src="{{ asset('images/twibbon/Daun.png') }}" class="leaf-image-left" alt="">
        <img src="{{ asset('images/twibbon/Daun.png') }}" class="leaf-image-right" alt="">
        <!-- <img src="{{ asset('images/twibbon/Pizza.png') }}" class="pizza-image" alt=""> -->
        <!-- <img src="{{ asset('images/twibbon/Ayam.png') }}" class="chicken-image" alt=""> -->
        <div class="twibbon-header-title">Twibbon</div>
    </div>
</div>
<div class="twibbon-content mt-5 mb-5 position-relative">
    <img src="{{ asset('images/twibbon/Kentang.png') }}" class="fries-image" alt="">
    <img src="{{ asset('images/twibbon/Burger.png') }}" class="burger-image" alt="">
    <div class="container">
        <div class="twibbon-title">
            Teks Penjelas
        </div>
        <div class="twibbon-subtitle">
            Ayo, unggah Twibbon menu yang kamu pilih ke sosial mediamu! Dengan begitu, akan semakin banyak orang yang aware terhadap permasalahan food waste.
        </div>
        <div class="twibbon-image col-10 col-md-6 mx-auto mt-5 mb-3" style ="height: 100%;text-align: left;position: relative;margin:auto;padding:0;" id="frame">
            <img id="twibbon-photo" src="{{ asset('images/twibbon/placeholder.gif') }}" alt="" style="width:100%">
            <canvas id="canvas" style="display:none;"></canvas>
        </div>
        <div class="upload-content">
            <label class="upload-photo-label mt-5" for="uploadphoto">
                <span class="upload-photo-btn p-3">
                    Upload Photo
                </span>
                    <input type="file" style="display:none;" accept="image/png, image/jpeg, image/jpg"  name="uploadphoto" id="uploadphoto">
            </label>
            <button class="download-photo-btn p-3 mt-5" id="downloadphoto" style="display:none;">
                Download Photo
            </button>
        </div>
        <div class="twibbon-switcher mt-5 mb-5">
            <a class="exhort-button col-4 @if($status == 'exhort') selected @endif" href="{{ route('twibbonExhort') }}">
                <img src="{{ asset('images/Exhort.png') }}" class="exhort-image" alt="">
            </a>
            <a class="alter-button col-4 @if($status == 'alter') selected @endif" href="{{ route('twibbonAlter') }}">
                <img src="{{ asset('images/Alter.png') }}" class="alter-image" alt="">
            </a>
            <a class="tidbit-button col-4 @if($status == 'tidbit') selected @endif" href="{{ route('twibbonTidbit') }}">
                <img src="{{ asset('images/Tidbit.png') }}" class="tidbit-image" alt="">
            </a>
        </div>
    </div>
    <canvas id = "preview_canvas" style = "display: none"></canvas>
</div>
@include('cms.template.footer')
@endsection

@section('custom-js')
<script src="https://unpkg.com/jcrop"></script>
<script src="{{ asset('js/cms/page/fileSaver.js') }}"></script>
<script src="{{ asset('js/cms/page/canvasToBlob.js') }}"></script>
@if($status == 'exhort')
<script>
    var twibbon_name = 'twibbon_exhort';
</script>
@elseif($status == 'alter')
<script>
    var twibbon_name = 'twibbon_alter';
</script>
@else
<script>
    var twibbon_name = 'twibbon_tidbit';
</script>
@endif
<script>
    $(function () {
        $("#uploadphoto").change(function () {
            readURL(this);
        });
    });
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                // alert(e.target.result);
                $('#twibbon-photo').attr('src', e.target.result).on('load', function() {
                    changeCanvas();
                });
            }
            $('.upload-photo-btn').hide();
            $('#downloadphoto').hide();
            $('.upload-photo-btn').text('Change Photo');
            $('.upload-photo-btn').fadeIn(2000);
            $('#downloadphoto').fadeIn(2000);
            reader.readAsDataURL(input.files[0]);
        }
    }
</script>
<script>
    $downloadflag = false;
    function changeCanvas(){
        $('.jcrop-widget').remove();
        $('.jcrop-shade').remove();
        const img = new Image();
        const APP_URL = {!! json_encode(url('/')) !!}
        img.src = `${APP_URL}/images/twibbon/${twibbon_name}.png`;
        const photo = document.getElementById('twibbon-photo');
        const min = Math.min(photo.width, photo.height);

        const canvas = document.getElementById('canvas');
        canvas.width = photo.width;
        canvas.height = photo.height;
        const context = canvas.getContext('2d');
        context.drawImage(photo, 0, 0, photo.width, photo.height);

        class SvgWidget extends Jcrop.Widget {
            init () {
                super.init();
                this.el.appendChild(img);
            }
        }

        const jcrop = Jcrop.attach('frame',{
            aspectRatio: 1,
            allowResize: false,
            allowSelect: false,
            widgetConstructor: SvgWidget,
            setSelect: [0, 0, min, min]
        });
        jcrop.addClass('jcrop-ux-keep-current');

        const rect = Jcrop.Rect.create(0, 0, min, min);
        const options = { allowResize: false };
        jcrop.newWidget(rect, options);

        let flag = false;
        jcrop.listen('crop.update', (widget, e) => {
            const preview_canvas = document.getElementById('preview_canvas');
            preview_canvas.width = 1000;
            preview_canvas.height = 1000;
            preview_canvas.getContext('2d').drawImage(canvas, widget.pos.x, widget.pos.y, widget.pos.w, widget.pos.h, 0, 0, 1000, 1000);
            preview_canvas.getContext('2d').drawImage(img, 0, 0, 1000, 1000, 0, 0, 1000, 1000);
            flag = true;
        });
        if($downloadflag == false){
            document.getElementById('downloadphoto').addEventListener('click', () => {
                if (flag) {
                    const photo = document.getElementById('preview_canvas');
                    photo.toBlobHD((blob) => {
                        saveAs(blob, "Twibbon UMN ECO 2021.png");
                    }, "image/png");
                } else {
                    const photo = document.createElement('canvas');
                    photo.width = 1000;
                    photo.height = 1000;
                    photo.getContext('2d').drawImage(canvas, 0, 0, 1000, 1000);
                    photo.getContext('2d').drawImage(img, 0, 0, 1000, 1000);
                    photo.toBlobHD((blob) => {
                        saveAs(blob, "Twibbon UMN ECO 2021.png");
                    }, "image/png");
                }
            });
            $downloadflag = true;
        }
    };
</script>
@endsection