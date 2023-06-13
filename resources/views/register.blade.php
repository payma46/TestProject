<!DOCTYPE html>
<html>
<head>
  <title>Register Form</title>
  @include('common.css')
</head>
<body>
  
  <!-- contact section -->

  <section class="contact_section layout_padding">
    <div class="container-fluid">
      <div class="row">
        <div class="col-md-12 col-lg-12 offset-md-1 offset-lg-2">
          <div class="form_container">
            <div class="heading_container">
              <h2 style="text-align:center">
                Registration Form
              </h2>
            </div>
            <form action="/register_new_user" method="POST">
              @csrf
              <p sytle="text-align: center"><b>Note:</b>{{$registration_txt}}</p>
              <div>
                <label for="full_name">Full Name:<span class="text-danger">*</span></label>
                <input type="text" id="full_name" name="full_name" required>
              </div>
              <div>
                <label for="contact_no">Contact No:</label>
                <input type="contact_no" id="contact_no" name="contact_no" required/>
              </div>
              <div>
                <label for="username">Username:</label>
                <input type="username" id="username" name="username" required/>
              </div>
              <div>
                <label for="password">password:</label>
                <input type="password" id="password" name="password" required/>
              </div>
       <div>     
      <form method="POST" action="/create_role">
      <div class="dropdown">
      <label for="role">Select role:</label>
      <select name="role" id="role">
      <option value=" ">select a role:</option>
      @foreach ($role_data as $data)
      <option value="{{$data->id}}">{{$data->name}}</option>
      @endforeach
  </select>
    <button type="submit">Register</button>
            </form>
</div>
          </div>
        </div>
      </div>
    </div>
  </section>
  
  </div>
</body>
</html>
