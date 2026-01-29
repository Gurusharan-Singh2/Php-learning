console.log("hiii");


// fetch("https://jsonplaceholder.typicode.com/posts", {
//   method: "POST",
//   headers: {
//     "Content-Type": "application/json"
//   },
//   body: JSON.stringify({
//     title: "Hello",
//     body: "This is dummy post",
//     userId: 1
//   })
// })
// .then(res => res.json())
// .then(data => console.log(data));



const fetchResult=async()=>{
  try {
      const result=await fetch('https://dummyjson.com/products');
      const newresult=await result.json();
      return newresult;
          
  } catch (error) {
    console.log(error);
    
  }
}
let result;
fetchResult().then(data => {
  console.log(data);
  
  
});


