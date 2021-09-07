@extends('admin.template.admin')

@section('content')
<div class="col-sm-12 d-flex flex-row-reverse my-3 px-4">
    <button class="d-sm-inline-block btn btn-sm btn-success shadow-sm" id="chngPass">
        <i class="fas fa-cog fa-sm text-white-50"></i> Change Password
    </button>
</div>
<!-- Begin Page Content -->
<div class="container-fluid">
    <!-- DataTales -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-eco1">List Of Greenate Eco Friends</h6>
        </div>
        
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="greenateEFL" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama Lengkap</th>
                            <th>Email</th>
                            <th>NIM</th>
                            <th>Institusi</th>
                            <th>Jurusan</th>
                            <th>Angkatan</th>
                            <th>Instagram Account</th>
                            <th>Line ID</th>
                            <th>Phone Number</th>
                            <th>Internal</th>
                            <th>Dine In</th>
                            <th>Take Away</th>
                            <th>Task Link</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($data as $item)
                            @if($item->is_internal)
                                <tr>
                                    <td>{{ $item->full_name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->student_id }}</td>
                                    <td>Universitas Multimedia Nusantara</td>
                                    <td>{{ $item->major }}</td>
                                    <td>{{ $item->generation }}</td>
                                    <td>{{ $item->instagram_account }}</td>
                                    <td>{{ $item->line_id }}</td>
                                    <td>{{ $item->phone_number }}</td>
                                    <td>YES</td>
                                    @if($item->dine_in && $item->dine_in != NULL)
                                        <td>Ordered</td>
                                    @else
                                        <td>-</td>
                                    @endif
                                    @if($item->takeaway_id == 1)
                                        <td>Exhort</td>
                                    @elseif($item->takeaway_id == 2)
                                        <td>Alter</td>
                                    @elseif($item->takeaway_id == 3)
                                        <td>Tidbit</td>
                                    @elseif($item->takeaway_id == 4 || $item->takeaway_id == NULL)
                                        <td>-</td>
                                    @endif
                                    
                                    @if($item->task_link != NULL)
                                        <td>{{ $item->task_link }}</td>
                                    @else
                                        <td>-</td>
                                    @endif
                                </tr>
                            @else
                                <tr>
                                    <td>{{ $item->full_name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>-</td>
                                    <td>{{ $item->institution }}</td>
                                    <td>-</td>
                                    <td>-</td>
                                    <td>{{ $item->instagram_account }}</td>
                                    <td>{{ $item->line_id }}</td>
                                    <td>{{ $item->phone_number }}</td>
                                    <td>NO</td>
									@if($item->dine_in && $item->dine_in != NULL)
                                        <td>Ordered</td>
                                    @else
                                        <td>-</td>
                                    @endif
                                    @if($item->takeaway_id == 1)
                                        <td>Exhort</td>
                                    @elseif($item->takeaway_id == 2)
                                        <td>Alter</td>
                                    @elseif($item->takeaway_id == 3)
                                        <td>Tidbit</td>
                                    @elseif($item->takeaway_id == 4 || $item->takeaway_id == NULL)
                                        <td>-</td>
                                    @endif
                                    @if($item->task_link != NULL)
                                        <td>{{ $item->task_link }}</td>
                                    @else
                                        <td>-</td>
                                    @endif
                                </tr>
                            @endif
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
@endsection

@section('custom-js')
<script>
    @if(session()->has('msg'))
        Swal.fire('{{ session()->get('msg') }}');
    @endif
    $(document).ready(function() {
        $('#greenateEFL').DataTable( {
            "scrollX": true
        } );

        $("#chngPass").click(function() {
            Swal.fire({
                title: "Change password",
                html: `
                <form action="{{ route('changePass') }}" method="post">
                    @csrf
                    <input type="text" name="email" id="email" class="swal2-input" placeholder="Type the email here..."></input>
                    <input type="text" name="password" id="password" class="swal2-input" placeholder="Type the new password here..."></input>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            `,
                showCancelButton: false,
                showConfirmButton: false,
                focusConfirm: false
            })
        })
    } );
</script>
@endsection