
<x-header_navless/>


<div>

    <form method="POST" action="{{url('/')}}/admin">
        @csrf
        <h4 class="text-center m-5 bg-secondary text-light shadow">Admin Login Panel</h4>
        <div>
            <div class="row justify-content-md-center">
                


                <div class="col-lg-5 shadow rounded p-5 m-5 ">
                    <div class="m-3">
                        <label class="form-label">Admin Name</label>
                        <input name="admin_name" required type="text" class="form-control shadow-none " >

                    </div>
                    <div class="m-3">
                        <label class="form-label">Password</label>
                        <input name="admin_pass" required type="password" class="form-control shadow-none" >

                    </div>

                    <button name="login" type="submit" class="btn btn-outline-dark shadow-none me-lg-2 m-3" >
                        Login
                    </button>



                </div>
            </div>

        </div>


    </form>
</div>

		

<x-footer_textless/>