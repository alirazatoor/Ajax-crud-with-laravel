@extends('layouts.master')
@section('title',"Task1")
@section('content')
    <div class="container">
        <h1 class="mt-5">Ajax Task1(CRUD)</h1>

        <div class="row mt-3">
            <div class="col-md-6">
                <h3>{{__('Data List')}}</h3>
            </div>

            <div class="col-md-6 ">
                <button type="button" class="btn btn-info  float-right"
                        data-toggle="modal" data-target="#myModal">ADD NEW
                </button>
            </div>
        </div>

        <table class="table mt-1">
            <thead>
            <tr>
                <th>{{__('#ID')}}</th>
                <th>{{__('Title')}}</th>
                <th>{{__('Author')}}</th>
                <th>{{__('Date')}}</th>
                <th>{{__('Actions')}}</th>
            </tr>
            </thead>
            <tbody id="#dataID">
            @foreach($data_list as $data)
                <tr>
                    <td>{{$data->id}}</td>
                    <td>{{$data->title}}</td>
                    <td>{{$data->author}}</td>
                    <td>{{$data->date}}</td>
                    <td>
                        <div class="btn-group" role="group" aria-label="Button group with nested dropdown">


                            <div class="btn-group" role="group">
                                <button id="btnGroupDrop1" type="button" class="btn btn-primary dropdown-toggle"
                                        data-bs-toggle="dropdown" aria-expanded="false">
                                    Actions
                                </button>
                                <ul class="dropdown-menu" aria-labelledby="btnGroupDrop1">
                                    <li><a class="dropdown-item" href="javascript:">View</a></li>
                                    <li><a class="dropdown-item" href="javascript:">Edit</a></li>
                                    <li><a class="dropdown-item" href="javascript:">Delete</a></li>
                                </ul>
                            </div>
                        </div>
                    </td>
                </tr>
            @endforeach
            </tbody>
        </table>
              @include('front.task1.includes._models')
    </div>
@endsection
@section('script')
    <script src="{{asset('js/front/task1/data.js')}}"></script>
@endsection
