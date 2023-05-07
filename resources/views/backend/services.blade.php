<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="{{ asset('assets/css/theme.min.css') }}" rel="stylesheet" id="style-default">
</head>
<body>
    <button class="btn btn-info">Service</button>
        <div class="col-md-12">
            <ul class="list-group">
                @foreach ($services as $service)
                    <a href="{{ route('service.dashboard',[ $service->slug, base64_encode($service->id)]) }}" class="list-group-item">{{ $service->name }}</a>
                @endforeach
            </ul>
        </div>

    <script src="{{asset('vendors/popper/popper.min.js')}}"></script>
    <script src="{{ asset('vendors/bootstrap/bootstrap.min.js') }}"></script>
</body>
</html>
