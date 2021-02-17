@extends('weblayouts.default')
@section('content')
<div class="container-kt-fixed">
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">เลือกกระทง</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <form action="{{ url('savekrathong') }}" method="POST">
                    {{csrf_field()}}
              <div class="row justify-content-center">
                <div class="col-4">
                    <div class="button_kt">
                        <input type="radio" name="kt_type" checked="checked" value="1" id="a" />
                        <label for="a"><img src="{{ asset('img/1.png') }}" class="css-wq2olw"></label>
                    </div>
                </div>
                <div class="col-4">
                    <div class="button_kt">
                        <input type="radio" name="kt_type" value="2" id="b" />
                        <label for="b"><img src="{{ asset('img/2.png') }}" class="css-wq2olw"></label>
                    </div>
                </div>
                <div class="col-4">
                    <div class="button_kt">
                        <input type="radio" name="kt_type"value="3" id="c" />
                        <label for="c"><img src="{{ asset('img/3.png') }}" class="css-wq2olw"></label>
                    </div>
                </div>
                <div class="col-4">
                    <div class="button_kt">
                        <input type="radio" name="kt_type" value="4" id="d" />
                        <label for="d"><img src="{{ asset('img/4.png') }}" class="css-wq2olw"></label>
                    </div>
                </div>
                <div class="col-4">
                    <div class="button_kt">
                        <input type="radio" name="kt_type" value="5" id="e" />
                        <label for="e"><img src="{{ asset('img/5.png') }}" class="css-wq2olw"></label>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-12">
                    <div class="col-lg-12 mb-5">
                        <br>
                            <h5 class="mb-3"> <strong>โปรดใส่คำอธิษฐานในการลอยกระทงออนไลน์</strong></h5>
                                <div class="mb-3">
                                    <label for="name" class="form-label">ใส่ชื่อ<span class="text-danger"> *</span></label>
                                    <input type="text" required class="form-control" id="name" name="name" ng-maxlength="30" ng-model="member.name" required placeholder="ชื่อเรา หรือ คนที่เรารัก">
                                </div>
                                <div class="mb-3">
                                    <label for="comment">ใส่คำอธิษฐาน<span class="text-danger"> *</span></label>
                                    <textarea  class="form-control" required ng-model="member.message" id="kt_wiah" name="kt_wish" ng-maxlength="200" rows="5" placeholder="คำอธิษฐาน"></textarea>
                                </div>
                                <input type="submit" class="btn btn-success btn-block" value="ปล่อยทระทงลงสู่แม่น้ำ">
                                <button type="button" class="btn btn-secondary btn-block" data-dismiss="modal">Close</button>
                            </form>
                    </div>
                </div>
            </div>
            </div>
          </div>
        </div>
      </div>
      {{-- <---------------------------------- ส่วนของ Modal Popup----------------------------> --}}
    <div class="container_baner" style="">
        <div class="baner d-flex text-center align-items-center">
            <h1>เว็บลอยกระทงออนไลน์</h1>
            <br>
            <button type="button" class="btn btn-success btn-kt" data-toggle="modal" data-target="#exampleModal">
                เริ่มลอยกระทง
            </button>
            <div class="moon"><span style=" background-image: url({{ asset('img/moon.png') }}) ;" ></span></div>
            <video id="bg_vdo" loop muted autoplay>
                <source src="{{ asset('vdo/bg_vdo.mp4') }}">
            </video>
        </div>
        <div class="container_kt" style=" background-image: url({{ asset('img/no.jpg') }}) ;" >
        @if (count($_data)>0)
        <?php $kt_way = 0 ?>
            @foreach ($_data as $rec)
            <?php $kt_way = $kt_way+1 ?>
                <div class="item-relative">
                    <div class="item-slide{{ $kt_way }}">
                        <div class="item-up-down">
                            <div class="item-swing">
                                <div class="kt_text-box">
                                    <h5>{{$rec->name}}</h5>
                                    <p>{{$rec->kt_wish}}</p>
                                </div>
                                <img src="{{ asset('img') }}/{{$rec->kt_type}}.png" alt="">
                                
                            </div>
                        </div>
                    </div>
                </div> 
            @endforeach
        @endif
        </div>
    </div>
    <div class="box_kt" style="height: 10vh; width:100%">

    </div>
    

@endsection