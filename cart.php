<?php
  include_once 'header.php';
?>

  <!-- Cart Items -->
  <div class="container-md cart">
    <table>
      <tr>
        <th>Product</th>
        <th>Quantity</th>
        <th>Subtotal</th>
      </tr>
      <tr>
        <td>
          <div class="cart-info">
            <img src="./images/pic1.jpg" alt="">
            <div>
              <p>Boy’s T-Shirt</p>
              <span>Price: $50.00</span>
              <br />
              <a href="#">remove</a>
            </div>
          </div>
        </td>
        <td><input type="number" value="1" min="1"></td>
        <td>$50.00</td>
      </tr>
      <tr>
        <td>
          <div class="cart-info">
            <img src="./images/pic2.jpg" alt="">
            <div>
              <p>Boy’s T-Shirt</p>
              <span>Price: $90.00</span>
              <br />
              <a href="#">remove</a>
            </div>
          </div>
        </td>
        <td><input type="number" value="1" min="1"></td>
        <td>$90.00</td>
      </tr>
      <tr>
        <td>
          <div class="cart-info">
            <img src="./images/pic3.jpg" alt="">
            <div>
              <p>Boy’s T-Shirt</p>
              <span>Price: $60.00</span>
              <br />
              <a href="#">remove</a>
            </div>
          </div>
        </td>
        <td><input type="number" value="1" min="1"></td>
        <td>$60.00</td>
      </tr>
      <tr>
        <td>
          <div class="cart-info">
            <img src="./images/pic4.jpg" alt="">
            <div>
              <p>Boy’s T-Shirt</p>
              <span>Price: $60.00</span>
              <br />
              <a href="#">remove</a>
            </div>
          </div>
        </td>
        <td><input type="number" value="1" min="1"></td>
        <td>$60.00</td>
      </tr>
      <tr>
        <td>
          <div class="cart-info">
            <img src="./images/pic5.jpg" alt="">
            <div>
              <p>Boy’s T-Shirt</p>
              <span>Price: $60.00</span>
              <br />
              <a href="#">remove</a>
            </div>
          </div>
        </td>
        <td><input type="number" value="1" min="1"></td>
        <td>$60.00</td>
      </tr>
    </table>

    <div class="total-price">
      <table>
        <tr>
          <td>Subtotal</td>
          <td>$200</td>
        </tr>
        <tr>
          <td>Tax</td>
          <td>$50</td>
        </tr>
        <tr>
          <td>Total</td>
          <td>$250</td>
        </tr>
      </table>
      <a href="#" class="checkout btn">Proceed To Checkout</a>

    </div>

  </div>

  <!-- GSAP -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.5.1/gsap.min.js"></script>
  <!-- Custom Script -->
  <script src="./js/index.js"></script>
</body>

</html>