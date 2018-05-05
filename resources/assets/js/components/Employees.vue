<template>
    <div class="container">

        <div class="form-row align-items-center justify-content-center">
            <div class="col-md-6">
                <label>Name</label>
                <input v-model="search" id="inputKeyword" name="inputKeyword" type="text" class="form-control mb-2 form-control-lg">
            </div>
            <div class="col-md-4">
                <label>Department</label>
                <select v-model="selectedDepartment" id="inputfilter" name="inputfilter" class="form-control mb-2 form-control-lg select-department">       
                    <option v-for="department in departments" v-bind:key="department.name">
                        {{ department.name }}
                    </option>
                </select>
            </div>
        </div>

        <div class="row justify-content-center">
            <div class="col-md-10">
                <div v-if="filteredList">
                    <ul class="list-unstyled">
                        <employee v-for="employee in filteredList" :employee="employee" :key="employee.id"></employee>         
                    </ul>
                </div>
                <div v-else class="alert alert-light">
                    No results found.
                </div>  
            </div>
        </div>
    </div>
</template>

<script>
    export default {
        data () {
            return {
                search: '',
                selectedDepartment: '',
                employees: [],
                meta: null,
                departments: [],
            }
        },
        computed: {
            filteredList() {

                let filtered = this.employees;
                let filteredEmployeesByDepartment = "";

                if(this.search && this.selectedDepartment != ""){

                    // Filtered the employees by department
                    filteredEmployeesByDepartment = this.employees.filter(employees => {
                        return employees.department.toLowerCase().includes(this.selectedDepartment.toLowerCase())
                    });

                    // Then filter the filtered employees (By department) by the search input
                    filtered = filteredEmployeesByDepartment.filter(employees => {
                        return employees.name.toLowerCase().includes(this.search.toLowerCase())
                    });

                }else if (this.selectedDepartment != "") {
                    // Return all users filtered based on department option
                    filtered = this.employees.filter(employees => {
                        return employees.department.toLowerCase().includes(this.selectedDepartment.toLowerCase())
                    });
                }else{

                    // Return all users filtered based on search input
                    filtered = this.employees.filter(employees => {
                        return employees.name.toLowerCase().includes(this.search.toLowerCase())
                    });

                }
                if(filtered.length > 0){
                    return filtered;     
                }else{
                   return false; 
                }
                          
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
