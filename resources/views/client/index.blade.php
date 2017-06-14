@extends('layouts.index')
@section('content')
    <div class="container">
        <div class="row">
            <div class="panel panel-default">
                <div class="panel-heading"><strong>Clients</strong></div>
                <div class="panel-body">
                    <table class='table table-hover table-bordered table-condensed' id="table">
                        <tr class='tHead'>
                            <th class="col-md-1">Name</th>
                            <th class="col-md-1">Last name</th>
                            <th class="col-md-2">Personal code</th>
                            <th class="col-md-2">Email</th>
                            <th class="col-md-2">Address</th>
                            <th class="col-md-1">City</th>
                            <th class="col-md-1">Country</th>
                            <th class="col-md-1">Action</th>
                        </tr>
                        <tbody id="table-body">
                        @foreach($clients as $client)
                            <tr class="client{{$client->id}}">
                                <td> {{ $client->name }}            </td>
                                <td> {{ $client->lastName }}        </td>
                                <td> {{ $client->personal_code }}   </td>
                                <td> {{ $client->email }}           </td>
                                <td> {{ $client->address }}         </td>
                                <td> {{ $client->city }}            </td>
                                <td> {{ $client->country }}         </td>
                                <td> <button class="edit-modal btn btn-primary"
                                        data-id="{{ $client->id }}"
                                        data-name="{{ $client->name }}"
                                        data-lastName="{{ $client->lastName }}"
                                        data-code="{{ $client->personal_code }}"
                                        data-email="{{ $client->email }}"
                                        data-address="{{ $client->address }}"
                                        data-city="{{ $client->city }}"
                                        data-country="{{ $client->country }}">
                                    <span class="glyphicon glyphicon-edit"></span>
                                    </button>
                                    <button class="delete-modal btn btn-primary"
                                            data-id="{{ $client->id }}"
                                            data-name="{{ $client->name }}">
                                        <span class="glyphicon glyphicon-trash"></span>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                        </tbody>
                    </table>

                    <a class="btn btn-success" type="button" role="button" id="add">
                        <span class="glyphicon glyphicon-plus"></span>
                        Add
                    </a>
                    @if($clients->count())
                        {{--<div align="center"> {{ $clients->links() }} </div>--}}
                    @endif
                </div>
            </div>
        </div>
        @include('client.form')
    </div>
@endsection