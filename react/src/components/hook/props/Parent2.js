// src/ParentComponent.js
import React from 'react';
import ChildComponent2 from './Child2.js';
import ChildComponent from './Child.js';

function ParentComponent2() {
  // Array of objects to be passed as props
  const str = {
    backgroundColor:"yellow",
    color :"white",
    fontSize:'32px'

  }

  const person = [
    { id: 1, 
      name: 'Saro',
      description: 'Software Trainer'
     },
    { id: 2,
       name: 'Kadal',
        description: 'Software Developer' },
    { id: 3, 
      name: 'Rajsh',
       description: 'DevAps Developer' },
  ];

  return (
    <div>
      
        <div style={str}>
        {
          person.map(item => (
            <ul key={item.id}>
              <li> {item.id}</li>
              <li>{item.name}</li>
              <li>{item.description}</li>
            </ul>
          ))
        }
      </div>
      <ChildComponent2 items={person} />
      <ChildComponent user={person}/> 
    </div>
  );
}

export default ParentComponent2;
