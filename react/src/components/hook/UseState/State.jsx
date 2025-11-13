// import './App.css';

function State() {
  let count = 0;

  function handleAdd(){
    count+=1;
    console.log(count);
  }


    function SUB(){
      console.log(count-=1)
    }
  return (
    <div className="State">
      <div className="box">
        <p>The count value is:{count}</p>
        <button onClick={handleAdd} className='add'>ADD</button>
        <button className='sub' onClick={SUB}>  SUB</button>
      </div>
    </div>
  );
}

export default State;