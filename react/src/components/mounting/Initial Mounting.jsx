import React, { useEffect } from "react";

function MountingExample() {
  useEffect(() => {
    console.log("Component Mounted!"); // Runs only once
  }, []);

  return <h2>Mounting Phase Example</h2>;
}

export default MountingExample;
