<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>{{ $title }}</title>
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
<div class="row" style="margin:10px auto;width:960px;">
    <h1>{{ $title }}</h1>
{!! Form::open(['url'=>'/game/store','method'=>'post']) !!}
<div class="form-group">
    {{ Form::label('標題', null, ['class' => 'control-label']) }}
    {{ Form::text('title', '', array_merge(['class' => 'form-control'])) }}
</div>
<div class="form-group">
    {{ Form::label('連結', null, ['class' => 'control-label']) }}
    {{ Form::text('slug', '', array_merge(['class' => 'form-control'])) }}
</div>
<div class="form-group">
    {{ Form::label('內容', null, ['class' => 'control-label']) }}
    {{ Form::textarea('content', '', array_merge(['class' => 'form-control'])) }}
</div>
    <div class="form-group">
        {{Form::submit('發表文章')}}
    </div>
{!! Form::close() !!}
</div>
<script src="//cdn.ckeditor.com/4.5.6/standard/ckeditor.js"></script>
<script type="text/javascript">
CKEDITOR.replace('content');
</script>
</body>
</html>