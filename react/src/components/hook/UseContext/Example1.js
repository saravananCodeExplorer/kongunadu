import React ,{useState} from 'react';


export default function Example1() {
    const [name] =useState("user divil")
  return (
    <div>
    <h1>1.Example</h1>
    <h3>props drilling</h3>
    <Component1 data ={name}/>
    </div>
    
  )
}

function Component1({data}){
    return(
        <div>
            <h2>Component1</h2>
            <Component2 data ={data}/>
        </div>
    )
}

function Component2({data}){
    return(
        <div>
            <h2>Component2</h2>
            <Component3 data ={data}/>
        </div>
    )
}

function Component3({data}){
    return(
        <div>
            <h2>Component3</h2>
            <Component4 data ={data}/>
        </div>
    )
}


function Component4({data}){
    return(
        <div>
            <h2>Component4</h2>
            <Component5 data ={data}/>
        </div>
    )
}


function Component5({data}){
    return(
        <div>
            <h2>Component5</h2>
            <h1>{`user name is ${data}`}</h1>
            
        </div>
    )
}



