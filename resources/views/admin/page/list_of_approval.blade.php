@extends('admin.template.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h1 class="h2 text-gray-800">List of Approval</h1>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-eco1">List of Approval</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Team</th>
                            <th>Eco Friends</th>
                            <th>Mission</th>
                            <th>Day</th>
                            <th>Status</th>
                            <th>Notes</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Team</th>
                            <th>Eco Friends</th>
                            <th>Mission</th>
                            <th>Day</th>
                            <th>Status</th>
                            <th>Notes</th>
                        </tr>
                    </tfoot>
                    <tbody>
                    @if(count($allMissionApp) > 0)
                        @foreach($allMissionApp as $missionapp)
                            @foreach($allTeams as $team)
                                @if($missionapp->admin_id == $team->id)
                                    @php
                                        $admin[$missionapp->id] = $team->name
                                    @endphp
                                @endif
                            @endforeach
                            @foreach($allEcoFriends as $ef)
                                @if($missionapp->userid == $ef->id)
                                    @php
                                        $user[$missionapp->id] = $ef->firstname . " " . $ef->lastname
                                    @endphp
                                @endif
                            @endforeach
                            <tr>
                                <td>{{ $admin[$missionapp->id] }}</td>
                                <td>{{ $user[$missionapp->id] }}</td>
                                <td>{{ $missionapp->mission_name }}</td>
                                <td>{{ $missionapp->mission_id }}</td>
                                <td>{{ $missionapp->type }}</td>
                                <td>
                                    <button class="btn btn-info btn-icon-split btn-sm" id="{{ $missionapp->id }}">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-info-circle"></i>
                                        </span>
                                        <span class="text">Notes</span>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    @endif
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
    @foreach($allMissionApp as $missionapp)
        $("#{{ $missionapp->id }}").click(function() {
            Swal.fire({
                title: 'Notes',
                text: '{{ $missionapp->notes }}',
                showCancelButton: false,
                showCloseButton: true,
                focusConfirm: false
            })
        })
    @endforeach
    </script>
@endsection