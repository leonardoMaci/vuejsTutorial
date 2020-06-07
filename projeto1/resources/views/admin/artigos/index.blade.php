@extends('layouts.app')

@section('content')
<page size="10">
    <panel title="Lista de argtigos">     
        <a href="url">Criar</a>
        <table-list 
            v-bind:titles="['Title','Description','Author','Data','Actions']"
            v-bind:list_itens="[
                        ['1','Mark','Otto','@mds','2020-12-12'],
                        ['2','Mark2','Otto','@mds','2020-12-12'],
                        ['3','Mark3','Otto','@mds','2020-12-12']
                        ]"
            edit="" delet="22" details="" token="22"
        ></table-list>     
    </panel>
</page>
@endsection
