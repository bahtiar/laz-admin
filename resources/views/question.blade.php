@extends('layouts.app')

@section('content')
<div class="container-fluid">
    <div class="row margin-top-row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading"><h3>Your Questions</h3></div>

                <div class="panel-body">
                    <div class="subtitle">
                        Question assigned for you
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row margin-top-row question">
        <div class="col-lg-12">
            <div class="col-orange">
                <div class="col-left">
                    Your Daily Target
                </div>
                <div class="col-right">
                    <h4>200/500</h4>
                </div>
            </div>
             <div class="col-blue">
                <div class="col-left">
                    Avg response time
                </div>
                <div class="col-right">
                    <h4 class="huruf-tebal">2 </h4> mins
                </div>
            </div>
            <div class="col-violet">
                <div class="col-left">
                    Avg question answered/day
                </div>
                <div class="col-right">
                    <h4>12.000</h4>
                </div>
            </div>
           
        </div>
    </div>
    <div class="row margin-top-row">
        <div class="col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <div class="agen-list"><h5>Your's answered question</h5></div>
                </div>

                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table" width="100%" class="scrollTable">
                            <thead class="fixedHeader question">
                            <tr>
                                <th width="24%" class="name font-left padding-kiri">User</th>
                                <th width="40%" class="font-left">Question</th>
                                <th width="14%">Level</th>
                                <th width="13%">Time</th>
                                <th width="9%" class="sort-by"><i class="fa fa-sort"></i> Sort by</th>
                            </tr>
                            </thead>
                            <tbody class="scrollContent question">
                            <tr>
                                <td width="24%" class="name font-left padding-kiri">Abdi</td>
                                <td width="40%" class="font-left">Ini sizenya apa aja ya?</td>
                                <td width="14%" class="level-1">Lv 1</td>
                                <td width="14%">12.30</td>
                                <td>
                                    <button type="button" class="btn-answer" data-toggle="modal" data-target="#myModal">Answer</button>
                                </td>
                            </tr>
                            <tr>
                                <td class="name font-left padding-kiri">Budi Budianto</td>
                                <td class="font-left">Cara membersihkannya nanti gimana?</td>
                                <td class="level-3">Lv 3</td>
                                <td>12.30</td>
                                <td><button type="button" class="btn-answer" data-toggle="modal" data-target="#myModal">Answer</button></td>
                            </tr>
                            <tr>
                                <td class="name font-left padding-kiri">Joko Widodo</td>
                                <td class="font-left">Garansinya berapa lama?</td>
                                <td class="level-2">Lv 2</td>
                                <td>12.30</td>
                                <td><button type="button" class="btn-answer" data-toggle="modal" data-target="#myModal">Answer</button></td>
                            </tr>
                            <tr>
                                <td class="name font-left padding-kiri">Karla wilala</td>
                                <td class="font-left">Ini kalau jatuh rusak ga?</td>
                                <td class="level-3">Lv 3</td>
                                <td>14.30</td>
                                <td><button type="button" class="btn-answer" data-toggle="modal" data-target="#myModal">Answer</button></td>
                            </tr>
                            <tr>
                                <td class="name font-left padding-kiri">Elisabeth</td>
                                <td class="font-left">Warnanya ada yg merah?</td>
                                <td class="level-1">Lv 1</td>
                                <td>17.30</td>
                                <td><button type="button" class="btn-answer" data-toggle="modal" data-target="#myModal">Answer</button></td>
                            </tr>
                            <tr>
                                <td class="name font-left padding-kiri">Belinda</td>
                                <td class="font-left">Ada diskon?</td>
                                <td class="level-3">Lv 3</td>
                                <td>12.30</td>
                                <td><button type="button" class="btn-answer" data-toggle="modal" data-target="#myModal">Answer</button></td>
                            </tr>
                            <tr>
                                <td class="name font-left padding-kiri">Jason Momoa</td>
                                <td class="font-left">Ini bisa COD nggak?</td>
                                <td class="level-3">Lv 3</td>
                                <td>20.00</td>
                                <td><button type="button" class="btn-answer" data-toggle="modal" data-target="#myModal">Answer</button></td>
                            </tr>
                            <tr>
                                <td class="name font-left padding-kiri">Jason Momoa</td>
                                <td class="font-left">Ini bisa COD nggak?</td>
                                <td class="level-3">Lv 3</td>
                                <td>20.00</td>
                                <td><button type="button" class="btn-answer" data-toggle="modal" data-target="#myModal">Answer</button></td>
                            </tr>
                            <tr>
                                <td class="name font-left padding-kiri">Jason Momoa</td>
                                <td class="font-left">Ini bisa COD nggak?</td>
                                <td class="level-3">Lv 3</td>
                                <td>20.00</td>
                                <td><button type="button" class="btn-answer" data-toggle="modal" data-target="#myModal">Answer</button></td>
                            </tr>
                            <tr>
                                <td class="name font-left padding-kiri">Jason Momoa</td>
                                <td class="font-left">Ini bisa COD nggak?</td>
                                <td class="level-3">Lv 3</td>
                                <td>20.00</td>
                                <td><button type="button" class="btn-answer" data-toggle="modal" data-target="#myModal">Answer</button></td>
                            </tr>
                            <tr>
                                <td class="name font-left padding-kiri">Jason Momoa</td>
                                <td class="font-left">Ini bisa COD nggak?</td>
                                <td class="level-3">Lv 3</td>
                                <td>20.00</td>
                                <td><button type="button" class="btn-answer" data-toggle="modal" data-target="#myModal">Answer</button></td>
                            </tr>
                            <tr>
                                <td class="name font-left padding-kiri">Jason Momoa</td>
                                <td class="font-left">Ini bisa COD nggak?</td>
                                <td class="level-3">Lv 3</td>
                                <td>20.00</td>
                                <td><button type="button" class="btn-answer" data-toggle="modal" data-target="#myModal">Answer</button></td>
                            </tr>
                            <tr>
                                <td class="name font-left padding-kiri">Jason Momoa</td>
                                <td class="font-left">Ini bisa COD nggak?</td>
                                <td class="level-3">Lv 3</td>
                                <td>20.00</td>
                                <td><button type="button" class="btn-answer" data-toggle="modal" data-target="#myModal">Answer</button></td>
                            </tr>
                            <tr>
                                <td class="name font-left padding-kiri">Jason Momoa</td>
                                <td class="font-left">Ini bisa COD nggak?</td>
                                <td class="level-3">Lv 3</td>
                                <td>20.00</td>
                                <td><button type="button" class="btn-answer" data-toggle="modal" data-target="#myModal">Answer</button></td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Modal -->
  <div class="modal fade modalAnswer" id="myModal" role="dialog">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <!-- <h4 class="modal-title">Modal Header</h4> -->
        </div>
        <div class="modal-body">
            <div class="row margin-top-row">
                <div class="col-lg-12">
                        <div class="panel-heading"><h3>Budi Budianto</h3></div>
                        <div class="subtitle-tgl">12 Dec 2017, 12.30 | <div class="level-3">&nbsp;Lv 3</div></div>
                        <div class="agen-list"><h6>Cara membersihkannya nanti gimana?</h6></div>
                    
                </div>
            </div>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
@endsection

