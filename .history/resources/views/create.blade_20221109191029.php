@extends('layouts.app')

@section('content')
<div class="card">
    <div class="card-header">新規メモ作成</div>
    <form class="card-body" action="/store" method="POST">
        <div class="mb-3">
            <textarea class="form-control" name="" rows="3"></textarea>
        </div>
    </form>
</div>
@endsection
