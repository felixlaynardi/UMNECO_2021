@extends('admin.template.admin')

@section('content')
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
                                    @if($item->dine_in)
                                        <td>Ordered</td>
                                    @else
                                        <td>Not Order</td>
                                    @endif
                                    @if($item->takeaway_id == 1)
                                        <td>Exhort</td>
                                    @elseif($item->takeaway_id == 2)
                                        <td>Alter</td>
                                    @elseif($item->takeaway_id == 3)
                                        <td>Tidbit</td>
                                    @elseif($item->takeaway_id == 4)
                                        <td>None</td>
                                    @endif
                                    
                                    @if($item->task_link != NULL)
                                        <td>{{ $item->task_link }}</td>
                                    @else
                                        <td>No Submission</td>
                                    @endif
                                </tr>
                            @else
                                <tr>
                                    <td>{{ $item->full_name }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>Eksternal</td>
                                    <td>Universitas Multimedia Nusantara</td>
                                    <td>Eksternal</td>
                                    <td>Eksternal</td>
                                    <td>{{ $item->instagram_account }}</td>
                                    <td>{{ $item->line_id }}</td>
                                    <td>{{ $item->phone_number }}</td>
                                    <td>NO</td>
                                    @if($item->task_link != NULL)
                                        <td>{{ $item->task_link }}</td>
                                    @else
                                        <td>No Submission</td>
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
    $(document).ready(function() {
        $('#greenateEFL').DataTable( {
            "scrollX": true
        } );
    } );
</script>
@endsection