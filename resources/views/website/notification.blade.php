@extends('website.layout.main')
@section('content')
    <section class="breadcrumbs-custom bg-image context-dark"
        style="background-image: url({{ asset('website/images/group_51.png') }});
           background-repeat: no-repeat;
           background-size: cover;
           display: flex;
           justify-content: center;
           align-items: center;
           ">
        <a class="btn btn-danger" href="#"
            style="width: 700px;height:50px; text-align: center; position: absolute; border-radius: 8px; padding: 11px; bottom: -20px; left: 50%; transform: translateX(-50%); font-size: 16px; max-width: 300px;">
            <span>Notifications</span><span class="button-overlay"></span>
        </a>
    </section>

    <section class="mt-5">
        <x-session-message />
        @foreach ($notification as $msg)
            <div class="container mt-2 row mx-auto">
                <div class="alert @if ($msg['status'] == '0') alert-info @elseif ($msg['status'] == '1') alert-success @else alert-danger @endif d-flex align-items-center col-lg-8 mx-auto"
                    role="alert">
                    <div>
                        <strong>{{ $msg['status_str'] }}:</strong> {{ $msg['message'] }}
                    </div>
                </div>
                @if ($msg['is_roaster'] && $msg['status'] == '0')
                    <div class="col-lg-4 mx-auto text-center">
                        <a href="{{ route('acceptSession', $msg['id']) }}" class="btn btn-success">Accept</a>
                        <a href="{{ route('rejectSession', $msg['id']) }}" class="btn btn-danger">Reject</a>
                    </div>
                @elseif (!$msg['is_roaster'])
                    <div class="col-lg-4 mx-auto text-center">
                        <a href="{{ route('profile', $msg['roaster_id']) }}" class="btn btn-info">View Roaster
                            Profile</a>
                    </div>
                @endif
            </div>
        @endforeach
    </section>
@endsection
