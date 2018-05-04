<template>
    <div class="container">

        <div class="form-row align-items-center justify-content-center">
            <div class="col-md-6">
                <label>Name</label>
                <input v-model="search" id="inputKeyword" name="inputKeyword" type="text" class="form-control mb-2 form-control-lg">
            </div>
            <div class="col-md-4">
                <label>Department</label>
                <select v-model="selectedDepartment" id="inputfilter" name="inputfilter" class="form-control mb-2 form-control-lg">       
                    <option v-for="department in departments" v-bind:key="department.name">
                        {{ department.name }}
                    </option>
                </select>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-10">
                
                <employee v-for="employee in filteredList" :employee="employee" :key="employee.id"></employee>

            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                search: '',
                employees: [],
                meta: null,
                selectedDepartment: '',
                departments: [],
            }
        },
        computed: {
            filteredList() {
            
                if(this.selectedDepartment == this.employees.department) {
                    return this.employees.filter(employees => {
                        return employees.bio_description.toLowerCase().includes(this.selectedDepartment.toLowerCase())
                    })
                }
                
                return this.employees.filter(employees => {
                    return employees.first_name.toLowerCase().includes(this.search.toLowerCase())
                }) 
            }
        },
        methods: {
            getEmployees(page){
                axios('/employees').then((response) => {
                    this.employees = response.data.data
                    this.meta = response.data.meta
                })
            },
            getDepartments(){
                axios('/departments').then((response) => {
                    // console.log(response.data)
                    this.departments = response.data
                })
            },
        },
        mounted() {
            this.getEmployees()
            this.getDepartments()
        }
        
    }
</script>
