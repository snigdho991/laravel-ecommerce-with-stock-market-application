
<!DOCTYPE html>
<html>

<body>

<table>
  <tr>
    <td>
      <label>Select Product:</label>
    </td>
    <td>
      <select id="product" onchange="pricechange()">        
      </select>
    </td>
    <p id="product_price"></p>
  </tr>
</table>

<button style='border-radius:5px;' type="submit" onclick="buyNow()">Buy Now</button>

<script>
  
    var options = {data:[
        {
          optext: "11oz",
          opvalue: "https://antonyuk.ml/checkout/?add-to-cart=1245",
          opprice: "$150 US",
        },
        {
          optext: "15oz",
          opvalue: "https://antonyuk.ml/checkout/?add-to-cart=1246",
          opprice: "$620 US",
        }
    ]}

    options.data.forEach(createOptions);

    function createOptions(key, value) {
        
        console.log(key)
        var x = document.createElement("OPTION");
          x.setAttribute("value", key.opvalue);
          x.setAttribute("data-price", key.opprice);
          var t = document.createTextNode(key.optext);
          x.appendChild(t);
          document.getElementById("product").appendChild(x);
        }; 

    // Set Default selected price
    var defaultOption = document.getElementById("product");
    var selectedOption = defaultOption.options[defaultOption.selectedIndex].getAttribute('data-price');
    document.getElementById("product_price").innerHTML = selectedOption;   
    

    // On change the option/product
    function pricechange() {
        var option = document.getElementById("product");
        var selected = option.options[option.selectedIndex].getAttribute('data-price');
        document.getElementById("product_price").innerHTML = selected;
    }
    
</script>

<script>
    function buyNow() {
      var url = document.getElementById("product");
      var redirectUrl = url.options[url.selectedIndex].value;

      location.href = redirectUrl;

    }
</script>
</body>

</html>
