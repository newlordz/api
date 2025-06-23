//global
var products=JSON.parse(localStorage.getItem('shoppingCart'));
var cart_n = document.getElementById('cart_n');
var table = document.getElementById("table");
var total=0; 

//html
function tableHTML(i){
    return`
    <tr>
        <td><i class="far fa-times-circle" onclick="remove(${i})"></i></td>
        <td><img src="${products[i].url}" alt="" srcset=""></td>
        <td>${products[i].name}</td>
        <td>₵${products[i].price}</td>
        <td><input type="number" id="${i}" onchange="changeQuantity(this)" value="${products[i].quantity}"></td>
        <td id="subTotal${i}">₵${products[i].subTotal}</td>
    </tr>
    `; 
}
function changeQuantity(param){
    newQuantity=param.value

    for (let index = 0; index < products.length; index++) {
        if(index==param.id){
            products[index].quantity=newQuantity
            products[index].subTotal=products[index].price*newQuantity
            localStorage.clear();
            localStorage.setItem("shoppingCart",JSON.stringify(products));
        }
    } 

    table.innerHTML=`
    <tr>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    </tr>
    `;
    render()
}

function remove(l){
    total=0
    var temp=[]
    for (let index = 0; index < products.length; index++) {
        if(index==l){
            continue
        }
        console.log(products.length)
        temp.push(products[index])
    }
    products=[]
       
    for (let index = 0; index < temp.length; index++) {
        products.push(temp[index])
    }
    localStorage.clear();
    localStorage.setItem("shoppingCart",JSON.stringify(products));
    temp=[]
    table.innerHTML=`
    <tr>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    </tr>
    `;
     render()
 }

//buy 

function buy() {
    document.querySelector("#cart_num").value=JSON.stringify(products);
    // swal({
    //     position:'center',
    //     type:'success',
    //     title:'Purchase made successfully!',
    //     text:`Your purchase order is: ${4}`,
    //     showConfirmButton:true,
    //     timer:50000
    // });
    // clean();
}
//clean
function clean(){
    localStorage.clear();
    for (let index = 0; index < products.length; index++) {
       table.innerHTML+=tableHTML(index);
       total=total+parseInt(products[index].price);        
    }
    total=0;
    table.innerHTML=`
    <tr>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    <th></th>
    </tr>
    `;
    cart_n.innerHTML='';
    document.getElementById('Subtotal').innerHTML="₵Gh₵ 0.00"
    document.getElementById('total').innerHTML="Gh₵ 0.00"
 
    
}

//render
function render(){
    if( document.getElementById('Subtotal')){
 for (let index = 0; index < products.length; index++) {
     table.innerHTML+=tableHTML(index);
     total=total+parseInt(products[index].subTotal); 
 }
 table.innerHTML+= `<tr> <td><i class="far fa-times-circle" onclick="clean()"></i>clear</td></tr>`
 document.getElementById('Subtotal').innerHTML="₵"+total
 document.getElementById('total').innerHTML="₵"+total
 
 products=JSON.parse(localStorage.getItem("shoppingCart"));
 cart_n.innerHTML=`[${products.length}]`;}

 if(document.querySelector("#cart_total")){
     for (let index = 0; index < products.length; index++) {
         total=total+parseInt(products[index].subTotal); 
     }
 document.querySelector("#cart_total").value="Total amount: Gh₵"+total;
 document.querySelector("#cart_num").value=`Number of items: ${products.length}`;
 }
}