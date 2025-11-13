// src/props/Child.js
import React from 'react';

function ChildComponent({Data}) {
  const str = {
    backgroundColor:"green",
    color :"white",
    fontSize:'32px'

  }
  return (
    <div>
      <h2>Child Component</h2>
      <p style={str}>{Data}</p>

      {/* <ul>
        {
          user.map(item=>(
            <li key={item.id}>{item.id}
              <h2>{item.name}</h2>
              <h3>{item.description}</h3>
            </li>
            
        
          ))
        }
      </ul> */}

     
    </div>
  );
}

export default ChildComponent;
