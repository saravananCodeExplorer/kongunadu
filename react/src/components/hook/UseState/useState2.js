import React, { useState } from 'react';

function NameChanger() {
  const [name, setName] = useState("Sara");
  const [color, setColor] = useState("black");

  const handleBlueClick = () => {
    setName("Saravanan");
    setColor("blue");
  };

  const handleRedClick = () => setColor("red");
  const handleYellowClick = () => setColor("yellow");
  const handleBlackClick = () => setColor("black");
  const handleWhiteClick = () => setColor("white");

  return (
    <div>
      <h1 style={{ color: color }}>{name}</h1>
      <button onClick={handleBlueClick}>Change Name to Saravanan & Blue</button>
      <button onClick={handleRedClick}>Red</button>
      <button onClick={handleYellowClick}>Yellow</button>
      <button onClick={handleBlackClick}>Black</button>
      <button onClick={handleWhiteClick}>White</button>
    </div>
  );
}

export default NameChanger;