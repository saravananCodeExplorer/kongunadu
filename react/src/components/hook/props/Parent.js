// src/props/Parent.js
import React from 'react';
import ChildComponent from './Child.js';

function ParentComponent() {
  const parentData = 'one way data binding';
  const str = {
    backgroundColor:"red",
    color :"white",
    fontSize:'32px'

  }
console.log(parentData)
  return (
    <div>
      <h1 style={str} >{parentData}</h1><hr></hr>
      
       <ChildComponent Data={parentData} /> 
    </div>
  );
}

export default ParentComponent;
