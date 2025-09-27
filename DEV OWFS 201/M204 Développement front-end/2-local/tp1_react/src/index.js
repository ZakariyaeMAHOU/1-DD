import React from 'react';
import ReactDOM from 'react-dom/client';
import './index.css';
import 'bootstrap/dist/css/bootstrap.min.css'
import Products from './tp4/Products';

const root = ReactDOM.createRoot(document.getElementById('root'));
const p1 = <p>Berkane</p>
const style1 = {
    listStyleType: "none",
    color: "red"
}
const style2 = {
    listStyleType: "square",
    color: "blue"
}
const stagiaire = ['anas', 'amine', 'karim', 'samir'];
const clr = ['red', 'blue', 'orange', 'tomato'];
///////////////////////////////////////////////////////////////////////
const liste =
    <ul
        id='liste1'
        // className='red' 
        // style={{listStyleType:"none",color:"blue"}}
        style={style1}
    >
        {
            // stagiaire.map(s => <li>{s}</li> )
            stagiaire.map((s, index) => <li key={index}>{s}</li>)
        }
    </ul>
////////////////////////////////////////////////////////////////////////
// const ListeElements = function () { // compesant
//     return <ul
//         id='liste1'
//         // className='red' 
//         // style={{listStyleType:"none",color:"blue"}}
//         style={style1}
//     >
//         {
//             // stagiaire.map(s => <li>{s}</li> )
//             stagiaire.map((s, index) => <li key={index}>{s}</li>)
//         }
//     </ul>
// }
const ListeElements = function (props) { // compesant
    return (
        <ul
            id='liste1'
            style={props.style}
        >
            {
                props.arr.map((s, index) => <li key={index}>{s}</li>)
            }
        </ul>
    )
}
root.render(
    // <div>
    //     <ListeElements arr={stagiaire} style={style1} />
    //     <ListeElements arr={clr} style={style2} />
    // </div>
    <Products/>
);