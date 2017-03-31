<div class="container filter-form" >

     <div class="sort">
            <h5>Filters</h5>
            <form action="tasks/" class="form-group row">
            <div class="col-lg-5 col-md-6 col-md-6"> 
                <label for="name" >Name:</label>
                <input type="text" name="username" class="name">
            <div class="col-lg-6 col-md-6 col-md-6"> 
            </div>    
                <label for="email" >Email:</label>
                <input type="text" name="useremail" class="email">
            </div>
            <div class="col-lg-5 col-md-6"> 
            <label for="status">Status:</label>
            <select name="status" id="status" class="status">
                    <option value="1">Completed</option>
                    <option value="0">Not completed</option>
            </select>
            </div>
            <div class="col-lg-6 col-md-6">
            <button class="btn btn-primary" type="submit">Filter</button>
            <a href="/tasks" class="btn btn-primary">Reset</a>
            </div>
            </form>


    </div>
</div> 