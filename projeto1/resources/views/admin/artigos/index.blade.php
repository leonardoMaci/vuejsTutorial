@extends('layouts.app')

@section('content')
<page size="10">
    <panel title="Lista de argtigos">     
        <modal name_button="Create" target_name_modal="staticModal">
            <panel title="Create article" margin=0 color="">
                <custom-form token="123" method="PUT" action="" enctype="" css=""></custom-form>
            </panel>
        </modal>
        <table-list 
            v-bind:titles="['Title','Description','Author','Data','Actions']"
            v-bind:list_itens="[
                        ['1','Mark','Otto','@mds','2020-02-02'],
                        ['2','Mark2','Otto','@md','2020-02-02'],
                        ['3','Mark3','Otto','@ms','2020-02-02']
                        ]"
            edit="" delet="22" details="" token="22"
        ></table-list>     
    </panel>
</page>
@endsection
