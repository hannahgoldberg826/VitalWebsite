function addToCart(id)
{
      
  let hid="item"+id;
  let value=document.getElementById(hid).value;
  let iteminfo=value.split("|");
  addtoStorage(iteminfo);
  alert(iteminfo[1] + " has been added to your cart");
  console.log(iteminfo);
}


function displayCartItems()
{
  let output="";
  let cartStr=localStorage.getItem("cart");
  if(cartStr==null) 
    return output;
  let cart=JSON.parse(cartStr);
  for(let item in cart)
  {
    let imgN=cart[item][3];
    let pN=cart[item][1];
    let price=cart[item][2];
    let quan=cart[item][4];
    output+= `<div class="row ">`;
    output+= `<div class ="col-sm-2"><img src="./images/${imgN}"width="200" height="200"></div>`;
    output+= `<div class ="col-sm-2">${pN}</div>`;
    output+= `<div class ="col-sm-2">$${price}</div>`;
    output+= `<div class ="col-sm-2">${quan}</div>`;
    output+=`</div>`;
  }
  return output;
}

/*
This function is called during the execution of the function addtocart() as seen above.
It takes an array of information aboutput the cart item and adds it to local storage.
*/

    
function addtoStorage(iteminfo)
{
  //create array and get item identitfier
  var cart={};
  var pid=iteminfo[0];

  //if not empty, get previous items that are already in the cart
  if((localStorage.getItem("cart")!=null))
    {
     cart=JSON.parse(localStorage.getItem("cart"));
    }

  //if there is an item to add, then increase the amount of a type of pizza that is already in the cart
  if(cart[pid]!=null)
     cart[pid][4]+=1;
  else
  {
    //if item not previously selected, set amount to one and set cart to contain pizza information
    iteminfo[4]=1;
    cart[pid]=iteminfo;   
  }

  //Set the local cache to include the new additions
  localStorage.setItem("cart",JSON.stringify(cart));
}

//function removes all items from local storage
function clearcartHTML()
{
  //clear all items in the cache
  localStorage.clear();

  //refresh the cart.html page
  document.getElementById("info").innerHTML="";
}




/*
Function retrieves the necessary information to create the SQL statements for the Orders table in the database
*/
function getOrdersForSever()
{
  //create place to store outputput and get items from local storage
  var order = {};
  var cartStr = localStorage.getItem("cart");

  //if not empty, get all items
  if(cartStr!=null)
  {
    //break item into an array
    var cart = JSON.parse(cartStr);
    for(item in cart)
    {
      var pid = cart[item][0]; //get pizza ID
      var quantity = cart[item][4]; //get quantity of item

      //place item in associate array with pizza id set with the quantity
      order[pid] = quantity;
    }

    //Send the order to be handled by checkoutputHandle.php
    document.getElementById("order").value = JSON.stringify(order);
  
        // Debugging: Log the order details to the console
        console.log("Order details:", order);

        return JSON.stringify(order); // return the JSON string
    }

    return " "; // return an empty string if there are no items
}

/*
delete local storage and inform the user that the order has been cancelled
*/
function cancel()
{
  alert("Your Order has been canceled and your cart has been cleared");
  clearcartHTML();
}

