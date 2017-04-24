@extends('layouts.form-layout')
@section('title', 'Compose Notification')
@section('page-title', 'Compose Notification')
@section('page-widget-title', 'Compose')

@push('css')
{{--<script src="{{ URL::asset('dropzone/dropzone.css') }}"></script>--}}
@endpush

@push('js')
    <script src="{{ URL::asset('src_js/notifications/index.js') }}"></script>
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
        <i class="icon-edit"></i>
        <a href="{{ url('user/notification/compose') }}">Compose</a>
    </li>
@endsection

@section('content')
    @include('common.success')
    @include('common.errors')
    <form class="form-horizontal" action="{{ url('user/notification/save') }}" method="post" novalidate>
        <div class="row-fluid">
            <div class="span6">
                <div class="control-group">
                    <label class="control-label">Send To:</label>
                    <div class="controls">
                        <select name="target_boxes[]" data-placeholder="Choose the box number(s)" class="chosen span12" multiple="multiple">
                            <option value=""></option>
                            @if(count($eboxes))
                                @foreach($eboxes as $ebox)
                                    <option value="{{ $ebox->id }}">{{ $ebox->box. ', ' .$ebox->postal_code }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span6">
                <div class="control-group">
                    <label class="control-label">Subject</label>
                    <div class="controls">
                        <div class="input-icon left">
                            <i class="icon-edit"></i>
                            <input type="text" name="subject" class="span12"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <div class="control-group">
                    <label class="control-label">Summary</label>
                    <div class="controls">
                        <textarea name="summary" class="span6" maxlength="200" rows="4" placeholder="Max 200 characters"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span6">
                <div class="control-group">
                    <label class="control-label">Notification Type</label>
                    <div class="controls">
                        <select name="notification_type" id="not_type_id" class="span12" required>
                            <option value="">--Select--</option>
                            @if(count($notification_types))
                                @foreach($notification_types as $notification_type)
                                    <option value="{{ $notification_type->code }}">{{ $notification_type->name }}</option>
                                @endforeach
                            @endif
                        </select>
                    </div>
                </div>
            </div>
        </div>

        <div id="bill_fields" style="display: none;">
            <div class="row-fluid">
                <div class="span6">
                    <div class="control-group">
                        <label class="control-label">Amount</label>
                        <div class="controls">
                            <input type="number" name="amount" class="span12" step="any"/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row-fluid">
                <div class="span6">
                    <div class="control-group">
                        <label class="control-label">Mpesa Business No.</label>
                        <div class="controls">
                            <input type="text" name="mpesa_buss_no" class="span12"/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row-fluid">
                <div class="span6">
                    <div class="control-group">
                        <label class="control-label">Mpesa Account</label>
                        <div class="controls">
                            <input type="text" name="mpesa_account" class="span12"/>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row-fluid">
                <div class="span6">
                    <div class="control-group">
                        <label class="control-label">Reference</label>
                        <div class="controls">
                            <input type="text" name="reference" class="span12"/>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="row-fluid">
            <div class="span12">
                <div class="control-group">
                    <label class="control-label">Message</label>
                    <div class="controls">
                        <textarea name="message" class="span6 ckeditor" placeholder="Enter the message here"></textarea>
                    </div>
                </div>
            </div>
        </div>
        <div class="row-fluid">
            <div class="span12">
                <div class="control-group">
                    <div action="{{ url('user/notification/upload-files') }}" class="dropzone" id="my-dropzone">
                        {{ csrf_field() }}
                    </div>
                    <div class="controls">
                        <input type="hidden" name="uploaded_files" id="uploaded_files"/>
                    </div>
                </div>
            </div>
        </div>
        <div class="form-actions">
            <button class="btn btn-primary"> Submit</button>
        </div>
    </form>
@endsection