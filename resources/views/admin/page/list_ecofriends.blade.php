@extends('admin.template.admin')

@section('content')
<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-2">
        <h1 class="h2 text-gray-800">Eco Friends</h1>
        <button class="btn btn-danger btn-icon-split btn-lg mb-3" disabled>
            <span class="icon text">
                RED
            </span>
            <span class="text">
                Day {{ $day }}
            </span>
        </button>
    </div>

    <!-- DataTales Example -->
    <div class="card shadow mb-4">
        <div class="card-header py-3">
            <h6 class="m-0 font-weight-bold text-eco1">List Of Eco Friends</h6>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>Nama Lengkap</th>
                            <th>Rise Mission</th>
                            <th>Utopia Mission</th>
                            <th>Utile Mission</th>
                            <th>Raconteur Mission</th>
                            <th>Detail</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Nama Lengkap</th>
                            <th>Rise Mission</th>
                            <th>Utopia Mission</th>
                            <th>Utile Mission</th>
                            <th>Raconteur Mission</th>
                            <th>Detail</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @if(count($items) > 0)
                        @foreach($items as $item)
                            <tr>
                                <td>{{ $item->firstname }} {{ $item->lastname }}</td>
                                <td>
                                    @php
                                        $riseProg[$item->id] = ""
                                    @endphp

                                    @php
                                        $riseMA[$item->id] = "nc"
                                    @endphp

                                    @foreach($riseMissionByIds as $riseProgress)
                                        @if(!empty($riseProgress->userid == $item->id))
                                            @php
                                                $riseProg[$item->id] = $riseProgress->status
                                            @endphp
                                        @endif
                                    @endforeach

                                    @foreach($riseMissionAppbyDay as $riseMApp)
                                        @if(!empty($riseMApp->userid == $item->id))
                                            @php
                                                $riseMA[$item->id] = "c"
                                            @endphp
                                        @endif
                                    @endforeach

                                    @if($riseProg[$item->id] === "")
                                        No Submission
                                    @elseif($riseMA[$item->id] === "c")
                                        @if($riseProg[$item->id] == false)
                                            <button class="btn btn-secondary btn-icon-split btn-sm" disabled>
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-times"></i>
                                                </span>
                                                <span class="text">Rise</span>
                                            </button>
                                        @elseif($riseProg[$item->id] == true)
                                            <button class="btn btn-success btn-icon-split btn-sm" disabled>
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-check"></i>
                                                </span>
                                                <span class="text">Rise</span>
                                            </button>
                                        @endif
                                    @else
                                        Not Checked
                                    @endif
                                </td>
                                <td>

                                    @php
                                        $utopiaProg[$item->id] = ""
                                    @endphp

                                    @php
                                        $utopiaMA[$item->id] = "nc"
                                    @endphp

                                    @foreach($utopiaMissionByIds as $utopiaProgress)
                                        @if(!empty($utopiaProgress->userid == $item->id))
                                            @php
                                                $utopiaProg[$item->id] = $utopiaProgress->status
                                            @endphp
                                        @endif
                                    @endforeach

                                    @foreach($utopiaMissionAppbyDay as $utopiaMApp)
                                        @if(!empty($utopiaMApp->userid == $item->id))
                                            @php
                                                $utopiaMA[$item->id] = "c"
                                            @endphp
                                        @endif
                                    @endforeach
                                    
                                    @if($utopiaProg[$item->id] === "")
                                        No Submission
                                    @elseif($utopiaMA[$item->id] === "c")
                                        @if($utopiaProg[$item->id] == false)
                                            <button class="btn btn-secondary btn-icon-split btn-sm" disabled>
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-times"></i>
                                                </span>
                                                <span class="text">Utopia</span>
                                            </button>
                                        @elseif($utopiaProg[$item->id] == true)
                                            <button class="btn btn-success btn-icon-split btn-sm" disabled>
                                                <span class="icon text-white-50">
                                                    <i class="fas fa-check"></i>
                                                </span>
                                                <span class="text">Utopia</span>
                                            </button>
                                        @endif
                                    @else
                                        Not Checked
                                    @endif

                                </td>
                                <td>
                                    @if($item->mystery_quest == 1)
                                        @php
                                            $utileProg[$item->id] = ""
                                        @endphp

                                        @php
                                            $utileMA[$item->id] = "nc"
                                        @endphp

                                        @foreach($utileMissionByIds as $utileProgress)
                                            @if(!empty($utileProgress->userid == $item->id))
                                                @php
                                                    $utileProg[$item->id] = $utileProgress->status
                                                @endphp
                                            @endif
                                        @endforeach

                                        @foreach($utileMissionAppbyDay as $utileMApp)
                                            @if(!empty($utileMApp->userid == $item->id))
                                                @php
                                                    $utileMA[$item->id] = "c"
                                                @endphp
                                            @endif
                                        @endforeach

                                        @if($utileProg[$item->id] === "")
                                            No Submission
                                        @elseif($utileMA[$item->id] === "c")
                                            @if($utileProg[$item->id] == false)
                                                <button class="btn btn-secondary btn-icon-split btn-sm" disabled>
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-times"></i>
                                                    </span>
                                                    <span class="text">Utile</span>
                                                </button>
                                            @elseif($utileProg[$item->id] == true)
                                                <button class="btn btn-success btn-icon-split btn-sm" disabled>
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-check"></i>
                                                    </span>
                                                    <span class="text">Utile</span>
                                                </button>
                                            @endif
                                        @else
                                            Not Checked
                                        @endif
                                    @else
                                        Not Selected
                                    @endif
                                </td>
                                <td>
                                    @if($item->mystery_quest == 2)
                                        @php
                                            $raconteurProg[$item->id] = ""
                                        @endphp

                                        @php
                                            $raconteurMA[$item->id] = "nc"
                                        @endphp

                                        @foreach($raconteurMissionByIds as $raconteurProgress)
                                            @if(!empty($raconteurProgress->userid == $item->id))
                                                @php
                                                    $raconteurProg[$item->id] = $raconteurProgress->status
                                                @endphp
                                            @endif
                                        @endforeach

                                        @foreach($raconteurMissionAppbyDay as $raconteurMA)
                                            @if(!empty($raconteurMA->userid == $item->id))
                                                @php
                                                    $raconteurMA[$item->id] = "c"
                                                @endphp
                                            @endif
                                        @endforeach

                                        @if($raconteurProg[$item->id] === "")
                                            No Submission
                                        @elseif($raconteurMA[$item->id] === "c")
                                            @if($raconteurProg[$item->id] == false)
                                                <button class="btn btn-secondary btn-icon-split btn-sm" disabled>
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-times"></i>
                                                    </span>
                                                    <span class="text">Raconteur</span>
                                                </button>
                                            @elseif($raconteurProg[$item->id] == true)
                                                <button class="btn btn-success btn-icon-split btn-sm" disabled>
                                                    <span class="icon text-white-50">
                                                        <i class="fas fa-check"></i>
                                                    </span>
                                                    <span class="text">Raconteur</span>
                                                </button>
                                            @endif
                                        @else
                                            Not Checked
                                        @endif
                                    @else
                                        Not Selected
                                    @endif
                                </td>
                                <td>
                                    <a href="{{ url('/EcoFriendList/' . $item->id) }}" class="btn btn-info btn-icon-split btn-sm">
                                        <span class="icon text-white-50">
                                            <i class="fas fa-info-circle"></i>
                                        </span>
                                        <span class="text">Detail</span>
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                        @else
                            Eco Friends haven't registered
                        @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>
<!-- /.container-fluid -->
@endsection