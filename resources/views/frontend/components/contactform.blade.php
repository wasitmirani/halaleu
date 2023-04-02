<div class="main-form">
    @if(session('message'))
    <h5 class="alert alert-success">{{session('message')}}</h5>
   @endif
    <form action="{{route('send.contact')}}" method="post">
    @csrf

      <div class="row">
        <div class="col-lg-6">
          <input type="text" name="name" placeholder="Full Name" required>
        </div>
        <div class="col-lg-6">
          <input type="text" name="position" placeholder="Position">
        </div>
        <div class="col-lg-6">
          <input type="email" name="email" placeholder="Email Address" required>
        </div>
        <div class="col-lg-6">
            <input type="text" name="phone" placeholder="Phone" required>
          </div>
        <div class="col-lg-6">
          <input type="text" name="company" placeholder="Company">
        </div>
        <div class="col-lg-6">
          <input type="text" name="site" placeholder="Website">
        </div>
        <div class="col-lg-6">
            <input type="text" name="fax" placeholder="Fax">
          </div>
          <div class="col-lg-6">
            <select name="business" class="form-control" id="business" required>
                <option value="Producer">Producer</option>
                <option value="Distributor">Distributor</option>
                <option value="Supplier">Supplier</option>
                <option value="Service provider ">Service provider </option>
                <option value="Restaurant">Restaurant</option>
                <option value="Catering">Catering</option>
                <option value="Take-away">Take-away</option>
                <option value="Others">Others</option>
            </select>
          </div>
        <div class="col-12">
          <textarea name="message" id="" cols="30" rows="5" placeholder="Message" required></textarea>
        </div>
        <div class="col-12">
          <button type="submit" class="full-btn theme-btn-11 ">Submit</button>
        </div>
      </div>
    </form>
  </div>
