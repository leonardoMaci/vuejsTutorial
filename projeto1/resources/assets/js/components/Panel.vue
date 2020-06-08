<template>
    <div v-bind:class="defineColor" v-bind:style="setMargin">
        <div class="panel-heading">{{ title }}</div>
        
        <div class="panel-body">
            <slot></slot>
        </div>
    </div>
</template>

<script>
    export default{
        props:['title','color','margin'],
        computed:{
            defineColor: function(){
                return "panel "+ (this.color || "panel-default");
            },
            setMargin: function(){
                return "margin: "+this.margin;
            }
        }
    }

</script>

<style type="text/css">

.blue{
    border-color:#0d4a96;
}
.blue > .panel-heading{
    color:#f7f7f7;
    background-color:#0d4a96;
    border-color:#0d4a96;
}

.orange{
    border-color:#ffa80d;
}
.orange > .panel-heading{
    color:#f7f7f7;
    background-color:#ffa80d;
    border-color:#ffa80d;
}

.red{
    border-color:#ff0d0d;
}
.red > .panel-heading{
    color:#f7f7f7;
    background-color:#ff0d0d;
    border-color:#ff0d0d;
}
</style>