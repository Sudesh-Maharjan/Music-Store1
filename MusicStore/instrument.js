var instrument = [
    {
    id:1,
    name:"Tabla",
    image: "pic/tabla1.jpg",
    price: "Rs 7500",
    addcart:"Add to cart",
    },
    {
        id:3,
        name:"Tabla",
        image: "pic/tabla1.jpg",
        price: "Rs 500",
        addcart:"Add to cart",
        },
        {
            id:3,
            name:"Digital tabla",
            image: "pic/tabla3.jpg",
            price: "Rs 7500",
            addcart:"Add to cart",
        },
            {
                id:4,
                name:"Digital tabla black",
                image: "pic/tabla4.jpg",
                price: "Rs 6500",
                addcart:"Add to cart",
                },
            {
                 id:5,
                name:"Guitar",
                image: "pic/guitar1.jpg",
                price: "Rs 10050",
                addcart:"Add to cart",
            },
            {
                id:6,
               name:"Guitar",
               image: "pic/guitar2.jpg",
               price: "Rs 11050",
               addcart:"Add to cart",
           },
           {
            id:7,
           name:"Guitar",
           image: "pic/guitar2.jpg",
           price: "Rs 8750",
           addcart:"Add to cart",
       },
       {
        id:8,
       name:"Guitar",
       image: "pic/guitar4.jpg",
       price: "Rs 7750",
       addcart:"Add to cart",
   },
   {
    id:8,
   name:"keyboard",
   image: "pic/keyboard1.jpg",
   price: "Rs 24550",
   addcart:"Add to cart",
},
{
    id:8,
   name:"keyboard",
   image: "pic/keyboard2.jpg",
   price: "Rs 15000",
   addcart:"Add to cart",
},
{
    id:8,
   name:"keyboard",
   image: "pic/keyboard3.jpg",
   price: "Rs 15000",
   addcart:"Add to cart",
},
{
    id:8,
   name:"keyboard",
   image: "pic/keyboard4.jpg",
   price: "Rs 10000",
   addcart:"Add to cart",
}
];



//iterate gareko menu lai items haru access garna
const sectionCenter = document.querySelector(".contains");
window.addEventListener('DOMContentLoaded', function(){
// console.log("shake and bake");
displayMenuItems(instrument);
});

function displayMenuItems(menuItems){
    let displayMenu = menuItems.map(function(item){

        return `<div class="contains">
     <img class= "t1" src=${item.image} alt="Tabla">
   <div class="detail-box">
       <div class="title-inst">
           <p>${item.name}</p>
        </div>
       <a href="#" class="price">Price: ${item.price}</a>
       <br><button href="#" class="add-too-cart" > ${item.addcart}</button>
   </div>

</div>`;
        });
        displayMenu = displayMenu.join("");
        sectionCenter.innerHTML = displayMenu;
}


// //filter button select gareko
// const filterbtn = document.querySelectorAll(".btn");

// //loop lako
// filterbtn.forEach(function(selectt){
// //evevntListener add gareko in click ko lagi
// selectt.addEventListener("click", function(e){
// //location target garera btn ko value lai select gareko ani variable ma raheko
// const category = e.currentTarget.dataset.id;
// //flter le menu ko items lai filter garera din xa on the applied condition
// const menucategory = menu.filter(function(menuItem){
// //tala ko condition ma meet vayo vane menuItem return hunxa
// if(menuItem.category === category ){
//     return menuItem;
// }
// });

// if(category == "All"){
//     displayMenuItems(menu);
// }else{
//     displayMenuItems(menucategory);
// }
// });
// });





