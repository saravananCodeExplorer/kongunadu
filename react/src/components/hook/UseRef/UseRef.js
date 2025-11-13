import React from 'react'
import { useRef } from 'react';
import { useEffect } from 'react';

const StyledComponent = () => {
    const colorParagraph = useRef(null) //colorParagrah = {current :null}

    const colors = ['red', 'green', 'blue', 'white', 'yellow'];

    useEffect(()=>{
        console.log(colorParagraph)
        console.log(colorParagraph.current)
    })
    const stylePara = ()=>{
        const randColor =Math.floor(Math.random()*colors.length);
        colorParagraph.current.style.backgroundColor = colors[randColor];
        console.log(colors[randColor])
       
    }
  return (
    <div>
         <h2>UseRef</h2>
         <button onClick={stylePara}>ClickedMe!</button>
         <p ref={colorParagraph}>welcome to useRef in our react hooks</p> 
         {/* colorParagrah = {current:p} */}
    </div>
  )
}

export default StyledComponent;