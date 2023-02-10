@extends('component.layout')
@section('addCss')

@section('title', 'Welcome')
@section('content')


<body style="padding-top:15vh">
    <table>
        <thead>
          <tr class="bg-light">
            <th class="border-top-0"></th>
            <th class="border-top-0">Department</th>
            <th class="border-top-0">Faculty</th>
            <th class="border-top-0">HOD</th>
            <th class="border-top-0">Dean</th>
            <th class="border-top-0">No. S</th>
          </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

    @section('footerScripts')
        @parent
        <!-- <script src="{{asset('boot/js/AJAX.js')}}"></script> -->
    @endsection
</body>

@endsection