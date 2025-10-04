import React from "react";
import ReactDOM from "react-dom/client";
import "./index.css";
import "bootstrap/dist/css/bootstrap.min.css";
import Products from "./tp4/Products";
import ProductsClass from "./ClassComponents/ProductsClass";
import Message from "./ClassComponents/Message";
import Panorama from "./ClassComponents/Panorama";
import JeuDe from "./ClassComponents/JeuDe";

const root = ReactDOM.createRoot(document.getElementById("root"));
const p1 = <p>Berkane</p>;
const style1 = { listStyleType: "none", color: "red" };
const style2 = { listStyleType: "square", color: "blue" };
const stagiaire = ["anas", "amine", "karim", "samir"];
const couleurs = ["red", "blue", "orange", "tomato"];
const liste = (
  <ul
    id="liste1"
    // className='red'
    // style={{listStyleType:"none",color:"blue"}}
    style={style1}
  >
    {stagiaire.map((s, index) => (
      <li key={index}>{s}</li>
    ))}
  </ul>
);
const ListeElements = function (props) {
  // compesant
  return (
    <ul id="liste1" style={props.style}>
      {props.arr.map((s, index) => (
        <li key={index}>{s}</li>
      ))}
    </ul>
  );
};
////////////////////////////////////////////////
const laptop = [
  {
    id: 1,
    title: "PC Portable Gamer HP VICTUS",
    price: "7490 DH",
    thumbnail: "HP16D0195NF.jpg",
  },
  {
    id: 2,
    title: "PC Portable Gamer HP VICTUS",
    price: "2190 DH",
    thumbnail: "HP14424U3EA.jpg",
  },
  {
    id: 3,
    title: "Pc Portable Chromebook Acer",
    price: "3640 DH",
    thumbnail: "NXATHEF002.jpg",
  },
  {
    id: 4,
    title: "PC Portable - HUAWEI",
    price: "1270 DH",
    thumbnail: "HUA6901443442959.jpg",
  },
];
const voitures = [
  {
    id: 1,
    title: "Mercedes-Benz Classe S",
    price: "1,200,000 DH",
    thumbnail: "car1.jpg",
  },
  {
    id: 2,
    title: "BMW Série 7",
    price: "1,150,000 DH",
    thumbnail: "car2.jpg",
  },
  {
    id: 3,
    title: "Audi A8 L",
    price: "1,100,000 DH",
    thumbnail: "car3.jpg",
  },
  {
    id: 4,
    title: "Range Rover Autobiography",
    price: "1,350,000 DH",
    thumbnail: "car4.jpg",
  },
];
const repas = [];
root.render(
  // <div>
  //     <ListeElements arr={stagiaire} style={style1} />
  //     <ListeElements arr={couleurs} style={style2} />
  // </div>

  //   <>
  //     <Products products={laptop} />
  //     {repas.length == 0 ? null : <Products products={repas} />}
  //     <Products products={voitures} />
  //     <ProductsClass listeProducts={laptop} />
  //   </>
  // <Message />
  // <Panorama />
  <JeuDe valeurCachee="3"/>
);
