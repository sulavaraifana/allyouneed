<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<style>
    body{
  font-family: 'Open Sans', sans-serif;
  background:#f1f2f3;
}
img{
  max-width:100%;
}
.mobile{
  display:none;
}
.button{
  display:block;
  background:#FFB5B5;
  text-decoration:none;
  color:#FFF;
  padding:5px;
  text-align:center;  
}
#wrap{
  width:90%;
  margin:0 auto;
}
.center{
  height:10%;
  position:absolute;
  top:0;bottom:0;left:0;right:0;
  margin:auto;
  text-align:center;
}
.cart_details{
  width:100%;
  float:left;
  border-top:2px solid #aaa;
  border-bottom:2px solid #aaa;
  margin-top:-20px;
  position:relative;
  min-height:270px;
  max-height:300px;
}
.item{
  width:30%;
  float:left;
}
.product_image img{
  max-height:200px;
}
.product_details{
  display:block;
  margin:0 auto;
  width:80%;
  margin-bottom:1em;
}
.product_details span{
  margin-right:10px;
}
.cart_details h3{
  border-bottom:2px solid #aaa;
  padding-left:10px;
}
.price{
  width:15%;
  float:left;
  margin-left:5%;
  position:relative;
  height:270px;
}
.qty{
  width:15%;
  float:left;
  margin-left:5%;
  position:relative;
  height:270px;
}
.qty input{
  width:40px;
  height:30px;
  border:1px solid #ccc;
  display:block;
  margin:0 auto;
  border-radius:4px;
}
.total{
  width:15%;
  float:left;
  margin-left:5%;
  position:relative;
  height:270px;
}
.remove{
  width:10%;
  float:left;
  text-align:center;
  position:relative;
  height:270px;
  color:crimson;
}
.remove h3{
  display:none;
}
.remove i{
  width:20px;
  height:20px;
  transition:all 0.5s ease;
}
.remove i:hover{
  font-size:30px;
}

.complete_cart{
  width:100%;
  float:left;
}
.update{
  width:50%;
  float:left;
  margin-right:5%;
}
.update .coupon{
  width:100%;
  float:left;
  border-bottom:1px solid #ccc;
}
.update .coupon h2{
  width:35%;
  float:left;
  font-size:18px;
}
.update .coupon input{
  width:28%;
  margin-left:2%;
  float:left;
  margin-top:10px;
  border:1px solid #ccc;
  border-radius:3px;
  height:30px;
}
.shipping{
  width:100%;
  float:left;
}
.update .coupon .button{
  width:28%;
  margin-left:2%;
  float:left;
  display:inline-block;
  margin-top:10px;
  border-radius:3px;
}
.shipping h3{
  font-size:18px;
}
.shipping .state{
  width: 50%;
  box-sizing:border-box;
  float: left;
  height: 35px;
  overflow: hidden;
  background: url('https://i.imgur.com/10e9Roz.png') no-repeat right #FFF;
  border: 1px solid #ccc;
  border-radius:3px;
  display:inline-block;
}
.shipping .state select{
  background: transparent;
  display:block;
  padding: 5px;
  box-sizing:border-box;
  line-height: 1;
  border: 0;
  border-radius:0;
  height: 35px;
  -webkit-appearance: none;
}
.shipping .zip{
  width:45%;
  float:left;
  margin-left:5%;
  border:1px solid #ccc;
  border-radius:3px;
  height:35px;
  box-sizing:border-box;
}
.shipping .est_btn{
  width:100%;
  float:left;
  margin-top:15px;
}
.shipping .button{
  display:block;
  width:50%;
  margin:0 auto;
}
.checkout{
  width:45%;
  float:left;
}
.subtotal h2{
  width:50%;
  float:left;
  margin-top:0px;
}
.subtotal .finalprice{
  width:40%;
  float:left;
  font-size:20px;
  margin-top:0px;
}
.subtotal .refresh{
  width:10%;
  float:left;
}
.subtotal .refresh i{
  margin-top:5px;
  -webkit-transition-duration: 1s;
  -moz-transition-duration: 1s;
  -o-transition-duration: 1s;
  transition-duration: 1s;
     
  -webkit-transition-property: -webkit-transform;
  -moz-transition-property: -moz-transform;
  -o-transition-property: -o-transform;
  transition-property: transform;
  overflow:hidden;
}
.subtotal .refresh:hover i{
 -webkit-transform:rotate(720deg);
 -moz-transform:rotate(7200deg);
 -o-transform:rotate(720deg);
 transform:rotate(720deg);
}
.complete{
  width:100%;
  float:left;
  font-size:30px;
  margin-top:20px;
}
@media (max-width:600px){
  .center{
  position:initial;
  margin:auto;
  text-align:center;
}
.cart_details{
  position:initial;
  min-height:100px;
  float:none;
  border-bottom:0;
}
.item{
  width:100%;
  float:left;
  max-height:200px;
  border-bottom:1px solid #ccc;
}
.item img{
  display:block;
  margin:0 auto;
  max-width:90%;
}
.product_details{
  width:60%;
  margin-bottom:1em;
}
.product_details span{
  margin-right:10px;
}
.cart_details h3{
  border-bottom:2px solid #aaa;
  padding-left:10px;
}
.price{
  width:30%;
  float:left;
  margin-left:0;
  position:initial;
  height:auto;
}
.qty{
  width:30%;
  float:left;
  margin-left:5%;
  position:initial;
  height:auto;
}
.total{
  width:30%;
  height:auto;
  margin-left:5%;
  position:initial;
}
.remove{
  margin-top:10px;
  border-top:1px solid #ccc;
  width:100%;
  height:auto;
  padding-top:5px;
  border-bottom:5px solid #ccc;
}
.remove h3{
  display:block;
  border:0;
  float:left;
  margin-top:0;
  color:#000;
}
.remove i{
  float:right;
  font-size:20px;
  margin-right:10%;
}
.complete_cart{
  width:100%;
  float:left;
}
.update{
  width:100%;
  float:none;
  display:none;
  margin-right:0%;
}
.mobile{
  display:block;
}
.update .coupon{
  width:100%;
  float:left;
  border-bottom:1px solid #ccc;
  padding-bottom:15px;
  padding-top:15px;
  border-top:1px solid #ccc;
  margin-top:20px;
}
.update .coupon h2{
  width:50%;
  float:left;
  font-size:18px;
}
.update .coupon input{
  width:48%;
  margin-left:1%;
  float:left;
  margin-top:10px;
  border:1px solid #ccc;
  border-radius:3px;
  height:30px;
}
.shipping{
  width:100%;
  float:left;
}
.update .coupon .button{
  width:100%;
  margin-left:0;
}
.checkout{
  width:100%;
  float:left;
}
.subtotal h2{
  width:50%;
}
.subtotal .finalprice{
  width:50%;
  float:right;
  text-align:right;
}
.subtotal .refresh{
  display:none;
}
.complete{
  width:100%;
  float:left;
  font-size:30px;
  margin-top:20px;
}
  
}
</style>
<body>
<link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">
<link href='https://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
<body>
  <div id="wrap">
  <div id="cart_layout_2">
    <h1>Shopping Cart</h1>
    <div class="cart_details">
      <div class="item">
        <h3>Item</h3>
        <div class="product_image">
          <img src="https://i.imgur.com/OOhreHb.jpg"/>
        </div>
        <div class="product_details">
          <span>Maxwell Frame</span><span>Black</span>
        </div>
      </div>
      <div class="price">
        <h3>Price</h3>
        <div class="center">
          <span>$99.95</span>
        </div>
      </div>
      <div class="qty">
        <h3>Qty</h3>
        <div class="center">
          <input for="qty">
          </input>
        </div>
      </div>
      <div class="total">
        <h3>Total</h3>
        <div class="center">
          <span>$99.95</span>
        </div>
      </div>
      <div class="remove">
        <div class="center">
        <h3>Remove:</h3><i class="fa fa-times-circle"></i>
        </div>
      </div>
      </div>
    </div>
    <div class="complete_cart">
      <div class="update">
        <div class="coupon">
          <h2>Coupon Code</h2>
          <input type="text"></input>
          <a class="button" href="#">Update Cart</a>
        </div>
        <div class="shipping">
          <h3>Estimate Shipping</h3>
          <div class="state">  
            <select id="state">
               <option value="1">Alabama</option>
               <option value="2">Alaska</option>
               <option value="3">Arizona</option>
               <option value="4">Etc.</option>
             </select>
          </div>
          <input class="zip"></input>
          <div class="est_btn">
            <a class="button" href="#">Estimate</a>
          </div>
        </div>
      </div>
      <div class="checkout">
        <div class="subtotal">
          <h2>Subtotal:</h2>
          <span class="finalprice">$99.95</span>
          <a class="refresh"><i class="fa fa-refresh"></i></a>
        </div>
        <div class="complete">
          <a class="button" href="#">Checkout</a>
        </div>
      </div>
  <div class="update mobile">
        <div class="coupon">
          <h2>Coupon Code</h2>
          <input type="text"></input>
          <a class="button" href="#">Update Cart</a>
        </div>
        <div class="shipping">
          <h3>Estimate Shipping</h3>
          <div class="state">  
            <select id="state">
               <option value="1">Alabama</option>
               <option value="2">Alaska</option>
               <option value="3">Arizona</option>
               <option value="4">Etc.</option>
             </select>
          </div>
          <input class="zip"></input>
          <div class="est_btn">
            <a class="button" href="#">Estimate</a>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</body>
</body>
</html>