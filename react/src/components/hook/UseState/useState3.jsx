import React, { useState } from 'react';

function List() {
  const [showList, setShowList] = useState(true); // state to toggle visibility

  const products = [
    { id: 1, name: 'Laptop', price: 999, inStock: true },
    { id: 2, name: 'Smartphone', price: 599, inStock: false },
    { id: 3, name: 'Headphones', price: 199, inStock: true },
    { id: 4, name: 'Keyboard', price: 49, inStock: true }
  ];

  return (
    <div>
      <h1>Product List</h1>
      <button onClick={() => setShowList(!showList)}>
        {showList ? 'Hide' : 'Show'} Products
      </button>

      {showList && (
        <ul>
          {products.map((item) => (
            <li key={item.id} style={{ margin: '10px 0' }}>
              <strong>ID:</strong> {item.id} <br />
              <strong>Name:</strong> {item.name} <br />
              <strong>Price:</strong> ${item.price} <br />
              <strong>Status:</strong> {item.inStock ? 'In Stock' : 'Out of Stock'}
            </li>
          ))}
        </ul>
      )}
    </div>
  );
}

export default List;