@extends('master');
@section('content');
    
<div class="custom-product">
    

  <div class="col-sm-10">
    <table class="table table-striped">
        <tbody>
          <tr>
            <th scope="row">1</th>
            <td>Amount</td>
            <td>$ {{ $total }}</td>
          </tr>
          <tr>
            <th scope="row">2</th>
            <td>Tax</td>
            <td>$ 0</td>
          </tr>
          <tr>
            <th scope="row">3</th>
            <td>Delivery</td>
            <td>$ 10</td>
          </tr>
          <tr>
            <th scope="row">4</th>
            <td>Total Amount</td>
            <td>$ {{ $total+10 }}</td>
          </tr>
        </tbody>
      </table>
      <div>
        <form action="/orderplace" method="POST">
            @csrf
            <div class="form-group">
              <textarea name="address" class="form-control" placeholder="Enter your address" ></textarea>
            </div>
            <div class="form-group">
              <label for="pwd">Payment Method:</label><br><br>
                <input type="radio" value="Cash" name="payment_method"><span>Online payment</span><br><br>
                <input type="radio" value="Cash" name="payment_method"><span>EMI payment</span><br><br>
                <input type="radio" value="Cash" name="payment_method"><span>Payment on Delivery</span><br><br>
            </div>
            <button type="submit" class="btn btn-primary">Order Now</button>
        </form>          
      </div>
   </div>
          
        
</div>
@endsection

