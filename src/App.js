import { useEffect, useState } from "react";
import axios from "axios";
import './App.css';

function App() {
  const [items, setItems] = useState([]);
  const [pageno, setPageno] = useState(1);
  const [searchvalue, setSearchvalue] = useState(0);

  useEffect(() => {
 
  axios.get('http://localhost:8000/api/books?type=2&term='+searchvalue+'&page='+pageno)
  .then(function (response) {
    setItems(response.data.data);
    console.log(response);
  })
  .catch(function (error) {
    console.log(error);
  });

 
  },[pageno, searchvalue]);



  const inc=()=>{
    setPageno(pageno+1);
  }
  const dec=()=>{
    if(pageno>1)
    setPageno(pageno-1);
  }

  
  function handleChange(event) {
    setSearchvalue(event.target.value)
    console.log(event.target.value);
  }

  return (
     <>
     <input name="firstName" onChange={handleChange} />
       {items.map((item, index) => {
          return (
            <div key={index}>
             <h3>{item.bookname}</h3>
            </div>
          );
        })}
        <div className="button-btm">
        
      <button onClick={dec}>Previous</button>
      {pageno}
      <button onClick={inc} >Next</button>

        </div>

     </>
  );
}

export default App;