//global
products=JSON.parse(localStorage.getItem('shoppingCart'));
var cartItems=[];
var table = document.getElementById("items");
var total=0; 

//html
function tableHTML(i){
    return`
     <tr class="item-row">
        <td class="item-name">${products[i].name}</td>
        <td class="description">${products[i].description}</td>
        <td class="qty">${products[i].quantity}</td>
        <td class="cost">${products[i].price}</td>
        <td class="price">${products[i].subTotal}</td>
    </tr>
    `; 
}


//render
function render(){
    document.getElementById('date').innerHTML+=(Date())
    total=0
 for (let index = 0; index < products.length; index++) {
     table.innerHTML+=tableHTML(index);
     console.log(products[index].subTotal)
     total=total+parseInt(products[index].subTotal); 
       
 }
 var subTotal = document.getElementById('subtotal');
 document.getElementById('due').innerHTML+=total+".00";
 document.getElementById('topdue').innerHTML+=total+".00";
 document.getElementById('total-value').innerHTML+=total+".00";
    products=JSON.parse(localStorage.getItem("cart"));
    subTotal.innerHTML+=total+".00";
    document.getElementById('total').innerHTML+=(total)+".00";
    localStorage.clear()
}