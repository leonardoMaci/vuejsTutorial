@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-10 col-md-offset-1">
            <panel title="Dashbord">     
                <div class="row">
                    <div class="col-md-4">
                        <panel title="conteudo 1" color="orange">
                        <a href="{{route('home2')}}">Home 2</a>
                        </panel>
                    </div>
                    <div class="col-md-4">
                        <panel title="conteudo 2" color="blue"></panel>
                    </div>
                    <div class="col-md-4">
                        <panel title="conteudo 3" color="red"></panel>
                    </div>
                </div>        
            </panel>
        </div>
    </div>
</div>
@endsection
