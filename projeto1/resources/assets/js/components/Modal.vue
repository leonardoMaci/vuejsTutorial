<template>
    <div>
        <button type="button" class="btn btn-primary" data-toggle="modal"  v-bind:data-target=" '#' + target_name_modal">
            {{ name_button }}
        </button>
        <div class="modal fade" v-bind:id="target_name_modal" data-backdrop="static" data-keyboard="false" tabindex="-1" role="dialog" aria-labelledby="staticBackdropLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content">
                    <div class="modal-body">
                        <slot></slot>
                    </div>                   
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default{
        props:['target_name_modal','name_button'],
        computed:{

        }
    }
</script>

<style type="text/css">


</style>
