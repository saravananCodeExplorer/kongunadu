// fetching data from api

import React from 'react';
import { useState,useEffect } from 'react';

const EffectHook = () => {

  const [data, setData] = useState(null); 

    useEffect(() => {
      const fetchData = async () => {
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


    </div>
  )
}

export default EffectHook