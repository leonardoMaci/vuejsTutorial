<template>
    <form @:action="action" @:method="defineMethod" @:class="css" @:enctype="enctype">
        <input v-if="token" type="hidden" name="_token" v-bind:value="token">
        <input v-if="alterMethod" type="hidden" name="_method" value="alterMethod">
        <div class="form-group">
            <label for="Title">title article:</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="Description">Description:</label>
            <input type="text" class="form-control">
        </div>
        <div class="form-group">
            <label for="Author">Author:</label>
            <input type="text" class="form-control">
        </div>        
        <div class="form-group">
            <label for="Data">Data:</label>
            <input type="text" class="form-control">
        </div>
         <div class="text-right">
            <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
            <button type="button" class="btn btn-primary">Create</button>
        </div>
    </form>
</template>

<script>
    export default{
        props:['token','method','action','enctype','css'],
        data: function(){
            return {
                alterMethod: ""
            }
        },
        computed:{
            defineMethod: function(){
                if(this.method.toLowerCase() == "post" || this.method.toLowerCase() == "get"){
                    return this.method.toLowerCase();
                }

                if(this.method.toLowerCase() == "put"){
                    this.alterMethod = "put"
                }

                if(this.method.toLowerCase() == "delet"){
                    this.alterMethod = "delet"
                }

                return "post";
            }
        }
    }
</script>

<style type="text/css">


</style>
