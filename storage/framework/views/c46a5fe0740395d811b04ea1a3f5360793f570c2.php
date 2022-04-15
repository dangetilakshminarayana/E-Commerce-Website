
<?php $__env->startSection("content"); ?>
<div class="custom-product" style=background-image:url("images/bgimg.jpg");>
     <div class="col-sm-10">
     <label for="pwd" style="color:#00994C;background-color:yellow;padding-top:5px;padding-bottom:5px;padding-left:10px">Price Details</label> <br> <br>
        <table class="table" style=width:600px;color:white>
         
            <tbody>
              <tr>
                <td>Amount</td>
              <td>$ <?php echo e($total); ?></td>
              </tr>
              <tr>
                <td>Tax</td>
                <td>$ 0</td>
              </tr>
              <tr>
                <td>Delivery </td>
                <td>$ 10</td>
              </tr>
              <tr>
                <td style=color:red>Total Amount</td>
              <td>$ <?php echo e($total+10); ?></td>
              </tr>
            </tbody>
          </table>
          <div>
            <form action="/orderplace" method="POST" >
              <?php echo csrf_field(); ?>
                <div class="form-group">
                <label for="pwd" style="color:#00994C;background-color:yellow;padding-top:5px;padding-bottom:5px;padding-left:10px">Full Address</label> <br> <br>
                  <textarea name="address" placeholder="enter your address" class="form-control" style =height:80px;width:600px;></textarea>
                </div>
                <div class="form-group" style=color:white;>
                  <label for="pwd" style="color:#00994C;background-color:yellow;padding-top:5px;padding-bottom:5px;padding-left:10px">Payment Method</label> <br> <br>
                  <input type="radio" value="cash" name="payment"> <span>online payment</span> <br> <br>
                  <input type="radio" value="cash" name="payment"> <span>EMI payment</span> <br><br>
                  <input type="radio" value="cash" name="payment"> <span>Payment on Delivery</span> <br> <br>

                </div>
                <button type="submit" class="btn btn-default">Order Now</button>
              </form>
          </div>
     </div>
</div>
<?php $__env->stopSection(); ?> 
<?php echo $__env->make('master', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\xampp\htdocs\ecommerece-website\resources\views/ordernow.blade.php ENDPATH**/ ?>