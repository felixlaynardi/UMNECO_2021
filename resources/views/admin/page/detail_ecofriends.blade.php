@extends('admin.template.admin')

@section('content')
<div class="container-fluid">

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">{{ $item->firstname }}'s detail</h1>
        <div>
            @if($item->rise_compensation == false)
                <button class="d-none d-sm-inline-block btn btn-sm btn-rise shadow-sm" id="btnRiseComp">
                    <i class="fas fa-hand-holding-heart fa-sm text-white-50"></i> Rise Compensation
                </button>
            @else
                <button class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm" disabled>
                    <i class="fas fa-hand-holding-heart fa-sm text-white-50"></i> Rise Compensation
                </button>
            @endif
            @if($item->utopia_compensation == false)
                <button class="d-none d-sm-inline-block btn btn-sm btn-utopia shadow-sm" id="btnUtopiaComp">
                    <i class="fas fa-hand-holding-heart fa-sm text-white-50"></i> Utopia Compensation
                </button>
            @else
                <button class="d-none d-sm-inline-block btn btn-sm btn-secondary shadow-sm" disabled>
                    <i class="fas fa-hand-holding-heart fa-sm text-white-50"></i> Utopia Compensation
                </button>
            @endif
            <!-- <button class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm">
                <i class="fas fa-download fa-sm text-white-50"></i> Generate Report
            </button> -->
        </div>
    </div>
    
    <!-- Collapsable Card -->
    <div class="card shadow mb-4">
        <!-- Card Header - Accordion -->
        <a href="#EcoFriendDetailed" class="d-block card-header py-3 border-left-success" data-toggle="collapse"
            role="button" aria-expanded="true" aria-controls="collapseCardExample">
            <h6 class="m-0 font-weight-bold text-eco1">{{ $item->firstname }}'s detailed information</h6>
        </a>
        <!-- Card Content - Collapse -->
        <div class="collapse" id="EcoFriendDetailed">
            <div class="card-body">
                <div class="row">
                    <div class="col-sm-3">
                        Name
                    </div>
                    <div class="col-sm-8">
                        : {{ $item->firstname }} {{ $item->lastname }}
                    </div>
                    <div class="col-sm-3">
                        NIM
                    </div>
                    <div class="col-sm-8">
                        : 000000{{ $item->student_id }}
                    </div>
                    <div class="col-sm-3">
                        Major
                    </div>
                    <div class="col-sm-8">
                        : {{ $item->major }} - {{ $item->generation }}
                    </div>
                    <div class="col-sm-3">
                        Line
                    </div>
                    <div class="col-sm-8">
                        : {{ $item->line_id }}
                    </div>
                    <div class="col-sm-3">
                        Instagram
                    </div>
                    <div class="col-sm-8">
                        : {{ $item->instagram_account }}
                    </div>
                    <div class="col-sm-3">
                        Email
                    </div>
                    <div class="col-sm-8">
                        : {{ $item->email }}
                    </div>
                    <div class="col-sm-3">
                        Phone number
                    </div>
                    <div class="col-sm-8">
                        : {{ $item->phone_number }}
                    </div>
                    <div class="col-sm-12 d-flex flex-row-reverse">
                        <button class="d-none d-sm-inline-block btn btn-sm btn-success shadow-sm" id="chngPass">
                            <i class="fas fa-cog fa-sm text-white-50"></i> Change Password
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">

        <!-- Earnings (Monthly) Card Example -->
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-rise shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-rise text-uppercase mb-1">
                                Rise</div>
                            @if($day == 0)
                                <div class="h6 mb-0 font-weight-bold text-gray-800">Event haven't started</div>
                            @elseif($day >= 1)
                                @php
                                    $riseperday = ""
                                @endphp
                                @foreach($allRise as $rise)
                                    @if(!empty($rise->mission_rise_id == $day))
                                        @php
                                            $riseperday = "ne"
                                        @endphp
                                    @endif
                                @endforeach
                                @if($riseperday == "ne")
                                    @if(count($riseMissionApp) != 0)
                                        @foreach($allRise as $rise)
                                            @if($rise->userid == $item->id && $rise->mission_rise_id == $day && $rise->status == true)
                                                <div class="h6 mb-0 font-weight-bold text-gray-800">Approved</div>
                                            @else
                                                <div class="h6 mb-0 font-weight-bold text-gray-800">Unapproved</div>
                                            @endif
                                        @endforeach
                                    @else
                                        <div class="h6 mb-0 font-weight-bold text-gray-800">Not Checked</div>
                                    @endif
                                @else
                                    <div class="h6 mb-0 font-weight-bold text-gray-800">No Submission</div>
                                @endif
                            @endif
                        </div>
                        <div class="col-auto">
                            <div class="d-flex justify-content-center mb-1">
                                <i class="fas fa-calendar fa-2x text-rise"></i>
                            </div>
                            <div class="d-flex justify-content-center">
                                <h6>Day {{ $day }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-utopia shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-utopia text-uppercase mb-1">
                                Utopia</div>
                            @if($day == 0)
                                <div class="h6 mb-0 font-weight-bold text-gray-800">Event haven't started</div>
                            @elseif($day >= 1)
                                @php
                                    $utopiaperday = ""
                                @endphp
                                @foreach($allUtopia as $utopia)
                                    @if(!empty($utopia->mission_utopia_id == $day))
                                        @php
                                            $utopiaperday = "ne"
                                        @endphp
                                    @endif
                                @endforeach
                                @if($utopiaperday == "ne")
                                    @if(count($utopiaMissionApp) != 0)
                                        @foreach($allUtopia as $utopia)
                                            @if($utopia->userid == $item->id && $utopia->mission_utopia_id == $day && $utopia->status == true)
                                                <div class="h6 mb-0 font-weight-bold text-gray-800">Approved</div>
                                            @else
                                                <div class="h6 mb-0 font-weight-bold text-gray-800">Unapproved</div>
                                            @endif
                                        @endforeach
                                    @else
                                        <div class="h6 mb-0 font-weight-bold text-gray-800">Not Checked</div>
                                    @endif
                                @else
                                    <div class="h6 mb-0 font-weight-bold text-gray-800">No Submission</div>
                                @endif
                                
                            @endif
                        </div>
                        <div class="col-auto">
                            <div class="d-flex justify-content-center mb-1">
                                <i class="fas fa-calendar fa-2x text-utopia"></i>
                            </div>
                            <div class="d-flex justify-content-center">
                                <h6>Day {{ $day }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @if($item->mystery_quest == 1)
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-utile shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-utile text-uppercase mb-1">
                                Utile</div>
                            @if($day == 0)
                                <div class="h6 mb-0 font-weight-bold text-gray-800">Event haven't started</div>
                            @elseif($day >= 1)
                                @php
                                    $utileperday = ""
                                @endphp
                                @foreach($allUtile as $utile)
                                    @if(!empty($utile->mission_utile_id == $day))
                                        @php
                                            $utileperday = "ne"
                                        @endphp
                                    @endif
                                @endforeach
                                @if($utileperday == "ne")
                                    @if(count($utileMissionApp) != 0)
                                        @foreach($allUtile as $utile)
                                            @if($utile->userid == $item->id && $utile->mission_utile_id == $day && $utile->status == true)
                                                <div class="h6 mb-0 font-weight-bold text-gray-800">Approved</div>
                                            @else
                                                <div class="h6 mb-0 font-weight-bold text-gray-800">Unapproved</div>
                                            @endif
                                        @endforeach
                                    @else
                                        <div class="h6 mb-0 font-weight-bold text-gray-800">Not Checked</div>
                                    @endif
                                @else
                                    <div class="h6 mb-0 font-weight-bold text-gray-800">No Submission</div>
                                @endif
                                
                            @endif
                        </div>
                        <div class="col-auto">
                            <div class="d-flex justify-content-center">
                                <i class="fas fa-calendar fa-2x text-utile"></i>
                            </div>
                            <div class="d-flex justify-content-center">
                                <h6>Day {{ $day }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif

        @if($item->mystery_quest == 2)
        <div class="col-xl-3 col-md-6 mb-4">
            <div class="card border-left-raconteur shadow h-100 py-2">
                <div class="card-body">
                    <div class="row no-gutters align-items-center">
                        <div class="col mr-2">
                            <div class="text-xs font-weight-bold text-raconteur text-uppercase mb-1">
                                Raconteur</div>
                            @if($day == 0)
                                <div class="h6 mb-0 font-weight-bold text-gray-800">Event haven't started</div>
                            @elseif($day >= 1)
                                @php
                                    $raconteurperday = ""
                                @endphp
                                @foreach($allRaconteur as $raconteur)
                                    @if(!empty($raconteur->mission_raconteur_id == $day))
                                        @php
                                            $raconteurperday = "ne"
                                        @endphp
                                    @endif
                                @endforeach
                                @if($raconteurperday == "ne")
                                    @if(count($raconteurMissionApp) != 0)
                                        @foreach($allRaconteur as $raconteur)
                                            @if($raconteur->userid == $item->id && $raconteur->mission_raconteur_id == $day && $raconteur->status == true)
                                                <div class="h6 mb-0 font-weight-bold text-gray-800">Approved</div>
                                            @else
                                                <div class="h6 mb-0 font-weight-bold text-gray-800">Unapproved</div>
                                            @endif
                                        @endforeach
                                        @else
                                        <div class="h6 mb-0 font-weight-bold text-gray-800">Not Checked</div>
                                    @endif
                                @else
                                    <div class="h6 mb-0 font-weight-bold text-gray-800">No Submission</div>
                                @endif
                                
                            @endif
                        </div>
                        <div class="col-auto">
                            <div class="d-flex justify-content-center">
                                <i class="fas fa-calendar fa-2x text-raconteur mb-1"></i>
                            </div>
                            <div class="d-flex justify-content-center">
                                <h6>Day {{ $day }}</h6>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endif
    </div>

    <!-- Rise Collapsable Card -->
    <div class="card shadow mb-4">
        <!-- Rise Card Header - Accordion -->
        <a href="#riseMission" class="d-block card-header py-3" data-toggle="collapse"
            role="button" aria-expanded="true" aria-controls="collapseCardExample">
            <h6 class="m-0 font-weight-bold text-rise">Rise Mission</h6>
        </a>
        <!-- Rise Card Content - Collapse -->
        <div class="collapse" id="riseMission">
            <div class="card-body">
                @if(count($allRise) > 0)
                    @foreach($allRise as $rise)
                    <div class="row mb-1">
                        <div class="col-sm-1">
                            Day {{ $rise->mission_rise_id }}
                        </div>
                        <div class="col-sm-10">
                            {{ $rise->link }}
                        </div>
                        <div class="col-sm-1" style="display:flex">
                            @if($rise->status == false)
                            <form action="{{ route('apvRise') }}" method="post" >
                                @csrf
                                <input type="number" value="{{ $rise->mission_rise_id }}" name="missionid" style="display:none;">
                                <input type="number" value="{{ $item->id }}" name="userid" style="display:none;">
                                <input type="text" value="Rise" name="missionname" style="display:none;">
                                <input type="number" value="{{ auth()->user()->id }}" name="adminid" style="display:none;">
                                <button type="submit" class="btn btn-success btn-circle btn-sm">
                                    <i class="fas fa-check"></i>
                                </button>
                            </form>
                            @else
                                <button class="btn btn-secondary btn-circle btn-sm" disabled>
                                    <i class="fas fa-check"></i>
                                </button>
                            @endif
                            <button class="btn btn-danger btn-circle btn-sm" id="rise{{ $rise->mission_rise_id }}">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    @endforeach
                @else
                    <div class="row mb-1">
                        <div class="col-sm-12">
                            There's no submission 
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

    <!-- Utopia Collapsable Card -->
    <div class="card shadow mb-4">
        <!-- utopia Card Header - Accordion -->
        <a href="#utopiaMission" class="d-block card-header py-3" data-toggle="collapse"
            role="button" aria-expanded="true" aria-controls="collapseCardExample">
            <h6 class="m-0 font-weight-bold text-utopia">Utopia Mission</h6>
        </a>
        <!-- utopia Card Content - Collapse -->
        <div class="collapse" id="utopiaMission">
            <div class="card-body">
                @if(count($allUtopia) > 0)
                    @foreach($allUtopia as $utopia)
                    <div class="row mb-1">
                        <div class="col-sm-1">
                            Day {{ $utopia->mission_utopia_id }}
                        </div>
                        <div class="col-sm-10">
                            {{ $utopia->link }}
                        </div>
                        <div class="col-sm-1" style="display:flex">
                            @if($utopia->status == false)
                            <form action="{{ route('apvUtopia') }}" method="post" >
                                @csrf
                                <input type="number" value="{{ $utopia->mission_utopia_id }}" name="missionid" style="display:none;">
                                <input type="number" value="{{ $item->id }}" name="userid" style="display:none;">
                                <input type="text" value="Utopia" name="missionname" style="display:none;">
                                <input type="number" value="{{ auth()->user()->id }}" name="adminid" style="display:none;">
                                <button type="submit" class="btn btn-success btn-circle btn-sm">
                                    <i class="fas fa-check"></i>
                                </button>
                            </form>
                            @else
                                <button class="btn btn-secondary btn-circle btn-sm" disabled>
                                    <i class="fas fa-check"></i>
                                </button>
                            @endif
                            <button class="btn btn-danger btn-circle btn-sm" id="utopia{{ $utopia->mission_utopia_id }}">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    @endforeach
                @else
                    <div class="row mb-1">
                        <div class="col-sm-12">
                            There's no submission 
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>

    @if($item->mystery_quest == 1)
    <!-- Utile Collapsable Card -->
    <div class="card shadow mb-4">
        <!-- Utile Card Header - Accordion -->
        <a href="#utileMission" class="d-block card-header py-3" data-toggle="collapse"
            role="button" aria-expanded="true" aria-controls="collapseCardExample">
            <h6 class="m-0 font-weight-bold text-utile">Utile Mission</h6>
        </a>
        <!-- Utile Card Content - Collapse -->
        <div class="collapse" id="utileMission">
            <div class="card-body">
                @if(count($allUtile) > 0)
                    @foreach($allUtile as $utile)
                    <div class="row mb-1">
                        <div class="col-sm-1">
                            Day {{ $utile->mission_utile_id }}
                        </div>
                        <div class="col-sm-10">
                            {{ $utile->link }}
                        </div>
                        <div class="col-sm-1" style="display:flex">
                            @if($utile->status == false)
                            <form action="{{ route('apvUtile') }}" method="post" >
                                @csrf
                                <input type="number" value="{{ $utile->mission_utile_id }}" name="missionid" style="display:none;">
                                <input type="number" value="{{ $item->id }}" name="userid" style="display:none;">
                                <input type="text" value="Utile" name="missionname" style="display:none;">
                                <input type="number" value="{{ auth()->user()->id }}" name="adminid" style="display:none;">
                                <button type="submit" class="btn btn-success btn-circle btn-sm">
                                    <i class="fas fa-check"></i>
                                </button>
                            </form>
                            @else
                                <button class="btn btn-secondary btn-circle btn-sm" disabled>
                                    <i class="fas fa-check"></i>
                                </button>
                            @endif
                            <button class="btn btn-danger btn-circle btn-sm" id="utile{{ $utile->mission_utile_id }}">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    @endforeach
                @else
                    <div class="row mb-1">
                        <div class="col-sm-12">
                            There's no submission 
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    @endif

    @if($item->mystery_quest == 2)
    <!-- Raconteur Collapsable Card -->
    <div class="card shadow mb-4">
        <!-- Raconteur Card Header - Accordion -->
        <a href="#raconteurMission" class="d-block card-header py-3" data-toggle="collapse"
            role="button" aria-expanded="true" aria-controls="collapseCardExample">
            <h6 class="m-0 font-weight-bold text-raconteur">Raconteur Mission</h6>
        </a>
        <!-- Raconteur Card Content - Collapse -->
        <div class="collapse" id="raconteurMission">
            <div class="card-body">
                @if(count($allRaconteur) > 0)
                    @foreach($allRaconteur as $raconteur)
                    <div class="row mb-1">
                        <div class="col-sm-1">
                            Day {{ $raconteur->mission_raconteur_id }}
                        </div>
                        <div class="col-sm-10">
                            {{ $raconteur->link }}
                        </div>
                        <div class="col-sm-1" style="display:flex">
                            @if($raconteur->status == false)
                            <form action="{{ route('apvRaconteur') }}" method="post">
                                @csrf
                                <input type="number" value="{{ $raconteur->mission_raconteur_id }}" name="missionid" style="display:none;">
                                <input type="number" value="{{ $item->id }}" name="userid" style="display:none;">
                                <input type="text" value="Raconteur" name="missionname" style="display:none;">
                                <input type="number" value="{{ auth()->user()->id }}" name="adminid" style="display:none;">
                                <button type="submit" class="btn btn-success btn-circle btn-sm">
                                    <i class="fas fa-check"></i>
                                </button>
                            </form>
                            @else
                                <button class="btn btn-secondary btn-circle btn-sm" disabled>
                                    <i class="fas fa-check"></i>
                                </button>
                            @endif
                            <button class="btn btn-danger btn-circle btn-sm" id="raconteur{{ $raconteur->mission_raconteur_id }}">
                                <i class="fas fa-times"></i>
                            </button>
                        </div>
                    </div>
                    @endforeach
                @else
                    <div class="row mb-1">
                        <div class="col-sm-12">
                            There's no submission 
                        </div>
                    </div>
                @endif
            </div>
        </div>
    </div>
    @endif
</div>
@endsection

@section('custom-js')
    

    <script>
        @if(session()->has('msg'))
            Swal.fire('{{ session()->get('msg') }}');
        @endif

        @if(count($allRise) > 0)
            @foreach($allRise as $rise)
                $("#rise{{ $rise->mission_rise_id }}").click(function() {
                    Swal.fire({
                        title: 'Disapprove Rise Day {{ $rise->mission_rise_id }}',
                        html: `
                        <form action="{{ route('disRise') }}" method="post">
                            @csrf
                            <textarea type="textarea" name="notes" id="notes" class="swal2-textarea" placeholder="Type your notes here..."></textarea>
                            <input type="number" value="{{ $rise->mission_rise_id }}" name="missionid" style="display:none;">
                            <input type="number" value="{{ $item->id }}" name="userid" style="display:none;">
                            <input type="text" value="Rise" name="missionname" style="display:none;">
                            <input type="number" value="{{ auth()->user()->id }}" name="adminid" style="display:none;">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    `,
                        showCancelButton: false,
                        showConfirmButton: false,
                        focusConfirm: false
                    })
                })
            @endforeach
        @endif
        @if(count($allUtopia) > 0)
            @foreach($allUtopia as $utopia)
                $("#utopia{{ $utopia->mission_utopia_id }}").click(function() {
                    Swal.fire({
                        title: 'Disapprove Utopia Day {{ $utopia->mission_utopia_id }}',
                        html: `
                        <form action="{{ route('disUtopia') }}" method="post">
                            @csrf
                            <textarea type="textarea" name="notes" id="notes" class="swal2-textarea" placeholder="Type your notes here..."></textarea>
                            <input type="number" value="{{ $utopia->mission_utopia_id }}" name="missionid" style="display:none;">
                            <input type="number" value="{{ $item->id }}" name="userid" style="display:none;">
                            <input type="text" value="Utopia" name="missionname" style="display:none;">
                            <input type="number" value="{{ auth()->user()->id }}" name="adminid" style="display:none;">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    `,
                        showCancelButton: false,
                        showConfirmButton: false,
                        focusConfirm: false
                    })
                })
            @endforeach
        @endif
        @if(count($allUtile) > 0)
            @foreach($allUtile as $utile)
                $("#utile{{ $utile->mission_utile_id }}").click(function() {
                    Swal.fire({
                        title: 'Disapprove Utile Day {{ $utile->mission_utile_id }}',
                        html: `
                        <form action="{{ route('disUtile') }}" method="post">
                            @csrf
                            <textarea type="textarea" name="notes" id="notes" class="swal2-textarea" placeholder="Type your notes here..."></textarea>
                            <input type="number" value="{{ $utile->mission_utile_id }}" name="missionid" style="display:none;">
                            <input type="number" value="{{ $item->id }}" name="userid" style="display:none;">
                            <input type="text" value="Utile" name="missionname" style="display:none;">
                            <input type="number" value="{{ auth()->user()->id }}" name="adminid" style="display:none;">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    `,
                        showCancelButton: false,
                        showConfirmButton: false,
                        focusConfirm: false
                    })
                })
            @endforeach
        @endif
        @if(count($allRaconteur) > 0)
            @foreach($allRaconteur as $raconteur)
                $("#raconteur{{ $raconteur->mission_raconteur_id }}").click(function() {
                    Swal.fire({
                        title: 'Disapprove Raconteur Day {{ $raconteur->mission_raconteur_id }}',
                        html: `
                        <form action="{{ route('disRaconteur') }}" method="post">
                            @csrf
                            <textarea type="textarea" name="notes" id="notes" class="swal2-textarea" placeholder="Type your notes here..."></textarea>
                            <input type="number" value="{{ $raconteur->mission_raconteur_id }}" name="missionid" style="display:none;">
                            <input type="number" value="{{ $item->id }}" name="userid" style="display:none;">
                            <input type="text" value="Raconteur" name="missionname" style="display:none;">
                            <input type="number" value="{{ auth()->user()->id }}" name="adminid" style="display:none;">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </form>
                    `,
                        showCancelButton: false,
                        showConfirmButton: false,
                        focusConfirm: false
                    })
                })
            @endforeach
        @endif
        
        $("#btnRiseComp").click(function() {
            Swal.fire({
                title: 'Rise Compensation',
                html: `
                <form action="{{ route('riseComp') }}" method="post">
                    @csrf
                    <textarea type="textarea" name="notes" id="notes" class="swal2-textarea" placeholder="Type your compensation notes here..."></textarea>
                    <input type="number" value="{{ $day }}" name="missionid" style="display:none;">
                    <input type="number" value="{{ $item->id }}" name="userid" style="display:none;">
                    <input type="text" value="Rise" name="missionname" style="display:none;">
                    <input type="number" value="{{ auth()->user()->id }}" name="adminid" style="display:none;">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            `,
                showCancelButton: false,
                showConfirmButton: false,
                focusConfirm: false
            })
        })

        $("#btnUtopiaComp").click(function() {
            Swal.fire({
                title: 'Utopia Compensation ',
                html: `
                <form action="{{ route('utopiaComp') }}" method="post">
                    @csrf
                    <textarea type="textarea" name="notes" id="notes" class="swal2-textarea" placeholder="Type your compensation notes here..."></textarea>
                    <input type="number" value="{{ $day }}" name="missionid" style="display:none;">
                    <input type="number" value="{{ $item->id }}" name="userid" style="display:none;">
                    <input type="text" value="Utopia" name="missionname" style="display:none;">
                    <input type="number" value="{{ auth()->user()->id }}" name="adminid" style="display:none;">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            `,
                showCancelButton: false,
                showConfirmButton: false,
                focusConfirm: false
            })
        })

        $("#chngPass").click(function() {
            Swal.fire({
                title: "Change {{ $item->firstname }}'s password",
                html: `
                <form action="{{ route('efchngpw') }}" method="post">
                    @csrf
                    <input type="text" name="efpassword" id="efpassword" class="swal2-input" placeholder="Type the password here..."></input>
                    <input type="number" value="{{ $item->id }}" name="userid" style="display:none;">
                    <input type="number" value="{{ $item->student_id }}" name="usersid" style="display:none;">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            `,
                showCancelButton: false,
                showConfirmButton: false,
                focusConfirm: false
            })
        })
    </script>
@endsection