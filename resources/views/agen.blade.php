@extends('layouts.app')

@section('content')
    <div class="m-alert m-alert--icon m-alert--air m-alert--square alert alert-dismissible m--margin-bottom-30" role="alert" style="display: none;">
        <div class="m-alert__icon">
            <i class="flaticon-exclamation m--font-primary"></i>
        </div>
        <div class="m-alert__text">
            Alert
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <!--begin::Portlet-->
            <div class="m-portlet">
                <div class="m-portlet__body">
                    <!--begin: Search Form -->
                    <div class="m-form m-form--label-align-right m--margin-top-5 m--margin-bottom-20">
                        <div class="row align-items-center">
                            <div class="col-xl-8 order-2 order-xl-1">
                                @if(isset($arr['subheader']))
                                    <div class="mr-auto">
                                        <h3 class="m-subheader__title ">
                                            {{($arr['subheader']) ? $arr['subheader'] : ''}}
                                        </h3>
                                    </div>
                                @endif
                            </div>
                        </div>
                    </div>
                    <!--end: Search Form -->
                    <!--begin: Datatable -->
                    <table id="table-" class="table table-bordered table-hover">
                        <thead>
                            <tr>
                            </tr>
                        </thead>
                        <tbody>
                        </tbody>
                    </table>
                    <!--end: Datatable -->

                </div>
            </div>
            <!--end::Portlet-->
        </div>
    </div>

@endsection
