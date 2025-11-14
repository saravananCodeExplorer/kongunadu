import React ,{useState}from 'react'

const Demo = () => {
    const [show,setShow] = useState(true)
    const [login,setLogin] =useState(true)

      const products = [
    { id: 1, name: 'Laptop', price: 999, inStock: true },
    { id: 2, name: 'Smartphone', price: 599, inStock: false },
    { id: 3, name: 'Headphones', price: 199, inStock: true },
    { id: 4, name: 'Keyboard', price: 49, inStock: true }
  ];
  return (
    <div>
      <button onClick={()=>setLogin(!login)}>
        {login ? "logout ":"login"}
      </button>
      {login ? <h1>Welocme User</h1> :<h2>Please Login</h2>
      }

      <hr />
        <button onClick={(()=>setShow(!show))}>
            {show ? "hide" :"show"} Products
        </button> 
     <br />
        {show && products.map((item,index)=>{
            return (
            <ul>
                <li key={index}>Index:{index}</li>
                <li>ID:{item.id}</li>
                <li>Name{item.name}</li>
                <li>Price:{item.price}</li>
                <li>{item.inStock ? "In Stack" :"Out of Stack"}</li>
            </ul>
            )
           })
        }
{/* 
        {show && products.map((item) =>(
            <li key={item.id}>
                ID:{item.id} <br />
                Name:{item.name} <br />
            </li>
        ))} */}


    </div>
  )
}

export default Demo