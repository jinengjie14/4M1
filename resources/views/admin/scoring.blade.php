@extends('admin.component.base')

@section('content')
    <span>项目评分</span>

<form>
    <div class="column">
        <table class="table table-striped table-hover">
            <thead>
            <tr>
                <th>评分项目</th>
                <th>满分</th>
                <th>评分细则</th>
                <th>请评分</th>
            </tr>
            </thead>
            <tbody>
            <tr class="active">
                <td>美工设计</td>
                <td>30分</td>
                <td>
                    1.阅读性强，色彩运用协调，排版合理</br>
                    2.网页中至少有两种类型HTML5动画效果
                </td>
                <td><input type="text" v-model="design" name="design" maxlength="2"/></td>
            </tr>
            <tr class="active">
                <td>响应式布局</td>
                <td>30分</td>
                <td>
                    1.能在各种不同分辨率的设备上正常浏览</br>
                    2.网页兼容IE10以上版本，Firefox，chrome 浏览器
                </td>
                <td><input type="text" v-model="layout" name="layout" maxlength="2"/></td>
            </tr>
            <tr class="active">
                <td>代码规范</td>
                <td>10分</td>
                <td>
                    1.网页在开发状态和运行状态均没有JS脚本错误
                </td>
                <td><input type="text" v-model="code" name="code" maxlength="2"/></td>
            </tr>
            <tr class="active">
                <td>功能实现</td>
                <td>20分</td>
                <td>
                    1.实现用户登录功能，实现跨应用登陆授权</br>
                    2.具备现场添加或修改功能实现的能力
                </td>
                <td><input type="text" v-model="func" name="function" maxlength="2"/></td>
            </tr>
            <tr class="active">
                <td>演讲展示</td>
                <td>10分</td>
                <td>
                    1.陈述内容简明，准确，思路清晰，语言表达流畅</br>
                    2.通过前端展示阐述产品的基本功能及运用场景
                </td>
                <td><input type="text" v-model="show" name="show" maxlength="2"/></td>
            </tr>
            </tbody>
        </table>
        <button type="button" v-on:click="scoring('{{ $type }}')" class="btn super-btn">评分</button>
    </div>
</form>
@endsection
