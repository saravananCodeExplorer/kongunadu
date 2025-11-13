import React, { useState, useEffect } from "react";

function Child() {
  useEffect(() => {
    console.log("Child Mounted!");

    return () => {
      console.log("Child Unmounted!"); // Cleanup when removed
    };
  }, []);

  return <h3>Child Component</h3>;
}

function Unmounting() {
  const [show, setShow] = useState(true);

  return (
    <div>
      <button onClick={() => setShow(!show)}>Toggle Child</button>
      {show && <Child />}
    </div>
  );
}

export default Unmounting;
