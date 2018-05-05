<template>
    <div class="col-lg-12">
        <div class="card mb-2 mx-2">
            <div class="card-body d-flex flex-column">
                <div class="media">
                    <div class="pr-20 d-none d-md-block">
                        <a class="avatar" href="javascript:void(0)">
                            <img class="img-fluid" v-bind:src="employee.avatar" alt="...">
                        </a>
                    </div>
                    <div class="media-body">
                        <h5 class="mt-0 mb-2">{{ employee.name}}</h5>
                        <span class="text-subtitle mb-1">{{ employee.department}}</span>
                        <p>{{ employee.bio_description}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        props: [
            'employee'
        ]
    }
</script>
<style scoped>
    .avatar{
        height: 150px;
        width: 150px;
    }
    .text-subtitle {
        display: block;
        font-size: 0.8rem;
        line-height: 1;
        margin-bottom: 4px;
        color: #878787;
    }
    .media-body{
        padding: 14px 20px 14px;
        color: #545454;
        font-size: 0.9rem;
    }
</style>
