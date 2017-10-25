@extends('admin.component.base')

@section('content')
    <span>项目评分</span>


    <div class="column">
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>队名</th>
                <th>评分状态</th>
            </tr>
            </thead>
            <tbody>
            @foreach($state as $type=>$count)
                @if($count == 1)
                    <tr class="active">
                        <td>{{ $type }}</td>
                        <td>已评分</td>
                        <td></td>
                    </tr>
                @else
                    <tr class="active">
                        <td>{{ $type }}</td>
                        {{--<td><input class="form-input" type="text" id="input-example-1" placeholder="score" name="score" v-model="score.{{ $type }}" onkeyup="value=value.replace(/[^\d]/g,'')" maxlength="2"></td>--}}
                        <td>未评分</td>
                        <td><a href="{{ url('/admin/'.$type) }}" class="btn super-btn">评分</a></td>
                    </tr>
                @endif
            @endforeach
            </tbody>
        </table>
        {{--@if($count == 1)--}}
        {{--<button class="btn btn-link btn-action">--}}
        {{--<i class="icon icon-check"></i>--}}
        {{--</button>--}}
        {{--<span class="label label-primary">{{ $type }}</span>--}}
        {{--已评分--}}
        {{--@else--}}
        {{--<span class="label label-primary">{{ $type }}</span>--}}
        {{--<input type="text" name="score" v-model="score.{{ $type }}" onkeyup="value=value.replace(/[^\d]/g,'')" maxlength="2"/>--}}
        {{--<input class="form-input" type="text" id="input-example-1" placeholder="score" name="score" v-model="score.{{ $type }}" onkeyup="value=value.replace(/[^\d]/g,'')" maxlength="2">--}}
        {{--<button v-on:click="scoring('{{ $type }}')" class="btn super-btn">评分</button>--}}
        {{--@endif--}}

    </div>

@endsection
