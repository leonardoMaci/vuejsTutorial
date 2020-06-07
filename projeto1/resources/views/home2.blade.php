@extends('layouts.app')

@section('content')
<page size="10">
    <panel title="Dashbord">     
        <div class="row">
            <div class="col-md-4">
                <box title="53%" description="buy" color="orange" url="/home2" url_description="More info" icon="fa fa-shopping-cart"></box>
            </div>
            <div class="col-md-4">
                <box title="150%" description="stats" color="red" url="/home" url_description="More info" icon="ion ion-stats-bars"></box>
            </div>
            <div class="col-md-4">
                <box title="700%" description="peoples" color="blue" url="/#" url_description="More info" icon="ion ion-person-add"></box>
            </div>
        </div>        
    </panel>
</page>
@endsection
