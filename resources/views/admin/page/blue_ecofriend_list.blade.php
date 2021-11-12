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
            <h6 class="m-0 font-weight-bold text-eco1">List Of Blue Eco Friends</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="blueEFL" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Fullname</th>
                            <th>Email</th>
                            <th>NIM</th>
                            <th>Faculty</th>
                            <th>Major</th>
                            <th>Generation</th>
                            <th>Instagram Account</th>
                            <th>Line ID</th>
                            <th>Phone Number</th>
                            <th>Registration Time</th>
                            <th>Task Link</th>
                            <th>Submission Time</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($data as $item)
                            <tr>
                                <td>{{ $item->full_name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->student_id }}</td>
                                <td>{{ $item->faculty }}</td>
                                <td>{{ $item->major }}</td>
                                <td>{{ $item->generation }}</td>
                                <td>{{ $item->instagram_account }}</td>
                                <td>{{ $item->line_id }}</td>
                                <td>{{ $item->phone_number }}</td>
                                <td>{{ $item->registration_time }}</td>
                                @if($item->task_link != NULL)
                                    <td>{{ $item->task_link }}</td>
                                @else
                                    <td>No Submission</td>
                                @endif
                                <td>{{ $item->submission_time }}</td>
                            </tr>
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
    $(document).ready(function() {
        $('#blueEFL').DataTable( {
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
