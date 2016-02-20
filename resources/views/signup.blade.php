<!DOCTYPE html>
<html>
    <head>
        <title>読みLOG 新規会員登録</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">
    </head>
    <body>
        <div class="container">
            <div class="content">
                {!! Form::open() !!}
                    <div class='form-group'>
                        {!! Form::label('name', 'ユーザー名：') !!}
                        {!! Form::text('name', null, ['class'=>'form-control']) !!}
                    </div>
                    <div class='form-group'>
                        {!! Form::label('email', 'メールアドレス') !!}
                        {!! Form::text('email', null, ['class'=>'form-control']) !!}
                    </div>
                    <div class='form-group'>
                        {!! Form::label('password', 'パスワード') !!}
                        {!! Form::password('password', ['class'=>'form-control']) !!}
                    </div>
                    <div class="form-group">
                        {!! Form::submit('登録', ['class' => 'btn btn-primary form-control']) !!}
                    </div>
                {!! Form::close() !!}
            </div>
        </div>
    </body>
</html>
