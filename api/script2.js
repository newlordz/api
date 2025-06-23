var cart_n=document.querySelector('#cart_n')

function saveCart(name,price,url,warehouse) {
  var products=[]

  var item={
      name:name,
      price:price,
      quantity:1,
      subTotal:price,
      url:url,
      warehouse:warehouse
  }    
  
  products= JSON.parse(localStorage.getItem("shoppingCart"));
  
  if (products==null){
    console.log(item)
    products=[]
      products.push(item);
      localStorage.setItem("shoppingCart",JSON.stringify(products));
  } else {
    products=[]
    let Added=false
    products= JSON.parse(localStorage.getItem("shoppingCart"));
      for (let index = 0; index < products.length; index++) {
       if(item.name==products[index].name&&item.price==products[index].price&&item.url==products[index].url&&item.warehouse==products[index].warehouse){
        products[index].quantity+=1
        products[index].subTotal=products[index].price*products[index].quantity
        Added=true
       }
    }
    if(!Added){
      products.push(item);
      }
      localStorage.setItem("shoppingCart", JSON.stringify(products));
  }
  products=JSON.parse(localStorage.getItem("shoppingCart"));
  cart_n.innerHTML=`[${products.length}]`;
  animation()
} 

function animation(){
  const toast=swal.mixin({
      toast:true,
      position:'top-end',
      showConfirmButton:false,
      timer:1500
  });
  toast({
      type:'success',
      title: 'Added to shopping cart'
  });
}

function cartCount(){
  var products=[]
  if(products=JSON.parse(localStorage.getItem("shoppingCart"))){
  products=JSON.parse(localStorage.getItem("shoppingCart"));
      cart_n.innerHTML=`[${products.length}]`;
    }
  }




