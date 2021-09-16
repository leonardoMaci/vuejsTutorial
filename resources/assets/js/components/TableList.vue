<template>
    <div>
    <div class="form-inline">
        <div class="form-group pull-right">
            <input class="form-control" type="text" placeholder="Search" aria-label="Search" v-model="search">
            <i class="fas fa-search" aria-hidden="true"></i>
        </div>
    </div>
    <table class="table table-striped table-hover">
        <thead>
            <tr>
            <th scope="col">#</th>
            <th v-for="title in titles">{{ title }}</th>
            </tr>
        </thead>
        <tbody>
            <tr v-for="list in filteredList">
                <td v-for="itens in list">{{ itens }}</td>

                <td v-if="delet && token"> 
                    <form v-if="delet && token" action="index.html" method="post">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" v-bind:value="token">

                        <a v-bind:href="edit">Edit</a>
                        <a v-bind:href="details">details</a>
                        <a v-bind:href="delet">| Delet</a>       
                    </form>         
                </td>
                <td v-else-if="0">
                    <a v-bind:href="edit">Edit |</a>
                    <a v-bind:href="details"> Details |</a>
                    <a v-bind:href="delet"> Delet</a>
                </td>
            </tr>
        </tbody>
    </table>     
    </div>
</template>

<script>
    export default{
        props:['titles','list_itens','edit','delet','details','token'],
        data: function(){
            return {
                search: ''
            }
        },
        computed:{
            filteredList: function(){                
                return this.list_itens.filter(response => {
                    for(let i = 0; i < response.length; i++){
                        if((response[i] + "").toLowerCase().indexOf(this.search.toLowerCase()) >= 0){
                            return true;
                        }
                    }
                    return false;  
                });         
            }   
        }
    }

</script>

<style type="text/css">


</style>