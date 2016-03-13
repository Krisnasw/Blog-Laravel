@include('Admin.Includes.header')

		<div class="content">
            <div class="container-fluid">
                <div class="row">
                    <form class="" action="{{ route('admin.login')}}" method="post">
                        <label for="">UserName</label>
                        <input type="text" name="username" placeholder="username">
                        {{ ($errors->has('username')) ? $errors->first('username') : ''}}
                        <br>
                        <label for="">password</label>
                        <input type="password" name="password" placeholder="password">
                        {{ ($errors->has('password')) ? $errors->first('password') : ''}}

                        <button type="submit" name="Submit">Submit</button>
                        <input type="hidden" name="_token" value="{{Session::token()}}">
                    </form>
                </div>
            </div>
        </div>
