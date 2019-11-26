@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>새글 쓰기</h1>
        <hr />
<!-- css: bootstrap4.3.1사용, ch.9에서 php artisan ui:vue --auth
npm i, npm run dev -->

        <form action="{{route('articles.store')}}" method="post">
            {!! csrf_field() !!}
            
            {{-- @csrf --}}
            {{-- route()-url경로, csrf_field-csrf대응 헬퍼함수  --}}

            <div class="form-group{{ $errors->has('title') ? 'has-error':''}}">
                <label for="title">제목</label>
                <input type="text" name="title" id="title" value="{{old('title')}}" class="form-control"/>
            </div>
            <div class="form-group {{ $errors->has('content') ? 'has-error' : '' }}">
                <label for="content">본문</label>
                <textarea name="content" id="content" cols="30" rows="10" class="form-control">{{ old('content')}}</textarea>
                {!! $errors->
                    first('content','<span class="form-error">:message</span>') !!}
                <!-- df첫번째에서 머머머ㅓ -->
            </div>
            <div class="form-group">
                <button class="btn btn-primary">저장하기</button> 
            </div>
        </form>
    </div>
@stop