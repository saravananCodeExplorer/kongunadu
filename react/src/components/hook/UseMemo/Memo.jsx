import React ,{useState,useMemo} from 'react'

function Memo() {
    const [count,setCount] =useState(0);
    const [number,setNumber] = useState(1);
  


    function handleClick(){
        setCount(count+1)
    }
            
    const factorialOf = (n)=>{
        console.log("Inside of factorialOf method")
        let result =1
        if(n<=1){
            return result;
        }
        else{

            for(let i=n;i>=1;i--){
                
                result =result*i;    //result*=i

            }
            return result;
        }
    }
    // before using useMemo hook

    // const factorial = factorialOf(number);
   
       // after using useMemo hook

// const factorial = useMemo(()=>factorialOf(number),[number])
const factorial = useMemo(()=>
    factorialOf(number)
,[number])

  return (
    <div>
        <h1>1.useMemo</h1>
         <p>The count value is {count}</p><br></br>
         <button onClick={handleClick}>ClickMe!</button>
         <hr></hr>

        <p>Find the factorial of the given number</p>
        <input type='text' placeholder='Enter a Number'  onChange={(e)=>setNumber(e.target.value)}/><br></br><br></br>
         <span>Factorial of given number is :{factorial}</span>
    </div>
  )
}


export default Memo;