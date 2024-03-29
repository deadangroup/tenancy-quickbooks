<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <title>{{ config('app.name') }} - QuickBooks Authorization</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css"
          integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous">

</head>
<body class="bg-light">

<div class="container">
    <div class="py-5 text-center">
        <h3 class="page-heading">{{ $tenant->name }} QuickBooks Authorization</h3>
        {{--        <h2>Checkout form</h2>--}}
        <p class="lead">
            Click the link below to connect <b>{{ $tenant->name }}</b> to Quickbooks Online.</p>
    </div>

    <div class="row">
        <div class="col-md-12 order-md-4 mb-4">
            <div class="py-5 text-center">
                <a class="btn btn-info" href="{!! $authorization_uri !!}">
                    Connect to QuickBooks
                </a>
            </div>
        </div>
    </div>

    <footer class="my-5 pt-5 text-muted text-center text-small">
        <hr>
        <p class="mb-1">
            <a href="{{ config('app.url') }}" target="_blank">{{ version_commit() }}</a>
            &copy; {{ date('Y') }} {{ session('organization.company') }}
        </p>
    </footer>
</div>

</body>
</html>
