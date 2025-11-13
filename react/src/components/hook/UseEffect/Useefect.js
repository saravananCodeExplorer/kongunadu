// import React from 'react';
// import { useEffect ,useState} from 'react';


// // step 1, 2,3
// const Useefect = () => {
//   const [count,setCount] = useState(0);

//   const [changevalue,setChangevalue] = useState(100);

//  useEffect(()=>{
//   console.log("render")
//  },[])
//  function clickedMe (){
//   setCount(count+10);
// }

//   function clickMe(){
//     setCount(count-10)
//   }
 


//   // step1 without dependencies
//   // useEffect(()=>{
//   //   document.title=`${changevalue} new Title`;
//   // })

//   // // step2 with dependencies
//   // useEffect(()=>{

//   //   document.title=`${changevalue} new Title`;
//   // },[])

//   // step3 with using variable in dependencies
//   useEffect(()=>{
//     document.title=`${changevalue} new Title`;
//   },[changevalue])




//   return (
//     <div>
//       <h2>The value is:{count}</h2>
//       <button onClick={clickedMe}>ADD</button>
//       <button onClick={clickMe}>SUB</button>
//       <hr></hr>

//        <h2>The value is:{changevalue}</h2>
//       <button onClick={()=>setChangevalue(changevalue+100)}>Clicked</button>  

//     </div>
//   )
// }

// export default Useefect;

// fetching data from api

import React from 'react';
import { useState,useEffect } from 'react';

const Useefect = () => {

  const [data, setData] = useState(null); 

    useEffect(() => {
      const fetchData = async() => {
        try {
          const response = await fetch('https://fakestoreapi.com/products');
          const jsonData = await response.json(); // Await the .json() call
          setData(jsonData);
           // Set the fetched data
        } catch (err) {
          console.log(err);
        }
      };
  
      fetchData();//function declaretion  
      }, []);

  console.log(data,"after rendering data")
  return (
    <div>
      <h1>hai</h1>
      {
        data.map((item,index)=>(
          <ul>
            <li key={index}>
              <h1>{item.id}</h1>
              <h2>{item.title}</h2>

            </li>
          </ul>
        ))
      }


    </div>
  )
}

export default Useefect





































































// import React from 'react';
// import  { useEffect, useState } from 'react';

// const Useefect = () => {
//   const [data, setData] = useState(null); // Initialize data as null

//   useEffect(() => {
//     const fetchData = async () => {
//       try {
//         const response = await fetch('https://fakestoreapi.com/products/1');
//         const jsonData = await response.json(); // Await the .json() call
//         setData(jsonData);
//          // Set the fetched data
//          console.log(jsonData)
//       } catch (err) {
//         console.log(err);
//       }
//     };

//     fetchData(); 
//   }, []);

//   console.log(data, "datadatadata");

//   return (
//     <div>
//       <h2>The value</h2>
//     </div>
//   );
// };

// export default Useefect;
