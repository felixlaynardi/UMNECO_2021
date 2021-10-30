@extends('cms.template.app')

@section('custom-css')
    {{-- css style here --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/cms/page/home.css') }}"> --}}
@endsection

@section('content')
    {{-- content here --}}
    {{-- frans = gw cma bkin div biasa buat tampilan button --}}
        <button type="button" style="margin-top: 100px">BUTTON</button>

@endsection

@section('custom-js')
    {{-- <script src="{{ asset('js/cms/page/home.js') }}"></script> --}}
    
    <script src="{{ asset('js/cms/base/sweetalert/sweetalert.js') }}"></script>
    <script>
    // Swal.fire({
    //     icon: 'success',
    //     title: 'Welcome',
    //     text: 'Hope these quests can be your new habit for a better Earth.',
    // })
    var re = /^(https?|s?ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i
    var valid = false;

    Swal.fire({
        title: 'Submit Link',
        html: `
        <form action="./submit_link_blue" method="post" id="form-rise">
            @csrf
            <input type="url" name="link" id="task-link" class="swal2-input" placeholder="Insert Link">
        </form>
    `,
        showCancelButton: false,
        confirmButtonText: 'Submit',
        focusConfirm: false,
        preConfirm: () => {
            const url = Swal.getPopup().querySelector('#task-link').value
            valid = true
            if (!url || !re.test(url)) {
                Swal.showValidationMessage(`Harus menggunakan url yang valid`)
                valid = false
            }
            return {
                url: valid
            }
        }
    })
</script>
@endsection