@extends('layouts.app')

@section('content')

<!-- ここにページ毎のコンテンツを書く -->
<h1>メッセージ新規作成ページ</h1>

<div class="row">
    <div class="col-6">
        {!! Form::model($message, ['route' => 'messages.store']) !!}

            <div class="form-group">
                {!! Form::label('content', 'メッセージ:') !!}
                {!! Form::text('content', null, ['class' => 'form-control']) !!}
            </div>

            {!! Form::submit('投稿', ['class' => 'btn btn-primary']) !!}

            <!-- {{ '<p style="color: red;">htmlspecialchars関数に通した場合</p>' }}
            {!! '<p style="color: red;">htmlspecialchars関数に通さなかった場合</p>' !!} -->

        {!! Form::close() !!}
    </div>
</div>

@endsection