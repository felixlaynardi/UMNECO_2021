@extends('cms.template.app')

@section('custom-css')
    {{-- css style here --}}
    {{-- <link rel="stylesheet" href="{{ asset('css/cms/page/home.css') }}"> --}}
@endsection

@section('content')
    {{-- content here --}}

    @if(!$submit_status)
        <button type="button" id="submit-link" style="margin-top: 100px">SUBMIT NOW</button>
    @elseif($submit_status === 'not_login')
        <button type="button" style="margin-top: 100px"><a href="{{ route('loginView') }}">REGISTER NOW</a></button>
    @elseif($submit_status)
        <button type="button" id="submited-link" style="margin-top: 100px" disabled>SUBMITTED</button>
    @endif


@endsection

@section('custom-js')
    @if(session('status') == 'Blue Link Submitted')
        <script>
            Swal.fire(
            'Link Submitted',
            'You had submitted a link',
            'success'
            )
        </script>
    @endif

    @if(!$submit_status)
        <script>
            let re = /^(https?|s?ftp):\/\/(((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:)*@)?(((\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5])\.(\d|[1-9]\d|1\d\d|2[0-4]\d|25[0-5]))|((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?)(:\d*)?)(\/((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)+(\/(([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)*)*)?)?(\?((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|[\uE000-\uF8FF]|\/|\?)*)?(#((([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(%[\da-f]{2})|[!\$&'\(\)\*\+,;=]|:|@)|\/|\?)*)?$/i
            let valid = false;

            $("#submit-link").click(function() {
                Swal.fire({
                    title: 'Submit Link',
                    html: `
                    <form action="./submit_link_blue" method="POST" id="submit-link-blue">
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
                }).then((result) => {
                    if (valid) {
                        $("#submit-link-blue").submit()
                    }
                })
            })
        </script>
    @endif
@endsection
