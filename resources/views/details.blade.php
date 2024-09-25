<div>
   <label for="">fruit</label><br>
   <input type="text" readonly value="{{ $fruits->p_name }}"><br>
   <label for="">mass(g)</label><br>
   <input type="number" name="mass" onchange="price_total()" value="{{ $fruits->p_mass }}"><br>
   <label for="">price</label><br>
   <input type="number" readonly name="price" value="{{ $fruits->p_price }}"><br>
   <label for="">total_price</label><br>
   <input type="number" name="total_price">
</div>
<script>
   function price_total(){
      var mass = document.querySelector('input[name="mass"]').value;
      var price = document.querySelector('input[name="price"]').value;
      var totalprice = mass/100 * price;

      document.querySelector('input[name="total_price"]').value=totalprice;
      
   } 
</script>
