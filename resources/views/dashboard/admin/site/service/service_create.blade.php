@extends('_layout/_admin/_base')
@section('content')
<!-- ============================================================== -->
<!-- Start Page Content -->
<!-- ============================================================== -->
<div class="row">
    <div class="col-12">
        <div class="card">
            <div class="card-body">
                @include('_layout._alert')
                <div class="table-responsive">
                    <form action="" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="icon">Ikon</label>
                            <div class="scroll border">
                                <div class="card">
                                    <div class="row">
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-arrow-to-bottom"></i><span>arrow-to-bottom</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-credit-card-front"></i><span>credit-card-front</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i
                                                    class="bx bx-message-rounded-detail"></i><span>message-rounded-detail</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-calendar-heart"></i><span>calendar-heart</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-move-horizontal"></i><span>move-horizontal</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-bus-school"></i><span>bus-school</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-color-fill"></i><span>color-fill</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-braille"></i><span>braille</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-vial"></i><span>vial</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-mask"></i><span>mask</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i
                                                    class="bx bx-chevron-right-square"></i><span>chevron-right-square</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-bracket"></i><span>bracket</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-chevron-up-circle"></i><span>chevron-up-circle</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-trip"></i><span>trip</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-message-alt-x"></i><span>message-alt-x</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-cctv"></i><span>cctv</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-card"></i><span>card</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-microchip"></i><span>microchip</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-paint"></i><span>paint</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i
                                                    class="bx bx-message-square-check"></i><span>message-square-check</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-home-smile"></i><span>home-smile</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-church"></i><span>church</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-book-alt"></i><span>book-alt</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-unite"></i><span>unite</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-caret-down-square"></i><span>caret-down-square</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i
                                                    class="bx bx-chevron-left-circle"></i><span>chevron-left-circle</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-dice-2"></i><span>dice-2</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-message-alt-detail"></i><span>message-alt-detail</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i
                                                    class="bx bx-chevron-right-circle"></i><span>chevron-right-circle</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-money"></i><span>money</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-calendar-event"></i><span>calendar-event</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-book-add"></i><span>book-add</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-recycle"></i><span>recycle</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-expand-alt"></i><span>expand-alt</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-badge"></i><span>badge</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-blanket"></i><span>blanket</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-dice-1"></i><span>dice-1</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-message-square-add"></i><span>message-square-add</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-message-minus"></i><span>message-minus</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i
                                                    class="bx bx-calendar-exclamation"></i><span>calendar-exclamation</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-trim"></i><span>trim</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-arrow-to-right"></i><span>arrow-to-right</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-atom"></i><span>atom</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-alarm-snooze"></i><span>alarm-snooze</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-sort-up"></i><span>sort-up</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-comment-error"></i><span>comment-error</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-brush"></i><span>brush</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-library"></i><span>library</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-caret-left-square"></i><span>caret-left-square</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-joystick-button"></i><span>joystick-button</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i
                                                    class="bx bx-message-square-detail"></i><span>message-square-detail</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-vector"></i><span>vector</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-dice-6"></i><span>dice-6</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-current-location"></i><span>current-location</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-pointer"></i><span>pointer</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-move-vertical"></i><span>move-vertical</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-medal"></i><span>medal</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-shape-polygon"></i><span>shape-polygon</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-caret-up-circle"></i><span>caret-up-circle</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-test-tube"></i><span>test-tube</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-heart-circle"></i><span>heart-circle</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-coin-stack"></i><span>coin-stack</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-stats"></i><span>stats</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-unlink"></i><span>unlink</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-bomb"></i><span>bomb</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-dice-3"></i><span>dice-3</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-been-here"></i><span>been-here</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-barcode-reader"></i><span>barcode-reader</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-task-x"></i><span>task-x</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-equalizer"></i><span>equalizer</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-cookie"></i><span>cookie</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i
                                                    class="bx bx-message-rounded-add"></i><span>message-rounded-add</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-camera-movie"></i><span>camera-movie</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i
                                                    class="bx bx-message-rounded-error"></i><span>message-rounded-error</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-wifi-2"></i><span>wifi-2</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-arrow-from-top"></i><span>arrow-from-top</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-cabinet"></i><span>cabinet</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-chevron-up-square"></i><span>chevron-up-square</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-glasses"></i><span>glasses</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-arrow-to-top"></i><span>arrow-to-top</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-bookmark-alt"></i><span>bookmark-alt</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i
                                                    class="bx bx-message-square-edit"></i><span>message-square-edit</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-message-square-x"></i><span>message-square-x</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-home-circle"></i><span>home-circle</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-minus-back"></i><span>minus-back</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-wine"></i><span>wine</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-category"></i><span>category</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-message-alt-edit"></i><span>message-alt-edit</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-info-square"></i><span>info-square</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-comment-edit"></i><span>comment-edit</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-message-error"></i><span>message-error</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-network-chart"></i><span>network-chart</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-layer-minus"></i><span>layer-minus</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-grid-horizontal"></i><span>grid-horizontal</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-repeat"></i><span>repeat</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i
                                                    class="bx bx-message-rounded-edit"></i><span>message-rounded-edit</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-caret-right-circle"></i><span>caret-right-circle</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-arrow-from-right"></i><span>arrow-from-right</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-bone"></i><span>bone</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-location-plus"></i><span>location-plus</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-comment-minus"></i><span>comment-minus</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-bookmark-alt-plus"></i><span>bookmark-alt-plus</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-message-alt-minus"></i><span>message-alt-minus</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-message-alt-add"></i><span>message-alt-add</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-font-family"></i><span>font-family</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-exclude"></i><span>exclude</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-drink"></i><span>drink</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-line-chart-down"></i><span>line-chart-down</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-spray-can"></i><span>spray-can</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-calendar-week"></i><span>calendar-week</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-message-rounded-x"></i><span>message-rounded-x</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-sort-down"></i><span>sort-down</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-comment-add"></i><span>comment-add</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i
                                                    class="bx bx-message-rounded-minus"></i><span>message-rounded-minus</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-grid-small"></i><span>grid-small</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-id-card"></i><span>id-card</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-comment-x"></i><span>comment-x</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-bong"></i><span>bong</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i
                                                    class="bx bx-message-square-error"></i><span>message-square-error</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-message-alt-error"></i><span>message-alt-error</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-rewind-circle"></i><span>rewind-circle</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-abacus"></i><span>abacus</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i
                                                    class="bx bx-chevron-down-square"></i><span>chevron-down-square</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-comment-check"></i><span>comment-check</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i
                                                    class="bx bx-chevron-left-square"></i><span>chevron-left-square</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-badge-check"></i><span>badge-check</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-camera-home"></i><span>camera-home</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-message-check"></i><span>message-check</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-shield-x"></i><span>shield-x</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-baseball"></i><span>baseball</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-caret-left-circle"></i><span>caret-left-circle</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-envelope-open"></i><span>envelope-open</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i
                                                    class="bx bx-chevron-down-circle"></i><span>chevron-down-circle</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-alarm-exclamation"></i><span>alarm-exclamation</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-sticker"></i><span>sticker</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-refresh"></i><span>refresh</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i
                                                    class="bx bx-message-square-minus"></i><span>message-square-minus</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-intersect"></i><span>intersect</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-game"></i><span>game</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-tag-alt"></i><span>tag-alt</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-bookmark-heart"></i><span>bookmark-heart</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-border-inner"></i><span>border-inner</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-caret-up-square"></i><span>caret-up-square</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-window-alt"></i><span>window-alt</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-category-alt"></i><span>category-alt</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-caret-right"></i><span>caret-right</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-message-add"></i><span>message-add</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-meteor"></i><span>meteor</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-caret-down"></i><span>caret-down</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-scan"></i><span>scan</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-caret-up"></i><span>caret-up</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-message-edit"></i><span>message-edit</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-glasses-alt"></i><span>glasses-alt</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-home-heart"></i><span>home-heart</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-book-heart"></i><span>book-heart</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-beer"></i><span>beer</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-bookmark-alt-minus"></i><span>bookmark-alt-minus</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-rotate-left"></i><span>rotate-left</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-merge"></i><span>merge</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-coffee-togo"></i><span>coffee-togo</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-bible"></i><span>bible</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-note"></i><span>note</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-caret-right-square"></i><span>caret-right-square</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-eraser"></i><span>eraser</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-message-x"></i><span>message-x</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-show-alt"></i><span>show-alt</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-sort-alt-2"></i><span>sort-alt-2</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-brain"></i><span>brain</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-tachometer"></i><span>tachometer</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-traffic-cone"></i><span>traffic-cone</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-message-alt-check"></i><span>message-alt-check</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-arrow-from-bottom"></i><span>arrow-from-bottom</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-low-vision"></i><span>low-vision</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-donate-heart"></i><span>donate-heart</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-dice-5"></i><span>dice-5</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-wifi-1"></i><span>wifi-1</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-arrow-from-left"></i><span>arrow-from-left</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-book-reader"></i><span>book-reader</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-arch"></i><span>arch</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-webcam"></i><span>webcam</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-calendar-edit"></i><span>calendar-edit</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i
                                                    class="bx bx-message-rounded-check"></i><span>message-rounded-check</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-chair"></i><span>chair</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-dice-4"></i><span>dice-4</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-border-none"></i><span>border-none</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-heart-square"></i><span>heart-square</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-door-open"></i><span>door-open</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-calendar-star"></i><span>calendar-star</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-coin"></i><span>coin</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-donate-blood"></i><span>donate-blood</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-capsule"></i><span>capsule</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-arrow-to-left"></i><span>arrow-to-left</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-caret-down-circle"></i><span>caret-down-circle</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-magnet"></i><span>magnet</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-help-circle"></i><span>help-circle</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-wifi-0"></i><span>wifi-0</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-outline"></i><span>outline</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-walk"></i><span>walk</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-comment-detail"></i><span>comment-detail</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-grid-vertical"></i><span>grid-vertical</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-message-detail"></i><span>message-detail</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-layer-plus"></i><span>layer-plus</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-minus-front"></i><span>minus-front</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-border-outer"></i><span>border-outer</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-movie-play"></i><span>movie-play</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-caret-left"></i><span>caret-left</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-cloud-light-rain"></i><span>cloud-light-rain</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-paste"></i><span>paste</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-reply"></i><span>reply</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-heading"></i><span>heading</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-transfer"></i><span>transfer</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-bed"></i><span>bed</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-command"></i><span>command</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-timer"></i><span>timer</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-cart-alt"></i><span>cart-alt</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-link"></i><span>link</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-tab"></i><span>tab</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-infinite"></i><span>infinite</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-target-lock"></i><span>target-lock</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-message-rounded"></i><span>message-rounded</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-disc"></i><span>disc</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-window"></i><span>window</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-window-close"></i><span>window-close</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-home-alt"></i><span>home-alt</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-phone"></i><span>phone</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-wrench"></i><span>wrench</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-tag"></i><span>tag</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-area"></i><span>area</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-shopping-bag"></i><span>shopping-bag</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-voicemail"></i><span>voicemail</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-link-alt"></i><span>link-alt</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-dock-top"></i><span>dock-top</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-briefcase-alt"></i><span>briefcase-alt</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-bath"></i><span>bath</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-grid-alt"></i><span>grid-alt</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-move"></i><span>move</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-windows"></i><span>windows</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-map"></i><span>map</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-user-check"></i><span>user-check</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-upvote"></i><span>upvote</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-log-out"></i><span>log-out</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-rotate-right"></i><span>rotate-right</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-cloud-snow"></i><span>cloud-snow</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-hourglass"></i><span>hourglass</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-revision"></i><span>revision</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-dollar-circle"></i><span>dollar-circle</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-joystick-alt"></i><span>joystick-alt</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-export"></i><span>export</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-pie-chart"></i><span>pie-chart</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-alarm-off"></i><span>alarm-off</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-fingerprint"></i><span>fingerprint</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-mouse"></i><span>mouse</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-lock"></i><span>lock</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-selection"></i><span>selection</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-barcode"></i><span>barcode</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-paperclip"></i><span>paperclip</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-git-merge"></i><span>git-merge</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-menu-alt-left"></i><span>menu-alt-left</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-repost"></i><span>repost</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-screenshot"></i><span>screenshot</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-circle"></i><span>circle</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-down-arrow"></i><span>down-arrow</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-git-branch"></i><span>git-branch</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-music"></i><span>music</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-task"></i><span>task</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-hash"></i><span>hash</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-check-double"></i><span>check-double</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-font-color"></i><span>font-color</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-send"></i><span>send</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-cloud-drizzle"></i><span>cloud-drizzle</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-loader"></i><span>loader</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-upload"></i><span>upload</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-hotel"></i><span>hotel</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-git-commit"></i><span>git-commit</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-window-open"></i><span>window-open</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-pen"></i><span>pen</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-plus"></i><span>plus</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-laptop"></i><span>laptop</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-ruler"></i><span>ruler</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-cube"></i><span>cube</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-duplicate"></i><span>duplicate</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-ball"></i><span>ball</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i
                                                    class="bx bx-skip-previous-circle"></i><span>skip-previous-circle</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-credit-card"></i><span>credit-card</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-carousel"></i><span>carousel</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-git-repo-forked"></i><span>git-repo-forked</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-strikethrough"></i><span>strikethrough</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-x"></i><span>x</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-slider"></i><span>slider</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-chalkboard"></i><span>chalkboard</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-dialpad"></i><span>dialpad</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-support"></i><span>support</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-share-alt"></i><span>share-alt</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-aperture"></i><span>aperture</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-list-ol"></i><span>list-ol</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-album"></i><span>album</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-crop"></i><span>crop</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-headphone"></i><span>headphone</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-pulse"></i><span>pulse</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-power-off"></i><span>power-off</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-font"></i><span>font</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-search-alt"></i><span>search-alt</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-shield-quarter"></i><span>shield-quarter</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-sort"></i><span>sort</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-box"></i><span>box</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-cart"></i><span>cart</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-cast"></i><span>cast</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-user-minus"></i><span>user-minus</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-purchase-tag"></i><span>purchase-tag</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-file"></i><span>file</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-server"></i><span>server</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-share"></i><span>share</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-tv"></i><span>tv</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-notification"></i><span>notification</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-heart"></i><span>heart</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-battery"></i><span>battery</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-trophy"></i><span>trophy</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-train"></i><span>train</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-edit"></i><span>edit</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-layout"></i><span>layout</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-code-block"></i><span>code-block</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-wind"></i><span>wind</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-restaurant"></i><span>restaurant</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-sun"></i><span>sun</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-group"></i><span>group</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-shuffle"></i><span>shuffle</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-filter"></i><span>filter</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-microphone-off"></i><span>microphone-off</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-text"></i><span>text</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-dock-right"></i><span>dock-right</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-expand"></i><span>expand</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-list-check"></i><span>list-check</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-sad"></i><span>sad</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-downvote"></i><span>downvote</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-body"></i><span>body</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-save"></i><span>save</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-globe-alt"></i><span>globe-alt</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-user-circle"></i><span>user-circle</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-mobile-alt"></i><span>mobile-alt</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-bus"></i><span>bus</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-bot"></i><span>bot</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-taxi"></i><span>taxi</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-tennis-ball"></i><span>tennis-ball</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-sidebar"></i><span>sidebar</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-loader-circle"></i><span>loader-circle</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-calculator"></i><span>calculator</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-paper-plane"></i><span>paper-plane</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-sitemap"></i><span>sitemap</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-minus"></i><span>minus</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-meh"></i><span>meh</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-shield-alt"></i><span>shield-alt</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-loader-alt"></i><span>loader-alt</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-history"></i><span>history</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-detail"></i><span>detail</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-home"></i><span>home</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-skip-next-circle"></i><span>skip-next-circle</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-first-aid"></i><span>first-aid</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-table"></i><span>table</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-lock-open"></i><span>lock-open</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-football"></i><span>football</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-anchor"></i><span>anchor</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-alarm"></i><span>alarm</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-closet"></i><span>closet</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-left-arrow"></i><span>left-arrow</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-git-pull-request"></i><span>git-pull-request</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-hdd"></i><span>hdd</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-analyse"></i><span>analyse</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-globe"></i><span>globe</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-slider-alt"></i><span>slider-alt</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-award"></i><span>award</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-certification"></i><span>certification</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-redo"></i><span>redo</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-highlight"></i><span>highlight</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-joystick"></i><span>joystick</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-git-compare"></i><span>git-compare</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-check"></i><span>check</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-chip"></i><span>chip</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-star"></i><span>star</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-video-off"></i><span>video-off</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-reply-all"></i><span>reply-all</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-dumbbell"></i><span>dumbbell</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-italic"></i><span>italic</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-like"></i><span>like</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-planet"></i><span>planet</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-import"></i><span>import</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-pencil"></i><span>pencil</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-notification-off"></i><span>notification-off</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-crown"></i><span>crown</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-adjust"></i><span>adjust</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-pie-chart-alt"></i><span>pie-chart-alt</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-horizontal-center"></i><span>horizontal-center</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-phone-call"></i><span>phone-call</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-navigation"></i><span>navigation</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-select-multiple"></i><span>select-multiple</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-link-external"></i><span>link-external</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-cog"></i><span>cog</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-collection"></i><span>collection</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-dislike"></i><span>dislike</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-list-plus"></i><span>list-plus</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-news"></i><span>news</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-cloud-lightning"></i><span>cloud-lightning</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-trash-alt"></i><span>trash-alt</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-images"></i><span>images</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-user-plus"></i><span>user-plus</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-photo-album"></i><span>photo-album</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-up-arrow"></i><span>up-arrow</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-video-plus"></i><span>video-plus</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-plug"></i><span>plug</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-font-size"></i><span>font-size</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-car"></i><span>car</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-message"></i><span>message</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-list-ul"></i><span>list-ul</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-dock-bottom"></i><span>dock-bottom</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-rename"></i><span>rename</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-swim"></i><span>swim</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-water"></i><span>water</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-check-circle"></i><span>check-circle</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-user"></i><span>user</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-paragraph"></i><span>paragraph</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-file-blank"></i><span>file-blank</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-flag"></i><span>flag</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-station"></i><span>station</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-radar"></i><span>radar</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-poll"></i><span>poll</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-phone-outgoing"></i><span>phone-outgoing</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-handicap"></i><span>handicap</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-dock-left"></i><span>dock-left</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-subdirectory-right"></i><span>subdirectory-right</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-film"></i><span>film</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-collapse"></i><span>collapse</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-wifi"></i><span>wifi</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-rocket"></i><span>rocket</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-package"></i><span>package</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-cut"></i><span>cut</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-subdirectory-left"></i><span>subdirectory-left</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-menu-alt-right"></i><span>menu-alt-right</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-cloud-rain"></i><span>cloud-rain</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-trash"></i><span>trash</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-happy"></i><span>happy</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-shield"></i><span>shield</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-pin"></i><span>pin</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-undo"></i><span>undo</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-log-in"></i><span>log-in</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-underline"></i><span>underline</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-columns"></i><span>columns</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-spreadsheet"></i><span>spreadsheet</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-list-minus"></i><span>list-minus</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-phone-incoming"></i><span>phone-incoming</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-mobile"></i><span>mobile</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-right-arrow"></i><span>right-arrow</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-folder-open"></i><span>folder-open</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-world"></i><span>world</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-bold"></i><span>bold</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-layer"></i><span>layer</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-movie"></i><span>movie</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-store"></i><span>store</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-wallet"></i><span>wallet</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-usb"></i><span>usb</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-calendar-alt"></i><span>calendar-alt</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-user-x"></i><span>user-x</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-map-alt"></i><span>map-alt</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-directions"></i><span>directions</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-search"></i><span>search</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-pound"></i><span>pound</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-right-arrow-alt"></i><span>right-arrow-alt</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-buoy"></i><span>buoy</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-happy-beaming"></i><span>happy-beaming</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-comment-dots"></i><span>comment-dots</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-comment"></i><span>comment</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-bookmark-minus"></i><span>bookmark-minus</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-question-mark"></i><span>question-mark</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-hide"></i><span>hide</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-archive-in"></i><span>archive-in</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-basketball"></i><span>basketball</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-label"></i><span>label</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-border-right"></i><span>border-right</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-run"></i><span>run</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-landscape"></i><span>landscape</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-calendar-minus"></i><span>calendar-minus</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-moon"></i><span>moon</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-happy-heart-eyes"></i><span>happy-heart-eyes</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-check-shield"></i><span>check-shield</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-band-aid"></i><span>band-aid</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-shape-circle"></i><span>shape-circle</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-street-view"></i><span>street-view</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-border-radius"></i><span>border-radius</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-qr"></i><span>qr</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-dots-vertical"></i><span>dots-vertical</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-sort-z-a"></i><span>sort-z-a</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-stop"></i><span>stop</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-plus-circle"></i><span>plus-circle</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-grid"></i><span>grid</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-devices"></i><span>devices</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-time"></i><span>time</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-bar-chart-square"></i><span>bar-chart-square</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-volume"></i><span>volume</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-bell-plus"></i><span>bell-plus</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-chevron-left"></i><span>chevron-left</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-transfer-alt"></i><span>transfer-alt</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-play-circle"></i><span>play-circle</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-log-out-circle"></i><span>log-out-circle</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-chevrons-right"></i><span>chevrons-right</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-sync"></i><span>sync</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-right-indent"></i><span>right-indent</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-align-justify"></i><span>align-justify</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i
                                                    class="bx bx-fast-forward-circle"></i><span>fast-forward-circle</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-bug-alt"></i><span>bug-alt</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-data"></i><span>data</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-plus-medical"></i><span>plus-medical</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-dna"></i><span>dna</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-dots-horizontal"></i><span>dots-horizontal</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-skip-next"></i><span>skip-next</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-bitcoin"></i><span>bitcoin</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-line-chart"></i><span>line-chart</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-pyramid"></i><span>pyramid</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-calendar-plus"></i><span>calendar-plus</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-food-menu"></i><span>food-menu</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-image-alt"></i><span>image-alt</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-extension"></i><span>extension</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-shield-alt-2"></i><span>shield-alt-2</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-microphone"></i><span>microphone</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-bookmarks"></i><span>bookmarks</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-diamond"></i><span>diamond</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-building-house"></i><span>building-house</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-archive"></i><span>archive</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-spa"></i><span>spa</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-checkbox-minus"></i><span>checkbox-minus</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-registered"></i><span>registered</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-collapse-vertical"></i><span>collapse-vertical</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-leaf"></i><span>leaf</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-party"></i><span>party</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-scatter-chart"></i><span>scatter-chart</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-circle-quarter"></i><span>circle-quarter</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-circle-half"></i><span>circle-half</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-cricket-ball"></i><span>cricket-ball</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-gas-pump"></i><span>gas-pump</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-message-square"></i><span>message-square</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-bolt-circle"></i><span>bolt-circle</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i
                                                    class="bx bx-dots-vertical-rounded"></i><span>dots-vertical-rounded</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-rewind"></i><span>rewind</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-wink-tongue"></i><span>wink-tongue</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-cuboid"></i><span>cuboid</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i
                                                    class="bx bx-left-down-arrow-circle"></i><span>left-down-arrow-circle</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-error"></i><span>error</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-meh-blank"></i><span>meh-blank</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-volume-mute"></i><span>volume-mute</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-basket"></i><span>basket</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-male-sign"></i><span>male-sign</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-x-circle"></i><span>x-circle</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-check-square"></i><span>check-square</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-volume-full"></i><span>volume-full</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-bell"></i><span>bell</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-brush-alt"></i><span>brush-alt</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-notepad"></i><span>notepad</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-bullseye"></i><span>bullseye</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-cycling"></i><span>cycling</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-bug"></i><span>bug</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-align-middle"></i><span>align-middle</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-message-alt-dots"></i><span>message-alt-dots</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-down-arrow-circle"></i><span>down-arrow-circle</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-video"></i><span>video</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-upside-down"></i><span>upside-down</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-exit"></i><span>exit</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-envelope"></i><span>envelope</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-space-bar"></i><span>space-bar</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-rectangle"></i><span>rectangle</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-key"></i><span>key</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-chart"></i><span>chart</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-stopwatch"></i><span>stopwatch</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-search-alt-2"></i><span>search-alt-2</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-chevron-right"></i><span>chevron-right</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-copy"></i><span>copy</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-code"></i><span>code</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-vertical-center"></i><span>vertical-center</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-memory-card"></i><span>memory-card</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-clinic"></i><span>clinic</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-book"></i><span>book</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-chevron-up"></i><span>chevron-up</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-conversation"></i><span>conversation</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i
                                                    class="bx bx-left-top-arrow-circle"></i><span>left-top-arrow-circle</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-confused"></i><span>confused</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-message-dots"></i><span>message-dots</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-dish"></i><span>dish</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-no-entry"></i><span>no-entry</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-time-five"></i><span>time-five</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-shape-triangle"></i><span>shape-triangle</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-meh-alt"></i><span>meh-alt</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-pause"></i><span>pause</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-arrow-back"></i><span>arrow-back</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-image-add"></i><span>image-add</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-book-open"></i><span>book-open</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-calendar-x"></i><span>calendar-x</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-checkbox-checked"></i><span>checkbox-checked</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-male"></i><span>male</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-cloud-download"></i><span>cloud-download</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-error-alt"></i><span>error-alt</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-brightness-half"></i><span>brightness-half</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-menu"></i><span>menu</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-terminal"></i><span>terminal</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-fridge"></i><span>fridge</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-add-to-queue"></i><span>add-to-queue</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-speaker"></i><span>speaker</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-down-arrow-alt"></i><span>down-arrow-alt</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-error-circle"></i><span>error-circle</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-align-right"></i><span>align-right</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-download"></i><span>download</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-last-page"></i><span>last-page</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-pie-chart-alt-2"></i><span>pie-chart-alt-2</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-wallet-alt"></i><span>wallet-alt</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-bulb"></i><span>bulb</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-chat"></i><span>chat</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-collapse-alt"></i><span>collapse-alt</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-money-withdraw"></i><span>money-withdraw</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-baguette"></i><span>baguette</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-knife"></i><span>knife</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-fork"></i><span>fork</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-bowl-rice"></i><span>bowl-rice</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-male-female"></i><span>male-female</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-lemon"></i><span>lemon</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-desktop"></i><span>desktop</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-dizzy"></i><span>dizzy</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-code-alt"></i><span>code-alt</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-camera"></i><span>camera</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-bell-minus"></i><span>bell-minus</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-radio-circle"></i><span>radio-circle</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-lira"></i><span>lira</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-bowling-ball"></i><span>bowling-ball</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-cake"></i><span>cake</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-lock-alt"></i><span>lock-alt</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-face"></i><span>face</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-trending-down"></i><span>trending-down</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-wink-smile"></i><span>wink-smile</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-border-bottom"></i><span>border-bottom</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-ghost"></i><span>ghost</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-fast-forward"></i><span>fast-forward</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-copyright"></i><span>copyright</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-slideshow"></i><span>slideshow</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-female-sign"></i><span>female-sign</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-file-find"></i><span>file-find</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-crosshair"></i><span>crosshair</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-credit-card-alt"></i><span>credit-card-alt</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-info-circle"></i><span>info-circle</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-skip-previous"></i><span>skip-previous</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-exit-fullscreen"></i><span>exit-fullscreen</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-smile"></i><span>smile</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-accessibility"></i><span>accessibility</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-cloud"></i><span>cloud</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-border-left"></i><span>border-left</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-hive"></i><span>hive</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-at"></i><span>at</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-chevrons-up"></i><span>chevrons-up</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-shape-square"></i><span>shape-square</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-cool"></i><span>cool</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-map-pin"></i><span>map-pin</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-user-voice"></i><span>user-voice</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-up-arrow-alt"></i><span>up-arrow-alt</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-dollar"></i><span>dollar</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-toggle-left"></i><span>toggle-left</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-briefcase"></i><span>briefcase</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i
                                                    class="bx bx-right-top-arrow-circle"></i><span>right-top-arrow-circle</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-square"></i><span>square</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-chevrons-left"></i><span>chevrons-left</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-camera-off"></i><span>camera-off</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-block"></i><span>block</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-purchase-tag-alt"></i><span>purchase-tag-alt</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-trending-up"></i><span>trending-up</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-compass"></i><span>compass</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-broadcast"></i><span>broadcast</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-left-indent"></i><span>left-indent</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-image"></i><span>image</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-chevron-down"></i><span>chevron-down</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-bar-chart"></i><span>bar-chart</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i
                                                    class="bx bx-right-down-arrow-circle"></i><span>right-down-arrow-circle</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-sleepy"></i><span>sleepy</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-brightness"></i><span>brightness</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-fullscreen"></i><span>fullscreen</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i
                                                    class="bx bx-dots-horizontal-rounded"></i><span>dots-horizontal-rounded</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-building"></i><span>building</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-briefcase-alt-2"></i><span>briefcase-alt-2</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-clipboard"></i><span>clipboard</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-polygon"></i><span>polygon</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-paint-roll"></i><span>paint-roll</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-gift"></i><span>gift</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-shekel"></i><span>shekel</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-reset"></i><span>reset</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-won"></i><span>won</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-podcast"></i><span>podcast</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-qr-scan"></i><span>qr-scan</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-injection"></i><span>injection</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-math"></i><span>math</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-cable-car"></i><span>cable-car</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-cross"></i><span>cross</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-pause-circle"></i><span>pause-circle</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-border-all"></i><span>border-all</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-log-in-circle"></i><span>log-in-circle</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-show"></i><span>show</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-play"></i><span>play</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-tone"></i><span>tone</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-calendar-check"></i><span>calendar-check</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-up-arrow-circle"></i><span>up-arrow-circle</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-mobile-landscape"></i><span>mobile-landscape</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-toggle-right"></i><span>toggle-right</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-doughnut-chart"></i><span>doughnut-chart</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-code-curly"></i><span>code-curly</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-filter-alt"></i><span>filter-alt</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-captions"></i><span>captions</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-message-alt"></i><span>message-alt</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-border-top"></i><span>border-top</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-user-pin"></i><span>user-pin</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-book-content"></i><span>book-content</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-bar-chart-alt-2"></i><span>bar-chart-alt-2</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-female"></i><span>female</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-rupee"></i><span>rupee</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-bell-off"></i><span>bell-off</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-tired"></i><span>tired</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-calendar"></i><span>calendar</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-volume-low"></i><span>volume-low</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-health"></i><span>health</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-palette"></i><span>palette</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-food-tag"></i><span>food-tag</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-zoom-out"></i><span>zoom-out</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-first-page"></i><span>first-page</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-euro"></i><span>euro</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-folder-plus"></i><span>folder-plus</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-mobile-vibration"></i><span>mobile-vibration</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-phone-off"></i><span>phone-off</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-checkbox-square"></i><span>checkbox-square</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-dialpad-alt"></i><span>dialpad-alt</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-lock-open-alt"></i><span>lock-open-alt</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-left-arrow-alt"></i><span>left-arrow-alt</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-stop-circle"></i><span>stop-circle</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i
                                                    class="bx bx-message-rounded-dots"></i><span>message-rounded-dots</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-square-rounded"></i><span>square-rounded</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-bookmark"></i><span>bookmark</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-bookmark-plus"></i><span>bookmark-plus</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-minus-circle"></i><span>minus-circle</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-folder-minus"></i><span>folder-minus</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-align-left"></i><span>align-left</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-radio"></i><span>radio</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-cloud-upload"></i><span>cloud-upload</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-laugh"></i><span>laugh</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-alarm-add"></i><span>alarm-add</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-copy-alt"></i><span>copy-alt</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-folder"></i><span>folder</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-zoom-in"></i><span>zoom-in</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-store-alt"></i><span>store-alt</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-left-arrow-circle"></i><span>left-arrow-circle</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-shocked"></i><span>shocked</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i
                                                    class="bx bx-radio-circle-marked"></i><span>radio-circle-marked</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-happy-alt"></i><span>happy-alt</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-bluetooth"></i><span>bluetooth</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-angry"></i><span>angry</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-printer"></i><span>printer</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-mail-send"></i><span>mail-send</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-edit-alt"></i><span>edit-alt</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-book-bookmark"></i><span>book-bookmark</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-right-arrow-circle"></i><span>right-arrow-circle</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-wifi-off"></i><span>wifi-off</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-cylinder"></i><span>cylinder</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i
                                                    class="bx bx-message-square-dots"></i><span>message-square-dots</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-yen"></i><span>yen</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-customize"></i><span>customize</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-buildings"></i><span>buildings</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-cube-alt"></i><span>cube-alt</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-mouse-alt"></i><span>mouse-alt</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-rss"></i><span>rss</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-checkbox"></i><span>checkbox</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-ruble"></i><span>ruble</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-sort-a-z"></i><span>sort-a-z</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-receipt"></i><span>receipt</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-coffee"></i><span>coffee</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-archive-out"></i><span>archive-out</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-droplet"></i><span>droplet</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-bar-chart-alt"></i><span>bar-chart-alt</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-chevrons-down"></i><span>chevrons-down</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-video-recording"></i><span>video-recording</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i
                                                    class="bx bx-collapse-horizontal"></i><span>collapse-horizontal</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-expand-vertical"></i><span>expand-vertical</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-expand-horizontal"></i><span>expand-horizontal</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-candles"></i><span>candles</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-popsicle"></i><span>popsicle</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-bowl-hot"></i><span>bowl-hot</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i
                                                    class="bx bx-circle-three-quarter"></i><span>circle-three-quarter</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-hard-hat"></i><span>hard-hat</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-home-alt-2"></i><span>home-alt-2</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-signal-3"></i><span>signal-3</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-no-signal"></i><span>no-signal</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-cart-download"></i><span>cart-download</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-cart-add"></i><span>cart-add</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-reflect-horizontal"></i><span>reflect-horizontal</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-cheese"></i><span>cheese</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-signal-2"></i><span>signal-2</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-signal-4"></i><span>signal-4</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-reflect-vertical"></i><span>reflect-vertical</span>
                                            </div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-signal-1"></i><span>signal-1</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-signal-5"></i><span>signal-5</span></div>
                                        </div>
                                        <div class="col-3 pointer" onclick="iconclick(this)">
                                            <div><i class="bx bx-color"></i><span>color</span></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{-- input form --}}
                            <input type="text" class="form-control mt-4" id="icon" name="icon" value="{{ old('icon') }}"
                                readonly required>
                        </div>
                        {{-- create form input name, description, url --}}
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" class="form-control" id="name" name="name" value="{{ old('name') }}"
                                placeholder="Masukan nama layanan" required>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <textarea class="form-control" id="description" name="description"
                                placeholder="Masukan deskripsip layanan" required>{{ old('description') }}</textarea>
                        </div>
                        <div class="form-group">
                            <label for="url">Url</label>
                            <input type="text" class="form-control" id="url" name="url" value="{{ old('url') }}"
                                placeholder="Masukan alamat/url layanan" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- ============================================================== -->
<!-- End PAge Content -->
<!-- ============================================================== -->
@endsection
@section('custom_js')
<script src="https://unpkg.com/boxicons@2.1.2/dist/boxicons.js"></script>
<script>
    function readImage(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#profile_pict')
                    .attr('src', e.target.result);
            };
            reader.readAsDataURL(input.files[0]);
        }
    }
    function iconclick(tag) {
        var className = tag.children[0].children[0].className;
        $('#icon').val(className);
    }
</script>
@endsection
@section('custom_css')
<link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
<style>
    .scroll {
        max-height: 200px;
        overflow-y: auto;
        overflow-x: hidden;
    }

    .pointer {
        cursor: pointer;
    }
</style>
@endsection