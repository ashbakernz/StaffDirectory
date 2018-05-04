<template>
    <div class="employee-card">
        <div class="card">
            <div class="row">
                <div class="col-sm col-sm-auto pr-0">
                <img class="card-img-top-left" height="150px" v-bind:src="employee.user.data.avatar"/>
                </div>
                <div class="col-sm px-0">
                <div class="card-body">
                    <h4 class="card-title">{{ employee.first_name + ' ' + employee.last_name}}</h4>
                    <p class="card-text">{{ employee.bio_description }}</p>
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
    .employee-card {
        padding-bottom: 10px;
    }
</style>
