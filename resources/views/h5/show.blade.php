<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width,initial-scale=1,user-scalable=0,viewport-fit=cover" name="viewport">
    <title>拟物校园</title>
    <link href="{{ URL::asset('h5/weui/css/weui.css') }}" rel="stylesheet" />
    <link href="{{ URL::asset('h5/css/main.css') }}" rel="stylesheet" />
</head>


<body>
    <div class="page flex js_show">

        <div class="page__hd">
            <h1 class="page__title">基本信息</h1>
        </div>
        <div class="page__bd">
            <div class="weui-form-preview weui-form-show nivin">
                <div class="weui-form-preview__hd">
                    <div class="weui-form-preview__item">
                        <label class="weui-form-preview__label">{{ $persos['xm'] }}</label>
                        <em class="weui-form-preview__value">{{ $persos['xh'] }}</em>
                    </div>
                </div>
                <div class="weui-form-preview__bd">
                    <div class="weui-form-preview__item">
                        <label class="weui-form-preview__label">性别</label>
                        <span class="weui-form-preview__value">{{ $persos['xb'] }}</span>
                    </div>
                    <div class="weui-form-preview__item">
                        <label class="weui-form-preview__label">出生日期</label>
                        <span class="weui-form-preview__value">{{ $persos['sr'] }}</span>
                    </div>
                    <div class="weui-form-preview__item">
                        <label class="weui-form-preview__label">民族</label>
                        <span class="weui-form-preview__value">{{ $persos['mz'] }}</span>
                    </div>
                    <div class="weui-form-preview__item">
                        <label class="weui-form-preview__label">学历</label>
                        <span class="weui-form-preview__value">{{ $persos['xl'] }}</span>
                    </div>
                    <div class="weui-form-preview__item">
                        <label class="weui-form-preview__label">学院</label>
                        <span class="weui-form-preview__value">{{ $persos['xy'] }}</span>
                    </div>
                    <div class="weui-form-preview__item">
                        <label class="weui-form-preview__label">专业</label>
                        <span class="weui-form-preview__value">{{ $persos['zy'] }}</span>
                    </div>
                    <div class="weui-form-preview__item">
                        <label class="weui-form-preview__label">班级</label>
                        <span class="weui-form-preview__value">{{ $persos['bj'] }}</span>
                    </div>
                </div>
            </div>
        </div>

        @if ($grades)
            
        <div class="page__hd">
            <h1 class="page__title">成绩</h1>
        </div>

        <div class="page__bd">
            <div class="weui-form-preview weui-form-show nivin">
                <div class="weui-form-preview__bd">
                    @foreach ($grades as $grade)
                    <div class="weui-form-preview__item">
                        <label class="weui-form-preview__label">{{ $grade['km'] }}</label>
                        <span
                            class="weui-form-preview__value">{{ $grade['cj'] }}-{{ $grade['jd'] }}-{{ $grade['xf'] }}</span>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>

        @endif

        {{-- <div class="page__hd">
            <h1 class="page__title">课表</h1>
        </div>

        <div class="page__bd">
            <div class="weui-form-preview weui-form-show nivin" style="padding: 10px;">
            </div>
        </div> --}}
        

        <div class="page__ft">
            <div class="weui-footer">
                <p class="weui-footer__text">Copyright © 2016-2020 nivin.cn</p>
            </div>
        </div>
    </div>
</body>

</html>