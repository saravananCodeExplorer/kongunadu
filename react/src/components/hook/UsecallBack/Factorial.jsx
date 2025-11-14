import React,{useEffect} from 'react';

const Factorial = (props) => {

    const {factorial,updateNumber} = props;
    // any changes in the props the component will be re-render
    useEffect(()=>{
        console.log("Components Re-Renders");
    })
  return (
    <div>
        <p>Find the factorial of the given number</p>
        <input type='text' placeholder='Enter a Number' onChange={updateNumber}/><br></br>
        <span>Factorial of the Given number is: {factorial}</span>

    </div>
  )
}

export default React.memo( Factorial);
// export default Factorial;