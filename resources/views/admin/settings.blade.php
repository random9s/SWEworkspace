@extends('admin/admin')
@section('headers')
    <style>
        .natural-dates {
            font-size: 18px;
            margin: 15px;
            padding: 5px;
        }
        div {
            font-size: 18px;
        }
        .natural-dates p {
            margin: 10px;
        }

        p.phase-statement {
            text-align: center;
        }

        div.alert {
            margin-bottom: 45px;
            margin-left: 25%;
            margin-right: 25%;
        }
        .settings-form {
            text-align: center;
            margin-left: 33%;
            margin-right: 33%;
        }
    </style>
@endsection
@section('content')
    <div class="container">
        <p class="phase-statement">We are currently in Phase {{$phaseCode}}: {{$phaseDefinition}}</p>
        @if ($phaseCode !== 0)
            <div class="alert alert-info text-center natural-dates" role="alert">

                <p>We will <strong>begin collecting applications</strong> on <u>{{$open}}</u>.</p>
                <p><u>{{$transition}}</u> is the <strong>deadline for student submissions</strong>.</p>
                <p><u>{{$close}}</u> is the <strong>deadline for instructor feedback</strong>.</p>
                <p><small>Set By: {{$author}}</small></p>
            </div>
        @else
            <div class="alert alert-warning text-center" role="alert">
                <p>Your application phases have not been set.</p>

            </div>
        @endif
        <div class="settings-form">
            {!! BootForm::open() !!}
            {!! BootForm::date('Begin Collecting Applications', 'open') !!}
            {!! BootForm::date('Application Submission Deadline', 'transition') !!}
            {!! BootForm::date('Instructor Feedback Deadline', 'close') !!}
            {!! BootForm::submit('Submit') !!}
            {!! BootForm::close() !!}
        </div>
    </div>
    <br>
    <br>
@endsection