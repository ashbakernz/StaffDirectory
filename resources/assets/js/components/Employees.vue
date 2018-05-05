<template>
    <div class="container">
        <div class="form-row align-items-center justify-content-center mx-2">

            <div class="col-md-6">
                <label>Name</label>
                <input v-model="search" id="inputKeyword" name="inputKeyword" type="text" class="form-control mb-2 form-control-lg">
            </div>
            
            <div class="col-md-6">
                <label>Department</label>
                <select v-model="selectedDepartment" id="inputfilter" name="inputfilter" class="form-control mb-2 form-control-lg select-department">
                    <option value="Any" selected>Any</option>   
                    <option v-for="department in departments" v-bind:key="department.name">
                        {{ department.name }}
                    </option>
                </select>
            </div>

        </div>

        <div class="row" v-if="filteredList.length > 0">
            <employee v-for="employee in filteredList" :employee="employee" :key="employee.id"></employee>         
        </div>

        <div class="row" v-else>
            <div class="col-lg-12">
                <div class="alert alert-light">
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
                selectedDepartment: 'Any',
                employees: [],
                departments: [],
            }
        },
        computed: {
            filteredList() {

                let filtered = this.employees;
                let filteredEmployeesByDepartment = "";

                if(this.search && this.selectedDepartment != "Any"){

                    // Filtered the employees by department
                    filteredEmployeesByDepartment = this.employees.filter(employees => {
                        return employees.department.toLowerCase().includes(this.selectedDepartment.toLowerCase())
                    });

                    // Then filter the filtered employees (by department) by the search input
                    filtered = filteredEmployeesByDepartment.filter(employees => {
                        return employees.name.toLowerCase().includes(this.search.toLowerCase())
                    });

                }else if (this.selectedDepartment != "Any") {

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
                
                return filtered;
                          
            }
        },
        methods: {
            // Get employees data
            getEmployees(page){
                axios('/employees').then((response) => {
                    this.employees = response.data.data
                })
            },
            // Get departments data
            getDepartments(){
                axios('/departments').then((response) => {
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
