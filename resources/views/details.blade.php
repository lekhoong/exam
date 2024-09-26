<div>
   <a href="/home">home</a>
   <form action="{{ route('addToCart',$fruits->id) }}" method="POST">
      @csrf
         <label for="">fruit</label><br>
         <input type="text" readonly name=p_name value="{{ $fruits->p_name }}"><br>
         <label for="">mass(g)</label><br>
         <input type="number" name="mass" onchange="price_total()" value="{{ $fruits->p_mass }}"><br>
         <label for="">price(100g)</label><br>
         <input type="number" readonly name="price" value="{{ $fruits->p_price }}"><br>
         <label for="">total price</label><br>
         <p id="total_price"></p><br>
         <button type="submit">add to cart</button>
   </form>
 
</div>
<script>
   function price_total()
   {
      var mass = document.querySelector('input[name="mass"]').value;
      var price = document.querySelector('input[name="price"]').value;
      var totalprice = mass/100 * price;

      document.querySelector("#total_price").innerHTML=totalprice;
   } 
</script>
