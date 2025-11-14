
import React from 'react'
import { useReducer } from 'react'

const UseReduce = () => {

    const  initialSate = {count:0};
    const  reduceFunction=(state,action)=>{
        switch(action.type){
            case "INCREMENT":
                return {count:state.count +1}
            case "DECREMENT":
                return {count:state.count -1}
            case "RESET":
                return {count:state.count = 0}
            default:
                return state;
        }
    }
const [state,dispatch]=useReducer(reduceFunction,initialSate);
  return (

    <div>
        <h1>useReducer</h1>
         <h2>useReducer hook is used for state management, especially when you have complex state logic that involves multiple sub-values or state transitions based on actions. It's an alternative to useState.</h2>
         <p>const [state, dispatch] = useReducer(reducer, initialState);
         </p>
         <li>
         reducer: A function that takes the current state and an action, and returns the new state.
         </li>
         <li>
initialState: The initial value of your state.
</li>
<li>
state: The current state value.
</li>
<li>
dispatch: A function to send actions to the reducer.
</li>
        
         <hr></hr>
        <p>Count:{state.count}</p>
        <button onClick={()=>dispatch({type:"INCREMENT"})}>ADD</button>
        <button onClick={()=>dispatch({type:"DECREMENT"})}>SUB</button>
        <button onClick={()=>dispatch({type:"RESET"})}>RESET</button>

       
    </div>
  )
}

export default UseReduce