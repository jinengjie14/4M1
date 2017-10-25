@extends('admin.component.base')

@section('content')
    <span>评分结果</span>

    <div class="column">
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>队名</th>
                <th>评分结果</th>
            </tr>
            </thead>
            <tbody>
            @foreach($team as $type)
                <tr class="active">
                    <td>{{ $type->name }}</td>
                    <td>{{ $type->score }} 分</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    </div>

    {{--@foreach($team as $type)--}}
    {{--<div class="column col-6">--}}
    {{--{{ $type->name }}--}}
    {{--{{ $type->score }}--}}
    {{--</div>--}}
    {{--@endforeach--}}
@endsection
