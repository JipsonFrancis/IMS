@extends('component.layout')
@section('addCss')

@section('title', 'Management')
@section('content')


<body style="height:100vh">

    <h2 style="float:right; background-color:#4D4DFF;margin-left:2px"> 
        <form method="POST" action="{{ route('warehouses.store') }}">
            <input type="hidden" name="_token" value="{{ csrf_token() }}">
            <input type="hidden" name="name" value="Liberty">
            <input type="hidden" name="location" value="Lilongwe">
            <button type="submit">Warehouses</button>
        </form>
    </h2>

    @foreach ( $warehouses as $warehouse)
        <div style="border: 2px solid black; margin-top:2px;">
            <img src="https://png.pngitem.com/pimgs/s/237-2374894_warehouse-es-warehouse-icons-png-transparent-png.png" alt="Avatar" style="width:10%">
            <a href="/{{str_replace(" ", "_", $warehouse->name)}}/commodities/{{$warehouse->id}}" style="float:right">commodities</a>
            <div>
                <h4><b>{{$warehouse->name}}</b></h4>
                <p>{{$warehouse->location}}</p>
                <div>
                    <ol>

                        <li>
                            <form method="POST" action="{{ route('warehouses.update', $warehouse->id) }}">
                                <input type="hidden" name="_method" value="PUT">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit">update</button>
                            </form>
                        </li>

                        <li>
                            <form method="POST" action="{{ route('warehouses.destroy', $warehouse->id) }}">
                                <input type="hidden" name="_method" value="DELETE">
                                <input type="hidden" name="_token" value="{{ csrf_token() }}">
                                <button type="submit">delete</button>
                            </form>
                        </li>

                    </ol>
                </div>
            </div>
        </div>
    @endforeach


    @section('footerScripts')
        @parent
        <!-- <script src="{{asset('boot/js/AJAX.js')}}"></script> -->
    @endsection
</body>

@endsection