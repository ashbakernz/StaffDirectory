<template>
    <li class="media my-3 employee-card media-border-color">
        <img v-bind:src="employee.user.data.avatar" class="avatar d-none d-lg-block">

        <div class="media-body">
            <h4 class="mb-1 text-name">{{ employee.name}}</h4>
            <span class="text-subtitle mb-1">{{ employee.department}}</span>
       
            <p>{{ employee.bio_description.substring(0, 150) }} ... <a href="#" class="btn-link">read more</a></p>
        </div>
    </li>
</template>

<script>
    export default {
        props: [
            'employee'
        ]
    }
</script>
<style scoped>

    .media-border-color {
        border-top: 4px solid #177E6D;
        border-radius: 0 0 1px 1px;
    }
    .avatar{
        height: 150px;
    }

    .text-subtitle {
        display: block;
        font-size: 0.8rem;
        line-height: 1;
        margin-bottom: 4px;
        color: #878787;
    }
    .text-name{
        font-size: 1.385rem;
        font-weight: 400;
        color: #3d3d3d;
        padding: 24px 0 0x;
    }
    .media-body{
        padding: 14px 20px 14px;
        color: #545454;
        font-size: 0.9rem;
    }
    .employee-card {
        background-color: #FFFFFF;
        margin-bottom: 29px;
        -webkit-box-shadow: 0 1px 0 rgba(0, 0, 0, 0.05);
        box-shadow: 0 1px 0 rgba(0, 0, 0, 0.05);
        border-radius: 1px;
    }
   
    @media only screen and (max-width: 600px) {
        .avatar{
            margin-top: 20px;
            padding-left: 10px;
            height: 60px;   
        }
        .media-body{
            /* padding: 20px 0px 20px 0px; */
            font-size: 0.8rem;
        }
    } 
</style>
