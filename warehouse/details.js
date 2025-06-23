//global


function showDetail(products,title,receipt){
    console.log(products)
    document.querySelector(".showDetails").style.display="block";
    document.querySelector(".cover").style.display="block";  
    var table = document.getElementById("table");
    document.getElementById("title").innerHTML=title;
    document.getElementById("receipt").src="../pay/"+receipt;
    var total=0; 
    
//html
function tableHTML(i){
    return`
    <tr>
        <td><img src="../${products[i].url}" width="50px" height="50px" alt="" srcset=""></td>
        <td>${products[i].name}</td>
        <td>₵${products[i].price}</td>
        <td>${products[i].quantity}</td>
        <td id="subTotal${i}">₵${products[i].subTotal}</td>
    </tr>
    `; 
}

//render
function render(){
 for (let index = 0; index < products.length; index++) {
     table.innerHTML+=tableHTML(index);
     total=total+parseInt(products[index].subTotal); 
 }
 
}
render()

}
function hideDetails(){
    document.querySelector(".showDetails").style.display="none";
    document.querySelector(".cover").style.display="none"; 
    table.innerHTML=`
    <thead>
    <tr>                
      <td>Image</td>
      <td>Product</td>
      <td>Price</td>
      <td>Quantity</td>
      <td>SubTotal</td>
    </tr> 
    </thead><br>
    `
  }