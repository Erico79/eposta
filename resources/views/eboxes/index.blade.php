@extends('layouts.dt')
@section('title', 'My Eboxes')
@section('page-title', 'My Boxes')
@section('widget-title', 'My Boxes')

@push('js')
    <script src="{{ URL::asset('src_js/notifications/eboxes.js') }}"></script>
@endpush

@section('breadcrumbs')
    <li>
        <i class="icon-home"></i>
        <a href="{{ url('/') }}">Home</a>
        <span class="icon-angle-right"></span>
    </li>
    <li>
        <i class="icon-envelope"></i> Notifications
        <span class="icon-angle-right"></span>
    </li>
    <li>My E-boxes</li>
@endsection

@section('actions')
    <button id="add" class="btn btn-primary btn-small"><i class="icon-plus"></i> Add</button>
    <button id="update" class="btn btn-warning btn-small"><i class="icon-edit"></i> Update</button>
    <button id="delete" class="btn btn-danger btn-small"><i class="icon-edit"></i> Delete</button>
@endsection

@section('content')
    @include('common.success')
    @include('common.errors')

    <table id="table1" class="table table-bordered">
        <thead>
            <th>Id</th>
            <th>Box No</th>
            <th>Postal Code</th>
        </thead>
        <tbody>
            @if(count($eboxes))
                @foreach($eboxes as $ebox)
                    <tr>
                        <td>{{ $ebox->id }}</td>
                        <td>{{ $ebox->box }}</td>
                        <td>{{ $ebox->postal_code }}</td>
                    </tr>
                @endforeach
            @endif
        </tbody>
    </table>
@endsection

@section('modals')
    {{--add/update--}}
    <form action="" id="ebox_form" method="post">
        {{ csrf_field() }}
        <div id="ebox_modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel1">Manage Box</h3>
            </div>
            <div class="modal-body">
                <input type="hidden" id="url" value="{{ url('user/eboxes') }}"/>
                <input type="hidden" name="edit_id" id="edit_id"/>

                <div class="row-fluid">
                    <label for="box">Box Number:</label>
                    <input type="text" name="box" id="box" class="span12" required>
                </div>
                <div class="row-fluid">
                    <label for="postal_code">Postal Code:</label>
                    <input type="text" name="postal_code" id="postal_code" class="span12" required>
                </div>
            </div>
            <div class="modal-footer">
                <input type="button" class="btn btn-default" value="Close" data-dismiss="modal">
                <input type="submit" class="btn btn-primary" value="Save">
            </div>
        </div>
    </form>

    <form action="{{ url('user/eboxes/delete') }}" id="delete_form" method="post">
        {{ csrf_field() }}
        <input type="hidden" name="_method" value="delete"/>
        <input type="hidden" id="delete_ids" name="delete_ids"/>

        <div id="delete_modal" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel1" aria-hidden="true">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
                <h3 id="myModalLabel1">Delete</h3>
            </div>
            <div class="modal-body">
                <p>Are you sure you want to delete the selected record(s)?</p>
            </div>
            <div class="modal-footer">
                <input type="button" class="btn btn-default" value="No" data-dismiss="modal">
                <input type="submit" class="btn btn-danger" value="Yes">
            </div>
        </div>
    </form>
@endsection