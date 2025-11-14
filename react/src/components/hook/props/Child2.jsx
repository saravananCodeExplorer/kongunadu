// src/ChildComponent.js
import React from 'react';

function ChildComponent2({ items }) {
  return (
    <div>
      <h2>Child Component</h2>
      <ul>
    


        {
          items.map(item=>(
            <li key={item.id}>
              <h1>{item.id}</h1>
              <h2>{item.name}</h2>
              <h3>{item.description}</h3>

            </li>

          ))
        }
     
      </ul>
    </div>
  );
}
export default ChildComponent2;
