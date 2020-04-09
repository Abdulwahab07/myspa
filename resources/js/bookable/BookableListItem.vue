<template>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card mb-2 mt-2 mr-2">
                    <div class="card-header">
                         {{ title }}
                    </div>
                    <br/>
                    <div class="card-body">
                         {{ content }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props : {"title":String , "content":String, "price":Number},
    mounted() {
        console.log(this.title);
    }
};
</script>