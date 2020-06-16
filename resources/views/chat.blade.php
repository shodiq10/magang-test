@extends('layouts.main')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-10">
            <div class="card">

            <div class="card-header"><div class="text-center">ChatBox</div></div>

                <div class="card-body" style="height:360px; overflow:auto;">
                <chat :key=text v-for="text in text"> @{{ text }} </chat>

                </div>
                <div class="card-footer">
                        <div class="input-group">
                        <input type="" class="form-control" v-model='input' @keyup.enter='push' placeholder="ketik didini ..." text="">
                        <span class="input-group-btn">
                        <button class="btn btn-warning" @click.prevent='push'>kirim</button>
                        </span>
                        </div>
                </div>
                
            </div>
        </div>
    </div>
</div>
@endsection

<style type="text/css">
    .chatcolor{
        background-color : #099;
        padding :10px;
        border-bottom-left-radius : 24px;
        border-bottom-right-radius : 28px;
        border-top-right-radius : 28px;
        margin-top :6px;
    }
</style>
