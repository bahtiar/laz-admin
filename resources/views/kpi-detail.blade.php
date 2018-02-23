@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row margin-top-row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <ol class="breadcrumb-menu">
                        <li><a href="{{ url('/kpi') }}">KPI</a></li> >
                        <li><a href="#">Andre Wilianto</a></li>
                    </ol>
                </div>

                <!-- <div class="panel-body">
                    <div class="subtitle">
                        Lihat KPI agen-agen anda di sini
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <div class="row margin-top-row">
        <div class="col-lg-4 col-menu">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Andre Wilianto</h3></div>
                <div class="joined"><i class="fa fa-circle circle-online "></i> Online</div>
                <div class="joined">Joined on : 12 Dec 2017</div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="col-green col-green2">
                <div class="col-left">
                    Lv 1<br>
                    unanswered question
                </div>
                <div class="col-right">
                    <h4>1.200</h4>
                </div>
            </div>
            <div class="col-orange col-orange2">
                <div class="col-left">
                    Lv 2<br>
                    unanswered question
                </div>
                <div class="col-right">
                    <h4>1.200</h4>
                </div>
            </div>
            <div class="col-red col-red2">
                <div class="col-left">
                    Lv 3<br>
                    unanswered question
                </div>
                <div class="col-right">
                    <h4>1.200</h4>
                </div>
            </div>
        </div>
    </div>
    <div class="row margin-top-row">
        <div class="col-lg-4">
            <div class="row  ">
                <div class="col-lg-12 col-menu">
                    <div class="col-blue col-blue2">
                        <div class="col-left">
                            Avg respon<br>time
                        </div>
                        <div class="col-right">
                            <h4 class="huruf-tebal">1 </h4> mins
                        </div>
                    </div>
                    <div class="col-violet col-violet2">
                        <div class="col-left">
                            Avg question answered/day
                        </div>
                        <div class="col-right">
                            <h4 class="huruf-tebal">750</h4>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="col-datadiri">
                        <p>Tanggal lahir : 1 januari 1988</p>
                        <p>Alamat : Jl kebayoran baru 123, jakarta</p>
                        <p>Lulusan : UPH 2011</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <button class="btn-attachment">See attachment ( KTP, Ijazah )</button>
                </div>
            </div>
        </div>
        <div class="col-lg-8">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="agen-list"><h5>This agent's unanswered question</h5></div>
                </div>

                <div class="panel-body">
                    <div class="table-responsive" id="tableContainer2">
                        <table class="table" width="100%" class="scrollTable">
                            <thead class="fixedHeader">
                            <tr>
                                <th width="17%" class="font-left">User</th>
                                <th width="33%" class="font-left">Question</th>
                                <th width="10%">Level</th>
                                <th width="10%">Time</th>
                                <th width="5%">&nbsp;</th>
                            </tr>
                            </thead>
                            <tbody class="scrollContent">
                            <tr>
                                <td width="17%" class="name font-left">Abdi</td>
                                <td width="33%" class="font-left">Ini sizenya apa aja ya?</td>
                                <td width="10%" class="level-1">Lv 1</td>
                                <td width="10%">12.30</td>
                                <td width="5%"><i class="fa fa-ellipsis-v action-menu"></i></td>
                            </tr>
                            <tr>
                                <td width="17%" class="name font-left">Budi Budianto</td>
                                <td width="33%" class="font-left">Cara membersihkannya nanti gimana?</td>
                                <td width="10%" class="level-3">Lv 3</td>
                                <td width="10%">12.30</td>
                                <td width="5%"><i class="fa fa-ellipsis-v action-menu"></i></td>
                            </tr>
                            <tr>
                                <td width="17%" class="name font-left">Joko Widodo</td>
                                <td width="33%" class="font-left">Garansinya berapa lama?</td>
                                <td width="10%" class="level-2">Lv 2</td>
                                <td width="10%">12.30</td>
                                <td width="5%"><i class="fa fa-ellipsis-v action-menu"></i></td>
                            </tr>
                            <tr>
                                <td width="17%" class="name font-left">Karla wilala</td>
                                <td width="33%" class="font-left">Ini kalau jatuh rusak ga?</td>
                                <td width="10%" class="level-3">Lv 3</td>
                                <td width="10%">14.30</td>
                                <td width="5%"><i class="fa fa-ellipsis-v action-menu"></i></td>
                            </tr>
                            <tr>
                                <td width="17%" class="name font-left">Elisabeth</td>
                                <td width="33%" class="font-left">Warnanya ada yg merah?</td>
                                <td width="10%" class="level-1">Lv 1</td>
                                <td width="10%">17.30</td>
                                <td width="5%"><i class="fa fa-ellipsis-v action-menu"></i></td>
                            </tr>
                            <tr>
                                <td width="17%" class="name font-left">Belinda</td>
                                <td width="33%" class="font-left">Ada diskon?</td>
                                <td width="10%" class="level-3">Lv 3</td>
                                <td width="10%">12.30</td>
                                <td width="5%"><i class="fa fa-ellipsis-v action-menu"></i></td>
                            </tr>
                            <tr>
                                <td width="17%" class="name font-left">Jason Momoa</td>
                                <td width="33%" class="font-left">Ini bisa COD nggak?</td>
                                <td width="10%" class="level-3">Lv 3</td>
                                <td width="10%">20.00</td>
                                <td width="5%"><i class="fa fa-ellipsis-v action-menu"></i></td>
                            </tr>
                            <tr>
                                <td width="17%" class="name font-left">Abdi</td>
                                <td width="33%" class="font-left">Ini sizenya apa aja ya?</td>
                                <td width="10%" class="level-1">Lv 1</td>
                                <td width="10%">12.30</td>
                                <td width="5%"><i class="fa fa-ellipsis-v action-menu"></i></td>
                            </tr>
                            <tr>
                                <td width="17%" class="name font-left">Budi Budianto</td>
                                <td width="33%" class="font-left">Cara membersihkannya nanti gimana?</td>
                                <td width="10%" class="level-3">Lv 3</td>
                                <td width="10%">12.30</td>
                                <td width="5%"><i class="fa fa-ellipsis-v action-menu"></i></td>
                            </tr>
                            <tr>
                                <td width="17%" class="name font-left">Joko Widodo</td>
                                <td width="33%" class="font-left">Garansinya berapa lama?</td>
                                <td width="10%" class="level-2">Lv 2</td>
                                <td width="10%">12.30</td>
                                <td width="5%"><i class="fa fa-ellipsis-v action-menu"></i></td>
                            </tr>
                            <tr>
                                <td width="17%" class="name font-left">Karla wilala</td>
                                <td width="33%" class="font-left">Ini kalau jatuh rusak ga?</td>
                                <td width="10%" class="level-3">Lv 3</td>
                                <td width="10%">14.30</td>
                                <td width="5%"><i class="fa fa-ellipsis-v action-menu"></i></td>
                            </tr>
                            <tr>
                                <td width="17%" class="name font-left">Elisabeth</td>
                                <td width="33%" class="font-left">Warnanya ada yg merah?</td>
                                <td width="10%" class="level-1">Lv 1</td>
                                <td width="10%">17.30</td>
                                <td width="5%"><i class="fa fa-ellipsis-v action-menu"></i></td>
                            </tr>
                            <tr>
                                <td width="17%" class="name font-left">Belinda</td>
                                <td width="33%" class="font-left">Ada diskon?</td>
                                <td width="10%" class="level-3">Lv 3</td>
                                <td width="10%">12.30</td>
                                <td width="5%"><i class="fa fa-ellipsis-v action-menu"></i></td>
                            </tr>
                            <tr>
                                <td width="17%" class="name font-left">Jason Momoa</td>
                                <td width="33%" class="font-left">Ini bisa COD nggak?</td>
                                <td width="10%" class="level-3">Lv 3</td>
                                <td width="10%">20.00</td>
                                <td width="5%"><i class="fa fa-ellipsis-v action-menu"></i></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
