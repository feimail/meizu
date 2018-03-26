@extends('./layout.index')


@section('content')

<div class="mws-panel grid_8">
    <div class="mws-panel-header">
        <span>友情链接添加</span>
    </div>
    <div class="mws-panel-body no-padding">
        
        @if (count($errors) > 0)
           <div class="mws-form-message error">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="/admin/you/insert" method='post' class="mws-form" enctype="multipart/form-data">
            <div class="mws-form-inline">
                <div class="mws-form-row">
                    <label class="mws-form-label">网站名称:</label>
                    <div class="mws-form-item">
                        <input type="text" name='name' value="{{old('name')}}" class="small">
                    </div>
                </div>
                <div class="mws-form-row">
                    <label class="mws-form-label">地址:</label>
                    <div class="mws-form-item">
                        <input type="url" name='url'class="small">
                    </div>
                </div>   
                 <div class="mws-form-row">
                    <label class="mws-form-label">状态</label>
                    <div class="mws-form-item clearfix">
                         <ul class="mws-form-list inline">
                            <li><input type="radio" name="status" value="1" checked="checked"> <label>申请通过</label></li>
                            <li><input type="radio" name="status" value="0"> <label>未审核</label></li>
                        </ul>
                    </div>
                </div>`


            </div>
            <div class="mws-button-row">
                {{ csrf_field() }}

                <input type="submit" class="btn btn-danger" value="提交">
                <input type="reset" class="btn " value="重置">
            </div>
        </form>
    </div>      
</div>

@endsection