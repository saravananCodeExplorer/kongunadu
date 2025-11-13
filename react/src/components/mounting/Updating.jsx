import React, { useState, useEffect } from "react";
import styles from './stylemodule/style.module.css'
function Updating() {
  const [count, setCount] = useState(0);

  useEffect(() => {
    console.log("Component Updated! Count changed to:", count);
  }, [count]); // Runs whenever 'count' updates

  return (
    <div>
      <h2>Count: {count}</h2>
      <button className={styles.button} onClick={() => setCount(count + 1)}>Increase</button>
    </div>
  );
}

export default Updating;
