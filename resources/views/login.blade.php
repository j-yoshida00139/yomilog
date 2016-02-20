<!DOCTYPE html>
<html>
    <head>
        <title>読みLOG ログインページ</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <div class="content">
                {!! Form::open() !!}
                    <div class='form-group'>
                        {!! Form::label('email', 'メールアドレス') !!}
                        {!! Form::text('email', null, ['class'=>'form-control']) !!}
                    </div>
                    <div class='form-group'>
                        {!! Form::label('password', 'パスワード') !!}
                        {!! Form::password('password', ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('ログイン', ['class' => 'btn btn-primary form-control']) !!}
                    </div>
                {!! Form::close() !!}
                <a href="/signup">新規登録</a>
            </div>
        </div>
    </body>
</html>
