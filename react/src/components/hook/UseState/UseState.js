import React from 'react'
import { useState } from 'react';

const Compo = () => {
    const [data ,setData] =useState(0);
    const getData =()=>{
        setData(data+1)
    }

    const putData =()=>{
        setData(data-1)
    }

  return (
    <div>
        <p>The data value is :{data}</p>
        <button onClick={getData}>ClickAdd</button>
        <button onClick={putData}>ClickSub</button>
        <button onClick={()=>(setData(0))}>Reset</button>
    </div>
  )
}

export default Compo;