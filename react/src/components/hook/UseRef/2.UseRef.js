import React from 'react'
import { useRef } from 'react';
import { useEffect } from 'react';

const StyledComponent2 = () => {
  // step1
    const colorParagraph = useRef(null) //colorParagrah = {current :null}

    const colors = ['red', 'green', 'blue', 'white', 'yellow'];

    // step 2

    const selectedColor = useRef(null);  //selectedColor = {current : null}

    // step 3

    const selectedCustomColor ={current:null}  //user define custom variable 
  
    useEffect(()=>{
        console.log(colorParagraph)
        console.log(colorParagraph.current)
    },[])


   useEffect(()=>{
               console.log("statement Executed for selectedColor refhook changes")
    },[selectedColor.current])

    
    useEffect(()=>{
        console.log("statement executed for  custom selectdColor effecthook")
    },[selectedCustomColor.current])

    const stylePara2 = ()=>{
        const randColor =Math.floor(Math.random()*colors.length);
        colorParagraph.current.style.color = colors[randColor];

        selectedColor.current = colors[randColor]
        console.log("selectedColor",selectedColor)

        selectedCustomColor.current =colors[randColor]
        console.log("custom variable color selected",selectedCustomColor)

    }
  return (
    <div>
         <h2>UseRef</h2>
         <button onClick={stylePara2}>ClickedMe!</button>
         <p ref={colorParagraph}>welcome to useRef in our react hooks</p> 
         {/* colorParagrah = {current:p} */}
    </div>
  )
}

export default StyledComponent2;