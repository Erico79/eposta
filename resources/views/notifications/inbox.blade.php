@extends('layouts.dt')
@section('title', 'Inbox')
@section('page-title', 'Inbox')
@section('widget-title', 'Inbox')

@push('css')
    <style>
        .pagination>.active>a, .pagination>.active>a:focus, .pagination>.active>a:hover, .pagination>.active>span, .pagination>.active>span:focus, .pagination>.active>span:hover {
            z-index: 3;
            color: #fff;
            cursor: default;
            background-color: #337ab7;
            border-color: #337ab7;
        }

        .pagination>li>a, .pagination>li>span {
            position: relative;
            float: left;
            padding: 6px 12px;
            margin-left: -1px;
            line-height: 1.42857143;
            color: #337ab7;
            text-decoration: none;
            background-color: #fff;
            border: 1px solid #ddd;
        }

        div.dataTables_wrapper div.dataTables_paginate ul.pagination {
            margin: 2px 0;
            white-space: nowrap;
        }

        .pagination {
            display: inline-block;
            padding-left: 0;
            margin: 20px 0;
            border-radius: 4px;
        }

        .pagination>li {
            display: inline;
        }
    </style>
    <link href="https://cdn.datatables.net/responsive/2.1.1/css/responsive.bootstrap.min.css" rel="stylesheet"/>
@endpush

@push('js')
    <script src="https://cdn.datatables.net/1.10.15/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.15/js/dataTables.bootstrap.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.1.1/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.1.1/js/responsive.bootstrap.min.js"></script>
    <script>
        $('#inbox').DataTable({
            "sDom": 'T<"clear">lfrtip',
            processing: true,
            serverSide: true,
            ajax: $('#inbox').attr('url'),
            columns: [
                { data: 'subject', 'name': 'subject' },
                { data: 'uploaded_files', 'name': 'uploaded_files' },
                { data: 'created_at', 'name': 'created_at' },
                { data: 'view', 'name': 'view' }
            ],
            columnDefs: [
                {
                    targets: 1,
                    orderable: false,
                    searchable: false
                },
                {
                    targets: 2,
                    orderable: false,
                    searchable: false
                }
            ]
        });
    </script>
@endpush

@section('breadcrumbs')
    <li>
        <i class="icon-home"></i>
        <a href="{{ url('/') }}">Home</a>
        <span class="icon-angle-right"></span>
    </li>
    <li>
        Notifications
        <span class="icon-angle-right"></span>
    </li>
    <li>
        <a href="{{ url('user/notification/sent') }}">Sent</a>
    </li>
@endsection

@section('content')
    <div class="span12">
        <table id="inbox" url="{{ url('user/notifications/inbox') }}" class="table table-bordered dt-responsive" cellspacing="0" width="100%">
            <thead>
            <tr>
                <th>Subject</th>
                <th>Uploaded Files</th>
                <th>Sent</th>
                <th></th>
            </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>
@endsection