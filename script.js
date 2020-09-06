  // let base_url = "http://localhost/wt2020/php/s3/student.php";
  let base_url = "controller.php";

  $("document").ready(function(){

       getItemList();
       document.querySelector("#menuItems").addEventListener("change" , getMenuById);
     
  });


  function getItemList(){
    let url = base_url + "?req=item_list";
    $.get(url,function(data,success) {

           for (const key in data) {     
               let opt = document.createElement("option");
               opt.textContent = key + ") " + data[key].name;
             
               opt.value = data[key].id; 
               document.querySelector('#menuItems').appendChild(opt);
            }
        
    });
  }

  function getMenuById(items) {   
    let code = items.target.value;
    let url = base_url + "?req=item_data&id="+code;
    $.get(url,function(data,success){
          
           let itemsData = data;
        
           
            document.querySelector("#shortname").value = itemsData.short_name;
            document.querySelector("#fullname").value = itemsData.name;
            document.querySelector("#description").value = itemsData.description;
            
            if(itemsData.price_small!=null){
               document.querySelector("#priceSmall").value = itemsData.price_small;
            }
            else{
               document.querySelector("#priceSmall").value = "Not Available";
            }
    
            if(itemsData.price_large!=null){
               document.querySelector("#priceLarge").value = itemsData.price_large; 
            }
            else{
               document.querySelector("#priceLarge").value = "Small Quantity Not Available";
            }
            
       
    });

}
 
