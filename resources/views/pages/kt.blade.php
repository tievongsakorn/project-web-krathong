@extends('weblayouts.default')

@section('content')
<div class="containtr_kt" style="">
    {{-- <img src="{{ asset('img/background_kt.jpg') }}" width="100%" > --}}
    <h1>เว็บลอยกระทง</h1>

    {{-- <div class="slide-wave" id="wave">
                        

        <img  src="{{ asset('img/wave.png') }}" alt="" srcset="">
  
        <img class="wave2" id="wave2"  src="{{ asset('img/wave.png') }}" alt="" srcset="">
        <img class="wave3" id="wave3"  src="{{ asset('img/wave.png') }}" alt="" srcset="">
    </div>

</div> --}}

<div class="container">
    <div class="row justify-content-center">
        <div class="col-2">
            <div class="button_kt">
                <input type="radio" name="kt_type" checked="checked" value="1" id="a" />
                <label for="a"><img src="{{ asset('img/1.png') }}" class="css-wq2olw"></label>
            </div>
        </div>
        <div class="col-2">
            <div class="button_kt">
                <input type="radio" name="kt_type" checked="checked" value="1" id="b" />
                <label for="b"><img src="{{ asset('img/2.png') }}" class="css-wq2olw"></label>
            </div>
        </div>
        <div class="col-2">
            <div class="button_kt">
                <input type="radio" name="kt_type" checked="checked" value="1" id="c" />
                <label for="c"><img src="{{ asset('img/3.png') }}" class="css-wq2olw"></label>
            </div>
        </div>
        <div class="col-2">
            <div class="button_kt">
                <input type="radio" name="kt_type" checked="checked" value="1" id="d" />
                <label for="d"><img src="{{ asset('img/4.png') }}" class="css-wq2olw"></label>
            </div>
        </div>
        <div class="col-2">
            <div class="button_kt">
                <input type="radio" name="kt_type" checked="checked" value="1" id="e" />
                <label for="e"><img src="{{ asset('img/5.png') }}" class="css-wq2olw"></label>
            </div>
        </div>
    </div>

    <div class="row justify-content-center">
        <div class="col-6">
            <div class="col-lg-12 mb-5">
                <br>
                    <h5 class="mb-3"> <strong>โปรดใส่คำอธิษฐานในการลอยกระทงออนไลน์</strong></h5>
                        <div class="mb-3">
                            <label for="name" class="form-label">ชื่อเรา<span class="text-danger"> *</span></label>
                            <input type="text" required class="form-control" id="name" name="name" ng-maxlength="30" ng-model="member.name" required placeholder="ชื่อเรา หรือ คนที่เรารัก">
                        </div>
                        <div class="mb-3">
                            <label for="comment">อยากอธิษฐานว่า<span class="text-danger"> *</span></label>
                            <textarea  class="form-control" required ng-model="member.message" id="comment" name="comment" ng-maxlength="200" rows="5" placeholder="คำอธิษฐาน"></textarea>
                        </div>
                        <input type="submit" class="btn btn-success btn-block" value="ปล่อยทระทงลงสู่แม่น้ำ">
                    </form>
            </div>
        </div>
        </div>

    </div>
    
    </div>
 

</div>





@endsection