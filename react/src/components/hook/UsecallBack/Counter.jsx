import React,{useState,useMemo, useCallback} from 'react';
import Factorial from './Factorial';


const Counter = () => {
  const [number,setNumber] = useState(1);
     const [count,setCount] =useState(0);
     const [person,setPerson] = useState({ firstName: '',lastName:''})


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
                
                result =result*i;

            }
            return result;
        }
    }
    // const factorial = factorialOf(number);
    const factorial = useMemo(()=> factorialOf(number),[number])

    // const updateNumber = (e)=>{
    //   setNumber(e.target.value)
    // }
       //usecallback
      const updateNumber = useCallback((e)=>{
        setNumber(e.target.value);
      },[])
  return (
    <div id='counter'>
      <h1>1.useCallBack</h1>
         <p>The count value is {count}</p><br></br>
         <button onClick={handleClick}>ClickMe!</button>
         <hr></hr>
         <input type='text' placeholder='Enter First Name'
          onChange={(e)=>setPerson({...person,firstName:e.target.value})}/><br></br><br></br>


        <input type='text' placeholder='Enter Last Name'
          onChange={(e)=>setPerson({...person,lastName:e.target.value})}/><br></br><br></br>
          {JSON.stringify(person)}  
           <p>firstName value is :{person.firstName}</p>
          <p>lastName value is :{person.lastName}</p>

          

<hr></hr>
        <p>Find the factorial of the given number</p>
        <input type='text' placeholder='Enter a Number'  onChange={(e)=>setNumber(e.target.value)}/><br></br><br></br> 
          <span>Factorial of given number is :{factorial}</span>
<hr></hr>

         <Factorial factorial={factorial}  updateNumber ={updateNumber} />
    </div>
  )

}

export default Counter;